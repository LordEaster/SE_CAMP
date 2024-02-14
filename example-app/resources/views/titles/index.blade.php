@extends('layouts.default')

@section('title', 'Titles')

@section('js')
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
    $(function() {
        bsCustomFileInput.init();
    });

    function deleteme(id) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/titles/' + id,
                    type: 'DELETE',
                    data: {
                        // _token: $("input[name='_token']").val()
                        // _method: 'DELETE'
                        _token: "{{ csrf_token() }}"
                    }
                });
                // $('#form_delete_' + id).submit();
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
                getData();
            }
        });
    }

    function getData() {
        var value_my_tbody = ``
        $.ajax({
                method: "GET",
                url: "api/titles/"
            })
            .done(function(data) {
                data.forEach((val, index) => {
                    value_my_tbody += `<tr>
                                    <td>${index + 1}.</td>
                                    <td class="col-4">${val.tit_name}</td>
                                    <td class="col-2">
                                        ${val.tit_is_active }
                                    </td>
                                    <td>
                                      <img src="{{ asset('storage/') }}/${val.tit_image}">
                                    </td>
                                    <td style="display: flex">
                                        <a href="{{ url('/titles/') }}/${val.tit_id}" class="btn btn-warning">แก้ไข
                                        </a>
                                        <button type="button" onclick="deleteme(${val.tit_id})" class="btn btn-danger">ลบ</button>
                                    </td>
                                    </tr>`
                });
                $('#my_tbody').html(value_my_tbody);
            })



    }
    getData();
</script>
@endsection

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">SE CAMP</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Titles</a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">ข้อมูลคำนำหน้าชื่อ (Title)</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/titles<?php if (isset($title_id)) {
                                                echo '/' . $title_id->tit_id;
                                            } ?>" method="post" enctype="multipart/form-data">
                        <?php if (isset($title_id)) { ?>
                            @method('PUT')
                        <?php } ?>
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">คำนำหน้าชื่อ</label>
                                <input type="text" name="tit_name" value="<?php if (isset($title_id)) {
                                                                                echo $title_id->tit_name;
                                                                            } ?>" class="form-control" id="exampleInputEmail1" placeholder="เช่น นาย นาง นางสาว ฯลฯ">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="tit_is_active" <?php if (
                                                                                isset($title_id) &&
                                                                                $title_id->tit_is_active == 1
                                                                            ) { ?> checked <?php } ?> class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">ใช้งาน</label>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="tit_image" class="custom-file-input" id="tit_image">
                                <label class="custom-file-label" for="tit_image">Choose file</label>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">บันทึก</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">ผลลัพธ์</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>คำนำหน้าชื่อ</th>
                                    <th>สถานะการใช้งาน</th>
                                    <th>รูปภาพ</th>
                                    <th>เครื่องมือ</th>
                                </tr>
                            </thead>
                            <tbody id="my_tbody">
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection