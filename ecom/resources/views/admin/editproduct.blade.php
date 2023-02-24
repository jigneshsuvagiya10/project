@extends('layouts.appadmin')

@section('content')
<div class="containar">
    <div class="row">
        <div class="col-lg-4 mt-5 offset-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edit Product</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="updatepro/{{$editpro->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" id="name" value="{{$editpro->name}}" "form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" required>{{$editpro->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" value="{{$editpro->price}}" class="form-control" step="0.01" required>
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            <input type="file" name="image" class="form-control" placeholder="image" accept="image/*">
                            <img src="{{ asset('images/'.$editpro->image) }}" width="200px">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection