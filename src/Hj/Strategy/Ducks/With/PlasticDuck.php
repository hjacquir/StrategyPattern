<?php

/**
 * Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Strategy\Ducks\With;

/**
 * Class PlasticDuck
 * @package Hj\Strategy\Ducks\With
 */
class PlasticDuck extends Duck
{
    /**
     * @return string
     */
    public function describe()
    {
        return 'I am a plastic duck';
    }
}