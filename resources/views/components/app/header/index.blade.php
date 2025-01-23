 <header class="px-md-4 px-2" data-bs-theme="none">
     <div class="d-flex justify-content-between align-items-center py-2 w-100">
         <button type="button" class="btn text-accent btn-link p-0 me-3 d-none d-md-inline-flex" data-bs-toggle="modal"
             data-bs-target="#FullscreenMenu">
             <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                 stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                 <path d="M5 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                 <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                 <path d="M19 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                 <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                 <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                 <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                 <path d="M5 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                 <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                 <path d="M19 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
             </svg>
         </button>
         <!--[ Start:: Full screen modal popup menu ]-->
         <div class="modal fade" id="FullscreenMenu" tabindex="-1" aria-labelledby="FullscreenMenu" aria-hidden="true"
             data-bs-theme="dark">
             <div class="modal-dialog modal-fullscreen">
                 <div class="modal-content border-4 border border-primary">
                     <div class="modal-header border-0">
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body custom_scroll">
                         <div class="container-xxl">
                             <h5 class="text-light fw-light">Application</h5>
                             <ul
                                 class="row g-2 list-unstyled li_animate row-cols-lg-5 row-cols-md-3 row-cols-sm-3 row-cols-2 row-deck mb-lg-5 mb-4">
                                 <li class="col">
                                     <a class="card hr-arrow p-4" href="inbox.html" title="Inbox"
                                         style="--dynamic-color: var(--theme-color1);">
                                         <svg class="mb-3" width="20" viewBox="0 0 16 16" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path opacity="0.7"
                                                 d="M4.97978 1C4.90484 1.00011 4.83088 1.01706 4.76338 1.0496C4.69587 1.08214 4.63654 1.12944 4.58978 1.188L1.53978 5H5.99978C6.13239 5 6.25957 5.05268 6.35334 5.14645C6.4471 5.24021 6.49978 5.36739 6.49978 5.5C6.49978 5.89782 6.65782 6.27936 6.93912 6.56066C7.22043 6.84196 7.60196 7 7.99978 7C8.39761 7 8.77914 6.84196 9.06044 6.56066C9.34175 6.27936 9.49978 5.89782 9.49978 5.5C9.49978 5.36739 9.55246 5.24021 9.64623 5.14645C9.74 5.05268 9.86717 5 9.99978 5H14.4598L11.4098 1.188C11.363 1.12944 11.3037 1.08214 11.2362 1.0496C11.1687 1.01706 11.0947 1.00011 11.0198 1H4.97978ZM3.80978 0.563C3.95017 0.387503 4.1282 0.245795 4.33071 0.148346C4.53322 0.050898 4.75504 0.000200429 4.97978 0L11.0198 0C11.2445 0.000200429 11.4663 0.050898 11.6689 0.148346C11.8714 0.245795 12.0494 0.387503 12.1898 0.563L15.8898 5.188C15.9315 5.24011 15.9624 5.30004 15.9806 5.36428C15.9988 5.42851 16.004 5.49574 15.9958 5.562L15.6058 8.686C15.5604 9.04889 15.3841 9.38271 15.1099 9.62469C14.8357 9.86667 14.4825 10.0001 14.1168 10H1.88278C1.51707 10.0001 1.16391 9.86667 0.889698 9.62469C0.61549 9.38271 0.43913 9.04889 0.393782 8.686L0.00378209 5.562C-0.00441416 5.49574 0.000742512 5.42851 0.0189479 5.36428C0.0371533 5.30004 0.0680387 5.24011 0.109782 5.188L3.80978 0.563Z" />
                                             <path opacity="0.2"
                                                 d="M0.294097 11.0446C0.229438 11.0739 0.171762 11.1167 0.124907 11.17V11.169C0.0780298 11.2222 0.0429981 11.2847 0.0221368 11.3525C0.00127556 11.4202 -0.00493837 11.4917 0.00390735 11.562L0.393907 14.686C0.439256 15.0489 0.615615 15.3827 0.889823 15.6247C1.16403 15.8667 1.5172 16.0001 1.88291 16H14.1169C14.4826 16.0001 14.8358 15.8667 15.11 15.6247C15.3842 15.3827 15.5606 15.0489 15.6059 14.686L15.9959 11.562C16.0047 11.4917 15.9984 11.4203 15.9775 11.3525C15.9566 11.2848 15.9216 11.2223 15.8746 11.1691C15.8277 11.116 15.7701 11.0734 15.7055 11.0443C15.6409 11.0151 15.5708 11 15.4999 11H9.99991C9.8673 11 9.74012 11.0527 9.64635 11.1464C9.55259 11.2402 9.49991 11.3674 9.49991 11.5C9.49991 11.8978 9.34187 12.2794 9.06057 12.5607C8.77926 12.842 8.39773 13 7.99991 13C7.60208 13 7.22055 12.842 6.93925 12.5607C6.65794 12.2794 6.49991 11.8978 6.49991 11.5C6.49991 11.3674 6.44723 11.2402 6.35346 11.1464C6.25969 11.0527 6.13252 11 5.99991 11H0.499907C0.428915 11.0001 0.358755 11.0153 0.294097 11.0446Z" />
                                         </svg>
                                         <h6 class="title mb-1">Inbox <span
                                                 class="badge rounded-pill bg-warning">11</span></h6>
                                         <p class="small text-muted mb-0 d-none d-xl-inline-flex">Description
                                             text here...</p>
                                         <div class="go-corner">
                                             <div class="go-arrow">→</div>
                                         </div>
                                     </a>
                                 </li>
                                 <li class="col">
                                     <a class="card hr-arrow p-4" href="chat.html" title="Chat App"
                                         style="--dynamic-color: var(--theme-color2);">
                                         <svg class="mb-3" width="20" viewBox="0 0 16 16" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path opacity="0.4"
                                                 d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                             <path opacity="0.9"
                                                 d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                         </svg>
                                         <h6 class="title mb-1">Chat App</h6>
                                         <p class="small text-muted mb-0 d-none d-xl-inline-flex">Description
                                             text here...</p>
                                         <div class="go-corner">
                                             <div class="go-arrow">→</div>
                                         </div>
                                     </a>
                                 </li>
                                 <li class="col">
                                     <a class="card hr-arrow p-4" href="calendar.html" title="My Calendar"
                                         style="--dynamic-color: var(--theme-color3);">
                                         <svg class="mb-3" width="20" viewBox="0 0 16 16" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path opacity="0.8"
                                                 d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
                                             <path opacity="0.4"
                                                 d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
                                         </svg>
                                         <h6 class="title mb-1">My Calendar</h6>
                                         <p class="small text-muted mb-0 d-none d-xl-inline-flex">Description
                                             text here...</p>
                                         <div class="go-corner">
                                             <div class="go-arrow">→</div>
                                         </div>
                                     </a>
                                 </li>
                                 <li class="col">
                                     <a class="card hr-arrow p-4" href="contact.html" title="Contact's"
                                         style="--dynamic-color: var(--theme-color5);">
                                         <svg class="mb-3" width="20" viewBox="0 0 16 16" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path opacity="0.8"
                                                 d="M6 8C6.79565 8 7.55871 7.68393 8.12132 7.12132C8.68393 6.55871 9 5.79565 9 5C9 4.20435 8.68393 3.44129 8.12132 2.87868C7.55871 2.31607 6.79565 2 6 2C5.20435 2 4.44129 2.31607 3.87868 2.87868C3.31607 3.44129 3 4.20435 3 5C3 5.79565 3.31607 6.55871 3.87868 7.12132C4.44129 7.68393 5.20435 8 6 8ZM1 14C1 14 0 14 0 13C0 12 1 9 6 9C11 9 12 12 12 13C12 14 11 14 11 14H1Z" />
                                             <path opacity="0.4"
                                                 d="M11.1464 3.14645C11.0527 3.24021 11 3.36739 11 3.5C11 3.63261 11.0527 3.75979 11.1464 3.85355C11.2402 3.94732 11.3674 4 11.5 4H15.5C15.6326 4 15.7598 3.94732 15.8536 3.85355C15.9473 3.75979 16 3.63261 16 3.5C16 3.36739 15.9473 3.24021 15.8536 3.14645C15.7598 3.05268 15.6326 3 15.5 3H11.5C11.3674 3 11.2402 3.05268 11.1464 3.14645Z" />
                                             <path opacity="0.4"
                                                 d="M11.1464 6.14645C11.2402 6.05268 11.3674 6 11.5 6H15.5C15.6326 6 15.7598 6.05268 15.8536 6.14645C15.9473 6.24021 16 6.36739 16 6.5C16 6.63261 15.9473 6.75979 15.8536 6.85355C15.7598 6.94732 15.6326 7 15.5 7H11.5C11.3674 7 11.2402 6.94732 11.1464 6.85355C11.0527 6.75979 11 6.63261 11 6.5C11 6.36739 11.0527 6.24021 11.1464 6.14645Z" />
                                             <path opacity="0.4"
                                                 d="M13.1464 9.14645C13.2402 9.05268 13.3674 9 13.5 9H15.5C15.6326 9 15.7598 9.05268 15.8536 9.14645C15.9473 9.24021 16 9.36739 16 9.5C16 9.63261 15.9473 9.75979 15.8536 9.85355C15.7598 9.94732 15.6326 10 15.5 10H13.5C13.3674 10 13.2402 9.94732 13.1464 9.85355C13.0527 9.75979 13 9.63261 13 9.5C13 9.36739 13.0527 9.24021 13.1464 9.14645Z" />
                                             <path opacity="0.4"
                                                 d="M13.1464 12.1464C13.2402 12.0527 13.3674 12 13.5 12H15.5C15.6326 12 15.7598 12.0527 15.8536 12.1464C15.9473 12.2402 16 12.3674 16 12.5C16 12.6326 15.9473 12.7598 15.8536 12.8536C15.7598 12.9473 15.6326 13 15.5 13H13.5C13.3674 13 13.2402 12.9473 13.1464 12.8536C13.0527 12.7598 13 12.6326 13 12.5C13 12.3674 13.0527 12.2402 13.1464 12.1464Z" />
                                         </svg>
                                         <h6 class="title mb-1">Contact's</h6>
                                         <p class="small text-muted mb-0 d-none d-xl-inline-flex">Description
                                             text here...</p>
                                         <div class="go-corner">
                                             <div class="go-arrow">→</div>
                                         </div>
                                     </a>
                                 </li>
                                 <li class="col">
                                     <a class="card hr-arrow p-4" href="filemanager.html" title="File Manager"
                                         style="--dynamic-color: var(--theme-color6);">
                                         <svg class="mb-3" width="20" viewBox="0 0 16 16" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path opacity="0.2"
                                                 d="M6.5 0C6.10218 0 5.72064 0.158035 5.43934 0.43934C5.15804 0.720644 5 1.10218 5 1.5V2.5C5 2.89782 5.15804 3.27936 5.43934 3.56066C5.72064 3.84196 6.10218 4 6.5 4H9.5C9.89782 4 10.2794 3.84196 10.5607 3.56066C10.842 3.27936 11 2.89782 11 2.5V1.5C11 1.10218 10.842 0.720644 10.5607 0.43934C10.2794 0.158035 9.89782 0 9.5 0L6.5 0ZM9.5 1C9.63261 1 9.75979 1.05268 9.85355 1.14645C9.94732 1.24021 10 1.36739 10 1.5V2.5C10 2.63261 9.94732 2.75979 9.85355 2.85355C9.75979 2.94732 9.63261 3 9.5 3H6.5C6.36739 3 6.24021 2.94732 6.14645 2.85355C6.05268 2.75979 6 2.63261 6 2.5V1.5C6 1.36739 6.05268 1.24021 6.14645 1.14645C6.24021 1.05268 6.36739 1 6.5 1H9.5Z">
                                             </path>
                                             <path opacity="0.2"
                                                 d="M4 1.5H3C2.46957 1.5 1.96086 1.71071 1.58579 2.08579C1.21071 2.46086 1 2.96957 1 3.5V14C1 14.5304 1.21071 15.0391 1.58579 15.4142C1.96086 15.7893 2.46957 16 3 16H13C13.5304 16 14.0391 15.7893 14.4142 15.4142C14.7893 15.0391 15 14.5304 15 14V3.5C15 2.96957 14.7893 2.46086 14.4142 2.08579C14.0391 1.71071 13.5304 1.5 13 1.5H12V2.5C12 2.8283 11.9353 3.15339 11.8097 3.45671C11.6841 3.76002 11.4999 4.03562 11.2678 4.26777C11.0356 4.49991 10.76 4.68406 10.4567 4.8097C10.1534 4.93534 9.8283 5 9.5 5H6.5C5.83696 5 5.20107 4.73661 4.73223 4.26777C4.26339 3.79893 4 3.16304 4 2.5V1.5Z">
                                             </path>
                                             <path
                                                 d="M5.5 7C5.36739 7 5.24021 7.05268 5.14645 7.14645C5.05268 7.24021 5 7.36739 5 7.5C5 7.63261 5.05268 7.75979 5.14645 7.85355C5.24021 7.94732 5.36739 8 5.5 8H10.5C10.6326 8 10.7598 7.94732 10.8536 7.85355C10.9473 7.75979 11 7.63261 11 7.5C11 7.36739 10.9473 7.24021 10.8536 7.14645C10.7598 7.05268 10.6326 7 10.5 7H5.5ZM5 9.5C5 9.36739 5.05268 9.24021 5.14645 9.14645C5.24021 9.05268 5.36739 9 5.5 9H10.5C10.6326 9 10.7598 9.05268 10.8536 9.14645C10.9473 9.24021 11 9.36739 11 9.5C11 9.63261 10.9473 9.75979 10.8536 9.85355C10.7598 9.94732 10.6326 10 10.5 10H5.5C5.36739 10 5.24021 9.94732 5.14645 9.85355C5.05268 9.75979 5 9.63261 5 9.5ZM5 11.5C5 11.3674 5.05268 11.2402 5.14645 11.1464C5.24021 11.0527 5.36739 11 5.5 11H7.5C7.63261 11 7.75979 11.0527 7.85355 11.1464C7.94732 11.2402 8 11.3674 8 11.5C8 11.6326 7.94732 11.7598 7.85355 11.8536C7.75979 11.9473 7.63261 12 7.5 12H5.5C5.36739 12 5.24021 11.9473 5.14645 11.8536C5.05268 11.7598 5 11.6326 5 11.5Z">
                                             </path>
                                         </svg>
                                         <h6 class="title mb-1">File Manager</h6>
                                         <p class="small text-muted mb-0 d-none d-xl-inline-flex">Description
                                             text here...</p>
                                         <div class="go-corner">
                                             <div class="go-arrow">→</div>
                                         </div>
                                     </a>
                                 </li>
                             </ul>
                             <div class="row g-5">
                                 <div class="col-lg-3 col-md-6 col-sm-6">
                                     <h6 class="mb-1 text-light fw-light">Project</h6>
                                     <p class="text-muted small">Lorem ipsum dolor sit amet dis sociosqu sapien.
                                     </p>
                                     <ul class="list-unstyled li_animate link-hover">
                                         <li><a href="new-project.html" aria-label="New Project">New
                                                 Project</a></li>
                                         <li><a href="project-list.html" aria-label="Project List">Project
                                                 List</a></li>
                                         <li><a href="project-grid.html" aria-label="Project Grid">Project
                                                 Grid</a></li>
                                         <li><a href="project-details.html" aria-label="Project Details">Project
                                                 Details</a></li>
                                         <li><a href="clients-list.html" aria-label="Clients">Clients</a></li>
                                     </ul>
                                 </div>
                                 <div class="col-lg-3 col-md-6 col-sm-6">
                                     <h6 class="mb-1 text-light fw-light">Crafted Page</h6>
                                     <p class="text-muted small">Lorem ipsum dolor sit amet dis sociosqu sapien.
                                     </p>
                                     <ul class="list-unstyled li_animate link-hover">
                                         <li><a href="my-profile.html">My Profile</a></li>
                                         <li><a href="user-activity.html">User Activity</a></li>
                                         <li><a href="gallery.html">Imgae gallery</a></li>
                                         <li><a href="pricing.html">Pricing table</a></li>
                                         <li><a href="search.html">Search page</a></li>
                                     </ul>
                                 </div>
                                 <div class="col-lg-3 col-md-6 col-sm-6">
                                     <h6 class="mb-1 text-light fw-light">Authentication Page</h6>
                                     <p class="text-muted small">Lorem phasellus sociosqu nec turpis montes.</p>
                                     <ul class="list-unstyled li_animate link-hover">
                                         <li><a href="signin.html">Sign in</a></li>
                                         <li><a href="signup.html">Sign up</a></li>
                                         <li><a href="password-reset.html">Password reset</a></li>
                                         <li><a href="two-step.html">2-Step Authentication</a></li>
                                         <li><a href="lockscreen.html">Lockscreen</a></li>
                                         <li><a href="maintenance.html">Maintenance</a></li>
                                         <li><a href="404.html">404</a></li>
                                     </ul>
                                 </div>
                                 <div class="col-lg-3 col-md-6 col-sm-6">
                                     <h6 class="mb-1 text-light fw-light">Widgets</h6>
                                     <p class="text-muted small">Lorem phasellus sociosqu nec turpis montes.</p>
                                     <ul class="list-unstyled li_animate link-hover">
                                         <li><a href="docs/widgets-basic-card.html"
                                                 aria-label="Widgets Basic card">Basic card</a></li>
                                         <li><a href="docs/widgets-card-tiles.html" aria-label="Widgets tiles">Card
                                                 tiles</a></li>
                                         <li><a href="docs/widgets-card-tab.html" aria-label="Widgets Tabbed">Tabbed
                                                 card</a></li>
                                         <li><a href="table.html" aria-label="Widgets Tables">Tables</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="modal-footer border-0 justify-content-center">
                         <div class="container-xxl">
                             <div class="row g-3">
                                 <div class="col-auto">
                                     <div class="card">
                                         <div class="card-body d-flex align-items-center p-2">
                                             <div class="avatar rounded-circle no-thumbnail"><i
                                                     class="fa fa-skype"></i></div>
                                             <div class="ms-3">
                                                 <small class="text-muted">Skype ID</small>
                                                 <p class="mb-0 small">bvite.theme</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-auto">
                                     <div class="card">
                                         <div class="card-body d-flex align-items-center p-2">
                                             <div class="avatar rounded-circle no-thumbnail"><i
                                                     class="fa fa-envelope"></i></div>
                                             <div class="ms-3">
                                                 <small class="text-muted">Email us</small>
                                                 <p class="mb-0 small">bvite.theme@info.com</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-auto">
                                     <div class="card">
                                         <div class="card-body d-flex align-items-center p-2">
                                             <div class="avatar rounded-circle no-thumbnail"><i
                                                     class="fa fa-phone"></i></div>
                                             <div class="ms-3">
                                                 <small class="text-muted">United States</small>
                                                 <p class="mb-0 small">+1 111-222-1234</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <form class="dropdown main-search me-md-4 w-50 d-none d-md-inline-flex">
             <div class="w-100" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                 <svg class="svg-stroke search-icon" xmlns="http://www.w3.org/2000/svg" width="18"
                     height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round"
                     stroke-linejoin="round">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                     <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                     <path d="M21 21l-6 -6"></path>
                 </svg>
                 <input type="text" class="form-control" placeholder="Search..." aria-label="Search...">
             </div>
             <div class="dropdown-menu shadow rounded-4 p-3 p-xl-4 w-100">
                 <h6 class="fl-title" style="--text-color: var(--theme-color1)">Recent Search</h6>
                 <div class="tagcloud mb-4">
                     <a href="#" class="tag-link rounded-pill border px-3"
                         style="--hover-color: var(--theme-color1)">Vite</a>
                     <a href="#" class="tag-link rounded-pill border px-3"
                         style="--hover-color: var(--theme-color2)">Bootstra 5</a>
                     <a href="#" class="tag-link rounded-pill border px-3"
                         style="--hover-color: var(--theme-color1)">Contact's</a>
                 </div>
                 <h6 class="fl-title" style="--text-color: var(--theme-color2)">Help</h6>
                 <div class="d-flex flex-column mb-4">
                     <a class="mb-1" href="#">
                         <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                             viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round"
                             stroke-linejoin="round">
                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                             <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6"></path>
                             <path d="M11 13l9 -9"></path>
                             <path d="M15 4h5v5"></path>
                         </svg>
                         <span>New around here? Sign up</span>
                     </a>
                     <a class="mb-1" href="#">
                         <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                             viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round"
                             stroke-linejoin="round">
                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                             <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6"></path>
                             <path d="M11 13l9 -9"></path>
                             <path d="M15 4h5v5"></path>
                         </svg>
                         <span>How to setup theme?</span>
                     </a>
                     <a class="mb-1" href="#">
                         <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                             viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round"
                             stroke-linejoin="round">
                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                             <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6"></path>
                             <path d="M11 13l9 -9"></path>
                             <path d="M15 4h5v5"></path>
                         </svg>
                         <span>View detail documentation</span>
                     </a>
                 </div>
                 <h6 class="fl-title" style="--text-color: var(--theme-color3)">New users</h6>
                 <div class="d-flex flex-column">
                     <a href="#" class="d-flex align-items-center mb-2">
                         <img class="avatar rounded-circle border border-3 me-2" src="assets/images/xs/avatar1.jpg"
                             alt="avatar">
                         Kevin Gill
                     </a>
                     <a href="#" class="d-flex align-items-center mb-2">
                         <img class="avatar rounded-circle border border-3 me-2" src="assets/images/xs/avatar2.jpg"
                             alt="avatar">
                         Michelle Glover
                     </a>
                     <a href="#" class="d-flex align-items-center mb-2">
                         <img class="avatar rounded-circle border border-3 me-2" src="assets/images/xs/avatar3.jpg"
                             alt="avatar">
                         Jony Doe
                     </a>
                 </div>
             </div>
         </form>

         <ul class="header-menu flex-grow-1">
             <!--[ Start:: notification ]-->
             <li class="nav-item dropdown px-md-1 d-none d-md-inline-flex">
                 <a class="dropdown-toggle gray-6" href="#" role="button" data-bs-toggle="dropdown"
                     aria-expanded="false" title="notification">
                     <span class="bullet-dot bg-primary animation-blink"></span>
                     <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                         viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                         <path
                             d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6">
                         </path>
                         <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                         <path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727"></path>
                         <path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727"></path>
                     </svg>
                 </a>
                 <div class="dropdown-menu shadow rounded-4 notification" id="NotificationsDiv">
                     <div class="card border-0">
                         <div class="card-header d-flex justify-content-between align-items-center py-3">
                             <h4 class="mb-0 text-gradient title-font">Notifications</h4>
                             <a href="#" class="btn btn-link" title="view all">View all</a>
                         </div>
                         <ul class="card-body p-0 list-unstyled mb-0 custom_scroll ps-2" style="height: 400px;">
                             <li class="pe-2">
                                 <a class="d-flex p-lg-3 p-2 rounded-3" href="javascript:void(0);">
                                     <div class="avatar sm">
                                         <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24" stroke="currentColor" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                             <path
                                                 d="M7 11v8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3">
                                             </path>
                                         </svg>
                                     </div>
                                     <div class="flex-fill ms-3">
                                         <span class="d-flex justify-content-between"><small
                                                 class="text-primary">Holiday Sale</small><small
                                                 class="text-muted">11:30 AM Today</small></span>
                                         <p class="mb-0 mt-1">Your New Campaign sale live on themeforest and our
                                             store is approved.</p>
                                     </div>
                                 </a>
                             </li>
                             <li class="pe-2">
                                 <a class="d-flex p-lg-3 p-2 rounded-3" href="javascript:void(0);">
                                     <div class="avatar sm">
                                         <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24" stroke="currentColor" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                             <path d="M8 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h5.697"></path>
                                             <path d="M18 14v4h4"></path>
                                             <path d="M18 11v-4a2 2 0 0 0 -2 -2h-2"></path>
                                             <path
                                                 d="M8 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z">
                                             </path>
                                             <path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                             <path d="M8 11h4"></path>
                                             <path d="M8 15h3"></path>
                                         </svg>
                                     </div>
                                     <div class="flex-fill ms-3">
                                         <span class="d-flex justify-content-between"><small
                                                 class="text-info">Reports</small><small class="text-muted">04:00 PM
                                                 Today</small></span>
                                         <p class="mb-0 mt-1">Website visits from Twitter is 27% higher than
                                             last week.</p>
                                     </div>
                                 </a>
                             </li>
                             <li class="pe-2">
                                 <a class="d-flex p-lg-3 p-2 rounded-3 align-items-start" href="javascript:void(0);">
                                     <img class="avatar sm rounded-circle" src="assets/images/xs/avatar4.jpg"
                                         alt="avatar">
                                     <div class="flex-fill ms-3">
                                         <span class="d-flex justify-content-between"><small class="text-warning">HTML
                                                 Code</small><small class="text-muted">1day</small></span>
                                         <p class="mb-0 mt-1">Update new code in github and share deteail</p>
                                     </div>
                                 </a>
                             </li>
                             <li class="pe-2">
                                 <div class="d-flex p-lg-3 p-2 rounded-3">
                                     <img class="avatar sm rounded-circle" src="assets/images/xs/avatar1.jpg"
                                         alt="avatar">
                                     <div class="flex-fill ms-3">
                                         <span class="d-flex justify-content-between"><small class="text-success">New
                                                 Request</small><small class="text-muted">1day</small></span>
                                         <p class="mb-0 mt-1"><strong>Tina Harris</strong> is requesting to
                                             upgrade Plan</p>
                                         <div class="mt-2">
                                             <a href="#" class="btn btn-sm bg-accent text-white">Accept</a>
                                             <a href="#" class="btn btn-sm btn-dark text-white">Decline</a>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                             <li class="pe-2">
                                 <a class="d-flex p-lg-3 p-2 rounded-3" href="javascript:void(0);">
                                     <div class="avatar sm">
                                         <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24" stroke="currentColor" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                             <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                             <path d="M12 8v4"></path>
                                             <path d="M12 16h.01"></path>
                                         </svg>
                                     </div>
                                     <div class="flex-fill ms-3">
                                         <span class="d-flex justify-content-between"><small class="text-danger">Error
                                                 404</small><small class="text-muted">Yesterday</small></span>
                                         <p class="mb-0 mt-1">BVITE admin template on website analytics
                                             configurations</p>
                                     </div>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </li>
             <li class="nav-item py-2 py-md-1 col-auto">
                 <div class="vr d-none d-sm-flex h-100 mx-sm-2"></div>
             </li>
             <!--[ Start:: language ]-->
             <li class="nav-item dropdown px-md-1 d-none d-md-inline-flex">
                 <a class="dropdown-toggle gray-6" href="#" data-bs-toggle="dropdown" role="button"
                     title="language">
                     <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                         viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                         <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                         <path d="M3.6 9h16.8"></path>
                         <path d="M3.6 15h16.8"></path>
                         <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                         <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                     </svg>
                 </a>
                 <ul class="dropdown-menu shadow rounded-4 p-2 p-xl-3 li_animate">
                     <li class="mb-1"><a class="dropdown-item rounded-pill active" href="#"
                             title="language">English</a></li>
                     <li class="mb-1"><a class="dropdown-item rounded-pill" href="#"
                             title="language">Hindi</a></li>
                     <li class="mb-1"><a class="dropdown-item rounded-pill" href="#"
                             title="language">Spanish</a></li>
                     <li class="mb-1"><a class="dropdown-item rounded-pill" href="#"
                             title="language">Arabic</a></li>
                     <li class="mb-1"><a class="dropdown-item rounded-pill" href="#"
                             title="language">French</a></li>
                 </ul>
             </li>
             <!--[ Start:: theme light/dark ]-->
             <li class="nav-item dropdown px-md-1">
                 <a class="dropdown-toggle gray-6" href="#" id="bd-theme" data-bs-toggle="dropdown"
                     aria-expanded="false">
                     <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"
                         class="theme-icon-active">
                         <use href="#sun-fill"></use>
                     </svg>
                 </a>
                 <ul class="dropdown-menu dropdown-menu-end p-2 p-xl-3 shadow rounded-4" aria-labelledby="bd-theme">
                     <li class="mb-1"><a class="dropdown-item rounded-pill" href="#"
                             data-bs-theme-value="light"><svg class="avatar xs me-2 opacity-50 theme-icon"
                                 fill="currentColor">
                                 <use href="#sun-fill"></use>
                             </svg> Light</a></li>
                     <li class="mb-1"><a class="dropdown-item rounded-pill active" href="#"
                             data-bs-theme-value="dark"><svg class="avatar xs me-2 opacity-50 theme-icon"
                                 fill="currentColor">
                                 <use href="#moon-stars-fill"></use>
                             </svg> Dark</a></li>
                     <li class="mb-1"><a class="dropdown-item rounded-pill" href="#"
                             data-bs-theme-value="auto"><svg class="avatar xs me-2 opacity-50 theme-icon"
                                 fill="currentColor">
                                 <use href="#circle-half"></use>
                             </svg> Auto</a></li>
                 </ul>
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     viewBox="0 0 16 16" style="display: none;">
                     <symbol id="sun-fill" viewBox="0 0 16 16">
                         <path
                             d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                     </symbol>
                     <symbol id="moon-stars-fill" viewBox="0 0 16 16">
                         <path
                             d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                         <path
                             d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                     </symbol>
                     <symbol id="circle-half" viewBox="0 0 16 16">
                         <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                     </symbol>
                 </svg>
             </li>
             <!--[ Start:: theme setting ]-->
             <li class="nav-item dropdown px-md-1">
                 <a class="dropdown-toggle gray-6" href="#offcanvas_setting" data-bs-toggle="offcanvas"
                     aria-expanded="false" title="template setting">
                     <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                         viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                         <path
                             d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
                         </path>
                         <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                     </svg>
                 </a>
             </li>
             <li class="nav-item py-2 py-md-1 col-auto">
                 <div class="vr d-none d-sm-flex h-100 mx-sm-2"></div>
             </li>
             <!--[ Start:: user detail ]-->
             <li class="nav-item user ms-3">
                 <a class="dropdown-toggle gray-6 d-flex text-decoration-none align-items-center lh-sm p-0"
                     href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="User"
                     data-bs-auto-close="outside">
                     <img class="avatar rounded-circle border border-3" src="assets/images/profile_av.png"
                         alt="avatar">
                     <span class="ms-2 fs-6 d-none d-sm-inline-flex">Michelle</span>
                 </a>
                 <div class="dropdown-menu dropdown-menu-end shadow p-2 p-xl-3 rounded-4">
                     <div class="bg-body p-3 rounded-3">
                         <h4 class="mb-1 title-font text-gradient">Michelle Glover</h4>
                         <p class="small text-muted">michelle.glover@gmail.com</p>
                         <input type="text" class="form-control form-control-sm" placeholder="Update my status">
                     </div>
                     <ul class="list-unstyled mt-3">
                         <li>
                             <a class="dropdown-item rounded-pill" aria-label="my wallet" href="my-wallet.html">
                                 <span class="align-middle">Balance: <span class="fw-bold text-success"><span
                                             data-purecounter-start="0" data-purecounter-separator=","
                                             data-purecounter-currency="$" data-purecounter-end="14000"
                                             class="purecounter">0</span></span></span>
                             </a>
                         </li>
                         <li><a class="dropdown-item rounded-pill" aria-label="my profile" href="my-profile.html">My
                                 Profile</a></li>
                         <li><a class="dropdown-item rounded-pill" aria-label="my task" href="my-task.html">My
                                 Taskboard</a></li>
                         <li><a class="dropdown-item rounded-pill" aria-label="account settings"
                                 href="account-settings.html">Settings</a></li>
                         <li class="dropdown-divider"></li>
                         <li><a class="dropdown-item rounded-pill" aria-label="Add another account"
                                 href="#">Add another account</a></li>
                     </ul>
                     <a class="btn py-2 btn-primary w-100 mt-3 rounded-pill" href="signin.html"
                         role="button">Logout</a>
                     <div class="mt-3 text-center small">
                         <a class="text-muted me-1" href="#!">Privacy policy</a>•<a class="text-muted mx-1"
                             href="#!">Terms</a>•<a class="text-muted ms-1" href="#!">Cookies</a>
                     </div>
                 </div>
             </li>
         </ul>
     </div>
 </header>
