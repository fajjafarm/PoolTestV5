@extends('layouts.vertical', ['title' => 'Terms & Conditions'])

@section('content')
    @include('layouts.partials.page-title', ['subtitle' => 'Pages', 'title' => 'Terms & Conditions'])

    <div class="row mt-4 justify-content-center">
        <div class="col-lg-12">
            <div class="card overflow-hidden">
                <div class="card-header terms-bg bg-primary text-center p-4">
                    <div class="mb-3">
                        <a href="/" class="logo-light">
                            <span><img src="/images/logo.png" alt="logo" height="24"></span>
                        </a>
                    </div>
                    <h2 class="text-white fw-semibold">Terms & Conditions</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h5 class="card-title mb-0 fw-semibold text-uppercase">Agreement T0 Terms :</h5>
                        </div>
                        <div class="card-body">
                            <p>These Terms of Service constitute a legally binding agreement made between you, whether
                                personally or on behalf of an entity you and Space we, concerning your access to and use of
                                the space.com website as well as any other media form, media channel, mobile website or
                                mobile application related, linked, or otherwise connected thereto (collectively, the
                                "Site").</p>
                            <p class="mb-0">You agree that by accessing the Site, you have read, understood, and agree to
                                be bound by all of these Terms of Service. If you do not agree with all of these Terms of
                                Service, then you are expressly prohibited from using the Site and you must discontinue use
                                immediately.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h5 class="card-title mb-0 fw-semibold text-uppercase">Cookies :</h5>
                        </div>
                        <div class="card-body">
                            <p>Cookies are files with small amount of data that is commonly used an anonymous unique
                                identifier. These are sent to your browser from the website that you visit and are stored on
                                your computer's hard drive</p>
                            <p class="mb-0">Our website uses these "cookies" to collection information and to improve aur
                                Service. You have the option to either accept or refuse these cookies, and know when a
                                cookie is being sent to your computer. If you choose to refuse our cookies, you may not be
                                able to use some portions of our Service</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h5 class="card-title mb-0 fw-semibold text-uppercase">Contact Information :</h5>
                        </div>
                        <div class="card-body">
                            <p class="fs-5 fw-semibold">If you have any questions about these Terms & Conditions, please
                                contact us at :</p>
                            <ol class="ps-3 d-flex flex-column gap-1">
                                <li>
                                    <p class="mb-0"><span class="text-dark fw-semibold">Email : </span> <a
                                            href="#!">ocenbycoderthemes@mail.com</a></p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="text-dark fw-semibold">Contact Number : </span> <a
                                            href="#!">+001 364-364-000</a></p>
                                </li>
                                <li>
                                    <p class="mb-0"><span class="text-dark fw-semibold">Location : </span> <a
                                            href="#!">3469 Beech Street Oakland, CA 94607</a></p>
                                </li>
                            </ol>
                            <p class="mb-0">By using our website, you acknowledge that you have read, understood, and
                                agree to be bound by these Terms & Conditions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h5 class="card-title mb-0 fw-semibold text-uppercase">User Representations :</h5>
                        </div>
                        <div class="card-body">
                            <p class="fs-5 fw-semibold">By using the Site, you represent and warrant that :</p>
                            <ol class="ps-3 d-flex flex-column gap-1">
                                <li>
                                    <p class="mb-0">All registration information you submit will be true, accurate,
                                        current, and complete.</p>
                                </li>
                                <li>
                                    <p class="mb-0">You will maintain the accuracy of such information and promptly update
                                        such registration information as necessary.</p>
                                </li>
                                <li>
                                    <p class="mb-0">You have the legal capacity and you agree to comply with these Terms
                                        of Service.</p>
                                </li>
                                <li>
                                    <p class="mb-0">Not a minor in the jurisdiction in which you reside.</p>
                                </li>
                                <li>
                                    <p class="mb-0">You will not access the Site through automated or non-human means,
                                        whether through a bot, script, or otherwise.</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h5 class="card-title mb-0 fw-semibold text-uppercase">Information Collection and use :</h5>
                        </div>
                        <div class="card-body">
                            <p class="fs-5 fw-semibold">We may employ third-party companies and individuals due to the
                                following reasons :</p>
                            <ol class="ps-3 d-flex flex-column gap-1">
                                <li>
                                    <p class="mb-0">To facilitate our Service,</p>
                                </li>
                                <li>
                                    <p class="mb-0">To provide the Service on our behalf,</p>
                                </li>
                                <li>
                                    <p class="mb-0">To perform Service-related services; or</p>
                                </li>
                                <li>
                                    <p class="mb-0">To assist us in analyzing how our Service is used</p>
                                </li>
                            </ol>
                            <p class="mb-0">We want to inform our Service users that these third parties have access to
                                your Personal Information. The reason is to perform the tasks assigned to them on our
                                behalf. However, they are obligated not to disclose or use the information for any other
                                purpose</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h5 class="card-title mb-0 fw-semibold text-uppercase">Limitation of Liability :</h5>
                        </div>
                        <div class="card-body">
                            <p class="mb-1">Coderthemes will not be liable for any damages arising from the use or
                                inability to use our website or services. This includes direct, indirect, incidental, or
                                consequential damages.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-end text-end mb-3">
        <div class="col-lg-6">
            <a href="#!" class="btn btn-dark fw-semibold">Not, Right Now</a>
            <a href="#!" class="btn btn-primary fw-semibold ms-1">I Agree With Terms</a>
        </div>
    </div>
@endsection
