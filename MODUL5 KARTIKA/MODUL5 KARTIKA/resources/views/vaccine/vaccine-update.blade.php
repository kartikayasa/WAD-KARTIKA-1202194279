@include('/header');
    <div class="container align-items-center ">
        <div class="row ">
            <h1 class="text-center fw-bold" style="margin-top: 50px; font-size: 30px;">Edit Vaccine</h1>
            @foreach ($data as $vacine)
            <form  enctype="multipart/form-data"  method="POST">
                @csrf
                <div class="col-md-12">
                    <label class="form-label">Vaccine name</label>
                    <input class="form-control" type="text" name="name" value="">
                </div>
                <div class="col-md-12">
                    <label for="basic-url" class="form-label">Price</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Rp</span>
                            <input type="number" class="form-control" name="price" id="basic-url" aria-describedby="basic-addon3" value="">
                        </div>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" rows="3" name="description"></textarea>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Image</label>
                    <input name="image" value="" type="file" class="form-control">
                </div>
                <br>
                <div class="col-md-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
@include('/footer');