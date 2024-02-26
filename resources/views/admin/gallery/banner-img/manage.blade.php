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
                                <a href="{{ route('banner-image.create') }}" class="btn btn-info">Add Depertment</a>
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

                                        @foreach ($banners as $banner)
                                            <tr>
                                                <td>{{ $banner->depertment->name }}</td>
                                                <td>
                                                    <img src="{{ asset($banner->image) }}" alt="Image"
                                                        style="height: 50px; width: 50px;">
                                                </td>
                                                <td>

                                                    @if ($banner->status == 1)
                                                        <a href="{{ route('banner-image.show', $banner->id) }}" class="btn btn-success">Active</a>
                                                    @else
                                                        <a href="{{ route('banner-image.show', $banner->id) }}" class="btn btn-warning">Inactive</a>
                                                    @endif
                                                </td>
                                                <td class="d-flex justify-content-center">
                                                    <a href="{{ route('banner-image.edit', $banner->id) }}"
                                                        class="btn btn-primary">Edit</a>


                                                    <form
                                                        action="{{ route('banner-image.destroy', $banner->id) }}"
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
