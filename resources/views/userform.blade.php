@extends('template.defaultPage')
@section('title', 'User Form')
@section('header', 'แบบฟอร์มข้อมูลผู้ใช้')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg rounded-4">
                    <div class="card-header bg-primary bg-gradient text-white p-4 rounded-top-4">
                        <h4 class="mb-0 fw-bold"><i class="bi bi-person-lines-fill me-2"></i>กรอกข้อมูลส่วนตัว</h4>
                        <small class="text-white-50">กรุณากรอกข้อมูลให้ครบถ้วนเพื่อลงทะเบียน</small>
                    </div>
                    <div class="card-body p-4 p-md-5">

                        <form class="row g-4 needs-validation" novalidate action="/user" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            {{-- ส่วนชื่อ-นามสกุล --}}
                            <div class="col-md-6">
                                <label for="firstName" class="form-label fw-bold text-secondary">ชื่อ</label>
                                <input type="text" class="form-control form-control bg-light" id="firstName"
                                    name="first_name" placeholder="ระบุชื่อจริง" required>
                                <div class="invalid-feedback">กรุณากรอกชื่อ</div>
                            </div>

                            <div class="col-md-6">
                                <label for="lastName" class="form-label fw-bold text-secondary">นามสกุล</label>
                                <input type="text" class="form-control form-control bg-light" id="lastName"
                                    name="last_name" placeholder="ระบุนามสกุล" required>
                                <div class="invalid-feedback">กรุณากรอกนามสกุล</div>
                            </div>

                            {{-- ส่วนวันเกิด-อายุ --}}
                            <div class="col-md-6">
                                <label for="birthDate" class="form-label fw-bold text-secondary">วันเกิด</label>
                                <input type="date" class="form-control form-control bg-light" id="birthDate"
                                    name="birth_date" required>
                                <div class="invalid-feedback">กรุณาระบุวันเกิด</div>
                            </div>
                            <div class="col-md-6">
                                <label for="age" class="form-label fw-bold text-secondary">อายุ</label>
                                <input type="number" class="form-control form-control bg-light" id="age"
                                    name="age" placeholder="ระบุอายุ" required>
                                <div class="invalid-feedback">กรุณากรอกอายุ</div>
                            </div>

                            {{-- ส่วนเพศ (เปลี่ยนเป็นปุ่มกดสวยๆ) --}}
                            <div class="col-12">
                                <label class="form-label fw-bold text-secondary d-block">เพศ</label>
                                <div class="btn-group w-100" role="group" aria-label="Gender selection">
                                    <input type="radio" class="btn-check" name="gender" id="genderMale" value="male"
                                        autocomplete="off" required>
                                    <label class="btn btn-outline-primary py-2" for="genderMale">ชาย</label>

                                    <input type="radio" class="btn-check" name="gender" id="genderFemale" value="female"
                                        autocomplete="off" required>
                                    <label class="btn btn-outline-danger py-2" for="genderFemale">หญิง</label>
                                </div>
                                <div class="invalid-feedback text-center mt-2">กรุณาระบุเพศ</div>
                            </div>

                            {{-- ที่อยู่ --}}
                            <div class="col-12">
                                <label for="address" class="form-label fw-bold text-secondary">ที่อยู่</label>
                                <textarea class="form-control bg-light" id="address" name="address" rows="3"
                                    placeholder="บ้านเลขที่, ถนน, ตำบล, อำเภอ, จังหวัด" required></textarea>
                                <div class="invalid-feedback">กรุณากรอกที่อยู่</div>
                            </div>

                            {{-- รูปภาพ --}}
                            <div class="col-12">
                                <label for="formFile" class="form-label fw-bold text-secondary">รูปภาพโปรไฟล์</label>
                                <input class="form-control" type="file" id="formFile" name="profile_image" required>
                                <div class="invalid-feedback">กรุณาอัปโหลดรูปภาพ</div>
                            </div>

                            <hr class="mt-4 mb-0 text-muted">

                            {{-- สีที่ชอบ --}}
                            <div class="col-md-6">
                                <label for="favColor" class="form-label fw-bold text-secondary">สีที่ชอบ</label>
                                <select class="form-select form-select bg-light" id="favColor" name="fav_color" required>
                                    <option selected disabled value="">กรุณาเลือกสี...</option>
                                    <option value="red">แดง</option>
                                    <option value="green">เขียว</option>
                                    <option value="blue">น้ำเงิน</option>
                                </select>
                                <div class="invalid-feedback">กรุณาเลือกสี</div>
                            </div>

                            {{-- แนวเพลง (ใช้ Card Selection เล็กๆ หรือ Radio แบบเดิมแต่จัดสวยขึ้น) --}}
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-secondary d-block">แนวเพลงที่ชอบ</label>
                                <div class="d-flex gap-3 flex-wrap">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="music_genre" id="music1"
                                            value="life" required>
                                        <label class="form-check-label" for="music1">เพื่อชีวิต</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="music_genre" id="music2"
                                            value="lukthung" required>
                                        <label class="form-check-label" for="music2">ลูกทุ่ง</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="music_genre" id="music3"
                                            value="other" required>
                                        <label class="form-check-label" for="music3">อื่นๆ</label>
                                    </div>
                                </div>
                                <div class="invalid-feedback">กรุณาเลือกแนวเพลง</div>
                            </div>

                            {{-- Consent --}}
                            <div class="col-12 mt-4">
                                <div class="form-check p-3 border rounded bg-light">
                                    <input class="form-check-input ms-0 me-2" type="checkbox" value="1"
                                        id="invalidCheck" name="consent" required>
                                    <label class="form-check-label user-select-none" for="invalidCheck">
                                        ฉันได้อ่านและ<strong>ยินยอม</strong>ให้เก็บรวบรวมข้อมูลส่วนบุคคล
                                    </label>
                                    <div class="invalid-feedback">คุณต้องกดยินยอมก่อนบันทึกข้อมูล</div>
                                </div>
                            </div>

                            {{-- Buttons --}}
                            <div class="col-12 mt-4 d-flex justify-content-between align-items-center">
                                <button type="reset"
                                    class="btn btn-light text-muted px-4  shadow-sm">ล้างข้อมูล</button>
                                <button class="btn btn-primary btn px-4 shadow-sm" type="submit">บันทึกข้อมูล</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        (function() {
            'use strict'

            // Animation effect when loading (Optional)
            const card = document.querySelector('.card');
            if (card) {
                card.style.opacity = 0;
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'all 0.5s ease-out';
                setTimeout(() => {
                    card.style.opacity = 1;
                    card.style.transform = 'translateY(0)';
                }, 100);
            }

            // Bootstrap Validation Logic
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
@endpush
