<?php
class model_poll extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getPoll($data)
    {
        $using_browser = $this->getUserBrowser();
        $name = $_POST['username'];
        $email = $_POST['email'];
        $browser = $_POST['browser'];
        $description = $_POST['description'];
        $time = time();
        $date = date("F j, Y, g:i a", $time);
        $content="<h2>Hello $name</h2>
<p>Your vote has been successfully submitted. Your vote is : <strong>$browser</strong> </br> and your reason is:<strong>$description</strong> </p>";
        $this->sendEmail($email,$name,$content);
        $sql = 'select * from tbl_poll where email=?';
        $check = $this->doSelect($sql, [$email]);
        if (!empty($check)) {
            $sql = 'update tbl_poll set username=?, browser=?, description=?, time_submitted=?, date_submitted=?, used_browser=? where email=?';
            $params = [$name, $browser, $description, $time, $date, $using_browser, $email];
        } else {
            $sql = 'insert into tbl_poll (username,email,browser,description,time_submitted,date_submitted,used_browser) VALUES (?,?,?,?,?,?,?)';
            $params = [$name, $email, $browser, $description, $time, $date, $using_browser];
        }

        $result = $this->doQuery($sql, $params);
    }

    function showResults()
    {
        $sql = 'select * from tbl_poll ORDER BY time_submitted desc ';
        $result = $this->doSelect($sql);
        return $result;
    }

    function count()
    {
        $sql = 'SELECT count(*), browser FROM tbl_poll WHERE browser IN ( \'Internet Explorer\', \'FireFox\',                          \'Safari\',\'Chrome\',\'Opera\',\'Konqueror\',\'Lynx\')GROUP BY browser ORDER by time_submitted desc';
        $result = $this->doSelect($sql);
        $array = [];
        foreach ($result as $row) {
            $count = $row['count(*)'];
            $browser = $row['browser'];
            $array[$browser] = $count;
        }
        return $array;

    }

}