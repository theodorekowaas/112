
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>one one two</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
     /* Global styles */

     
body {
  background-color: #f8f9fa;
  font-family: Arial, sans-serif;
}

main{
  margin-left: 550px
}

/* Form styles */
.form-registration {
  max-width: 400px;
  margin-top: 50px;
  background-color: #fff;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-registration h1 {
  font-size: 24px;
  font-weight: bold;
  text-align: center;
  margin-bottom: 30px;
}

.form-floating {
  margin-bottom: 20px;
}

.form-floating label {
  color: #777;
}

.form-floating input {
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 16px;
  padding: 10px;
  width: 100%;
}

.form-floating input:focus {
  border-color: #007bff;
  outline: none;
}

.invalid-feedback {
  color: #dc3545;
  font-size: 14px;
  margin-top: 5px;
}

.btn-primary {
  background-color: #28a745;
  border-color: #28a745;
  font-size: 16px;
  font-weight: bold;
  padding: 10px 20px;
  color:white;
}

.btn-primary:hover {
  background-color: #218838;
  border-color: #1e7e34;

  .alert.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    position: fixed;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    z-index: 9999;
    width: 90%;
    max-width: 500px;
    padding: 0.75rem 1.25rem;
    margin-top: 1rem;
    border-radius: 0.25rem;
}

.alert.alert-success button {
    background-color: transparent;
    border: none;
    position: absolute;
    top: 0.25rem;
    right: 0.25rem;
    font-size: 1.25rem;
    font-weight: bold;
    color: #155724;
    cursor: pointer;
    outline: none;
}

}

      
    </style>  

    

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif



<main class="form-registration w-100 m-auto">
  <form action="/login" method="post">  
    @csrf
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{old('email')}}">
      <label for="email">Email address</label>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
      <label for="password">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    
  </form>
  <small class="d-block text-center">Not registered? <a href="/register"> Register now!</a></small>
</main> 
  </body>
</html>




