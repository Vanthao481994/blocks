<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use App\Http\Models\Content;
use App\Http\Models\Product;
use App\Http\Models\Sliderproduct;
use App\Http\Models\Ourprice;
use App\Http\Models\Descrip;
use App\Http\Models\Form;
use App\Http\Models\Slide;

class ProductsController extends BaseController {

    private $objform;

//    private $object;
//    private $objectft;
    public function index() {
        $objcontent = new Content();

        $contents = $objcontent->get_content();

        $objproduct = new Product();

        $products = $objproduct->get_product();

        $objslider = new Sliderproduct();

        $sliders = $objslider->get_slider();

        $objours = new Ourprice();

        $ours = $objours->get_our();

        $objdesc = new Descrip();

        $descs = $objdesc->get_desc();
        
        $objslde = new Slide();

        $slides = $objslde->get_slide();




        $data = array(
            'contents' => $contents,
            'products' => $products,
            'sliders' => $sliders,
            'ours' => $ours,
            'descs' => $descs,
             'slides' => $slides,
        );
        return view('products.products', $data);
    }

    public function add_test(Request $request) {
        $input = $request->all();
        $this->objform = new Form();
        $forms = $this->objform->add_test($input);
        return view('products.products');
    }

}
