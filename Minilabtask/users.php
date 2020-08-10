<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER</title>
</head>
<body>
    <table border="2px">
    <?php 
        $file = fopen("data.txt","r");

        while(! feof($file))
        {
        
            echo '<tr>';
            $data = explode("-",fgets($file));

            if(!empty($data[0])){
            echo '<td>' . $data[0] . '</td>' ;
            echo '<td>' . $data[1] . '</td>' ;
            echo '<td>' . $data[2] . '</td>' ;
            echo '<td>' . $data[3] . '</td>' ;
            echo '<td>' . $data[4] . '</td>' ;
            echo '<td>' . $data[5] . '</td>' ;
            echo '<td>' . $data[6] . '</td>' ;
            echo '<td>' . $data[7] . '</td>' ;
            }
            

            echo '</tr>';
           
        }
    
        fclose($file);
    
    ?>
    
    </table>
</body>
</html>