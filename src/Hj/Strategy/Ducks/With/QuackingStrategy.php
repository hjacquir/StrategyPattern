<?php

/**
 * Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Strategy\Ducks\With;

/**
 * Interface QuackingStrategy
 * @package Hj\Strategy\Ducks\With
 */
interface QuackingStrategy
{
    /**
     * @return string
     */
    public function quack();
}