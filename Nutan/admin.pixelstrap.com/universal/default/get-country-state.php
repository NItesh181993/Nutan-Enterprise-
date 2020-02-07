<?php
include_once("config.php");
    

    $rate= $_POST['s_id'];        
//echo $rate;
//exit;
        $cost_query = "SELECT switch_rate from switches where s_id = '".$rate."'";
        //echo $cost_query;exit;
        $cost_query_process = mysqli_query($link,$cost_query);
        //var_dump($cost_query_process);
        //exit;
        if (mysqli_num_rows($cost_query_process)>0) {
            while ($row1 = mysqli_fetch_assoc($cost_query_process)) {
        ?>
           <input type="text" name="rate" onchange="getText3()" id="rate" value="<?php echo $row1['switch_rate'];?>" style="width: 120px;" >
        
<?php }}?>
            
            

            
