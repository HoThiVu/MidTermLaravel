<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use App\Models\Restaurant;
// use App\Models\Manufacture;
class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $restaurants=Restaurant::all();
    //    dd( $restaurants);
        return view('IndexRestaurant',['restaurants'=> $restaurants]);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $list = \App\Models\Category::all();
        return view('FormADDRestaurant',compact('list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $name ='';  
     
        if ($request->hasfile('image')){
            
            $this ->validate($request,[
                'image' =>'mimes:jpg,png,gif,jpeg|max:4000'
            ],[
                'image.mimes'=>'chi chap nhan file hinh anh',
                'image.max'=>'chi chap nhan file hinh anh duoi 2MB'
            ]);
            $file = $request->file('image');
            $name = time().'_'.$file->getClientOriginalName();
            $destinationPath = public_path('img');

            $file->move($destinationPath,$name);
        }
      
        $this->validate($request,[
            'discription'=>'required',
            'prices'=>'required',
            'name'=>'required',
            // 'produced_on'=>'required|date'
        ],[
            'name.required'=>'ban chua nhap name',
            'discription.required'=>'ban chua nhap mieu ta',
            // 'name.required'=>'ban chua nhap ten nsx',
            // 'image.required'=>'ban chua nhap anh',
            // 'produced_on.required'=>'ban chua nhap make',   
            'prices.required'=>'ban chua nhap gia'
        ]);
        
        $restaurant= new Restaurant();
        $restaurant -> image = $name;
        $restaurant -> name = $request->name;
        $restaurant -> prices = $request->prices;
        $restaurant -> discription = $request->discription;
        $restaurant -> categories_id = $request->name;
    
        $restaurant->save();

 
        
        return redirect()->route('restaurants.index')->with('thành công', 'bạn đã cập nhật thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        // $list = \App\Models\Restaurant::all();
        $restaurants = Restaurant::find($id);
        // $car=Car::all()
        return view('ViewDetailFood',['restaurant'=>$restaurants]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //


    }
}
