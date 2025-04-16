<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with('user')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.orders.list', compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('admin.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:pending,processing,shipped,delivered,canceled',
        ]);

        if ($order->status === 'shipped') {
            Session::flash('error', 'Không thể thay đổi trạng thái đơn hàng đã giao.');
            return redirect()->route('admin.orders.index');
        }

        if ($order->status !== $request->status) {
            $order->update(['status' => $request->status]);
            $order->orderHistoryStatuses()->create([
                'status' => $request->status,
                'changed_at' => now(),
            ]);
            Session::flash('success', 'Cập nhật trạng thái đơn hàng thành công.');
        } else {
            Session::flash('info', 'Trạng thái đơn hàng không có gì thay đổi.');
        }

        return redirect()->route('admin.orders.index');
    }

    public function show(Order $order)
    {
        $order->load('user', 'orderDetails.product');

        return view('admin.orders.show', compact('order'));
    }
}