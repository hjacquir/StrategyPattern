<?php

/**
 * Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Strategy\Ducks\With;

/**
 * Class NotQuacking
 * @package Hj\Strategy\Ducks\With
 */
class NotQuacking implements QuackingStrategy
{
    /**
     * @return string
     */
    public function quack()
    {
        return 'I do not quack';
    }
}