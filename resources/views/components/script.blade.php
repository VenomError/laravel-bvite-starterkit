@props([
    'src' => ''
])
<script {{ $attributes->merge([
    'src' => asset($src)
]) }}>
{{ $slot }}
</script>