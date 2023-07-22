@extends('Layout/login')
@section('ogin')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <div class="Login"></div>
    <img src="{{URL('logo/logo2.png') }}" alt="gambar" class="mx-auto d-block">
      <h3 style="text-align: center">LOGIN</h3>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="Masukkan email anda">
        </div>

      <div>
        <label for="inputPassword5" class="form-label">Password</label>
        <input type="password" id="inputPassword5" class="form-control" aria-labelledby="passwordHelpBlock">
        <div id="passwordHelpBlock" class="form-text">
        <p>Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</p>
      </div>

      <div class="d-grid gap-2">
        <button type="button" class="btn btn-primary">Submit</button>
      </div>


    {{-- <div>
        <div class="hai"><h3>LOGIN</h3></div>
        <form action="action_page.php" method="post">
            <div class="imgcontainer">
                <img src="{{URL('logo/logo2.png') }}" alt="gambar">
            </div>
          
            <div class="container">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>
          
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
          
              <button type="submit">Login</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>
          
            <div class="container" style="background-color:#f1f1f1">
              <button type="button" class="cancelbtn">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
          </form>
    </div> --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
@endsection