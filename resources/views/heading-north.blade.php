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
    .banner-heading-north {
    background-image: url('{{ asset("pages_images/" .@$page->image_bg)}}');
    background-size: cover;
    background-position: center;
    text-align: left; /* Align text to the left */
    color: rgb(110, 182, 220); /* Text color for readability */
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
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
            <a class="navbar-brand nav-side" href="#">{{ @$currentPageIndex }}/{{ @$totalIndexCount }} {{@$page->page_title}}</span></a>
          </div>
            </div>
          </nav>
    </header>
    <section class="banner-heading-north">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 col-10">
            <div class="banner-content mt-11 ms-5">
              <img src="{{ asset('pages_images/' . @$page->icon) }}" alt="" width="10%">
                <h1 class="ben-h1 ">{{ @$page->image_heading }}<br>
                    {{ @$page->image_heading2 }}</h1>
            </div>
        </div>
            <div class="col-md-2 col-2 mt-5rem">
              <div class="banner-content mt-11 " style="text-align: center;float: right;">
                   @if($page)
                   <a href="{{ url('/intro', ['edition_id' => @$page->edition_id,'page_id'=>$page->edition_temp_title,'type'=>'next']) }}"> <h2 class="h2-icon" ><span class="back-icon p-2"><img src="{{asset('assets/img/right-arrow.png')}}" width="25" alt=""></span> </h2></a>
                <a href="{{ url('/intro', ['edition_id' => @$page->edition_id,'page_id'=>$page->edition_temp_title,'type'=>'previouse']) }}"> <h2 class="h2-icon mt-4" ><span class="back-icon p-2"><img src="{{asset('assets/img/left-arrow.png')}}" width="25" alt=""></span> </h2></a>
              @endif
             </div>

            </div>
           </div>
      </div>
    </section>
    <!--  -->
    <div class="container">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 mt-5">
          <p class="bg-dark white ps-3 pe-3 pt-1 pb-1" style="width: 14%;">{{ @$page->title1 }}</p>
          <p class="mt-5 bold">{!! @$page->text1 !!}</p>
        </div>
      </div>
    </div>
     <!--  -->
     <section class="mt-5">
        <iframe width="100%" height="315" src="{{ @$page->video }}" frameborder="0" allowfullscreen></iframe>
     </section>
     <!--  -->
     <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-md-1"></div>
      <div class="col-md-10">
        <p class="bold">{{ @$page->text2 }}</p>
        <div class="row">
          <div class="col-md-6">
            <img src="{{ asset('pages_images/' . @$page->image1) }}" height="150" alt="" width="100%">
          </div>
          <div class="col-md-6">
            <img src="{{ asset('pages_images/' . @$page->image2) }}" height="150" alt="" width="100%">
          </div>
        </div>
        <p class="bold mt-5">
            {!! @$page->text3 !!}
        </p >
      </div>
      </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
