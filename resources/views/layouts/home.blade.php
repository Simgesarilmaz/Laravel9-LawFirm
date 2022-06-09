<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">

    <title> @yield('title') </title>


    <meta name="description" content="@yield("description")">
    <meta name="keywords" content="@yield("keywords")">
    <meta name="author" content="Simge Sarilmaz">
    <link rel="icon" type="image/x-icon" href="@yield("icon")">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- CSS Libraries-->

    <link type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link type="text/css" rel="stylesheet" href="lib/animate/animate.min.css">

    <link type="text/css" rel="stylesheet" href="lib/owlcarousel/assets/owl.carousel.min.css">



    <!-- Template Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets')}}/css/style.css">


</head>
<body>
@include('home._header')

@section('content')

@show
@include('home._footer')


</body>
</html>

