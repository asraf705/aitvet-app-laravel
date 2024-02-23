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
                                <h4>Add Teacher's Category</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('teachers-info.index') }}" class="btn btn-info">Manage Depertment</a>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="d-flex col-md-12">
                                    <div class="col-md-6">
                                        <div class="section-title mt-0">Teacher's Name</div>
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Teacher's Name"
                                                class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="section-title mt-0">Image</div>
                                        <div class="form-group custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="customFile"
                                                required>
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex col-md-12">
                                    <div class="col-md-6">
                                        <div class="section-title mt-0">Depertment</div>
                                        <div class="form-group">
                                            <input type="text" name="depertment_id" placeholder="Depertment"
                                                class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="section-title mt-0">Post</div>
                                        <div class="form-group">
                                            <input type="text" name="post_id" placeholder="Post" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex col-md-12">
                                    <div class="col-md-6">
                                        <div class="section-title mt-0">Email</div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" class="form-control"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="section-title mt-0">Phone</div>
                                        <div class="form-group">
                                            <input type="number" name="phone" placeholder="Phone Number"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="section-title mt-0">Education</div>
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="Email" class="form-control" required>
                                </div>

                                <div class="section-title mt-0">Education</div>
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Phone Number" class="form-control"
                                        required>
                                </div>

                                <div class="section-title mt-0">Short Description</div>
                                <div class="form-group">
                                    <textarea type="text" name="description" placeholder="Description" class="form-control" required></textarea>
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
