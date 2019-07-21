@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-columns">
                {{-- <div class="card-header">Dashboard</div> --}}
                @for($i = 0; $i < 12; $i++)
                <div class="card" style="width: 20rem;">
 
                    <img class="card-img-top" src="https://image.cnbcfm.com/api/v1/image/105499054-1539191047718gettyimages-3123864.jpeg?v=1539191089&w=1400&h=950" alt="the image alt text here">
                   
                    <div class="card-body">
                   
                      <h5 class="card-title text-primary">Bootstrap 4</h5>
                   
                      <p class="card-text">Country roads take me home!
                   
                      </p>
                   
                      <a href="#" class="btn btn-outline-dark">Learn more</a>
                   
                    </div>
                   
                  </div>
                @endfor
        </div>
    </div>
</div>
@endsection
