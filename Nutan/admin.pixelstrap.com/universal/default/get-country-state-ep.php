<?php
include_once("config.php");
    
    $countryId = $_POST["item_id"];

        $states_result = "select * from switches where switch_id = '".$countryId."'";
        $result = mysqli_query($link,$states_result);

        

        
    ?>
        <select>
        <option>Select Item</option>;
        <?php
        while($row = mysqli_fetch_assoc($result)) {
            ?>
            <option value="<?php echo $row['switch_id'];?>"><?php echo $row['switch_name'];?></option>;
        <?php }?>

            </select>

            