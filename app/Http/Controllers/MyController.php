<?php

namespace App\Http\Controllers;

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


}
