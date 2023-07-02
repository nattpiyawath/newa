@extends('template')

@section('content')

        <!-- jQuery and jQuery UI (REQUIRED) -->
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <!-- elFinder CSS (REQUIRED) -->
        <link rel="stylesheet" type="text/css" href="{{URL('/')}}/public/packages/barryvdh/elfinder/css/elfinder.min.css">
        <link rel="stylesheet" type="text/css" href="{{URL('/')}}/public/packages/barryvdh/elfinder/css/theme.css">

        <!-- elFinder JS (REQUIRED) -->
        <script src="{{URL('/')}}/public/packages/barryvdh/elfinder/js/elfinder.min.js"></script>

        <!-- elFinder initialization (REQUIRED) -->
        <script type="text/javascript" charset="utf-8">        
            $().ready(function() {
                $('#elfinder').elfinder({
                    // set your elFinder options here
                    @if($locale)
                        lang: '{{ $locale }}', // locale
                    @endif
                    customData: { 
                        _token: '{{ csrf_token() }}'
                    },
                    url : '{{ route("elfinder.connector") }}',  // connector URL
                    soundPath: '{{ asset($dir.'/sounds') }}'
                });
            });
        </script>

        <!-- Element where elFinder will be created (REQUIRED) -->
        <br>
        <div id="elfinder"></div>

@endsection