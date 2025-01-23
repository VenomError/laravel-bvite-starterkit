<aside class="ps-4 pe-3 py-3 rightbar" data-bs-theme="none">
            <div class="navbar navbar-expand-xxl px-3 px-xl-0 py-0">
                <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1"
                    id="offcanvas_rightbar" aria-labelledby="offcanvas_rightbar">
                    <div class="offcanvas-header" style="background: var(--body-color);">
                        <h5 class="offcanvas-title">Rightbar quick access</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body flex-column custom_scroll" style="background: var(--body-color);">
                        <ul class="nav nav-tabs tab-card justify-content-between px-0" role="tablist">
                            <li class="nav-item" role="presentation"><button class="nav-link pt-0 active"
                                    data-bs-toggle="pill" data-bs-target="#pills_today" type="button"
                                    role="tab">Today</button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link pt-0"
                                    data-bs-toggle="pill" data-bs-target="#pills_wallet" type="button"
                                    role="tab">Wallet</button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link pt-0"
                                    data-bs-toggle="pill" data-bs-target="#pills_tasks" type="button"
                                    role="tab">Tasks</button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link pt-0"
                                    data-bs-toggle="pill" data-bs-target="#pills_emails" type="button"
                                    role="tab">Emails</button></li>
                        </ul>
                        <div class="tab-content mt-3">
                            <!--[ Start:: tab pane today ]-->
                            <div class="tab-pane fade show active" id="pills_today" role="tabpanel">
                                <ul class="row g-2 list-unstyled li_animate mb-4">
                                    <li class="col-12">
                                        <div class="card border-0">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0">New User</h6>
                                                <div class="dropdown card-action">
                                                    <a href="#" class="card-fullscreen"
                                                        data-bs-toggle="tooltip" title="Card Full Screen">
                                                        <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg"
                                                            width="20" height="20" viewBox="0 0 24 24"
                                                            stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path
                                                                d="M3 16m0 1a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1z">
                                                            </path>
                                                            <path
                                                                d="M4 12v-6a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-6">
                                                            </path>
                                                            <path d="M12 8h4v4"></path>
                                                            <path d="M16 8l-5 5"></path>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="dropdown-toggle after-none"
                                                        data-bs-toggle="dropdown" aria-expanded="false"
                                                        title="More Action">
                                                        <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg"
                                                            width="20" height="20" viewBox="0 0 24 24"
                                                            stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                            <path d="M8 12l0 .01"></path>
                                                            <path d="M12 12l0 .01"></path>
                                                            <path d="M16 12l0 .01"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end shadow rounded-4 p-2">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-share"></i>Share</a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-pencil"></i>Rename</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-link"></i>Copy Link Address</a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-folder"></i>Move to</a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-copy"></i>Copy to</a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-edit"></i>Make Private</a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-download"></i>Download</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill card-options-remove"
                                                            data-toggle="card-remove"><i
                                                                class="me-2 fa fa-trash"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body avatar-list avatar-list-stacked ps-4">
                                                <img class="avatar rounded-circle"
                                                    src="assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip"
                                                    aria-label="Avatar" data-bs-title="Avatar" alt="avatar">
                                                <img class="avatar rounded-circle"
                                                    src="assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip"
                                                    aria-label="Avatar" data-bs-title="Avatar" alt="avatar">
                                                <img class="avatar rounded-circle"
                                                    src="assets/images/xs/avatar3.jpg" data-bs-toggle="tooltip"
                                                    aria-label="Avatar" data-bs-title="Avatar" alt="avatar">
                                                <img class="avatar rounded-circle"
                                                    src="assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip"
                                                    aria-label="Avatar" data-bs-title="Avatar" alt="avatar">
                                                <img class="avatar rounded-circle"
                                                    src="assets/images/xs/avatar5.jpg" data-bs-toggle="tooltip"
                                                    aria-label="Avatar" data-bs-title="Avatar" alt="avatar">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-12">
                                        <div class="card border-0">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0">Awwwards</h6>
                                                <div class="dropdown card-action">
                                                    <a href="#" class="card-fullscreen"
                                                        data-bs-toggle="tooltip" title="Card Full Screen">
                                                        <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg"
                                                            width="20" height="20" viewBox="0 0 24 24"
                                                            stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path
                                                                d="M3 16m0 1a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1z">
                                                            </path>
                                                            <path
                                                                d="M4 12v-6a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-6">
                                                            </path>
                                                            <path d="M12 8h4v4"></path>
                                                            <path d="M16 8l-5 5"></path>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="dropdown-toggle after-none"
                                                        data-bs-toggle="dropdown" aria-expanded="false"
                                                        title="More Action">
                                                        <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg"
                                                            width="20" height="20" viewBox="0 0 24 24"
                                                            stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                            <path d="M8 12l0 .01"></path>
                                                            <path d="M12 12l0 .01"></path>
                                                            <path d="M16 12l0 .01"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end shadow rounded-4 p-2">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-share"></i>Share</a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-pencil"></i>Rename</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-link"></i>Copy Link Address</a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-folder"></i>Move to</a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-copy"></i>Copy to</a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-edit"></i>Make Private</a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-download"></i>Download</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill card-options-remove"
                                                            data-toggle="card-remove"><i
                                                                class="me-2 fa fa-trash"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body d-flex align-items-start">
                                                <div
                                                    class="avatar rounded-circle no-thumbnail theme-color2 text-white">
                                                    <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        stroke="currentColor" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                        </path>
                                                        <path d="M8 21l8 0"></path>
                                                        <path d="M12 17l0 4"></path>
                                                        <path d="M7 4l10 0"></path>
                                                        <path d="M17 4v8a5 5 0 0 1 -10 0v-8"></path>
                                                        <path d="M5 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M19 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex-fill ms-3">
                                                    <h6 class="mb-4">Best of trendy design in <a
                                                            href="#">2022</a> on Awwwards</h6>
                                                    <a href="#" title="Go to Awards">Go to Awards<i
                                                            class="fa fa-long-arrow-right ms-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="row g-4 list-unstyled li_animate mb-0 trending-blog">
                                    <li class="col-12">
                                        <h6 class="card-title mb-0">Trending on BVite</h6>
                                    </li>
                                    <li class="col-12 d-flex align-items-start">
                                        <div class="fs-3 text-muted lh-sm"><span class="d-inline-flex"
                                                style="min-width: 2.5rem;">01</span></div>
                                        <div class="text-truncate ms-2 ps-3 border-start dashed border-0">
                                            <span class="d-flex align-items-center mb-3">
                                                <img class="avatar sm rounded-circle border border-3 me-2"
                                                    src="assets/images/xs/avatar5.jpg" alt="avatar">
                                                Michelle Glover
                                            </span>
                                            <h6 class="text-truncate"><a href="blog-detail.html"
                                                    title="blog title" class="text-body">Unleashing the Power of
                                                    ChatGPT</a></h6>
                                            <div class="d-flex align-items-center text-muted small">
                                                <span class="pe-3">Feb 20</span>
                                                <span>16 min read</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-12 d-flex align-items-start">
                                        <div class="fs-3 text-muted lh-sm"><span class="d-inline-flex"
                                                style="min-width: 2.5rem;">02</span></div>
                                        <div class="text-truncate ms-2 ps-3 border-start dashed border-0">
                                            <span class="d-flex align-items-center mb-3">
                                                <img class="avatar sm rounded-circle border border-3 me-2"
                                                    src="assets/images/xs/avatar2.jpg" alt="avatar">
                                                Kevin Gill
                                            </span>
                                            <h6 class="text-truncate"><a href="blog-detail.html"
                                                    title="blog title" class="text-body">Designing for the Web</a>
                                            </h6>
                                            <div class="d-flex align-items-center text-muted small">
                                                <span class="pe-3">Feb 20</span>
                                                <span>15 min read</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-12 d-flex align-items-start">
                                        <div class="fs-3 text-muted lh-sm"><span class="d-inline-flex"
                                                style="min-width: 2.5rem;">03</span></div>
                                        <div class="text-truncate ms-2 ps-3 border-start dashed border-0">
                                            <span class="d-flex align-items-center mb-3">
                                                <img class="avatar sm rounded-circle border border-3 me-2"
                                                    src="assets/images/xs/avatar1.jpg" alt="avatar">
                                                Jony Doe
                                            </span>
                                            <h6 class="text-truncate"><a href="blog-detail.html"
                                                    title="blog title" class="text-body">Building Dynamic User
                                                    Interfaces with Vue.js</a></h6>
                                            <div class="d-flex align-items-center text-muted small">
                                                <span class="pe-3">Feb 20</span>
                                                <span>10 min read</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--[ Start:: tab pane Wallet ]-->
                            <div class="tab-pane fade" id="pills_wallet" role="tabpanel">
                                <ul class="row g-1 list-unstyled li_animate">
                                    <li class="col-12">
                                        <div class="card border-0">
                                            <div class="card-header">
                                                <h6 class="mb-0">Total Balance</h6>
                                            </div>
                                            <div class="card-body">
                                                <h2 class="text-accent">$7,550.00</h2>
                                                <p class="text-muted">Wallet ID: Q0001212987</p>
                                                <div class="my-4">
                                                    <label
                                                        class="d-flex justify-content-between">Bank<span>$248,000.00</span></label>
                                                    <div class="progress mt-1" style="height: 1px;">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            aria-valuenow="87" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 87%;"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label
                                                        class="d-flex justify-content-between">Cryptocurrency<span>$12,000.00</span></label>
                                                    <div class="progress mt-1" style="height: 1px;">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            aria-valuenow="56" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 56%;"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label
                                                        class="d-flex justify-content-between">Investment<span>$20,00.00</span></label>
                                                    <div class="progress mt-1" style="height: 1px;">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            aria-valuenow="65" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 65%;"></div>
                                                    </div>
                                                </div>
                                                <button class="btn px-3 btn-dark">Deposit</button>
                                                <button class="btn px-3 btn-primary">Withdraw</button>
                                            </div>
                                            <div class="card-footer py-3">
                                                <span class="text-success">3.05%</span>
                                                <span class="text-muted">March 31,2023</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-12 text-uppercase text-muted mt-4">
                                        <div class="d-flex justify-content-between small">
                                            <span>Quick access</span>
                                            <a href="#" aria-label="view all">View All</a>
                                        </div>
                                    </li>
                                    <li class="col-4">
                                        <a href="#"
                                            class="card border-0 text-center small text-decoration-none"
                                            aria-label="Cards">
                                            <div class="card-body px-2">
                                                <svg class="svg-stroke mb-2" xmlns="http://www.w3.org/2000/svg"
                                                    width="30" height="30" viewBox="0 0 24 24"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z">
                                                    </path>
                                                    <path d="M3 10l18 0"></path>
                                                    <path d="M7 15l.01 0"></path>
                                                    <path d="M11 15l2 0"></path>
                                                </svg>
                                                <p class="mb-0">Cards</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="#"
                                            class="card border-0 text-center small text-decoration-none"
                                            aria-label="Transfer">
                                            <div class="card-body px-2">
                                                <svg class="svg-stroke mb-2" xmlns="http://www.w3.org/2000/svg"
                                                    width="30" height="30" viewBox="0 0 24 24"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M3 6a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                                    <path d="M21 11v-3a2 2 0 0 0 -2 -2h-6l3 3m0 -6l-3 3"></path>
                                                    <path d="M3 13v3a2 2 0 0 0 2 2h6l-3 -3m0 6l3 -3"></path>
                                                    <path d="M15 18a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                                </svg>
                                                <p class="mb-0">Transfer</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="#"
                                            class="card border-0 text-center small text-decoration-none"
                                            aria-label="Withdraw">
                                            <div class="card-body px-2">
                                                <svg class="svg-stroke mb-2" xmlns="http://www.w3.org/2000/svg"
                                                    width="30" height="30" viewBox="0 0 24 24"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12">
                                                    </path>
                                                    <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4"></path>
                                                </svg>
                                                <p class="mb-0">Withdraw</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="#"
                                            class="card border-0 text-center small text-decoration-none"
                                            aria-label="Bill payments">
                                            <div class="card-body px-2">
                                                <svg class="svg-stroke mb-2" xmlns="http://www.w3.org/2000/svg"
                                                    width="30" height="30" viewBox="0 0 24 24"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2">
                                                    </path>
                                                    <path
                                                        d="M14 8h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5m2 0v1.5m0 -9v1.5">
                                                    </path>
                                                </svg>
                                                <p class="mb-0">Bill payments</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="#"
                                            class="card border-0 text-center small text-decoration-none"
                                            aria-label="Add Payee">
                                            <div class="card-body px-2">
                                                <svg class="svg-stroke mb-2" xmlns="http://www.w3.org/2000/svg"
                                                    width="30" height="30" viewBox="0 0 24 24"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                                    <path d="M16 19h6"></path>
                                                    <path d="M19 16v6"></path>
                                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                                                </svg>
                                                <p class="mb-0">Add Payee</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="#"
                                            class="card border-0 text-center small text-decoration-none"
                                            aria-label="Scan & Pay">
                                            <div class="card-body px-2">
                                                <svg class="svg-stroke mb-2" xmlns="http://www.w3.org/2000/svg"
                                                    width="30" height="30" viewBox="0 0 24 24"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M4 7v-1a2 2 0 0 1 2 -2h2"></path>
                                                    <path d="M4 17v1a2 2 0 0 0 2 2h2"></path>
                                                    <path d="M16 4h2a2 2 0 0 1 2 2v1"></path>
                                                    <path d="M16 20h2a2 2 0 0 0 2 -2v-1"></path>
                                                    <path d="M5 12l14 0"></path>
                                                </svg>
                                                <p class="mb-0">Scan & Pay</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--[ Start:: tab pane Tasks ]-->
                            <div class="tab-pane fade" id="pills_tasks" role="tabpanel">
                                <ul class="row g-1 list-unstyled li_animate">
                                    <li class="col-12 text-uppercase text-muted">
                                        <div class="d-flex justify-content-between small">
                                            <span>Assigned Tasks</span>
                                            <a href="#" title="view all task">View All</a>
                                        </div>
                                    </li>
                                    <li class="col-6">
                                        <div class="card border-0">
                                            <div class="card-body p-3">
                                                <div class="fs-5 fw-bold"><span data-purecounter-start="0"
                                                        data-purecounter-separator="," data-purecounter-end="37"
                                                        class="purecounter">0</span></div>
                                                <span class="text-muted">Pending</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-6">
                                        <div class="card border-0">
                                            <div class="card-body p-3">
                                                <div class="fs-5 fw-bold"><span data-purecounter-start="0"
                                                        data-purecounter-separator="," data-purecounter-end="18"
                                                        class="purecounter">0</span></div>
                                                <span class="text-muted">Completed</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-6">
                                        <div class="card border-0">
                                            <div class="card-body p-3">
                                                <div class="fs-5 fw-bold"><span data-purecounter-start="0"
                                                        data-purecounter-separator="," data-purecounter-end="23"
                                                        class="purecounter">0</span></div>
                                                <span class="text-muted">On Hold</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-6">
                                        <div class="card border-0">
                                            <div class="card-body p-3">
                                                <div class="fs-5 fw-bold"><span data-purecounter-start="0"
                                                        data-purecounter-separator="," data-purecounter-end="12"
                                                        class="purecounter">0</span></div>
                                                <span class="text-muted">In Progress</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-12">
                                        <div class="card border-0">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0">Tasks Analysis</h6>
                                                <div class="dropdown card-action">
                                                    <a href="#" class="card-fullscreen"
                                                        data-bs-toggle="tooltip" title="Card Full Screen">
                                                        <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg"
                                                            width="20" height="20" viewBox="0 0 24 24"
                                                            stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path
                                                                d="M3 16m0 1a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1z">
                                                            </path>
                                                            <path
                                                                d="M4 12v-6a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-6">
                                                            </path>
                                                            <path d="M12 8h4v4"></path>
                                                            <path d="M16 8l-5 5"></path>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="dropdown-toggle after-none"
                                                        data-bs-toggle="dropdown" aria-expanded="false"
                                                        title="More Action">
                                                        <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg"
                                                            width="20" height="20" viewBox="0 0 24 24"
                                                            stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                            <path d="M8 12l0 .01"></path>
                                                            <path d="M12 12l0 .01"></path>
                                                            <path d="M16 12l0 .01"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end shadow rounded-4 p-2">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-share"></i>Share</a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-pencil"></i>Rename</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-link"></i>Copy Link Address</a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-folder"></i>Move to</a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-copy"></i>Copy to</a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-edit"></i>Make Private</a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill"><i
                                                                class="me-2 fa fa-download"></i>Download</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item rounded-pill card-options-remove"
                                                            data-toggle="card-remove"><i
                                                                class="me-2 fa fa-trash"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div id="Apex_TaskAssignin"></div>
                                                <a href="#" title="view all task"
                                                    class="btn btn-dark w-100">View My Task</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--[ Start:: tab pane Emails ]-->
                            <div class="tab-pane fade" id="pills_emails" role="tabpanel">
                                <ul class="row g-1 list-unstyled li_animate">
                                    <li class="col-12 text-uppercase text-muted">
                                        <div class="d-flex justify-content-between small">
                                            <span>Outgoing Emails</span>
                                            <a href="#" aria-label="view all">View All</a>
                                        </div>
                                    </li>
                                    <li class="col-6">
                                        <div class="card border-0">
                                            <div class="card-body p-3">
                                                <div class="fs-5 fw-bold"><span data-purecounter-start="0"
                                                        data-purecounter-separator="," data-purecounter-end="157"
                                                        class="purecounter">0</span></div>
                                                <span class="text-muted">Sending</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-6">
                                        <div class="card border-0">
                                            <div class="card-body p-3">
                                                <div class="fs-5 fw-bold"><span data-purecounter-start="0"
                                                        data-purecounter-separator="," data-purecounter-end="723"
                                                        class="purecounter">0</span></div>
                                                <span class="text-muted">Sent</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-6">
                                        <div class="card border-0">
                                            <div class="card-body p-3">
                                                <div class="fs-5 fw-bold"><span data-purecounter-start="0"
                                                        data-purecounter-separator="," data-purecounter-end="137"
                                                        class="purecounter">0</span></div>
                                                <span class="text-muted">Delivered</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-6">
                                        <div class="card border-0">
                                            <div class="card-body p-3">
                                                <div class="fs-5 fw-bold"><span data-purecounter-start="0"
                                                        data-purecounter-separator="," data-purecounter-end="42"
                                                        class="purecounter">0</span></div>
                                                <span class="text-muted">Failed</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-12 text-uppercase text-muted mt-4">
                                        <div class="d-flex justify-content-between small">
                                            <span>Latest message</span>
                                            <a href="#" title="view all task">View All</a>
                                        </div>
                                    </li>
                                    <li class="col-12">
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex align-items-center border-0 mb-1">
                                                <img class="rounded-circle avatar sm"
                                                    src="assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip"
                                                    title="Avatar Name" alt="Avatar">
                                                <div class="ms-3 w-100">
                                                    <a href="#" title="Github">Github</a>
                                                    <small class="text-muted float-end">8 minutes ago</small>
                                                    <p class="mb-0 small text-muted">Where are we in terms of design?
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex align-items-center border-0 mb-1">
                                                <img class="rounded-circle avatar sm"
                                                    src="assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip"
                                                    title="Avatar Name" alt="Avatar">
                                                <div class="ms-3 w-100">
                                                    <a href="#" title="Themeforest">Themeforest</a>
                                                    <small class="text-muted float-end">12 minutes ago</small>
                                                    <p class="mb-0 small text-muted">Where are we in terms of design?
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex align-items-center border-0 mb-1">
                                                <img class="rounded-circle avatar sm"
                                                    src="assets/images/xs/avatar3.jpg" data-bs-toggle="tooltip"
                                                    title="Avatar Name" alt="Avatar">
                                                <div class="ms-3 w-100">
                                                    <a href="#" title="Paybee inc.">Paybee inc.</a>
                                                    <small class="text-muted float-end">22 minutes ago</small>
                                                    <p class="mb-0 small text-muted">Where are we in terms of design?
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex align-items-center border-0 mb-1">
                                                <img class="rounded-circle avatar sm"
                                                    src="assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip"
                                                    title="Avatar Name" alt="Avatar">
                                                <div class="ms-3 w-100">
                                                    <a href="#" title="Github">Github</a>
                                                    <small class="text-muted float-end">28 minutes ago</small>
                                                    <p class="mb-0 small text-muted">Where are we in terms of design?
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>