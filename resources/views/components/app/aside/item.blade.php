  @props([
      'items' => [],
  ])

  <ul class="list-unstyled mb-4 menu-list">
      @foreach ($items as $item)
          @if (!isset($item['sub']) || empty($item['sub']))
              <li>
                  <a href="{{ route($item['route']) }}" aria-label="{{ $item['title'] }}">
                      {{-- ICON --}}
                      {{ svg($item['icon'], '', [
                          'width' => 20,
                      ]) }}
                      <span class="mx-2 text-capitalize ">{{ $item['title'] }}</span>
                  </a>
              </li>
          @else
              <x-app.aside.item-sub :item="$item" />
          @endif
      @endforeach
  </ul>
