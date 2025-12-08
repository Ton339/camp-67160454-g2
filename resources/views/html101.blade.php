@extends('template.defaultPage')

@section('content')
    <div class="container">
        <h1>workshop # html-form (Bootstrap Style)</h1>

        <form class="row g-3 needs-validation" novalidate>

            <div class="col-md-6">
                <label for="firstName" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" id="firstName" placeholder="เช่น สมชาย" required>
                <div class="valid-feedback">
                    ดีเยียม
                </div>
                <div class="invalid-feedback">
                    กรุณากรอกชื่อ
                </div>
            </div>

            <div class="col-md-6">
                <label for="lastName" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" id="lastName" placeholder="เช่น ใจดี" required>
                <div class="valid-feedback">
                    ดีเยียม
                </div>
                <div class="invalid-feedback">
                    กรุณากรอกนามสกุล
                </div>
            </div>

            <div class="col-md-6">
                <label for="birthDate" class="form-label">วันเกิด</label>
                <input type="date" class="form-control" id="birthDate" required>
                <div class="valid-feedback">
                    ดีเยียม
                </div>
                <div class="invalid-feedback">
                    กรุณาระบุวันเกิด
                </div>
            </div>

            <div class="col-md-6">
                <label class="form-label d-block">เพศ</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="genderMale" required>
                    <label class="form-check-label" for="genderMale">ชาย</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="genderFemale" required>
                    <label class="form-check-label" for="genderFemale">หญิง</label>
                </div>
            </div>

            <div class="col-12">
                <label for="formFile" class="form-label">รูปภาพ</label>
                <input class="form-control" type="file" id="formFile" required>
                <div class="valid-feedback">
                    ดีเยียม
                </div>
                <div class="invalid-feedback">
                    กรุณาอัปโหลดรูปภาพ
                </div>
            </div>

            <div class="col-12">
                <label for="address" class="form-label">ที่อยู่</label>
                <textarea class="form-control" id="address" rows="3" required></textarea>
                <div class="valid-feedback">
                    ดีเยียม
                </div>
                <div class="invalid-feedback">
                    กรุณากรอกที่อยู่
                </div>
            </div>

            <div class="col-md-6">
                <label for="favColor" class="form-label">สีที่ชอบ</label>
                <select class="form-select" id="favColor" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="1">แดง</option>
                    <option value="2">เขียว</option>
                    <option value="3">น้ำเงิน</option>
                </select>
                <div class="valid-feedback">
                    ดีเยียม
                </div>
                <div class="invalid-feedback">
                    กรุณาเลือกสี
                </div>
            </div>

            <div class="col-md-6">

                <label class="form-label d-block">แนวเพลงที่ชอบ</label>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="music_genre" id="music1" required>
                    <label class="form-check-label" for="music1">เพื่อชีวิต</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="music_genre" id="music2" required>
                    <label class="form-check-label" for="music2">ลูกทุ่ง</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="music_genre" id="music3" required>
                    <label class="form-check-label" for="music3">อื่นๆ</label>
                </div>



            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        ยินยอมให้เก็บข้อมูล
                    </label>
                    <div class="valid-feedback">
                        ดีเยียม
                    </div>
                    <div class="invalid-feedback">
                        คุณต้องกดยินยอมก่อน
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: space-between; width: 100%;">
                <button type="reset" class="btn btn-light">Reset</button>
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>

        </form>
    </div>
@endsection

@push('scripts')
    <script>
        console.log('testๆๆ');
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            console.log('validat called')
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
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