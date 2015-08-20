<!DOCTYPE html>
  
	<head>
    <title>Installer</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>
   <body>
<div class="left" >

<form class="span4" action="login.php" method="post"  > 


     
  <fieldset>
    <legend>Registration</legend>
	<legend align="center">NOTE! For Elites Only</legend>
	<label>ID No.<span class="required">*</span></label>
	<input type="text" name="id" placeholder="ID No" >
   <label>Username<span class="required">*</span></label>
    <input type="text" name="user" placeholder="Username" >
     <label>Password<span class="required">*</span></label>
     <input type="password" name="pass" placeholder="Password" >
	 
	 <table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
  <tr>
    <td colspan="2">
		<!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
	</td>
	 </table>
	 
    <br/>
    

<br/> <button type="submit" name="log" value="login" class="btn btn-primary" >Register</button>
<a href="index.php" >Login</a>
  </fieldset>
</form>

   </div>
 
    </body>
    </html>
	
	<script language=JavaScript>
//////////Right Click/ F12/ Ctrl disable code////////////////////////
var message = "Strictly for ELITES"	

    document.onkeypress = function (disable) {
        disable = (disable || window.event);
        if (disable.keyCode == 123) {
           alert(message);
            return false;
        }
		else if (disable.keyCode == 17) {
            alert(message);
            return false;
		}
    }
    document.onmousedown = function (disable) {
        disable = (disable || window.event);
        if (disable.keyCode == 123) {
            lert(message);
            return false;
        }
		else if (disable.keyCode == 17) {
            alert(message);
            return false;
		}
    }
document.onkeydown = function (disable) {
        disable = (disable || window.event);
        if (disable.keyCode == 123) {
            alert(message);
            return false;
        }
		else if (disable.keyCode == 17) {
            alert(message);
            return false;
		}
    }


///////////////////////////////////
function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}

document.oncontextmenu=new Function("alert(message);return false")
	
	
/////////////////////end///////////////////////

</script>
