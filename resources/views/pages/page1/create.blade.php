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
                <h6 class="m-0 font-weight-bold text-primary">Add Page No: 1</h6>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    @include('partials.alerts')
                    <form action="{{ url('page1/create') }}" method="POST" id="staffForm" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
                        <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select class="form-select form-control @error('status') is-invalid @enderror" aria-label="Default select example" name="status">
                                        <option value="Select">Select</option>
                                        <option value="Active" {{ old('status') == 'Active' || (isset($pages) && $pages->status == 'Active') ? 'selected' : '' }}>Active</option>
                                        <option value="Inactive" {{ old('status') == 'Inactive' || (isset($pages) && $pages->status == 'Inactive') ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                    @error('status')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Page Title</label>
                                    <input type="text"
                                        class="form-control input-default  @error('pageTitle') is-invalid @enderror"
                                        name="pageTitle" value="{{isset($pages->page_title)? $pages->page_title :'' }}">
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
                                        @if($pages != null && $pages->form_file != null)
                                        <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($pages->form_file ?? '')) }}" width="60" alt="Old Image">
                                        @endif
                                        <input class="form-control" type="hidden" name="formFile" value="{{$pages->form_file}}">
                                    <input class="form-control" type="file" id="formFile" name="formFile"
                                       >
                                    @error('formFile')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text"
                                        class="form-control input-default   @error('heading') is-invalid @enderror"
                                        value="{{isset($pages->heading)? $pages->heading :'' }}" name="heading">
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
                                        name="title" value="{{isset($pages->title)? $pages->title :'' }}">
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Text</label>
                                    <textarea id="summernote" name="editordata" required>{{isset($pages->editor_data)? $pages->editor_data :'' }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Button Text</label>
                                    <input type="text"
                                        class="form-control input-default  @error('buttonText') is-invalid @enderror"
                                        name="buttonText" value="{{isset($pages->button_text)? $pages->button_text :'' }}">
                                    @error('buttonText')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
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
