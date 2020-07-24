<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="../PaymentGatwayNeel/style.css">
</head>
<body>
        <?php
include('db.php');
$ORDERID=$_POST["ORDER_ID"];
$EMAIL=$_POST['EMAIL'];
$PHONE=$_POST['PHONE'];
$sql="SELECT * FROM `admin_details` WHERE `ORDERID`='$ORDERID'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$sql1="SELECT * FROM `payment_details` WHERE `email` = '$EMAIL' AND `msi_sdn`=$PHONE ";
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($result1);
if(!$row) {
    echo "No Details Available";
}else{
    if($row['STATUS']=='TXN_SUCCESS'){
    $eventId=str_split($row['ORDERID']);
    if($eventId[0]==1){
        $eventName='event1';
    }elseif ($eventId[0]==2) {
        $eventName='event2';
    }elseif ($eventId[0]==3) {
        $eventName='event3';
    }elseif ($eventId[0]==4) {
        $eventName='event4';
    }
        ?>
        <table border="0">
            <tbody>
                <tr>
                    <td><label>TXNAMOUNT::</label></td>
                    <td><input id="TXNAMOUNT" tabindex="1" maxlength="20" size="20" name="TXNAMOUNT" autocomplete="off" value="<?= $row['TXNAMOUNT'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <td><label>TXNDATE::</label></td>
                    <td><input id="TXNDATE" tabindex="1" maxlength="64" size="20" name="TXNDATE" autocomplete="off" value="<?= $row['TXNDATE'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <td><label>STATUS::*</label></td>
                    <td><input id="STATUS" tabindex="1" maxlength="10" size="20" name="PHONE" autocomplete="off" value="<?= $row['STATUS'] ?>" required>
                    </td>
                </tr>
               <tr>
                    <td><label>Event::</label></td>
                    <td><input id="EVENT" tabindex="1" maxlength="20" size="20" name="TXNAMOUNT" autocomplete="off" value="<?= $eventName; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td><label>ORDERID::</label></td>
                    <td><input id="ORDERID" tabindex="1" maxlength="20" size="20" name="ORDERID" autocomplete="off" value="<?= $row1['order_id'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><br>
                        <a type="submit" class="status" href="dash.php" style="font-size: 20px;">Back To Dashboard</a></td>
                </tr>
                <tr>
                    <td></td>
                    <td><br>
                        <a type="submit" class="status" href="logout.php" style="font-size: 20px;">Logout</a></td>
                </tr>
            </tbody>
        </table>
                <?php
}else{
    echo "You haven`t done the payment";
}
}

?>
</body>
</html>
