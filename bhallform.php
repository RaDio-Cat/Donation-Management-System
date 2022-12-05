<?php
 include 'connect.php';
 if(isset($_POST['submit_form'])){


    $bname = $_POST['bname'];
    $eimage = $_POST['eimage'];
    $ename = $_POST['ename'];
    $elocation = $_POST['elocation'];
    $etype = $_POST['etype'];
    $bacc = $_POST['bacc'];
    $odate = $_POST['odate'];
    $cdate = $_POST['cdate'];
    $raddress = $_POST['raddress'];
    $code = $_POST['code'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    

    $sql="INSERT INTO events (bname, eimage, ename, elocation, etype, bacc, odate, cdate, raddress, code, email, phone)
    values('$bname','$eimage','$ename','$elocation','$etype','$bacc','$odate','$cdate','$raddress','$code','$email','$phone')";
    $result=mysqli_query($con,$sql);
    //header("Loaction: event.php");
   
    if($result){
        //header("Loaction: event.php");
        echo "data inserted";
    } else{
        die(mysqli_error($conn));
    }
 }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bhallform.css">
</head>
<style>
    .myDiv {
        border: 5px outset black;
        background-color: lightskyblue;
    }
</style>

<body>
    <h2>NIB Gift Table</h2>

    <form action="" method="post">
        <fieldset>
            <legend>Personal Information</legend>
            <label for="bname"> Beneficiary name:</label><br>
            <input type="text" name="bname">
            <label for="image">Image:</label>
            <input class="file-upload-input" name="eimage" type="file" onchange="readURL(this)" accept="Image/*" name="image">
            <label for="ename"> Event Name:</label>
            <input type="text" name="ename">
            <label for="elocation"> Event Location:</label>
            <input type="text" name="elocation">

            <label for="etype"> Event Type: </label>
            <select name="etype" id="etype">
                <option value="">Birthday</option>
                <option value="">Funeral</option>
                <option value="">Fundraiser</option>
            </select>

            <label for="bacc">Beneficiary Account Number: </label>
            <input type="text" name="bacc">
            <label for="odate">Opening Date: </label>
            <input type="date" name="odate">
            <label for="cdate">Closing Date: </label>
             <input type="date" name="cdate">
        </fieldset><br>

        <fieldset>
            <legend>Contact Details</legend>
            <label for="raddress">Residential Address: </label>
            <input type="text" name="raddress">
            <label for="code">Digital Address: </label>
            <input type="text" name="code">
            <label for="email"> Email: </label>
            <input type="text" name="email" placeholder="person@example.com">
            <label for="phone">Phone: </label>
            <input type="tel" name="phone" >
        </fieldset><br>


        <input type="submit" name="submit_form" value="SUBMIT">
    </form>


</body>

</html>