@extends('website.master')

@section('titel')
    Login
@endsection


@section('body')
    <main id="main" data-aos="fade-up">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">

        </section>
        <!-- End Breadcrumbs -->

        <section id="about" class="aboutall">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 ">
                        <div class="content pt-2 pt-lg-0 pl-0 pl-lg-2 ">


                            <form role="form" method="POST" action="{{ route('login') }}">

                                <!-- Email    -->

                                <div class="form-group mt-3">
                                    <label for="email">Email</label> <br>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3">
                                    <label for="password">Password</label> <br>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="form-group mt-3  ">
                                    <label>
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </label>
                                    <span class="singup"><a href="#">Create an account</a></span>
                                </div>
                                <br>

                                <div class="text-center d-block">
                                    <br>
                                    <button type="submit" class="btn btn-outline-success w-100">Log In</button>
                                </div>

                                <div class="form-group mt-3  ">
                                    @if (Route::has('password.request'))
                                    <label>
                                        <span>Forgot <a href="{{ route('password.request') }}" style="color: green;">password ?</a></span>
                                    </label>
                                    @endif
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
@endsection
