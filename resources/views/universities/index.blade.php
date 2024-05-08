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
                                <a href="#" class="btn btn-info btn-block">Check Comments</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="btn btn-dark btn-block">Check Statistics</a>
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
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($universities as $university)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $university->acronym }}</td>
                                    <td class="align-middle">{{ $university->name }}</td>
                                    <td class="align-middle">{{ $university->country }}</td>
                                    <td class="align-middle">{{ $university->city }}</td>
                                    <td class="align-middle">{{ $university->email_address }}</td>




                                    <td class="align-middle">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('universities.show', $university->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                            <a href="{{ route('universities.edit', $university->id)}}" type="button" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('universities.destroy', $university->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger m-0">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
