<?php
    $xml=simplexml_load_file("data.xml");
    
    if($_SERVER['REQUEST_METHOD']==='GET'){
        $id=$_GET['id'];

        foreach($xml->item as $item){
            if($item['id']==$id){
                $name = $item->name;
                $img=$item->img;
                break;
            }

        }
    }
        else if($_SERVER['REQUEST_METHOD']==='POST'){
            $id=$_POST['id'];
    
            foreach($xml->item as $item){
                if($item['id']==$id){
                    $item->name=$_POST['newname'];
                    $item->img=$_POST['newimg'];
                    break;
                }
    
            }
        $xml->saveXML("data.xml");
        echo "<script>
        alert('Updated');
        location.href = 'index.php';
        </script>";
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update of information</title>
    </head>
    <body>
    <form action="" method="POST">
    <input type="text" name="newname" value="<?php echo $name ?>">
    <br>
    <input type="text" name="newimg" value="<?php echo $img ?>">

                <!--  -->
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <br>
    <button type="submit" name="submit">Save</button>
</form>
    <a href="index.php">Back</a>
</body>
</html>