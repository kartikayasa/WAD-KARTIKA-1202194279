@include('/header');
    
    <div class="container align-items-center ">
        <div class="row ">
            <div class="col-md-12 text-center">
                <p style="margin-top: 50px;">There is no data...</p>
                <a class="btn btn-primary" style="width: 150px;" href="/vaccine/vaccine-create">Add Vaccine</a>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <table class="table table-primary shadow-sm p-3 mb-5 bg-body rounded table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($data as $vaccine)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $vaccine->name }}</td>
                    <td>{{ $vaccine->price }}</td>
                    <td>
                        <a href="{{ url('vaccine/vaccine-update')}}" class="btn btn-warning">Edit</a>
                        <a href="/vaccine/{{ $vaccine->id }}" class=" btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@include('/footer');