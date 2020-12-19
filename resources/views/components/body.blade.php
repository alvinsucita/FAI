@extends('home')
@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <div class="container" style=" display: block; text-align: center;">
    <br><br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="slider.jpg" alt="Los Angeles" style="width:100%;">
        </div>

        <div class="item">
          <img src="corosel1.jpg" alt="Chicago" style="width:75vw; height:75vh;">
        </div>

        <div class="item">
          <img src="corosel2.jpg" alt="New york" style="width:75vw; height:75vh;">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
<br>
<div>
    <p style="margin-left: 7vw; font-size: x-large; font-weight: bold; text-decoration: underline;">Catalog</p><br>
    <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
        <div class="ha" style="margin-left: 7vw;">
            <a href="/product"><img src="catalog1.jpg"></a>
        </div>
        <div class="ha" >
            <a href="/product"><img src="catalog2.jpg"></a>
        </div>
        <div class="ha" >
            <a href="/product"><img src="catalog3.jpg"></a>
        </div>
        <div class="ha" style="margin-left: 7vw;">
            <a href="/product"><img src="catalog4.jpg"></a>
        </div>
        <div class="ha" >
            <a href="/product"><img src="catalog5.jpg"></a>
        </div>
        <div class="ha" >
            <a href="/product"><img src="catalog6.jpg"></a>
        </div>
    </div>
</div>
<br>
<div>
    <a href="/product"><p style="margin-left: 7vw; font-size: x-large; font-weight: bold; text-decoration: underline; cursor: pointer; color: black;">Products</p></a><br>
    <div>
        <div class="hi" style="margin-left: 7vw;">
            <a href="DetailProduct.html"><img src="product1.jpg"></a>
        </div>
        <div class="hi" >
            <a href="DetailProduct.html"><img src="product2.jpg"></a>
        </div>
        <div class="hi" >
            <a href="DetailProduct.html"><img src="product3.jpg"></a>
        </div>
        <div class="hi" >
            <a href="DetailProduct.html"><img src="product4.jpg"></a>
        </div>
    </div>
</div>
<br><br><br>
@endsection
