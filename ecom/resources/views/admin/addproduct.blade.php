@extends('layouts.appadmin')

@section('content')
<div class="containar">
    <div class="row">
        <div class="col-lg-4 mt-5 offset-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Add Product</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="input" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control" step="0.01" required>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <!-- <input type="text" name="category" id="category" class="form-control" required> -->
                        <select name="category" id="category" class="form-control" required>
                            <option value="mobile">mobile</option>
                            <option value="fashion">fashion</option>
                            <option value="toy">toy</option>
                        </select>
                        </div>
                        <div class="form-group mt-2">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control-file" accept="image/*" required>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    

    @endsection