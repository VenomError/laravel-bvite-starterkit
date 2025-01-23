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
        <x-app.icon-link />

        <!-- start: page header area -->
        <x-app.header.area />

        <!-- start: page body area -->
        <div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
           @yield('content')
        </div>

        <!-- start: page footer -->
        <footer class="px-md-4 px-2">
            
        </footer>

    </main>

    <!-- start: template setting, and more. -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas_setting"
        aria-labelledby="offcanvas_setting">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Template Setting</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="mb-4">
                <h6>Set Theme Color</h6>
                <ul class="choose-skin list-unstyled mb-0">
                    <li data-theme="ValenciaRed">
                        <div style="--bvite-theme-color: #D63B38;"></div>
                    </li>
                    <li data-theme="SunOrange">
                        <div style="--bvite-theme-color: #F7A614;"></div>
                    </li>
                    <li data-theme="AppleGreen">
                        <div style="--bvite-theme-color: #5BC43A;"></div>
                    </li>
                    <li data-theme="CeruleanBlue">
                        <div style="--bvite-theme-color: #00B8D6;"></div>
                    </li>
                    <li data-theme="Mariner" class="active">
                        <div style="--bvite-theme-color: #0066FE;"></div>
                    </li>
                    <li data-theme="PurpleHeart">
                        <div style="--bvite-theme-color: #6238B3;"></div>
                    </li>
                    <li data-theme="FrenchRose">
                        <div style="--bvite-theme-color: #EB5393;"></div>
                    </li>
                </ul>
            </div>
            <div class="layout-option mb-4">
                <h6>Template Layouts</h6>
                <div>
                    <label><input name="layout" value="layout-default" type="radio" checked><span
                            class="px-2">Default</span></label>
                    <label><input name="layout" value="layout-a" type="radio"><span class="px-2">Layout
                            A</span></label>
                    <label><input name="layout" value="layout-b" type="radio"><span class="px-2">Layout
                            B</span></label>

                </div>
            </div>
            <div class="svg-stroke mb-4">
                <h6>Icon Border Stroke</h6>
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="stroke" id="Stroke_A" value="svgstroke-a"
                        checked>
                    <label class="btn btn-outline-primary" for="Stroke_A">Stroke 1</label>

                    <input type="radio" class="btn-check" name="stroke" id="Stroke_B" value="svgstroke-b">
                    <label class="btn btn-outline-primary" for="Stroke_B">Stroke 2</label>

                    <input type="radio" class="btn-check" name="stroke" id="Stroke_C" value="svgstroke-c">
                    <label class="btn btn-outline-primary" for="Stroke_C">Stroke 3</label>
                </div>
            </div>
            <div class="mb-4">
                <h6>Layout Section Ligh/Dark</h6>
                <ul class="list-unstyled d-flex flex-wrap">
                    <li class="me-2 mb-2 border-toggle">
                        <input type="checkbox" class="btn-check" id="boder_layout" checked="">
                        <label class="btn btn-outline-primary" for="boder_layout">Layou Border</label>
                    </li>
                    <li class="me-2 mb-2 brand-toggle">
                        <input type="checkbox" class="btn-check" id="brand_dark">
                        <label class="btn btn-outline-primary" for="brand_dark">Brand</label>
                    </li>
                    <li class="me-2 mb-2 sidebar-toggle">
                        <input type="checkbox" class="btn-check" id="Sidebar_dark">
                        <label class="btn btn-outline-primary" for="Sidebar_dark">Sidebar</label>
                    </li>
                    <li class="me-2 mb-2 header-toggle">
                        <input type="checkbox" class="btn-check" id="Header_dark">
                        <label class="btn btn-outline-primary" for="Header_dark">Header</label>
                    </li>
                    <li class="me-2 mb-2 pheader-toggle">
                        <input type="checkbox" class="btn-check" id="pheader_dark">
                        <label class="btn btn-outline-primary" for="pheader_dark">breadcrumb</label>
                    </li>
                    <li class="me-2 mb-2 rightbar-toggle">
                        <input type="checkbox" class="btn-check" id="Rightbar_dark">
                        <label class="btn btn-outline-primary" for="Rightbar_dark">Rightbar</label>
                    </li>
                </ul>
            </div>
            <div class="mb-4">
                <h6>More App Setting</h6>
                <div class="form-check form-switch boxlayout-toggle">
                    <input class="form-check-input" type="checkbox" role="switch" id="boxlayout">
                    <label class="form-check-label" for="boxlayout">Box Layout</label>
                </div>
                <div class="form-check form-switch monochrome-toggle">
                    <input class="form-check-input fs-6" type="checkbox" role="switch" id="monochrome">
                    <label class="form-check-label" for="monochrome">Monochrome Mode</label>
                </div>

                <div class="form-check form-switch radius-toggle">
                    <input class="form-check-input fs-6" type="checkbox" role="switch" id="radius0">
                    <label class="form-check-label" for="radius0">Border Radius none</label>
                </div>
                <div class="form-check form-switch svg-icon-color">
                    <input class="form-check-input fs-6" type="checkbox" role="switch" id="IconColor">
                    <label class="form-check-label" for="IconColor">Sidebar Icon color</label>
                </div>
                <div class="form-check form-switch cb-shadow">
                    <input class="form-check-input fs-6" type="checkbox" role="switch" id="BoxShadow">
                    <label class="form-check-label" for="BoxShadow">Card box shadow active</label>
                </div>
            </div>
            <div class="d-flex">
                <button type="button" class="btn w-100 me-1 py-2 btn-primary">Buy Now</button>
                <button type="button" class="btn w-100 ms-1 py-2 btn-dark">View Portfolio</button>
            </div>
        </div>
    </div>
    @livewireScripts
    @yield('script')
    @stack('script')

</body>

</html>
