@extends('layout.index')
@section('content')

    <div class="container justify-content-center">
        <div class="row justify-content-center">
             <div class="col-6">
                 <form>
                     <img class="mb-4" src="{{asset('images/about-img.png')}}" alt="" width="72" height="57">
                     <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>

                     <div class="form-floating">
                         <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                         <label for="floatingInput">Email address</label>
                     </div>
                     <div class="form-floating">
                         <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                         <label for="floatingPassword">Password</label>
                     </div>

                     <div class="checkbox mb-3">
                         <label>
                             <input type="checkbox" value="remember-me"> Remember me
                         </label>
                     </div>
                     <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                     <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
                 </form>
             </div>
            <div class="col-8">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h2>Add borders</h2>
                    <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
                    <button class="btn btn-outline-secondary" type="button">Example button</button>
                </div>
            </div>
        </div>
    </div>

@endsection
