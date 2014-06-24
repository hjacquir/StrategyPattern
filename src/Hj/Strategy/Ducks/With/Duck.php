<?php

/**
 * Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Strategy\Ducks\With;

/**
 * Class Duck
 * @package Hj\Strategy\Ducks\With
 */
abstract class Duck
{
    /**
     * @var FlyingStrategy
     */
    protected $strategyFlying;

    /**
     * @var QuackingStrategy
     */
    protected $strategyQuacking;

    /**
     * @return string
     */
    public function fly()
    {
        return $this->strategyFlying->fly();
    }

    /**
     * @return string
     */
    public function quack()
    {
        return $this->strategyQuacking->quack();
    }

    /**
     * @param FlyingStrategy $strategyFlying
     */
    public function setStrategyFlying(FlyingStrategy $strategyFlying)
    {
        $this->strategyFlying = $strategyFlying;
    }

    /**
     * @param QuackingStrategy $strategyQuacking
     */
    public function setStrategyQuacking(QuackingStrategy $strategyQuacking)
    {
        $this->strategyQuacking = $strategyQuacking;
    }

    /**
     * @return string
     */
    abstract public function describe();
}