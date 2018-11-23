<?php

namespace OopRestaurant\Chef;

use OopRestaurant\Food\Soba;
use OopRestaurant\Food\Ramen;
use OopRestaurant\Food\Udon;

/**
 * Interface Chef
 * @package OopRestaurant\Chef
 */
interface Chef
{
    public function cookSoba(): Soba;
    public function cookRamen(): Ramen;
    public function cookUdon(): Udon;
}

