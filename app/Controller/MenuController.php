<?php

namespace App\Controller;

use App\Model\Menu;
use App\Model\Page;

class MenuController extends BaseDashboardController
{

    public function show()
    {
        $menus = Menu::with(['page'])->get();

        return view('menus.list', ['menus' => $menus]);
    }

    public function create()
    {

        $pages = Page::all();

        view('menus.create', ['pages' => $pages]);
    }

    public function storeCreate()
    {
        $check = $_POST['page'];

        if (!$check) {

            $_SESSION['error'] = 'please select page';

            return redirect("/dashboard/menus");
        }

        $menu = new Menu();

        $menu->name = $_POST['name'];
        $menu->page_id = $_POST['page'];

        $menu->save();

        $_SESSION['success'] = 'menu created';

        return redirect("/dashboard/menus");
    }
}
