<?php

namespace OopRestaurant\Food;

include_once dirname(__FILE__) . '/Food.php';

class Udon implements Food
{
    public function eat(): void
    {
        echo 'うどん食べるよー';
    }
}
