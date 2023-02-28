<?php
require_once('connection.php');
try {
    if (isset($_POST['task'])){
        register( $_POST['task'], $_POST['description']);
        die();
    }

} catch (Exception $e) {
    echo $e->getMessage();
}
function register($name, $desc)
{
    global $connection;
    if (isset($name)) {
        $sql = $connection->query("INSERT INTO `tasks`( `task`, `description`) VALUES ('$name','$desc')");
        $number_of_rows = $sql->rowCount();
        if ($number_of_rows > 0)
            header("LOCATION: index.php");
    }

}