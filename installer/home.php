<!DOCTYPE html>
 
<?php
	require_once('auth.php');
?>

 <head>
    <title>Welcome To MMPI Installer</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
		<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/styles.css">
   <script src="js/code.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
		
    </head>
   <body>
<div class="left" >


<form class="span4" action="" method="post"  > 
     
	 
  <fieldset>
    <legend>WELCOME!</legend>
	
	<h5>ID No.: <?php echo $_SESSION['SESS_ID_NO'] ?><br> 
	User: <?php echo $_SESSION['SESS_USER_NAME'] ?><br>
	Designation: <?php echo $_SESSION['SESS_DESIG'] ?><br></h5>
	<a href="logout.php"><h6 align="right">Logout</h6></a>
	<hr style="margin-top: 8px;" />
	
<?php

$link = "https://s3-ap-southeast-1.amazonaws.com/mmpiinstaller/";

?>
	
	<div id='cssmenu'>
<ul>
   <li class='active has-sub'><a href='#' ><span>BMS Utilities </span></a>
		<ul>
         <li><a href='<?php echo $link ?>CR85Fix.exe'><span>CR85fix</span></a></li>
         <li><a href='<?php echo $link ?>Crystal+Report+8.5.rar'><span>Crtstal Report 8.5</span></a></li>
         <li><a href='<?php echo $link ?>Fonts.rar'><span>Fonts</span></a></li>
         <li><a href='<?php echo $link ?>mswinsck.ocx'><span>Mswinsck</span></a></li>
         <li><a href='<?php echo $link ?>View+Misc.rar'><span>View Misc</span></a></li>
         <li><a href='<?php echo $link ?>VB+Crack.rar'><span>VB Crack</span></a></li>
		 <li><a href='<?php echo $link ?>wget-1.11.4-1-setup.exe'><span>Wget</span></a></li>
		 <li><a href='<?php echo $link ?>mysql-connector-odbc-5.1.6-win32.msi'><span>Mysql ODBC 32bit</span></a></li>
		 <li><a href='<?php echo $link ?>openvpn-2.2.1-install.exe'><span>OpenVPN</span></a></li>
		 </ul>
	</li>	 
   <li class='active has-sub'><a href='#'><span>Printer Driver / Resetter</span></a>
      <ul>
         <li><a href='<?php echo $link ?>Canon+L110+Driver.rar'><span>Canon Lide 110</span></a></li>
         <li><a href='<?php echo $link ?>Canon+Lide+120.rar'><span>Canon Lide 120</span></a></li>
		 <li><a href='<?php echo $link ?>Epson+L100+Driver.rar'><span>Epson L100 Driver</span></a></li>
		 <li><a href='<?php echo $link ?>Epson+L110+Driver.rar'><span>Epson L110 Driver</span></a></li>
		 <li><a href='<?php echo $link ?>Epson+L120+Driver.rar'><span>Epson L120 Driver</span></a></li>
		 <li><a href='<?php echo $link ?>Epson+L100+Resetter.rar'><span>Epson L100 Resetter</span></a></li>
		 <li><a href='<?php echo $link ?>Epson+L110+Resetter.zip'><span>Epson L110 Resetter</span></a></li>
		 <li><a href='<?php echo $link ?>Epson+L120+Resetter.rar'><span>Epson L120 Resetter</span></a></li>
		 
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Scripts</span></a>
		<ul>
		<li><a href='<?php echo $link ?>Engine+of+Life+v2.0.vbs'><span>Engine of Life v2.0</span></a></li>
		<li><a href='<?php echo $link ?>~BRBMSUpdate.vbe'><span>BRBMSUpdate</span></a></li>
		<li><a href='<?php echo $link ?>disable_zupdate(Windows+7).vbs'><span>Disable Zimbra Update (Windows 7)</span></a></li>
		<li><a href='<?php echo $link ?>disable_zupdate(XP).vbs'><span>Disable Zimbra Update (Windows XP)</span></a></li>
		 </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Other Utilities</span></a>
	   <ul>
		 <li><a href='<?php echo $link ?>DTLite4402-0131.exe'><span>DT Lite</span></a></li>
                 <li><a href='<?php echo $link ?>Office+2007.nrg'><span>MS Office 2007</span></a></li>
                 <li><a href='<?php echo $link ?>AdbeRdr90_en_US.exe'><span>Adobe Reader</span></a></li>
		 <li><a href='<?php echo $link ?>advisor.exe'><span>Advisor</span></a></li>
		 <li><a href='<?php echo $link ?>aswclear.exe'><span>Anti Virus Removal Tool</span></a></li>
		 <li><a href='<?php echo $link ?>ChromeSetup.exe'><span>Google Chrome</span></a></li>
		 <li><a href='<?php echo $link ?>hosts'><span>Hosts</span></a></li>
		 <li><a href='<?php echo $link ?>install_flash_player_ax.exe'><span>Flash Player AX</span></a></li>
		 <li><a href='<?php echo $link ?>Firefox.exe'><span>Firefox</span></a></li>
		 <li><a href='<?php echo $link ?>TeamViewerQS.exe'><span>Team Viewer QS</span></a></li>
		 <li><a href='<?php echo $link ?>Windows+7+Loader+v.1.7.6.rar'><span>Windows 7 Loader</span></a></li>
		 <li><a href='<?php echo $link ?>wrar362.exe'><span>WinRar</span></a></li>
		 <li><a href='<?php echo $link ?>ymsgr1150_0228_us.exe'><span>Yahoo Messenger</span></a></li>
		 <li><a href='<?php echo $link ?>zdesktop_7_2_2_ga_b11951_20130318071431_win32.msi'><span>Zimbra Desktop</span></a></li>
		 <li><a href='<?php echo $link ?>ComboFix.exe'><span>ComboFix</span></a></li>
	   </ul>
   </li>
</ul>
</div>
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
