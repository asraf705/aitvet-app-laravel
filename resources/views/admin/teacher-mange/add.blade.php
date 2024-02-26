@extends('admin.master')

@section('titel')
    Teacher's Info
@endsection


@section('body')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add Teacher's Info</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('teachers-info.index') }}" class="btn btn-info">Manage Depertment</a>
                                </div>
                            </div>

                            <form action="{{ route('teachers-info.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="d-flex col-md-12">
                                        <div class="col-md-6">
                                            <div class="section-title mt-0">Depertment</div>
                                            <div class="form-group">
                                                <select name="depertment_id" class="form-control select2"
                                                    data-placeholder="Select Depertment" required>

                                                    @foreach ($depertments as $depertment)
                                                        <option value="{{ $depertment->id }}">{{ $depertment->name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="section-title mt-0">Post</div>
                                            <div class="form-group">
                                                <select name="post" class="form-control" data-placeholder="Select Post"
                                                    required>
                                                    <option value=" ">Select Post</option>
                                                    <option>Principal</option>
                                                    <option>Department in Charge</option>
                                                    <option>Assistant Teacher</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

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
                                                <input type="file" name="image" class="custom-file-input"
                                                    id="customFile" required>
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex col-md-12">

                                        <div class="col-md-6">
                                            <div class="section-title mt-0">Email</div>
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Email"
                                                    class="form-control" required>
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
                                        <input type="text" name="education" placeholder="Education" class="form-control"
                                            required>
                                    </div>

                                    <div class="section-title mt-0">Other Education (Optional)</div>
                                    <div class="form-group">
                                        <input type="text" name="other_education" placeholder="Education"
                                            class="form-control select">
                                    </div>

                                    <div class="section-title mt-0">Short Description (Optional)</div>
                                    <div class="form-group">
                                        <textarea type="text" name="description" placeholder="Description" class="form-control"></textarea>
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
