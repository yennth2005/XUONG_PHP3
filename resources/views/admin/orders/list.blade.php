@extends('admin.layouts.main')

@section('content')
<div class="container">
    <h2>Quản lý đơn hàng</h2>

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    @if(Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif

    @if(Session::has('info'))
        <div class="alert alert-info">
            {{ Session::get('info') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Người dùng</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ number_format($order->total_price, 0, ',', '.') }} VNĐ</td>
                    <td>
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
                    </td>
                    <td>{{ $order->created_at }}</td>
                    <td>
                        
                        @if ($order->status !== 'shipped' && $order->status !== 'delivered' && $order->status !== 'canceled' )
                            <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <select class="form-control form-control-sm" name="status" onchange="this.form.submit()">
                                    <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Chờ xử lý</option>
                                    <option value="processing" {{ $order->status === 'processing' ? 'selected' : '' }}>Đang xử lý</option>
                                    <option value="shipped" {{ $order->status === 'shipped' ? 'selected' : '' }}>Đang giao</option>
                                    <option value="delivered" {{ $order->status === 'delivered' ? 'selected' : '' }}>Đã giao</option>
                                    <option value="canceled" {{ $order->status === 'canceled' ? 'selected' : '' }}>Đã hủy</option>
                                </select>
                            </form>
                        @else
                            <span class="text-muted">Không thể thay đổi</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-sm btn-info">Xem</a>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" class="text-center">Không có đơn hàng nào.</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $orders->links() }}
</div>
@endsection