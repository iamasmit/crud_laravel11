<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .header-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #ffffff;
            background: linear-gradient(to right, #17a2b8, #20c997);
            border-radius: 0.25rem;
            padding: 0.5rem 1rem;
        }
        .section-title {
            font-size: 1.5rem;
            font-weight: 500;
            color: #343a40;
            background-color: #ffc107;
            border-radius: 0.25rem;
            padding: 0.5rem 1rem;
            margin-bottom: 1rem;
        }
    </style>
    <title>Laravel_CRUD</title>
</head>
<body>
    {{-- If the data added successfully than it show sstatus --}}
        <div class="row">
            <div class="col-8">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>    
                @endif
            </div>

        </div>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <div class="header-title">
                    <h2>Eloquent CRUD</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h4>@yield('title')</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
