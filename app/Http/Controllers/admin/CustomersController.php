<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CustomersController extends Controller
{

//helper function 
    public function getContent($row){
        $slide = Customers::find($row);
        $slides = json_decode($slide, true);
        return $slides['content'];
    }

    public function getinfo($row,$tabel){
        $slide = $tabel::find($row);
        $slides = json_decode($slide, true);
        $contentasstring =  $slides['content'];
        $content = explode('#xt#', $contentasstring);
        return $content;
    }

    


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // // main
    // intro
    public function intro()
    {
        $content = $this->getContent(1);
        return view('dashboard.customers.home.intro.index',compact('content'));
    }
    public function updateintro(Request $request)
    {
            $request->validate([
                'name' => 'required','header' => 'required','wordheader' => 'required',
            ]);
            $newcontent =  'name=#='.$request->name.'#x#'.'header=#='.$request->header.'#x#'.'wordheader=#='.$request->wordheader;
                if ($request->file('img')) {
                    $file = $request->file('img');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/customers'), $filename);
                    $path = 'images\customers\\' . $filename;
                    $newcontent.='#x#'.'img=#='.$path;

                    $filePath = public_path($request->image);
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img=#='.$request->image;
                }

                
                if ($request->file('imgl')) {
                    $file = $request->file('imgl');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/customers'), $filename);
                    $path = 'images\customers\\' . $filename;
                    $newcontent.='#x#'.'imgl=#='.$path;

                    $filePath = public_path($request->imagel);
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'imgl=#='.$request->imagel;
                }

                
            Customers::find(1)->update(['content' => $newcontent] );
            return redirect()->route('dashboard.customers');
    }


    //about 
    public function about()
    {
        $content = $this->getContent(2);
        return view('dashboard.customers.home.about.index',compact('content'));
    }

    public function updateabout(Request $request)
    {
            $request->validate([
                'header1' => 'required','wordheader1' => 'required',
                'header2' => 'required','wordheader2' => 'required',
                'header3' => 'required','wordheader3' => 'required',
            ]);
            $newcontent = 'header1=#='.$request->header1.'#x#'.'wordheader1=#='.$request->wordheader1.'#x#'
                        .'header2=#='.$request->header2.'#x#'.'wordheader2=#='.$request->wordheader2.'#x#'
                        .'header3=#='.$request->header3.'#x#'.'wordheader3=#='.$request->wordheader3;
                
                if ($request->file('img1')) {
                    $file = $request->file('img1');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/customers'), $filename);
                    $path = 'images\customers\\' . $filename;
                    $newcontent.='#x#'.'img1=#='.$path;

                    $filePath = public_path($request->image1);
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img1=#='.$request->image1;
                }
                if ($request->file('img2')) {
                    $file = $request->file('img2');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/customers'), $filename);
                    $path = 'images\customers\\' . $filename;
                    $newcontent.='#x#'.'img2=#='.$path;

                    $filePath = public_path($request->image2); 
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img2=#='.$request->image2;
                }
                if ($request->file('img3')) {
                    $file = $request->file('img3');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/customers'), $filename);
                    $path = 'images\customers\\' . $filename;
                    $newcontent.='#x#'.'img3=#='.$path;
        
                    $filePath = public_path($request->image3); 
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img3=#='.$request->image3;
                }
                if ($request->file('img4')) {
                    $file = $request->file('img4');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/customers'), $filename);
                    $path = 'images\customers\\' . $filename;
                    $newcontent.='#x#'.'img4=#='.$path;
        
                    $filePath = public_path($request->image4); 
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img4=#='.$request->image4;
                }
                if ($request->file('img5')) {
                    $file = $request->file('img5');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/customers'), $filename);
                    $path = 'images\customers\\' . $filename;
                    $newcontent.='#x#'.'img5=#='.$path;
        
                    $filePath = public_path($request->image5); 
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img5=#='.$request->image5;
                }
                

            Customers::find(2)->update(['content' => $newcontent] );
            return redirect()->route('dashboard.customers.about');
    }


    //service
    public function service()
    {
        $content = $this->getContent(3);
        return view('dashboard.customers.home.services.index',compact('content'));
    }

    public function updateservice(Request $request)
    {
            $request->validate([
                'header' => 'required','wordheader' => 'required',
            ]);
            $newcontent = 'header=#='.$request->header.'#x#'.'wordheader=#='.$request->wordheader;
                
                if ($request->file('img1')) {
                    $file = $request->file('img1');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/customers'), $filename);
                    $path = 'images\customers\\' . $filename;
                    $newcontent.='#x#'.'img1=#='.$path;

                    $filePath = public_path($request->image1);
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img1=#='.$request->image1;
                }
                if ($request->file('img2')) {
                    $file = $request->file('img2');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/customers'), $filename);
                    $path = 'images\customers\\' . $filename;
                    $newcontent.='#x#'.'img2=#='.$path;

                    $filePath = public_path($request->image2); 
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img2=#='.$request->image2;
                }
                if ($request->file('img3')) {
                    $file = $request->file('img3');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/customers'), $filename);
                    $path = 'images\customers\\' . $filename;
                    $newcontent.='#x#'.'img3=#='.$path;
        
                    $filePath = public_path($request->image3); 
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img3=#='.$request->image3;
                }
                if ($request->file('img4')) {
                    $file = $request->file('img4');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/customers'), $filename);
                    $path = 'images\customers\\' . $filename;
                    $newcontent.='#x#'.'img4=#='.$path;
        
                    $filePath = public_path($request->image4); 
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img4=#='.$request->image4;
                }
                if ($request->file('img5')) {
                    $file = $request->file('img5');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/customers'), $filename);
                    $path = 'images\customers\\' . $filename;
                    $newcontent.='#x#'.'img5=#='.$path;
        
                    $filePath = public_path($request->image5); 
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img5=#='.$request->image5;
                }
                

            Customers::find(3)->update(['content' => $newcontent] );
            return redirect()->route('dashboard.customers.service');
    }

    
    //excellence 
    public function excellence()
    {
        $content = $this->getContent(4);
        return view('dashboard.customers.home.excellence.index',compact('content'));
    }

    public function updatexcellence(Request $request)
    {
            $request->validate([
                'header1' => 'required','wordheader1' => 'required',
                'header2' => 'required','wordheader2' => 'required',
            ]);
            $newcontent = 'header1=#='.$request->header1.'#x#'.'wordheader1=#='.$request->wordheader1
                        .'#x#'.'header2=#='.$request->header2.'#x#'.'wordheader2=#='.$request->wordheader2;
                
                if ($request->file('img1')) {
                    $file = $request->file('img1');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/customers'), $filename);
                    $path = 'images\customers\\' . $filename;
                    $newcontent.='#x#'.'img1=#='.$path;

                    $filePath = public_path($request->image1);
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img1=#='.$request->image1;
                }
                if ($request->file('img2')) {
                    $file = $request->file('img2');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/customers'), $filename);
                    $path = 'images\customers\\' . $filename;
                    $newcontent.='#x#'.'img2=#='.$path;

                    $filePath = public_path($request->image2); 
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img2=#='.$request->image2;
                }

            Customers::find(4)->update(['content' => $newcontent] );
            return redirect()->route('dashboard.customers.excellence');
    }

    //excellence 
    public function contact()
    {
        $content = $this->getContent(5);
        return view('dashboard.customers.home.contact.index',compact('content'));
    }

    public function updatecontact(Request $request)
    {
            $request->validate([
                'address' => 'required','phone' => 'required',
                'face' => 'required','insta' => 'required',
            ]);
            $newcontent = 'address=#='.$request->address.'#x#'.'phone=#='.$request->phone
                        .'#x#'.'face=#='.$request->face.'#x#'.'insta=#='.$request->insta;
                
            
            Customers::find(5)->update(['content' => $newcontent] );
            return redirect()->route('dashboard.customers.contact');
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //work 

    //images
    public function images()
    {
        $contentAsString = $this->getContent(9);
        $content = explode("#xt#",$contentAsString);
        return view('dashboard.customers.work.images.images',compact('content'));
    }
    public function addimages()
    {
        return view('dashboard.customers.work.images.add');
    }
    public function storeimages(Request $request)
    {       
        $request->validate([
            'img' => ['required'],
        ]);
    
        $contentAsString = $this->getContent(9);
        $content = explode("#xt#",$contentAsString);
        if (!empty($content[0]))
            $str = '#xt#';
        else 
            $str = '';
        
        if ($request->file('img')) {
            $file = $request->file('img');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/home/about'), $filename);
            $path = 'images\home\about\\' . $filename;
            $str.='img=#='.$path;
        }
        $newcontent = $contentAsString . $str;
        $slidesarr['content'] = $newcontent;
        Customers::find(9)->update(['content' => $newcontent] );
        return redirect()->route('dashboard.customers.images.work');
    }
    public function editimages($id)
    {
        $allcontent = $this->getContent(9);
        $content = explode("#xt#",$allcontent);
        $slide = $content[$id];
        $pairs = explode('#x#', $slide);
        $slide = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $slide[$key] = $value;
        }
        if($id>0)
            $old= '#xt#'.'img=#='.$slide['img'];
        else
            $old= 'img=#='.$slide['img'];
        return view('dashboard.customers.work.images.edit' , compact('slide','old'));
    }
    public function updateimages(Request $request)
    {
        $old =$request->old;
        $allcontent = $this->getContent(9);

        if($old[0]=='#'&& $old[2]=='t')
        $str = '#xt#';
        else
        $str ='';
        if ($request->file('img')) {
            $file = $request->file('img');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/home/about'), $filename);
            $path = 'images\home\about\\' . $filename;
            $str.='img=#='.$path;
    
            $filePath = public_path($request->image); 
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }else{
            $str.='img=#='.$request->image;
        }
        $newcontent = str_replace($old, $str, $allcontent);
        Customers::find(9)->update(['content' => $newcontent] );
        return redirect()->route('dashboard.customers.images.work');
    }
    public function deleteimages($id)
    {
        $allcontent = $this->getContent(9);
        $content = explode("#xt#",$allcontent);
        $slide = $content[$id]; 
        $pairs = explode('#x#', $slide);   
        $slide = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $slide[$key] = $value;
        }
        if($id>0)
            $old= '#xt#'.'img=#='.$slide['img'];
        else if(isset($content[1]))
            $old= 'img=#='.$slide['img'].'#xt#';
        else
            $old='img=#='.$slide['img']; 

        $filePath = public_path($slide['img']); 
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        $newcontent = str_replace($old,'' ,$allcontent);
        Customers::find(9)->update(['content' => $newcontent]);

        return redirect()->route('dashboard.customers.images.work');
    }




