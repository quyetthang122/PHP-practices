<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    function truncateString($str, $maxChars = 40, $holder="..."){
    // check string length
    // truncate if necessasy
        
    if(strlen($str) > $maxChars) {
        
        return trim(substr($str, 0, $maxChars)) .$holder;
    }
    else{
        
        return $str;
        }
    
    }
    
    $str = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type speci";
    
    
    
    echo truncateString($str);
    
    
    ?>
    
    
    
    
    
    
    
</body>


</html>