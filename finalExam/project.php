<!DOCTYPE html>
<html>
  <head>
    <title>Project</title>
    <link rel="stylesheet" href="resources/project.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <script type="text/javascript" src="resources/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="resources/iit.js"></script> 
  </head>

  <body>
    <div id="main">
      <p><a href="project.php"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROJECT</a></p>
    </div>

    <div id="bodyBlock">
      <header>
        <h1>Here is my project</h1>
      </header>  
      <ul class=menu>
        <?php
          @ $db = new mysqli('localhost', 'root', '', 'myIntroProjects');
          $query = 'select * from projectList order by name';
          $result = $db->query($query);
          $numRecords = $result->num_rows;
          for ($i=0; $i < $numRecords; $i++) {
            $record = $result->fetch_assoc();
            echo "<li><a href='".$record['url']."'>".$record['name']." - ".$record['description']."</a></li>";
          }
        ?>


      </ul>  
    </div>

    <footer>
      <p>Posted by: Ruoyi Zhan</p>
      <p>Contact information: <a href="zhanr@rpi.edu">zhanr@rpi.edu</a></p>
    </footer>

  </body>
</html>


