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

                                        @foreach ($teachers as $teacher)
                                            <tr>
                                                <td>{{ $teacher->name }}</td>
                                                <td>{{ $teacher->depertment->name }}</td>
                                                <td>{{ $teacher->post}}</td>
                                                <td>{{ $teacher->email }}</td>
                                                <td>{{ $teacher->phone }}</td>
                                                <td>
                                                    <img src="{{ asset($teacher->image) }}" alt="Image"
                                                        style="height: 50px; width: 50px;">
                                                </td>
                                                <td>
                                                    @if ($teacher->status == 1)
                                                        <a href="{{ route('teachers-info.show', $teacher->id) }}"
                                                            class="btn btn-success">Active</a>
                                                    @else
                                                        <a href="{{ route('teachers-info.show', $teacher->id) }}"
                                                            class="btn btn-warning">Inactive</a>
                                                    @endif
                                                </td>
                                                <td class="d-flex justify-content-center">

                                                    <a href="{{ route('teachers-info.edit', $teacher->id) }}"
                                                        class="btn btn-primary">Edit</a>


                                                    <form action="{{ route('teachers-info.destroy', $teacher->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger"
                                                            onclick="return confirm('Are you sure delete this!!')">Delete</button>
                                                    </form>
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
    </section>
@endsection
