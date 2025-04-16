@extends('admin.layouts.main')

@section('content')
<div class="container">
    <h2>Chi tiết đơn hàng #{{ $order->id }}</h2>

    <div class="mb-3">
        <strong>Người đặt hàng:</strong> {{ $order->user->name }} ({{ $order->user->email }})
    </div>

    <div class="mb-3">
        <strong>Ngày tạo:</strong> {{ $order->created_at }}
    </div>

    <div class="mb-3">
        <strong>Trạng thái:</strong>
        @if ($order->status === 'pending')
            <span class="badge bg-warning text-dark">Chờ xử lý</span>
        @elseif ($order->status === 'processing')
            <span class="badge bg-primary">Đang xử lý</span>
        @elseif ($order->status === 'shipped')
            <span class="badge bg-info">Đang giao</span>
        @elseif ($order->status === 'delivered')
            <span class="badge bg-success">Đã giao</span>
        @elseif ($order->status === 'canceled')
            <span class="badge bg-danger">Đã hủy</span>
        @endif
    </div>

    <h3>Chi tiết sản phẩm</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá đơn vị</th>
                <th>Tổng giá</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->orderDetails as $detail)
                <tr>
                    <td>{{ $detail->product->name }}</td>
                    <td>{{ $detail->quantity }}</td>
                    <td>{{ number_format($detail->price, 0, ',', '.') }} VNĐ</td>
                    <td>{{ number_format($detail->quantity * $detail->price, 0, ',', '.') }} VNĐ</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mb-3">
        <strong>Tổng tiền đơn hàng:</strong> {{ number_format($order->total_price, 0, ',', '.') }} VNĐ
    </div>

    <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Quay lại danh sách đơn hàng</a>
</div>
@endsection