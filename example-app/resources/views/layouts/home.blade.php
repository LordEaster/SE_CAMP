@extends('layouts.default')

@section('title', 'Complete information')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card card-secondary card-outline">
        <div class="card-header">
            <h5 class="m-0">Information Form</h5>
        </div>
        <div class="card-body">
            <form>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ชื่อ</label>
                        <input class="col-sm-10 form-control" type="text" name="name" placeholder="กรอกชื่อ">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">สกุล</label>
                        <input class="col-sm-10 form-control" type="text" name="lastname" placeholder="กรอกนามสกุล">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">วัน/เดือน/ปีเกิด</label>
                        <input class="col-sm-10 form-control" type="date" name="date">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">อายุ</label>
                        <input class="col-sm-10 form-control" type="number" name="age" placeholder="กรอกอายุ">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">เพศ</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="gender-male" name="gender" value="male">
                            <label class="form-check-label" for="gender-male">ชาย</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="gender-female" name="gender" value="female">
                            <label class="form-check-label" for="gender-female">หญิง</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="gender-other" name="gender" value="other">
                            <label class="form-check-label" for="gender-other">อื่นๆ</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">รูป</label>
                        <div class="col-sm-10 custom-file">
                            <label class="custom-file-label">เลือกรูปภาพ</label>
                            <input class="custom-file-input" type="file" id="picture" name="picture">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ที่อยู่</label>
                        <textarea class="col-sm-10 form-control" id="address" rows="4" name="address" placeholder="กรอกที่อยู่"></textarea>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">สีที่ชอบ</label>
                        <select class="col-sm-10 form-control" id="fav-color" name="fav-color">
                            <option selected="true" disabled="disabled">เลือก</option> 
                            <option value="purple">ม่วง</option>
                            <option value="blue">น้ำเงิน</option>
                            <option value="skyblue">ฟ้า</option>
                            <option value="green">เขียว</option>
                            <option value="yellow">เหลือง</option>
                            <option value="orange">ส้ม</option>
                            <option value="red">แดง</option>
                            <option value="pink">ชมพู</option>
                            <option value="gray">เทา</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">แนวเพลงที่ชอบ</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="genre-forlife" name="genre" value="forlife">
                            <label class="form-check-label" for="genre-forlife">เพื่อชีวิต</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="genre-country" name="genre" value="country">
                            <label class="form-check-label" for="genre-country">ลูกทุ่ง</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="genre-other" name="genre" value="other">
                            <label class="form-check-label" for="genre-other">อื่นๆ</label>
                        </div>
                    </div> 

                    <div class="form-group">
                        <div class="form-check offset-sm-2">
                            <input class="form-check-input" type="checkbox" id="form-accept" name="accept">
                            <label class="form-check-label" for="form-accept">ยินยอมให้เก็บข้อมูล</label>
                        </div>
                    </div>

                    <div class="form-group offset-sm-2">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection