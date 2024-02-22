@extends('admin.master')

@section('titel')
    Edit Depertment
@endsection


@section('body')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Depertment</h4>

                            </div>

                            <form action="{{ route('depertment-category.update', $depertments->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="section-title mt-0">Depertmen Name</div>
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" value="{{ $depertments->name }}" required>
                                    </div>

                                    <div class="section-title mt-0">Semester Fees</div>
                                    <div class="form-group">
                                        <input type="number" name="semester_fees" class="form-control" value="{{ $depertments->semester_fees }}" required>
                                    </div>

                                    <div class="section-title mt-0">Image</div>
                                    <div class="form-group custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="customFile"
                                            required>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        <img src="{{ asset($depertments->image) }}" alt="" height="100" width="120">
                                    </div>
                                    <br>

                                    <div class="buttons">
                                        <button type="submit" class="btn btn-lg btn-info col-md-12">Update</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
