<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VocardularyWordRepository")
 */
class VocardularyWord
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $word;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imgpath;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $audiopath;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWord(): ?string
    {
        return $this->word;
    }

    public function setWord(string $word): self
    {
        $this->word = $word;

        return $this;
    }

    public function getImgpath(): ?string
    {
        return $this->imgpath;
    }

    public function setImgpath(string $imgpath): self
    {
        $this->imgpath = $imgpath;

        return $this;
    }

    public function getAudiopath(): ?string
    {
        return $this->audiopath;
    }

    public function setAudiopath(string $audiopath): self
    {
        $this->audiopath = $audiopath;

        return $this;
    }
}
