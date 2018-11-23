<?php

namespace OopRestaurant\Server;

use OopRestaurant\Menu\Menu;
use OopRestaurant\Food\Food;

/**
 * Interface Server
 * @package OopRestaurant\Server
 */
interface Server
{
    public function receiveOrder(Menu $menu): Food;
}

