@extends('admin.layouts.main')

@section('content')
<div class="container">
    <h1 class="mb-4">Quản lý màu sắc</h1>
    <a href="{{ route('admin.colors.create') }}" class="btn btn-primary mb-3">Thêm màu</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Mã màu</th>
                <th>Hiển thị</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($colors as $key=>$color)
            
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $color->name }}</td>
                    <td>{{ $color->hex_code }}</td>
                    <td><div style="width: 30px; height: 30px; background-color: {{ $color->hex_code }};"></div></td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('admin.colors.edit', $color->id) }}" class="btn btn-warning">Sửa</a>
                            <form action="{{ route('admin.colors.destroy', $color->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa màu này?')">
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
