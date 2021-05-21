<?php

declare(strict_types=1);

namespace App\Controller;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

/**
 * Test cases for the Game21Controller.
 */
class ControllerGame21ControllerTest extends TestCase
{
    /**
    * Try to create the controller class.
    */
    public function testCreateTheControllerClass()
    {
        $controller = new Game21Controller();
        $this->assertInstanceOf("\App\Controller\Game21Controller", $controller);
    }
}
