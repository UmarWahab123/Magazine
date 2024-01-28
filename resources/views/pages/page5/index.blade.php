@extends('layouts.main')
{{-- @section('title', 'Update Page') --}}
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="card">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Page No: 5</h6>
                            <div class="text-end"> <a href="{{ route('page5.add') }}"
                                    class="btn btn-primary">Add page
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="card-body">

                                    @include('partials.alerts')


                                    @if (count($pages) > 0)
                                        <table class="table table-bordered m-0">
                                            <thead>
                                                <tr>
                                                    <th>Sr No</th>
                                                    <th>Page Title</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($pages as $page)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $page->page_title }}</td>
                                                        <td>


                                                            <a href="{{ route('page5.edit', $page) }}"
                                                                class="btn btn-danger">Update
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
