<?php

namespace App\Http\Controllers;
use App\Models\Restaurant;
use App\Models\Comment;
use App\Models\Rating;
use App\Models\Reviews;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RestaurantControllerForUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::latest()->paginate(8);
  
        return view('user.showRestaurantForUser',compact('restaurants'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'Detail' => '',
            'Recommend_menu' => '',
            'restaurant_id' =>'',
            'ratingFood'=>'',
            'ratingLocation'=>'',
            'ratingService'=>'',
            'userID' =>''
            
         ]);
  
        // ReviewForUser::create($request->all());

        $comment = new Comment;
        $comment->Detail = $request->Detail;
        $comment->Recommend_menu = $request->Recommend_menu;
        
        $comment->save();

        $rating = new Rating;

        $rating->Food_score = $request->ratingFood;
        $rating->Location_score = $request->ratingLocation;
        $rating->Service_score = $request->ratingService;

        $tatalRating = $request->ratingService + $request->ratingLocation + $request->ratingFood;
        $rating->Total_score = $tatalRating ;
        $rating->save();

        $reviews = new Reviews;
        $reviews->User_id = $request->userID;
        $reviews->Restaurant_id = $request->restaurant_id;

        $findRating = Rating::orderBy('id', 'desc')->first();
        $findComment = Comment::orderBy('id', 'desc')->first();

        $reviews->Rating_Rating_id = $findRating->id;
        $reviews->Comment_Comment_id = $findComment->id;
        $reviews->save();


        return redirect()->route('ReviewForUser.show',[$request->restaurant_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        return view('user.ReviewForUser',compact('restaurant'));
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
