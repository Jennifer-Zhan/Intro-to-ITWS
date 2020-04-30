<?php
  $dbOk = false;
  @ $db = new mysqli('localhost', 'root', '', 'myIntroProjects');
  
  if ($db->connect_error) {
    echo '<div class="messages">Could not connect to the database. Error: ';
    echo $db->connect_errno . ' - ' . $db->connect_error . '</div>';
  } else {
    $dbOk = true; 
  }

  $havePost = isset($_POST["save"]);
  
  $errors = '';
  if ($havePost) {
    
    $name = htmlspecialchars(trim($_POST["name"]));  
    $description = htmlspecialchars(trim($_POST["description"]));
    $url = htmlspecialchars(trim($_POST["url"]));
    
    $focusId = ''; 
    if ($name == '') {
      $errors .= '<li>Lab name may not be blank</li>';
      if ($focusId == '') $focusId = '#name';
    }
    if ($description == '') {
      $errors .= '<li>Lab description may not be blank</li>';
      if ($focusId == '') $focusId = '#description';
    }
    if ($url == '') {
      $errors .= '<li>Lab url may not be blank</li>';
      if ($focusId == '') $focusId = '#url';
    }
  
    if ($errors != '') {
      echo '<div class="messages"><h4>Please correct the following errors:</h4><ul>';
      echo $errors;
      echo '</ul></div>';
      echo '<script type="text/javascript">';
      echo '  $(document).ready(function() {';
      echo '    $("' . $focusId . '").focus();';
      echo '  });';
      echo '</script>';
    } else { 
      if ($dbOk) {
        $name = trim($_POST["name"]);  
        $description = trim($_POST["description"]);
        $url = trim($_POST["url"]);
        
        $insQuery = "insert into projectList (`name`,`description`,`url`) values(?,?,?)";
        $statement = $db->prepare($insQuery);
        $statement->bind_param("sss",$name,$description,$url);
        $statement->execute();
        
        echo '<div class="messages"><h4>Success: ' . $statement->affected_rows . ' lab added to database.</h4>';
        echo $name . ' ' . $description . ' ' . $url . '</div>';
        
        $statement->close();
      }
    } 
  }
?>   

<h3>Add Lab</h3>
<form id="addForm" name="addForm" action="index.php" method="post" onsubmit="return validate(this);">
  <fieldset> 
    <div class="formData">
                    
      <label class="field" for="name">Lab Name: (eg, Lab 5)</label>
      <div class="value"><input type="text" size="50" value="<?php if($havePost && $errors != '') { echo $name; } ?>" name="name" id="name"/></div>
      
      <label class="field" for="description">Lab Description:</label>
      <div class="value"><input type="text" size="50" value="<?php if($havePost && $errors != '') { echo $description; } ?>" name="description" id="description"/></div>
      
      <label class="field" for="url">Lab URL:</label>
      <div class="value"><input type="text" size="50" maxlength="50" value="<?php if($havePost && $errors != '') { echo $url; } ?>" name="url" id="url"/></div>
      
      <input type="submit" value="save" id="save" name="save"/>
    </div>
  </fieldset>
</form>
    