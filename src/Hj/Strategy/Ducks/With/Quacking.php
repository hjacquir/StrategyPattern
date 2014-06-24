<?php

/**
 * Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Strategy\Ducks\With;

/**
 * Class Quacking
 * @package Hj\Strategy\Ducks\With
 */
class Quacking implements QuackingStrategy
{
    /**
     * @return string
     */
    public function quack()
    {
        return 'I quack';
    }
}