<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\mail\ContactClient;
use App\Models\Client;
use Illuminate\Support\Facades\Mail;

class MyController extends Controller
{

    public function myVal() {
       // session()->put('test','my first session');
        session()->flash('test1','my first session');
        return 'session created';
    }

    public function restoreVal() {
                return 'my session value is  : ' . session('test1');
    }

    public function deleteVal() {
        //session()->forget('test');
        session()->flush();

        return 'session removed';

    }


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
        }

    public function showProfile(string $id)
        {
            $admin=Admin::findOrFail($id);
            return view('showProfile', compact('admin'));
        }

    public function sendClientmail()
        {
            $data=Client::findOrFail(2)->toArray();
            $data['theMessage']='my message content here';
            // dd($data);
            Mail::to($data['email'])->send(new ContactClient($data));
            return 'mail sent!';
            
        }
        

    }

