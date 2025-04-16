@extends('admin.layouts.main')

@section('content')
<div class="container">
    <h2>Chỉnh sửa trạng thái đơn hàng #{{ $order->id }}</h2>

    <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="status">Trạng thái</label>
            <select class="form-control" name="status">
                <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Chờ xử lý</option>
                <option value="processing" {{ $order->status === 'processing' ? 'selected' : '' }}>Đang xử lý</option>
                <option value="shipped" {{ $order->status === 'shipped' ? 'selected' : '' }} {{ $order->status === 'shipped' ? 'disabled' : '' }}>Đang giao</option>
                <option value="delivered" {{ $order->status === 'delivered' ? 'selected' : '' }}>Đã giao</option>
                <option value="canceled" {{ $order->status === 'canceled' ? 'selected' : '' }}>Đã hủy</option>
            </select>
            @if ($order->status === 'shipped')
                <small class="form-text text-danger">Không thể thay đổi trạng thái đơn hàng đã giao.</small>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection