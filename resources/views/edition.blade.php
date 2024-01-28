<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php $setting = get_settings() @endphp
    <title>{{ $setting->site_name }}</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/' . $setting->favicon) }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="row  justify-content-center mt-4">
            <div class="col-md-1 col-2">

                <a href="{{ url('/explore', ['id' => @$page->edition_id]) }}"><button class="btn btn-light">Pages</button></a>
            </div>
            <div class="col-md-1 col-2">
                <a class="ps-2" href="#"> <button class="btn btn-light active-2">Edition</button></a>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 ps-5 pe-5">
        <div class="row">
            {{-- loop --}}
            @foreach ($editionsLists as $editionsList)
                <div class="col-md-4 mt-3">
                    <div class="card bod-none card-shadow">
                    <a href="{{ route('explore', ['id' => $editionsList->id]) }}">
                        @if(@$editionsList->edition_image)
                        <img src="{{ asset('uploads/' .@$editionsList->edition_image) }}" alt="" width="100%">
                        @else
                        <p><b>Edition image not available</b></p>
                        @endif
                        <div class="card-body">
                            <h5 class="bold black">{{ @$editionsList->edition_title }}</h5>
                            <p class="mb-1 black"> <i class="fa fa-calendar-o"></i> {{ @$editionsList->pages->count() }}</p>
                        </div>
                    </a>
                    </div>
                </div>
            @endforeach
            <!--  -->

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // When a collapsible button is clicked
            $('[data-toggle="collapse"]').on('click', function() {
                var target = $(this).data('target');

                // Hide all other collapsible content except the current one
                $('.collapse').not(target).collapse('hide');
            });
        });
    </script>
</body>

</html>
