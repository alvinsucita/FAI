@extends('home')
@section('content')
<div style="width:   400px;float: left;">
    <br><br>
    <b>SEARCH</b>
    <br><br>
    <form onsubmit="filterProduct(this, event)">
        <input type="text" placeholder="Product Name..."style="border-radius: 6px 0px 0px 6px;height:30px;" name="search">
        <input type="submit" value="Search" style="cursor: pointer; background-color: rgb(23, 35, 63); color: white; border-radius: 0px 6px 6px 0px;height:35px;">
        <br><br><br>

        <b>By Category</b><br><br>
        @foreach($categories as $c)
        <input type="checkbox" name="categories[]" value="{{$c->category_id}}" class="mr-4">
        <span>
            {{$c->name}}    
        </span>
        <br><br>
        @endforeach
        
        <!-- <b>BRANDS</b><br><br>
        <input type="checkbox" name="brand">a <br><br>
        <input type="checkbox" name="brand">Givenchy <br><br>
        <input type="checkbox" name="brand">Gucci <br><br>
        <input type="checkbox" name="brand">Kenzo <br><br>
        <input type="checkbox" name="brand">Off White <br><br>
        <input type="checkbox" name="brand">Versace <br><br><br><br> -->
        <b>PRICE RANGE</b><br><br>
        <select name="price" id="price" class="form-control">
            <option value="">-- Pilih --</option>
            <option value="popularity">Populer</option>
            <option value="low">Terendah</option>
            <option value="high">Tertinggi</option>
        </select>
        <!-- <input type="range" name="harga" class="slider">
        <p><b>Rp. 1,000</b><span style="margin: 0px 0px 0px 150px"><b>RP. 50,000,000</b></ span></p><br>-->
            <br><br>
        <input type="submit" value="APPLY FILTER" style="width: 140px; height: 45px; background-color: rgb(23, 35, 63); color: white; cursor: pointer;"><br><br>
        <hr style="width: 320px; float: left;">
    </form>
</div><br><br>
<div id="content-data">
   @include('product.load-data')
</div>
<br><br><br>

<script>
    function filterProduct(self, e) {
        e.preventDefault();

        $.ajax({
            type: 'post',
            url: '/product/filter',
            headers: {
                'X-CSRF-TOKEN': $('#meta-csrf').attr('content')
            },
            data: $(self).serialize(),
            success: res => {
                $('#content-data').html(res)
            },
            error: e => {
                console.error(e);
                return false;
            }
        });
    }
</script>
@endsection

