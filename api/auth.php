<?php 
require_once __DIR__ . "/../config/config.php";


if(isset($_REQUEST["register-btn"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $c_password = $_POST["c_password"];
    $tel = $_POST["tel"];

   try{
        if($password != $c_password){
            // msg("error","เกิดข้อผิดพลาด","รหัสผ่านไม่ตรงกัน");
        }
        $passwordHash = password_hash($password,PASSWORD_DEFAULT);
        $user = sql("INSERT INTO users(firstname,lastname,email,password,tel) VALUES(?,?,?,?,?)",[$firstname,$lastname,$email,$passwordHash,$tel]);
        if($user){
            // msg("success","สำเร็จ!","สมัครสมาชิกสำเร็จแล้ว กรุณาเข้าสู่ระบบของคุณ!");
            header("Location: ../login.php");
        }else{
            throw new Error("ไม่สามารถสมัครสมาชิกได้");
        }
   }catch(Error $e){
        msg("error","เกิดข้อผิดพลาด",$e->getMessage() || "ไม่สามารถสมัครสมาชิกได้!");
   }
}
if(isset($_REQUEST["login-btn"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    try{
        $findUser = sql("SELECT * FROM users WHERE email = ?",[$email])->fetch();
        if($findUser){
            if(password_verify($password,$findUser["password"])){
                
                // if($user){
                // msg("success","สำเร็จ!","สมัครสมาชิกสำเร็จแล้ว กรุณาเข้าสู่ระบบของคุณ!");
                // }
            }else{
                throw new Error("รหัสผ่านไม่ถูกต้อง!");
            }
        }else{
            throw new Error("ไม่พบข้อมูลสมาชิก");
        }
    }catch(Error $e){
        echo $e->getMessage();
        // msg("error","เกิดข้อผิดพลาด",$e->getMessage() || "ไม่สามารถสมัครสมาชิกได้!");
   }
}
?>