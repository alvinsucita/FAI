 <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
    @if(count($datas) > 0)

    @foreach($datas as $d)
    <div class="hu">
        <a href="/detailproduct">
            <img src="{{ is_null($d->image) ? 'list1.jpg' : $d->image }}" alt="Image Product" />
        </a>
        <br>
        {{$d->name}}
        <br>
        <span class="text-primary">
            {{$d->harga}}
        </span>
    </div>
    @endforeach

    @else
    <p class="text-left alert alert-danger">No Product Available.</p>
    @endif
</div>