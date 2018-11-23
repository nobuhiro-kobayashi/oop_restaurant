<?php

namespace OopRestaurant\Customer;

use OopRestaurant\Server\Server;
use OopRestaurant\Menu\Menu;

/**
 * Class Customer
 * @package OopRestaurant\Customer
 */
class Customer
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var Food
     */
    private $food;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * 料理をメニューから注文することができる
     * @param Server $server
     * @param Menu $menu
     */
    public function order(Server $server, Menu $menu): void
    {
        $this->food = $server->receiveOrder($menu);
    }

    /**
     * 料理を食べる
     */
    public function eat(): void
    {
        if (!$this->food) {
            throw new Exception('注文しないと食べられないよ');
        }
        echo "来店者: {$this->name}<br>";
        $this->food->eat();
        echo '<br><br>';
    }
}
