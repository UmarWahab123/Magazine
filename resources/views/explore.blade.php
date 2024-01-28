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
    <div class="">
        <div class="row  justify-content-center mt-4">
            <div class="col-md-1 col-2 ">
                <a href=""><button class="btn btn-light active-2">Pages</button></a>
            </div>
            <div class="col-md-1 col-2">
              <a class="ps-2" href="{{ url('/edition') }}">  <button class="btn btn-light">Edition</button></a>
            </div>
        </div>
        <div>
        <div class="container-fluid mt-5">
            <div class="row">
                @foreach ($edition_templates as $key=>$templates)
                <div class="col-md-4 ps-0 pe-0">
                    <a href="{{ route('pagest_detail', ['temp_id' => $templates->id]) }}">
                        <div class="image-container">
                            @if($templates->banner_image)
                            <img src="{{ asset('pages_images/' . (@$templates->banner_image)) }}" alt="" width="100%">
                            @else
                            <p><b></b>Banner image not available</b></p>
                            @endif
                            <div class="image-text">{{ @$templates->title }}</div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        // When a collapsible button is clicked
        $('[data-toggle="collapse"]').on('click', function () {
            var target = $(this).data('target');

            // Hide all other collapsible content except the current one
            $('.collapse').not(target).collapse('hide');
        });
    });
</script>
</body>
</html>
