<?php     ob_start();    session_start();if(!isset($_SESSION['blogger'])){       header("Location: http://thaparexpress.in/blogger/index.php");    exit();}include('config.php');$query2 = "SELECT * FROM blogs";$result2 = mysql_query($query2) or die(mysql_error());$level = (mysql_num_rows($result2) + 1);if (isset($_POST['formsubmitted'])) {                  $error = array();$descrip = '';        $bname = '';        $blogger =$_SESSION['blogger'];        $bname = $_POST['bname'];            $descrip = $_POST['descrip'];        $time = $_POST['time'];                        $path = "img/";                $actual_image_name = '';                $ie = 0;           $valid_formats = array("jpg", "png", "gif", "bmp", "jpeg");                                   $name = $_FILES['photoimg']['name'];                        $size = $_FILES['photoimg']['size'];                                                if(strlen($name))                                {                                        list($txt, $ext) = explode(".", $name);                                        if(in_array($ext,$valid_formats))                                        {                                        if($size<(1024*1024))                                                {                                                        $actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;                                                        $tmp = $_FILES['photoimg']['tmp_name'];                                                        if(move_uploaded_file($tmp, $path.$actual_image_name))                                                                {                                                                        $fm = 'EVENT Added!';                                                                }                                                        else                                                                {$fm = 'failed';                                                                $ie = 1;                                                                }                                                }                                                else                                                {                                                $fm = 'Image file size max 1 MB';                                                                       $ie = 1;                                                }                                                                                        }                                                                                        else                                        {                                        $fm = 'Invalid file format';                                        $ie=1;                                        }                                }                                                        else  $fm = 'Blog Added!';                                                                                        if ($ie==0)                {        $query = "INSERT into `blogs` (`blogid`,`name`,`image`,`descrip`,`blogger`) values ('$level','$bname','$actual_image_name','$descrip','$blogger')";         $result = mysql_query($query) or die(mysql_error()); header("Location: http://thaparexpress.in/blog?id=".$level);    exit(); }        }        ?><!DOCTYPE html><!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]--><!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]--><!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]--><!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]--><!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js">  <!--<![endif]-->  <head>    <meta name="generator"    content="HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org" />    <meta charset="UTF-8" />    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    <title>Thapar Express | Add Blog</title>    <meta name="descripription" content="One stop for all of Thapar. THAPAR EXPRESS" />    <meta name="keywords" content="" />    <meta name="author" content="Codrops" />    <link rel="shortcut icon" href="../favicon.ico" />    <link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css"    type="text/css" />    <link rel="stylesheet" type="text/css" href="css/normalize.css" />    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />    <link rel="stylesheet" type="text/css" href="css/component.css" />    <script src="js/modernizr.custom.js" type="text/javascript"></script>    <script type="text/javascript" src="scripts/jquery.min.js"></script>    <script type="text/javascript" src="scripts/jquery.form.js"></script>  </head>  <body>    <div class="container">      <!-- here is the menu file -->      <?php include('menu.php');?>      <!--THIS IS IT-->      <div class="content_main">      <h1>        <?php echo $sitetitle?>      </h1>      <div id="container_demo">      <a class="hiddenanchor" id="toregister"></a>       <a class="hiddenanchor" id="tologin"></a>      <div id="wrapper">        <div id="login" class="animate form">          <h1>            <b>Add BLOG (id: <?php echo $level;?>)</b>          </h1>          <form method="post" action="add_blog.php" enctype="multipart/form-data"          class="login">            <div class="row">            <div class="col-lg-6">              <p>              <label for="username" class="uname" data-icon="u">                <br />              </label>               <input name="bname" type="text" id="Username" class="form-control"              placeholder="BLOG Heading" /></p>            </div>            <div class="row">              <div class="col-lg-6">                <p>                <label for="username" class="uname" data-icon="u">                  <br />                </label>                 <textarea name="descrip" type="text" id="Username" class="form-control"                placeholder="decription"></textarea></p>              </div>            </div>            <p>Upload Poster             <input type="file" name="photoimg" id="photoimg" /></p>            <p>            <label for="username" class="uname" data-icon="u">              <br />            </label>                         <input type="hidden" name="formsubmitted" value="TRUE" />             <input type="submit" class="btn btn-default navbar-btn"            value="Submit" /></div>          </form>        </div>      </div></div>      <div id="wrapper">        <div id="container_demo">          <div id="login" class="animate form">            <h1>Instructions!</h1>            <p>1) Entering image, html code and nametion are optional.            <br />2) Entering the answer is mandatory.            <br />3) Question can also contain html code.            <br /></p>          </div>        </div>      </div>      <script src="js/classie.js" type="text/javascript"></script>       <script type="text/javascript">                        new gnMenu( document.getElementById( 'gn-menu' ) );                </script></div>    </div>  </body></html>