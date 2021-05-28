<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for user') }}
        </h2>
    </x-slot>
    <br>
   
    <style>
        

    </style>
    <div class="container">
      <div class="container">
        <div class="contact__wrapper shadow-lg mt-n9">
            <div class="row no-gutters">
                <div class="col-lg-5 contact-info__wrapper gradient-brand-color p-5 order-lg-2">
                    <h3 class="color--white mb-5">{{$restaurant->name}}</h3>
        
                    <ul class="contact-info__list list-style--none position-relative z-index-101">
                       <li class=="mb-3 pl-4">
                       
                          <img src="/image/restaurant.jpg" alt="restaurant">
                      </li> 
                      <br>
                        <li class="mb-4 pl-4">
                            <span class="position-absolute"><i class="fas fa-clock"></i></span>{{$restaurant->open_close_time}}
                        </li>
                        <li class="mb-4 pl-4">
                            <span class="position-absolute"><i class="fas fa-phone"></i></span>{{$restaurant->phonenumber}}
                        </li>
                        <li class="mb-4 pl-4">
                            <span class="position-absolute"><i class="fas fa-map-marker-alt"></i></span>{{$restaurant->location}}
                    
                        </li>
                    </ul>
        
                    <figure class="figure position-absolute m-0 opacity-06 z-index-100" style="bottom:0; right: 10px">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="444px" height="626px">
                            <defs>
                                <linearGradient id="PSgrad_1" x1="0%" x2="81.915%" y1="57.358%" y2="0%">
                                    <stop offset="0%" stop-color="rgb(255,255,255)" stop-opacity="1"></stop>
                                    <stop offset="100%" stop-color="rgb(0,54,207)" stop-opacity="0"></stop>
                                </linearGradient>
        
                            </defs>
                            <path fill-rule="evenodd" opacity="0.302" fill="rgb(72, 155, 248)" d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z"></path>
                            <path fill="url(#PSgrad_1)" d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z"></path>
                        </svg>
                    </figure>
                </div>
                
                  {{-- grid review --}}
                <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1">
                    <form action="{{ route('ReviewForUser.store') }}" class="contact-form form-validate" method="POST"> 
                        @csrf
                      <div class="row">
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                     <label for="rating-food">คะแนนอาหาร</label>
                                     <fieldset class="rating" required>
                                        <legend>Please rate:</legend>
                                        <input type="radio" id="rating-food5" name="ratingFood" value="5" /><label for="rating-food5" >5 stars</label>
                                        <input type="radio" id="rating-food4" name="ratingFood" value="4" /><label for="rating-food4" >4 stars</label>
                                        <input type="radio" id="rating-food3" name="ratingFood" value="3" /><label for="rating-food3" >3 stars</label>
                                        <input type="radio" id="rating-food2" name="ratingFood" value="2" /><label for="rating-food2" >2 stars</label>
                                        <input type="radio" id="rating-food1" name="ratingFood" value="1" /><label for="rating-food1" >1 star</label>
                                    </fieldset>
                                </div>
                            </div>
        
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="rating-location">คะแนนสถานที่</label>
                                    <fieldset class="rating"  required>
                                        <legend>Please rate:</legend>
                                        <input type="radio" id="rating-location5" name="ratingLocation" value="5" /><label for="rating-location5" >5 stars</label>
                                        <input type="radio" id="rating-location4" name="ratingLocation" value="4" /><label for="rating-location4" >4 stars</label>
                                        <input type="radio" id="rating-location3" name="ratingLocation" value="3" /><label for="rating-location3" >3 stars</label>
                                        <input type="radio" id="rating-location2" name="ratingLocation" value="2" /><label for="rating-location2" >2 stars</label>
                                        <input type="radio" id="rating-location1" name="ratingLocation" value="1" /><label for="rating-location1" >1 star</label>
                                    </fieldset>
                                </div>
                            </div>
        
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="rating-food">คะแนนการบริการ</label>
                                    <fieldset class="rating"  required>
                                        <legend>Please rate:</legend>
                                        <input type="radio" id="rating-service5" name="ratingService" value="5" /><label for="rating-service5" >5 stars</label>
                                        <input type="radio" id="rating-service4" name="ratingService" value="4" /><label for="rating-service4" >4 stars</label>
                                        <input type="radio" id="rating-service3" name="ratingService" value="3" /><label for="rating-service3" >3 stars</label>
                                        <input type="radio" id="rating-service2" name="ratingService" value="2" /><label for="rating-service2" >2 stars</label>
                                        <input type="radio" id="rating-service1" name="ratingService" value="1" /><label for="rating-service1" >1 star</label>
                                    </fieldset>
                                </div>
                            </div>

        
                            <div class="col-sm-12 mb-3">
                                <div class="form-group">
                                    <label class="required-field" for="message">แนะนำเมนูโปรดของคุณ</label>
                                    <textarea class="form-control"  name="Recommend_menu" id="Recommend_menu" rows="4" placeholder="Hi there, I would like to....."></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 mb-3">
                              <div class="form-group">
                                  <label class="required-field" for="message">เขียนรีวิวของคุณที่นี่</label>
                                  <textarea class="form-control" name="Detail" id="Detail" rows="4" placeholder="Hi there, I would like to....."></textarea>
                              </div>
                          </div>
        
                            <div class="col-sm-12 mb-3">
                              <input id="restaurant_id"  class="form-control " name="restaurant_id" value="{{$restaurant->id}}" hidden />
                              <input id="userID"  class="form-control " name="userID" value="{{Auth::user()->id}}" hidden />
                                <button  type="submit" name="submit" class="btn btn-primary">Submit</button>
                                
                            </div>
        
                        </div>
                    </form>
                </div>
                <!-- End Contact Form Wrapper -->
        
            </div>
        </div>
    </div>

           

    <style>
 
.gradient-brand-color {
    background-image: -webkit-linear-gradient(0deg, #376be6 0%, #6470ef 100%);
    background-image: -ms-linear-gradient(0deg, #376be6 0%, #6470ef 100%);
    color: #fff;
}
.contact-info__wrapper {
    overflow: hidden;
    border-radius: .625rem .625rem 0 0
}

@media (min-width: 1024px) {
    .contact-info__wrapper {
        border-radius: 0 .625rem .625rem 0;
        padding: 5rem !important
    }
}
.contact-info__list span.position-absolute {
    left: 0
}
.z-index-101 {
    z-index: 101;
}
.list-style--none {
    list-style: none;
}
.contact__wrapper {
    background-color: #fff;
    border-radius: 0 0 .625rem .625rem
}

@media (min-width: 1024px) {
    .contact__wrapper {
        border-radius: .625rem 0 .625rem .625rem
    }
}
@media (min-width: 1024px) {
    .contact-form__wrapper {
        padding: 5rem !important
    }
}
.shadow-lg, .shadow-lg--on-hover:hover {
    box-shadow: 0 1rem 3rem rgba(132,138,163,0.1) !important;
}

/* ////style star */
.rating {
            float:left;
        }

        /* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
        follow these rules. Every browser that supports :checked also supports :not(), so
        it doesn’t make the test unnecessarily selective */
        .rating:not(:checked) > input {
            position:absolute;
            top:-9999px;
            clip:rect(0,0,0,0);
        }

        .rating:not(:checked) > label {
            float:right;
            width:1em;
            padding:0 .1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:200%;
            line-height:1.2;
            color:#ddd;
            text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
        }

        .rating:not(:checked) > label:before {
            content: '★ ';
        }

        .rating > input:checked ~ label {
            color: #f70;
            text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
        }

        .rating:not(:checked) > label:hover,
        .rating:not(:checked) > label:hover ~ label {
            color: gold;
            text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
        }

        .rating > input:checked + label:hover,
        .rating > input:checked + label:hover ~ label,
        .rating > input:checked ~ label:hover,
        .rating > input:checked ~ label:hover ~ label,
        .rating > label:hover ~ input:checked ~ label {
            color: #ea0;
            text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
        }

        .rating > label:active {
            position:relative;
            top:2px;
            left:2px;
        }

      </style>
        


        
  </div>
</div>

    

     
 

      
  
     
    
    
    
    <script>
 
      </script>
    
    
</x-app-layout>
