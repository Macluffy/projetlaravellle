<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index () {
        $tabtitle=[
            (object)["h3"=>"A Free Bootstrap 4 Business Theme","h1"=>"Business Casual"]
        ];
        $tabnav=[
            (object)["un"=>"HOME","deux"=>"ABOUT","trois"=>"PRODUCTS","quatre"=>"STORE"]
        ];
        $tabfooter="Copyright © Your Website 2019";
        




        return view('template/index',compact('tabtitle','tabnav','tabfooter'));
    }

}
