<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userdata</title>
</head>
<body>

<?php
if(isset($_POST['submit'])){

    //variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    
    $data = [$name,$email,$dob,$gender,$country,"\n"];
      
    $f = fopen("userdata.csv","a");//prints the fata in a csv file "a" writes the data and does not overwrite
    if($f)
    {
        fputcsv($f, $data);
        fclose($f);
        echo '<script type="text/javascript"> alert(" Thank you,Details saved!") </script>';

        print_r($data);
    }
    else{
        echo '<script type="text/javascript"> alert("Details not saved!") </script>';
    }

}
?>    
</body>
</html>
