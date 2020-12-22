<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\CategoryProduct;

class ProductController extends Controller
{
    protected $limitPage = 10;

    public function index(Request $request)
    {
    	try {
    		// Set where condition
    		$where = [];

    		// Set Datas
			$datas = Product::getFullData($where)->paginate($this->limitPage);
    		
    		// Get Catgeory
    		$categories = CategoryProduct::all();
    		if($request->ajax()) {
    			return view('product.load-data', ['datas' => $datas]);
    		}

    		return view('product.index', ['datas' => $datas, 'categories' => $categories]);
    	}
    	catch(\Exception $e) {
			// return redirect()->back()->with('message', $e->getMessage());
			die($e->getMessage());
    	}
    }

    public function filter(Request $request) {
    	try {
    		$where = [];
    		$whereIn = [];
    		$colWhereIn = 'category_id';
    		$datas = [];

    		// If user search
    		if(!empty($request['search'])) {
    			$search = filter_var( strip_tags(trim($request['search'])), FILTER_SANITIZE_STRING );
    			$where[] = ['product.name', 'LIKE', '%'.$search.'%'];

    			$datas = Product::getFullData($where);
    		}

    		// if user check category
    		if(!empty($request['categories'])) {
    			$colWhereIn = 'product.category_id';
    			for($i = 0;$i < count($request['categories']);$i++) {
    				$whereIn[] = $request['categories'][$i];
    			}
    			$datas = Product::getByCategory($where, $colWhereIn, $whereIn);
    		}

    		// If User filter price
    		if(!empty($request['price'])) {
    			$price = $request['price'] == 'low' ? 'asc' : 'desc';
    			$datas = $datas->orderBy('product.harga', $price)->get();
    		}
    		else {
    			$datas = $datas->paginate($this->limitPage);
    		}

    		return view('product.load-data', ['datas' => $datas]);
    	}
    	catch(\Exception $e) {
    		return response()->json([
    			'message' => $e->getMessage()
    		], 500);
    	}
    }
}


