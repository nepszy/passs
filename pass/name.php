<?
session_start();
 
function loginForm(){
    echo'
    <div id="loginform">
    <form action="indeex.php" method="post">
        <p>Please enter your name to continue:</p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" />
        <input type="submit" name="enter" id="enter" value="Enter" />
    </form>
    </div>
