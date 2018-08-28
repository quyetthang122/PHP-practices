<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
    
    // define a string
    
    $rhyme = " And all the king's men couldn't put him together again";
    
    // Uppercase entire string
    
    // result = "UPPERCASE" 
    
    $ucstr = strtoupper($rhyme);
    
    echo $ucstr;
    
    
    //lowercase entire string
    
    // result: " lowercase"
    
    $lcstr = strtolower($ucstr);
    
    
    echo $lcstr;
    
?>



</body>
</html>