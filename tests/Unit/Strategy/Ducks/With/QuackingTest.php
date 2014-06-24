<?php

/**
 * Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace tests\Unit\Strategy\Ducks\With;

use Hj\Strategy\Ducks\With\Quacking;
use Hj\Strategy\Ducks\With\QuackingStrategy;

/**
 * Class QuackingTest
 * @package Hj\Tests\Unit\Strategy\With
 *
 * @covers \Hj\Strategy\Ducks\With\Quacking
 */
class QuackingTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Quacking
     */
    private $strategy;

    public function setUp()
    {
        $this->strategy = new Quacking();
    }

    public function testShouldBeAQuackingStrategy()
    {
        $this->assertInstanceOf(QuackingStrategy::CLASS_NAME, $this->strategy);
    }

    public function testShouldQuack()
    {
        $this->assertSame('I quack', $this->strategy->quack());
    }
}