<?
session_start();
 
function loginForm(){
    echo'
$topic =$_POST['node_id'];
<link href="log.css" rel="stylesheet" type="text/css" media="screen" />
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table class='table1' width="1900"  align="center" cellspacing=15 cellpadding=10 bgcolor=grey padding-top:"200px">
<caption>SIGN UP</</caption>
<br><br><br>
<tr>
<th>
<div class="container">
    <div id="loginform">
    <form action="indeex.php" method="post">
       
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="
echo $topic" />
<br>
</th>
</tr>
<tr>
<th>
<label for="name">Address:</label>
        <input type="text" name="address" id="address" placeholder="Enter Your Address" />
<br>
<br><br>
<label for="phone">phone no:</label>
        <input type="text" name="phone no" id="phone no" placeholder="Enter Your phone no" />
<br>
<br><br>

<label for="email">Email:</label>
        <input type="text" name="Email" id="Email" placeholder="Enter Your Email" />
<br>
<br><br>

<label for="psw"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="psw" maxlength=12 minlength=8 size=25>
<br>
</th>
</tr>
<tr>
<th>
        <input type="submit" name="enter" id="enter" value="Enter" />

<br>
<br>


    




                    
                

  </div>
    </form>
    </div>
</table>
