@props([
'item'
])
<li>
    <a href="#{{ __(Str::snake($item['route'])) }}" data-bs-toggle="collapse" aria-expanded="false"
        class="dropdown-toggle" aria-label="Users">
        {{-- icon --}}
        {{ svg($item['icon'], '', [
        'width' => 20,
        ]) }}
        <span class="mx-2 text-capitalize">{{ $item['title'] }}</span>
    </a>
    <ul class="collapse list-unstyled" id="{{ __(Str::snake($item['route'])) }}">
        @foreach ($item['sub'] as $sub )
        <li>
            <a href="{{ route($sub['route']) }}" aria-label="My Profile" class="text-capitalize">
                {{ $sub['title'] }}
            </a>

        </li>
        @endforeach
        
    </ul>
</li>