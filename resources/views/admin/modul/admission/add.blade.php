@extends('admin.master')

@section('titel')
    Admission Category
@endsection


@section('body')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add Admission Category</h4>
                            </div>
                            <div class="card-body">
                                <div class="section-title mt-0">Depertment Name</div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>Select Category</option>
                                        <option>Admin & Dashboard</option>
                                        <option>Blogging</option>
                                        <option>Non-Profit</option>
                                        <option>Portfolio</option>
                                    </select>
                                </div>

                                <div class="section-title mt-0">Admission Fees</div>
                                <div class="form-group">
                                    <input type="number" name="admission_fees" class="form-control" required>
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
