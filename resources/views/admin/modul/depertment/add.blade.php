@extends('admin.master')

@section('titel')
    Add Depertment
@endsection


@section('body')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add Depertment</h4>
                            </div>
                            <div class="card-body">
                                <div class="section-title mt-0">Depertmen Name</div>
                                <div class="form-group">
                                    <input type="text" name="depertmen_name" class="form-control" required>
                                </div>

                                <div class="section-title mt-0">Semester Fees</div>
                                <div class="form-group">
                                    <input type="number" name="semester_fees" class="form-control" required>
                                </div>

                                <div class="section-title mt-0">Image</div>
                                <div class="form-group custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile" required>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>

                                <div class="buttons">
                                    <a href="#" class="btn btn-lg btn-info col-md-12">Save</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
