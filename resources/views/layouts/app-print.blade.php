<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <style>
        body{
            font-size:12px;
            font-family:Arial, Helvetica, sans-serif;
        }
        #page-wrap{
            width:600px;
            margin: 0 auto;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
