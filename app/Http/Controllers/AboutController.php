<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index () {

        $tabtitle=[
            (object)["h3"=>"A Free Bootstrap 4 Business Theme","h1"=>"Business Casual"]
        ];
        $tabnav=[
            (object)["un"=>"HOME","deux"=>"ABOUT","trois"=>"PRODUCTS","quatre"=>"STORE"]
        ];
        $tabfooter="Copyright © Your Website 2019";
        $tababout=[
            (object)["img1"=>"about.jpg","p2"=>"Strong Coffee, Strong Roots","p3"=>"About Our Cafe","p4"=>"Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.","p5"=>"We guarantee that you will fall in","p6"=>"lust","p7"=>"with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time."]
        ];


        return view('pages/about',compact('tabtitle','tabnav','tabfooter','tababout'));
    }
    
    
}
