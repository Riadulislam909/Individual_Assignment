<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductImage;
use App\Http\Controllers\Controller;

use Image;



class PagesController extends Controller
{
    public function index(){
        return view('backend.pages.index');
    }
    

}
