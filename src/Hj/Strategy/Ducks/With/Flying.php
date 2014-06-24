<?php

/**
 * Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Strategy\Ducks\With;

/**
 * Class Flying
 * @package Hj\Strategy\Ducks\With
 */
class Flying implements FlyingStrategy
{
    /**
     * @return string
     */
    public function fly()
    {
        return 'I fly';
    }
}