//fields
public function fields()
{
    $contentAsString = $this->getContent(10);
    $content = explode("#xt#",$contentAsString);
    return view('dashboard.customers.work.fields.all',compact('content'));
}
public function addfields()
{
    return view('dashboard.customers.work.fields.add');
}
public function storefields(Request $request)
{       
    $request->validate([
        'title' => 'required','details' => 'required','img' =>'required'
    ]);

    $contentAsString = $this->getContent(10);
    $content = explode("#xt#",$contentAsString);
    if (!empty($content[0]))
        $str = '#xt#'.'title=#='.$request->title.'#x#'.'details=#='.$request->details;
    else 
    $str ='title=#='.$request->title.'#x#'.'details=#='.$request->details;
    
    if ($request->file('img')) {
        $file = $request->file('img');
        $filename = Str::uuid() . $file->getClientOriginalName();
        $file->move(public_path('images/customers'), $filename);
        $path = 'images\customers\\' . $filename;
        $str.='#x#'.'img=#='.$path;
    }
    $newcontent = $contentAsString . $str;
    $slidesarr['content'] = $newcontent;
    Customers::find(10)->update(['content' => $newcontent] );
    return redirect()->route('dashboard.customers.fields');
}
public function editfields($id)
{
    
    $allcontent = $this->getContent(10);
    $content = explode("#xt#",$allcontent);
    $slide = $content[$id];
    $pairs = explode('#x#', $slide);
    $slide = [];
    foreach ($pairs as $pair) {
        list($key, $value) = explode('=#=', $pair);
        $slide[$key] = $value;
    }
    if($id>0)
        $old= '#xt#'.'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'];
    else
        $old= 'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'];

    return view('dashboard.customers.work.fields.edit' , compact('slide','old'));
}
public function updatefields(Request $request)
{
    $old =$request->old;
    $request->validate([
        'title' => 'required',
        'details' => 'required',
    ]);
    $allcontent = $this->getContent(10);
    if($old[0]=='#'&& $old[2]=='t')
    $str = '#xt#'.'title=#='.$request->title.'#x#'.'details=#='.$request->details;
    else
    $str ='title=#='.$request->title.'#x#'.'details=#='.$request->details;

    if ($request->file('img')) {
        $file = $request->file('img');
        $filename = Str::uuid() . $file->getClientOriginalName();
        $file->move(public_path('images/customers'), $filename);
        $path = 'images\customers\\' . $filename;
        $str.='#x#'.'img=#='.$path;

        $pairs = explode('#x#', $old);
        $slide = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $slide[$key] = $value;
        }
        $filePath = public_path($slide['img']); 
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
    }else{
        $str.='#x#'.'img=#='.$request->img;
    }

    $newcontent = str_replace($old, $str, $allcontent);
    Customers::find(10)->update(['content' => $newcontent] );
    return redirect()->route('dashboard.customers.fields');
}
public function deletefields($id)
{
    $allcontent = $this->getContent(10);
    $content = explode("#xt#",$allcontent);
    $slide = $content[$id];
    $pairs = explode('#x#', $slide);
    
    $slide = [];
    foreach ($pairs as $pair) {
        list($key, $value) = explode('=#=', $pair);
        $slide[$key] = $value;
    }

    if($id>0)
    $old= '#xt#'.'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'];
    else if(isset($content[1]))
    $old= 'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'].'#xt#';
    else
    $old= 'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'];
    $newcontent = str_replace($old,'' ,$allcontent);
    Customers::find(10)->update(['content' => $newcontent]);
    
    return redirect()->route('dashboard.customers.fields');

}







