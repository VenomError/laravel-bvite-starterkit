<?php
use Illuminate\View\View;
use function Laravel\Folio\{name, render};
name('dashboard.index');

render(function (View $view) {
    $breadcrumbs = [
        [
            'route' => 'dashboard.index',
            'title' => 'dashboard'
        ]
    ];
    return $view->with('breadcrumbs' , $breadcrumbs);
});
?>
<x-app>
    <h2>Hell Wordl</h2>
    <livewire:counter />
    <x-slot:breadcrumb>
        <x-breadcrumb :items="$breadcrumbs" />
    </x-slot:breadcrumb>
</x-app>
