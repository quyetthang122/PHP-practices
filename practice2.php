<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    //define a string
    
    $str = "define a string";
    
    //check if string is empty
    
    //result = " Empty"
    
//    echo (!isset($str) || trim($str) == "") ? "Empty" : "Not empty";
   
    
    if(isset($str) || trim($str) == ""){
        
        echo "define";
    }
    else {
        
        echo "no define";
    }
    
    
    ?>
    
    
    
</body>


</html>