<?php

namespace App\Http\Controllers;
use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Reviews::latest()->paginate(5);
  
        return view('admin.reviewForAdmin',compact('reviews'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
    }
   
      /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reviews $review)
    {
        $review->delete();
  
        return redirect()->route('reviewForAdmin.index')
                        ->with('success','Review deleted successfully');
    }
   
    
}