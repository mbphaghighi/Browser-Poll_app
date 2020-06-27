<!DOCTYPE html>
<html lang="en">
<head>
    <title>Alert</title>
    <?php require ('../core/Config.php');?>
    <base href="<?= URL ?>">
    <link href="public/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src="public/jquery-3.4.1.min.js"></script>
    <script src="public/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container col-lg-6 mt-2">
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    <p>Thank you for your reply. Your vote has been successfully submitted. you can see the results in the <a href="poll/result">Result Page</a></p>
    <hr>
    </div>
</div>

</body>
</html>