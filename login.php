

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prijava</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <script src="js/blok.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">
<div class="wrapper"> 
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="#page-top">Preporuka filmova</a>
            </div>
        </div>
    </nav>

<section>

<div class="container">
    <div class="formPosition">
        <img class="imgPadding" src="img/logo.png">
    </div>
</div>

<div class="container border"> 
    <div class="col-md-6">  
        <h4 class="formPosition" style="padding-top: 10px;">Prijava</h4>
        
        <form class="formPosition formPadding" action="signin.php" method="POST">
            <div class="formPadding">
                <input class="form-control formProperties" type="text" name="uid" id="uid" placeholder="Korisničko ime">
            </div>

            <div class="formPadding">
                <input class="form-control formProperties" type="password" name="pwd" id="pwd" placeholder="Zaporka">
            </div>

            <div class="formPadding">
                <button type="submit" class="btn btn-primary button">Prijavi se</button>
            </div>
        </form>
        

    </div>

    <div class="col-md-6">  
        <h4 class="formPosition" style="padding-top: 10px;"">Registracija</h4>

        <form class="formPosition formPadding" action="signup.php" method="POST">
            <div class="formPadding">
                <input class="form-control formProperties" type="text" name="uid" id="uid" placeholder="Korisničko ime">
            </div>

            <div class="formPadding">
                <input class="form-control formProperties" type="password" name="pwd" id="pwd" placeholder="Zaporka">
            </div>

            <div class="formPadding">
                <input class="form-control formProperties" type="text" name="first" id="first" placeholder="Ime">
            </div>

            <div class="formPadding">
                <input class="form-control formProperties" type="text" name="last" id="last" placeholder="Prezime">
            </div>

            <div class="formPadding">
                <button type="submit" class="btn btn-primary button">Registriraj se</button>
            </div>
        </form>
        
    </div>
</div>



</section>


<footer>
   <div class="container" style="padding-top: 7px;">
        <p>
           Designed and developed by Ime Prezime <br>
           <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true" style="color:#244f50; padding-left: 2px; padding-right: : 2px;"></i></a>
           <a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true" style="color:#244f50; padding-left: 2px; padding-right: : 2px;"></i></a>
        </p>
    </div> 
</footer>

</div>

<script type="text/javascript" src="js/checkBoxControler.js"></script>
<script type="text/javascript" src="js/autoResult.js"></script>
</body>

</html>