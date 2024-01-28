<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     @php $setting = get_settings() @endphp
    <title>{{ $setting->site_name }}</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/' . $setting->favicon) }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <style>
        .banner {
            background-image: url('{{ asset('pages_images/' . @$page->form_file) }}');

            background-size: cover;
            background-position: center;
            /*height: 100vh;*/
            /* Set the section's height to 100% of the viewport height */
            text-align: left;
            /* Align text to the left */
            color: #fff;
            /* Text color for readability */
            display: flex;

            justify-content: flex-start;
            align-items: flex-start;
        }
        .animated-text {
  animation: slide-up 0.5s ease forwards;
}

@keyframes slide-up {
  0% {
    transform: translatex(-100%);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}
.h2-icon {
   
     white-space: inherit !important;
}
    </style>
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark2">
            <div class="container-fluid">
                <div class="d-flex">
                    @if($page)
                    <a class="navbar-brand" href="{{ route('explore', ['id' => $page->edition_id ?? page->editionId]) }}"> <i class="navbar-toggler-icon"></i></a>
                    @endif
                    <a class="navbar-brand nav-side" href="{{ url('/') }}">{{ @$currentPageIndex }}/{{ @$totalIndexCount }} {{ @$page->page_title }}</span></a>
                </div>
            </div>
        </nav>
    </header>
    <section class="banner">
        <div class="container-fluid">
             <div class="row mt-5  pb-5">
            <div class="col-md-10 col mt-5">
                <div class="banner-content mt-20">
                       <div class="animated-text animate__animated animate__slideInUp">
                        <h1 class="index-h1 col-10">{{ @$page->heading }}</h1>
                        <p class="p">{{ @$page->title }}</p>
                        {{-- <p class="mb-0 p2">A magazine from Hoare Lea.</p> --}}
                        <p class="p2">{!! @$page->editor_data !!}</p>
                         </div>
                         @if($page);
                         <a href="{{ url('/intro', ['edition_id' => @$page->edition_id,'page_id'=>$page->edition_temp_title,'type'=>'next']) }}"><button class="btn btn-light">{{ @$page->button_text }}</button></a>
                         @endif
                    </div>
                   
                </div>
        
                <div class="col-md-2 col-2" style="margin-top: 5rem;">
                    <div class="banner-content mt-11 " style="text-align: center;float: right;">
                       @if($page)
                        <a href="{{ url('/intro', ['edition_id' => @$page->edition_id,'page_id'=>$page->edition_temp_title,'type'=>'next']) }}"><h2 class="h2-icon"><span class="back-icon p-3"><img src="{{ asset('assets/img/right-arrow.png') }}" width="22" alt="">
                         </span> </h2>
                        </a>
                   <a href="{{ url('/intro', ['edition_id' => @$page->edition_id,'page_id'=>$page->edition_temp_title,'type'=>'previouse']) }}"> <h2 class="h2-icon mt-5" ><span class="back-icon p-3"><img src="{{asset('assets/img/left-arrow.png')}}" width="22" alt=""> </span> </h2></a>
                      @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
