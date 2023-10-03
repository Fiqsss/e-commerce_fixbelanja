<?php

namespace App\Livewire\Page;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Http\Request;

class Shop extends Component
{
    public $search;


    public function render()
    {
        return view('livewire.page.shop', ['products' => Product::all()]);
    }


}