<ul class="row g-2 list-unstyled li_animate row-cols-lg-5 row-cols-md-3 row-cols-sm-3 row-cols-2 row-deck mb-lg-5 mb-4">
    @foreach (config('navigation.header-popup.header') as $item )

    <li class="col">
        <a class="card hr-arrow p-4" href="{{route($item['route'])}}" title="{{$item['title']}}" style="--dynamic-color: var(--theme-color1);">
            {{-- svg width : 20 --}}
            {{ svg($item['icon'], 'mb-2', [
            'width' => 20,
            ]) }}
            <h6 class="title mb-1">{{ Str::title($item['title']) }}</h6>
            <p class="small text-muted mb-0 d-none d-xl-inline-flex">
                {{ __($item['desc']) }}
            </p>
            <div class="go-corner">
                <div class="go-arrow">→</div>
            </div>
        </a>
    </li>
    @endforeach
</ul>