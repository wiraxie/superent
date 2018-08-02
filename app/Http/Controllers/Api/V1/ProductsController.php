<?php

namespace App\Http\Controllers\Api\V1;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
   public function getproduct()
   {
	    //return Product::all();
		return product::select('id', 'productname', 'stock', 'totalpoint', 'status')->get();
   }
}
