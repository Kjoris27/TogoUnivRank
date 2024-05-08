<x-app-layout>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <hr/>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">University Details</div>

                    <div class="card-body">
                        <p><strong>Acronym:</strong> {{ $university->acronym }}</p>
                        <p><strong>Name:</strong> {{ $university->name }}</p>
                        <p><strong>Country:</strong> {{ $university->country }}</p>
                        <p><strong>City:</strong> {{ $university->city }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
