@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-columns">
                {{-- <div class="card-header">Dashboard</div> --}}
                @for($i = 0; $i < 3; $i++)
                <div class="card" style="width: 20;rem;border-radius:5% ;background-color:#2c2c2ccc;">
 
                    <img class="card-img-top" src="https://image.cnbcfm.com/api/v1/image/105499054-1539191047718gettyimages-3123864.jpeg?v=1539191089&w=1400&h=950" alt="the image alt text here">
                   
                    <div class="card-body">
                   
                      <h5  style="color:white">Bootstrap 4</h5>
                   
                      <p  style="color:#e9e3d4">The great way to build mobile first web applications. Create responsive websites by built-in capabilities by utlizing
                   
                      variety of components with a powerful grid system.
                   
                      </p>
                   
                      <a href="#" class="btn btn-outline-dark">Learn more</a>
                   
                    </div>
                   
                  </div>
                @endfor
        </div>
    </div>
</div>
@endsection
