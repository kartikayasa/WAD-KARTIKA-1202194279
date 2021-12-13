@include('/header');
    <div class="container">
        <h1 style="margin-top: 60px; margin-bottom: 100px;" class="text-center">About Us</h1>
        <div class="row">
            <div class="col-md-5">
                <img class="rounded mx-auto d-block" src="{{ ('health.svg') }}" width="300">
            </div>
            <div class="col-md-6">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
        </div>
    </div>
    <br>
    @include('/footer')
