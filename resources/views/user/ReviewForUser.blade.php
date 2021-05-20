<x-app-layout>
  
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for user') }}
        </h2>
    </x-slot>
    <br>
    @section('content')
    <div class="container">
      <div class="row">
        {{-- detail Restaurant --}}
        <div class="col">
          <div class="card mb-1" style="max-width: 550px; min-height: 400px" >
            <div class="row g-0">
              <div class="col-md-4">
                  <img src="/image/restaurant.jpg" alt="restaurant" style="height: 550px; width: 450px">
              </div>
                  <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">{{$restaurant->name}}</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">สถานที่ตั้ง: {{$restaurant->location}}</li>
                        <li class="list-group-item">เวลาเปิด-ปิด: {{$restaurant->open_close_time}}</li>
                        <li class="list-group-item">เบอร์โทรศัพท์: {{$restaurant->phonenumber}}</li>
                        </ul> 
         
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                
                 </div>
                 
              </div>
            </div>
          </div>
        </div>


        {{-- comment --}}
        <div class="col">
          <div class="card mb-1" style="max-width: 650px; min-height: 400px" >
            <div class="row g-0">
              <div class="col-md-4">
                <div class="mb-3">
                  {{-- @foreach ($reviews as $review)
                  <tr>
                    <td>{{review->Detail}}</td>
                    <td>{{review->Recommend_menu}}</td>
                  </tr>
                  @endforeach --}}
                  
                </div>
              </div>
            </div>
          </div>
          {{-- <form action="{{ route('ReviewUser.store') }}" method="POST"> --}}
          @csrf
          <div class="card mb-1" style="max-width: 650px; min-height: 100px" >
            <div class="row g-0">
              <div class="col-md-4">
                <div class="mb-3">
                    <textarea class="form-control"  placeholder="แนะนำอาหารที่คุณชอบ.." name="Detail" id="Detail" rows="3"></textarea>
                    <textarea class="form-control"  placeholder="เขียนรีวิวของคุณที่นี่.." name="Recommend_menu" id="Recommend_menu" rows="3"></textarea>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  
                </div>
              </div>
            </div>
          </div>
          {{-- </form> --}}
       


        


        
</div>
</div>

    


 

      
  
     
    
    
    @endsection
    <script>
 
      </script>
    
    
</x-app-layout>
