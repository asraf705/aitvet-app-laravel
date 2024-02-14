@extends('admin.master')

@section('titel')
    Manage Depertment
@endsection



@section('body')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Depertment List</h4>
                            <div class="card-header-action">
                                <a href="{{route('depertment.create')}}" class="btn btn-info">Add Depertment</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped align-center" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Depertment Name</th>
                                            <th>Semester Fees</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Admin & Dashboard</td>
                                            <td>5</td>
                                            <td>
                                                <img src="#" alt="Image" style="height: 50px; width: 50px;">
                                            </td>
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
                                                <img src="#" alt="Image" style="height: 50px; width: 50px;">
                                            </td>
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
                                                <img src="#" alt="Image" style="height: 50px; width: 50px;">
                                            </td>
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
