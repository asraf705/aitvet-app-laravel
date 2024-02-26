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
                            <h4>Gallery Image</h4>
                            <div class="card-header-action">
                                <a href="{{ route('gallery-image.create') }}" class="btn btn-info">Add Item</a>
                            </div>
                        </div>
                        <div class="card-body">

                            <p class="text-center text-success">{{ session('message') }}</p>
                            <p class="text-center text-danger">{{ session('dmessage') }}</p>

                            <div class="table-responsive">
                                <table class="table table-striped align-center" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Depertment Name</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($gallerys as $gallery)
                                            <tr>
                                                <td>{{ $gallery->depertment->name }}</td>
                                                <td>
                                                    <img src="{{ asset($gallery->image) }}" alt="Image"
                                                        style="height: 50px; width: 50px;">
                                                </td>
                                                <td>

                                                    @if ($gallery->status == 1)
                                                        <a href="{{ route('gallery-image.show', $gallery->id) }}" class="btn btn-success">Active</a>
                                                    @else
                                                        <a href="{{ route('gallery-image.show', $gallery->id) }}" class="btn btn-warning">Inactive</a>
                                                    @endif
                                                </td>
                                                <td class="d-flex justify-content-center">
                                                    <a href="{{ route('gallery-image.edit', $gallery->id) }}"
                                                        class="btn btn-primary">Edit</a>


                                                    <form
                                                        action="{{ route('gallery-image.destroy', $gallery->id) }}"
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
