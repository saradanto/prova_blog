<x-main>

    <section class="gradient-custom">
        <div class="container">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                    <div class="mb-md-5 mt-md-4 pb-5">

                        <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                        <p class="text-white-50 mb-5">Please enter your data!</p>

                        <form action="{{route('register')}}" method="POST">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div data-mdb-input-init class="form-outline form-white mb-4">
                                <input type="name" id="typeName" class="form-control form-control-lg" name="name" />
                                <label class="form-label" for="typeName">Name</label>
                            </div>


                            <div data-mdb-input-init class="form-outline form-white mb-4">
                            <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" />
                            <label class="form-label" for="typeEmailX">Email</label>
                            </div>


                            <div data-mdb-input-init class="form-outline form-white mb-4">
                            <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" />
                            <label class="form-label" for="typePasswordX">Password</label>
                            </div>


                            <div data-mdb-input-init class="form-outline form-white mb-4">
                                <input type="password" id="typePassworsX" class="form-control form-control-lg" name="password_confirmation" />
                                <label class="form-label" for="typePassworsX">Confirm Password</label>
                            </div>


                            <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>

                        </form>



                    </div>

                    <div>
                        <p class="mb-0">Already have an account? <a href="{{route('login')}}" class="text-white-50 fw-bold">Sign In</a>
                        </p>
                    </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

</x-main>
