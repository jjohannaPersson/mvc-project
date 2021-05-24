<?php

namespace App\Entity;

use App\Repository\HistogramRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HistogramRepository::class)
 */
class Histogram
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="array")
     */
    private $points = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPoints(): ?array
    {
        return $this->points;
    }

    public function setPoints(array $points): self
    {
        $this->points = $points;

        return $this;
    }
}
