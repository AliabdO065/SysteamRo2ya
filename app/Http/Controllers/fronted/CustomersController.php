<?php

namespace App\Http\Controllers\fronted;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;
use App\Http\Middleware\SetLocale;

class CustomersController extends Controller
{


     //helper function
    public function getContent($row,$tabel){
        $slide = $tabel::find($row);
        $slides = json_decode($slide, true);
        $contentasstring =  $slides['content'];
        $content = explode('#xt#', $contentasstring);
        return $content;
    }
    public function getit($row,$tabel){
        $slide = $tabel::find($row);
        $slides = json_decode($slide, true);
        $contentasstring =  $slides['content'];
        $content = explode('#x#', $contentasstring);
        $item = [];
        foreach ($content as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $item[$key] = $value;
        }
        return $item;
    }
    public function getArray($row,$tabel,$i){
        $slide = $tabel::find($row);
        $slides = json_decode($slide, true);
        $contentasstring =  $slides['content'];
        $content = explode('#xt#', $contentasstring);

        $string = $content[$i];
        $pairs = explode('#x#', $string);
        $item = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $item[$key] = $value;
        }
        return $item;
    }

    public function switch(Request $request , $lang)
    {
        app()->setLocale($lang);
        session()->put('locale' , $lang);
        return redirect()->back();
    }


    public function index(){
        $intro = $this->getit(1, Customers::class);
        $about = $this->getit(2, Customers::class);
        $service = $this->getit(3, Customers::class);
        $excellence = $this->getit(4, Customers::class);
        return view('fronted.customers.index',compact('intro','about','service','excellence'));
    }

    public function ourwork(){
        $images = $this->getContent(9, Customers::class);
        $fields = $this->getContent(10, Customers::class);
        $comments = $this->getContent(11, Customers::class);
        return view('fronted.customers.ourwork',compact('images','fields','comments'));
    }

    public function articles(){
        $articles = $this->getContent(12, Customers::class);
        $purvies = $this->getContent(13, Customers::class);
        return view('fronted.customers.articles',compact('purvies','articles'));
    }

    public function engaz(){
        $aboutus = $this->getit(6, Customers::class);
        $services = $this->getContent(7, Customers::class);
        $whyus = $this->getit(8, Customers::class);
        return view('fronted.customers.engaz' , compact('aboutus','services','whyus'));
    }

    public function articleDetail($i){
        $articles = $this->getContent(12, Customers::class);
        if($i < count($articles)){
        $item = $this->getArray(12, Customers::class,$i);
        }else{
            $item = '';
        }
        if($item == '') {
            $articles = $this->getContent(12, Customers::class);
            $purvies = $this->getContent(13, Customers::class);
                return view('fronted.customers.articles',compact('purvies','articles'));
        } 

        $articles = $this->getContent(12, Customers::class);
        $purvies = $this->getContent(13, Customers::class);
        return view('fronted.customers.articl',compact('item','purvies','articles'));
    }

}
