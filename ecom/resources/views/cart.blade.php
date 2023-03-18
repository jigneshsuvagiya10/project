@extends('layouts.app')


@section('content')
  
<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%" class="text-center">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @foreach($cartdata as $product)
            @php $total += $product->price * $product->quantity @endphp
                <tr data-id="{{ $product->id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ asset('images/'.$product->image) }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $product->name }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $product->price }}</td>
                    <td data-th="Quantity" class="text-center">{{ $product->quantity }}</td>
                    <!-- <td data-th="Quantity">
                        <input type="number" value="{{ $product->quantity }}" class="form-control quantity cart_update" min="1" />
                    </td> -->
                    <td data-th="Subtotal" class="text-center">${{$product->price * $product->quantity}}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm cart_remove" onclick="event.preventDefault(); remove('{{$product->id}}');"><i class="fa fa-trash-o"></i> Delete</button>
                    </td>
                </tr>
            @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                <button class="btn btn-success"><i class="fa fa-money"></i> Checkout</button>
            </td>
        </tr>
    </tfoot>
</table>


<script>
    function remove(pid) {
        // console.log(pid);
        fetch("http://localhost:8080/api/remove/"+pid).then((res)=>(res).json()).then((responce)=>{ });
    }
</script>
@endsection
  