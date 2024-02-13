@extends('website.master')

@section('titel')
    Admission form
@endsection


@section('body')
    <main id="main" data-aos="fade-up">


        <section class="aboutall">
            <div class="container">

                <h3 style="text-align: center;">ADDMISSION FROM</h3>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="content pt-2 pt-lg-0 pl-0 pl-lg-2 ">

                            <form class="row g-3" role="form">

                                <!-- Name    -->
                                <div class="form-group col-md-8 mt-3">
                                    <label for="name">Name</label> <br>
                                    <input type="text" class="form-control" placeholder="Name" required>
                                </div>

                                <!-- Image    -->

                                <div class="form-group col-md-4">
                                    <label for="file">Photo</label> <br>
                                    <input type="file" class="form-control" required>
                                </div>

                                <!-- Number    -->
                                <div class="form-group col-md-7 mt-3">
                                    <label for="number">Student's number</label> <br>
                                    <input type="number" class="form-control" placeholder="Number" required>
                                </div>

                                <!-- DoB    -->
                                <div class="form-group col-md-5 mt-3">
                                    <label for="name">Date of Birth</label> <br>
                                    <input type="date" class="form-control" placeholder="Name" required>
                                </div>


                                <!-- Father's name    -->
                                <div class="form-group col-md-7 mt-3">
                                    <label for="name">Father's Name</label> <br>
                                    <input type="text" class="form-control" placeholder="Name" required>
                                </div>
                                <!-- Number    -->
                                <div class="form-group col-md-5 mt-3">
                                    <label for="number">Father's number</label> <br>
                                    <input type="number" class="form-control" placeholder="Number" required>
                                </div>

                                <!-- Mother's name    -->
                                <div class="form-group col-md-7 mt-3">
                                    <label for="name">Mother's Name</label> <br>
                                    <input type="text" class="form-control" placeholder="Name" required>
                                </div>
                                <!-- Number    -->
                                <div class="form-group col-md-5 mt-3">
                                    <label for="number">Mother's number</label> <br>
                                    <input type="number" class="form-control" placeholder="Number" required>
                                </div>

                                <hr>

                                <div class="form-group col-md-12 mt-3">
                                    <label><samp style="color: red;">Note:</samp> All information as per <samp
                                            style="color: red;"><b>SSC</b></samp> certificate.</label> <br>
                                </div>

                                <!-- Board    -->
                                <div class="form-group col-md-7 mt-3">
                                    <label for="name">SSC Board</label> <br>
                                    <select class="form-control" name="depertment" id="depertment" required>
                                        <option value="">Select Board</option>
                                        <option>Barisal</option>
                                        <option>Chittagong</option>
                                        <option>Comilla</option>
                                        <option>Dhaka</option>
                                        <option>Dinajpur</option>
                                        <option>Jessore</option>
                                        <option>Mymensingh</option>
                                        <option>Rajshahi</option>
                                        <option>Sylhet</option>
                                        <option>Madrasah</option>
                                        <option>Technical</option>
                                        <option>DIBS(Dhaka)</option>
                                    </select>
                                </div>


                                <!-- Year    -->
                                <div class="form-group col-md-5 mt-3">
                                    <label for="number">Passing Year</label> <br>
                                    <input type="month" class="form-control" placeholder="MM/YYYY" required>
                                </div>

                                <!-- ssc roll    -->
                                <div class="form-group col-md-4 mt-3">
                                    <label for="number">S.S.C Roll Number</label> <br>
                                    <input type="number" class="form-control" placeholder="SSC Roll" required>
                                </div>

                                <!-- ssc reg    -->
                                <div class="form-group col-md-5 mt-3">
                                    <label for="number">S.S.C Registration Number</label> <br>
                                    <input type="number" class="form-control" placeholder="SSC Registration" required>
                                </div>

                                <!-- group    -->
                                <div class="form-group col-md-3 mt-3">
                                    <label for="number">Group</label> <br>
                                    <select class="form-control" name="depertment" id="depertment">
                                        <option value="">Select Group</option>
                                        <option>Science </option>
                                        <option>Arts</option>
                                        <option>Commerce/Business Studies </option>
                                        <option>Vocational </option>
                                        <option>Madrasha </option>
                                        <option>O Level </option>
                                    </select>
                                </div>

                                <!-- ssc resualt    -->
                                <div class="form-group col-md-12 mt-3">
                                    <label for="number">SSC Result</label> <br>
                                    <input type="number" class="form-control" placeholder="SSC Result (GPA)" required>
                                </div>

                                <hr>

                                <div class="form-group col-md-12 mt-3">
                                    <label><samp style="color: red;">Note:</samp><b>Please Enter all information
                                            carefully. </b> </label> <br>
                                </div>

                                <!-- Class Shift    -->
                                <div class="form-group col-md-6 mt-3">
                                    <label for="number">Class Shift</label> <br>
                                    <select class="form-control" name="depertment" id="depertment">
                                        <option value="">Select Shift</option>
                                        <option>Morning Shift (At 8.00 - 13.00 o'clock)</option>
                                        <option>Day Shift (At 10.00 - 15.30 o'clock)</option>
                                    </select>
                                </div>

                                <!-- Depertment    -->
                                <div class="form-group col-md-6 mt-3">
                                    <label for="number">Depertment</label> <br>
                                    <select class="form-control" name="depertment" id="depertment">
                                        <option value="">Select Department</option>
                                        <option>Architecture Technology</option>
                                        <option>Chemical Technology</option>
                                        <option>Civil Technology</option>
                                        <option>Computer Technology</option>
                                        <option>Electrical Technology</option>
                                        <option>Electronics Technology</option>
                                        <option>Textile Technology</option>
                                    </select>
                                </div>


                                <div class="text-center d-block  mt-1">
                                    <br>
                                    <button type="submit" class="btn btn-outline-success w-100"><a href="#">Submit
                                        </a></button>
                                </div>

                        </div>

                        </form>

                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
@endsection
