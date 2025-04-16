<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function toggleLock(User $user)
    {
        $user->update([
            'status' => $user->status === 'active' ? 'inactive' : 'active',
        ]);

        $message = $user->status === 'active' ? 'Người dùng đã được mở khóa!' : 'Người dùng đã bị khóa!';
        return redirect()->route('admin.user.index')->with('success', $message);
    }

    public function makeAdmin(User $user)
    {
        $user->update([
            'role' => 'admin',
        ]);

        return redirect()->route('admin.user.index')->with('success', 'Người dùng đã được nâng quyền thành admin!');
    }

    public function removeAdmin(User $user): RedirectResponse
    {
        // // Không cho phép hủy quyền của chính mình
        // if ($user->id === auth()->user()->id) {
        //     return redirect()->route('admin.user.index')->with('error', 'Bạn không thể hủy quyền admin của chính mình!');
        // }

        $user->update([
            'role' => 'customer',
        ]);

        return redirect()->route('admin.user.index')->with('success', 'Người dùng đã bị hủy quyền admin!');
    }
}
