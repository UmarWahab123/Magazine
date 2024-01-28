@extends('layouts.main')
{{-- @section('title', 'Update Page') --}}
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Page No: 6</h6>
                <div class="text-end"> <a href="{{ url('/page6') }}" class="btn btn-primary">Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    @include('partials.alerts')
                    <form action="{{ route('edit', $page) }}" method="POST" id="staffForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <p class="bold btn-outline-info btn">Section: 01</p>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Page Title</label>
                                    <input type="text" name="pageTitle"
                                        class="form-control input-default @error('pageTitle') is-invalid @enderror"
                                        id="pageTitle" value="{{ old('pageTitle') ?? $page->page_title }}">
                                    @error('pageTitle')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--- For Edit Purpose-->
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="formFile" class="form-label">Background Image</label>
                                    <input class="form-control @error('formFile') is-invalid @enderror" type="file"
                                        id="formFile" name="formFile" value="{{ old('formFile') ?? $page->form_file }}">
                                    @error('formFile')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="hidden" name="formFileold" id="formFileold"
                                        value="{{ old('formFile') ?? $page->form_file }}">
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-group">
                                    <label>Image Heading</label>
                                    <input type="text" id="imgHeading" name="imgHeading"
                                        class="form-control input-default @error('imgHeading') is-invalid @enderror"
                                        value="{{ old('imgHeading') ?? $page->img_heading }}">
                                    @error('imgHeading')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <hr>
                            </div>
                            <div class="col-md-12 mt-4">
                                <p class="bold btn-outline-info btn">Section: 02</p>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" id="heading" name="heading"
                                        class="form-control input-default @error('heading') is-invalid @enderror"
                                        value="{{ old('heading') ?? $page->heading }}">
                                    @error('heading')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label> Title</label>
                                    <input type="text" id="title" name="title"
                                        class="form-control input-default @error('title') is-invalid @enderror"
                                        value="{{ old('title') ?? $page->title }}">
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Text</label>
                                    <textarea id="summernote" name="editordata">{{ old('editor_data') ?? $page->editor_data }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="formFile" class="form-label">Video Url</label>
                                    <input class="form-control @error('formFile1') is-invalid @enderror" type="text"
                                        id="formFile1" name="formFile1"
                                        value="{{ old('formFile1') ?? $page->form_file1 }}">
                                    @error('formFile1')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <div class="col-sm-10">
                                <input type="submit" value="Update" class="btn btn-outline-secondary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Content Row -->
    @endsection
