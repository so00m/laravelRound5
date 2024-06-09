<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function my_data() {
        return view('test');
    }

    public function recieveData(Request $request) {
        $fname= $request->fname;
        $lname= $request->lname;
        //return $fname .$lname ;   //غير شائع الطريقة دي
        return view('form1Data' , compact('fname' ,'lname' ));  //دالة كومباكت بتبعت البيانات دي للفيو اللي انا حددته
    }

    public function showCategory(string $id)
    {
        $category=Category::findOrFail($id);
        
        $products = $category->products()->get();
       
        return view('showCategory', compact('category' ,'products'));


          //$products=ProductCategory::where('category_id',$id)->get();
    
       
            //$productIds = ProductCategory::where('category_id', $id)->pluck('product_id');
    
          
          //  $products = $category->products->get();
    
            
        
        }







    }

