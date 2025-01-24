@props([
    'menu' => [],
])

@foreach ($menu as $mother => $child)
    <x-app.aside.title :title="$mother" />
    
    <x-app.aside.item :items="$child" />
@endforeach
