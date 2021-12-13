@include('/header');
<div class="container text-center">
    <p>There is no data</p>
    <a class="btn btn-primary" href="/patient/patient-list">Register Patient</a>
</div>
<br><br>
<div class="container">
        <table class="table table-primary shadow-sm p-3 mb-5 bg-body rounded table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Vaccine</th>
                    <th>Name</th>
                    <th>NIK</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="/patient/patient-update" class="btn btn-warning">Edit</a>
                        <a href="#" class=" btn btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@include('/footer');