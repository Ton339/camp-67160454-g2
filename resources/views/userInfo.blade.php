@extends('template.defaultPage')
@section('title', 'userinfo')
@section('header', 'ข้อมูลผู้ใช้')

@section('content')
    <?php
    if ($gender == 'male') {
        $gender = 'ชาย';
        $prefix = 'นาย';
    } elseif ($gender == 'female') {
        $gender = 'หญิง';
        $prefix = 'นางสาว';
    } else {
        $gender = 'ไม่ระบุ';
    }

    $fullName = $prefix . $first_name . ' ' . $last_name;

    $birth_date = \Carbon\Carbon::parse($birth_date)->format('d/m/Y');
    $color = 'secondary';
    if ($fav_color == 'red') {
        $fav_color = 'แดง';
        $color = 'danger';
    } elseif ($fav_color == 'blue') {
        $fav_color = 'น้ำเงิน';
        $color = 'primary';
    } else {
        $fav_color = 'เขียว';
        $color = 'success';
    }

    if ($music_genre == 'life') {
        $music_genre = 'ลูกทุ่ง';
    } elseif ($music_genre == 'lukthung') {
        $music_genre = 'ลูกทุ่ง';
    } else {
        $music_genre = 'อื่นๆ';
    }
    ?>


    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body p-4 p-md-5">
                        <div class="row g-4 align-items-center">

                            {{-- ส่วนรูปภาพโปรไฟล์ --}}
                            <div class="col-md-4 text-center">
                                <div class="position-relative d-inline-block">
                                    @if ($profile_image)
                                        <img src="{{ asset('storage/' . $profile_image) }}" alt="รูปโปรไฟล์"
                                            class="img-fluid rounded-3 shadow-sm border"
                                            style="width: 100%; max-height: 300px; object-fit: cover; aspect-ratio: 3/4;">
                                    @else
                                        <div class="bg-light rounded-3 d-flex align-items-center justify-content-center border"
                                            style="width: 200px; height: 300px; margin: auto;">
                                            <span class="text-muted">ไม่มีรูปภาพ</span>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- ส่วนข้อมูล --}}
                            <div class="col-md-8">
                                <h2 class="fw-bold mb-1 text-primary">{{ $fullName }}</h2>
                                <p class="text-muted mb-4">ข้อมูลส่วนตัวสมาชิก</p>

                                <hr class="bg-light my-4">

                                <div class="row gy-3">
                                    {{-- แถวที่ 1: ที่อยู่ --}}
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <span class="fw-bold text-secondary" style="min-width: 120px;">ที่อยู่:</span>
                                            <span class="text-dark">{{ $address }}</span>
                                        </div>
                                    </div>

                                    {{-- แถวที่ 2: เพศ และ วันเกิด --}}
                                    <div class="col-sm-6">
                                        <div class="d-flex">
                                            <span class="fw-bold text-secondary" style="min-width: 120px;">เพศ:</span>
                                            <span class="text-dark">{{ $gender }}</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex">
                                            <span class="fw-bold text-secondary" style="min-width: 120px;">วันเกิด:</span>
                                            <span class="text-dark">{{ $birth_date }}</span>
                                        </div>
                                    </div>

                                    {{-- แถวที่ 3: สี และ เพลง --}}
                                    <div class="col-sm-6">
                                        <div class="d-flex">
                                            <span class="fw-bold text-secondary" style="min-width: 120px;">สีที่ชอบ:</span>
                                            <span
                                                class="badge bg-{{ $color }} bg-opacity-10 text-{{ $color }} border border-{{ $color }} border-opacity-25">
                                                {{ $fav_color }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex">
                                            <span class="fw-bold text-secondary" style="min-width: 120px;">แนวเพลง:</span>
                                            <span class="text-dark">{{ $music_genre }}</span>
                                        </div>
                                    </div>

                                    {{-- แถวที่ 4: การยินยอม --}}
                                    <div class="col-12 mt-4">
                                        <div
                                            class="d-flex align-items-center p-3 rounded-3 {{ $consent == '1' ? 'bg-success bg-opacity-10 border border-success border-opacity-25' : 'bg-danger bg-opacity-10 border border-danger border-opacity-25' }}">
                                            <span
                                                class="fw-bold me-2 {{ $consent == '1' ? 'text-success' : 'text-danger' }}">
                                                สถานะการยินยอม:
                                            </span>
                                            <span class="{{ $consent == '1' ? 'text-success' : 'text-danger' }}">
                                                {{ $consent == '1' ? 'ยินยอมให้เก็บข้อมูล' : 'ไม่ยินยอมให้เก็บข้อมูล' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
