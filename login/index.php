<?php
session_start();
class db

{
    public  $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "login";
    public $conn = "";
    public $result = "";
    public $name = "";



    function __construct()
        {
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        }


    function insert($username, $email, $password)
        {
            $check = "SELECT * FROM `lo`  WHERE username ='$email'";
            $queryy = $this->conn->query($check);
            $this->result = $queryy->fetch_all(MYSQLI_ASSOC);
            $resultt=mysqli_num_rows($queryy);
            
            if ($resultt>0) {
                $_SESSION['already']= "Email Already Exist";
        }
        else 
            { 
                $sql = "INSERT INTO `lo` VALUES ('','$username','$email','$password')";
                $query = $this->conn->query($sql);
                if ($query) {
                    header("location:login.php");
                    $_SESSION['ss'] = "Register Successfully ";
                } else {
                    $_SESSION['s']= "  Registration Failed";
                }
            
            }
}
    //  ***********************  Login *****************   

    function select($email, $pass)
    {
        if (empty($email) OR empty($pass)) 
            {
                $_SESSION['cookie_email']=$email;
                $_SESSION['cookie_pass']=$pass;

                $_SESSION['enter']="Enter Email And Password'";
            }
     
      else
        {
            
            
                $sql = "SELECT * FROM `lo`  WHERE username ='$email' AND  password ='$pass'";
                $query = $this->conn->query($sql);
                $this->result = $query->fetch_all(MYSQLI_ASSOC);
            


            if ($this->result) 
                { 
                    if(isset($_POST['checkbox']))
                    {
                    $_SESSION['name'] = $email;
                    header("location:welcome.php ");
                    $p = $_SESSION['name'];
                    setcookie("Email",$email,time()+86400*(7),"/");
                    setcookie("Pass",$pass,time()+86400*(7),"/");
                     }
                     else
                     {
                        $_SESSION['name'] = $email;
                        header("location:welcome.php ");
                        $p = $_SESSION['name'];
                     }
                } 
            else
                {
                
                    $_SESSION['s']="Email Id And Password Does't Match";         
                }
            }
           
    }
}

    
    





// ********************* retrive name from db ***************
class select extends db
{

    function __construct()
        {
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        }

    function selectbyid($email)
        {
            $result = mysqli_query($this->conn, "SELECT  `name` FROM `lo` WHERE username='$email'");
            return mysqli_fetch_assoc($result);
        }
function checkbox($user="Email",$email,$password="Pass",$pass)
        {
             setcookie($user,$email,time()+30,"/");
             
            setcookie($password,$pass,time()+86450,"/");
           
        }


    function __destruct()
        {
            mysqli_close($this->conn);
        }
}

