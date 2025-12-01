<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>workshop # html-form</title>
</head>

<body>
    <div class="container">
        <h1>workshop # html-form</h1>
        <form class="mt-5">
            <div class="row g-2 mb-3">
                <div class="input-group  col">
                    <span class="input-group-text" id="basic-addon1" for="firstName">ชื่อ</span>
                    <input type="text" class="form-control" placeholder="เช่น สมชาย" aria-label="เช่น สมชาย"
                        aria-describedby="basic-addon1" id="firstName">
                </div>
                <div class="input-group col">
                    <span class="input-group-text" id="basic-addon1" for="lastName">นามสกุล</span>
                    <input type="text" class="form-control" placeholder="เช่น ใจดี" aria-label="เช่น ใจดี"
                        aria-describedby="basic-addon1" id="lastName">
                </div>
            </div>

            <div class="row g-2 mb-3 input-group">
                <div class="input-group  col">
                    <span class="input-group-text " id="basic-addon1" for="birthDate">วันเกิด</span>
                    <input type="date" class="form-control " aria-label="วันที่" aria-describedby="basic-addon1"
                        id="birthDate">
                </div>
                <div class="input-group  col">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="flexRadioDefault1">
                            เพศ </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            ชาย </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            หญิง
                        </label>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupFile01">รูป</label>
                <input type="file" class="form-control" id="inputGroupFile01">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">ที่อยู่</span>
                <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">สีที่ชอบ</label>
                <select class="form-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="1">เเดง</option>
                    <option value="2">เขียว</option>
                    <option value="3">น้ำเงิน</option>
                </select>
            </div>

            <div class="mb-3">
                <div class="form-check-inline">
                    <label class="form-check-label" for="flexRadioDefault1">
                        แนวเพลงที่ชอบ </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        เพื่อชีวิต </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        ลูกทุ่ง
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        อื่นๆ
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2" checked>
                ยินยอมให้เก็บข้อมูล

            </div>
            <div style="display: flex;">
                <input class="btn btn-light" type="reset" value="Reset">
                <button type="submit" class="btn btn-success" style="margin-left: auto;">Submit</button>
            </div>


        </form>
    </div>
</body>

</html>