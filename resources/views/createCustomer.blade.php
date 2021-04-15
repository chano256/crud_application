<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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

            <div class="col-lg-11">
                <div class="container" style="color:black">
                    <div class="row">
                        <div class="col-md-12">
                            @if (count($errors) > 0)

                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            @if (\Session::has('success'))
                                <div class="alert alert-success">
                                    <p>{{ \Session::get('success') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <h3 class="text-center pt-3">Create Customer</h3>
                            <a href="/customers" class="btn btn-warning mb-3">View Customers</a>

                            <form method="POST" action="{{ action('CustomerController@store') }}">
                                {{ csrf_field() }}

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                    <label>First Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="lastname" placeholder="Last Name">                            <label>Last Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="you@example.com">
                                    <label>Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="number" placeholder="Phone">
                                    <label>Phone Number</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="address" placeholder="Address">
                                    <label>Address</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>