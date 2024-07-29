<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>oneonetwo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



    <style>
/* Center the form in the middle of the screen */
.form-signin {
  width: 100%;
  max-width: 400px;
  margin: auto;
}

/* Add some spacing to the top and bottom of the form */
.form-signin {
  padding: 15px;
  margin-top: 50px;
  margin-bottom: 50px;
  background-color: #fff;
  border: 1px solid #e5e5e5;
  border-radius: 5px;
}

/* Style the form headings */
.form-signin h1 {
  margin-bottom: 30px;
  font-weight: 300;
  font-size: 24px;
}

/* Style the form labels */
.form-signin label {
  font-weight: 300;
}

/* Style the input fields and floating labels */
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: none;
  border-bottom: 1px solid #ddd;
  background-color: #f7f7f7;
}

.form-signin .form-floating {
  margin-bottom: 20px;
}

.form-signin .form-floating label {
  display: block;
  pointer-events: none;
  position: absolute;
  top: 10px;
  left: 10px;
  font-size: 16px;
  color: #999;
  transition: all 0.1s ease-in-out;
}

.form-signin .form-floating .form-control:focus ~ label,
.form-signin .form-floating .form-control:not(:placeholder-shown) ~ label {
  top: -20px;
  font-size: 12px;
  color: #666;
}

/* Style the error messages */
.form-signin .invalid-feedback {
  display: block;
  font-size: 14px;
  color: #dc3545;
  margin-top: 5px;
}

/* Style the submit button */
.form-signin button[type="submit"] {
  margin-top: 20px;
  padding: 10px 20px;
  font-size: 16px;
  font-weight: bold;
  text-transform: uppercase;
  border-radius: 5px;
  border: none;
  background-color: #28a745;
  color: #fff;
}

/* Hover effect for the submit button */
.form-signin button[type="submit"]:hover {
  background-color: #218838;
}

    </style>   
 

<main class="form-signin w-100 m-auto">
  <form action="/register" method="POST">
    @csrf 
    <h1 class="h3 mb-3 fw-normal">Please register</h1>

    <div class="name">
      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="enter your name" required value="{{ old('name') }}">
      <label for="name"></label>
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
        @enderror
    </div>
    </div>
    
    <div class="username">
      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="enter your username" required value="{{ old('username') }}">
      <label for="username"></label>
      @error('username')
      <div class="invalid-feedback">
        {{ $message }}
        @enderror
    </div>

    <div class="email">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="enter your email" required value="{{ old('email') }}">
      <label for="email"></label>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
        @enderror
    </div>

    <div class="password">
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="enter a password" required value="{{ old('password') }}">
      <label for="password"></label>
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
        @enderror
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
  </form>
</main> 
  </body>
</html>
