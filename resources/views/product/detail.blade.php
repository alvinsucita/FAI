@extends('home')

@section('content')
<style>
	.img-product {
		width: 100%;
		height: 100%;
	}
	.flex-gap > div {
		margin:10px;
	}
</style>
<br><br><br><br>
<div class="container">
	<div class="row m-4">
		<div class="col-sm-12 col-md-6" style="position: relative;border: 1px solid orange">
			<a href="javascript:void(0)">
				<img src="/{{$product->image}}" alt="Product Main Image" class="img-product">
			</a>

			<!-- List Grid -->
			@if( count($productImages) > 0 )
			<br><br>
			<div style="display: flex;flex-flow: row wrap;justify-content: start;align-items: center;" class="flex-gap">
				@foreach($productImages as $img)
				<div class="m-3" style="border: 1px solid orange;">
					<a href="#" onclick="changeImage(this, event)" class="small-image">
					<img src="/{{$img->image}}" alt="Product Image" width="80" height="80">
					</a>
				</div>
				@endforeach
			</div>
			@endif
		</div>

		<div class="col-sm-12 offset-md-1 col-md-5" style="margin-left: 50px;">
			<h2>{{ strtoupper($product->name)}}</h2>
			<h4>Stock : {{$product->stok}}</h4>
			<h4>Terjual: {{$product->sold}}</h4>
			<h4>Ukuran: {{$product->size}}</h4>
			<br>
			<h3 class="mt-4 font-weight-bold text-danger">
				Rp {{ number_format($product->harga, 2, ',', '.') }}
			</h3>

			<a class="btn btn-primary" href="/produk/detail/size">
				Lihat Size
			</a>
		</div>
	</div>
</div>
<br><br><br><br><br><br>

<script>
	function changeImage(self, e) {
		e.preventDefault();
		let image = $(self).find('img').attr('src');
		$('.img-product').attr('src', image)
	}
</script>
@endsection