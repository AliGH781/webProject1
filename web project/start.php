<html>
    <head>
    <link rel = "stylesheet" type = "text/css" href = "dess.css">
</head>
    <body  class="center">
        <form  action=""  method="post"><table class="table pad" >
        
        
   <tr> <td><input type="text"  name="fn"  maxlength="15" class="insert" placeholder="firstname" autocomplete="off"<?php if(isset($_POST['fn'])){ $f=$_POST['fn'];echo"value='$f'";} ?>></td>

   <td> <input type="text"  name="ln"  class="insert" maxlength="15"  placeholder="lastname" autocomplete="off" <?php if(isset($_POST['ln'])){ $l=$_POST['ln'];echo"value='$l'";} ?>></td></tr>
    

    
   <tr><td><input type="text"   class="input insert" maxlength="40" name="email"  placeholder="email"autocomplete="off" <?php if(isset($_POST['email'])){ $mail=$_POST['email'];echo"value='$mail'";} ?> ></td>
   
  
   <tr><td><input type="text"   class="insert" name="usern" maxlength="20" placeholder="username" autocomplete="off" <?php if(isset($_POST['usern'])){ $usr=$_POST['usern'];echo"value='$usr'";} ?> ></td>
   
   <td> <input type="text" class="insert" name="passw" maxlength="20" placeholder="password" autocomplete="off" <?php if(isset($_POST['passw'])){ $pasw=$_POST['passw'];echo"value='$pasw'";} ?>></td></tr>

   <tr ><td> <input type="submit" class=" button center" name="save" value="save"   ></input></td><td> <input type="submit" class=" button center" name="backto" value="back to login " ></input></td></tr>
   <?php $emailExists = false;
   $userExists = false;
    $com=mysqli_connect("localhost","root","");
        mysqli_select_db($com,"vouchers");
        $fin=mysqli_query($com,"select * from users");    

    if(isset($_POST['save'])){  
      while($jum=mysqli_fetch_array($fin)){
            if ($jum['email'] == $_POST['email']) {
                $emailExists = true;
        }if($jum['username'] ==$_POST['usern']){
            $userExists = true;
        }
    } 
    
                                     if($f!="" && $l!="" &&  $mail!="" && $usr!="" && $pasw!=""   )
                                     {
                                        if($emailExists==false){
                                            if($userExists ==false){
                                     $sql= " insert into users (firstname, lastname,email,username,password,status) values ('$f', '$l','$mail','$usr','$pasw','0')";

                                                     if(mysqli_query($com, $sql)){
                                           echo "<input  type=text readonly class=button value='registration complete'></input>";
                                                                    } else{
                                                                 echo "ERROR: Could not able to execute $sql. " . mysqli_error($com);
                                                                                               }
                                     
                                   

                                    mysqli_close($com);}else{echo"<input size=40 readonly class=custom-textarea  value='ERROR:username exist try another username'> </input>";} }else{echo"<input type=text size=50 readonlly class=custom-textarea value='ERROR:email  is exist use another email'></input>";}
                                                                                            }else{echo"<input type=text size=50 readonlly class=custom-textarea value='ERROR:you should fill all field'></input>";}
                            }
                               
    
                            
if(isset($_POST['backto'])){
    header("location:login.php");
}    
   ?>

</table>
</form>
</body>
    </html>