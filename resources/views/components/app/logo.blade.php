<div class="px-md-4 px-2 pt-2 pb-2 brand" data-bs-theme="none">
    <div>
        <div class="d-flex align-items-center pt-1">
            <button class="btn d-inline-flex d-xl-none border-0 p-0 pe-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvas_Navbar">
                <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M4 6l16 0"></path>
                    <path d="M4 12l16 0"></path>
                    <path d="M4 18l16 0"></path>
                </svg>
            </button>
            <!--[ Start:: Brand Logo icon ]-->
            <a href="index.html" class="brand-icon text-decoration-none d-flex align-items-center"
                title="BVITE Admin Template">
                <svg height="26" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill="var(--primary-color)" fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.30814 0C6.02576 0 4.33695 1.99763 4.41254 4.16407C4.48508 6.24542 4.39085 8.94102 3.7122 11.1393C3.03153 13.3441 1.88034 14.7407 0 14.92V16.9444C1.88034 17.1237 3.03153 18.5203 3.7122 20.7251C4.39085 22.9234 4.48508 25.619 4.41254 27.7003C4.33695 29.8664 6.02576 31.8644 8.30847 31.8644H31.6949C33.9773 31.8644 35.6658 29.8668 35.5902 27.7003C35.5176 25.619 35.6119 22.9234 36.2905 20.7251C36.9715 18.5203 38.1197 17.1237 40 16.9444V14.92C38.1197 14.7407 36.9715 13.3441 36.2905 11.1393C35.6119 8.94136 35.5176 6.24542 35.5902 4.16407C35.6658 1.99797 33.9773 0 31.6949 0H8.30814Z" />
                    <path fill="white"
                        d="M30.0474 8.81267L20.0721 26.7214C19.8661 27.0911 19.337 27.0933 19.128 26.7253L8.95492 8.81436C8.72711 8.41342 9.06866 7.92768 9.52124 8.009L19.5072 9.80102C19.5709 9.81245 19.6361 9.81234 19.6998 9.80069L29.4769 8.01156C29.928 7.92899 30.2711 8.41086 30.0474 8.81267Z" />
                    <path fill="var(--primary-color)"
                        d="M22.9634 11.0029L18.4147 11.8178C18.3784 11.8243 18.3455 11.8417 18.3211 11.8672C18.2967 11.8927 18.2823 11.9248 18.2801 11.9586L18.0003 16.2791C17.9937 16.3808 18.0959 16.4598 18.2046 16.4369L19.471 16.1697C19.5895 16.1447 19.6966 16.2401 19.6722 16.3491L19.2959 18.0335C19.2706 18.1468 19.387 18.2438 19.5081 18.2101L20.2903 17.9929C20.4116 17.9592 20.5281 18.0564 20.5025 18.1699L19.9045 20.8157C19.8671 20.9812 20.1079 21.0715 20.2083 20.9296L20.2754 20.8348L23.9819 14.0722C24.044 13.959 23.937 13.8299 23.8009 13.8539L22.4974 14.0839C22.3749 14.1055 22.2706 14.0012 22.3052 13.8916L23.156 11.1951C23.1906 11.0854 23.086 10.981 22.9634 11.0029Z" />
                </svg>
                <span class="fw-bold ps-2 fs-5 d-none d-xl-inline-flex text-gradient">BVITE</span>
            </a>
        </div>
        
        <x-app.leftbar />

    </div>
    <div class="d-none layout-a-action">
        <div class="mb-2">
            <a class="d-flex align-items-center lh-sm p-0" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false" title="User">
                <img class="avatar rounded-circle border border-3 shadow" src="assets/images/profile_av.png"
                    alt="avatar">
            </a>
           <x-app.profile.action />
        </div>
        <a href="#" class="btn p-1" title="Sign out">
            <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                stroke="currentColor" fill="none" stroke-linecap="round"  stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M7 6a7.75 7.75 0 1 0 10 0"></path>
                <path d="M12 4l0 8"></path>
            </svg>
        </a>
    </div>
</div>