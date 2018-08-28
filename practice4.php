<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    //define a string
    
    $str = "    this is a string   with   lots of   embedd whitespace   ";
    
    // trim the whitespace at the ends of the string
    // compress the whitespace in the middle of the string
    
    // result: " this"
    
    $newStr = ereg_replace('[[:space:]] +', ' ', trim($str));
    
    echo $newStr;
    
    ?>
    
    
    
    
    
</body>


</html>