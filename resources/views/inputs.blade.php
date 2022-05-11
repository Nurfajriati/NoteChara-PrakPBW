@extends('template')
@section('konten')
<div class=text-center>
<form action="/notesinopsis/store" method ="post">
        {{csrf_field()}}
        <label for="fjudul">Judul</label><br>
        <input type="text" id="fjudul" name="judul" required="required"><br>
        <label for="fsinopsis">Sinopsis</label><br>
        <!-- <input type="text" id="fsinopsis" name="sinopsis" required="required"><br> -->
        <div class = container>
        <textarea class="form-control" id="fsinopsis" name="sinopsis" required="required" rows="3"></textarea>
        </div>
        <br>
        <input type="submit" value="Submit">
    </form>
</div>
@endsection
