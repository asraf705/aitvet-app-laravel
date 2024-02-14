@extends('admin.master')

@section('titel')
    Admission Category
@endsection


@section('body')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Admission Category</h4>
                            <div class="card-header-action">
                                <a href="{{route('admission-category.create')}}" class="btn btn-info">Add Admission Category</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped align-center" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Depertment Name</th>
                                            <th>Admission Fees</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Admin & Dashboard</td>
                                            <td>5</td>
                                            <td>
                                                <a href="#" class="btn btn-success">Active</a>
                                                <a href="#" class="btn btn-warning">Inactive</a>
                                            </td>
                                            <td><a href="#" class="btn btn-primary">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Admin & Dashboard</td>
                                            <td>3</td>
                                            <td>
                                                <a href="#" class="btn btn-success">Active</a>
                                                <a href="#" class="btn btn-warning">Inactive</a>
                                            </td>
                                            <td><a href="#" class="btn btn-primary">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td>Admin & Dashboard</td>
                                            <td>7</td>
                                            <td>
                                                <a href="#" class="btn btn-success">Active</a>
                                                <a href="#" class="btn btn-warning">Inactive</a>
                                            </td>
                                            <td><a href="#" class="btn btn-primary">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
