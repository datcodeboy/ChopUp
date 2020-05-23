<?php

namespace App\Services; 

use App\Models\Menu;

class MenuService
{
    Public function getMenuWithCategories(array $brand_ids)
    {
        $categories = Menu::whereIn('brand_id', $brand_ids)
            ->get()
            ->groupBy('category.name');

        return $categories;
    }
}