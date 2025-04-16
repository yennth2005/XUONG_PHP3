@extends('admin.layouts.main')

@section('content')
<div class="container">
    <h1 class="mb-4">Sản phẩm đã xoá</h1>
    <div class="d-flex gap-2 mb-3">
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary btn"><i class="fas fa-plus"></i> Thêm mới</a>
        <a href="{{ route('admin.products.index') }}" class="btn btn-info btn"><i class="fas fa-list"></i> Danh sách sản phẩm</a>
    </div>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Hình ảnh</th>
                <th>Sản phẩm</th>
                <th>Danh mục</th>
                <th>Màu sắc</th> <th>Giá</th>
                <th>Giá Sale</th>
                <th>Tồn kho</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trashedProducts as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" width="100">
                        @else
                            Không có ảnh
                        @endif
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name ?? 'Không có' }}</td>
                    <td>
                        @if ($product->color)
                            <span style="display: inline-block; width: 20px; height: 20px; border-radius: 3px; background-color: {{ $product->color->hex_code }}; vertical-align: middle; margin-right: 5px;"></span>
                            {{ $product->color->name }}
                        @else
                            Không có
                        @endif
                    </td>
                    <td>{{ number_format($product->price, 0, ',', '.') }}đ</td>
                    <td>{{ $product->sale_price ? number_format($product->sale_price, 0, ',', '.') . 'đ' : 'Không có' }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        @if ($product->status === 'active')
                            <span class="badge bg-success">Hoạt động</span>
                        @else
                            <span class="badge bg-danger">Đã xóa</span>
                        @endif
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <form action="{{ route('admin.products.restore', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-warning btn-sm"><i class="fas fa-undo"></i> Khôi phục</button>
                            </form>
                            <form action="{{ route('admin.products.force-delete', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa vĩnh viễn?')"><i class="fas fa-trash"></i> Xóa</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $trashedProducts->links('pagination::bootstrap-5') }}
</div>
@endsection