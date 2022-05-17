<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}

    
    <link rel="shortcut icon" href="assets/icon/blue.png" type="image/x-icon">
    <link rel="stylesheet" href="style/login.css">
    <title>Login</title>
</head>

    <body>
    <div class="login-form">
        <div class=login-half>
            <h1>MASUK<h1>
            <form action="/login" method="post">
                <div class="form-group">
                    <h3>Nama</h3>
                    <input type="email" name="email" class="form-control" placeholder="name player" autofocus
                        required>
                </div>
                <div class="form-group">
                    <h3>Password quiz</h3>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password"
                        required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" style="margin:50px 120px">MASUK QUIZ</button>
                </div>
            </form>
        </div>
        <div class="reg">
            <h3><a href="daftar">buat quiz</a></h3>
        </div>
    </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
    </body>

</html>