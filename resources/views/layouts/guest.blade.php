<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Cultivation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Listen.Lk" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <meta name="description"
        content="WUSL NOTES has founded at 2016 by 2013/2014 Applied Batch [142***] of Wayamba Univercity Of Sri Lanks. Which is enabled to share Notes, Passpapers, Kuppi videos to entire univercity students in Sri Lanka. " />
    <meta property="og:title" content="WUSL Notes" />
    <meta property="og:url" content="{{Request::url()}}" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="@yield('ogimage',asset('images/wall.png') )" />
    <meta property="og:image:secure_url" content="@yield('ogimage', asset('images/wall.png') )" />
    <meta property="og:image:width" content="@yield('ogimagewidth',500)" />
    <meta property="og:image:height" content="@yield('ogimageheight',200)" />
    @include('libraries.styles')
</head>

<body>

    <body>
        {{ $slot }}
    </body>
     <!-- JAVASCRIPT -->
     @include('libraries.scripts')
</body>

</html>

