<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Slide extends Model {

    protected $table = 'slide';
    public $timestamps = false;
    protected $fillable = [
        'slide_title',
        'slide_heading',
         'slide_images',
       
    ];
    protected $primaryKey = 'slide_id';

    public function get_slide() {

        $slides = self::all();

        return $slides;
    }

    public function add_test($input) {

        $slide = self::create([
                   
                    'slide_title' => $input['slide_title'],
                    'slide_heading' => $input['slide_heading'],
                    'slide_images' => $input['slide_images'],  
        ]);

        return $slide;
    }

}















