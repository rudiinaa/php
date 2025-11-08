<?php 

$arrays = array(
    array(1,2,3),
    array(1,2,3),
    array(1,2,3)
);

$users = array(
    array("Rudina","16","Prishtine"),
    array("Liza","16","Prishtine"),
    array("Yll","16","Prishtine")
);


/*for($i=1; $i<4; $i++){

    echo " <br> hello". "<br> <br>";
    for($e=1; $e<4; $e++){
        echo "kjo eshte loopa brenda loopes edhe ka me u perserit 3 her <br>";
    }
}
*/

 for($i=0; $i<3; $i++){

    
    for($e=0; $e<3; $e++){
        echo $users[$i][$e];
    }
    echo "<br>";
}



?>