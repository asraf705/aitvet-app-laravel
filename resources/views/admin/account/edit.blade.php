@extends('admin.master')

@section('titel')
    Edit-Account
@endsection


@section('body')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit-account</h4>
                            </div>

                            <form action="{{ route('update.account') }}" method="post">
                                @csrf

                                <div class="card-body">
                                    <div class="section-title mt-0">Name</div>
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Depertmen Name"
                                            class="form-control" value="{{$user->name}}" required>
                                    </div>

                                    <div class="section-title mt-0">Email</div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Semester Fees"
                                            class="form-control" value="{{$user->email}}" required>
                                    </div>

                                    <div class="section-title mt-0">Class Roll</div>
                                    <div class="form-group">
                                        <input type="number" name="class_roll" placeholder="Semester Fees"
                                            class="form-control" value="{{$user->class_roll}}" required>
                                    </div>

                                    {{-- <div class="section-title mt-0">Status</div>
                                    <div class="form-group">
                                        <select name="status" class="form-control"
                                            placeholder="Select Depertment" required>
                                            <option value="0" {{$user->status='student'}}>Student</option>
                                            <option value="1" {{$user->status='admin'}}>Admin</option>
                                            <option value="2" {{$user->status='subadmin'}}>Sub-Admin</option>
                                        </select>
                                    </div> --}}

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
