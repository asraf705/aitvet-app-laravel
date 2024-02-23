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
                                <a href="{{ route('admission-category.create') }}" class="btn btn-info">Add Admission
                                    Category</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped align-center" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Depertment Name</th>
                                            <th>Admission Fees</th>
                                            <th>Create Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admissions as $admission)
                                            <tr>
                                                <td>{{ $admission->depertment->name }}</td>
                                                <td>{{ $admission->admission_fees }}</td>
                                                <td>{{ date('j F Y', strtotime($admission->updated_at)) }}</td>
                                                <td>
                                                    @if ($admission->status == 1)
                                                        <a href="{{ route('admission-category.show', $admission->id) }}"
                                                            class="btn btn-success">Active</a>
                                                    @else
                                                        <a href="{{ route('admission-category.show', $admission->id) }}"
                                                            class="btn btn-warning">Inactive</a>
                                                    @endif
                                                </td>
                                                <td class="d-flex justify-content-center">
                                                    <a href="{{ route('admission-category.edit', $admission->id) }}"
                                                        class="btn btn-primary">Edit</a>


                                                    <form
                                                        action="{{ route('admission-category.destroy', $admission->id) }}"
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
