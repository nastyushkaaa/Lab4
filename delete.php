<?php
        if(isset($_GET['id'])){

            $id = $_GET['id'];

            $xml=simplexml_load_file("data.xml");

            $i=0;
            foreach($xml->item as $item){
                if($item['id']==$id){
                    unset($xml->item[$i]);
                    break;
                }
                $i++;
            }
            $xml->saveXML('data.xml');
            echo "<script>location.href='index.php'</script>";
        }
?>