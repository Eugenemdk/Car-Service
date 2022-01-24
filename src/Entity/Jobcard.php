<?php

namespace App\Entity;

use App\Repository\JobcardRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JobcardRepository::class)
 */
class Jobcard
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateTimeIn;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateTimeOut;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateTimeEst;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateTimeIn(): ?\DateTimeInterface
    {
        return $this->dateTimeIn;
    }

    public function setDateTimeIn(?\DateTimeInterface $dateTimeIn): self
    {
        $this->dateTimeIn = $dateTimeIn;

        return $this;
    }

    public function getDateTimeOut(): ?\DateTimeInterface
    {
        return $this->dateTimeOut;
    }

    public function setDateTimeOut(?\DateTimeInterface $dateTimeOut): self
    {
        $this->dateTimeOut = $dateTimeOut;

        return $this;
    }

    public function getDateTimeEst(): ?\DateTimeInterface
    {
        return $this->dateTimeEst;
    }

    public function setDateTimeEst(?\DateTimeInterface $dateTimeEst): self
    {
        $this->dateTimeEst = $dateTimeEst;

        return $this;
    }
}
