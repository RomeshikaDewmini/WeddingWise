<?php

include 'user/lib/Database.php';

class Users
{


  // Db Property
  private $db;

  // Db __construct Method
  public function __construct()
  {
    $this->db = new Database();
  }

  // User login Authentication Method
  public function userLoginAuth($email, $password)
  {
    $password = SHA1($password);
    $sql = "SELECT * FROM users WHERE email = :email and password = :password LIMIT 1";
    $stmt = $this->db->pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $password);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);
  }
  // Check User Account Status
  public function CheckActiveUser($email)
  {
    $sql = "SELECT * FROM users WHERE email = :email and isActive = :isActive LIMIT 1";
    $stmt = $this->db->pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':isActive', 1);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);
  }

  // Check Exist Email Address Method
  public function checkExistEmail($email)
  {
    $sql = "SELECT email from  users WHERE email = :email";
    $stmt = $this->db->pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }



  // User Login Authentication Method
  public function userLoginAuthentication($data)
  {
    $email = $data['email'];
    $password = $data['password'];
    $checkEmail = $this->checkExistEmail($email);

    if ($email == "" || $password == "") {
      $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error !</strong> Email or Password not be Empty !</div>';
      return $msg;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $msg = '<div class="alert alert-danger alert-dismissible mt-2" id="flash-msg">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error !</strong> Invalid email address !</div>';
      return $msg;
    } elseif ($checkEmail == FALSE) {
      $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error !</strong> Email did not Found, use Register email or password please !</div>';
      return $msg;
    } else {
      $logResult = $this->userLoginAuth($email, $password);
      $chkActive = $this->CheckActiveUser($email);

      if ($chkActive == TRUE) {
        $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error !</strong> Sorry, Your account is Diactivated, Contact with Admin !</div>';
        return $msg;
      } elseif ($logResult) {

        Session::init();
        Session::set('login', TRUE);
        Session::set('id', $logResult->id);
        Session::set('roleid', $logResult->roleid);
        Session::set('name', $logResult->name);
        Session::set('email', $logResult->email);
        Session::set('username', $logResult->username);
        Session::set('logMsg', '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success !</strong> You are Logged In Successfully !</div>');

          echo "<h2> Hello </h2>";

          $role = Session::get("roleid");

          echo "<h2>  $role  </h2>";

        if ($role == 1) {
          echo "<script>location.href='admin.php';</script>";

          echo "<h2> 1 </h2>";

        } else {
          echo "<script>location.href='homepage.html';</script>";
          echo "<h2> 2 </h2>";
        }
      } else {
        $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error !</strong> Email or Password did not Matched !</div>';
        return $msg;
      }
    }
  }


  
  // Delete User by Id Method
  public function deleteUserById($remove)
  {
    $sql = "DELETE FROM users WHERE id = :id ";
    $stmt = $this->db->pdo->prepare($sql);
    $stmt->bindValue(':id', $remove);
    $result = $stmt->execute();
    if ($result) {
      $msg = '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success !</strong> User account Deleted Successfully !</div>';
      return $msg;
    } else {
      $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error !</strong> Data not Deleted !</div>';
      return $msg;
    }
  }



    // User Deactivated By Admin
    public function userDeactivateByAdmin($deactive)
    {
      $sql = "UPDATE users SET
  
         isActive=:isActive
         WHERE id = :id";
  
      $stmt = $this->db->pdo->prepare($sql);
      $stmt->bindValue(':isActive', 1);
      $stmt->bindValue(':id', $deactive);
      $result =   $stmt->execute();
      if ($result) {
        echo "<script>location.href='index.php';</script>";
        Session::set('msg', '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success !</strong> User account Diactivated Successfully !</div>');
      } else {
        echo "<script>location.href='index.php';</script>";
        Session::set('msg', '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Error !</strong> Data not Diactivated !</div>');
  
        return $msg;
      }
    }
  
  
    // User Deactivated By Admin
    public function userActiveByAdmin($active)
    {
      $sql = "UPDATE users SET
         isActive=:isActive
         WHERE id = :id";
  
      $stmt = $this->db->pdo->prepare($sql);
      $stmt->bindValue(':isActive', 0);
      $stmt->bindValue(':id', $active);
      $result =   $stmt->execute();
      if ($result) {
        echo "<script>location.href='index.php';</script>";
        Session::set('msg', '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success !</strong> User account activated Successfully !</div>');
      } else {
        echo "<script>location.href='index.php';</script>";
        Session::set('msg', '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Error !</strong> Data not activated !</div>');
      }
    }


    public function selectAllUserData()
    {
      $sql = "SELECT * FROM users ORDER BY id DESC";
      $stmt = $this->db->pdo->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
    }



  // Date formate Method
  public function formatDate($date)
  {
    // date_default_timezone_set('Asia/Dhaka');
    $strtime = strtotime($date);
    return date('Y-m-d H:i:s', $strtime);
  }


  //
  //   Get Single User Information By Id Method
  public function updateUserByIdInfo($userid, $data)
  {
    $name = $data['name'];
    $username = $data['username'];
    $email = $data['email'];
    $mobile = $data['mobile'];
    $roleid = $data['roleid'];



    if ($name == "" || $username == "" || $email == "" || $mobile == "") {
      $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error !</strong> Input Fields must not be Empty !</div>';
      return $msg;
    } elseif (strlen($username) < 3) {
      $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error !</strong> Username is too short, at least 3 Characters !</div>';
      return $msg;
    } elseif (filter_var($mobile, FILTER_SANITIZE_NUMBER_INT) == FALSE) {
      $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error !</strong> Enter only Number Characters for Mobile number field !</div>';
      return $msg;
    } elseif (filter_var($email, FILTER_VALIDATE_EMAIL === FALSE)) {
      $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error !</strong> Invalid email address !</div>';
      return $msg;
    } else {

      $sql = "UPDATE users SET
          name = :name,
          username = :username,
          email = :email,
          mobile = :mobile,
          roleid = :roleid
          WHERE id = :id";
      $stmt = $this->db->pdo->prepare($sql);
      $stmt->bindValue(':name', $name);
      $stmt->bindValue(':username', $username);
      $stmt->bindValue(':email', $email);
      $stmt->bindValue(':mobile', $mobile);
      $stmt->bindValue(':roleid', $roleid);
      $stmt->bindValue(':id', $userid);
      $result =   $stmt->execute();

      if ($result) {
        echo "<script>location.href='index.php';</script>";
        Session::set('msg', '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success !</strong> Wow, Your Information updated Successfully !</div>');
      } else {
        echo "<script>location.href='index.php';</script>";
        Session::set('msg', '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error !</strong> Data not inserted !</div>');
      }
    }
  }


  
  // Get Single User Information By Id Method
  public function getUserInfoById($userid)
  {
    $sql = "SELECT * FROM users WHERE id = :id LIMIT 1";
    $stmt = $this->db->pdo->prepare($sql);
    $stmt->bindValue(':id', $userid);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_OBJ);
    if ($result) {
      return $result;
    } else {
      return false;
    }
  }















}
