<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static function getAllProduct()
    {
        return[
            0=>[
                'id'=> 1,
                'name'=>'T-Shirt',
                'price'=>'2850',
                'description'=>'description',
                'image'=>asset('/img/p1.jpg'),
            ],
            1=>[
                'id' =>2,
                'name'=>'New Shari',
                'price'=>'1850',
                'description'=>'description',
                'image'=>asset('/img/p2.jpg'),
            ],
            2=>[
                'id'=>3,
                'name'=>'Fasionable Watch',
                'price'=>'3850',
                'description'=>'description',
                'image'=>asset('/img/p3.jpg'),
            ],
        ];
    }
}
