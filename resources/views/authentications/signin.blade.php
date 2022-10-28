@extends('layout.index')
@section('content')
<div class="container pb-4 pt-4">
<div class="row featurette">
    <div class="col-md-7">
        <form>
            <h1 class="h3 mb-3 fw-normal"> sign in</h1>
        
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
            <button class="my-2 btn btn-lg btn-primary" type="submit">Sign in</button>
            
          </form>
            </div>
    <div class="col text-center">
        <section >
            <div class="row">
              <div class="col pt-5 pl-5">
                <h1 class="fw-light ">Does not have an account?</h1>
                <p>
                  <a href="{{route('signUp')}}" class="btn btn-primary my-2">Sign Up now</a>
                </p>
              </div>
            </div>
          </section>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
