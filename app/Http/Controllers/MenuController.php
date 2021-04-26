<?php


namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Services\MenuService;
use Illuminate\Routing\Controller as BaseController;

class MenuController extends BaseController
{
    /**
     * Assign Menu service object
     *
     * @var object
     **/
    protected $service;
    /**
     * Create a new menu service instance
     *
     * @param MenuService object $menuService login service object
     *
     * @return void
     **/
    public function __construct(MenuService $menuService)
    {
        $this->service = $menuService;
    }

    /**
     * Get Menu Items
     *
     * @return array
     **/
    public function getMenuItems() {
        $menus = $this->service->menuList();
        return $menus;
    }
}
