<?php
@include('configClass.php');
include('otherFunctions.php');

class Session{

    function __construct(){

    }

    static function startSession(){//to start a session
        @session_start();
    }

    static function destroySession(){// to destroy all sessions
        @session_destroy();
    }

    static function startOneSession($name, $value){// to store a particular session
        $_SESSION[$name] = $value;
        return $_SESSION[$name];
    }
    static function stopOneSession($name){// to unset a particular session
        unset($_SESSION[$name]);
    }
    static function startStopSession($name){
        echo (isset($_SESSION[$name]))? $_SESSION[$name]: '';
        self::stopOneSession($name);
    }
    static function sessionValue($name, $key){
        return $_SESSION[$name][$key];
    }
    static function checkSession($name){
        return isset($_SESSION[$name]) ?: false;
    }
}



class DatabaseQuery{

    function __construct(){

    }

    public static function createDatabase($table){
        global $conn;
        try {
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );//Error Handling
             $sql ="CREATE table $table(
             id INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
             yesterdayWork VARCHAR( 255 ) NOT NULL,
             todayWork  VARCHAR( 255 ) NOT NULL,
             challenges  VARCHAR( 255 ) NOT NULL,
             time  VARCHAR( 255 ) NOT NULL,
             challengesEffect  VARCHAR( 255 ) NOT NULL,
             name  VARCHAR( 255 ) NOT NULL);" ;
             $conn->exec($sql);
             return true;

        } catch(PDOException $e) {
            return false;
        }
    }
    public static function insert($table, $columns, $notations, $values){
        global $conn;
        try{
            $sql = "INSERT INTO $table ($columns) VALUES($notations)";
        $query = $conn->prepare($sql);
        $query->execute($values);
        return ($query->rowCount() > 0) ? true : false;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }

    }

    public static function update($table, $valueToSet, $whereToSet){
        global $conn;
        try{
            $count=$conn->prepare("update ". $table ." set ". $valueToSet ." where ". $whereToSet);
            $count->execute();
            return ($count->rowCount()) ? true : false;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public static function select($table, $whatToSelect, $condition, $type){
        global $conn;
        $condition = ($condition == "") ? $condition : "WHERE ".$condition;
        try{

            $sql = "SELECT ". $whatToSelect ." FROM ". $table ." ". $condition;
            $select_query = $conn->query($sql) or die ('No table found');
            if($type == "s") {
                $sql = "SELECT ". $whatToSelect ." FROM ". $table ." ". $condition;
                $select_query = $conn->query($sql) or die ('No table found');
                return $select_query->fetch(PDO::FETCH_ASSOC);
            }
            else if($type == "m") {
                $sql = "SELECT ". $whatToSelect ." FROM ". $table ." ". $condition;
                $select_query = $conn->query($sql) or die ('No table found');
                return $select_query->fetchAll(PDO::FETCH_ASSOC);
            }
            else{
                $sql = "SELECT ". $whatToSelect ." FROM ". $table ." ". $condition . " ". $type;
                $select_query = $conn->query($sql) or die ('No table found');
                return $select_query->fetch(PDO::FETCH_ASSOC);
            }

        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public static function delete($table, $condition){
        global $conn;
        $sql = "DELETE FROM ".$table." WHERE $condition";
        $q = $conn->prepare($sql);

        $response = $q->execute();
        return ($response) ? true : false;
    }
}


class Login extends DatabaseQuery{
    var $encryptedPassword;
    function __construct($email, $password){
        $this->email = $email;
        $this->password = $password;
    }
    function encryptPassword(){
        $encryptedPassword = md5($this->password);
        return $encryptedPassword;
    }
    function authenticate($table, $loggedInUrl){
        $status = parent::select("$table", '*', 'WHERE email="'.$this->email. '" && password="'. $this->encryptPassword().'"', 's');
        if($status){
            //print_r($status);
            Session::startSession();
            Session::startOneSession($table, $status);
            redirect($loggedInUrl);
        }
    }
    function failedLogin($session, $value, $url){
        Session::startOneSession($session, $value);
        redirect($url);
    }
    static function isLoggedIn($user){
        return Session::checkSession($user);
    }
}

class SignUp extends DatabaseQuery{
    function __construct($password){
        $this->password = $password;
    }
       function encryptPassword(){
        $encryptedPassword = md5($this->password);
        return $encryptedPassword;
    }

    function register($table, $columns, $notations, $values){
        $insertUser = parent::insert($table, $columns, $notations, $values);
        return $insertUser;
    }
    function failedRegistration($session, $value, $url){
        Session::startOneSession($session, $value);
        redirect($url);
    }
    function successfulRegistration($session, $value, $url){
        Session::startOneSession($session, $value);
        redirect($url);
    }
}



class SendEmail{
    static function sendMail($to, $subject, $message, $from){
        $headers = $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: WORKLINE <'.$from. ">\r\n" .
            'Reply-To: info@workline.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if (@mail($to, $subject, $message, $headers)){
            return true;
        }
        else{
            return false;
        }

    }
}

class verifyContact extends DatabaseQuery{
    function __construct($email, $url){
        $this->email = $email;
        $this->url = $url;
    }
    function verify($type, $message, $code){
        ($type=='2') ? self::verifyEmail($message, $code) : (($type=='5') ? self::verifyPhone() : redirect('my_page'));
    }
    function verifyEmail($message, $code){
         $status = parent::select('user', 'email_status', 'WHERE email="'.$this->email.'"', 's');
         if($status['email_status']=='1'){
             $_SESSION['user']['email_status'] = '1';
             echo '<script language="javascript">window.alert("You have already verified your email"); window.location.href="my_page.php";</script>';
         }
         else{
            $verify = parent::update('user', "email_status='".$code."'", "email='".$this->email."'");
            if($verify===true){
                if(@mail::sendMail($this->email, 'Email Address Verification', $message, 'info@wealthaidproviders.com')){
                    echo '<script language="javascript">window.alert("A verification link has been sent to your email"); window.location.href = "my_page.php";</script>';
                }
            }
         }
    }
    function verifyEmailCode($sentCode){
        $databaseCode = parent::select('user', 'email_status', 'WHERE email="'.$this->email.'"', 's');
        if($databaseCode['email_status'] == $sentCode){
            parent::update('user', "email_status=1", "email='".$this->email."'");
            $_SESSION['user']['email_status'] = '1';
            echo '<script language="javascript">window.alert("Verification successful."); window.location.href = "my_page.php";</script>';

        }
        else{
            echo '<script language="javascript">window.alert("An error occured, try again."); window.location.href = "my_page.php";</script>';
        }
    }


    function verifyPhone(){
        $verify = parent::update('user', "phone_status=1", "email='".$this->email."'");
        ($verify==true) ? $_SESSION['user']['phone_status'] = '1' : redirect($this->url);
        redirect($this->url);
    }
}