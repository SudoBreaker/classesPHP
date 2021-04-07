<?php
   declare(strict_types = 1);
   include 'includes/autoloader.inc.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    try{
       $person = new Person("linc","Brown", 23);
       $person->setName(1);
       echo $person->getName();
    }catch(typeError $e){
        echo "Error: ".$e->getMessage();
    }
       
    ?> 
</body>
</html>