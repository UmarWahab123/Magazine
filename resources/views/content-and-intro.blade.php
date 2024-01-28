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
    .banner-content-intro-2 {
    background-image: url('{{ asset('pages_images/' . @$page->image1) }}');
    }
  </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark2">
            <div class="container-fluid">
             @if($page)
            <a class="navbar-brand" href="{{ route('explore', ['id' => $page->edition_id ?? $page->editionId]) }}">  <i class="navbar-toggler-icon"></i></a>
            @endif
            <a class="navbar-brand nav-side" href="#">{{ @$currentPageIndex }}/{{ @$totalIndexCount }} {{@$page->title}}</span></a>
          </div>
            </div>
          </nav>
    </header>
    <section class="banner-content-intro">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-11"></div>
            <div class="col-md-1" style="margin-top: 5rem; float: right;">
                <div class="banner-content mt-11" style="text-align: right; position: fixed; float: right;">
                     @if($page)
                       <a href="{{ url('/intro', ['edition_id' => @$page->editionId,'page_id'=>$page->edition_temp_title,'type'=>'next']) }}"> <h2 class="h2-icon" ><span class="back-icon p-2"><img src="{{asset('assets/img/right-arrow.png')}}" width="25" alt=""> </span> </h2></a>
                   <a href="{{ url('/intro', ['edition_id' => @$page->editionId,'page_id'=>$page->edition_temp_title,'type'=>'previouse']) }}"> <h2 class="h2-icon mt-4" ><span class="back-icon p-2"><img src="{{asset('assets/img/left-arrow.png')}}" width="25" alt=""> </span> </h2></a>
                  @endif
                </div>

            </div>
           </div>
           <!--  -->
           <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-4 mt-20 mb-5">
                        <h1 class="con-intro-h1">{{@$page->heading1}}</h1>
                        <p>{!! @$page->text1 !!}</p>
                    </div>
                    <!--  -->
                    <div class="col-md-4 mt-20 mb-5">
                        <h1 class="con-intro-h1">{{@$page->heading2}}</h1>
                        <p>{!! @$page->text2 !!}</p>
                    </div>
                    <!--  -->
                    <div class="col-md-4 mt-20 mb-5">
                        <h1 class="con-intro-h1">{{@$page->heading3}}</h1>
                        <p class="bold black mb-0 p-underline">{!! @$page->text3 !!}</p>
                    </div>
                    <!--  -->
                   </div>
            </div>
        </div>
      </div>

    </section>
    <!--  -->
    <section class="banner-content-intro-2">
        <div class="container-fluid">
             <!--  -->
             <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10 mt-20 text-center">
                <p class="bold white">{{@$page->text4}}</p>
                <h1 class="con-intro-h1 white">“{{@$page->heading4}}” </h1>
                    <p class="bold white">{{@$page->text5}}</p>
              </div>
          </div>
        </div>

      </section>
    <!--  -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <p class="bg-dark white ps-3 pe-3 pt-1 pb-1" style="width: 12%;">{{@$page->title2}}</p>
            <p>{!! @$page->text6 !!}</p>
        </div>
    </div>
</div>
<footer class="footer pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-5">
                <img src="{{ asset('pages_images/' . @$page->logo) }}" alt="" width="50%">
            </div>

        <!--  -->
        <div class="col-md-4 mt-5 text-white">
            <p class="white text-white"><small>{!! @$page->description_a !!}</small></p>
        </div>
        <!--  -->
        <div class="col-md-1"></div>
        <div class="col-md-3 mt-5 text-white">
            <p class="bold white text-white">{!! @$page->description_b !!}</p>
        </div>
    </div>
    </div>
</footer>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
