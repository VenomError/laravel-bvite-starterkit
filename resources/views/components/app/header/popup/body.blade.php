<div class="row g-5">
    <div class="col-lg-3 col-md-6 col-sm-6">
        @foreach (config('navigation.header-popup.body') as $parent => $item )
        <h6 class="mb-1 text-light fw-light">{{ Str::title($parent) }}</h6>
        <p class="text-muted small">
            {{ __($item['desc']) }}
        </p>
        <ul class="list-unstyled li_animate link-hover">
            @foreach ($item['sub'] as $sub )
            
            <li>
                <a href="{{ route($sub['route']) }}" aria-label="{{ Str::title($sub['title']) }}">
                    {{ Str::title($sub['title']) }}
                </a>
            </li>
            @endforeach
        </ul>
        @endforeach
    </div>
</div>