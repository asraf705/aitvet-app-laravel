@extends('admin.master')

@section('titel')
    Edit Admission
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

                            <form action="{{ route('admission-category.update', $admission->id) }}" method="post">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="section-title mt-0">Depertmen Name</div>
                                    <div class="form-group">
                                        <select name="depertment_id" class="form-control select2"
                                            placeholder="Select Depertment" required>

                                            @foreach ($depertments as $depertment)
                                                <option value="{{ $depertment->id }}" {{ $depertment->id == $admission->depertment_id ? 'selected':' ' }}>{{ $depertment->name }}</option>
                                            @endforeach

                                        </select>

                                    <div class="section-title mt-0">Semester Fees</div>
                                    <div class="form-group">
                                        <input type="number" name="admission_fees" class="form-control"
                                            value="{{ $admission->admission_fees }}" required>
                                    </div>

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
