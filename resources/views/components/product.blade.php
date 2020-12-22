@extends('home')
@section('content')
<div style="width:   400px;float: left;">
    <br><br>
    <b>SEARCH</b>
    <br><br>
    <form>
        <input type="text" placeholder="Search Something Here"style="border-radius: 6px 0px 0px 6px;height:30px;"><input type="submit" value="Search" style="cursor: pointer; background-color: rgb(23, 35, 63); color: white; border-radius: 0px 6px 6px 0px;height:35px;">
        <br><br><br>

        <b>By Category</b><br><br>
        <input type="checkbox" name="brand">T-Shirt <br><br>
        <input type="checkbox" name="brand">Accessories <br><br>
        <input type="checkbox" name="brand">Bags <br><br>
        <input type="checkbox" name="brand">Sneakers <br><br>
        <input type="checkbox" name="brand">Slides <br><br>
        <input type="checkbox" name="brand">Long Sleeves <br><br><br><br>
        
        <b>BRANDS</b><br><br>
        <input type="checkbox" name="brand">a <br><br>
        <input type="checkbox" name="brand">Givenchy <br><br>
        <input type="checkbox" name="brand">Gucci <br><br>
        <input type="checkbox" name="brand">Kenzo <br><br>
        <input type="checkbox" name="brand">Off White <br><br>
        <input type="checkbox" name="brand">Versace <br><br><br><br>
        <b>PRICE RANGE</b><br><br>
        <input type="range" name="harga" class="slider">
        <p><b>Rp. 1,000</b><span style="margin: 0px 0px 0px 150px"><b>RP. 50,000,000</b></span></p><br>
        <input type="submit" value="APPLY FILTER" style="width: 140px; height: 45px; background-color: rgb(23, 35, 63); color: white; cursor: pointer;"><br><br>
        <hr style="width: 320px; float: left;">
    </form>
</div><br><br>
<div>
    <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
        <div class="hu" >
            <input type="submit" value="70%" style="width: 70px; height: 30px; background-color: rgb(23, 35, 63); color: white; float: right;">
            <a href="/detailproduct"><img src="list1.jpg"></a>
            <br>Sepatu Biru<br>
            <span style="color: rgb(153, 147, 147);"><s>Rp,13,000,000</s></span><br>
            <span style="color: blue;">Rp,8,500,000</span>
        </div>
        <div class="hu" >
            <a href="/detailproduct"><img src="list2.jpg"></a>
            <br>Sepatu Hitam<br>
            <span style="color: blue;">Rp,13,500,000</span>
        </div>
        <div class="hu" >
            <a href="/detailproduct"><img src="list3.jpg"></a>
            <br>Sepatu Kuning<br>
            <span style="color: blue;">Rp,10,500,000</span>
        </div>
        <div class="hu" style="margin-left: 7vw;">
            <a href="/detailproduct"><img src="product1.jpg"></a>
            <br>Sepatu Coklat<br>
            <span style="color: blue;">Rp,11,500,000</span>
        </div>
        <div class="hu" >
            <a href="/detailproduct"><img src="product2.jpg"></a>
            <br>Sepatu Gray<br>
            <span style="color: blue;">Rp,12,500,000</span>
        </div>
        <div class="hu" >
            <a href="/detailproduct"><img src="list3.jpg"></a>
            <br>Sepatu Kuning<br>
            <span style="color: blue;">Rp,10,500,000</span>
        </div>
    </div>
</div>
<br><br><br>
@endsection
