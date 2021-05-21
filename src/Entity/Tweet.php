<?php

namespace App\Entity;

use App\Repository\TweetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TweetRepository::class)
 */
class Tweet
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $juego;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $hashtag;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $url;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    public $texto;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $imagen;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $video;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $usuario;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $fotoUsuario;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    public $contgamepre;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    public $contgamepost;

    /**
     * @ORM\Column(type="string")
     */
    public $idTweet;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fecha;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJuego(): ?string
    {
        return $this->juego;
    }

    public function setJuego(string $juego): self
    {
        $this->juego = $juego;

        return $this;
    }

    public function getHashtag(): ?string
    {
        return $this->hashtag;
    }

    public function setHashtag(string $hashtag): self
    {
        $this->hashtag = $hashtag;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getTexto(): ?string
    {
        return $this->texto;
    }

    public function setTexto(?string $texto): self
    {
        $this->texto = $texto;

        return $this;
    }

    public function getImagen(): ?string
    {
        return $this->imagen;
    }

    public function setImagen(?string $imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(?string $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function getUsuario(): ?string
    {
        return $this->usuario;
    }

    public function setUsuario(string $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getFotoUsuario(): ?string
    {
        return $this->fotoUsuario;
    }

    public function setFotoUsuario(?string $fotoUsuario): self
    {
        $this->fotoUsuario = $fotoUsuario;

        return $this;
    }

    public function getContgamepre(): ?int
    {
        return $this->contgamepre;
    }

    public function setContgamepre(int $contgamepre): self
    {
        $this->contgamepre = $contgamepre;

        return $this;
    }

    public function getContgamepost(): ?int
    {
        return $this->contgamepost;
    }

    public function setContgamepost(int $contgamepost): self
    {
        $this->contgamepost = $contgamepost;

        return $this;
    }

    public function getIdTweet(): ?string
    {
        return $this->idTweet;
    }

    public function setIdTweet(int $idTweet): self
    {
        $this->idTweet = $idTweet;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }
}
