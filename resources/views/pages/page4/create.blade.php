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

                    <!-- Content Row -->
                    <div class="row  chall-icon-bg2">
                        <div class="col pl-0 pr-0">
                            <button class="btn btn-outline-info" type="button" aria-expanded="true"
                                data-toggle="collapse" data-target="#section1">Section: 01</button>
                        </div>
                        <div class="col pl-0 pr-0">
                            <button class="btn btn-outline-info" type="button" aria-expanded="false"
                                data-toggle="collapse" data-target="#section2">Section: 02</button>
                        </div>
                        <div class="col pl-0 pr-0">
                            <button class="btn btn-outline-info" type="button" aria-expanded="false"
                                data-toggle="collapse" data-target="#section3">Section: 03</button>
                        </div>
                        <div class="col pl-0 pr-0">
                            <button class="btn btn-outline-info" type="button" aria-expanded="false"
                                data-toggle="collapse" data-target="#section4">Section: 04</button>
                        </div>
                        <div class="col pl-0 pr-0">
                            <button class="btn btn-outline-info" type="button" aria-expanded="false"
                                data-toggle="collapse" data-target="#section5">Section: 05</button>
                        </div>
                        <div class="col pl-0 pr-0">
                            <button class="btn btn-outline-info" type="button" aria-expanded="false"
                                data-toggle="collapse" data-target="#section6">Section: 06</button>
                        </div>
                        <div class="col pl-0 pr-0">
                            <button class="btn btn-outline-info" type="button" aria-expanded="false"
                                data-toggle="collapse" data-target="#section7">Section: 07</button>
                        </div>
                        <div class="col pl-0 pr-0">
                            <button class="btn btn-outline-info" type="button" aria-expanded="false"
                                data-toggle="collapse" data-target="#section8">Section: 08</button>
                        </div>
                    </div>
                    <div id="section1" class="collapse  show  multi-collapse mt-2">
                    <div class="card mt-3">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Section: 01</h6>
                        </div>
                        <div class="card-body">

                            <div class="basic-form">
                            @include('partials.alerts')
                           <form action="{{ url('page4/store') }}" method="POST" id="staffForm" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" class="form-control" id="section1" name="section1" value="section1">
                            <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
                            <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">

                            <div class="row mb-5">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Page Title</label>
                                        <input type="text" name="title" class="form-control input-default" value="{{isset($page4->title)? $page4->title :'' }}"
                                            required="">
                                    </div>
                                </div>
                                <!--- For Edit Purpose-->
                                <div class="col-md-12 mb-4">
                                    <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page4->bg_img ?? '')) }}" width="60" alt="Old Image">
                                    <div class="form-group mb-3">
                                        <label for="formFile" class="form-label">Background Image</label>
                                        <input class="form-control" name="bg_img" type="hidden" value="{{$page4->bg_img}}">
                                        <input class="form-control" name="bg_img" type="file" id="formFile">
                                    </div>
                                </div>
                                <div  class="col-md-12">
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Heading</label>
                                        <textarea id="summernote" name="editordata" required>{{isset($page4->editordata)? $page4->editordata :'' }}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Text</label>
                                        <textarea id="summernote2" name="editordata1" required>{{isset($page4->editordata1)? $page4->editordata1 :'' }}</textarea>
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
                    <div id="section2" class="collapse  multi-collapse mt-2">
                        <div class="card mt-3">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Section: 02</h6>
                            </div>
                            <div class="card-body">

                                <div class="basic-form">
                             
                               <form action="{{url('page4/store')}}" method="POST" id="staffForm" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="section2" name="section2" value="section2">
                                <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
                                <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">

                                <div class="row mb-5">
                                    <!--- For Edit Purpose-->
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="formFile"  class="form-label">Title</label>
                                            <input class="form-control" name="title1" type="text" value="{{isset($page4->title1)? $page4->title1 :'' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="formFile" class="form-label">Text</label>
                                            <textarea id="summernote3" name="editordata2" required>{{isset($page4->editordata2)? $page4->editordata2 :'' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page4->image ?? '')) }}" width="60" alt="Old Image">
                                        <div class="form-group mb-3">
                                            <label for="formFile" class="form-label">Image</label>
                                            <input class="form-control" name="image" type="hidden" value="{{$page4->image}}">
                                            <input class="form-control" name="image" type="file" id="formFile">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="formFile" class="form-label">Text</label>
                                            <textarea id="summernote4" name="editordata3" required>{{isset($page4->editordata3)? $page4->editordata3 :'' }}</textarea>
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
                        <div id="section3" class="collapse   multi-collapse mt-2">
                            <div class="card mt-3">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Section: 03</h6>
                                </div>
                                <div class="card-body">

                                    <div class="basic-form">
                                  
                                   <form action="{{url('page4/store')}}" method="POST" id="staffForm" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" class="form-control" id="section3" name="section3" value="section3">
                                    <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
                                    <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">

                                    <div class="row mb-5">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Text: 01</label>
                                                <textarea id="summernote5" name="editordata4" required>{{isset($page4->editordata4)? $page4->editordata4 :'' }}</textarea>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Text: 02</label>
                                                <textarea id="summernote6" name="editordata5" required>{{isset($page4->editordata5)? $page4->editordata5 :'' }}</textarea>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Text: 03</label>
                                                <textarea id="summernote7" name="editordata6" required>{{isset($page4->editordata6)? $page4->editordata6 :'' }}</textarea>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="col-md-12">
                                            <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page4->image2 ?? '')) }}" width="60" alt="Old Image">
                                            <div class="form-group mb-3">
                                                <label for="formFile" class="form-label">Image</label>
                                                <input class="form-control" name="image2" type="hidden" value="{{$page4->image2}">
                                                <input class="form-control" name="image2" type="file" id="formFile">
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
                            <div id="section4" class="collapse   multi-collapse mt-2">
                                <div class="card mt-3">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Section: 04</h6>
                                    </div>
                                    <div class="card-body">

                                        <div class="basic-form">
                              
                                       <form action="{{url('page4/store')}}" method="POST" id="staffForm" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" class="form-control" id="section4" name="section4" value="section4">
                                        <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
                                        <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">

                                        <div class="row mb-5">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Heading: 01</label>
                                                    <input class="form-control" name="heading" type="text" value="{{isset($page4->heading)? $page4->heading :'' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Heading: 02</label>
                                                    <input class="form-control" name="heading1" type="text" value="{{isset($page4->heading1)? $page4->heading1 :'' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Text: 01</label>
                                                    <textarea id="summernote8" name="editordata7" required>{{isset($page4->editordata7)? $page4->editordata7 :'' }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Text: 02</label>
                                                    <textarea id="summernote9" name="editordata8" required>{{isset($page4->editordata8)? $page4->editordata8 :'' }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page4->icon_img ?? '')) }}" width="60" alt="Old Image">
                                                <div class="form-group mb-3">
                                                    <label for="formFile" class="form-label">Icon Image</label>
                                                    <input class="form-control" name="icon_img" type="hidden" value="{{$page4->icon_img}">
                                                    <input class="form-control" name="icon_img" type="file" id="formFile">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Text: 03</label>
                                                    <textarea id="summernote0" name="editordata9" required>{{isset($page4->editordata9)? $page4->editordata9 :'' }}</textarea>
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
                                <div id="section5" class="collapse   multi-collapse mt-2">
                                    <div class="card mt-3">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Section: 05</h6>
                                        </div>
                                        <div class="card-body">

                                            <div class="basic-form">
                                           
                                           <form action="{{url('page4/store')}}" method="POST" id="staffForm" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" class="form-control" id="section5" name="section5" value="section5">
                                            <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
                                            <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">

                                            <div class="row mb-5">
                                                <div class="col-md-12">
                                                    <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page4->image3 ?? '')) }}" width="60" alt="Old Image">
                                                    <div class="form-group mb-3">
                                                        <label for="formFile" class="form-label">Image: 01</label>
                                                        <input class="form-control" name="image3" type="hidden" value="{{$page4->image3}">
                                                        <input class="form-control" name="image3" type="file" id="formFile">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Text: 01</label>
                                                        <textarea id="summernote11" name="editordata01" required>{{isset($page4->editordata01)? $page4->editordata01 :'' }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page4->image4 ?? '')) }}" width="60" alt="Old Image">
                                                    <div class="form-group mb-3">
                                                        <label for="formFile" class="form-label">Image: 02</label>
                                                        <input class="form-control" name="image4" type="hidden" value="{{$page4->image4}">
                                                        <input class="form-control" name="image4" type="file" id="formFile">
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Text: 02</label>
                                                        <textarea id="summernote12" name="editordata02" required>{{isset($page4->editordata02)? $page4->editordata02 :'' }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Text: 03</label>
                                                        <textarea id="summernote13" name="editordata03" required>{{isset($page4->editordata03)? $page4->editordata03 :'' }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page4->icon2_img ?? '')) }}" width="60" alt="Old Image">
                                                    <div class="form-group mb-3">
                                                        <label for="formFile" class="form-label">Icon Image</label>
                                                        <input class="form-control" name="icon2_img" type="hidden" value="{{$page4->icon2_img}">
                                                        <input class="form-control" name="icon2_img" type="file" id="formFile">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Text: 04</label>
                                                        <textarea id="summernote14" name="editordata04" required>{{isset($page4->editordata04)? $page4->editordata04 :'' }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page4->image5 ?? '')) }}" width="60" alt="Old Image">
                                                    <div class="form-group mb-3">
                                                        <label for="formFile" class="form-label">Image</label>
                                                        <input class="form-control" name="image5" type="hidden" value="{{$page4->image5}">
                                                        <input class="form-control" name="image5" type="file" id="formFile">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Text: 05</label>
                                                        <textarea id="summernote15" name="editordata05" required>{{isset($page4->editordata05)? $page4->editordata05 :'' }}</textarea>
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
                                    <div id="section6" class="collapse  multi-collapse mt-2">
                                        <div class="card mt-3">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-primary">Section: 06</h6>
                                            </div>
                                            <div class="card-body">

                                                <div class="basic-form">
                                             
                                               <form action="{{url('page4/store')}}" method="POST" id="staffForm" enctype="multipart/form-data">
                                                @csrf
                                              <input type="hidden" class="form-control" id="section6" name="section6" value="section6">
                                              <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
                                              <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">

                                                <div class="row mb-5">
                                                    <div class="col-md-12">
                                                    <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page4->image6 ?? '')) }}" width="60" alt="Old Image">
                                                        <div class="form-group mb-3">
                                                            <label for="formFile" class="form-label">Image</label>
                                                            <input class="form-control" name="image6" type="hidden" value="{{$page4->image6}">
                                                            <input class="form-control" name="image6" type="file" id="formFile">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Text: 01</label>
                                                            <textarea id="summernote16" name="editordata06" required>{{isset($page4->editordata06)? $page4->editordata06 :'' }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Text: 02</label>
                                                            <textarea id="summernote17" name="editordata07" required>{{isset($page4->editordata07)? $page4->editordata07 :'' }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                    <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page4->icon3_img ?? '')) }}" width="60" alt="Old Image">
                                                        <div class="form-group mb-3">
                                                            <label for="formFile" class="form-label">Icon Image</label>
                                                            <input class="form-control" name="icon3_img" type="hidden" value="{{$page4->icon3_img}">
                                                            <input class="form-control" name="icon3_img" type="file" id="formFile">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Text: 03</label>
                                                            <textarea id="summernote18" name="editordata08" required>{{isset($page4->editordata08)? $page4->editordata08 :'' }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 ">
                                                    <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page4->image7 ?? '')) }}" width="60" alt="Old Image">
                                                        <div class="form-group mb-3">
                                                            <label for="formFile" class="form-label">Image</label>
                                                            <input class="form-control" name="image7" type="hidden" value="{{$page4->image7}">
                                                            <input class="form-control" name="image7" type="file" id="formFile">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Text: 04</label>
                                                            <textarea id="summernote19" name="editordata09" required>{{isset($page4->editordata09)? $page4->editordata09 :'' }}</textarea>
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
                                        <div id="section7" class="collapse  multi-collapse mt-2">
                                            <div class="card mt-3">
                                                <div class="card-header py-3">
                                                    <h6 class="m-0 font-weight-bold text-primary">Section: 07</h6>
                                                </div>
                                                <div class="card-body">

                                                    <div class="basic-form">
                                                    
                                                   <form action="{{url('page4/store')}}" method="POST" id="staffForm" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" class="form-control" id="section7" name="section7" value="section7">
                                                    <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
                                                    <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">

                                                    <div class="row mb-5">


                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Text: 01</label>
                                                                <textarea id="summernote20" name="editordata001" required>{{isset($page4->editordata001)? $page4->editordata001 :'' }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                    <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page4->image8 ?? '')) }}" width="60" alt="Old Image">
                                                            <div class="form-group mb-3">
                                                                <label for="formFile" class="form-label">Image</label>
                                                                <input class="form-control" name="image8" type="hidden" value="{{$page4->image8}">
                                                                <input class="form-control" name="image8" type="file" id="formFile">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page4->card_img ?? '')) }}" width="60" alt="Old Image">
                                                            <div class="form-group mb-3">
                                                                <label for="formFile" class="form-label">Card Image</label>
                                                                <input class="form-control" name="card_img" type="hidden" value="{{$page4->card_img}">
                                                                <input class="form-control" name="card_img" type="file" id="formFile">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Text: 02</label>
                                                                <textarea id="summernote21" name="editordata002" required>{{isset($page4->editordata002)? $page4->editordata002 :'' }}</textarea>
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
                                            <div id="section8" class="collapse  multi-collapse mt-2">
                                                <div class="card mt-3">
                                                    <div class="card-header py-3">
                                                        <h6 class="m-0 font-weight-bold text-primary">Section: 08</h6>
                                                    </div>
                                                    <div class="card-body">

                                                        <div class="basic-form">
                                                          
                                                       <form action="{{url('page4/store')}}" method="POST" id="staffForm" enctype="multipart/form-data">
                                                        @csrf
                                                    <input type="hidden" class="form-control" id="section8" name="section8" value="section8">
                                                    <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
                                                    <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">

                                                        <div class="row mb-5">
                                                            <div class="col-md-12">
                                                            <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page4->icon4_img ?? '')) }}" width="60" alt="Old Image">
                                                                <div class="form-group mb-3">
                                                                    <label for="formFile" class="form-label">Icon Image</label>
                                                                   <input class="form-control" name="icon4_img" type="hidden" value="{{$page4->icon4_img}">
                                                                    <input class="form-control" name="icon4_img" type="file" id="formFile">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Text: 01</label>
                                                                    <textarea id="summernote22" name="editordata003" required>{{isset($page4->editordata003)? $page4->editordata003 :'' }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Text: 02</label>
                                                                    <textarea id="summernote23" name="editordata004" required>{{isset($page4->editordata004)? $page4->editordata004 :'' }}</textarea>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Text: 03</label>
                                                                    <textarea id="summernote24" name="editordata005" required>{{isset($page4->editordata005)? $page4->editordata005 :'' }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Text: 04</label>
                                                                    <textarea id="summernote25" name="editordata006" required>{{isset($page4->editordata006)? $page4->editordata006 :'' }}</textarea>
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
