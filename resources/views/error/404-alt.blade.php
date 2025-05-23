@extends('layouts.vertical', ['title' => 'Error 404'])



@section('content')
    @include('layouts.partials.page-title', ['subtitle' => 'Error', 'title' => '404 Error'])


    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="text-center">
                <img src="/images/error/error-404.png" height="230" alt="File not found Image">

                <h4 class="text-uppercase text-danger mt-3">Page Not Found</h4>
                <p class="text-muted mt-3">It's looking like you may have taken a wrong turn. Don't worry... it
                    happens to the best of us. Here's a
                    little tip that might help you get back on track.</p>

                <a class="btn btn-info mt-3" href="{{ route('second', ['dashboards', 'index']) }}"><i
                        class="ti ti-home me-1"></i> Return Home</a>
            </div> <!-- end /.text-center-->
        </div> <!-- end col-->
    </div>
@endsection
