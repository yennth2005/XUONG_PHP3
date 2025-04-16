@extends('admin.layouts.main')

@section('content')
<div class="container">
    <h2>Edit Product</h2>

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Tên sản phẩm</label>
            <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
        </div>

        <div class="form-group">
            <label for="category_id">Danh mục</label>
            <select class="form-control" name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="color_id">Màu sắc</label>
            <select class="form-control" name="color_id" required>
                <option value="">-- Chọn màu sắc --</option>
                @foreach($colors as $color)
                    <option value="{{ $color->id }}" {{ $product->color_id == $color->id ? 'selected' : '' }}>{{ $color->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="price">Giá</label>
            <input type="number" class="form-control" name="price" value="{{ $product->price }}" required>
        </div>

        <div class="form-group">
            <label for="sale_price">Giá Sale</label>
            <input type="number" class="form-control" name="sale_price" value="{{ $product->sale_price }}">
        </div>

        <div class="form-group">
            <label for="stock">Tồn kho</label>
            <input type="number" class="form-control" name="stock" value="{{  $product->stock }}" required>
        </div>

        <div class="form-group">
            <label for="image">Hình ảnh</label>
            <input type="file" class="form-control" name="image">
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" width="100">
            @endif
        </div>

        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea class="form-control" name="description">{{ $product->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="status">Trạng thái</label>
            <select class="form-control" name="status" required>
                <option value="active" {{ $product->status == 'active' ? 'selected' : '' }}>Active</option>
                <option value="deleted" {{ $product->status == 'deleted' ? 'selected' : '' }}>Deleted</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Cập nhật sản phẩm</button>
    </form>
</div>
@endsection