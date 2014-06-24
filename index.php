<?php

/**
 * Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

require_once 'vendor/autoload.php';

use Hj\Strategy\Ducks\With\Colver;
use Hj\Strategy\Ducks\With\Flying;
use Hj\Strategy\Ducks\With\Quacking;

$colver = new Colver();
$colver->setStrategyFlying(new Flying());
$colver->setStrategyQuacking(new Quacking());

echo $colver->describe() . ', ' . $colver->fly() . ', '. $colver->quack();
 