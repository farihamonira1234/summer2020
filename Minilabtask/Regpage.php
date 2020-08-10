<!DOCTYPE html>
<html>
<body>
    <div>
        <?php  
        if(isset($_GET['error'])){
            echo $_GET['error'];
            
        } ?>
    </div>
    <form action="reg_handler.php" method="POST">

<head>
  
             <fieldset>
             <legend>REGISTRATION</legend>

        <table width="150%" border="1">
            <tr height ="50px">
                <td style="width:30%" >ID</td>
                <td  style="width:70%" colspan="3"><input type="text"placeholder="Enter ID"  name= "ID" value="" size="100px" box-sizing= "border-box" padding="12px 20px " margin="80px 0" display="inline-block" width= "100%" required></td>
            </tr>
                    <tr height ="50px">
                    
                    <td   style="width:30%" >Password</td>
                    <td  style="width:70%" colspan="3">
                    <input   type="password" name="password"  id="password"  placeholder="Enter password" size="100px" box-sizing= "border-box" padding="12px 20px " margin="80px 0" display="inline-block" width= "100%"  required>
                    </td>
                </tr>
                <tr height ="50px">
                	<td   style="width:30%" >Confirm Password</td>
                	<td  style="width:70%" colspan="3">
                    <input   type="password" name="confirmPassword" id="confirmPassword"  placeholder="Enter Confirm Password" size="100px" box-sizing= "border-box" padding="12px 20px " margin="80px 0" display="inline-block" width= "100%" required>
                    <br>
                </tr>
                <tr height="50px">
                	<td   style="width:30%" >Name</td>
                    <td  style="width:70%" colspan="3">
                    <input type="text" name="name" id="name" placeholder="Enter Name" width= "100%" value="" size="100px" box-sizing= "border-box" padding="12px 20px " margin="80px 0" display="inline-block" required>
                    <br>
                 </tr>
                 <tr height="50px" >
                 	<td   style="width:30%" >Email</td>
                    <td  style="width:70%" colspan="3">
                    <input type="email" name="email" id="email"  placeholder="Enter Email"size="100px" box-sizing= "border-box" padding="12px 20px " margin="80px 0" display="inline-block" width= "100%" required>
                    <br>
                </tr>
                <tr height="50px">
                	<td   style="width:30%" >User Type</td>
                    <td  style="width:70%" colspan="3">
                    <select name="userType" id="userType"required>
                        <option value="user">USER</option>
                        <option value="admin">ADMIN</option>
                    </select>
                    <br>
                </tr>
                </td>

                  <td>  <input type="submit" name="submit" value="submit"><a href="">Login</a></td>


 </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>