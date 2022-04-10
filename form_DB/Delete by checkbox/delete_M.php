<?php
if(isset($_REQUEST['delete'])) {
    $check_data=$_REQUEST['delete'];
    $id_seper=implode(",",$check_data);
    echo $id_seper;
}
?>