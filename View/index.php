<!DOCTYPE html>
<html lang="en">
<head>
    <title>Browser Poll</title>
    <base href="<?= URL ?>">
    <link href="public/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src="public/jquery-3.4.1.min.js"></script>
    <script src="public/bootstrap.bundle.min.js"></script>
    <script src="Validate.js"></script>

</head>
<body>
<h2  class="col-lg-6" Style="color:blue;margin: auto;">Web Browser Poll</h2>
<div class="container col-lg-6 mt-2 ">
        <p id="p0"></p>
    <form action="poll/getpoll" method="post" onsubmit='return formValidation()'>
        <div class="form-group">
            <label for="exampleFormControlInput1">Your Username</label>
            <input name="username" value="" type="text" class="form-control" id="name" placeholder="Username">
            <p id="p1"></p>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email Address</label>
            <input name="email" value="" type="email" class="form-control" id="email" placeholder="name@example.com">
            <p id="p2"></p>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Your Favorite Browser</label>
            <select name="browser" class="form-control" id="browser">
                <option>Please Choose...</option>
                <option value="Internet Explorer">Internet Explorer</option>
                <option value="FireFox">FireFox</option>
                <option value="Safari">Safari</option>
                <option value="Chrome">Chrome</option>
                <option value="Opera">Opera</option>
                <option value="Konqueror">Konqueror</option>
                <option value="Lynx">Lynx</option>
            </select>
            <p id="p3"></p>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Your Reason Choosing This</label>
            <textarea name="description" class="form-control" id="reason" rows="3"></textarea>
            <p id="p4"></p>
        </div>
        <button class="btn btn-primary btn-sm" style="margin-top: -1rem" type="submit">Submit</button>
    </form>

</div>

</body>
</html>