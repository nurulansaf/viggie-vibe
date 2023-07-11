@extends('layouts.app')

@section('content')
<section class="wrapper bg-pattern-1">
    <div class="container pb-10 pb-md-10 pt-10">
      <div class="card border-0">
        <div class="card-body bg-white rounded shadow-sm">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto mt-n10">
                  <div class="card-login">
                    <div class="card-body-login p-5 text-center">
                      <h2 class="mb-3 fw-bold text-start">Sign Up</h2>
                        <form class="text-start mb-3" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-floating mb-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="loginNama">Nama</label>
                            </div>

                            <div class="form-floating password-field mb-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="loginEmail">Email</label>
                            </div>

                            <div class="form-floating password-field mb-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                <label for="loginPassword">Password</label>
                            </div>

                            <div class="form-floating password-field mb-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                <label for="loginConfirmPassword">Confirm Password</label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2">
                                {{ __('Register') }}
                            </button>
                          
        
                        </form>
                        <!-- /form -->
                        <p class="mb-0">have an account? 
                        @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="hover">Sign Ip</a>
                        @endif
                        </p>
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!--/.card -->
                </div>
                <!-- /column -->
                
                <div class="col-lg-6 col-md-6">
                    <div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1" style="top: -1.7rem; left: 1.5rem;"></div>
                  <figure class="rounded">
                    <img src="https://images.unsplash.com/photo-1583258292688-d0213dc5a3a8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" srcset="https://images.unsplash.com/photo-1583258292688-d0213dc5a3a8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Viggie Vibe" /></figure>
                </div>
            </div>
            <!-- /.row -->
        </div>
      </div>
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

@endsection
