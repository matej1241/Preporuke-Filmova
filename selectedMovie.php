<?php
    session_start();
      
    if (!$_SESSION['id']) {
        header("Location: login.php");
    }

    require_once('includes/class-query.php');

    if (!empty($_GET)) {
        $post = $_GET['p'];
    }

    if (!empty($post)) {
        $posts_array = $query->post($post); 
    } 

    if(!empty($_POST)){
            require_once('includes/class-insert.php');
            $insert->like($post);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Filmovi</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <link href="css/creative.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <script src="js/blok.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



</head>

<body id="page-top">
<div class="wrapper"> 
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="odabirZanra.php">Preporuka Filmova</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form action="signout.php">
                            <div class="lol">
                                <button type="submit" class="btn btn-primary button">Odjava</button>
                            </div>
                        </form>
                    
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<section>
    <div class="container">
        <?php foreach ($posts_array as $post): ?>
        <h3 style="font-weight: bold; color: #244f50;"><?php echo $post->movieName;  ?></h3>
        <hr class="hrStyle">
            <div class="col-md-6 framePadding">
                <iframe width="500" height="250" src="https://www.youtube.com/embed/<?php echo $post->trailer;  ?>"></iframe>
            </div>

            <div class="col-md-6 framePadding">
                <h4 style="font-weight: bold; color: #244f50;">Opis: </h4>
                <p><?php echo $post->movieDescription;  ?></p>
                <form method="post" enctype="multipart/form-data" >
                <button class="btn btn-primary buttonPosition" type="submit" name="insert" id="insert" >Like</button>
                </form>

            </div>
        <?php endforeach; ?>
    </div>



   
</section>


<footer>
   <div class="container" style="padding-top: 7px;">
        <p>
           Designed and developed by Ime Prezime <br>
           <a href="https://www.facebook.com/"><i class="fa fa-facebook faIcons" aria-hidden="true"></i></a>
           <a href="https://twitter.com/"><i class="fa fa-twitter faIcons" aria-hidden="true"></i></a>
        </p>
    </div> 
</footer>

</div>

<script type="text/javascript" src="js/checkBoxControler.js"></script>
<script type="text/javascript" src="js/autoResult.js"></script>
</body>

</html>