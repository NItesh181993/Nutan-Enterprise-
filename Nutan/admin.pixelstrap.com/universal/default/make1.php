<?php
include_once("config.php");
    $rate= $_POST['id'];        
//echo $rate;
//exit;
        $cost_query = "SELECT * from receipe where id = '".$rate."'";
        $cost_query_process = mysqli_query($link,$cost_query);
       
        if (mysqli_num_rows($cost_query_process)>0) {
            while ($row1 = mysqli_fetch_assoc($cost_query_process)) {
        ?>
           <input type="text" name="rate" onchange="getText3()" id="rate" value="<?php echo $row1['grand_total'];?>" style="width:100%;" >

<?php }}?>