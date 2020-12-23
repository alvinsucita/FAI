 <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
    @if(count($datas) > 0)

    @foreach($datas as $d)
    <div class="hu">
        <a href="/product/detail/{{$d->product_id}}">
            <img src="{{ is_null($d->image) ? 'list1.jpg' : $d->image }}" alt="Image Product" />
        </a>
        <br>
        {{$d->name}}
        <br>
        <span class="text-primary">
            Rp {{number_format($d->harga, 2, ',', '.')}}
        </span>
    </div>
    @endforeach

    @else
    <p class="text-left alert alert-danger">No Product Available.</p>
    @endif
</div>