<?php

include_once dirname(__FILE__) . '/Chef/KawagoeChef.php';
include_once dirname(__FILE__) . '/Server/KobaServer.php';
include_once dirname(__FILE__) . '/Customer/Customer.php';
include_once dirname(__FILE__) . '/Menu/RamenMenu.php';
include_once dirname(__FILE__) . '/Menu/UdonMenu.php';
include_once dirname(__FILE__) . '/Menu/SobaMenu.php';

use OopRestaurant\Chef\KawagoeChef;
use OopRestaurant\Server\KobaServer;
use OopRestaurant\Customer\Customer;
use OopRestaurant\Menu\RamenMenu;
use OopRestaurant\Menu\SobaMenu;
use OopRestaurant\Menu\UdonMenu;

try {
    // シェフ召喚
    $chef = new KawagoeChef();

    // ウェイター召喚
    $server = new KobaServer($chef);

    // 世界の渡部来店
    $watabe = new Customer('世界の渡部');
    $watabe->order($server, new RamenMenu());
    $watabe->eat();

    // まいうー石ちゃん来店
    $ishichan = new Customer('まいうー石ちゃん');
    $ishichan->order($server, new UdonMenu());
    $ishichan->eat();

    // ギャル曽根来店
    $galSone = new Customer('ギャル曽根');
    $galSone->order($server, new SobaMenu());
    $galSone->eat();

} catch (\Exception $e) {
    echo 'エラー: ' . $e->getMessage();
}

