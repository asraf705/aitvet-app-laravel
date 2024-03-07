@extends('admin.master')

@section('titel')
    Testimonial Info
@endsection


@section('body')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add Testimonial</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('testimonial.index') }}" class="btn btn-info">Manage Testimonial</a>
                                </div>
                            </div>

                            <form action="{{ route('testimonial.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="section-title mt-0">Name</div>
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name" class="form-control">
                                    </div>

                                    <div class="section-title mt-0">Depertment</div>
                                    <div class="form-group">
                                        <select name="depertment_id" class="form-control select2"
                                            data-placeholder="Select Depertment" required>
                                            <option value=" ">Select Depertment</option>
                                            @foreach ($depertments as $depertment)
                                                <option value="{{ $depertment->id }}">{{ $depertment->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>


                                    <div class="section-title mt-0">Description</div>
                                    <div class="form-group">
                                        <textarea type="text" name="description" placeholder="Description" class="form-control"></textarea>
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

                            </form>

                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
