@extends('components.layouts.app')

@section('meta')
    <x-app.meta />
@endsection

@section('style')
    <x-app.style />
@endsection

@section('title', 'Helo World')
@section('theme', 'ValenciaRed')
@section('stroke', 'a')
@section('layout', 'a')

@section('content')
    {{ $slot }}
@endsection

@section('script')
    <x-app.script />
@endsection
