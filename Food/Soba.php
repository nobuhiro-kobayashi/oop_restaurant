<?php

namespace OopRestaurant\Food;

include_once dirname(__FILE__) . '/Food.php';

/**
 * Class Soba
 * @package OopRestaurant\Food
 */
class Soba implements Food
{
    public function eat(): void
    {
        echo 'そば食べるよー';
    }
}
