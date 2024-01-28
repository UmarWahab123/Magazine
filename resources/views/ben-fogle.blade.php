<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    @php $setting = get_settings() @endphp
    <title>{{ $setting->site_name }}</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/' . $setting->favicon) }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('assets/css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .banner-ben {
        background-image: url('{{ asset('pages_images/' . @$page->background_img) }}');
    }
    .banner-ben-2 {
    background-image:url('{{ asset('pages_images/' . @$page->bg_img) }}');
    }
  </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark2">
            <div class="container-fluid">
          <div class="d-flex">
             @if($page)
            <a class="navbar-brand" href="{{ route('explore', ['id' => $page->edition_id ?? $page->editionId]) }}">  <i class="navbar-toggler-icon"></i></a>
            @endif
            <a class="navbar-brand nav-side" href="#">{{ @$currentPageIndex }}/{{ @$totalIndexCount }}{{@$page->title}}</span></a>
          </div>
            </div>
          </nav>
    </header>
    <section class="banner-ben">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-10">
                <div class="banner-content mt-11-2">
                    <h1 class="ben-h1">{{@$page->heading}}</h1>
                    <p class="p ">{!! @$page->editordata !!}</p>
                </div>
            </div>
            <div class="col-md-2 col-2 mt-5rem" >
                <div class="banner-content mt-11 " style="text-align: center;float: right;">
                      @if($page)
                      <a href="{{ url('/intro', ['edition_id' => @$page->editionId,'page_id'=>$page->edition_temp_title,'type'=>'next']) }}"> <h2 class="h2-icon" ><span class="back-icon p-2"><img src="{{ asset('assets/img/right-arrow.png') }}" width="25" alt=""></span> </h2></a>
                   <a href="{{ url('/intro', ['edition_id' => @$page->editionId,'page_id'=>$page->edition_temp_title,'type'=>'previouse']) }}"> <h2 class="h2-icon mt-4" ><span class="back-icon p-2"><img src="{{ asset('assets/img/left-arrow.png') }}" width="25" alt=""></span> </h2></a>
                    @endif
                   <!--<a href="{{ url('/intro', ['edition_id' => @$page->editionId,'page_id'=>$page->id,'type'=>'next']) }}"> <h2 class="h2-icon" ><span class="back-icon p-2"><img src="{{ asset('assets/img/right-arrow.png') }}" width="25" alt=""></span> </h2></a>-->
                   <!--<a href="{{ url('/intro', ['edition_id' => @$page->editionId,'page_id'=>$page->id,'type'=>'previouse']) }}"> <h2 class="h2-icon mt-4" ><span class="back-icon p-2"><img src="{{ asset('assets/img/left-arrow.png') }}" width="25" alt=""></span> </h2></a>-->
                </div>
            </div>
           </div>
      </div>
    </section>
    <!--  -->
    <div class="container mt-5">
       <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <p class="bold-ben">
            {!! @$page->editordataf !!}
          </p>
        </div>
       </div>
    </div>
    <!--  -->
    <section class="mt-5">
        <img src="{{ asset('pages_images/' . @$page->image) }}" alt="" width="100%">
    </section>
    <!--  -->
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5 mt-5">
            {!! @$page->editordatas !!}
    </div>
    <div class="col-md-5 mt-5">
       <img src="{{ asset('pages_images/' . @$page->icon_img) }}" alt="" width="15%">
        <h3 class="ben-blue mt-3">{!! @$page->editordatar !!}</h3>
    <img src="{{ asset('pages_images/' . @$page->front_image) }}" alt="" width="100%">
    </div>
    </div>
</div>
<!--  -->
<section class="banner-ben-2">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2"></div>
          <div class="col-md-6">
              <div class="banner-content mt-5">
                <img src="{{ asset('pages_images/' . @$page->icon2_img) }}" alt="" width="15%">
                  <h1 class="ben-2-h1 mt-3">{{@$page->heading2}}</h1>
              </div>
          </div>
         </div>
    </div>
  </section>
  <!--  -->
<div class="container">
   <div class="row">
    <div class="col-md-1"></div>
        <div class="col-md-10">
            <p class="mt-3"> {!! @$page->editordatat !!}</p>
        </div>

   </div>
    </div>
    <!--  -->
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5 mt-5">
                <p class="mt-3"> {!! @$page->editordata4 !!}</p>


        </div>
        <div class="col-md-5 mt-5">
           <img src="{{ asset('pages_images/' . @$page->icon3_img) }}" alt="" width="15%">
            <h3 class="ben-blue mt-3"> {!! @$page->editordata5 !!}</h3>
        <img src="{{ asset('pages_images/' . @$page->images2) }}" alt="" width="100%">
        <img class="mt-3" src="{{ asset('pages_images/' . @$page->images3) }}" alt="" width="100%">
        <img class="mt-4" src="{{ asset('pages_images/' . @$page->icon4_img) }}" alt="" width="15%">
        <h3 class="ben-blue mt-3">{!! @$page->editordata6 !!}</h3>
        </div>
        </div>
    </div>
<section class="mt-5" style="background-color: rgba(110, 182, 220, 0.2);">
    <div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            {!! @$page->editordata7 !!}
           <img class="mt-3" src="{{ asset('pages_images/' . @$page->image4) }}" width="5%" alt="">
           {!! @$page->editordata8 !!}

        <img src="{{ asset('pages_images/' . @$page->image5) }}" class="mt-3 mb-5" width="100%" alt="">
        </div>
    </div>
    </div>
</section>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
