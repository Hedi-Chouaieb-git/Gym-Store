
<html lang="en">
<head>
    
    <link rel="stylesheet" href="../css/vprix.css">
    
    <title>Confirm Comonde</title>
</head>
<body>
  


<a href="../index.html"><img class='hm' src="../img/hm.png" alt="" srcset=""></a>

<div class='fp'>

    <table>
    <tr>
        <td class="inf"> <p>
    Hello sir <?php echo $nm ?> <?php echo $prn ?> <br>
    Your request has been received and is now being processed.<br>
    Information about your order:
    </p></td>
    </tr>

    <tr>
        <td>Name:</td>
        <td><?php echo $nm ?></td>

    </tr>   
    <tr>
        <td>Last-Name:</td>
        <td><?php echo $prn ?></td>
    </tr>
<tr>
    <td>Product:</td>
    <td><?php echo $pd ?></td>
</tr>

<tr>
    <td>Number of pruduct:</td>
    <td><?php echo$nbp ?></td>
</tr>
<tr>
    <td>Totale:</td>
    <td><?php echo $sm ?></td>
</tr>
    </table>

    </div>
</body>
</html>