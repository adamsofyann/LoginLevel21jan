<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="sayu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>LoginWithLatihan</title>
  </head>
  <body>

  <div class="card secandary position-absolute top-50 start-50 translate-middle" style="width: 18rem;" >
  <div class="card-body">
    

<form method="POST" action="cek_login.php">
  <div class=" mb-3 ">
    <img class ="card-img-top position-absolute top-30 start-50 translate-middle"src="databases/logo.png" style="width: 100px; , justify-content-center" sizes="10" srcset="">
    <br><br>
    <h1 style="text-align: center;">Login</h1>
    <label for="exampleInputEmail1" class="form-label" >Username</label>
    <input type="text" placeholder="Masukan username anda " name="username" class="form-control" id="exampleInputEmail1" aria-describedby="text" required autofocus>
   
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" placeholder="Masukan password anda " name="password" class="form-control" id="exampleInputPassword1" required>
  </div>



  <div class="form-label-group mb-3">
    <select class="form-control" name="level" id="">
      <option value="Admin">Admin</option>
      <option value="Guru">Guru</option>
      <option value="Siswa">Siswa</option>
    </select>
  </div>

  <div class="checkbox mb-3">
    <label >
      <input type="checkbox" name="" value=remember-me id=""> Remember Me
    </label>

  </div>

  

  <!--preloader-->
  <!-- <div class="preloader">
    <div class="loading">
      <img src="databases/Logo.gif" width="80" alt="">

    </div>
  </div>

 <script>
      $(window).on("load",funtion(){
        $(".preloader").fadeOut("slow")
      })
      
      </script> -->


  <button type="submit" class="btn   btn-primary ">sign in </button>
  <p class="mt-5 mb-3 text-muted text-center ">&copy; Sadam sofyan <?php= date ('Y')</p>
</form>

  </div>
</div>
    
  
    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

     

  </body>
</html>