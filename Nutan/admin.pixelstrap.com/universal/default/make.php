<?php
include_once("config.php");
    $countryId = $_POST["item_id"];
        $states_result = "select * from make where type_id = '".$countryId."'";
        $result = mysqli_query($link,$states_result);
    ?>
        <select>
        <option>Select Item</option>;
        <?php
        while($row = mysqli_fetch_assoc($result)) {
            ?>
            <option value="<?php echo $row['id'];?>"><?php echo $row['make_name'];?></option>;
        <?php $name=$row['make_name']; }?>
            </select>