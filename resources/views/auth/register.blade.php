@extends('website.master')

@section('titel')
    Register
@endsection


@section('body')
    <main id="main" data-aos="fade-up">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">

        </section>
        <!-- End Breadcrumbs -->

        <section class="aboutall">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-6 ">
                        <div class="content pt-2 pt-lg-0 pl-0 pl-lg-2 ">

                            <form role="form" method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name    -->

                                <div class="form-group mt-3">
                                    <label for="name">Name</label> <br>
                                    <input placeholder="Name" id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                                <!-- Email    -->

                                <div class="form-group mt-3">
                                    <label for="email">Email</label> <br>
                                    <input id="email" type="email" placeholder="Email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">
                                </div>

                                <!-- Name    -->

                                <div class="form-group mt-3">
                                    <label for="class_roll">Class Roll</label> <br>
                                    <input type="number" placeholder="Class Roll" class="form-control @error('class_roll') is-invalid @enderror" name="class_roll"
                                    required autocomplete="class_roll">

                                    @error('class_roll')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Password    -->

                                <div class="form-group mt-3">
                                    <label for="password">Password</label> <br>
                                    <input id="password" type="password" placeholder="Password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                                <!-- ComPassword    -->

                                <div class="form-group mt-3">
                                    <label for="password-confirm">Confirm Password</label> <br>
                                    <input id="password-confirm" type="password" placeholder="Confirm Password"
                                        class="form-control" required autocomplete="new-password">
                                </div>

                                <div class="text-center d-block  mt-1">
                                    <br>
                                    <button type="submit" class="btn btn-outline-success w-100">Register
                                    </button>
                                </div>

                                <div class="form-group mt-3  ">
                                    <span class="singup"><a style="color: green;" href="login.html">Log In</a></span>
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
