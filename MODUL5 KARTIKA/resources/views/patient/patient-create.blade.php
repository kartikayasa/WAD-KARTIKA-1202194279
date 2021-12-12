@include('/header');
    <div class="container align-items-center ">
        <div class="row ">
            <h1 class="text-center fw-bold" style="margin-top: 50px; font-size: 30px;">Register</h1>
            <form>
                @csrf
                <div class="col-md-12">
                    <label class="form-label">Vaccine ID</label>
                    <input type="number" class="form-control"  readonly>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Patient Name</label>
                    <input type="text" class="form-control" value="" >
                </div>
                <div class="col-md-12">
                    <label class="form-label">NIK</label>
                    <input type="number" class="form-control" value="" >
                </div>
                <div class="col-md-12">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control" value="" >
                </div>
                <div class="col-md-12">
                    <label class="form-label">KTP</label>
                    <input type="file" class="form-control">
                </div>
                <div class="col-md-12">
                    <label class="form-label">NO HP</label>
                    <input type="text" class="form-control" value="" >
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary" style="margin-top: 20px;">REGISTER</button>
                </div>
            </form>
        </div>
    </div>
@include('/footer');