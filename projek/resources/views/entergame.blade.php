<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}

    
    <link rel="shortcut icon" href="assets/icon/blue.png" type="image/x-icon">
    <link rel="stylesheet" href="style/entergame.css">
    <title>entergame</title>
</head>

<body>
    <div class="login-form">
        <form action="/login" method="post">
            <div class="form-group">
            <h3>Enter Your Name</h3>

            <form>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label"><h1>Name</h1></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" style="width:330px; height:50px; margin-left:70px; border-radius:15px";>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="code" class="col-sm-2 col-form-label"><h1>Quiz Code</h1></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="code" placeholder="Enter your Code" style="width:330px; height:50px; margin-left:70px; border-radius:15px";>
                </div>
                </div>
            </form>

                <button type="submit" class="btn btn-primary btn-block">Masuk</button>
            </div>
        </form>
    </div>



  <div class="rectangle-atas"></div>
  <div class="rectangle-bawah"></div>
  <div class="polygon-atas"></div>
  <div class="polygon-bawah"></div>

</body>