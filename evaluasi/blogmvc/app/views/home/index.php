<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5 {
    font-family: "Raleway", sans-serif
  }
</style>

<body class="w3-light-grey">

  <div class="w3-content" style="max-width:1400px">

    <!-- modal -->
    <div class="modal fade" id="formLogin" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="formModalLabel"><b>Login</b></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form action="<?=BASEURL;?>/article" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" id="id">

              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
              </div>

              <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="pass" name="pass">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- modal register-->
    <div class="modal fade" id="formRegister" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="formModalLabel"><b>Sign Up</b></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form action="<?=BASEURL;?>/article" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" id="id">

              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
              </div>

              <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="pass" name="pass">
              </div>

              <div class="form-group">
                <label for="pass2">Confirm Password</label>
                <input type="password" class="form-control" id="pass2" name="pass2">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <header class="w3-container w3-center w3-padding-32">
      <h1><b>WELL HELLO!</b></h1>
      <p>Welcome to the blog of <span class="w3-tag">Muhgenta</span></p>
      <br>
      <hr class="my-4">
      <br>
      <h3><b>Before you go to the next page, please Login first...</b></h3>
      <br>
      <!-- LOGIN -->
      <p><a href="<?= BASEURL; ?>" class="w3-button w3-padding-large w3-black w3-border"  data-toggle="modal" data-target="#formLogin"><b>LOGIN HERE</b></a></p>
      <br>
      <p>Don't have an account? <a href="<?= BASEURL; ?>" data-toggle="modal" data-target="#formRegister"><b>Sign Up</b></a></p>
    </header>

  </div>