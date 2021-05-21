<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use TwitterAPIExchange;
use Abraham\TwitterOAuth\TwitterOAuth;
use Endroid\Twitter\Client;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use App\Entity\Tweet;

class TweetController extends AbstractController
{



    /**
     * @Route("/tweet", name="tweet", methods={"GET"})
     */
    public function index(Request $request): Response
    {

        // $connection = new TwitterOAuth('UZmEVwRx4fgWKLuqDRdA7p837', CONSUMER_SECRET, $access_token, $access_token_secret);
        // $content = $connection->get("account/verify_credentials");
        $hashtag = $request->query->get('data')["hashtag"];
        $juego = $request->query->get('data')["juego"];

        $apiKey = 'wbjHjr4PjAcaq1tBrgUFQYCP9';
        $apiSecretKey = 'm286LckljMQLiEHq3Oo2vUrQnRL1AaE08UWr6yKIqq5eCRjAEt';
        $bearerToken = 'AAAAAAAAAAAAAAAAAAAAAItHNQEAAAAA1ndkoIdsNsJ9YMny004kMmId7Qo%3DB6f17bX07gv7swqw7ePNTo2EHEhUO39hLNcPvDm2VxjZtNbSON';
        $accessToken = '770463027019804672-hVsUs6I29gqKjKq8LdpiRHKYd7siVvO';
        $accessTokenSecret = '9j1Nr3FN7A5HFdRYw50fhAglKFxcQWi9LztLzJXaSQ2Te';

        $connection = new TwitterOAuth($apiKey, $apiSecretKey, $accessToken, $accessTokenSecret);
        $content = $connection->get("account/verify_credentials");
        $statuses = $connection->get("search/tweets", ["exclude_replies" => true, "q" => "%23" . $hashtag . "&exclude:retweets AND -filter:replies", "count" => 100, "tweet_mode" => "extended"]);
        foreach ($statuses->statuses as $estados) {
            //print_r($estados);
            //MIRO SI EXISTE EL TWEET EN LA BBDD
            $existeTweet = $this->getDoctrine()->getRepository(Tweet::class)->findOneBy(['idTweet' => $estados->id, "hashtag" => $hashtag]);

            if (!isset($existeTweet)) {
                $entityManager = $this->getDoctrine()->getManager();
                $tweet = new Tweet();
                $tweet->setJuego($juego); //pasarlo por param
                $tweet->setHashtag($hashtag); //pasarlo por param
                $fecha = date_create_from_format('D M m H:i:s e Y', $estados->created_at);
                $tweet->setFecha($fecha);
                if (isset($estados->entities->media)) {
                    foreach ($estados->entities->media as $media) {
                        if ($media->type == 'photo') {
                            $photo = $media->media_url;
                            $tweet->setImagen($photo);
                        }
                    }
                }
                if (isset($estados->extended_entities->media)) {
                    // si hay video guardo el que tenga mayor bitrate y sea tipo mp4
                    foreach ($estados->extended_entities->media as $media) {
                        if ($media->type == 'video') {
                            $maxBitrate = 0;
                            foreach ($media->video_info->variants as $key => $value) {
                                if ($media->video_info->variants[$key]->content_type == 'video/mp4') {
                                    if ($maxBitrate < $media->video_info->variants[$key]->bitrate) {
                                        $maxBitrate = $media->video_info->variants[$key]->bitrate;
                                        $indice = $key;
                                    }
                                }
                            }
                            $video = $media->video_info->variants[$indice]->url;
                            $tweet->setVideo($video);
                        }
                    }
                }
                if (isset($estados->full_text)) {
                    $tweet->setTexto($estados->full_text);
                }
                if (isset($estados->user)) {
                    $tweet->setUsuario($estados->user->screen_name);
                }
                if (isset($estados->id)) {
                    $tweet->setIdTweet($estados->id_str);
                    $tweet->setUrl("https://twitter.com/i/web/status/" . $estados->id_str);
                }

                $entityManager->persist($tweet);
                $entityManager->flush();
            }
        }

        $repository = $this->getDoctrine()->getRepository(Tweet::class);
        $tweets = $repository->findBy(
            ['hashtag' => $hashtag],
            ['fecha' => 'DESC']
        );
        //print_r($tweets);
        if ($request->isXmlHttpRequest()) {
            return new Response(json_encode($tweets, true));
        }
    }
}
