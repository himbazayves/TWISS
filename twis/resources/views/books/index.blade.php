@extends('layouts.master')

@section('content')


<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Books</h1>
   
  </div>


  
  <div class="container">
    <div class="card-deck mb-3 text-center">

        @foreach($books as $book)

        
      <div class="card mb-4 box-shadow">
        <div class="card-header">
        <h4 class="my-0 font-weight-normal">{{$book->title}}</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
      <p>
          {{$book->description}}
      </p>
          <button type="button" class="btn btn-lg btn-block btn-outline-primary">Read</button>
        </div>
      </div>

            
        @endforeach



      




    

    </div>
</div> 
@endsection