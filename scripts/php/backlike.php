 <?php
            include "db.php";
            $one=$_POST['one'];
            $mysqli->query("INSERT INTO test(one) VALUES('$one') ");

?>