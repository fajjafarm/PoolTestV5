<!DOCTYPE html>
<html lang="en">


<head>
    @include('layouts.partials.title-meta', ['title' => 'Create Password'])

    @include('layouts.partials.head-css')
</head>

<body class="h-100">

    <div class="auth-bg d-flex min-vh-100 justify-content-center align-items-center">
        <div class="row g-0 justify-content-center w-100 m-xxl-5 px-xxl-4 m-3">
            <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="card overflow-hidden text-center h-100 p-xxl-4 p-3 mb-0">
                    <a href="{{ route('second', ['dashboards', 'index']) }}" class="auth-brand mb-3">
                        <img src="/images/logo-dark.png" alt="dark logo" height="24" class="logo-dark">
                        <img src="/images/logo.png" alt="logo light" height="24" class="logo-light">
                    </a>

                    <h3 class="fw-semibold mb-2">Create New Password</h3>

                    <p class="text-muted mb-2">Please create your new password.</p>
                    <p class="mb-4">Need password suggestion ? <a href="#!"
                            class="link-dark fw-semibold text-decoration-underline">Suggestion</a></p>

                    <div class="d-flex justify-content-center gap-2 mb-3">
                        <a href="#!" class="btn btn-soft-danger avatar-lg"><i
                                class="ti ti-brand-google-filled fs-24"></i></a>
                        <a href="#!" class="btn btn-soft-success avatar-lg"><i
                                class="ti ti-brand-apple fs-24"></i></a>
                        <a href="#!" class="btn btn-soft-primary avatar-lg"><i
                                class="ti ti-brand-facebook fs-24"></i></a>
                        <a href="#!" class="btn btn-soft-info avatar-lg"><i
                                class="ti ti-brand-linkedin fs-24"></i></a>
                    </div>

                    <p class="fs-13 fw-semibold">Or</p>

                    <form action="{{ route('second', ['dashboards', 'index']) }}" class="text-start mb-3">


                        <div class="mb-3">
                            <label class="form-label" for="new-password">Create New Password <small
                                    class="text-primary ms-1">Must be at least 8 characters</small></label>
                            <input type="password" id="new-password" name="new-password" class="form-control"
                                placeholder="New Password">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="re-password">Reenter New Password</label>
                            <input type="password" id="re-password" name="re-password" class="form-control"
                                placeholder="Reenter Password">
                        </div>
                        <div class="mb-2 d-grid">
                            <button class="btn btn-primary" type="submit">Create New Password</button>
                        </div>

                    </form>

                    <p class="text-danger fs-14 mb-4">Back To <a href="{{ route('second', ['auth', 'login']) }}"
                            class="fw-semibold text-dark ms-1">Login !</a></p>

                    <p class="mt-auto mb-0">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Osen - By <span
                            class="fw-bold text-decoration-underline text-uppercase text-reset fs-12">Coderthemes</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.partials.footer-scripts')

</body>

</html>
