@extends('template')
@section('konten')
<form action="/notechara/update" method ="get">
        {{csrf_field()}}
        <label for="fnama">Nama</label><br>
        <input type="text" id="fnama" name="nama" required="required" value="{{$chara->nama}}"><br>
        <label for="fgender">Jenis Kelamin</label><br>
        <input type="text" id="fgender" name="gender" required="required" value="{{$chara->gender}}"><br>
        <label for="fwatak">Watak</label><br>
        <input type="text" id="fwatak" name="watak" required="required" value="{{$chara->watak}}"><br>
        <label for="flatarbelakang">Latar Belakang</label><br>
        <input type="text" id="flatarbelakang" name="latarbelakang" required="required" value="{{$chara->latarbelakang}}"><br>
        <input type="submit" value="Submit">
    </form>

@endsection