
<html> 
    <head>
    
    <link rel = "stylesheet" type = "text/css" href = "des1.css">
</head>
    <body  class=" pad">
   
<form  action=""  method="post" >
    
        <input type="text" name="usname" class="login placeholder center" placeholder=" enter your username" autocomplete="off" <?php if(isset($_POST['usname'])){$uname=$_POST['usname'];echo"value='$uname'";}?>></input>
        <input type="password" name="psw" class=" login placeholder center " placeholder=" enter your password" autocomplete="off"></input>
        <input type="submit"  class="  button center" name="login" value="login"> 
        <input type="submit"   name="regist" class=" center button  " value="not registed?">
      

<?php $com=mysqli_connect("localhost","root","");
        mysqli_select_db($com,"vouchers");



if(isset($_POST['login'])){
    if( isset($_POST['usname']) && $_POST['usname']!="" ){
        
        $uname=$_POST['usname'];
        if(isset($_POST['psw']) && $_POST['psw']!=''){
            $ps=$_POST['psw'];
        
        

            $res=mysqli_query($com,"select username , password,status from users where username= '$uname'");
                        if($data =mysqli_fetch_array($res)){if($data['username']!=''){
                if($data['username']==$uname && $data['password']==$ps){ $s=0;
                    mysqli_query($com,"update users set status= $s where user_name = '$uname'"); 
                    echo"<input readonly class=button  value='login done'></input>";
                    header("location:index.html");
                
                }else{$s=$data['status']+1;
                    mysqli_query($com,"update users set status= $s where username = '$uname'");
                
                    if($data['status']>3){
                    
                        echo"<input type=text  readonly class=custom-textarea value='account blocked'></input>";
        
                    }else{echo"<input type=text  readonly class=custom-textarea value='wrong password '></input>";}
                }
            }
        }else{echo"<input readonly class=custom-textarea value='wrong username'></input>";}}else{echo"<input readonly class=custom-textarea value='empty password'></input>";}

    }else{echo"<input readonly class=custom-textarea value='empty user name'></input>";}


}

 ?>   
<?php if(isset($_POST['regist'])){
      header("location:start.php");
}

?></form>
    </body>
</html>