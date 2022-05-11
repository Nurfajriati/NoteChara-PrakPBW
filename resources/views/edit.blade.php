@extends('template')
@section('konten')
    <form action="/notesinopsis/update" method="post">
        {{ csrf_field() }}
        <label for="fjudul">Judul</label><br>
        <input type="text" id="fjudul" name="judul" required="required" value="{{ $judul }}" readonly><br>
        <label for="fsinopsis">Sinopsis</label><br>
        @foreach ( $notesinopsis as $notesinopsis )
        <textarea class="form-control"  id="fsinopsis" name="sinopsis" required="required" style="width: 50rem;">{{ $notesinopsis['sinopsis'] }}</textarea>
        <br>
        @endforeach
        <input type="submit" value="Submit">
    </form>
@endsection
