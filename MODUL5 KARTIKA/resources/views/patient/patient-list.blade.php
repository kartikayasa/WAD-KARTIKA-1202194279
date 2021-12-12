@include('header');

 <div class="container" style="margin-top: 30px;">
            <p class="fw-bold text-center" style="font-size: 30px;">List Vaccine</p>
    <div class="row">
        @foreach ($data as $vaccine)    
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ ('sinovac.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $vaccine->name }}</h5>
                    <p>{{ $vaccine->price }}</p>
                    <p class="card-text">{{ $vaccine->description }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ url('/patient/patient-create/'.$vaccine->id) }}" class="btn btn-primary">Vaccine Now</a>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
    </div>
@include('footer');