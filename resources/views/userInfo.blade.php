@extends('template.defaultPage')
@section('title', 'userinfo')
@section('header', 'ข้อมูลผู้ใช้')

@section('content')
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
                                            style="width: 100%; max-height: 400px; object-fit: cover; aspect-ratio: 3/4;">
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
                                <h2 class="fw-bold mb-1 text-primary">{{ $full_name }}</h2>
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

                                    {{-- แถวที่ 2: วันเกิด และ อายุ --}}

                                    <div class="col-sm-6">
                                        <div class="d-flex">
                                            <span class="fw-bold text-secondary" style="min-width: 120px;">วันเกิด:</span>
                                            <span class="text-dark">{{ $birth_date }}</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex">
                                            <span class="fw-bold text-secondary" style="min-width: 120px;">อายุ:</span>
                                            <span class="text-dark">{{ $age }}</span>
                                        </div>
                                    </div>
                                    {{-- แถวที่ 3: เพศ  --}}
                                    <div class="col-sm-6">
                                        <div class="d-flex">
                                            <span class="fw-bold text-secondary" style="min-width: 120px;">เพศ:</span>
                                            <span class="text-dark">{{ $gender }}</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                    </div>

                                    {{-- แถวที่ 4: สี และ เพลง --}}
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
                                    <hr class="bg-light my-4">
                                    {{-- แถวที่ 5: การยินยอม --}}
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
