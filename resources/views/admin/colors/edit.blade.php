@extends('admin.layouts.main')

@section('content')
<div class="container">
    <h1 class="mb-4">Chỉnh sửa màu</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.colors.update', $color->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Tên màu</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $color->name }}" required>
        </div>

        <div class="mb-3">
            <label for="hex_code" class="form-label">Mã màu (Hex)</label>
            <input type="text" class="form-control" id="hex_code" name="hex_code" value="{{ $color->hex_code }}" required>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-success">Cập nhật</button>
            <a href="{{ route('admin.colors.index') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </form>
</div>
@endsection
