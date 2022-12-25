<?php

namespace FlowerAllure\ComposerTrain\Tests;

use Flowerallure\ComposerTrain\App\Hello;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    /**
     * @covers \Flowerallure\ComposerTrain\App\Hello::south
     * @return void
     */
    public function testWorld(): void
    {
        $this->assertEquals('World!', Hello::south());
    }
}
