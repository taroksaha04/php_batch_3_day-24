<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    private $city;
    private $mobile;
    private $data=[];
    private $products;
    public function index(){
        //return 'Hello';
        return view('test');

    }
    public function bitm(){
//        $this->city = 'Dhaka';
//        $this->mobile = '0171234567891';
//        $this->data = [10,20,30,'BITM',12.5,true];
        $this->data = [
            0=> [
                'name' => 'Hasib',
                'city' =>'Dhaka',
                 'mobile'=>'123456',
                ],
            1=> [
            'name' => 'tarok',
            'city' =>'luxmibazar',
            'mobile'=>'01723456784',
                ],
            2=> [
                'name' => 'abul',
                'city' =>'Barishal',
                'mobile'=>'0188888888',
                ]
        ];
        //for sending a value
        //for sending multiple value
//        return view('demo',[
//           'a' => $this->city,
//           'topu' => $this->mobile,
//           'fahim' =>$this->data
//        ]);

        //for sending 2D array value
        return view('demo',[
            'fahim' =>$this->data

        ]);
    }
    public function about(){
        $this->products = Product::getAllProduct();
        //return $this->products;
        return view('about',['products' => $this->products]);
    }
    public function contact(){
        return view('contact');

    }
    public function detail($asa)
    {
        //return $asa;
        $this->products = Product::getAllProduct();
        foreach ($this->products as $item)
        {
            if($item['id'] == $asa)
            {
                return view('detail',['data' =>$item]);
            }
        }

    }
}
