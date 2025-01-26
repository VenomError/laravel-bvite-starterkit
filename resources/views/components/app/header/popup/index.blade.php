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
                    
                    <x-app.header.popup.header />

                    <x-app.header.popup.body />
                   
                </div>
            </div>
            <div class="modal-footer border-0 justify-content-center">
                <div class="container-xxl">
                    <x-app.header.popup.footer />
                </div>
            </div>
        </div>
    </div>
</div>