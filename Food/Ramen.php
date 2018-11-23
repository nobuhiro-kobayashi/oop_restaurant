<?php

namespace OopRestaurant\Food;

include_once dirname(__FILE__) . '/Food.php';

class Ramen implements Food
{
    public function eat(): void
    {
        echo 'らーめん食べるよー';
    }
}

