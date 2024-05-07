<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do List Application</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://kit.fontawesome.com/bb7e607934.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 bg-success-subtle text-center py-2">
                <h2>PHP - To Do List App</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-8 bg-success-subtle mb-3">
                <h4>@yield('title')</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                @yield('content')    
            </div>
        </div>
    </div>


</body>
</html>