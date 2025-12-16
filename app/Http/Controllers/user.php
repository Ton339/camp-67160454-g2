<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    public function index()
    {
        return view('userform');
    }

    public function store(Request $request)
    {
        $data['first_name'] = $request->input('first_name');
        $data['last_name'] = $request->input('last_name');
        $data['birth_date'] = $request->input('birth_date');
        $data['gender'] = $request->input('gender');
        $imagePath = null;
        if (! $request->hasFile('profile_image')) {
            dd('ไม่มีไฟล์ถูกส่งมาครับ กรุณาเช็ค enctype ที่ฟอร์ม');
        }
        if ($request->hasFile('profile_image')) {
            // บันทึกไฟล์ลงใน storage/app/public/uploads
            $imagePath = $request->file('profile_image')->store('uploads', 'public');
        }
        $data['profile_image'] = $imagePath;
        $data['address'] = $request->input('address');
        $data['fav_color'] = $request->input('fav_color');
        $data['music_genre'] = $request->input('music_genre');
        $data['consent'] = $request->input('consent');

        return view('userInfo', $data);
    }
}
