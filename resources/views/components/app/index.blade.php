@extends('components.layouts.app')

@section('meta')
    <x-app.meta />
@endsection

@section('style')
    <x-app.style />
@endsection

@section('title', $title ?? env('APP_NAME' , ''))
@section('theme', 'CeruleanBlue')
@section('stroke', 'a')
@section('layout', 'a')

@section('breadcrumb')
    {{ $breadcrumb ?? '' }}
@endsection
@section('breadcrumb_right')
    {{ $breadcrumb_right ?? '' }}
@endsection

@section('content')
    {{ $slot }}
@endsection

@section('script')
    <x-app.script />
@endsection
