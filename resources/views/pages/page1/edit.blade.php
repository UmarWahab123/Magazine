@extends('layouts.main')
{{-- @section('title', 'Update Page') --}}
@section('content')


    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Page No: 1</h6>
                <div class="text-end"> <a href="{{ url('/pagelist') }}" class="btn btn-primary">Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    @include('partials.alerts')
                    <form action="{{ route('page1.edit', $page) }}" method="POST" id="staffForm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Page Title</label>
                                    <input type="text"
                                        class="form-control input-default  @error('pageTitle') is-invalid @enderror"
                                        name="pageTitle" value="{{ old('pageTitle') ?? $page->page_title }}">
                                    @error('pageTitle')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--- For Edit Purpose-->
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="formFile"
                                        class="form-label  @error('formFile') is-invalid @enderror">Image</label>
                                    <input class="form-control" type="file" id="formFile" name="formFile"
                                        value="{{ old('formFile') ?? $page->form_file }}">
                                    @error('formFile')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="hidden" name="formFileold" id="formFileold"
                                        value="{{ old('formFile') ?? $page->form_file }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text"
                                        class="form-control input-default   @error('heading') is-invalid @enderror"
                                        value="{{ old('heading') ?? $page->heading }}" name="heading">
                                </div>
                                @error('heading')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label> Title</label>
                                    <input type="text"
                                        class="form-control input-default @error('title') is-invalid @enderror"
                                        name="title" value="{{ old('title') ?? $page->title }}">
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Text</label>
                                    <textarea id="summernote" name="editordata">{{ old('editordata') ?? $page->editor_data }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Button Text</label>
                                    <input type="text"
                                        class="form-control input-default  @error('buttonText') is-invalid @enderror"
                                        name="buttonText" value="{{ old('buttonText') ?? $page->button_text }}">
                                    @error('buttonText')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="submit" value="Update" class="btn btn-outline-secondary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Content Row -->
    </div>
    <!-- /.container-fluid -->
@endsection
