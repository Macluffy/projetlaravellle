<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index () {

        $tabtitle=[
            (object)["h3"=>"A Free Bootstrap 4 Business Theme","h1"=>"Business Casual"]
        ];
        $tabnav=[
            (object)["un"=>"HOME","deux"=>"ABOUT","trois"=>"PRODUCTS","quatre"=>"STORE"]
        ];
        $tabfooter="Copyright © Your Website 2019";
        $tabproducts=[
            (object)["img1"=>"products-01.jpg","img2"=>"products-02.jpg","img3"=>"products-03.jpg","p2"=>"Blended to Perfection","p3"=>"Coffees","p4"=>"Teas","p5"=>"We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.","p6"=>"Delicious Treats, Good Eats","p7"=>"Bakery ","p8"=>"Kitchen","p9"=>"Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.","p10"=>"From Around the World","p11"=>"Bulk Speciality Blends","p12"=>"Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details."]
        ];


        return view('pages/products',compact('tabtitle','tabnav','tabfooter','tabproducts'));
    }
    
}
