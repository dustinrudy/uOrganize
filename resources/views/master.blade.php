<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Expletus+Sans|Roboto" rel="stylesheet">

<!-- Styles -->
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Expletus Sans', cursive;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .header {
        text-align: center;
        background-color: #00e7ff96;
        padding: 16px;
        height: 150px;

    }

    .content {
        text-align: center;
        background-color: #FFF;
        padding: 16px;
    }

    .title {
        font-size: 44px;
        margin-top: 50px;
    }

    .subtitle {
        font-size: 25px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
        text-align: center;
    }

    p {
        font-family: 'Roboto', sans-serif;
        color: #000;
        text-align: justify;
        margin: 0px 100px;
        line-height: 35px;
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
<div class="header">
    <div class="title m-b-md">
    uOrganize
    </div>
    <div class="links">
        <a href="/">Home</a>
        <a href="/about">About Us</a>
        <a href="/contact">Contact</a>
        <a href="/events">My Events </a>
    </div>

    @yield('content')


</body>
</html>
