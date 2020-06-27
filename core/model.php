<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Model
{
    public static $connection = '';

    function __construct()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = 'bagH2018';
        $dbname = 'test_poll';
        self::$connection = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname, $username, $password);
        self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql='CREATE TABLE IF NOT EXISTS tbl_poll2(
        id  INT(20)  PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(30)  NOT NULL,
        email VARCHAR(40)  NOT NULL,
        browser VARCHAR (20)  NOT NULL,
        descripton text(1000)  NOT NULL       
       );';
        $stmt = self::$connection->prepare($sql);
        $stmt->execute();
    }

    function doSelect($sql, $values = [], $fetch = '', $fetchStyle = PDO::FETCH_ASSOC)
    {

        $stmt = self::$connection->prepare($sql);
        foreach ($values as $key => $value) {
            $stmt->bindValue($key + 1, $value);
        }
        $stmt->execute();
        if ($fetch == '') {
            $result = $stmt->fetchAll($fetchStyle);
        } else {
            $result = $stmt->fetch($fetchStyle);
        }
        return $result;
    }

    function doQuery($sql, $values = [])
    {

        $stmt = self::$connection->prepare($sql);
        foreach ($values as $key => $value) {
            $stmt->bindValue($key + 1, $value);
        }
        $stmt->execute();
        return $stmt;
    }
    function getUserBrowser()
    {
        $fullUserBrowser = (!empty($_SERVER['HTTP_USER_AGENT']) ?
            $_SERVER['HTTP_USER_AGENT'] : getenv('HTTP_USER_AGENT'));
        $userBrowser = explode(')', $fullUserBrowser);
        $userBrowser = $userBrowser[count($userBrowser) - 1];

        if ((!$userBrowser || $userBrowser === '' || $userBrowser === ' ' || strpos($userBrowser, 'like Gecko') === 1) && strpos($fullUserBrowser, 'Windows') !== false) {
            return 'Internet-Explorer';
        } else if ((strpos($userBrowser, 'Edge/') !== false || strpos($userBrowser, 'Edg/') !== false) && strpos($fullUserBrowser, 'Windows') !== false) {
            return 'Microsoft-Edge';
        } else if (strpos($userBrowser, 'Chrome/') === 1 || strpos($userBrowser, 'CriOS/') === 1) {
            return 'Google-Chrome';
        } else if (strpos($userBrowser, 'Firefox/') !== false || strpos($userBrowser, 'FxiOS/') !== false) {
            return 'Mozilla-Firefox';
        } else if (strpos($userBrowser, 'Safari/') !== false && strpos($fullUserBrowser, 'Mac') !== false) {
            return 'Safari';
        } else if (strpos($userBrowser, 'OPR/') !== false && strpos($fullUserBrowser, 'Opera Mini') !== false) {
            return 'Opera-Mini';
        } else if (strpos($userBrowser, 'OPR/') !== false) {
            return 'Opera';
        }
        return false;

        return getUserBrowser();
    }


    function sendEmail($emailAddress,$name,$mailContent){
        require("PHPMailer.php");
        require("Exception.php");
        require("SMTP.php");
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        // $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->SMTPDebug = 1;
        $mail->SMTPAuth = true;
        $mail->Username = 'justfortestbb8185@gmail.com';
        $mail->Password = 'bagH2022';
        $mail->SetFrom('justfortestbb8185@gmail.com', 'mehdibb');
        //$mail->AddReplyTo('mbph471@gmail.com', 'mehdi');
        $mail->AddAddress($emailAddress, $name);
        $mail->isHTML(true);
        $mail->Subject = 'The Browser Poll Confirmation Email';
        $mail->Body = $mailContent;
        //for attach a html file to email!
        //$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
        if($mail->send()){
            echo 'Message has been sent';
        }else {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }

}