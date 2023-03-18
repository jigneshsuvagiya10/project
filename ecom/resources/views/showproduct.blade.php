@extends('layouts.app')


@section('content')
<!-- <div class="containar">
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

                <div class="card-footer text-center">
                    <a href="addtocart/{{$product->id}} " class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div> -->

<div class="row">
    @foreach($allprod as $product)
    <div class="col-xs-18 col-sm-6 col-md-3 mt-5">
        <div class="">
            <img src="{{ asset('images/'.$product->image) }}" width="290" height="200" alt="Product image">
            <div class="">
                <h4>{{ $product->name }}</h4>
                <p>{{ $product->description }}</p>
                <p><strong>Price: </strong> ${{ $product->price }}</p>
                <form method="post" action="addtocart/{{$product->id}}">
                @csrf
                    <p><strong>Quantity: </strong>
                        <input type="number" name="quantity" id="quantity" value="1" style="width:100px" min="1" />
                    </p>
                    <!-- <p class="btn-holder"><a href="addtocart/{{$product->id}}" class="btn btn-success btn-block text-center" role="button">Add to cart</a> </p> -->
                    <button type="submit" class="btn btn-success">Add To Cart</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- <script>
    function addtocart(pid) {
        console.log(pid);
        fetch("http://localhost:8080/api/addtocart/"+pid)
            .then((response) => response.json())
            .then((res) => {});
    }
</script> -->

@endsection