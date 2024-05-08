<x-app-layout>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create University</div>

                <div class="card-body">
                    <form action="{{ route('universities.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="acronym" class="col-md-4 col-form-label text-md-right">Acronym</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="acronym" name="acronym" placeholder="Enter acronym" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">Country</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="country" name="country" placeholder="Enter country" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">City</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="city" name="city" placeholder="Enter city" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="website_link" class="col-md-4 col-form-label text-md-right">Website Link</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="website_link" name="website_link" placeholder="Enter website link">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email_address" class="col-md-4 col-form-label text-md-right">Email Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="email_address" name="email_address" placeholder="Enter email address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact1" class="col-md-4 col-form-label text-md-right">Contact 1</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="contact1" name="contact1" placeholder="Enter contact 1">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact2" class="col-md-4 col-form-label text-md-right">Contact 2</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="contact2" name="contact2" placeholder="Enter contact 2">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="total_students" class="col-md-4 col-form-label text-md-right">Total Students</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="total_students" name="total_students" placeholder="Enter total students" min="0">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="integration_percentage" class="col-md-4 col-form-label text-md-right">Integration Percentage</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="integration_percentage" name="integration_percentage" placeholder="Enter integration percentage">
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
