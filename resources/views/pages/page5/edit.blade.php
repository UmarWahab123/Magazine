@extends('layouts.main')
{{-- @section('title', 'Update Page') --}}
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="card">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Page No: 5</h6>
                            <div class="text-end"> <a href="{{ route('page5.index') }}" class="btn btn-primary">Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                @include('partials.alerts')
                                <form action="{{ route('page5.update', $page) }}" method="post" id="staffForm"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="bold btn-outline-info btn">Section: 01</p>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Page Title</label>
                                                <input type="text"
                                                    class="form-control input-default @error('page_title') is-invalid @enderror"
                                                    name="page_title"
                                                    value="{{ old('page_title') ?? $page->page_title }}">
                                                @error('page_title')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--- For Edit Purpose-->
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label for="formFile" class="form-label">Background Image</label>
                                                <input type="file"
                                                    class="form-control input-default @error('image_bg') is-invalid @enderror"
                                                    name="image_bg" value="{{ old('image_bg') ?? $page->image_bg }}">
                                                @error('image_bg')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label for="formFile" class="form-label">Image Icon</label>
                                                <input type="file"
                                                    class="form-control input-default @error('icon') is-invalid @enderror"
                                                    name="icon" value="{{ old('icon') ?? $page->icon }}">
                                                @error('icon')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-4">
                                            <div class="form-group">
                                                <label>Image Heading</label>
                                                <input type="text"
                                                    class="form-control input-default @error('image_heading') is-invalid @enderror"
                                                    name="image_heading"
                                                    value="{{ old('image_heading') ?? $page->image_heading }}">
                                                @error('image_heading')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-4">
                                            <div class="form-group">
                                                <label>Image Heading2</label>
                                                <input type="text"
                                                    class="form-control input-default  @error('image_heading2') is-invalid @enderror"
                                                    name="image_heading2"
                                                    value="{{ old('image_heading2') ?? $page->image_heading2 }}">
                                                @error('image_heading2')
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
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text"
                                                    class="form-control input-default @error('title1') is-invalid @enderror"
                                                    value="{{ old('title1') ?? $page->title1 }}" name="title1">
                                                @error('title1')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <div class="form-group">
                                                <label>Text</label>
                                                <textarea id="summernote" name="text1">{{ old('text1') ?? $page->text1 }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                        <div class="col-md-12 mt-4">
                                            <p class="bold btn-outline-info btn">Section: 03</p>
                                        </div>
                                        <div class="col-md-12 mb-4">
                                            <div class="form-group mb-3">
                                                <label for="formFile" class="form-label">Video Url</label>
                                                <input class="form-control @error('video') is-invalid @enderror"
                                                    type="text" value="{{ old('video') ?? $page->video }}"
                                                    id="formFile" name="video">
                                                @error('video')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                        <div class="col-md-12 mt-4">
                                            <p class="bold btn-outline-info btn">Section: 04</p>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label>Text</label>
                                                <input type="text"
                                                    class="form-control input-default @error('text2') is-invalid @enderror"
                                                    value="{{ old('text2') ?? $page->text2 }}" name="text2">
                                                @error('text2')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="formFile" class="form-label">Image: 01</label>
                                                <input class="form-control @error('image1') is-invalid @enderror"
                                                    type="file" name="image1" id="formFile">
                                                @error('image1')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="formFile" class="form-label">Image: 02</label>
                                                <input class="form-control @error('image2') is-invalid @enderror"
                                                    type="file" id="formFile" name="image2">
                                                @error('image2')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Text</label>
                                                <textarea id="summernote2" name="text3">{{ old('text3') ?? $page->text3 }}</textarea>
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
                </div>
                <!-- /.container-fluid -->
                @endsection
