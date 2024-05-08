<x-app-layout>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <hr>
    <div class="container">
        <!-- Carte d'actions -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Actions</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="{{ route('universities.create') }}" class="btn btn-secondary btn-block">Create University</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('comments.index') }}" class="btn btn-info btn-block">Check Comments</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('statistics.index') }}" class="btn btn-dark btn-block">Check Statistics</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau des universités -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">List of Universities</h5>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-primary">
                                <tr>
                                    <th>#</th>
                                    <th>Acronym</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- Placez ici la boucle pour afficher les universités -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
