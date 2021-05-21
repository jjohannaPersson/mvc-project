<?php

declare(strict_types=1);

namespace App\Controller;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

/**
 * Test cases for the DiceController.
 */
class ControllerDiceControllerTest extends TestCase
{
    /**
    * Try to create the controller class.
    */
    public function testCreateTheControllerClass()
    {
        $controller = new DiceController();
        $this->assertInstanceOf("\App\Controller\DiceController", $controller);
    }
}
