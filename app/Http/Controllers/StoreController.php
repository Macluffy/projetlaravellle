<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index () {

        $tabtitle=[
            (object)["h3"=>"A Free Bootstrap 4 Business Theme","h1"=>"Business Casual"]
        ];
        $tabnav=[
            (object)["un"=>"HOME","deux"=>"ABOUT","trois"=>"PRODUCTS","quatre"=>"STORE"]
        ];
        $tabfooter="Copyright © Your Website 2019";
        $tabstore=[
            (object)[
            "img1"=>"about.jpg",
            "p2"=>"Come On In",
            "p3"=>"We're Open",
            "p4"=>"Sunday",
            "p5"=>"Closed",
            "p6"=>"Monday",
            "p7"=>"7:00 AM to 8:00 PM",
            "p8"=>"Tuesday",
            "p9"=>"7:00 AM to 8:00 PM",
            "p10"=>"Wednesday",
            "p11"=>"7:00 AM to 8:00 PM",
            "p12"=>"Thursday",
            "p13"=>"7:00 AM to 8:00 PM",
            "p14"=>"Friday",
            "p15"=>"7:00 AM to 8:00 PM",
            "p16"=>"Saturday",
            "p17"=>"9:00 AM to 5:00 PM",
            "p18"=>"1116 Orchard Street",
            "p19"=>"Golden Valley, Minnesota",
            "p20"=>"Call Anytime",
            "p21"=>"(317) 585-8468",
            "p22"=>"Strong Coffee, Strong Roots",
            "p23"=>"About Our Cafe",
            "p24"=>"Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.",
            "p25"=>"We guarantee that you will fall in",
            "p26"=>"lust",
            "p27"=>"with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time."]
        ];


        return view('pages/store',compact('tabtitle','tabnav','tabfooter','tabstore'));
    }
    
}
