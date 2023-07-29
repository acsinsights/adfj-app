@if (Session::has('error'))
    <div class="col-xl-6">
        <div class="alert alert-danger left-icon-big alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i
                        class="mdi mdi-btn-close"></i></span>
            </button>
            <div class="media">
                <div class="alert-left-icon-big">
                    <span><i class="mdi mdi-alert"></i></span>
                </div>
                <div class="media-body">
                    <h5 class="mt-1 mb-2">Error!</h5>
                    <p class="mb-0">{{ Session::get('error') }}</p>
                </div>
            </div>
        </div>
    </div>
@endif

@if (Session::has('success'))
    <div class="col-xl-6">
        <div class="alert alert-success left-icon-big alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i
                        class="mdi mdi-btn-close"></i></span>
            </button>
            <div class="media">
                <div class="alert-left-icon-big">
                    <span><i class="mdi mdi-check-circle-outline"></i></span>
                </div>
                <div class="media-body">
                    <h5 class="mt-1 mb-2">Success!</h5>
                    <p class="mb-0">{{ Session::get('success') }}</p>
                </div>
            </div>
        </div>
    </div>
@endif
