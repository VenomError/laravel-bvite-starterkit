<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    @yield('meta')

    @livewireStyles
    @yield('style')
    @stack('style')

</head>


<body 
data-bvite="theme-@yield('theme' , 'CeruleanBlue')" 
class="layout-border 
svgstroke-@yield('stroke' , 'a') 
layout-@yield('layout' , 'default')"
>

    <!-- start: main grid layout -->
    <main class="container-fluid px-0">

        <!-- start: project logo -->
        <x-app.logo />

        <!-- start: page header -->
       <x-app.header />

        <!-- start: page menu link -->
        <x-app.aside />

        <!-- start: page icon link -->
        <x-app.rightbar />

        <!-- start: page header area -->
        <x-app.header.area >

            <x-slot:breadcrumb>
                @yield('breadcrumb')
            </x-slot:breadcrumb>

            @yield('breadcrumb_right')
        </x-app.header.area>

        <!-- start: page body area -->
        <div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
           @yield('content')
        </div>

        <!-- start: page footer -->
        <footer class="px-md-4 px-2">
            
        </footer>

    </main>
    @livewireScripts
    @yield('script')
    @stack('script')
 
</body>

</html>
