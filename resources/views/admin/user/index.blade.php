@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <h1>Quản lý người dùng</h1>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Vai trò</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role == 'admin' ? 'Admin' : 'Customer' }}</td>
                        <td>{{ $user->status == 'active' ? 'Hoạt động' : 'Bị khóa' }}</td>
                        <td>
                            <form action="{{ route('admin.users.toggle-lock', $user) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                <button type="submit"
                                    class="btn btn-sm {{ $user->status == 'active' ? 'btn-danger' : 'btn-success' }}"
                                    onclick="return confirm('Bạn có chắc chắn muốn {{ $user->status == 'active' ? 'khóa' : 'mở khóa' }} người dùng này?')">
                                    {{ $user->status == 'active' ? 'Khóa' : 'Mở khóa' }}
                                </button>
                            </form>
                            @if ($user->role == 'customer')
                                <form action="{{ route('admin.users.make-admin', $user) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-primary"
                                        onclick="return confirm('Bạn có chắc chắn muốn nâng quyền người dùng này thành admin?')">
                                        Thành Admin
                                    </button>
                                </form>
                            @elseif ($user->role == 'admin')
                                <form action="{{ route('admin.users.remove-admin', $user->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-warning"
                                        onclick="return confirm('Bạn có chắc chắn muốn hủy quyền admin của người dùng này?')">
                                        Hủy Admin
                                    </button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
