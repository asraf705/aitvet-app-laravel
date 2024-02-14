@extends('admin.master')

@section('titel')
    Admission Category
@endsection


@section('body')
    <section class="section">
        <div class="section-body"
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add Teacher's Category</h4>
                            </div>
                            <div class="card-body">
                                <div class="section-title mt-0">Teacher's Category</div>
                                <div class="form-group">
                                    <input type="text" name="teacher_category" class="form-control" required>
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
