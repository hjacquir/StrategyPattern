<?php

/**
 * Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Strategy\Ducks\With;

/**
 * Interface FlyingStrategy
 * @package Hj\Strategy\Ducks\With
 */
interface FlyingStrategy
{
    const CLASS_NAME = __CLASS__;

    /**
     * @return string
     */
    public function fly();
}