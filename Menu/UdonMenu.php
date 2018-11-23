<?php

namespace OopRestaurant\Menu;

include_once dirname(__FILE__) . '/Menu.php';

/**
 * Class UdonMenu
 * @package OopRestaurant\Menu
 */
class UdonMenu implements Menu
{
    /**
     * @var string
     */
    private $name = 'うどん';

    public function getName(): string
    {
        return $this->name;
    }
}
