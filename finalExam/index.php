<!DOCTYPE html>
<html>
  <head>
    <title>Homepage - Intro ITWS</title>
    <link rel="stylesheet" href="resources/index.css">
    <script type="text/javascript" src="resources/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="resources/iit.js"></script> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  </head>

  <body>
    <div id="main">
      <p><a href="index.php">&nbsp;&nbsp;&nbsp;<span>2020</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTRO TO ITWS HOMEPAGE</a></p>
    </div>

    <div id="bodyBlock">
      <header>
        <h1><a href="project.php">My Projects</a></h1>
      </header> 
      <?php 
        include('loadData.php'); 
      ?>
    </div>

    <footer>
      <p>Posted by: Ruoyi Zhan</p>
      <p>Contact information: <a href="zhanr@rpi.edu">zhanr@rpi.edu</a></p>
    </footer>

  </body>
</html>


