<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/font-self.css') }}">
    <script src="https://kit.fontawesome.com/40363c613f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body style="background-color:#13795B">
        <div class="container rounded-4" style="width: 60% !important; height:400px !important; margin-top:10% ">
            <div class="row col-xl-12 rounded-3" style="height: 100%; width:100%; overflow:hidden   " >
                <div class="col-xl-7" style="background: url('{{ asset('img/login.jpg') }}'); background-size:cover;">
                </div>
                <div class="col-xl-5 bg-light">
                    <h4 class="text-center p-3 mb-4">Peduliaalam  <i class="fa-solid fa-leaf"></i></h4>
                    <form action="" method="post">
                        <div class="mb-3 col-xl-10 mx-auto">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="name" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 col-xl-10 mx-auto">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" aria-describedby="emailHelp">
                        </div>
                        <div class="col-xl-10 mx-auto d-flex">
                            <p class="my-auto ms-2" style="font-size: 14px">Belum punya akun?, <a href="#">daftar segera</a></p>
                            <button type="submit" class="btn btn-primary w-25 ms-auto">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
