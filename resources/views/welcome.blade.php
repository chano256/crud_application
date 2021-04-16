<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
  <title>{{ config('app.name') }}</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-1">
            <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link text-dark" aria-current="page" href="/">
                    <img src="{{ asset('img/logo.jpg') }}" width="50px" height="50px">
                    Home
                </a>
                </li>
            </ul>
        </div>

        <div class="col-lg-11 col-md-10 bg-light mx-auto my-auto p-5 ">
          <div class="container">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <ul class="list-group list-group-horizontal-md p-3">
                  <li class="list-group-item p-5"><a class="nav-link text-dark" href="/products">View Products</a></li>
                  <li class="list-group-item p-5"><a class="nav-link text-dark" href="/newproduct">Create Products</a></li>
                </ul>
                <ul class="list-group list-group-horizontal-md p-3">
                  <li class="list-group-item p-5"><a class="nav-link text-dark" href="/customers">View Customers</a></li>
                  <li class="list-group-item p-5"><a class="nav-link text-dark" href="/newcustomer">Create Customers</a></li>
                </ul>
                <ul class="list-group list-group-horizontal-md p-3">
                  <li class="list-group-item p-5"><a class="nav-link text-dark" href="/invoices">View Invoices</a></li>
                  <li class="list-group-item p-5"><a class="nav-link text-dark" href="/newinvoice">Create Invoice</a></li>
                </ul>
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
