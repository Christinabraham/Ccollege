<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN</title>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Ewing</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php" style="font-family: Georgia, 'Times New Roman', Times, serif;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php" style="font-family: Georgia, 'Times New Roman', Times, serif;">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: Georgia, 'Times New Roman', Times, serif;">
              Quick Links
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#" style="font-family: Georgia, 'Times New Roman', Times, serif;">Moodle</a></li>
              <li><a class="dropdown-item" href="#">Fedena</a></li>
              <li><a class="dropdown-item" href="#">Campus connect</a></li>
              <li><a class="dropdown-item" href="#">E-Content</a></li>
              
              
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="department.php" style="font-family: Georgia, 'Times New Roman', Times, serif;">Academics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="gallery.php" tabindex="-1"  style="font-family: Georgia, 'Times New Roman', Times, serif;">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="contact.php" tabindex="-1"  style="font-family: Georgia, 'Times New Roman', Times, serif;">Contact Us</a>
          </li>
        </ul>
        <form class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="signup.php">SIGN UP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="signin.php">SIGN IN</a>
                </li>
            </ul>
        </form>
        
      </div>
    </div>
  </nav>
<body>
    <center><h1 style="color:rgba(3, 3, 65, 0.911)"><u>SIGN IN</u></h1></center>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-12">
                <table class="table table-borderless">
                    <tr>
                        <td>Email</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="ntn btn-outline-primary">Sign In</button></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <br>
                <br>
                <h6 style="font-family:verdana;color:rgb(33, 34, 33);">ACADEMICS</h6>
                <table class="table table-borderless">
                    <tr><td><a class="navbar-brand" href="">Department of Computer Science</a></td></tr>  
                    <tr><td><a class="navbar-brand" href="">Department Of Social Work</a></td></tr>
                    <tr><td><a class="navbar-brand" href="">Department Of Languages</a></td></tr>
                    <tr><td><a class="navbar-brand" href="">Department Of Personal Management</a></td></tr>
                </table>
            </div>
            <div class="col col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <br>
                <br>
                <h6 style="font-family:verdana;color:rgb(28, 29, 28);">USEFUL LINKS</h6>
                <table class="table table-borderless">
                    <tr><td><a class="navbar-brand" href="">Home</a></td></tr>  
                    <tr><td><a class="navbar-brand" href="">Gallery</a></td></tr>
                    <tr><td><a class="navbar-brand" href="">Academics</a></td></tr>
                    <tr><td><a class="navbar-brand" href="">About Us</a></td></tr>
                </table>
            </div>
            <div class="col col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <br>
                <br>
                <h6 style="font-family:verdana;color:rgb(27, 27, 27);">CONTACT US</h6>
                <table class="table table-borderless">
                    <tr><td><a class="navbar-brand" href=""> Ewing Christian College,<br>
                        Gaughat, Prayagraj<br>
                        Uttar Pradesh : 211003<br>
                        phone : 0532-2413645</a></td></tr>  
                    
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>