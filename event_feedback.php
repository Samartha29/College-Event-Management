<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>VESIT EVENTS</title>
        <title></title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        
    </head>
    <body>
    <?php require 'utils/adminHeader.php'; ?>
  <form method="POST">
  
  <div class="w3-container"> 
  
  <div class ="content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                <label>Event ID:</label><br>
    <input type="number" name="event_id" required class="form-control"><br><br>
    
    <label>Event Name:</label><br>
    <input type="varchar" name="event_name" required class="form-control"><br><br>

    <label>Feedback Link :</label><br>
    <input type="varchar" name="feedback_link" required class="form-control"><br><br>


    <button type="submit" name="feedbackupdate" class = "btn btn-default pull-right">Create Feeback Form <span class="glyphicon glyphicon-send"></span></button>

  
  </div></div></div>
  </form>
    

    
    </body>
    <?php require 'utils/footer.php'; ?>
</html>

<?php

  if (isset($_POST["feedbackupdate"]))
  {
    $event_id=$_POST["event_id"];
    $event_name=$_POST["event_name"];
    $feedback_link=$_POST["feedback_link"];
    var_dump($feedback_link);
    $INSERT="INSERT INTO `feedback_table` (event_name,event_id, feeback_form_link) VALUES(event_name,$event_id,event_name);";
    if(!empty($event_id) || !empty($event_name) || !empty($feedback_link))
    {
      include 'classes/db1.php';  
        
        if($conn->query($INSERT)===True){
          echo "<script>
          alert('Feedbackssssssssssssssssssssssssss Inserted Successfully!');
          window.location.href='event_feedback.php';
          </script>";
        }
        else
        {
          echo"<script>
          alert('Feedbackssssssssssssssssss already exists!');
          window.location.href='event_feedback.php';
          </script>";
        }
     
        $conn->close();
      
    }
    else
    {
      echo"<script>
      alert('All fields are required');
      window.location.href='event_feedback.php';
      </script>";
    }
  }
?>