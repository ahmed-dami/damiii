<?php

namespace App\Entity;

use App\Repository\WxcvbnnRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WxcvbnnRepository::class)
 */
class Wxcvbnn
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
    private $wxcvbnn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nnnn;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWxcvbnn(): ?string
    {
        return $this->wxcvbnn;
    }

    public function setWxcvbnn(string $wxcvbnn): self
    {
        $this->wxcvbnn = $wxcvbnn;

        return $this;
    }

    public function getNnnn(): ?string
    {
        return $this->nnnn;
    }

    public function setNnnn(string $nnnn): self
    {
        $this->nnnn = $nnnn;

        return $this;
    }
}
