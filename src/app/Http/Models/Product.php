<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Product extends Model {

    protected $table = 'product';
    public $timestamps = false;
    protected $fillable = [
        'product_title',
        'product_heading',
        'product_images',
        'product_tags',
        'product_price',
        'product_names'
    ];
    protected $primaryKey = 'product_id';

    public function get_product() {

        $products = self::all();

        return $products;
    }

    public function add_test($input) {

        $product = self::create([
                    'product_title' => $input['product_title'],
                    'product_heading' => $input['product_heading'],
                    'product_images' => $input['product_images'],
                    'product_tags' => $input['product_tags'],
                    'product_price' => $input['product_price'],
                    'product_names' => $input['product_names'],
        ]);

        return $product;
    }

}
