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
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Content Row -->
    <div class="row  chall-icon-bg2">
        <div class="col-md-3">
            <button class="btn btn-outline-info w-100" type="button" aria-expanded="true"
                data-toggle="collapse" data-target="#section1">Section: 01</button>
        </div>
        <div class="col-md-3">
            <button class="btn btn-outline-info w-100" type="button" aria-expanded="false"
                data-toggle="collapse" data-target="#section2">Section: 02</button>
        </div>
        <div class="col-md-3">
            <button class="btn btn-outline-info w-100" type="button" aria-expanded="false"
                data-toggle="collapse" data-target="#section3">Section: 03</button>
        </div>
        <div class="col-md-3">
            <button class="btn btn-outline-info w-100" type="button" aria-expanded="false"
                data-toggle="collapse" data-target="#section4">Section: 04</button>
        </div>
    </div>
     @foreach (['danger', 'warning', 'success', 'info'] as $msg)
          @if(Session::has('alert-' . $msg))
          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
          @endif
    @endforeach
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
    @endif
    <div id="section1" class="collapse show  multi-collapse mt-2" style="">
    <div class="card mt-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Section: 01</h6>
        </div>
        <div class="card-body">
            <div class="basic-form">
            @include('partials.alerts')
           <form action="{{url('page2/store')}}" method="post"  enctype="multipart/form-data">
            @csrf
            <input type="hidden" class="form-control" id="section1" name="section1" value="section1">
            <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
            <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">


            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Page Title</label>
                        <input type="text" class="form-control input-default" name="title" value="{{isset($page2->title)? $page2->title :'' }}"
                            required="">

                    </div>
                </div>
                <!--- For Edit Purpose-->
                <div class="col-md-12 mb-4">
                  @if($page2 != null && $page2->image != null)
                    <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page2->image ?? '')) }}" width="60" alt="Old Image">
                    @endif

                    <div class="form-group mb-3">

                        <label  class="form-label">Background Image</label>
                        <input class="form-control" name="image" type="hidden" value="{{$page2->image}}">
                       <input type="file" name="image" accept="image/*">
                


                    </div>
                </div>
                <div  class="col-md-12">
                    <hr>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="form-group">
                        <label>Heading: 01</label>
                        <input type="text" name="heading1" class="form-control input-default" value="{{isset($page2->heading1)? $page2->heading1 :'' }}" required="">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Text: 01</label>
                        <textarea class="form-control" name="text1" id="summernote" placeholder="Write description here".. required>{{isset($page2->text1)? $page2->text1 :'' }}</textarea>
                    </div>
                </div>
            </div>
            <div>
                <hr>
            </div>
             <!--  -->
             <div class="row mb-5 mt-5">

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Heading: 02</label>
                        <input type="text" name="heading2" class="form-control input-default" value="{{isset($page2->heading2)? $page2->heading2 :'' }}" required="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Text: 02</label>
                        <textarea id="summernote2" name="text2" required>{{isset($page2->text2)? $page2->text2 :'' }}</textarea>
                    </div>
                </div>
            </div>
             <!--  -->
             <div>
                <hr>
            </div>
             <!--  -->
             <div class="row mt-5">

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Heading: 03</label>
                        <input type="text" name="heading3" class="form-control input-default" value="{{isset($page2->heading3)? $page2->heading3 :'' }}" required="">
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                        <label>Text: 03</label>
                        <textarea id="summernote3" name="text3" required>{{isset($page2->text3)? $page2->text3 :'' }}</textarea>
                    </div>
                </div>
            </div>
             <!--  -->
       <div class="form-group row">
           <div class="col-sm-10">
               <input type="submit"  value="Update" class="btn btn-outline-secondary">
           </div>
       </div>
           </form>
       </div>
                   </div>
    </div>
    </div>
    <!--------------------________________________section_2__________________------------>
    <div id="section2" class="collapse multi-collapse mt-2" style="">
        <div class="card mt-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Section: 02</h6>
            </div>
            <div class="card-body">

                <div class="basic-form">
               <form action="{{url('page2/store')}}" method="POST" id="staffForm2" enctype="multipart/form-data">
                @csrf
                <input type="hidden" class="form-contro2" id="section2" name="section2" value="section2">
                <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
                <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">

                <div class="row mb-5">
                    <!--- For Edit Purpose-->
                    <div class="col-md-12 mb-4">
                  
                    @if($page2 != null && $page2->image1 != null)
                    <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page2->image1 ?? '')) }}" width="60" alt="Old Image">
                    @endif
                    <div class="form-group mb-3">
                        <label  class="form-label">Background Image</label>
                        <input class="form-control" name="image1" type="hidden" value="{{$page2->image1}}">
                       <input type="file" name="image1" accept="image/*">



                    </div>
                </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Text: 01</label>
                            <input type="text" name="text4" class="form-control input-default" value="{{isset($page2->text4)? $page2->text4 :'' }}" required="">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Heading</label>
                            <input type="text" name="heading4" class="form-control input-default" value="{{isset($page2->heading4)? $page2->heading4 :'' }}" required="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Text: 02</label>
                            <input type="text" name="text5" class="form-control input-default" value="{{isset($page2->text5)? $page2->text5 :'' }}" required="">
                        </div>
                    </div>

                </div>
                 <!--  -->
           <div class="form-group row">
               <div class="col-sm-10">
                   <input type="submit"  value="Update" class="btn btn-outline-secondary">
               </div>
           </div>
               </form>
           </div>
                       </div>
        </div>
        </div>
