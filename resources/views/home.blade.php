@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">ข้อมูลส่วนบุคคล</h3>
        </div>


        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อ</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter firstname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">นามสกุล</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter lastname">
                </div>
                <div class="form-group">
                    <label>วัน/เดือน/ปีเกิด</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">อายุ</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter age">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">เพศ</label>
                    <div class="col-sm-6">

                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
                                <label for="customRadio1" class="custom-control-label">ชาย</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio"
                                    checked="">
                                <label for="customRadio2" class="custom-control-label">หญิง</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">รูป</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>ที่อยู่</label>
                        <textarea class="form-control" rows="3" placeholder="Enter Address"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label>สีที่ชอบ</label>
                    <select class="form-control">
                        <option>สีขาว</option>
                        <option>สีดำ</option>
                        <option>สีชมพู</option>
                        <option>สีฟ้า</option>
                        <option>ชอบสีไรเขาก็ไม่รักมึงหรอกครับ</option>
                    </select>
                </div>
                <div class="form-group2">
                    <label for="exampleInputEmail2">แนวเพลงที่ชอบ</label>
                    <div class="col-sm-6">

                        <div class="form-group2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="customRadio3" name="customRadio">
                                <label for="customRadio3" class="custom-control-label">pop</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="customRadio4" name="customRadio"
                                    checked="">
                                <label for="customRadio4" class="custom-control-label">k-pop</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="customRadio5" name="customRadio"
                                    checked="">
                                <label for="customRadio5" class="custom-control-label">hiphop</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="customRadio6" name="customRadio"
                                    checked="">
                                <label for="customRadio6" class="custom-control-label">ซอบเธอมากกว่า</label>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="form-check">
                    <br>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">ยินยอมให้เก็บข้อมูล</label>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
        <div>ควย</div>
    </div>
    <div>asdasdasdasd</div>
@endsection
