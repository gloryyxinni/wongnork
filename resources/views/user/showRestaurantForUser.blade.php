<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard for user') }}
      </h2>
  </x-slot>
  <br>

<div class="container">
    <div class="row clearfix">
      @foreach ($restaurants as $restaurant)
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="/image/112.jpg" alt="Product" class="img-fluid">
                        <div class="hover">
                            <a href="{{route("ReviewForUser.show",$restaurant->id)}}" class="btn btn-primary btn-sm waves-effect">Review</i></a>
                            {{-- <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a> --}}
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html" class="mb-1"><a href="#" class="text-dark">{{$restaurant->name}}</a></h5>
                        <ul class="product_price list-unstyled">
                            {{-- <li class="old_price">$16.00</li>
                            <li class="new_price">$13.00</li> --}}
                       
                               <div  >4.6/5
                                  <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                  <div class="rating-text"> <span>46 ratings & 15 reviews</span> </div>
                              </div>  
                              <p class="text-muted f-14 mb-0"><i class="mdi mdi-map-marker mr-2"></i>2984 Woodhill Avenue Easton, MD 21601</p>
                              
                              
                           
                        </ul>
                    </div>
                   
                </div>
            </div>
        </div>
        @endforeach
  </div>
</div>





{!! $restaurants->links() !!}
 
</x-app-layout>