//rates
public function rates()
{
    $contentAsString = $this->getContent(11);
    $content = explode("#xt#",$contentAsString);
    return view('dashboard.customers.work.rates.all',compact('content'));
}
public function addrates()
{
    return view('dashboard.customers.work.rates.add');
}

public function storerates(Request $request)
{       
    $request->validate([
        'name' => 'required','postion' => 'required',
        'rate' => 'required','comment' => 'required','img' =>'required'
    ]);

    $contentAsString = $this->getContent(11);
    $content = explode("#xt#",$contentAsString);
    if (!empty($content[0]))
        $str = '#xt#'.'name=#='.$request->name.'#x#'.'postion=#='.$request->postion
            .'#x#'.'comment=#='.$request->comment.'#x#'.'rate=#='.$request->rate;
    else 
        $str ='name=#='.$request->name.'#x#'.'postion=#='.$request->postion
            .'#x#'.'comment=#='.$request->comment.'#x#'.'rate=#='.$request->rate;
    
    if ($request->file('img')) {
        $file = $request->file('img');
        $filename = Str::uuid() . $file->getClientOriginalName();
        $file->move(public_path('images/customers'), $filename);
        $path = 'images\customers\\' . $filename;
        $str.='#x#'.'img=#='.$path;
    }
    $newcontent = $contentAsString . $str;
    $slidesarr['content'] = $newcontent;
    Customers::find(11)->update(['content' => $newcontent] );
    return redirect()->route('dashboard.customers.rates');
}
public function editrates($id)
{
    
    $allcontent = $this->getContent(11);
    $content = explode("#xt#",$allcontent);
    $slide = $content[$id];
    $pairs = explode('#x#', $slide);
    $slide = [];
    foreach ($pairs as $pair) {
        list($key, $value) = explode('=#=', $pair);
        $slide[$key] = $value;
    }
    if($id>0)
        $old= '#xt#'.'name=#='.$slide['name'].'#x#'.'postion=#='.$slide['postion']
        .'#x#'.'comment=#='.$slide['comment'].'#x#'.'rate=#='.$slide['rate'].'#x#'.'img=#='.$slide['img'];
    else
        $old= 'name=#='.$slide['name'].'#x#'.'postion=#='.$slide['postion']
        .'#x#'.'comment=#='.$slide['comment'].'#x#'.'rate=#='.$slide['rate'].'#x#'.'img=#='.$slide['img'];

    return view('dashboard.customers.work.rates.edit' , compact('slide','old'));
}
public function updaterates(Request $request)
{
    $old =$request->old;
    $request->validate([
        'name' => 'required',
        'postion' => 'required',
        'comment' => 'required',
        'rate' => 'required',
    ]);
    $allcontent = $this->getContent(11);
    if($old[0]=='#'&& $old[2]=='t')
    $str = '#xt#'.'name=#='.$request->name.'#x#'.'postion=#='.$request->postion.'#x#'.'comment=#='.$request->comment.'#x#'.'rate=#='.$request->rate;
    else
    $str ='name=#='.$request->name.'#x#'.'postion=#='.$request->postion.'#x#'.'comment=#='.$request->comment.'#x#'.'rate=#='.$request->rate;

    if ($request->file('img')) {
        $file = $request->file('img');
        $filename = Str::uuid() . $file->getClientOriginalName();
        $file->move(public_path('images/customers'), $filename);
        $path = 'images\customers\\' . $filename;
        $str.='#x#'.'img=#='.$path;

        $pairs = explode('#x#', $old);
        $slide = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $slide[$key] = $value;
        }
        $filePath = public_path($slide['img']); 
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
    }else{
        $str.='#x#'.'img=#='.$request->img;
    }

    $newcontent = str_replace($old, $str, $allcontent);
    Customers::find(11)->update(['content' => $newcontent] );
    return redirect()->route('dashboard.customers.rates');
}
public function deleterates($id)
{
    $allcontent = $this->getContent(11);
    $content = explode("#xt#",$allcontent);
    $slide = $content[$id];
    $pairs = explode('#x#', $slide);
    
    $slide = [];
    foreach ($pairs as $pair) {
        list($key, $value) = explode('=#=', $pair);
        $slide[$key] = $value;
    }

    if($id>0)
    $old= '#xt#'.'name=#='.$slide['name'].'#x#'.'postion=#='.$slide['postion']
            .'#x#'.'comment=#='.$slide['comment'].'#x#'.'rate=#='.$slide['rate'].'#x#'.'img=#='.$slide['img'];
    else if(isset($content[1]))
    $old= 'name=#='.$slide['name'].'#x#'.'postion=#='.$slide['postion']
            .'#x#'.'comment=#='.$slide['comment'].'#x#'.'rate=#='.$slide['rate'].'#x#'.'img=#='.$slide['img'].'#xt#';
    else
    $old= 'name=#='.$slide['name'].'#x#'.'postion=#='.$slide['postion']
            .'#x#'.'comment=#='.$slide['comment'].'#x#'.'rate=#='.$slide['rate'].'#x#'.'img=#='.$slide['img'];
    $newcontent = str_replace($old,'' ,$allcontent);
    Customers::find(11)->update(['content' => $newcontent]);
    
    return redirect()->route('dashboard.customers.rates');

}





