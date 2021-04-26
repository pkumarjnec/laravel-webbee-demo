<?php


namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Services\MenuService;
use Illuminate\Routing\Controller as BaseController;

class MenuController extends BaseController
{
    /**
     * Assign event service object
     *
     * @var object
     **/
    protected $service;
    /**
     * Create a new login service instance
     *
     * @param MenuService object $eventService login service object
     *
     * @return void
     **/
    public function __construct(MenuService $menuService)
    {
        $this->service = $menuService;
    }

    public function getMenuItems() {
        $menus = $this->service->menuList();
        return $menus;
    }
}
