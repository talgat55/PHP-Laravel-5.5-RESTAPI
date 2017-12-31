<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Http\Resources\ProductsResource; 

class ApiController extends Controller
{
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
    	//return new ProductsResource($test);
    	return Products::all();
    }
}
