
<<?php include "templates/admin/header.php":?>
<div class="row">
<div class= "col-12">
<form action="admin.php?action=reset" method="post">
<label for="email">Login Info:</label>
<input type="text" name="email" placeholder="Type in your email" id="logininfo">
<label for="password">Password:</label>
<input type="text" name="password" placeholder ="Type in your new password">
<label for="confirmpassword">Confirm Password:</label>
<input type="text" name="confirmpassword" placeholder ="Re type in your new password">
<input type="submit" name="reseturl" value="Reset">
</form>
</div>
</div>
<div class="footer"><?php include "templates/include/footer.php";?></div>
</body>
</html>
