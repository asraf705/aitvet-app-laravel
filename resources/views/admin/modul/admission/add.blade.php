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
                                <div class="card-header-action">
                                    <a href="{{ route('admission-category.index') }}" class="btn btn-info">Admission
                                        Depertment</a>
                                </div>
                            </div>

                            <form action="{{ route('admission-category.store') }}" method="post">
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

                                    <div class="section-title mt-0">Admission Fees</div>
                                    <div class="form-group">
                                        <input type="number" name="admission_fees" placeholder="Admission Fees"
                                            class="form-control" required>
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
