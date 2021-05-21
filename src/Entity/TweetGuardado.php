<?php

namespace App\Entity;

use App\Repository\TweetGuardadoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TweetGuardadoRepository::class)
 */
class TweetGuardado
{
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id;

    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    private $idTweet;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $idUser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdTweet(): ?string
    {
        return $this->idTweet;
    }

    public function setIdTweet(string $idTweet): self
    {
        $this->idTweet = $idTweet;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }
}
