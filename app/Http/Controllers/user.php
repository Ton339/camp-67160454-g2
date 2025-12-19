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
        $data['age'] = $request->input('age');
        $data['gender'] = $request->input('gender');
        $data['address'] = $request->input('address');
        $imagePath = null;
        if (! $request->hasFile('profile_image')) {
            dd('ไม่มีไฟล์ถูกส่งมาครับ กรุณาเช็ค enctype ที่ฟอร์ม');
        }
        if ($request->hasFile('profile_image')) {
            // บันทึกไฟล์ลงใน storage/app/public/uploads
            $imagePath = $request->file('profile_image')->store('uploads', 'public');
        }
        $data['profile_image'] = $imagePath;
        $data['fav_color'] = $request->input('fav_color');
        $data['music_genre'] = $request->input('music_genre');
        $data['consent'] = $request->input('consent');
        $prefix = '';
        $gender = '';
        if ($data['gender'] == 'male') {
            $gender = 'ชาย';
            $prefix = 'นาย';
        } elseif ($data['gender'] == 'female') {
            $gender = 'หญิง';
            $prefix = 'นางสาว';
        } else {
            $gender = 'ไม่ระบุ';
        }
        $result['full_name'] = $prefix.$data['first_name'].' '.$data['last_name'];
        $result['address'] = $data['address'];
        $result['gender'] = $gender;
        $result['birth_date'] = \Carbon\Carbon::parse($data['birth_date'])->format('d/m/Y');
        $result['age'] = $data['age'];
        if ($data['fav_color'] == 'red') {
            $fav_color = 'แดง';
            $color = 'danger';
        } elseif ($data['fav_color'] == 'blue') {
            $fav_color = 'น้ำเงิน';
            $color = 'primary';
        } else {
            $fav_color = 'เขียว';
            $color = 'success';
        }
        $result['fav_color'] = $fav_color;
        $result['color'] = $color;
        if ($data['music_genre'] == 'life') {
            $music_genre = 'ลูกทุ่ง';
        } elseif ($data['music_genre'] == 'lukthung') {
            $music_genre = 'ลูกทุ่ง';
        } else {
            $music_genre = 'อื่นๆ';
        }
        $result['music_genre'] = $music_genre;
        $result['consent'] = $data['consent'];
        $result['profile_image'] = $data['profile_image'];
        return view('userInfo', $result);
    }
}
