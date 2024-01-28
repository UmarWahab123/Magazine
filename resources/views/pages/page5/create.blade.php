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
    <!-- Begin Page Content
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Page No: 5</h6>

            </div>
            <div class="card-body">
                <div class="basic-form">
                    @include('partials.alerts')
                    <form action="{{ route('page5.create') }}" method="post" id="staffForm" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
                        <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select class="form-select form-control @error('status') is-invalid @enderror" aria-label="Default select example" name="status">
                                        <option value="Select">Select</option>
                                        <option value="Active" {{ old('status') == 'Active' || (isset($page5) && $page5->status == 'Active') ? 'selected' : '' }}>Active</option>
                                        <option value="Inactive" {{ old('status') == 'Inactive' || (isset($page5) && $page5->status == 'Inactive') ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                    @error('status')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="bold btn-outline-info btn">Section: 01</p>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="page_title">Page Title</label>
                                    <input type="text"
                                        class="form-control input-default
                                @error('page_title') is-invalid @enderror"
                                        name="page_title" id="page_title" value="{{isset($page5->page_title)? $page5->page_title :'' }}">
                                    @error('page_title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--- For Edit Purpose-->
                            <div class="col-md-12">
                                <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page5->image_bg ?? '')) }}" width="60" alt="Old Image">
                                <div class="form-group mb-3">
                                    <label for="formFile" class="form-label">Background Image</label>
                                   <input class="form-control" type="hidden" name="image_bg" value="{{$page5->image_bg}}">
                                    <input type="file"
                                        class="form-control input-default  @error('image_bg') is-invalid @enderror"
                                        name="image_bg">
                                    @error('image_bg')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page5->icon ?? '')) }}" width="60" alt="Old Image">
                                <div class="form-group mb-3">
                                    <label for="formFile" class="form-label">Image Icon</label>
                                    <input class="form-control" type="hidden" name="icon" value="{{$page5->icon}}">
                                    <input type="file"
                                        class="form-control input-default  @error('icon') is-invalid @enderror"
                                        name="icon">
                                    @error('icon')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-group">
                                    <label class="form-label">Image Heading</label>
                                    <input type="text"
                                        class="form-control input-default @error('image_heading') is-invalid @enderror"
                                        name="image_heading" value="
                                        {{isset($page5->image_heading)? $page5->image_heading :'' }}">
                                    @error('image_heading')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-group">
                                    <label class="form-label">Image Heading2</label>
                                    <input type="text"
                                        class="form-control input-default @error('image_heading2') is-invalid @enderror"
                                        name="image_heading2" value="{{isset($page5->image_heading2)? $page5->image_heading2 :'' }}">
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
                                    <label class="form-label">Title</label>
                                    <input type="text"
                                        class="form-control input-default @error('title1') is-invalid @enderror"
                                        name="title1" value="{{isset($page5->title1)? $page5->title1 :'' }}">
                                    @error('title1')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-4">
                                <div class="form-group">
                                    <label class="form-label">Text</label>
                                    <textarea id="summernote" name="text1" class="form-control" required>{{isset($page5->text1)? $page5->text1 :'' }}</textarea>
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
                                    <input class="form-control @error('video') is-invalid @enderror" type="text"
                                        id="formFile" name="video" value="{{isset($page5->video)? $page5->video :'' }}">
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
                                    <label class="form-label">Text</label>
                                    <input type="text"
                                        class="form-control input-default @error('text2') is-invalid @enderror"
                                        name="text2" value="{{isset($page5->text2)? $page5->text2 :'' }}">
                                    @error('text2')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page5->image1 ?? '')) }}" width="60" alt="Old Image">
                                <div class="form-group mb-3">

                                    <label for="formFile" class="form-label">Image: 01</label>
                                    <input class="form-control" type="hidden" name="image1" value="{{$page5->image1}}">
                                    <input class="form-control @error('image1') is-invalid @enderror" type="file"
                                        name="image1" id="formFile">
                                    @error('image1')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page5->image2 ?? '')) }}" width="60" alt="Old Image">

                                <div class="form-group mb-3">
                                    <label for="formFile" class="form-label">Image: 02</label>
                                    <input class="form-control" type="hidden" name="image2" value="{{$page5->image2}}">
                                    <input class="form-control @error('image2') is-invalid @enderror" type="file"
                                        id="formFile" name="image2">
                                    @error('image2')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Text</label>
                                    <textarea id="summernote2" name="text3" class="form-control" required>{{isset($page5->text3)? $page5->text3 :'' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <div class="col-sm-10">
                                <input type="submit" value="Add page" class="btn btn-outline-secondary">
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
