<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('title')
</head>
<body>

        <!--<li><a href="/">Home</a></li>-->
        <!--after adding named route-->
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal">Laravel Blog</h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-dark" href="{{ route('home') }}">Home</a>
                <a class="p-2 text-dark" href="{{ route('contact') }}">Contact</a>
                <a class="p-2 text-dark" href="{{ route('course.index') }}">Courses</a>
                <a class="p-2 text-dark" href="{{ route('course.create') }}">Add Courses</a>
            </nav>
        </div>

    <div class="container">
    @if(session()->has('status'))
        <p>
            {{ session()->get('status') }}
        </p>
    @endif
    @yield('content')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
