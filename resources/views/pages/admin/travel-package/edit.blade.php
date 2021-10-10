@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Product {{ $item->product_names }}</h1>
      </div>

      <!-- Content Row -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('product.update', $item->id) }}" method="post"enctype="multipart/form-data">
                    @method('PUT')
                    @csrf                     
                    <div class="form-group">
                        <label for="product_names">Product Name</label>
                        <input type="text" class="form-control" name="product_names" placeholder="Product Names" value="{{ $item->product_names }}">
                    </div>
                    <div class="form-group">
                        <label for="categories_id">Category</label>
                        <select name="categories_id" required class="form-control">
                            <option value="{{ $item->categories_id }}"></option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->category_names }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Price" value="{{ $item->price }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Featured Event</label>
                        <input type="text" class="form-control" name="description" placeholder="Description" value="{{ $item->description }}">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image" placeholder="Image" >
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Edit
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
