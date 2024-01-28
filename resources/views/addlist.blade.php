@extends('layouts.main')
{{-- @section('title', 'Add list') --}}

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Edition</h6>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    @include('partials.alerts')
                    <form action="{{ route('addlist.store') }}" method="POST" id="staffForm" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Status</label>
                                <select class="form-select form-control @error('status') is-invalid @enderror" aria-label="Default select example" name="status" value="{{ old('status') }}" required>
                                    <option value="" >Select</option>
                                    <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>Active</option>
                                    <option value="Inactive" {{ old('status') == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>
                              @error('status')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>
                        <!--<div class="col-md-12">-->
                        <!--    <div class="form-check mb-4 mt-2">-->
                        <!--        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">-->
                        <!--        <label class="form-check-label" for="flexCheckDefault">-->
                        <!--            Display On Homepage-->
                        <!--        </label>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="col-md-12">
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
                                    name="edition_title" value="{{ old('edition_title') }}">
                                @error('edition_title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
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
