<?php
$username1=$_POST['suggest'];
echo "id_delete : ".$id_delete;
$servername = "localhost";
$username = "mehrdadw_root";
$password = "mehrdad";
$dbname = "mehrdadw_linkDB";
    
// Create connection
$conn = new mysqli($servername, $username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql1 = "SELECT * FROM UserLinks WHERE id='$id_delete'";
$conn->query($sql1)
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();
    $username1 = $row1['username'];
    echo "username : ".$username1;

    echo "Error deleting record: " . $conn->error;
   
$conn->close();
?>  
<!DOCTYPE html>
<!--<html lang="en">  English -->
<html lang="fa">
<head>
    <meta name="author" content="Mehrdad Mohammadi" />
    <title>Mehrdad Mohammadi</title>
    <link rel="stylesheet" href="/css/usertable.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="jquery-3.5.1.min.js"></script>
    <script type="application/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/jquery-1.8.1.js"></script>
    <script language="javascript" type="text/javascript" src="http://mehrdadweb.ir/registration/register.js"></script>
    <script language="javascript" type="text/javascript" src="index.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<table class="table pre-scrollable table-bordered table-hover" id="mytable">
                        <thead class="thead-dark">
                            <tr>
                              <th>Delete</th>  
                              <th>ID</th>
                              <th>Usename</th>
                              <th>Link</th>
                              <th>Shortlink</th>
                            </tr>
                        </thead>
                        <tbody class="table-info">
                            <?php
                            
                                $servername = "localhost";
                                $username = "mehrdadw_root";
                                $password = "mehrdad";
                                $dbname = "mehrdadw_linkDB";
                                
                                // Create connection
                                $conn = new mysqli($servername, $username,$password,$dbname);
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }        
                            $sql = "SELECT * FROM UserLinks WHERE username='$username1'";
                            $result = $conn->query($sql);
                             if ($result->num_rows > 0){
                            while($row = ($result->fetch_assoc()))
                            {
                               
                              echo "<tr>";
                              echo "<td style='width: 6%;'>".
                                        " 
                                        <input  type='checkbox' value='".$row['id']."' id='".$row['id']."' name='".$row['id']."'>
                                        <label  for='".$row['id']."'><img class='d-inline' src='/images/input-cross.png' alt='error' width='10' height='10'></label>
                                        " 
                                    ."</td>";
                              echo "<td>". $row['id'] . "</td>";
                              echo "<td>" . $row['username'] . "</td>";
                              echo "<td>" . $row['link'] . "</td>";
                              echo "<td>" . $row['shortlink'] . "</td>";
                              echo "<td>" . $row['datetime'] . "</td>";
                              echo "</tr>";
                            }
                           // echo "</table>"; "<input type='checkbox' value='deleted' id='mycheckbox' name='mycheckbox'>" 
                            
                            }
                            $conn->close();
                            ?>
                        </tbody>
                        <tr>
                            <input class="ml-2" type='checkbox' value='alldeleted' id='allcheckbox' name='allcheckbox'>
                            <label for="allcheckbox">Delete All Rows</label>     
                        </tr>
                    </table>  
</body>
</html>