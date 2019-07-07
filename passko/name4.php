<?
session_start();
 
function loginForm(){
    echo'
<link href="log.css" rel="stylesheet" type="text/css" media="screen" />
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table class='table1' width="1900"  align="center" cellspacing=15 cellpadding=10 bgcolor=grey padding-top:"200px">
<caption>FORGOT PASSWORD</</caption>
<br><br><br>
<tr>
<th>
<div class="container">
    <div id="loginform">
    <form action="indeex.php" method="post">
       
      

<label for="number">Verification code:</label>
        <input type="number" name="code" id="code" placeholder="Enter the code" required/>
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
