@extends('layouts.default')

@section('title', 'Multiplication Table')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="content">
    <div class="container" style="max-width: 40vw">
        <div class="card card-primary card-outline">
        <div class="card-header">
            <h5 class="m-0">Multiplication Table</h5>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Enter Your Multiplier: </label>
                <input class="col-sm-8 form-control" style="margin-bottom: 2rem;" id="multiply" type="number" value="0" placeholder="multiply" onchange="genMultiTable()">
            </div>
            <div id="multable"></div>
        </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(genMultiTable())
    function genMultiTable() {
        $("#multable").remove();
        const multiply = $("#multiply").val();
        let t = `<table id="multable" class="table table-striped table-hover">`;
        for (let i=1; i <= 24; i++) { 
            let result = multiply * i;
            t += "<tr><td>" + multiply + "</td>";
            t += "<td>x</td>";
            t += "<td>" + i + "</td>";
            t += "<td>=</td>";
            t += "<td>" + result + "</td></tr>";
        }

        $("#multiply").after(t);
    }
</script>
@endsection

