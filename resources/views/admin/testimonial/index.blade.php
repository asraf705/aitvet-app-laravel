@extends('admin.master')

@section('titel')
    Testimonial
@endsection


@section('body')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Testimonial</h4>
                            <div class="card-header-action">
                                <a href="{{ route('testimonial.create') }}" class="btn btn-info">Add Testimonial</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped align-center" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Name</th>
                                            <th>Depertment</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($teastimonials as $teastimonial)
                                            <tr>
                                                <td>{{ $teastimonial->name }}</td>
                                                <td>{{ $teastimonial->depertment->name }}</td>
                                                <td>{{ $teastimonial->description }}</td>
                                                <td>
                                                    <img src="{{ asset($teastimonial->image) }}" alt="Image"
                                                        style="height: 50px; width: 50px;">
                                                </td>
                                                <td>
                                                    @if ($teastimonial->status == 1)
                                                        <a href="{{ route('testimonial.show', $teastimonial->id) }}"
                                                            class="btn btn-success">Publish</a>
                                                    @else
                                                        <a href="{{ route('testimonial.show', $teastimonial->id) }}"
                                                            class="btn btn-warning">Unpublish</a>
                                                    @endif
                                                </td>
                                                <td class="d-flex justify-content-center">

                                                    <a href="{{ route('testimonial.edit', $teastimonial->id) }}"
                                                        class="btn btn-primary">Edit</a>


                                                    <form action="{{ route('testimonial.destroy', $teastimonial->id) }}"
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
