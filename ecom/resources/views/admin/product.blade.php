@extends('layouts.appadmin')

@section('content')
<div class="containar">
    <div class="row">
    @foreach($allprod as $product)
        <div class="col-lg-3 mt-3"> 
            <div class="card">
                <img src="{{ asset('images/'.$product->image) }}" width="290" height="200" alt="Product image">
                <div class="card-body ">
                            <h4 class="card-title">
                                <a href="#">{{ $product->name }}</a>
                            </h4>
                            <h5>{{ $product->price }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="deleteproduct/{{$product->id}}" class="btn btn-danger">Delete</a>
                            <a href="editproduct/{{$product->id}}" class="btn btn-primary">Edit</a>
                        </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection