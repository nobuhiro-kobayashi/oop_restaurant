<?php

namespace OopRestaurant\Server;

use OopRestaurant\Chef\Chef;
use OopRestaurant\Menu\Menu;
use OopRestaurant\Food\Food;

include_once dirname(__FILE__) . '/Server.php';

/**
 * Class KobaServer
 * @package OopRestaurant\Server
 */
class KobaServer implements Server
{
    /**
     * @var Chef
     */
    private $chef;

    public function __construct(Chef $chef)
    {
        $this->chef = $chef;
    }

    /**
     * 客から注文を受ける
     * @param Menu $menu
     * @return Food
     */
    public function receiveOrder(Menu $menu): Food
    {
        // シェフに料理を作らせる
        switch ($menu->getName()){
            case 'らーめん':
                return $this->chef->cookRamen();
            case 'そば':
                return $this->chef->cookSoba();
            case 'うどん':
                return $this->chef->cookUdon();
            default:
                throw new Exception('メニューにありません。');
        }
    }
}
