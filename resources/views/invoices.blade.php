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

            <div class="col-lg-11">
                <!-- Product List Table-->
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
                            @if (\Session::has('danger'))
                                <div class="alert alert-danger">
                                    <p>{{ \Session::get('danger') }}</p>
                                </div>
                            @endif
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h3>Products</h3>
                            <a href="/newinvoice" class="btn btn-warning">Create New Invoice</a>

                            <table id="datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>Invoice ID</td>
                                        <td>Date</td>
                                        <td>Product</td>
                                        <td>Customer</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($invoices as $invoice)
                                    <tr>
                                        <td>{{ $invoice->invoice_id }}</td>
                                        <td>{{ $invoice->date }}</td>
                                        <td>{{ $invoice->product }}</td>
                                        <td>{{ $invoice->customer }}</td>
                                        <td>
                                            <form action="{{ action('InvoiceController@destroy', $invoice->invoice_id) }}" method="POST">
                                                <a href="#" class="btn btn-success edit">Edit</a>

                                                <!-- Delete Customer -->
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <span>{{ $invoices->links() }}</span>
                        </div>
                    </div>
                </div>

                <!-- Edit and Delete Modal-->
                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <form method="POST" action="/newinvoice" id="editForm">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}

                                <div class="modal-body">
                                    <div class="form group mb-3">
                                    <label>Date:</label>
                                    <input type="text" class="form-control" id="date" name="date" placeholder="Date">
                                    </div>
                                    <div class="form group mb-3">
                                        <label>Product:</label>
                                        <input type="text" class="form-control" id="product" name="product" placeholder="Product">
                                    </div>
                                    <div class="form group mb-3">
                                        <label>Customer:</label>
                                        <input type="text" class="form-control" id="customer" name="customer" placeholder="Customer">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update Invoice</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            var table = $('#datatable').DataTable({paging: false, ordering:  true, searching: true,});

            table.on('click', '.edit', function() {
                $tr = $(this).closest('tr');

                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }

                var data = table.row($tr).data();
                console.log(data);

                $('#date').val(data[1]);
                $('#product').val(data[2]);
                $('#customer').val(data[3]);

                $('#editForm').attr('action', '/newinvoice/' + data[0]);
                $('#editModal').modal('show');
            });
        });

        $.ajaxSetup( {
            headers: {
                'CSRFToken': TOKEN
            }
        });
    </script>
</body>
</html>