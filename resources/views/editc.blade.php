@extends('template')
@section('konten')
    <form action="/notechara/update" method="post">
        {{ csrf_field() }}
        @foreach ($chara as $chara )
        <label for="fnama">Nama</label><br>
        <input type="text" id="fnama" name="nama" required="required" value="{{ $chara['nama'] }}" readonly><br>
        <label for="fgender">Jenis Kelamin</label><br>
        <input type="text" id="fgender" name="gender" required="required" value="{{ $chara['gender'] }}"><br>
        <label for="fwatak">Watak</label><br>
        <input type="text" id="fwatak" name="watak" required="required" value="{{ $chara['watak'] }}"><br>
        <label for="flatarbelakang">Latar Belakang</label><br>
        <textarea class="form-control" id="flatarbelakang" name="latarbelakang" required="required" style="width: 50rem;">{{ $chara['latarbelakang'] }}</textarea><br>
        @endforeach
        <input type="submit" value="Submit">
    </form>
@endsection
