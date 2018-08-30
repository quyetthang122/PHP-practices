<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    if($_FILE["file"]["error"] == 0){
        
        
        move_uploaded_file($_FILE["file"]["tmp_name"],"upload/" .$FILE["file"]["name"]);
        
        echo "Store in:" . "upload/" .$_FILE["file"]["name"];
    }
    
    ?>
    
    
    
    
    
    
    
</body>


</html>