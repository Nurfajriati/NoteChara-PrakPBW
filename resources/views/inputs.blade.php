@extends('template')
@section('konten')
<form action="/notesinopsis/store" method ="get">
        {{csrf_field()}}
        <label for="fjudul">Judul</label><br>
        <input type="text" id="fjudul" name="judul" required="required"><br>
        <label for="fsinopsis">Sinopsis</label><br>
        <input type="text" id="fsinopsis" name="sinopsis" required="required"><br>
        <input type="submit" value="Submit">
    </form>

@endsection
