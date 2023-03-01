@extends('layouts.app')


@section('content')
<div class="containar">
    <div class="row">
    @foreach($allprod as $product)
        <div class="col-lg-3 mt-3"> 
            <div class="card">
                <img src="{{ asset('images/'.$product->image) }}" class="card-img-top" alt="Product image">
                <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">{{$product->name}}</a>
                            </h4>
                            <h5>{{ $product->price }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="# " class="btn btn-primary">Add to Cart</a>
                        </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
