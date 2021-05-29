<?php

function printValues($arr) {
    global $count;
    global $values;
    
    if(!is_array($arr)){
        die("ERROR: Input is not an array");
    }
    foreach($arr as $key=>$value){
        if(is_array($value)){
            printValues($value);
        } else{
            $values[] = $value;
            $count++;
        }
    }
    return array('total' => $count, 'values' => $values);
}

$json = $jsonapi = file_get_contents('https://v1.nocodeapi.com/nekyltmbrvll/instagram/KsdBulVGoJcmIlPe');
$arr = json_decode($json, true);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Two AP</title>
    </head>
    <body>
    <h1> Two API</h1>
        <div>
           <section>

               <aside>
                <img src="<?php echo $arr["media_url"]["permalink"];?>"/>
                <?php echo "<h3>" . $arr["data"]["id"]["media_type"]["media_url"]["permalink"]["username"]["timestamp"] . "</h3>"; ?>
                </aside>
               
            <?php
            // Print a single value
            echo "<h1>" . $arr["data"]["id"]["media_type"]["media_url"]["permalink"]["username"]["timestamp"] . "</h1>";
            ?>
               
            </section>
        </div>
        <div>
           
    </body>
</html>
