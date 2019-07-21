@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-columns">
                {{-- <div class="card-header">Family hehe</div> --}}
                @for($i = 0; $i < 3; $i++)
                <div class="card" style="width: 20rem;">
 
                    <img class="card-img-top" src="https://i.pinimg.com/originals/cd/b8/af/cdb8af2018a02b7e71157c73327a2b1f.jpg" alt="the image alt text here">
                   
                    <div class="card-body">
                   
                      <h5 class="card-title text-primary">Howdy how!</h5>
                   
                      <p class="card-text">Country roads take me home!
                   
                      </p>
                   
                      <a href="#" class="btn btn-outline-dark">Family tree!</a>
                   
                    </div>
                   
                  </div>
                @endfor
        </div>
    </div>
</div>
@endsection
