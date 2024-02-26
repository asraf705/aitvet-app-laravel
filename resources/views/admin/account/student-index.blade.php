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
                            <h4>Student Info</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped align-center" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Name</th>
                                            <th>Email</th>
                                            <th>Class Roll</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($users as $user)
                                            @if ($user->status == 'student')
                                                <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->class_roll }}</td>
                                                    <td>
                                                        {{ $user->status }}
                                                    </td>

                                                    <td class="d-flex justify-content-center">

                                                        <a href="{{ route('edit.account',['id' =>$user->id]) }}" class="btn btn-primary">Edit</a>

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
                                            @endif
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
