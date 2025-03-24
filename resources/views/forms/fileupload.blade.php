@extends('layouts.vertical', ['title' => 'File Uploads '])

@section('content')
    @include('layouts.partials.page-title', ['subtitle' => 'Forms', 'title' => 'File Uploads '])
    <div class="card">
        <div class="card-header border-bottom border-dashed d-flex align-items-center">
            <h4 class="header-title">Dropzone File Upload</h4>
        </div>

        <div class="card-body">
            <p class="text-muted">
                DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.
            </p>
            <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone"
                data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                <div class="fallback">
                    <input name="file" type="file" multiple />
                </div>

                <div class="dz-message needsclick">
                    <i class="ti ti-cloud-upload h1 text-muted"></i>
                    <h3>Drop files here or click to upload.</h3>
                    <span class="text-muted fs-13">(This is just a demo dropzone. Selected files are
                        <strong>not</strong> actually uploaded.)</span>
                </div>
            </form>

            <!-- Preview -->
            <div class="dropzone-previews mt-3" id="file-previews"></div>
        </div>
        <!-- end card-body -->
    </div>
    <!-- end card-->

    <!-- file preview template -->
    <div class="d-none" id="uploadPreviewTemplate">
        <div class="card mt-1 mb-0 shadow-none border">
            <div class="p-2">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                    </div>
                    <div class="col ps-0">
                        <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                        <p class="mb-0" data-dz-size></p>
                    </div>
                    <div class="col-auto">
                        <!-- Button -->
                        <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                            <i class="ti ti-x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @vite(['resources/js/pages/form-fileupload.js'])
@endsection
