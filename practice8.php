<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <?php
    // define variable
    
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    
    $resutl = $conn->query($sql);
    
    if($result->num-rows>0){
        
        // output data of each row
        
        while($row = $result->fetch_assoc()){
            
            echo "id: " . row["id"]. "-Name" .$row["firstname"]." ". $row["lastname"]."<br>";
        }
        else{
            
            echo "0 results";
        }
        
    }

    
    
    ?>
    
    
    
    
    
    
    
</body>


</html>