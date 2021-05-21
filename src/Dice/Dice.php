<?php

declare(strict_types=1);

namespace App\Dice;

/**
 * Class Dice.
 */
class Dice
{
    private $roll = 0;
    private $faces = 6;

    public function __construct(int $faces = 6)
    {
        $this->faces = $faces;
    }

    public function roll(): int
    {
        $this->roll = rand(1, $this->faces);

        return $this->roll;
    }

    public function getLastRoll(): int
    {
        return $this->roll;
    }
}
