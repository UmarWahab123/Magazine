@extends('layouts.main')
{{-- @section('title', 'Page') --}}
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="card">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Page No: 6</h6>
                    </div>
                    <div class="col-6 text-end">
                        <a href="{{ route('created') }}" class="btn btn-primary">Add
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <div class="card-body">
                        @include('partials.alerts')
                        @if (count($page6) > 0)
                            <table class="table table-bordered m-0">
                                <thead>
                                    <tr>
                                        <th>Sr. No</th>
                                        <th>Page Title</th>
                                        <th>Title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($page6 as $page)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $page->page_title }}</td>
                                            <td>{{ $page->title }}</td>
                                            <td>
                                                <a href="{{ route('edit', $page) }}" class="btn btn-danger">Update
                                                    <i class="align-middle" data-feather="edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-info m-0">No record found!</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Row -->
    </div>
    <!-- /.container-fluid -->
@endsection
