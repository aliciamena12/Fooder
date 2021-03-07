<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet"> -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Raleway:ital,wght@0,400;1,200&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="css/index.css">

    </head>
    <body>
        @include('modules.nav')
        <main>
            <img src="https://media.istockphoto.com/photos/friends-clinking-glasses-at-thanksgiving-day-with-vegetarian-meals-picture-id1079149838?k=6&m=1079149838&s=612x612&w=0&h=bH3skaOPiQ-c4-nZ9ZDNvujm20ZAenXlcx5JSuaMzUs=" alt="Front Photo">
            <h1 class="pagename">Fooder</h1>
            <h2 class="subtitle">See what you will eat.</h2>
        </main>
        @include('modules.footer')
    </body>
</html>