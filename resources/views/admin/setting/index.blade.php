@extends('layouts.master')

@section('content')
<h1 class="display-1 mt-5 text-center fw-semibold fst-italic">THIS IS SETTING</h1>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/styles.css"/>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <div id="joan">
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>

        <script>
            jQuery.ajax({
              url: "https://jsonplaceholder.typicode.com/albums/1/photos",
              method: "GET",
              success: function(response) {
                let text = '';
                $.each(response, function(key, value) {
                  text += '<p>AlbumId:' + value.albumId + '</p>';
                  text += '<p>Id:' + value.id + '</p>';
                  text += '<p>url:' + value.url + '</p>';
                  text += '<p>Title:' + value.title + '</p>';
                  text += '<img src="' + value.thumbnailUrl + '">';
                  text += '<p>######################################################</p>';
                });
                $('#joan').append(text);
              },
              error: function(error) {
                console.log(error);
              }
            });
          </script>
        {{-- <script>jQuery.ajax({
            url:"https://reqres.in/api/users?page=2",
            method:"GET",
           
                    success:function(response){
                        let text = '';
                        $.each(response.data, function(key, value){
                        var text = '<p>Name:' + response.data[key].first_name + '</p>';
                        text += '<p>Email:' + response.data[key].email + '</p>';
                        text += '<img src=' + response.data[key].avatar + '>';
                        text += '<p>#######</p>';
                        $('#joan').append(text);
                        })
                    },
                    
            error:function(error){
            console.log(error);
            }
            });</script>     --}}
</body>
</html>
@endsection

