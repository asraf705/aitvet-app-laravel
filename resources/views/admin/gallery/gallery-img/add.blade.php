@extends('admin.master')

@section('titel')
    Gallery Image
@endsection


@section('body')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add Gallery Image</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('gallery-image.index') }}" class="btn btn-info">Manage Banner</a>
                                </div>
                            </div>

                            <form action="{{ route('gallery-image.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="section-title mt-0">Depertment Name</div>
                                    <div class="form-group">
                                        <select name="depertment_id" class="form-control select2"
                                            placeholder="Select Depertment" required>

                                            @foreach ($depertments as $depertment)
                                                <option value="{{ $depertment->id }}">{{ $depertment->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="section-title mt-0">Image</div>
                                    <div class="form-group custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="customFile"
                                            required>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>

                                    <div class="buttons">
                                        <button type="submit" class="btn btn-lg btn-info col-md-12">Save</button>
                                    </div>
                                </div>


                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
