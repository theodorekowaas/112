<html>
<head>
	<title>PHP Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">LOGIN</h2>
          <form action="{{route('postlogin')}}" method="POST">
            {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="" class="form-label">email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
    <label for="" class="form-label">password</label>
    <input type="password" name="password" class="form-control">
</div>

                        <button class="btn btn-primary">Login</button>
                    </form>
        </div>
      </div>
    </div>
  </div>
</section>
</html>
