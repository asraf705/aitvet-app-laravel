@extends('admin.master')

@section('titel')
    Teacher's Category
@endsection


@section('body')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Teacher's Category</h4>
                            <div class="card-header-action">
                                <a href="{{route('teacher-category.create')}}" class="btn btn-info">Add Teacher's Category</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped align-center" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Teacher's Category</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Admin & Dashboard</td>
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
