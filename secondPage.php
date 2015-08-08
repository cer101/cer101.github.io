<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Project 5</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <div class="navbar-header">
                <a class="navbar-brand topnav" href="#">Project 5</a>
            </div>
        </div>
    </nav>

    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Project 5</h1>                      
                    </div>
                </div>
            </div>

        </div>

    </div>
	<a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div>
                    <h2 class="section-heading">Project 5: <br> PHP Arrays</h2>
                    <table style="width:100%" >
                        <tr>
                            <td><h4>Family Ascending List</h4></td>
                            <td><h4>Family Descending List</h4></td> 
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    $family = array("Daniel", "Victoria", "Alex", "Curtis", "CJ", "Amy", "Helene");
                                    sort($family);
                                    foreach ($family as $member) {
                                        echo $member . "<br>";
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                    $family = array("Daniel", "Victoria", "Alex", "Curtis", "CJ", "Amy", "Helene");
                                    rsort($family);
                                    foreach ($family as $member) {
                                        echo $member . "<br>";
                                    }
                                ?>
                            </td> 
                        </tr>
                    </table>
                </div>

            </div>

        </div>

    </div>

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>
