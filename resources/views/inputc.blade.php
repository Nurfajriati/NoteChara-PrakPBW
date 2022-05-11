@extends('template')
@section('konten')
<div class=text-center>
<form action="/notechara/store" method ="get">
        {{csrf_field()}}
        <label for="fnama">Nama</label><br>
        <input type="text" id="fnama" name="nama" required="required"><br>
        <label for="fgender">Jenis Kelamin</label><br>
        <input type="text" id="fgender" name="gender" required="required"><br>
        <label for="fwatak">Watak</label><br>
        <input type="text" id="fwatak" name="watak" required="required"><br>
        <label for="flatarbelakang">Latar Belakang</label><br>
        <!-- <input type="text" id="flatarbelakang" name="latarbelakang" required="required"><br> -->
        <div class = container>
        <textarea class="form-control" id="flatarbelakang" name="latarbelakang" required="required" rows="3"></textarea>
        </div>
        <br>
        <input type="submit" value="Submit">
    </form>
</div>
@endsection