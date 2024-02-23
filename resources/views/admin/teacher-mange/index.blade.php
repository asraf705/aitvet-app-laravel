@extends('admin.master')

@section('titel')
    Teacher's Info
@endsection


@section('body')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Teacher's Info</h4>
                            <div class="card-header-action">
                                <a href="{{ route('teachers-info.create') }}" class="btn btn-info">Add Teacher's Info</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped align-center" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Name</th>
                                            <th>Depertment</th>
                                            <th>Post</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ASraf</td>
                                            <td>Cmt</td>
                                            <td>Teacher</td>
                                            <td>0131495254</td>
                                            <td>Asraftyg@gmail</td>
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
