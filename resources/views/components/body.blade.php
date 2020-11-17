@extends('home')
@section('content')
<div style=" display: block; text-align: center;">
    <img src="slider.jpg" style="width:75vw; height:75vh; margin:50px 50px 50px 50px;">
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
