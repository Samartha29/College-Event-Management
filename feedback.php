<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>VESIT EVENTS</title>
        <style>
            .center {
  margin-left: auto;
  margin-right: auto;
}
           .table1 {
            margin: auto;
            font-size: large;
            border: 1px solid black;
            padding: 30px;
            float: centre;
            text-align:centre;
            margin-left:450px;
        }
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            margin: 5px;
            padding: 30px;
            text-align: center;
        }

        td {
            font-weight: lighter;
            padding:50 px;
            margin: 10px;
        }
        tr
        {
            padding:10 px;
            margin: 3px;
        }
        </style>
        <?php require 'utils/styles.php';?>
        <?php
 
 $user = 'root';
 $password = '';

 $database = 'vesitevents';
  
 // Server is localhost with
 // port number 3306
 $servername='localhost:3306';
 $mysqli = new mysqli($servername, $user, $password, $database);
  
 // Checking for connections
 if ($mysqli->connect_error) {
     die('Connect Error (' .
     $mysqli->connect_errno . ') '.
     $mysqli->connect_error);
 }
  
 // SQL query to select data from database
 $sql = " SELECT * FROM feedback_table";
 $result = $mysqli->query($sql);
 $mysqli->close();
 ?>
    
            </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
    <section>
        <table class="center">
            <tr>
                <th>Event Name</th>
                <th>Event ID</th>
                <th>Feedback Link</th>
            </tr>
            <?php
            include 'classes/db1.php';
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['event_name'];?></td>
                <td><?php echo $rows['event_id'];?></td>
                <td><?php echo $rows['feeback_form_link'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html>