<!------------------___________SECTION_THREE_START____________------------------>

        <div id="section3" class="collapse  multi-collapse mt-2" style="">
            <div class="card mt-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Section: 03</h6>
                </div>
                <div class="card-body">

                    <div class="basic-form">
                   <form action="{{url('page2/store')}}" method="POST" id="staffForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" class="form-contro2" id="section3" name="section3" value="section3">
                    <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
                    <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">

                    <div class="row mb-5">
                        <div class="col-md-12 mt-4">
                            <div class="form-group mb-3">
                                <label>Title</label>
                                <input type="text" name="title2" class="form-control input-default" value="{{isset($page2->title2)? $page2->title2 :'' }}" required="">
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Text</label>
                                <textarea id="summernote4" name="text6" required>{{isset($page2->text6)? $page2->text6 :'' }}</textarea>
                            </div>
                        </div>
                    </div>
                     <!--  -->
               <div class="form-group row">
                   <div class="col-sm-10">
                       <input type="submit"  value="Update" class="btn btn-outline-secondary">
                   </div>
               </div>
                   </form>
               </div>
                           </div>
            </div>
            </div>
            <!--  -->
            <div id="section4" class="collapse  multi-collapse mt-2" style="">
                <div class="card mt-3">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Section: 03</h6>
                    </div>
                    <div class="card-body">

                        <div class="basic-form">
                       <form action="{{url('page2/store')}}" method="POST" id="staffForm" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-contro2" id="section4" name="section4" value="section4">
                        <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
                        <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">

                        <div class="row mb-5">
                            <div class="col-md-12">
                                @if($page2 != null && $page2->logo != null)
                    <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page2->logo ?? '')) }}" width="60" alt="Old Image">
                    @endif
                                <div class="form-group mb-3">
                                    <label for="formFile" class="form-label">Logo</label>
                                    <input class="form-control" name="logo" type="hidden" value="{{$page2->logo}}">
                                    <input type="file" name="logo" accept="image/*">
                
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Text: 02</label>
                                    <textarea id="summernote5" name="description_a" required>{{isset($page2->description_a)? $page2->description_a :'' }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Text: 03</label>
                                    <textarea id="summernote6" name="description_b" required>{{isset($page2->description_b)? $page2->description_b :'' }}</textarea>
                                </div>
                            </div>
                        </div>
                         <!--  -->
                   <div class="form-group row">
                       <div class="col-sm-10">
                           <input type="submit"  value="Update" class="btn btn-outline-secondary">
                       </div>
                   </div>
                       </form>
                   </div>
                               </div>
                </div>
                </div>
    <!-- Content Row -->





</div>
<!-- /.container-fluid -->
@endsection
