 @props([
     'items' => [
         [
             'route' => '',
             'title' => 'title',
         ],
     ],
 ])

 <ol class="breadcrumb mb-0 bg-transparent">
     @foreach (collect($items) as $item)
         @isset($item['route'])
             <li class="breadcrumb-item">
                 <a href="{{ route($item['route']) }}" title="{{ Str::lower($item['title']) }}">
                     {{ Str::title($item['title']) }}
                 </a>
             </li>
         @else
         <li class="breadcrumb-item active" aria-current="page" title="{{ Str::lower($item['title']) }}">{{ Str::title($item['title']) }}</li>
         @endisset
     @endforeach

 </ol>