//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// // articles



//articles
public function articles()
{
    $contentAsString = $this->getContent(12);
    $content = explode("#xt#",$contentAsString);
    return view('dashboard.customers.article.articles.all',compact('content'));
}
public function addarticles()
{
    return view('dashboard.customers.article.articles.add');
}
public function storearticles(Request $request)
{       
    $request->validate([
        'title' => 'required','title2' => 'required','details' => 'required','img' =>'required'
    ]);

    $contentAsString = $this->getContent(12);
    $content = explode("#xt#",$contentAsString);
    if (!empty($content[0]))
        $str = '#xt#'.'title=#='.$request->title.'#x#'.'title2=#='.$request->title2.'#x#'.'details=#='.$request->details;
    else 
    $str ='title=#='.$request->title.'#x#'.'title2=#='.$request->title2.'#x#'.'details=#='.$request->details;
    
    if ($request->file('img')) {
        $file = $request->file('img');
        $filename = Str::uuid() . $file->getClientOriginalName();
        $file->move(public_path('images/customers'), $filename);
        $path = 'images\customers\\' . $filename;
        $str.='#x#'.'img=#='.$path;
    }
    $newcontent = $contentAsString . $str;
    $slidesarr['content'] = $newcontent;
    Customers::find(12)->update(['content' => $newcontent] );
    return redirect()->route('dashboard.customers.articles');
}
public function editarticles($id)
{
    
    $allcontent = $this->getContent(12);
    $content = explode("#xt#",$allcontent);
    $slide = $content[$id];
    $pairs = explode('#x#', $slide);
    $slide = [];
    foreach ($pairs as $pair) {
        list($key, $value) = explode('=#=', $pair);
        $slide[$key] = $value;
    }
    if($id>0)
        $old= '#xt#'.'title=#='.$slide['title'].'#x#'.'title2=#='.$slide['title2'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'];
    else
        $old= 'title=#='.$slide['title'].'#x#'.'title2=#='.$slide['title2'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'];

    return view('dashboard.customers.article.articles.edit' , compact('slide','old'));
}
public function updatearticles(Request $request)
{
    $old =$request->old;
    $request->validate([
        'title' => 'required',
        'details' => 'required',
        'title2' => 'required',
    ]);
    $allcontent = $this->getContent(12);
    if($old[0]=='#'&& $old[2]=='t')
    $str = '#xt#'.'title=#='.$request->title.'#x#'.'title2=#='.$request->title2.'#x#'.'details=#='.$request->details;
    else
    $str ='title=#='.$request->title.'#x#'.'title2=#='.$request->title2.'#x#'.'details=#='.$request->details;

    if ($request->file('img')) {
        $file = $request->file('img');
        $filename = Str::uuid() . $file->getClientOriginalName();
        $file->move(public_path('images/customers'), $filename);
        $path = 'images\customers\\' . $filename;
        $str.='#x#'.'img=#='.$path;

        $pairs = explode('#x#', $old);
        $slide = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $slide[$key] = $value;
        }
        $filePath = public_path($slide['img']); 
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
    }else{
        $str.='#x#'.'img=#='.$request->img;
    }

    $newcontent = str_replace($old, $str, $allcontent);
    Customers::find(12)->update(['content' => $newcontent] );
    return redirect()->route('dashboard.customers.articles');
}
public function deletearticles($id)
{
    $allcontent = $this->getContent(12);
    $content = explode("#xt#",$allcontent);
    $slide = $content[$id];
    $pairs = explode('#x#', $slide);
    
    $slide = [];
    foreach ($pairs as $pair) {
        list($key, $value) = explode('=#=', $pair);
        $slide[$key] = $value;
    }

    if($id>0)
    $old= '#xt#'.'title=#='.$slide['title'].'#x#'.'title2=#='.$slide['title2'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'];
    else if(isset($content[1]))
    $old= 'title=#='.$slide['title'].'#x#'.'title2=#='.$slide['title2'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'].'#xt#';
    else
    $old= 'title=#='.$slide['title'].'#x#'.'title2=#='.$slide['title2'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'];
    $newcontent = str_replace($old,'' ,$allcontent);
    Customers::find(12)->update(['content' => $newcontent]);
    
    return redirect()->route('dashboard.customers.articles');

}










//purvies
public function purvies()
{
    $contentAsString = $this->getContent(13);
    $content = explode("#xt#",$contentAsString);
    return view('dashboard.customers.article.purvies.all',compact('content'));
}
public function addpurvies()
{
    return view('dashboard.customers.article.purvies.add');
}
public function storepurvies(Request $request)
{       
    $request->validate([
        'title' => 'required','details' => 'required','img' =>'required'
    ]);

    $contentAsString = $this->getContent(13);
    $content = explode("#xt#",$contentAsString);
    if (!empty($content[0]))
        $str = '#xt#'.'title=#='.$request->title.'#x#'.'details=#='.$request->details;
    else 
    $str ='title=#='.$request->title .'#x#'.'details=#='.$request->details;
    
    if ($request->file('img')) {
        $file = $request->file('img');
        $filename = Str::uuid() . $file->getClientOriginalName();
        $file->move(public_path('images/customers'), $filename);
        $path = 'images\customers\\' . $filename;
        $str.='#x#'.'img=#='.$path;
    }
    $newcontent = $contentAsString . $str;
    $slidesarr['content'] = $newcontent;
    Customers::find(13)->update(['content' => $newcontent] );
    return redirect()->route('dashboard.customers.purvies');
}
public function editpurvies($id)
{
    
    $allcontent = $this->getContent(13);
    $content = explode("#xt#",$allcontent);
    $slide = $content[$id];
    $pairs = explode('#x#', $slide);
    $slide = [];
    foreach ($pairs as $pair) {
        list($key, $value) = explode('=#=', $pair);
        $slide[$key] = $value;
    }
    if($id>0)
        $old= '#xt#'.'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'];
    else
        $old= 'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'];

    return view('dashboard.customers.article.purvies.edit' , compact('slide','old'));
}
public function updatepurvies(Request $request)
{
    $old =$request->old;
    $request->validate([
        'title' => 'required',
        'details' => 'required',
    ]);
    $allcontent = $this->getContent(13);
    if($old[0]=='#'&& $old[2]=='t')
    $str = '#xt#'.'title=#='.$request->title.'#x#'.'details=#='.$request->details;
    else
    $str ='title=#='.$request->title.'#x#'.'details=#='.$request->details;

    if ($request->file('img')) {
        $file = $request->file('img');
        $filename = Str::uuid() . $file->getClientOriginalName();
        $file->move(public_path('images/customers'), $filename);
        $path = 'images\customers\\' . $filename;
        $str.='#x#'.'img=#='.$path;

        $pairs = explode('#x#', $old);
        $slide = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $slide[$key] = $value;
        }
        $filePath = public_path($slide['img']); 
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
    }else{
        $str.='#x#'.'img=#='.$request->img;
    }

    $newcontent = str_replace($old, $str, $allcontent);
    Customers::find(13)->update(['content' => $newcontent] );
    return redirect()->route('dashboard.customers.purvies');
}
public function deletepurvies($id)
{
    $allcontent = $this->getContent(13);
    $content = explode("#xt#",$allcontent);
    $slide = $content[$id];
    $pairs = explode('#x#', $slide);
    
    $slide = [];
    foreach ($pairs as $pair) {
        list($key, $value) = explode('=#=', $pair);
        $slide[$key] = $value;
    }

    if($id>0)
    $old= '#xt#'.'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'];
    else if(isset($content[1]))
    $old= 'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'].'#xt#';
    else
    $old= 'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'];
    $newcontent = str_replace($old,'' ,$allcontent);
    Customers::find(13)->update(['content' => $newcontent]);
    
    return redirect()->route('dashboard.customers.purvies');

}











