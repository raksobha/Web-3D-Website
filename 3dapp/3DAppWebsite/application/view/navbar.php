<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../application/css/bootstrap.css" crossorigin="anonymous">

        <!-- X3DOM.css -->
        <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../application/css/custom.css" crossorigin="anonymous">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
    
        <!-- fancyBox3 -->
        <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">
        
        <title>Web 3D App Appletizer</title>

    </head>
    <body id="bodyColor">
        <!-- The 3D App header -->
        <nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
            
            <!-- Brand -->
            <div class="logo">
                <a class="navbar-brand" href="index.php">
                <h1>Cola</h1>
                <h2>C</h2>
                <h3>oka</h3>
                <h4>S.a.m.b.a</h4>
                <h5>_.___.__.___._</h5>
                <p>The classic, re-imagined</p>
                </a>
            </div>

            <!-- Navbar Menu Burger -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- link Menu Icon button to the links class navbar-collapse selector -->
            <div class="collapse navbar-collapse">
                
            <!-- Links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Home -->
                    <li class="nav-item">
                    <a id="navHome" class="nav-link <?php if($data['$viewId'] == 0){ echo "active"; } ?>" href="index.php">Home</a>
                    </li>
                    <!-- Extras -->
                    <li class="nav-item">
                    <a id="navAbout" class="nav-link <?php if($data['$viewId'] == 1){ echo "active"; } ?>"  href="index.php?view=extras" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="Extra Content for website" data-content="References, Statement of Originality and Github link">Extras</a>
                    </li>
                
                    <!-- Models -->
                    <li class="nav-item">
                        <a id="navModels" class="nav-link <?php if($data['$viewId'] == 2){ echo "active"; } ?>"  href="index.php?view=models&model_Id=0" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Appletiser">Models</a>
                    </li>

                    <!-- Contact -->
                    <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
