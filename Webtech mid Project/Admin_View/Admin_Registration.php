<!-- <?php
include("../Admin_control/Admin_Registration_Validation.php");
?> -->


<html>
    <title>Admin Registration </title>
    <body>

    <h1>Admin Registration Page</h1>
        
        <form action="" method="POST"  enctype="multipart/form-data">
            <fieldset>
                <legend>Registration Details:</legend>
            <table>
                <tr> 
                <td>First Name: </td>
                <td><input type= "text" name="fname" placeholder="Enter First Name">
                <?php echo $invalidfname; ?>
               
                </tr></td>
        
                <tr><td>Last Name: </td>
                <td><input type="text"  name="lname" placeholder="Enter Last Name">
                <?php echo $invalidlname; ?>

                </tr></td>
                <tr><td>Age: </td>  
        <td><input type="text" name="age" placeholder="Enter Age">
        <?php echo $invalidage; ?>
    </tr></td>
    <tr>
        <td>Gender: </td>
        <td>
            <input type="radio" name="g1" >Male
            <input type="radio" name="g1" >Female
            <input type="radio" name="g1" >Others
        </td>
    </tr>
    <tr>
        <td>Mobile No:</td>
        <td>
            <input type="tel" name="Admin_num" placeholder="Enter Phone Number">
         <?php echo $invalidmob; ?>
        </td>
    </tr>


        <tr><td>E-mail: </td>
            
        <td><input type="text" name="Email" placeholder="Enter E-mail">
        <?php echo $invalidemail; ?>
        
    </tr></td>
</table>

        
    </fieldset>
    <fieldset>
        <legend>Important Informations</legend>

        <table>

        <tr>
            <td>Admin Name: </td>
            <td>
                <input type="text" name="Admin_name" placeholder="Enter your Admin Name">
            <?php echo $invalidadmin; ?>
            </td>
        </tr>

        <tr><td>Password: </td>

        <td><input type="password" name="pass" placeholder="Enter your Password"> 
    
        <?php echo $invalidpass; ?>
    
    </tr></td>

    <tr><td>Confirm Password: </td>

        <td><input type="password" name="c_pass" placeholder="Please Confirm Password"> 
     <?php echo $invalidcf; ?>
    
    </tr></td>
       
        

       
       <tr><td> <input type="submit" name="Submission"value="Submit"> <input type= "reset" name="Res" value = Reset></td></tr>
               
            </table>

        </form>
        </table>
</fieldset>


<h4>Go To <a href="Admin_Login.php">Login Page</a></h4>
    </body>
</html>