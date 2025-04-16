<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ColorController extends Controller
{
    public function index()
    {
        $colors = DB::table('colors')->get();
        return view('admin.colors.list', compact('colors'));
    }

    public function create()
    {
        return view('admin.colors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'hex_code' => 'required|string|max:7|regex:/^#[0-9A-Fa-f]{6}$/',
        ]);

        DB::table('colors')->insert([
            'name' => $request->name,
            'hex_code' => $request->hex_code,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.colors.index')->with('success', 'Màu đã được thêm!');
    }

    public function edit($id)
    {
        $color = DB::table('colors')->where('id', $id)->first();
        return view('admin.colors.edit', compact('color'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'hex_code' => 'required|string|max:7|regex:/^#[0-9A-Fa-f]{6}$/',
        ]);

        DB::table('colors')->where('id', $id)->update([
            'name' => $request->name,
            'hex_code' => $request->hex_code,
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.colors.index')->with('success', 'Màu đã được cập nhật!');
    }

    public function destroy($id)
    {
        DB::table('colors')->where('id', $id)->delete();
        return redirect()->route('admin.colors.index')->with('success', 'Màu đã bị xóa!');
    }
}

