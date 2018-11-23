<?php

namespace OopRestaurant\Chef;

use OopRestaurant\Food\Soba;
use OopRestaurant\Food\Ramen;
use OopRestaurant\Food\Udon;

include_once dirname(__FILE__) . '/Chef.php';
include_once dirname(__FILE__) . '/../Food/Soba.php';
include_once dirname(__FILE__) . '/../Food/Ramen.php';
include_once dirname(__FILE__) . '/../Food/Udon.php';

/**
 * Class KawagoeChef
 * @package OopRestaurant\Chef
 */
class KawagoeChef implements Chef
{
    /**
     * そばを作る
     * @return Soba
     */
    public function cookSoba(): Soba
    {
        return new Soba();
    }

    /**
     * らーめんを作る
     * @return Ramen
     */
    public function cookRamen(): Ramen
    {
        return new Ramen();
    }

    /**
     * うどんを作る
     * @return Udon
     */
    public function cookUdon(): Udon
    {
        return new Udon();
    }
}

