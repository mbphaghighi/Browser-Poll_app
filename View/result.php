<!DOCTYPE html>
<html lang="en">
<head>
    <title>Results</title>
    <link href="../public/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src="../public/jquery-3.4.1.min.js"></script>
    <script src="../public/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
$poll=$data['pollresults'];
$count=$data['count'];
$total_votes=sizeof($poll);
?>
<div class="container col-lg-4">
<table class="table table-sm mt-4 col-lg-3 table-bordered text-center" style="font-size: .8rem">
    <thead class="table-primary">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Browser</th>
        <th scope="col">Number</th>
        <th scope="col">Percentage</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Internet Explorer</td>
        <td><?php if (isset($count['Internet Explorer'])){echo $count['Internet Explorer'];} else {echo 0;}?></td>
        <td><?php if(isset($count['Internet Explorer'])){echo round($count['Internet Explorer']/$total_votes*100,1).'%';} else{echo 0;}?></td>

    </tr>
    <tr>
        <th scope="row">2</th>
        <td>FireFox</td>
        <td><?php if (isset($count['FireFox'])){echo $count['FireFox'];} else {echo 0;}?></td>
        <td><?php if(isset($count['FireFox'])){echo round($count['FireFox']/$total_votes*100,1).'%';} else{echo 0;}?></td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Safari</td>
        <td><?php if (isset($count['Safari'])){echo $count['Safari'];} else {echo 0;}?></td>
        <td><?php if(isset($count['Safari'])){echo round($count['Safari']/$total_votes*100,1).'%';} else{echo 0;}?></td>
    </tr>
    <tr>
        <th scope="row">4</th>
        <td>Chrome</td>
        <td><?php if (isset($count['Chrome'])){echo $count['Chrome'];} else {echo 0;}?></td>
        <td><?php if(isset($count['Chrome'])){echo round($count['Chrome']/$total_votes*100,1).'%';} else{echo 0;}?></td>
    </tr>
    <tr>
        <th scope="row">5</th>
        <td>Opera</td>
        <td><?php if (isset($count['Opera'])){echo $count['Opera'];} else {echo 0;}?></td>
        <td><?php if(isset($count['Opera'])){echo round($count['Opera']/$total_votes*100,1).'%';} else{echo 0;}?></td>
    </tr>
    <tr>
        <th scope="row">6</th>
        <td>Konqueror</td>
        <td><?php if (isset($count['Konqueror'])){echo $count['Konqueror'];} else {echo 0;}?></td>
        <td><?php if(isset($count['Konqueror'])){echo round($count['Konqueror']/$total_votes*100,1).'%';} else{echo 0;}?></td>
    </tr>
    <tr>
        <th scope="row">7</th>
        <td>Lynx</td>
        <td><?php if (isset($count['Lynx'])){echo $count['Lynx'];} else {echo 0;}?></td>
        <td><?php if(isset($count['Lynx'])){echo round($count['Lynx']/$total_votes*100,1).'%';} else{echo 0;}?></td>
    </tr>
    <tr class="table-success">
        <th scope="row">8</th>
        <td colspan="2">Total Votes</td>
        <td><?=$total_votes?></td>
    </tr>
    </tbody>
</table>
</div>
<div class="container col-lg-10">
<table class="table table-bordered text-center ">
    <thead class="table-secondary">
    <tr>

        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Your Preferred Browser</th>
        <th scope="col">Your Used Browser</th>
        <th scope="col">Reason</th>
        <th scope="col">Date of Voting</th>
    </tr>
    </thead>
    <tbody>
    <?php

    foreach ($poll as $row){
    ?>
    <tr>

        <td><?=$row['username'];?></td>
        <td><?=$row['email'];?></td>
        <td><?=$row['browser'];?></td>
        <td><?=$row['used_browser'];?></td>
        <td class="text-left"><?=$row['description'];?></td>
        <td><?=$row['date_submitted'];?></td>

    </tr>
    </tbody>
    <?php } ?>
</table>
</div>

</body>
</html>