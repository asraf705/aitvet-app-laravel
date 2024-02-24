@extends('admin.master')

@section('titel')
    Account Info
@endsection


@section('body')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Admin Info</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped align-center" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Name</th>
                                            <th>Email</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>

                                                <td>

                                                    @if ($user->type == 0)

                                                        <a href="#" class="btn btn-success">Student</a>

                                                    @elseif($user->type == 1)

                                                        <a href="#" class="btn btn-info">Admin</a>

                                                    @else

                                                        <a href="#" class="btn btn-warning">Subadmin</a>

                                                    @endif

                                                </td>

                                                <td class="d-flex justify-content-center">

                                                    <a href="#" class="btn btn-primary">Edit</a>


                                                    {{-- <form
                                                    action="{{ route('teachers-info.destroy', $user->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger"
                                                        onclick="return confirm('Are you sure delete this!!')">Delete</button>
                                                </form> --}}
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
