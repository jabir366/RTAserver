<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

<div id="id01" class="modal">
  <!-- Modal Content -->
  <form class="modal-content animate" action="/action_page.php">
    
      <br><br><br><br><br>
      <h1 align = "center"> RTAnalyzer Login</h1>
    <div class="container" align ="center">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
      <br><br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <br><br>
      <button type="submit">Login</button>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
       <span class="psw">
           <a href="Forgotpassword?"></a>
       </span>
    </div>

    
  </form>
</div> 
        <?php
        // put your code here
        ?>
    </body>

</html>
