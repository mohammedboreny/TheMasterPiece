<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
        rel="stylesheet"
    />
    <title>Document</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/docs/5.0/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset('/docs/5.0/assets/img/favicons/apple-touch-icon.png')}}" sizes="180x180">
    <link rel="icon" href="{{asset('/docs/5.0/assets/img/favicons/favicon-32x32.png')}}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{asset('/docs/5.0/assets/img/favicons/favicon-16x16.png')}}" sizes="16x16" type="image/png">
    <link rel="manifest" href="{{asset('/docs/5.0/assets/img/favicons/manifest.json')}}">
    <link rel="mask-icon" href="{{asset('/docs/5.0/assets/img/favicons/safari-pinned-tab.svg')}}" color="#7952b3">
    <link rel="icon" href="{{asset('/docs/5.0/assets/img/favicons/favicon.ico')}}">
    <meta name="theme-color" content="#7952b3">





    <!-- Custom styles for this template -->

</head>
<body>
<header>
    <!-- Background image -->
    <div
        class="p-5 text-center bg-image"
        style="
      background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
      height: 400px;
    "
    >
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">Heading</h1>
                    <h4 class="mb-3">Subheading</h4>
                    <a class="btn btn-outline-light btn-lg" href="#!" role="button"
                    >Call to action</a
                    >
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->
</header>


<hr>
{{--form--}}
<main class=" container text-center  " >
    <h1 class="h3 mb-3 fw-normal ml-5"> Register </h1>

    <form class="ml-5">
        {{--        <img class="mb-4" src="{{asset('/docs/5.0/assets/brand/bootstrap-logo.svg')}}" alt="" width="72" height="57">--}}

        <div class="row">
            <div class="col">
        <div class="form-floating mb-4">
            <input type="text" class="form-control" id="floatingInput" placeholder="FirstName">
            <label for="floatingInput">First Name</label>
        </div>
            </div>
            <div class="col">
        <div class="form-floating mb-4">
            <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Last Name</label>
        </div>
            </div>
        </div>
        <div class="form-floating mb-4 w-50">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-4 w-50">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value=""> Confirmation
            </label>
        </div>
        <button class="w-25 btn btn-lg btn-primary" type="submit">Sign Up</button>
    </form>
</main>

<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
></script>
</html>
