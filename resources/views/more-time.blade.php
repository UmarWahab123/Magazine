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
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark2">
            <div class="container-fluid">
          <div class="d-flex">
             @if($page)
            <a class="navbar-brand" href="{{ route('explore', ['id' => $page->edition_id ?? $page->editionId]) }}">  <i class="navbar-toggler-icon"></i></a>
             @endif
            <a class="navbar-brand nav-side" href="#">{{ @$currentPageIndex }}/{{ @$totalIndexCount }} {{@$page->title}}</span></a>
          </div>
            </div>
          </nav>
          <style>
            .banner-more-time {
              background-image: url('{{ asset('pages_images/' . @$page->bg_img) }}');;

                }
          </style>
    </header>
    <section class="banner-more-time">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-10">
                <div class="banner-content mt-11 ">
                    <h1 class="ben-h1 ">{!! @$page->editordata !!}</h1>
                    <p class="p">{!! @$page->editordata1 !!}</p>
                </div>
            </div>
            <div class="col-md-2 col-2" style="margin-top: 5rem;">
              <div class="banner-content mt-11 " style="text-align: center;float: right;">
                  @if($page)
                      <a href="{{ url('/intro', ['edition_id' => @$page->editionId,'page_id'=>$page->edition_temp_title,'type'=>'next']) }}"> <h2 class="h2-icon" ><span class="back-icon p-2"><img src="{{asset('assets/img/right-arrow.png')}}" width="25" alt=""> </span> </h2></a>
                   <a href="{{ url('/intro', ['edition_id' => @$page->editionId,'page_id'=>$page->edition_temp_title,'type'=>'previouse']) }}"> <h2 class="h2-icon mt-4" ><span class="back-icon p-2"><img src="{{asset('assets/img/left-arrow.png')}}" width="25" alt=""> </span> </h2></a>
                  @endif
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
          <p class="bg-dark white ps-3 pe-3 pt-1 pb-1" style="width: 14%;">{{@$page->title1}}</p>
          <p class="black bold">{!! @$page->editordata2 !!}</p>
          <img src="{{ asset('pages_images/' . @$page->image) }}" alt="" class="mt-3" width="100%">
          <p class="mt-3"><small>{!! @$page->editordata3 !!}</small></p>
            <!--  -->
            <div class="row">
              <div class="col-md-4 mt-4">
                {!! @$page->editordata4 !!}
              </div>
              <div class="col-md-4 mt-4">
                {!! @$page->editordata5 !!}
              </div>
              <div class="col-md-4 mt-4">
                {!! @$page->editordata6 !!}
              </div>

        </div>
      </div>

    </div>
    </div>
  <img class="mt-5" src="{{ asset('pages_images/' . @$page->image2) }}" alt="" width="100%">
  <section class="mt-5" style="background-color: rgba(110, 182, 220, 0.2);">
    <div class="container pt-5 pb-5">
   <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <h3 class="con-intro-h1">{{@$page->heading}}</h3>
      <h3 class="more-time-h">{{@$page->heading1}}</h3>
      <div class="row">
        <div class="col-md-4 mt-4">
            {!! @$page->editordata7 !!}

          </div>
          <div class="col-md-4 mt-4">
            {!! @$page->editordata8 !!}

          </div>
          <div class="col-md-4 mt-4">
            <img src="{{ asset('pages_images/' . @$page->icon_img) }}" alt="" width="20%">
            {!! @$page->editordata9 !!}

          </div>
      </div>
    </div>
   </div>
    </div>
</section>
<img src="{{ asset('pages_images/' . @$page->image3) }}" width="100%" alt="">
<section  style="background-color: rgba(110, 182, 220, 0.2);">
  <div class="container pt-5 pb-5">
    <p><small>{!! @$page->editordata01 !!}</small></p>
 <div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10 ">
    <div class="text-center">
      <img src="{{ asset('pages_images/' . @$page->image4) }}" width="50%" alt="">
    </div>
    <div class="row">
      <div class="col-md-4 mt-4">
        {!! @$page->editordata02 !!}

      </div>
      <!--  -->
      <div class="col-md-4 mt-4">
        {!! @$page->editordata03 !!}

     </div>
      <!--  -->
      <div class="col-md-4 mt-4">
        <img src="{{ asset('pages_images/' . @$page->icon2_img) }}" width="20%" alt="">
        <h2 class="more-time-h"> {!! @$page->editordata04 !!}</h2>
        <img src="{{ asset('pages_images/' . @$page->image5) }}" width="50%" alt="">
        {!! @$page->editordata05 !!}

      </div>
    </div>

  </div>
 </div>
  </div>
</section>
<!--  -->
<div class="container mb-5">
 <div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
   <div class="row">
    <div class="col-md-4 mt-4">
      <img src="{{ asset('pages_images/' . @$page->image6) }}" width="100%" alt="">
      {!! @$page->editordata06 !!}

    </div>
    <div class="col-md-4 mt-4">
        {!! @$page->editordata07 !!}


    </div>
    <div class="col-md-4 mt-4">
      <img src="{{ asset('pages_images/' . @$page->icon3_img) }}" width="20%" alt="">
      <h2 class="more-time-h"> {!! @$page->editordata08 !!}</h2>
      <img src="{{ asset('pages_images/' . @$page->image7) }}" width="50%" alt="">
      {!! @$page->editordata09 !!}

    </div>
   </div>
  </div>
 </div>
</div>

<section style="background-color: rgba(110, 182, 220, 0.2);">
  <div class="container">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-4 mt-5 mb-5">
            {!! @$page->editordata001 !!}

          </div>
          <!--  -->
          <div class="col-md-4 mt-5">
            <img src="{{ asset('pages_images/' . @$page->image8) }}" width="100%" alt="">
          </div>
          <!--  -->
          <div class="col-md-4 mt-5">
            <div class="card card-2">
              <div class=" p-2">
                <img src="{{ asset('pages_images/' . @$page->card_img) }}" width="100%" alt="">
              </div>
              <div class="card-body">
            {!! @$page->editordata002 !!}

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container mt-5 mb-5">
  <img src="{{ asset('pages_images/' . @$page->	icon4_img) }}" alt="" width="7%">
 {!! @$page->editordata003 !!}
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="row">
        <div class="col-md-4 mt-4">
            {!! @$page->editordata004 !!}
        </div>
        <!--  -->
        <div class="col-md-4 mt-4">
            {!! @$page->editordata005 !!}

        </div>
        <!--  -->
        <div class="col-md-4 mt-4">
            {!! @$page->editordata006 !!}

        </div>
      </div>
    </div>
  </div>
</div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
