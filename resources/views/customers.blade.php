@extends('layouts.index')
@section('content')

            <div class="col-lg-11">
                <!-- Customer List Table-->
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
                                <h4>{{ \Session::get('danger') }}</h4>
                            </div>
                            @endif

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h3>Customers</h3>
                            <a href="/newcustomer" class="btn btn-warning">Create New Customer</a>

                            <table id="datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>Customer ID</td>
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
                                        <td>{{ $customer->customer_id }}</td>
                                        <td>{{ $customer->firstname }}</td>
                                        <td>{{ $customer->lastname }}</td>
                                        <td class="overflow-hidden">{{ $customer->email }}</td>
                                        <td>{{ $customer->number }}</td>
                                        <td>{{ $customer->address }}</td>
                                        <td>
                                            <form action="{{ action('CustomerController@destroy', $customer->customer_id) }}" method="POST">
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

                            <span>{{ $customers->links() }}</span>
                        </div>
                    </div>
                </div>

                <!-- Edit and Delete Modal-->
                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Customer</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update Customer</button>
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

                $('#customerFirstName').val(data[1]);
                $('#customerLastName').val(data[2]);
                $('#customerEmail').val(data[3]);
                $('#customerNumber').val(data[4]);
                $('#customerAddress').val(data[5]);

                $('#editForm').attr('action', '/newcustomer/' + data[0]);
                $('#editModal').modal('show');
            });
        });

        $.ajaxSetup( {
            headers: {
                'CSRFToken': TOKEN
            }
        });
    </script>
@endsection