@extends('layouts.main')
{{-- @section('title', 'Add Page') --}}
@section('css')
<style>
    #formFileold {
        border: none;
    }
    </style>
@endsection
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Page No: 6</h6>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    @include('partials.alerts')
                    <form action="{{ url('page6/create') }}" method="POST" id="staffForm" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
                        <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Status</label>
                                <select class="form-select form-control @error('status') is-invalid @enderror" aria-label="Default select example" name="status">
                                    <option value="">Select</option>
                                    <option value="Active" {{ old('status') == 'Active' || (isset($page6) && $page6->status == 'Active') ? 'selected' : '' }}>Active</option>
                                    <option value="Inactive" {{ old('status') == 'Inactive' || (isset($page6) && $page6->status == 'Inactive') ? 'selected' : '' }}>Inactive</option>
                                </select>
                                @error('status')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="bold btn-outline-info btn">Section: 01</p>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Page Title</label>
                                    <input type="text" name="pageTitle"
                                        class="form-control input-default @error('pageTitle') is-invalid @enderror"
                                        id="pageTitle" value="{{isset($page6->page_title)? $page6->page_title :'' }}">
                                    @error('pageTitle')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--- For Edit Purpose-->
                            <div class="col-md-12">
                                <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page6->form_file ?? '')) }}" width="60" alt="Old Image">
                                <div class="form-group mb-3">
                                    <label for="formFile" class="form-label">Background Image</label>
                                    <input class="form-control" type="hidden" name="form_file" value="{{$page6->form_file}}">
                                    <input class="form-control @error('formFile') is-invalid @enderror" type="file"
                                        id="formFile" name="form_file" value="{{ old('formFile') }}" >
                                    @error('formFile')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-group">
                                    <label>Image Heading</label>
                                    <input type="text" id="imgHeading" name="imgHeading"
                                        class="form-control input-default @error('imgHeading') is-invalid @enderror"
                                        value=" {{isset($page6->img_heading)? $page6->img_heading :'' }}">
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
                                        value="{{isset($page6->heading)? $page6->heading :'' }}">
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
                                        value="{{isset($page6->title)? $page6->title :'' }}">
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Text</label>
                                    <textarea id="summernote" name="editordata" required>{{isset($page6->editor_data)? $page6->editor_data :'' }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="formFile" class="form-label">Video Url</label>
                                    <input class="form-control @error('formFile1') is-invalid @enderror" type="text"
                                        id="formFile1" name="formFile1" value="{{isset($page6->form_file1)? $page6->form_file1 :'' }}">
                                    @error('formFile1')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <div class="col-sm-10">
                                <input type="submit" value="Add" class="btn btn-outline-secondary">
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
