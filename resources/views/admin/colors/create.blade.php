@extends('admin.layouts.main')

@section('content')
<div class="container">
    <h1 class="mb-4">Thêm màu mới</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.colors.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Tên màu</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="hex_code" class="form-label">Mã màu (Hex)</label>
            <input type="text" class="form-control" id="hex_code" name="hex_code" required>
        </div>
        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-success">Thêm mới</button>
            <a href="{{ route('admin.colors.index') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </form>
</div>
@endsection
