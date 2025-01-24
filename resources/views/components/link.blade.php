@props([
    'href' 
])
<link {{ $attributes->merge([
    'href' => asset($href)
]) }}>