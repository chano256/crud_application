<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future Link Technology Limited</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Customer</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="POST" action="/newcustomer" id="editForm">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="modal-body">
                        <div class="form group mb-3">
                        <label>First Name:</label>
                        <input type="text" class="form-control" id="customerFirstName" name="firstname" placeholder="First name">
                        </div>
                        <div class="form group mb-3">
                            <label>Last Name:</label>
                            <input type="text" class="form-control" id="customerLastName" name="lastname" placeholder="Last name">
                        </div>
                        <div class="form group mb-3">
                            <label>Email:</label>
                            <input type="text" class="form-control" id="customerEmail" name="email" placeholder="Email">
                        </div>
                        <div class="form group mb-3">
                            <label>Number:</label>
                            <input type="number" class="form-control" id="customerNumber" name="number" placeholder="Number">
                        </div>
                        <div class="form group mb-3">
                            <label>Address:</label>
                            <input type="text" class="form-control" id="customerAddress" name="address" placeholder="Email">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Customer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
            <div class="col-md-12">
                <h3>Customers</h3>

                <table id="datatable">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Address</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer['customer_id'] }}</td>
                            <td>{{ $customer['firstname'] }}</td>
                            <td>{{ $customer['lastname'] }}</td>
                            <td>{{ $customer['email'] }}</td>
                            <td>{{ $customer['phone'] }}</td>
                            <td>{{ $customer['address'] }}</td>
                            <td>
                                <a href="#" class="btn btn-success edit">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <span>{{ $customers->links() }}</span>
            </div>
        </div>
    </div>

    <script 
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
        crossorigin="anonymous">
    </script>
    <script 
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
        crossorigin="anonymous">
    </script>
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" 
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" 
        crossorigin="anonymous">
    </script>
    
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

                $('#customerFirstName').val(data[1]);
                $('#customerLastName').val(data[2]);
                $('#customerEmail').val(data[3]);
                $('#customerNumber').val(data[4]);
                $('#customerAddress').val(data[5]);

                $('#editForm').attr('action', '/newcustomer/' + data[0] + '/');
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