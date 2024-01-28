@extends('layouts.main')
@section('title', 'Edit List')
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
                <h6 class="m-0 font-weight-bold text-primary">Edit Edition</h6>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    @include('partials.alerts')
                    <form action="{{ route('editlist.update', $editionlist) }}" method="POST" id="staffForm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select class="form-select form-control @error('status') is-invalid @enderror" aria-label="Default select example" name="status">
                                        <option value="">Select</option>
                                        <option value="Active" {{ old('status') == 'Active' ? 'selected' : ($editionlist->status == 'Active' ? 'selected' : '') }}>Active</option>
                                        <option value="Inactive" {{ old('status') == 'Inactive' ? 'selected' : ($editionlist->status == 'Inactive' ? 'selected' : '') }}>Inactive</option>
                                    </select>
                                    @error('status')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                     @if($editionlist != null && $editionlist->edition_image != null)
                                    <img id="oldImage" class="mb-2 ml-2" src="{{ asset('uploads/' . ($editionlist->edition_image ?? '')) }}" width="60" alt="Old Image">
                                    @endif
                                <div class="form-group">
                         
                                    <label>Edition Image</label>
                                    <input type="file"
                                        class="form-control input-default @error('edition_image') is-invalid @enderror"
                                        name="edition_image">
                                    @error('edition_image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--- For Edit Purpose-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Edition Title</label>
                                    <input type="text"
                                        class="form-control input-default @error('edition_title ') is-invalid @enderror"
                                        name="edition_title"
                                        value="{{ old('edition_title') ?? $editionlist->edition_title }}">
                                    @error('edition_title')
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

@endsection
