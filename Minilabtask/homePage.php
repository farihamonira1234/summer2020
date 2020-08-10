<?php 
    
    if(!isset($_COOKIE['status'])){
        header('location: Regpage.php?error=youAreNotLoggedIn');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    
    <?php 

        $name ="";
        $userType="";
        $file = fopen("data.txt","r");

        while(! feof($file))
        {
          
            $data = explode("|",fgets($file));
            
            if(!empty($data[0])){
                if($data[0]==$_COOKIE['id']){
                    global $name;
                    global $userType;
                    $name=$data[8];
                    $userType=$data[8];    
                }
            }
           
        }
    
        fclose($file);
    
    ?>
    <h1>Welcome To You <?php echo $name?></h1>
    <h1>Congratualation <?php echo $name?></h1>

    
</body>
</html>