//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// // about us
    // intro
    public function aboutus()
    {
        $content = $this->getContent(6);
        return view('dashboard.customers.about.us.index',compact('content'));
    }
    public function updateaboutus(Request $request)
    {
            $request->validate([
              'header' => 'required','wordheader' => 'required',
            ]);
            $newcontent ='header=#='.$request->header.'#x#'.'wordheader=#='.$request->wordheader;
                
                if ($request->file('img')) {
                    $file = $request->file('img');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/customers'), $filename);
                    $path = 'images\customers\\' . $filename;
                    $newcontent.='#x#'.'img=#='.$path;

                    $filePath = public_path($request->image);
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img=#='.$request->image;
                }

                
            Customers::find(6)->update(['content' => $newcontent] );
            return redirect()->route('dashboard.customers.aboutus');
    }


    // services
    public function services()
    {
        $contentAsString = $this->getContent(7);
        $content = explode("#xt#",$contentAsString);
        return view('dashboard.customers.about.services.all',compact('content'));
    }
    public function addservices()
    {
        return view('dashboard.customers.about.services.add');
    }
    public function storeservices(Request $request)
    {       
        $request->validate([
            'title' => 'required','details' => 'required','img' =>'required','img2' =>'required'
        ]);

        $contentAsString = $this->getContent(7);
        $content = explode("#xt#",$contentAsString);
        if (!empty($content[0]))
            $str = '#xt#'.'title=#='.$request->title.'#x#'.'details=#='.$request->details;
        else 
        $str ='title=#='.$request->title.'#x#'.'details=#='.$request->details;
        
        if ($request->file('img')) {
            $file = $request->file('img');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/customers'), $filename);
            $path = 'images\customers\\' . $filename;
            $str.='#x#'.'img=#='.$path;
        }
        if ($request->file('img2')) {
            $file = $request->file('img2');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/customers'), $filename);
            $path = 'images\customers\\' . $filename;
            $str.='#x#'.'img2=#='.$path;
        }
        $newcontent = $contentAsString . $str;
        $slidesarr['content'] = $newcontent;
        Customers::find(7)->update(['content' => $newcontent] );
        return redirect()->route('dashboard.customers.services');
    }
    public function editservices($id)
    {
        
        $allcontent = $this->getContent(7);
        $content = explode("#xt#",$allcontent);
        $slide = $content[$id];
        $pairs = explode('#x#', $slide);
        $slide = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $slide[$key] = $value;
        }
        if($id>0)
            $old= '#xt#'.'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'].'#x#'.'img2=#='.$slide['img2'];
        else
            $old= 'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'].'#x#'.'img2=#='.$slide['img2'];

        return view('dashboard.customers.about.services.edit' , compact('slide','old'));
    }
    public function updateservices(Request $request)
    {
        $old =$request->old;
        $request->validate([
            'title' => 'required',
            'details' => 'required',
        ]);
        $allcontent = $this->getContent(7);
        if($old[0]=='#'&& $old[2]=='t')
        $str = '#xt#'.'title=#='.$request->title.'#x#'.'details=#='.$request->details;
        else
        $str ='title=#='.$request->title.'#x#'.'details=#='.$request->details;

        if ($request->file('img')) {
            $file = $request->file('img');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/customers'), $filename);
            $path = 'images\customers\\' . $filename;
            $str.='#x#'.'img=#='.$path;

            $pairs = explode('#x#', $old);
            $slide = [];
            foreach ($pairs as $pair) {
                list($key, $value) = explode('=#=', $pair);
                $slide[$key] = $value;
            }
            $filePath = public_path($slide['img']); 
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }else{
            $str.='#x#'.'img=#='.$request->img;
        }

        if ($request->file('img2')) {
            $file = $request->file('img2');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/customers'), $filename);
            $path = 'images\customers\\' . $filename;
            $str.='#x#'.'img2=#='.$path;
    
            $pairs = explode('#x#', $old);
            $slide = [];
            foreach ($pairs as $pair) {
                list($key, $value) = explode('=#=', $pair);
                $slide[$key] = $value;
            }
            $filePath = public_path($slide['img2']); 
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }else{
            $str.='#x#'.'img2=#='.$request->img2;
        }


        $newcontent = str_replace($old, $str, $allcontent);
        Customers::find(7)->update(['content' => $newcontent] );
        return redirect()->route('dashboard.customers.services');
    }
    public function deleteservices($id)
    {
        $allcontent = $this->getContent(7);
        $content = explode("#xt#",$allcontent);
        $slide = $content[$id];
        $pairs = explode('#x#', $slide);
        
        $slide = [];
        foreach ($pairs as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $slide[$key] = $value;
        }

        if($id>0)
        $old= '#xt#'.'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'].'#x#'.'img2=#='.$slide['img2'];
        else if(isset($content[1]))
        $old= 'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'].'#x#'.'img2=#='.$slide['img2'].'#xt#';
        else
        $old= 'title=#='.$slide['title'].'#x#'.'details=#='.$slide['details'].'#x#'.'img=#='.$slide['img'].'#x#'.'img2=#='.$slide['img2'];
        $newcontent = str_replace($old,'' ,$allcontent);
        Customers::find(7)->update(['content' => $newcontent]);
        
        return redirect()->route('dashboard.customers.services');

    }


    //whyus 
    public function whyus()
    {
        $content = $this->getContent(8);
        return view('dashboard.customers.about.why.index',compact('content'));
    }

    public function updatewhyus(Request $request)
    {
            $request->validate([
                'header' => 'required','wordheader' => 'required',
            ]);
            $newcontent = 'header=#='.$request->header.'#x#'.'wordheader=#='.$request->wordheader;
                
                if ($request->file('img1')) {
                    $file = $request->file('img1');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/customers'), $filename);
                    $path = 'images\customers\\' . $filename;
                    $newcontent.='#x#'.'img1=#='.$path;

                    $filePath = public_path($request->image1);
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img1=#='.$request->image1;
                }
                if ($request->file('img2')) {
                    $file = $request->file('img2');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/customers'), $filename);
                    $path = 'images\customers\\' . $filename;
                    $newcontent.='#x#'.'img2=#='.$path;

                    $filePath = public_path($request->image2); 
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img2=#='.$request->image2;
                }
                if ($request->file('img3')) {
                    $file = $request->file('img3');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/customers'), $filename);
                    $path = 'images\customers\\' . $filename;
                    $newcontent.='#x#'.'img3=#='.$path;
        
                    $filePath = public_path($request->image3); 
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img3=#='.$request->image3;
                }
                if ($request->file('img4')) {
                    $file = $request->file('img4');
                    $filename = Str::uuid() . $file->getClientOriginalName();
                    $file->move(public_path('images/customers'), $filename);
                    $path = 'images\customers\\' . $filename;
                    $newcontent.='#x#'.'img4=#='.$path;
        
                    $filePath = public_path($request->image4); 
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }else{
                    $newcontent.='#x#'.'img4=#='.$request->image4;
                }
            
                

            Customers::find(8)->update(['content' => $newcontent] );
            return redirect()->route('dashboard.customers.whyus');
    }



}









