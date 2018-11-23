<?php

namespace OopRestaurant\Menu;

include_once dirname(__FILE__) . '/Menu.php';

/**
 * Class RamenMenu
 * @package OopRestaurant\Menu
 */
class RamenMenu implements Menu
{
    /**
     * @var string
     */
    private $name = 'らーめん';

    public function getName(): string
    {
        return $this->name;
    }
}

