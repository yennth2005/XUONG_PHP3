@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <h1>Quản lý danh mục</h1>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary mb-3">Thêm danh mục</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $category) <!-- Đổi từ $user thành $category -->
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning">Sửa</a>
                        
                                <form action="{{ route('admin.categories.delete', $category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE') <!-- Cần thêm @method('DELETE') -->
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')">
                                        Xóa
                                    </button>   
                                </form>
                            </div>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
@endsection
