{{-- @extends('layout.auth') --}}

<x-auth>

@section('content')
<section class="vh-100 mt-5">
    <div class="container-fluid h-custom mt-5">
      <div class="row d-flex justify-content-center align-items-center h-100 mt-5">
        <div class="col-md-9 col-lg-6 col-xl-5 mt-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                @if(Session::has('success'))
                    {{ Session::get('success') }}
                @endif
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="email" class="form-control" />
                    <label class="form-label" for="form2Example1">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="password" class="form-control" />
                    <label class="form-label" for="form2Example2">Password</label>
                    </div>

                    <!-- Submit button -->
                        <button class="btn btn-primary btn-block mb-4">Sign in</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

</x-auth>
