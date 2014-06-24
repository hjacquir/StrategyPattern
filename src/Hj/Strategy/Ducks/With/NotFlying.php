<?php

/**
 * Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Strategy\Ducks\With;

/**
 * Class NotFlying
 * @package Hj\Strategy\Ducks\With
 */
class NotFlying implements FlyingStrategy
{
    /**
     * @return string
     */
    public function fly()
    {
        return 'I do not fly';
    }
}