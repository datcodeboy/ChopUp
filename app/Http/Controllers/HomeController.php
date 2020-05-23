<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Services\MenuService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(MenuService $service)
    {
        $brand_ids = [1];
        
        $menus = $service->getMenuWithCategories($brand_ids);
        return view('home', compact('menus'));
    }
}
