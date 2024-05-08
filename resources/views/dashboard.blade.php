<x-app-layout>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <hr/>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach($universities as $university)
            <div class="col">
                <div class="card">
                    <img src="{{ asset($university->image_path) }}" class="card-img-top" alt="{{ $university->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $university->name }}</h5>
                        <p class="card-text">{{ $university->website_link }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
