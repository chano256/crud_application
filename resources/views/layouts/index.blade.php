<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1 bg-light">
                <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-dark" aria-current="page" href="/">
                        <img src="{{ asset('img/logo.jpg') }}" width="50px" height="50px">
                        Home
                    </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-dark" href="/products">Products</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-dark" href="/customers">Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/invoices">Invoices</a>
                    </li>
                </ul>
            </div>
            
            @yield('content')
</body>
</html>