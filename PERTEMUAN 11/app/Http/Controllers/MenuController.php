<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Halaman Menu
     */
    public function index()
    {
        $menuItems = [
            'coffee' => [
                'title' => 'Coffee Series',
                'items' => [
                    ['name' => 'Kopi Susu Siura', 'price' => 13000],
                    ['name' => 'Kopi Susu Kantoran', 'price' => 13000],
                    ['name' => 'Kopi Susu Klasik', 'price' => 13000],
                    ['name' => 'Butter Roasted Sea Salt', 'price' => 23000],
                    ['name' => 'Butterscotch Sea Salt', 'price' => 23000],
                    ['name' => 'Creamy Aren Latte', 'price' => 17000],
                    ['name' => 'Caramel Macchiato', 'price' => 20000],
                    ['name' => 'Vanilla Latte', 'price' => 13000],
                    ['name' => 'Matcha Latte', 'price' => 13000],
                    ['name' => 'Ice Americano', 'price' => 13000],
                ]
            ],
            'milk' => [
                'title' => 'Milk Series',
                'items' => [
                    ['name' => 'Matcha Crumbel', 'price' => 18000],
                    ['name' => 'Choco Royal', 'price' => 13000],
                    ['name' => 'Creamy Matcha', 'price' => 13000],
                    ['name' => 'Taro Milky', 'price' => 13000],
                    ['name' => 'Mango Milky', 'price' => 13000],
                    ['name' => 'Avocado Milky', 'price' => 13000],
                    ['name' => 'Korean Strawberry', 'price' => 13000],
                ]
            ],
            'tea' => [
                'title' => 'Tea Series',
                'items' => [
                    ['name' => 'Thai Tea', 'price' => 10000],
                    ['name' => 'Greentea', 'price' => 10000],
                    ['name' => 'Milk Tea', 'price' => 10000],
                    ['name' => 'Lecy Tea', 'price' => 10000],
                    ['name' => 'Lemon Tea', 'price' => 10000],
                ]
            ],
            'berries' => [
                'title' => 'Beries Series',
                'items' => [
                    ['name' => 'Banana O Berry', 'price' => 20000],
                    ['name' => 'Choco Berry', 'price' => 18000],
                    ['name' => 'Matcha Berry', 'price' => 18000],
                ]
            ],
            'snack' => [
                'title' => 'Snack',
                'items' => [
                    ['name' => 'French Fries', 'price' => 15000],
                    ['name' => 'Cireng Crispy Sambal Rujak', 'price' => 15000],
                    ['name' => 'Tempe Mendoan', 'price' => 20000],
                ]
            ]
        ];

        return view('menu.index', [
            'title' => 'Menu',
            'menuItems' => $menuItems
        ]);
    }
}