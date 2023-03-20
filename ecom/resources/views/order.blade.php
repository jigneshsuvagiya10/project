@extends('layouts.app')


@section('content')

<div class="container">
    <div class="card mt-4">
        <div class="card-header">ORDER</div>
        <div class="card-body">

            <div class="">
                <p><strong>Name: </strong> {{ Auth::user()->name }}</p>
                <p><strong>Email: </strong> {{ Auth::user()->email }}</p>
                <p><strong>Address: </strong> {{ Auth::user()->address }}</p>
            </div>


            <table id="cart" class="table table-hover table-condensed border">
                <thead>
                    <tr>
                        <th style="width:50%">Product</th>
                        <th style="width:10%">Price</th>
                        <th style="width:8%" class="text-center">Quantity</th>
                        <th style="width:22%" class="text-center">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0 @endphp
                    @foreach($orderdata as $product)
                    @php $total += $product->price * $product->quantity @endphp
                    <tr data-id="{{ $product->id }}">
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs"><img src="{{ asset('images/'.$product->image) }}" width="100" height="100" class="img-responsive" /></div>
                                <div class="col-sm-9">
                                    <h6 class="nomargin">{{ $product->name }}</h6>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">${{ $product->price }}</td>
                        <td data-th="Quantity" class="text-center">{{ $product->quantity }}</td>
                        <!-- <td data-th="Quantity">
                        <input type="number" value="{{ $product->quantity }}" class="form-control quantity cart_update" min="1" />
                    </td> -->
                        <td data-th="Subtotal" class="text-center">${{$product->price * $product->quantity}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" class="text-right">
                            <h3><strong>Total ${{ $total }}</strong></h3>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <div>
                <p><strong>Pyment Method: </strong>
                <input type="radio" name="Pyment" value="card" required> Card
                <input type="radio" name="Pyment" value="cod" required> COD
                <input type="radio" name="Pyment" value="uip" required> UPI
                </p>
            </div>
        </div>
        <div class="card-header"><a href="#" class="btn btn-success"> <i class="fa fa-money"></i> Buy Now</a></div>
    </div>
</div>


<script>
    // function cartdat() {
    //     fetch("http://localhost:8080/api/cartdata/").then((res) => (res).json()).then((responce) => {
    //         console.log(responce);
    //     });
    // }

    function remove(pid) {
        // console.log(pid);
        fetch("http://localhost:8080/api/remove/" + pid).then((res) => (res).json()).then((responce) => {});
        window.location.reload();
    }
</script>
@endsection