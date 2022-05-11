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
</head>
<body>
@extends('template')
@section('konten')
<div>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://ae01.alicdn.com/kf/HTB1lwnDvQCWBuNjy0Faq6xUlXXaQ/Rumah-Kolam-DIY-Lukisan-dengan-Angka-Pemandangan-Vintage-Dinding-Lukisan-Akrilik-Cat-Di-Atas-Kanvas-untuk.jpg"  width="100%" height="700">
      <div class="carousel-caption d-none d-md-block" >
        <h5><b>SMART<b></h5>
        <p><b><i>Study more and you will be the number one!<i><b></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://p4.wallpaperbetter.com/wallpaper/770/981/90/fantasy-lscape-2-green-forest-painting-wallpaper-preview.jpg" width="100%" height="700">
      <div class="carousel-caption d-none d-md-block">
        <h5><b>IMAGINATION<b></h5>
        <p><b><i>Your imagination is your fantasy!<b><i></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://w7.pngwing.com/pngs/413/139/png-transparent-books-background-books-retro-library.png" width="100%" height="700">
      <div class="carousel-caption d-none d-md-block">
        <h5><b>WRITE<b></h5>
        <p><b><i>Write it just like you make your own world!<b><i></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <!-- <span class="visually-hidden">Previous</span> -->
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <!-- <span class="visually-hidden">Next</span> -->
  </button>
  </div>
  @endsection
