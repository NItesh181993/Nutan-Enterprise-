<?php
include_once("config.php");
    

    $costId = $_POST['switch_name'];
        

        $cost_query = "SELECT switch_rate from switches where s_id = '".$costId."'";
        $cost_query_process = mysqli_query($link,$cost_query);
        if (mysqli_num_rows($cost_query_process)>0) {
            while ($row1 = mysqli_fetch_assoc($cost_query_process)) {
        ?>
           <input type="text" name="rate" value="<?php $row1['switch_rate'];?>">
        
<?php }}?>
            
            

            