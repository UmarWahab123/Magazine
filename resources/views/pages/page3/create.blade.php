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
        <div class="col-md-2">
            <button class="btn btn-outline-info w-100" type="button" aria-expanded="true"
                data-toggle="collapse" data-target="#section1">Section: 01</button>
        </div>
        <div class="col-md-2">
            <button class="btn btn-outline-info w-100" type="button" aria-expanded="false"
                data-toggle="collapse" data-target="#section2">Section: 02</button>
        </div>
        <div class="col-md-2">
            <button class="btn btn-outline-info w-100" type="button" aria-expanded="false"
                data-toggle="collapse" data-target="#section3">Section: 03</button>
        </div>
        <div class="col-md-2">
            <button class="btn btn-outline-info w-100" type="button" aria-expanded="false"
                data-toggle="collapse" data-target="#section4">Section: 04</button>
        </div>
        <div class="col-md-2">
            <button class="btn btn-outline-info w-100" type="button" aria-expanded="false"
                data-toggle="collapse" data-target="#section5">Section: 05</button>
        </div>
        <div class="col-md-2">
            <button class="btn btn-outline-info w-100" type="button" aria-expanded="false"
                data-toggle="collapse" data-target="#section6">Section: 06</button>
        </div>
    </div>
    <div id="section1" class="collapse show  multi-collapse mt-2" style="">
    <div class="card mt-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Section: 01</h6>
        </div>
        <div class="card-body">

            <div class="basic-form">
                @include('partials.alerts')
           <form action="{{ url('page3/store') }}" method="POST" id="staffForm" enctype="multipart/form-data">
            @csrf
            <input type="hidden" class="form-control" id="section1" name="section1" value="section1">
            <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
            <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">

            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Page Title</label>
                        <input type="text" name="title" class="form-control input-default" value="{{isset($page3->title)? $page3->title :'' }}"
                            required="">
                    </div>
                </div>
                <!--- For Edit Purpose-->
                <div class="col-md-12 mb-4">
                    @if($page3 != null && $page3->background_img != null)
                    <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page3->background_img ?? '')) }}" width="60" alt="Old Image">
                    @endif
                    <div class="form-group mb-3">
                        <label for="formFile" class="form-label">Background Image</label>
                        <input class="form-control" name="background_img" type="hidden" value="{{$page3->background_img}}">
                        <input class="form-control" type="file" name="background_img" id="formFile" >
                    </div>
                </div>
                <div  class="col-md-12">
                    <hr>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="form-group">
                        <label>Heading</label>
                        <input type="text" class="form-control input-default" name="heading" value="{{isset($page3->heading)? $page3->heading :'' }}" required="">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Text</label>
            
                        <textarea id="new" name="editordata" required>{!! isset($page3->editordata) ? $page3->editordata : '' !!}</textarea>
                    </div>
                    <div class="error-message" style="display: none; color: red;">This field is required.</div>
                </div>
             @error('editordata')
                <div class="text-danger">{{ $message }}</div>
             @enderror

            </div>
            <div>
                <hr>
            </div>
             <!--  -->
       <div class="form-group row">
           <div class="col-sm-10">
               <input type="submit" value="Update" class="btn btn-outline-secondary">
           </div>
       </div>
           </form>
       </div>
                   </div>
    </div>
    </div>
    <!--  -->
    <div id="section2" class="collapse multi-collapse mt-2" style="">
        <div class="card mt-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Section: 02</h6>
            </div>
            <div class="card-body">

                <div class="basic-form">
  

               <form action="{{ url('page3/store') }}" method="POST" id="staffForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" class="form-control" id="section2" name="section2" value="section2">
                <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
                <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">

                <div class="row mb-5">
                    <!--- For Edit Purpose-->
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label for="formFile" class="form-label">Text</label>
                            <textarea id="summernote2" name="editordataf" required>{{isset($page3->editordataf)? $page3->editordataf :'' }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        @if($page3 != null && $page3->image != null)
                    <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page3->image ?? '')) }}" width="60" alt="Old Image">
                    @endif
                        <div class="form-group mb-3">
                            <label for="formFile" class="form-label">Background Image</label>
                            <input class="form-control" name="image" type="hidden" value="{{$page3->image}}">
                            <input class="form-control" name="image" type="file" id="formFile">
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
        <div id="section3" class="collapse  multi-collapse mt-2" style="">
            <div class="card mt-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Section: 03</h6>
                </div>
                <div class="card-body">

                    <div class="basic-form">
                   <form action="{{ url('page3/store') }}" method="POST" id="staffForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" class="form-control" id="section3" name="section3" value="section3">
                    <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
                <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">

                    <div class="row mb-5">
                        <div class="col-md-12 mb-4">
                          @if($page3 != null && $page3->icon_img != null)   
                      <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page3->icon_img ?? '')) }}" width="60" alt="Old Image">
                      @endif
                            <div class="form-group mb-3">
                                <label for="formFile" class="form-label">Icon Image</label>
                                <input class="form-control" name="icon_img" type="hidden" value="{{$page3->icon_img}}">
                                <input class="form-control" name="icon_img" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Text: 01</label>
                                <textarea id="summernote3" name="editordatas" required>{{isset($page3->editordatas)? $page3->editordatas :'' }}</textarea>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Text: 02</label>
                                <textarea id="summernote5" name="editordatar" required>{{isset($page3->editordatar)? $page3->editordatar :'' }}</textarea>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-md-12 mb-4">
                            @if($page3 != null && $page3->front_image != null)   
                      <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page3->front_image ?? '')) }}" width="60" alt="Old Image">
                      @endif
                            <div class="form-group mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" name="front_image" type="hidden" value="{{$page3->front_image}}">
                                <input class="form-control" name="front_image" type="file" id="formFile">
                            </div>
                        </div>
                        <!--  -->
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
                        <h6 class="m-0 font-weight-bold text-primary">Section: 04</h6>
                    </div>
                    <div class="card-body">

                        <div class="basic-form">
                       <form action="{{ url('page3/store') }}" method="POST" id="staffForm" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" id="section4" name="section4" value="section4">
                        <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
                <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">

                        <div class="row mb-5">
                            <div class="col-md-12">
                       @if($page3 != null && $page3->bg_img != null)          
                      <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page3->bg_img ?? '')) }}" width="60" alt="Old Image">
                      @endif

                                <div class="form-group mb-3">
                                    <label for="formFile" class="form-label">Background Image</label>
                                    <input class="form-control" name="bg_img" type="hidden" value="{{$page3->bg_img}}">
                                    <input class="form-control" name="bg_img" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="col-md-12">
                                @if($page3 != null && $page3->icon2_img != null) 
                      <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page3->icon2_img ?? '')) }}" width="60" alt="Old Image">
                           @endif
                                <div class="form-group mb-3">
                                    <label for="formFile" class="form-label">Icon Image</label>
                                    <input class="form-control" name="icon2_img" type="hidden" value="{{$page3->icon2_img}}">
                                    <input class="form-control" name="icon2_img" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input class="form-control" name="heading2" type="text" value="{{isset($page3->heading2)? $page3->heading2 :'' }}">
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
                <div id="section5" class="collapse  multi-collapse mt-2" style="">
                    <div class="card mt-3">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Section: 05</h6>
                        </div>
                        <div class="card-body">

                            <div class="basic-form">
                           <form action="{{ url('page3/store') }}" method="POST" id="staffForm" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" class="form-control" id="section5" name="section5" value="section5">
                            <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
                <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">

                            <div class="row mb-5">


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Text: 01</label>
                                        <textarea id="summernote6" name="editordatat" required>{{isset($page3->editordatat)? $page3->editordatat :'' }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Text: 02</label>
                                        <textarea id="summernote7" name="editordata4" required>{{isset($page3->editordata4)? $page3->editordata4 :'' }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    @if($page3 != null && $page3->icon3_img != null) 
                              <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page3->icon3_img ?? '')) }}" width="60" alt="Old Image">
                              @endif
                                     <div class="form-group mb-3">
                                        <label for="formFile" class="form-label">Icon Image</label>
                                        <input class="form-control" name="icon3_img" type="hidden" value="{{$page3->icon3_img}}">
                                        <input class="form-control" name="icon3_img" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Text: 03</label>
                                        <textarea id="summernote9" name="editordata5" required>{{isset($page3->editordata5)? $page3->editordata5 :'' }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    @if($page3 != null && $page3->images2 != null) 
                              <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page3->images2 ?? '')) }}" width="60" alt="Old Image">
                                   @endif
                                    <div class="form-group mb-3">
                                        <label for="formFile" class="form-label">Image: 01</label>
                                         <input class="form-control" name="images2" type="hidden" value="{{$page3->images2}}">
                                        <input class="form-control" name="images2" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                     @if($page3 != null && $page3->images3 != null) 
                                    <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page3->images3 ?? '')) }}" width="60" alt="Old Image">
                                     @endif
                                    <div class="form-group mb-3">
                                        <label for="formFile" class="form-label">Image: 02</label>
                                         <input class="form-control" name="images3" type="hidden" value="{{$page3->images3}}">
                                        <input class="form-control" name="images3" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                     @if($page3 != null && $page3->icon4_img != null)
                                    <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page3->icon4_img ?? '')) }}" width="60" alt="Old Image">
                                    @endif
                                    <div class="form-group mb-3">
                                        <label for="formFile" class="form-label">Icon Image</label>
                                         <input class="form-control" name="icon4_img" type="hidden" value="{{$page3->icon4_img}}">
                                        <input class="form-control" name="icon4_img" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Text: 03</label>
                                        <textarea id="summernote8" name="editordata6" required>{{isset($page3->editordata6)? $page3->editordata6 :'' }}</textarea>
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
                    <div id="section6" class="collapse  multi-collapse mt-2" style="">
                        <div class="card mt-3">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Section: 06</h6>
                            </div>
                            <div class="card-body">

                                <div class="basic-form">
                               <form action="{{ url('page3/store') }}" method="POST" id="staffForm" enctype="multipart/form-data">
                                @csrf
                            <input type="hidden" class="form-control" id="section6" name="section6" value="section6">
                            <input type="hidden" class="form-control" id="editionId" name="editionId" value="{{ $id }}">
                <input type="hidden" class="form-control" id="edition_temp_title" name="edition_temp_title" value="{{ $title }}">

                                <div class="row mb-5">


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Text: 01</label>
                                            <textarea id="summernote0" name="editordata7" required>{{isset($page3->editordata7)? $page3->editordata7 :'' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        @if($page3 != null && $page3->image4 != null)
                                        <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page3->image4 ?? '')) }}" width="60" alt="Old Image">
                                        @endif
                                        <div class="form-group mb-3">
                                            <label for="formFile" class="form-label">Icon Image</label>
                                            <input class="form-control" name="image4" type="hidden" value="{{$page3->image4}}">
                                            <input class="form-control" name="image4" type="file" id="formFile">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Text: 02</label>
                                            <textarea id="summernote11" name="editordata8" required>{{isset($page3->editordata8)? $page3->editordata8 :'' }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                         @if($page3 != null && $page3->image5 != null)
                                        <img id="oldImage" class="mb-2 ml-2" src="{{ asset('pages_images/' . ($page3->image5 ?? '')) }}" width="60" alt="Old Image">
                                        @endif
                                        <div class="form-group mb-3">
                                            <label for="formFile" class="form-label">Image</label>
                                            <input class="form-control" name="image5" type="hidden" value="{{$page3->image5}}">
                                            <input class="form-control" name="image5" type="file" id="formFile">
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
@section('js')
<script>
    $(document).ready(function() {
        $("#staffForm").submit(function(event) {
            var textarea = $("#new");
            if (!textarea[0].checkValidity()) {
                event.preventDefault(); // Prevent form submission
                $(".error-message").show(); // Show error message
            }
        });
    });
</script>
@endsection


@endsection
