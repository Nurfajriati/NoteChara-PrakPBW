<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <!-- <style type="text/css">
    @import "style.css";
</style> -->
</head>
<body>
@extends('template')
@section('konten')
<br><br><br>
<div class="text-center">
<img src="https://cdn.pixabay.com/photo/2019/05/14/21/50/storytelling-4203628_960_720.jpg" class="card-img-top" style="height: 30rem;" alt="...">
  @foreach
<div class="card" style="width: 100rem;">
  <div class="card-body">
    <h5 class="card-title">{{$sinopsis->judul}}</h5>
    <p class="card-text">{{$sinopsis->sinopsis}}</p>
    <a href="/notesinopsis/edit/{{ $sin->judul}}"class="card-link">Ubah</a>
    <a href="/notesinopsis/hapus/{{ $sin->judul}}" class="card-link">Delete</a>
  </div>
</div>
@endforeach
  <br><br>
@foreach
<div class="card" style="width: 100rem;">
  <div class="card-body">
    <h5 class="card-title">{{$chara->nama}}</h5>
    <p class="card-text">{{$chara->gender}}</p>
    <p class="card-text">{{$chara->watak}}</p>
    <p class="card-text">{{$chara->latarbelakang}}</p>
    <a href="/notesinopsis/edit/{{ $c->nama}}"class="card-link">Ubah</a>
    <a href="/notesinopsis/hapus/{{ $c->nama}}" class="card-link">Delete</a>
  </div>
</div>
@endforeach
</div>
@endsection
