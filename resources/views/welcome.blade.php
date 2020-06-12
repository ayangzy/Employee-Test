<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Employee Test') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .sidebar-container {
            background: #fff;
            border-radius: 10px 10px 10px 10px;
            color: #fff;
            min-height: 400px;
        }

        .sidebar-navigation {
            padding: 0;
            margin: 0;
            list-style-type: none;
            position: relative;
        }

        .sidebar-navigation li {
            background-color: transparent;
            position: relative;
            display: inline-block;
            width: 100%;
            line-height: 20px;
        }

        .sidebar-navigation li a {
            padding: 10px 15px 10px 30px;
            display: block;

        }

        .sidebar-navigation li .fa {
            margin-right: 10px;
        }

        .sidebar-navigation li a:active,
        .sidebar-navigation li a:hover,
        .sidebar-navigation li a:focus {
            text-decoration: none;
            outline: none;
        }

        .sidebar-navigation li::before {
            background-color: #2574A9;
            position: absolute;
            content: '';
            height: 100%;
            left: 0;
            top: 0;
            -webkit-transition: width 0.2s ease-in;
            transition: width 0.2s ease-in;
            width: 3px;
            z-index: -1;
        }

        .sidebar-navigation li:hover {
            width: 100%;
            background: #ccc;
        }


        .sidebar-navigation .header::before {
            background-color: transparent;
        }


        .btn-circle {
            width: 30px;
            height: 30px;
            padding: 6px 9px 4px;
            border: 1px solid #ccc;
            border-radius: 15px;
            text-align: center;
            font-size: 12px;
            line-height: 1.42857;
        }


        .check-box {
            float: left;
            margin-top: 0.8em;
            margin-right: 0.5em;
            cursor: pointer;
        }





        .rounded-circle {
            float: left;
            margin-top: 0.4em;
        }

        .name {
            text-align: center;
        }

        .glyphicon {
            margin: 1em;
        }

    </style>
</head>


<body>
    <div id="app">
        <router-view></router-view>

    </div>



    <script src="js/app.js"></script>



</body>

</html>
