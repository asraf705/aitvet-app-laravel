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
                                <a href="{{ route('depertment-category.create') }}" class="btn btn-info">Add Depertment</a>
                            </div>
                        </div>
                        <div class="card-body">

                            <p class="text-center text-success">{{ session('message') }}</p>

                            <div class="table-responsive">
                                <table class="table table-striped align-center" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Depertment Name</th>
                                            <th>Semester Fees (TK)</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($depertments as $depertment)
                                            <tr>
                                                <td>{{ $depertment->name }}</td>
                                                <td>{{ $depertment->semester_fees }}</td>
                                                <td>
                                                    <img src="{{ asset($depertment->image) }}" alt="Image"
                                                        style="height: 50px; width: 50px;">
                                                </td>
                                                <td>

                                                    @if ($depertment->status == 1)
                                                        <a href="{{ route('depertment-category.show', $depertment->id) }}"
                                                            class="btn btn-success">Active</a>
                                                    @else
                                                        <a href="{{ route('depertment-category.show', $depertment->id) }}"
                                                            class="btn btn-warning">Inactive</a>
                                                    @endif

                                                </td>
                                                <td class="d-flex justify-content-center">

                                                    <a href="{{ route('depertment-category.edit', $depertment->id) }}"
                                                        class="btn btn-primary">Edit</a>


                                                    <form
                                                        action="{{ route('depertment-category.destroy', $depertment->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="#" class="btn btn-danger"
                                                            onclick="return confirm('Are you sure delete this!!')">Delete</a>
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
