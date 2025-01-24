<div class="px-md-4 px-2 py-2 page-header" data-bs-theme="none">

    <div class="d-flex align-items-center">
        <button class="btn d-none d-xl-inline-flex me-3 px-0 sidebar-toggle" type="button">
            <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                </path>
                <path d="M9 4v16"></path>
                <path d="M15 10l-2 2l2 2"></path>
            </svg>
        </button>
        {{ $breadcrumb ?? '' }}
    </div>
    <ul class="list-unstyled action d-flex align-items-center mb-0">
        {{ $slot }}
        <li class="d-none d-xxl-inline-flex">
            <button class="btn px-0 rightbar-toggle" type="button">
                <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                    </path>
                    <path d="M15 4v16"></path>
                    <path d="M9 10l2 2l-2 2"></path>
                </svg>
            </button>
        </li>
        <li class="d-inline-flex d-xxl-none">
            <button class="btn border-0 p-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvas_rightbar">
                <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                    </path>
                    <path d="M15 4v16"></path>
                    <path d="M9 10l2 2l-2 2"></path>
                </svg>
            </button>
        </li>
    </ul>

</div>
