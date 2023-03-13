@extends('layouts.app')


@section('content')
<div class="containar">
    <div class="row">
        @foreach($cartdata as $product)
        <!-- @php echo $product @endphp -->
        <div class="col-lg-3 mt-3">
            <div class="card">
                <img src="{{ asset('images/'.$product->image) }}" class="card-img-top" alt="Product image">
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">{{$product->name}}</a>
                    </h4>
                    <h5>Price : {{ $product->price }}</h5>
                    <h5>Quantity : {{ $product->quantity }}</h5>
                </div>

                <div class="card-footer text-center">
                    <!-- <a href="# " onclick="event.preventDefault(); addtocart('{{$product->id}}');" class="btn btn-primary">Add to Cart</a> -->
                    <a href="#" class="btn btn-danger">Buy</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="container">
    <div class="row ">
        <div class="col-md-">
            <div class="card">
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> <img src="{{ asset('images/'.$product->image) }}" class="width:10; height:10;"></td>
        </tr>

    </tbody>
</table>
</div>
</div>
</div>
</div>



@endsection