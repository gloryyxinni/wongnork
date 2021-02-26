<?php

namespace App\Http\Controllers;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::latest()->paginate(5);
  
        return view('admin.RestaurantForAdmin',compact('restaurants'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.RestaurantCreate');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'open_close_time' => 'required',
            'picture' => 'required',
            'phonenumber' => 'required',
            
        ]);
  
        Restaurant::create($request->all());
   
        return redirect()->route('RestaurantForAdmin.index')
                        ->with('success','Blog created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Restaurant  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        return view('admin.RestaurantShow',compact('restaurant'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurant  
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //$restaurant = Restaurant::find($restaurant);
        return view('admin.RestaurantEdit',compact('restaurant')); 
    }

  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restaurant  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'open_close_time' => 'required',
            'picture' => 'required',
            'phonenumber' => 'required',
        ]);
  
        $restaurant->update($request->all());
  
        return redirect()->route('RestaurantForAdmin.index')
                        ->with('success','Blog updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurant  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
  
        return redirect()->route('RestaurantForAdmin.index')
                        ->with('success','Blogs deleted successfully');
    }
}

