<?php

/**
 * Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace tests\Unit\Strategy\Ducks\With;

use Hj\Strategy\Ducks\With\Flying;
use Hj\Strategy\Ducks\With\FlyingStrategy;

class FlyingTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Flying
     */
    private $strategy;

    public function setUp()
    {
        $this->strategy = new Flying();
    }

    public function testShouldBeAFlyingStrategy()
    {
        $this->assertInstanceOf(FlyingStrategy::CLASS_NAME, $this->strategy);
    }

    public function testShouldFly()
    {
        $this->assertSame('I fly', $this->strategy->fly());
    }
}