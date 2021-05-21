<?php

namespace App\Entity;

use App\Repository\PersonajeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonajeRepository::class)
 */
class Personaje
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $juego;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombreCompleto;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $hashtag;

    /**
     * @ORM\Column(type="integer")
     */
    private $dificultad;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descripcionHeader;

    /**
     * @ORM\Column(type="string", length=600, nullable=true)
     */
    private $descripcionBody;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $discord;

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

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getNombreCompleto(): ?string
    {
        return $this->nombreCompleto;
    }

    public function setNombreCompleto(string $nombreCompleto): self
    {
        $this->nombreCompleto = $nombreCompleto;

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

    public function getDificultad(): ?int
    {
        return $this->dificultad;
    }

    public function setDificultad(int $dificultad): self
    {
        $this->dificultad = $dificultad;

        return $this;
    }

    public function getDescripcionHeader(): ?string
    {
        return $this->descripcionHeader;
    }

    public function setDescripcionHeader(?string $descripcionHeader): self
    {
        $this->descripcionHeader = $descripcionHeader;

        return $this;
    }

    public function getDescripcionBody(): ?string
    {
        return $this->descripcionBody;
    }

    public function setDescripcionBody(?string $descripcionBody): self
    {
        $this->descripcionBody = $descripcionBody;

        return $this;
    }

    public function getDiscord(): ?string
    {
        return $this->discord;
    }

    public function setDiscord(?string $discord): self
    {
        $this->discord = $discord;

        return $this;
    }
}
