<?php

namespace OopRestaurant\Menu;

include_once dirname(__FILE__) . '/Menu.php';

class SobaMenu implements Menu
{
    /**
     * @var string
     */
    private $name = 'そば';

    public function getName(): string
    {
        return $this->name;
    }
}
