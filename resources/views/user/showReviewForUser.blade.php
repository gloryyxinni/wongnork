<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for user') }}
        </h2>
    </x-slot>
    <br>
    

{{-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
<link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css" integrity="sha384-jbCTJB16Q17718YM9U22iJkhuGbS0Gd2LjaWb4YJEZToOPmnKDjySVa323U+W7Fv" crossorigin="anonymous">
<div class="container">
<div class="col-md-12">
    
            <div class="tab-pane fade active show" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
                <div id="ratings-and-reviews" class="bg-white rounded shadow-sm p-4 mb-4 clearfix restaurant-detailed-star-rating">
                    <span class="star-rating float-right">
                              <a href="#"><i class="icofont-ui-rating icofont-2x active"></i></a>
                              <a href="#"><i class="icofont-ui-rating icofont-2x active"></i></a>
                              <a href="#"><i class="icofont-ui-rating icofont-2x active"></i></a>
                              <a href="#"><i class="icofont-ui-rating icofont-2x active"></i></a>
                              <a href="#"><i class="icofont-ui-rating icofont-2x"></i></a>
                              </span>
                    <h5 class="mb-0 pt-1">{{$restaurant->name }}</h5>
                    
                </div>
                <div class="bg-white rounded shadow-sm p-4 mb-4 clearfix graph-star-rating">
                    <h5 class="mb-0 mb-4">Ratings and Reviews</h5>
                    <div class="graph-star-rating-header">
                        <div class="star-rating">
                            <a href="#"><i class="icofont-ui-rating active"></i></a>
                            <a href="#"><i class="icofont-ui-rating active"></i></a>
                            <a href="#"><i class="icofont-ui-rating active"></i></a>
                            <a href="#"><i class="icofont-ui-rating active"></i></a>
                            {{-- <a href="#"><i class="icofont-ui-rating"></i></a> <b class="text-black ml-2">{{count($review)}}</b> --}}
                        </div>
                        
                        <p class="text-black mb-4 mt-2">Rated 3.5 out of 5</p>
                        
                    </div>
                    <div class="graph-star-rating-body">
                        <div class="rating-list">
                            <div class="rating-list-left text-black">
                                5 Star
                            </div>
                            <div class="rating-list-center">
                                <div class="progress">
                                    <div style="width: 56%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-primary">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="rating-list-right text-black">56%</div>
                        </div>
                        <div class="rating-list">
                            <div class="rating-list-left text-black">
                                4 Star
                            </div>
                            <div class="rating-list-center">
                                <div class="progress">
                                    <div style="width: 23%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-primary">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="rating-list-right text-black">23%</div>
                        </div>
                        <div class="rating-list">
                            <div class="rating-list-left text-black">
                                3 Star
                            </div>
                            <div class="rating-list-center">
                                <div class="progress">
                                    <div style="width: 11%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-primary">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="rating-list-right text-black">11%</div>
                        </div>
                        <div class="rating-list">
                            <div class="rating-list-left text-black">
                                2 Star
                            </div>
                            <div class="rating-list-center">
                                <div class="progress">
                                    <div style="width: 2%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-primary">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="rating-list-right text-black">02%</div>
                        </div>
                    </div>
                    <div class="graph-star-rating-footer text-center mt-3 mb-3">
                        <button type="button" class="btn btn-outline-primary btn-sm">Rate and Review</button>
                    </div>
                </div>
                <div class="bg-white rounded shadow-sm p-4 mb-4 restaurant-detailed-ratings-and-reviews">

                    <h5 class="mb-1">All Ratings and Reviews</h5>
                    <hr>
                    @foreach ($reviews as $review) 
                    <div class="reviews-members pt-4 pb-4">
                        <div class="media">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <a href="#"><img alt="Generic placeholder image" src="{{ Auth::user()->profile_photo_url }}"  class="mr-3 rounded-pill"></a>
                            @endif
                            <div class="media-body">
                                {{-- star food --}}
                                <div class="reviews-members-header">
                                    @for ($i = 0; $i < $review->rating->Total_score; $i++)
                                    <span class="star-rating float-right">
                                          <a href="#"><i class="icofont-ui-rating"></i></a>
                                          </span>
                                    @endfor
                                </div>
                                
                                <div class="reviews-members-header">
                                    
                                    <h6 class="mb-1"><a class="text-black" href="#">{{ $review->user->name}}</a></h6>
                                    <p class="text-gray">{{ $review->created_at }}</p>
                                </div>
                               

                                <div class="reviews-members-body">
                                    <span class="text-muted">เมนูแนะนำ: {{ $review->comment->Recommend_menu }}</span><br>
                                </div>

                                <div class="reviews-members-body">
                                    <p>{{ $review->comment->Detail }} </p>
                                </div>

                            </div>
                            
                        </div>
                        
                    </div>
                    <hr>
                    @endforeach
                    <a class="text-center w-100 d-block mt-4 font-weight-bold" href="#">See All Reviews</a>
                </div>
                {{-- <div class="bg-white rounded shadow-sm p-4 mb-5 rating-review-select-page">
                    <h5 class="mb-4">Leave Comment</h5>
                    <p class="mb-2">Rate the Place</p>
                    <div class="mb-4">
                        <span class="star-rating">
                                 <a href="#"><i class="icofont-ui-rating icofont-2x"></i></a>
                                 <a href="#"><i class="icofont-ui-rating icofont-2x"></i></a>
                                 <a href="#"><i class="icofont-ui-rating icofont-2x"></i></a>
                                 <a href="#"><i class="icofont-ui-rating icofont-2x"></i></a>
                                 <a href="#"><i class="icofont-ui-rating icofont-2x"></i></a>
                                 </span>
                    </div>
                    <form>
                        <div class="form-group">
                            <label>Your Comment</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="button"> Submit Comment </button>
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>
</div>
</div>


<style>
   body{
background:#dcdcdc;    
}
.total-like-user-main a {
    display: inline-block;
    margin: 0 -17px 0 0;
}
.total-like {
    border: 1px solid;
    border-radius: 50px;
    display: inline-block;
    font-weight: 500;
    height: 34px;
    line-height: 33px;
    padding: 0 13px;
    vertical-align: top;
}
.restaurant-detailed-ratings-and-reviews hr {
    margin: 0 -24px;
}
.graph-star-rating-header .star-rating {
    font-size: 17px;
}
.progress {
    background: #f2f4f8 none repeat scroll 0 0;
    border-radius: 0;
    height: 30px;
}
.rating-list {
    display: inline-flex;
    margin-bottom: 15px;
    width: 100%;
}
.rating-list-left {
    height: 16px;
    line-height: 29px;
    width: 10%;
}
.rating-list-center {
    width: 80%;
}
.rating-list-right {
    line-height: 29px;
    text-align: right;
    width: 10%;
}
.restaurant-slider-pics {
    bottom: 0;
    font-size: 12px;
    left: 0;
    z-index: 999;
    padding: 0 10px;
}
.restaurant-slider-view-all {
    bottom: 15px;
    right: 15px;
    z-index: 999;
}
.offer-dedicated-nav .nav-link.active,
.offer-dedicated-nav .nav-link:hover,
.offer-dedicated-nav .nav-link:focus {
    border-color: #3868fb;
    color: #3868fb;
}
.offer-dedicated-nav .nav-link {
    border-bottom: 2px solid #fff;
    color: #000000;
    padding: 16px 0;
    font-weight: 600;
}
.offer-dedicated-nav .nav-item {
    margin: 0 37px 0 0;
}
.restaurant-detailed-action-btn {
    margin-top: 12px;
}
.restaurant-detailed-header-right .btn-success {
    border-radius: 3px;
    height: 45px;
    margin: -18px 0 18px;
    min-width: 130px;
    padding: 7px;
}
.text-black {
    color: #000000;
}
.icon-overlap {
    bottom: -23px;
    font-size: 74px;
    opacity: 0.23;
    position: absolute;
    right: -32px;
}
.menu-list img {
    width: 41px;
    height: 41px;
    object-fit: cover;
}
.restaurant-detailed-header-left img {
    width: 88px;
    height: 88px;
    border-radius: 3px;
    object-fit: cover;
    box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075)!important;
}
.reviews-members .media .mr-3 {
    width: 56px;
    height: 56px;
    object-fit: cover;
}
.rounded-pill {
    border-radius: 50rem!important;
}
.total-like-user {
    border: 2px solid #fff;
    height: 34px;
    box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075)!important;
    width: 34px;
}
.total-like-user-main a {
    display: inline-block;
    margin: 0 -17px 0 0;
}
.total-like {
    border: 1px solid;
    border-radius: 50px;
    display: inline-block;
    font-weight: 500;
    height: 34px;
    line-height: 33px;
    padding: 0 13px;
    vertical-align: top;
}
.restaurant-detailed-ratings-and-reviews hr {
    margin: 0 -24px;
}
.graph-star-rating-header .star-rating {
    font-size: 17px;
}
.progress {
    background: #f2f4f8 none repeat scroll 0 0;
    border-radius: 0;
    height: 30px;
}
.rating-list {
    display: inline-flex;
    margin-bottom: 15px;
    width: 100%;
}
.rating-list-left {
    height: 16px;
    line-height: 29px;
    width: 10%;
}
.rating-list-center {
    width: 80%;
}
.rating-list-right {
    line-height: 29px;
    text-align: right;
    width: 10%;
}
.restaurant-slider-pics {
    bottom: 0;
    font-size: 12px;
    left: 0;
    z-index: 999;
    padding: 0 10px;
}
.restaurant-slider-view-all {
    bottom: 15px;
    right: 15px;
    z-index: 999;
}

.progress {
    background: #f2f4f8 none repeat scroll 0 0;
    border-radius: 0;
    height: 30px;
}



    </style>
</x-app-layout>
