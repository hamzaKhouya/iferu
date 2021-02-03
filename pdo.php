
<?php  

 session_start();  
 include('Class.SMTP.php');
	$conn = mysqli_connect("localhost","max","toor","books");

 if(isset($_POST["username"]) && empty($_POST["email"]))  
 {  
      $query = "  
      SELECT * FROM user_table  
      WHERE user_name = '".$_POST["username"]."'  
      AND user_password = '".$_POST["password"]."'  
      ";  
      $result = mysqli_query($conn, $query);  
      	if(mysqli_num_rows($result) > 0)  
      {  
		   $_SESSION['username'] = $_POST['username']; 
		   echo 1 ;  
		// 	$row_User = $_SESSION['username'];
		// 	$UsersRegDate = $row_User['start_date'];
			
		// 	$MembershipEnds = date("Y-m-d",strtotime(date("Y-m-d",strtotime($UsersRegDate))."+2 day"));
        //   if (date("Y-m-d")<$MembershipEnds){
			
			
		  
      }  
      else  
      {  
		echo 0;

      }  
 }  
 if(isset($_POST["email"]))  
 {  
	
      $query = "
	  INSERT INTO user_table (user_name,user_password,id_subscription,user_email) VALUES ('".$_POST["username"]."', '".$_POST["password"]."', 1,'".$_POST["email"]."')";  
	  mysqli_query($conn, $query);
	  $_SESSION['username'] = $_POST['username'];
	 
$from="contact@iferu.com";
$smtp = new SMTP('in.mailjet.com', '070034dcfc600c877ea8e8e9cc9ea697', '40205719a176cacdfb59ba1eeafc4389');
$smtp->ContentType='html';
$objet="Bienvenue a IFERU.COM";
$message='<!-- saved from url=(0534)https://d1ysz50cxb9zwl.cloudfront.net/5DzHPhJbvvUGqzGagzWZ-Ybxf8GkDfIRMCprS3jPURGj431IBgMdz_0NB5jfTMP3/by/28373777/as/file.html?Expires=1609873483&Signature=OopbV02-Y0~-7IUjG9EzWLlVZqu80XEzdgPm7NtsSzeQy~I7mWbhMVDQUIg5XOEWb-MSFYe386461XWLkREhERPmsqsbRWNy1KO807cGg5WcaMoxm4~BphStdxLJtMlzEs-g9r1Mmz~mPoteA24Z9aawrcZjWJxOPcC4A2Qb7vE7BVVhDDzdAmhgZ6IErqnyep-alhi2eJjoGQX-6E5lWB7G-FT1efZjVBDWiAuiouUQigAG1RDC-TQor1shOw7lRrWVH4wSuoWd87dwU0b5vq-PxTasVWSVavHteV4rmOAzDCsRJO08i6c5iK7KZw8kI~B4yx-SdgOe4GjPCCnFhA__&Key-Pair-Id=APKAJAERRT46LD6FN4NA -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"></head><body><table border="0" cellpadding="0" cellspacing="0" width="100%" id="m_-2363520970027202618contentTableOuter" style="border-collapse:separate!important;background-color:#ffffff;padding:30px;border:1px solid #cccccc;border-bottom:1px solid #acacac" bgcolor="#ffffff">
    <tbody><tr>
        <td align="center" valign="top">
            <div>
</div><table border="0" cellpadding="0" cellspacing="0" id="m_-2363520970027202618contentTableInner" style="border-collapse:collapse!important;width:600px" width="600">
                <tbody><tr>
<td align="left" valign="top" class="m_-2363520970027202618bodyContent" width="100%" colspan="12" style="color:#444444;font-family:sans-serif;font-size:15px;line-height:150%;text-align:left">
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse:collapse!important">
<tbody><tr>
<td valign="top" colspan="12" width="100.0%" class="m_-2363520970027202618column" style="width:100.0%;text-align:left;padding:0;font-family:sans-serif;font-size:15px;line-height:1.5em;color:#444444;margin-bottom:20px" align="left">
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse:collapse!important">
<tbody><tr>
<td align="left" valign="top" class="m_-2363520970027202618bodyContent" width="100%" colspan="12" style="color:#444444;font-family:sans-serif;font-size:15px;line-height:150%;text-align:left">
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse:collapse!important">
<tbody><tr>
<td valign="top" colspan="6" width="50.0%" class="m_-2363520970027202618column" style="width:50.0%;text-align:left;padding:0;font-family:sans-serif;font-size:15px;line-height:1.5em;color:#444444" align="left">
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse:collapse!important">
<tbody><tr>
<td align="left" valign="top" class="m_-2363520970027202618bodyContent" width="100%" colspan="12" style="color:#444444;font-family:sans-serif;font-size:15px;line-height:150%;text-align:left">
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse:collapse!important">
<tbody><tr>
<td valign="top" colspan="12" width="100.0%" class="m_-2363520970027202618column" style="width:100.0%;text-align:left;padding:0;font-family:sans-serif;font-size:15px;line-height:1.5em;color:#444444" align="left">
<div style="text-align:center">
<div>
<div id="m_-2363520970027202618hs_cos_wrapper_module_1537948989379743" style="color:inherit;font-size:inherit;line-height:inherit">


<div id="m_-2363520970027202618hs_cos_wrapper_module_1537948989379743_" style="color:inherit;font-size:inherit;line-height:inherit"><a href="https://hs-4918719.t.iferu.net/e2t/tc/VVGsct21c3FrVRCfBh2pjHM7W824bMN4kRhLlN8BHR693p_97V1-WJV7CgQ8qW3n_wVl1LJhmHW3mztrW70MTDLW8fQHlR39lGVqW75yR2k1cjQDpW6Pgg004CT9kBW82fFRn1mZgB3W8pVkCq686kDYW6Q-Sy45W-8b0W6QQxVW863jM_W1mmn1s7284DPW3tzyy07B8nrVW11srRD1W6gY2VlfJ665NwGqQW6qR_Ww37kN2LW94HWZ68ghCRPW2XT4_Q2b-nKHW7ZHChH6vFwLGW8SFDyh4m1Zs-W4cyQS37sVt4BW2CMRxb94nM7dW881PLP93_MJTW6hDMmf62j57HW6VjLdg7-VZVwN27cjWM-qQd_3pW_1" id="m_-2363520970027202618hs-link-module_1537948989379743_" rel="noopener" style="border-width:0px;border:0px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://hs-4918719.t.iferu.net/e2t/tc/VVGsct21c3FrVRCfBh2pjHM7W824bMN4kRhLlN8BHR693p_97V1-WJV7CgQ8qW3n_wVl1LJhmHW3mztrW70MTDLW8fQHlR39lGVqW75yR2k1cjQDpW6Pgg004CT9kBW82fFRn1mZgB3W8pVkCq686kDYW6Q-Sy45W-8b0W6QQxVW863jM_W1mmn1s7284DPW3tzyy07B8nrVW11srRD1W6gY2VlfJ665NwGqQW6qR_Ww37kN2LW94HWZ68ghCRPW2XT4_Q2b-nKHW7ZHChH6vFwLGW8SFDyh4m1Zs-W4cyQS37sVt4BW2CMRxb94nM7dW881PLP93_MJTW6hDMmf62j57HW6VjLdg7-VZVwN27cjWM-qQd_3pW_1&amp;source=gmail&amp;ust=1609332402022000&amp;usg=AFQjCNHtRBkDm5p5BWZWNxJBlyXzXxkB1Q"></a></div>
</div>
</div>
</div>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td align="left" valign="top" class="m_-2363520970027202618bodyContent" width="100%" colspan="12" style="color:#444444;font-family:sans-serif;font-size:15px;line-height:150%;text-align:left">
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse:collapse!important">
<tbody><tr>
<td valign="top" colspan="12" width="100.0%" class="m_-2363520970027202618column" style="width:100.0%;text-align:left;padding:0;font-family:sans-serif;font-size:15px;line-height:1.5em;color:#444444" align="left">
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse:collapse!important">
<tbody><tr>
<td align="left" valign="top" class="m_-2363520970027202618bodyContent" width="100%" colspan="12" style="color:#444444;font-family:sans-serif;font-size:15px;line-height:150%;text-align:left">
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse:collapse!important">
<tbody><tr>
<td valign="top" colspan="12" width="100.0%" class="m_-2363520970027202618column" style="width:100.0%;text-align:left;padding:0;font-family:sans-serif;font-size:15px;line-height:1.5em;color:#444444;padding:20px 60px" align="left">
<div>
<div>
<div id="m_-2363520970027202618hs_cos_wrapper_module_15379566794101590" style="color:inherit;font-size:inherit;line-height:inherit"><div id="m_-2363520970027202618hs_cos_wrapper_module_15379566794101590_" style="color:inherit;font-size:inherit;line-height:inherit"><p style="margin-bottom:1em">Bonjour<span>&nbsp;</span>,</p>
<p style="margin-bottom:1em">Au cours des trois prochains jours, vous benificierer  d\'un accés complet a  la plus grande bibliotheque en ligne de contenus resumes.</p>
<p style="margin-bottom:1em">Donnez libre cours a  votre curiosite et parcourez nos differentes thematiques pour ouvrir votre horizon, au niveau personnel comme professionnel.</p>
<p style="margin-bottom:1em">Commencez avec quelques-unes de nos chaines les plus populaires.&nbsp;</p>
<p style="margin-bottom:1em;text-align:center" align="center"><span id="m_-2363520970027202618hs-cta-wrapper-2fccde58-f2b6-43a7-9647-e64c3de78fff"><span id="m_-2363520970027202618hs-cta-2fccde58-f2b6-43a7-9647-e64c3de78fff"><a href="http://162.243.174.140/poc/model_contenu_de_chaine.php?idChaine=1002&lang=fr" target="_blank" data-saferedirecturl="http://162.243.174.140/poc/model_contenu_de_chaine.php?idChaine=1063&lang=fr"><img id="m_-2363520970027202618hs-cta-img-2fccde58-f2b6-43a7-9647-e64c3de78fff" style="vertical-align:bottom;border-width:0px;width:auto!important;max-width:100%!important" height="180" width="auto" src="http://162.243.174.140/file_files/leadership.png" alt="Leadership" class="CToWUd"></a></span></span>&nbsp; &nbsp;<span id="m_-2363520970027202618hs-cta-wrapper-07fc41e0-28fc-4f59-9e34-a1061225b7d9"><span id="m_-2363520970027202618hs-cta-07fc41e0-28fc-4f59-9e34-a1061225b7d9"><a href="http://162.243.174.140/poc/model_contenu_de_chaine.php?idChaine=1063&lang=fr"><img id="m_-2363520970027202618hs-cta-img-07fc41e0-28fc-4f59-9e34-a1061225b7d9" style="vertical-align:bottom;border-width:0px;width:auto!important;max-width:100%!important" height="180" width="auto" src="http://162.243.174.140/file_files/conseil.png" alt="Life Advice" class="CToWUd"></a></span></span></p>
<p style="margin-bottom:1em">Avec <span class="il">iferu</span>, apprendre devient un jeu : voyez par vous-meme !&nbsp;</p>
<p style="margin-bottom:1em"></p><center><span id="m_-2363520970027202618hs-cta-wrapper-c1a1cd63-9d03-46a7-b52e-e7dba0656c9a"><span id="m_-2363520970027202618hs-cta-c1a1cd63-9d03-46a7-b52e-e7dba0656c9a"><a href="http://162.243.174.140/index.php" target="_blank" data-saferedirecturl="http://162.243.174.140/index.php"><img id="m_-2363520970027202618hs-cta-img-c1a1cd63-9d03-46a7-b52e-e7dba0656c9a" style="vertical-align:bottom;border-width:0px;margin:0 auto;display:block;margin-top:20px;margin-bottom:20px;width:auto!important;max-width:100%!important" src="http://162.243.174.140/file_files/commencer.png" alt="Get started!" align="middle" width="auto" class="CToWUd"></a></span></span></center><p style="margin-bottom:1em"></p>
<p style="margin-bottom:1em">Bon apprentissage !</p>
<p style="margin-bottom:1em">Votre équipe <span class="il">iferu</span></p></div></div>
</div>
</div>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td align="left" valign="top" class="m_-2363520970027202618bodyContent" width="100%" colspan="12" style="color:#444444;font-family:sans-serif;font-size:15px;line-height:150%;text-align:left">
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse:collapse!important">
<tbody><tr>
<td valign="top" colspan="12" width="100.0%" class="m_-2363520970027202618column" style="width:100.0%;text-align:left;padding:0;font-family:sans-serif;font-size:15px;line-height:1.5em;color:#444444;padding-top:20px;padding-bottom:20px" align="left">
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse:collapse!important">
<tbody><tr>
<td align="left" valign="top" class="m_-2363520970027202618bodyContent" width="100%" colspan="12" style="color:#444444;font-family:sans-serif;font-size:15px;line-height:150%;text-align:left">
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse:collapse!important">
<tbody><tr>
<td valign="top" colspan="12" width="100.0%" class="m_-2363520970027202618column" style="width:100.0%;text-align:left;padding:0;font-family:sans-serif;font-size:15px;line-height:1.5em;color:#444444" align="left">
<div>
<div>
<div id="m_-2363520970027202618hs_cos_wrapper_module_15531812295902690" style="color:inherit;font-size:inherit;line-height:inherit"><div id="m_-2363520970027202618email-footer" style="margin:20px auto;text-align:center">
<div style="text-align:center;margin-bottom:20px">

<table align="center" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse!important;width:auto!important" width="auto">
<tbody><tr>
<td style="padding:0 10px">
<table style="border-collapse:collapse" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="middle" style="height:32px;width:32px" height="32" width="32">
<a href="https://hs-4918719.t.iferu.net/e2t/tc/VVGsct21c3FrVRCfBh2pjHM7W824bMN4kRhLlN8BHR693p_97V1-WJV7CgTV6W3V8MGZ6_sHXbW6jw_VG8KJJGWW3q5HNx7DjbTbW15YHQf5Lgw3kW6kW6kD5cLsS8W6c6rSj62Q1mCW2TWq705m0vCrVSMWSh2D6JyqW41r0Wt5nz7M5W1qWqsp5VQRjKN3-Rp69rdCTYW7wnJRX1MCV3lW2Cl0mF2_m5zDW5STbRP5jdwr0W1CTcKv1r3gSxW2Q6ymv1d5wCvW4hNHj89jwRPbW4lFBRn4HGXQ1W6mKzYT1xkg27W66FtnB2mC7ghV4t9Xb3V3RsQW1ddsDH4JTYkSW6PcnF72B48Y1W51w85D1Knfyk330n1" border="0" style="border:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://hs-4918719.t.iferu.net/e2t/tc/VVGsct21c3FrVRCfBh2pjHM7W824bMN4kRhLlN8BHR693p_97V1-WJV7CgTV6W3V8MGZ6_sHXbW6jw_VG8KJJGWW3q5HNx7DjbTbW15YHQf5Lgw3kW6kW6kD5cLsS8W6c6rSj62Q1mCW2TWq705m0vCrVSMWSh2D6JyqW41r0Wt5nz7M5W1qWqsp5VQRjKN3-Rp69rdCTYW7wnJRX1MCV3lW2Cl0mF2_m5zDW5STbRP5jdwr0W1CTcKv1r3gSxW2Q6ymv1d5wCvW4hNHj89jwRPbW4lFBRn4HGXQ1W6mKzYT1xkg27W66FtnB2mC7ghV4t9Xb3V3RsQW1ddsDH4JTYkSW6PcnF72B48Y1W51w85D1Knfyk330n1&amp;source=gmail&amp;ust=1609332402023000&amp;usg=AFQjCNF7JedDE6tQtihnPDcZjtKiwUybbw">
<img src="http://162.243.174.140/file_files/facebook.gif" alt="facebook" width="32" height="32" style="vertical-align:bottom" class="CToWUd">
</a>
</td>
<td width="10">&nbsp;</td>
<td valign="middle" style="height:32px;width:32px" height="32" width="32">
<a href="https://hs-4918719.t.iferu.net/e2t/tc/VVGsct21c3FrVRCfBh2pjHM7W824bMN4kRhLlN8BHR6t3p_9rV1-WJV7CgSCjN8H-qr_HcvX6W3jxBSt4lqDnPW4wGNLW4Vlp2wN1TjnKWKZRcLW1xKrC85fYdJtW21h4C12YCK54W8GR4TG2N58b-W6_W87Z4mLpw8N5jsv7-Gj171W7P3BYP8KFCVvW2gLlNM1b_zGvN1G4R5R1y7c_W44vnFh18D08-N4HhHvtGhTNGW3nvhKK3mbQL4W69Vg4J45skg3N4wc4sNPNkfgW3prJWC4Nj9hYW1llSK18wg7MxW3TZqrD8mSJZlVDzw5Z5dgpnNW7nrtsk72FHz9W67SQ013LJg1SVD91951RZlVqW8xZHwD4CjRsGW3zjDM98RcDlk39rl1" border="0" style="border:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://hs-4918719.t.iferu.net/e2t/tc/VVGsct21c3FrVRCfBh2pjHM7W824bMN4kRhLlN8BHR6t3p_9rV1-WJV7CgSCjN8H-qr_HcvX6W3jxBSt4lqDnPW4wGNLW4Vlp2wN1TjnKWKZRcLW1xKrC85fYdJtW21h4C12YCK54W8GR4TG2N58b-W6_W87Z4mLpw8N5jsv7-Gj171W7P3BYP8KFCVvW2gLlNM1b_zGvN1G4R5R1y7c_W44vnFh18D08-N4HhHvtGhTNGW3nvhKK3mbQL4W69Vg4J45skg3N4wc4sNPNkfgW3prJWC4Nj9hYW1llSK18wg7MxW3TZqrD8mSJZlVDzw5Z5dgpnNW7nrtsk72FHz9W67SQ013LJg1SVD91951RZlVqW8xZHwD4CjRsGW3zjDM98RcDlk39rl1&amp;source=gmail&amp;ust=1609332402023000&amp;usg=AFQjCNFehTbnE9VSGiBIVg_aJUY_-KP8Kw">                
<img src="http://162.243.174.140/file_files/linkedin.gif" alt="linkedin" width="32" height="32" style="vertical-align:bottom" class="CToWUd">
</a>
</td>
<td width="10">&nbsp;</td>
<td valign="middle" style="height:32px;width:32px" height="32" width="32">
<a href="https://hs-4918719.t.iferu.net/e2t/tc/VVGsct21c3FrVRCfBh2pjHM7W824bMN4kRhLlN8BHR6t3p_9rV1-WJV7CgXWSW2254MZ6rSbGnW8JPsY84Nf24HW28_wMr3-nTtwW2dGJQr5PRB2dW9lxzzR4Wx08kVP5K8-1Dc-cBVR0SqR4J06S0W4Wm8kx8WnBdRW1gFGFZ3kq72hW413CrZ86XwPQW5dCPN22zbzJbN3ybhD0R8JsCW96bsHt8m6y1JW5GTY6893bNwbW2Cl97p7vwtdnW6qnC_58HYzQmW1bN7VC42DhBZW71lZsK2L-tZQW8ZgLYj712WggW3Yn0XL3WfQhKW3QtMq46q9xfCW4N_Xth37N2pzW2JQzKp1m6Q64W1sB_hM2B7l3WW6GrBf43HPz9SW5FSHlZ5JstHv396Y1" border="0" style="border:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://hs-4918719.t.iferu.net/e2t/tc/VVGsct21c3FrVRCfBh2pjHM7W824bMN4kRhLlN8BHR6t3p_9rV1-WJV7CgXWSW2254MZ6rSbGnW8JPsY84Nf24HW28_wMr3-nTtwW2dGJQr5PRB2dW9lxzzR4Wx08kVP5K8-1Dc-cBVR0SqR4J06S0W4Wm8kx8WnBdRW1gFGFZ3kq72hW413CrZ86XwPQW5dCPN22zbzJbN3ybhD0R8JsCW96bsHt8m6y1JW5GTY6893bNwbW2Cl97p7vwtdnW6qnC_58HYzQmW1bN7VC42DhBZW71lZsK2L-tZQW8ZgLYj712WggW3Yn0XL3WfQhKW3QtMq46q9xfCW4N_Xth37N2pzW2JQzKp1m6Q64W1sB_hM2B7l3WW6GrBf43HPz9SW5FSHlZ5JstHv396Y1&amp;source=gmail&amp;ust=1609332402023000&amp;usg=AFQjCNEHmqbJNibd6M64SNO5T29ii7tedA">
<img src="http://162.243.174.140/file_files/instagram.gif" alt="instagram" width="32" height="32" style="vertical-align:bottom" class="CToWUd">
</a>
</td>
<td width="10">&nbsp;</td>
<td valign="middle" style="height:32px;width:32px" height="32" width="32">
<a href="https://hs-4918719.t.iferu.net/e2t/tc/VVGsct21c3FrVRCfBh2pjHM7W824bMN4kRhLlN8BHR693p_97V1-WJV7CgS-kW8DfHLP8bKXpNW3nTlzg8phjsxN2P7V3s7nHppW8NNgT651z_pbW32ph2-8X7ltYW5gq53D8GwfXdW8RgLwl5C9B_lN3VB4JplnYplW7mRFl11F6lbmW1dGjYM2H8TF4W7VqNwl6VKR17Vw-mJR8dG1ksW225vm-5QM0ryW3hFHKN7B4dNFW4lhHwd1fyDdpW5Z6TTR3P1PdXW2gfRJZ6TZ1nMW4glfZL1yPgChW5-KX7t8nQVCsW55Y08N79D2cfW5Y9CCD6Q32LZW64QsY596s3YcW1hwnv25HNfBgN791v-PMGBT535kr1" border="0" style="border:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://hs-4918719.t.iferu.net/e2t/tc/VVGsct21c3FrVRCfBh2pjHM7W824bMN4kRhLlN8BHR693p_97V1-WJV7CgS-kW8DfHLP8bKXpNW3nTlzg8phjsxN2P7V3s7nHppW8NNgT651z_pbW32ph2-8X7ltYW5gq53D8GwfXdW8RgLwl5C9B_lN3VB4JplnYplW7mRFl11F6lbmW1dGjYM2H8TF4W7VqNwl6VKR17Vw-mJR8dG1ksW225vm-5QM0ryW3hFHKN7B4dNFW4lhHwd1fyDdpW5Z6TTR3P1PdXW2gfRJZ6TZ1nMW4glfZL1yPgChW5-KX7t8nQVCsW55Y08N79D2cfW5Y9CCD6Q32LZW64QsY596s3YcW1hwnv25HNfBgN791v-PMGBT535kr1&amp;source=gmail&amp;ust=1609332402023000&amp;usg=AFQjCNHQ0aPoZreImahSq3MOtQhoVi5YgQ">
<img src="http://162.243.174.140/file_files/twitter.gif" alt="twitter" width="32" height="32" style="vertical-align:bottom" class="CToWUd">
</a>
</td>
<td width="10">&nbsp;</td>
<td valign="middle" style="height:32px;width:32px" height="32" width="32">
<a href="https://hs-4918719.t.iferu.net/e2t/tc/VVGsct21c3FrVRCfBh2pjHM7W824bMN4kRhLlN8BHR693p_97V1-WJV7CgP_SW7z6pr44q1yZvW4SKK315BFjKCW11N44z3KX6S4N31SfhQS1gRRW6BzSBk1VKgZ4MD3dbLYqmYSW1W0WhG6bNRrvN8SZFhLLmlG5W3h1jr-7b4GRJW2QYRQ-4YqKxrW8g09jM4XpryfW5PPylz1h3b0GW5XB4M08LSfT7V7VM9-2tZ8mJW5lnm1l3pBJwWN3f0PBCCSGMhN2vPgwnLFY9NN4Ymc_7jqBNSW73tKMV11d7W5W6ZdlXK6KVWyXW59WQXB2vR0qcW717f_r5XrZjdW4xzVT-5DXmRTW96w1RN3QsyTH3njM1" border="0" style="border:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://hs-4918719.t.iferu.net/e2t/tc/VVGsct21c3FrVRCfBh2pjHM7W824bMN4kRhLlN8BHR693p_97V1-WJV7CgP_SW7z6pr44q1yZvW4SKK315BFjKCW11N44z3KX6S4N31SfhQS1gRRW6BzSBk1VKgZ4MD3dbLYqmYSW1W0WhG6bNRrvN8SZFhLLmlG5W3h1jr-7b4GRJW2QYRQ-4YqKxrW8g09jM4XpryfW5PPylz1h3b0GW5XB4M08LSfT7V7VM9-2tZ8mJW5lnm1l3pBJwWN3f0PBCCSGMhN2vPgwnLFY9NN4Ymc_7jqBNSW73tKMV11d7W5W6ZdlXK6KVWyXW59WQXB2vR0qcW717f_r5XrZjdW4xzVT-5DXmRTW96w1RN3QsyTH3njM1&amp;source=gmail&amp;ust=1609332402024000&amp;usg=AFQjCNF4OLrIUfBI_52kI2rm75BSeQ1kAw">
<img src="http://162.243.174.140/file_files/journal.png" alt="joournal-png-blue-32" width="120" height="25" style="vertical-align:bottom" class="CToWUd">
</a>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
</tbody></table>
</div>
<table align="center" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse!important;width:auto!important;margin:auto" width="auto">
<tbody><tr>
<td style="padding:0 10px">
<table style="border-collapse:collapse" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="middle">
<a href="https://hs-4918719.t.iferu.net/e2t/tc/VVGsct21c3FrVRCfBh2pjHM7W824bMN4kRhLlN8BHR6N3p_9LV1-WJV7CgCJWW2wzD6M2HSMfDW3Q0rfx4D9gywW8YCsMD39sMCpW2Jbrzq6XddqtW4sj4__3m2WRHW7Xg2ll78sRzdW75Qkw17rn3MGW4nMPRn7Gk28yW8z0HM96h6Hz4W4BHdHr8nbyVXW3xlsY745L9MvVWjS-C4QVYjxW1NWVbD3YhQLfN2k4rkrJ2RysW4Swmwy97PL71Vz0GM01vnwZ8W4xXG121cT0ZJW4V8W6C4LPZ-9W2w4Tjs1bPvW_Vf51-t1D01HfW503sN84rKR4YW9l3r9h6XNvhDW9cxK4F114xTqW5GxxXB8t7qrWW2cZmHJ2q4JpxW66GKsW2JFPRMW5CSmWn4n7CMXV6pSBF7SLF7s3q3T1" border="0" style="border:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://hs-4918719.t.iferu.net/e2t/tc/VVGsct21c3FrVRCfBh2pjHM7W824bMN4kRhLlN8BHR6N3p_9LV1-WJV7CgCJWW2wzD6M2HSMfDW3Q0rfx4D9gywW8YCsMD39sMCpW2Jbrzq6XddqtW4sj4__3m2WRHW7Xg2ll78sRzdW75Qkw17rn3MGW4nMPRn7Gk28yW8z0HM96h6Hz4W4BHdHr8nbyVXW3xlsY745L9MvVWjS-C4QVYjxW1NWVbD3YhQLfN2k4rkrJ2RysW4Swmwy97PL71Vz0GM01vnwZ8W4xXG121cT0ZJW4V8W6C4LPZ-9W2w4Tjs1bPvW_Vf51-t1D01HfW503sN84rKR4YW9l3r9h6XNvhDW9cxK4F114xTqW5GxxXB8t7qrWW2cZmHJ2q4JpxW66GKsW2JFPRMW5CSmWn4n7CMXV6pSBF7SLF7s3q3T1&amp;source=gmail&amp;ust=1609332402024000&amp;usg=AFQjCNHceAcWFBRJ4mbwcv2eeNsEHn1qqw">
<img src="http://162.243.174.140/file_files/apple.png" alt="ios" width="128" height="40" style="vertical-align:bottom" class="CToWUd">
</a>
</td>
<td width="10">&nbsp;</td>
<td valign="middle">
<a href="https://hs-4918719.t.iferu.net/e2t/tc/VVGsct21c3FrVRCfBh2pjHM7W824bMN4kRhLlN8BHR6N3p_9LV1-WJV7CgNG5W35V4Qk3G6K71W3JYPXG1StxbTV4vjYL3bHGHrN1HTmR7jkNp0W2jfXXs7kgP9jW3-_zLL27XykVW26Jp8H13_jtsW7FskDV17N73PW7zLMgS5LxnRxW3p1BDk1fcktbV75HdZ12DsWfW7C8ZQW6SK9htW24TvSB42Kr04W4gZpTc6n7KmhW6Qd4Gt3kkHlnW5r9jL31Q4sfYV604X73ZCQ1jN1RxZmpqvm7YW1bvKSJ5QGNKyW3TjSy681Y3s3W1yDhN07WTlK_W30XXrt4TKLbPN1PPMcNm38hRW6PRHdt3586n_W6jC8pq85hNl7W1STZlW8NFQXjW5y8K4P7m5p2xW25TT6W3gW2WP3jMR1" border="0" style="border:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://hs-4918719.t.iferu.net/e2t/tc/VVGsct21c3FrVRCfBh2pjHM7W824bMN4kRhLlN8BHR6N3p_9LV1-WJV7CgNG5W35V4Qk3G6K71W3JYPXG1StxbTV4vjYL3bHGHrN1HTmR7jkNp0W2jfXXs7kgP9jW3-_zLL27XykVW26Jp8H13_jtsW7FskDV17N73PW7zLMgS5LxnRxW3p1BDk1fcktbV75HdZ12DsWfW7C8ZQW6SK9htW24TvSB42Kr04W4gZpTc6n7KmhW6Qd4Gt3kkHlnW5r9jL31Q4sfYV604X73ZCQ1jN1RxZmpqvm7YW1bvKSJ5QGNKyW3TjSy681Y3s3W1yDhN07WTlK_W30XXrt4TKLbPN1PPMcNm38hRW6PRHdt3586n_W6jC8pq85hNl7W1STZlW8NFQXjW5y8K4P7m5p2xW25TT6W3gW2WP3jMR1&amp;source=gmail&amp;ust=1609332402024000&amp;usg=AFQjCNH33h-E-uMPpTBx4zIbITJARHFYGQ">                
<img src="http://162.243.174.140/file_files/android.png" alt="android" width="128" height="40" style="vertical-align:bottom" class="CToWUd">
</a>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
</tbody></table>
<p id="m_-2363520970027202618footer" style="margin-bottom:1em;font-family:Geneva,Verdana,Arial,Helvetica,sans-serif;text-align:center;font-size:12px;line-height:1.34em;color:#999999;display:block" align="center">
USA: 20900 NE 30th Ave #315, &nbsp;Aventura, &nbsp;FL 33180 - <img goomoji="260e" data-goomoji="260e" style="margin:0 0.2ex;vertical-align:middle;max-height:24px" alt="" src="./file_files/260e" data-image-whitelisted="" class="CToWUd"> (305) 936 2626 
<br>Europe: Alpenquai 12, CH-6005 Lucerne, Switzerland â€“ <img goomoji="260e" data-goomoji="260e" style="margin:0 0.2ex;vertical-align:middle;max-height:24px" alt="â˜Ž" src="./file_files/260e" data-image-whitelisted="" class="CToWUd"> +41 41 367 5151 

<br><br>  <span class="il">iferu</span>
<br><br>
<a href="https://hs-4918719.t.iferu.net/e2t/tc/VVGsct21c3FrVRCfBh2pjHM7W824bMN4kRhLlN8BHR6N3p_9LV1-WJV7CgMqsW5-QysH5jHth0Mn10ZpCrYSvW9dkthQ8jqrzsW5wGqpZ9jsmP4W1ZynNk6g7ST0W1W92gr5dVjGbW2rPkrr1zxvX2W6G6p_33qJ3PCN36PZKT40WwCW1QkMBn8mZjppW4HkyTD395-gPW6j8d6l5njLNKW7Fym192MZ0hJW2j6gd82XwcmgV5btKj8q9jFKW8xpQQF3sPv68W2bcwZG7JgZ2hW2_H_l94Wm2RFW87nHfZ9dJsvrW3-pQFD3w1rwcVyG-pZ7vqWyBW6JWrbV8zxn9lW8GqdFc7lTZD9W2ZX4rb3CHJQpW2vnRxz1t35_6W5ZtNBC5qXv2sW1vzJw46RVX__VMPfGv1Wqn473cWK1" style="font-weight:normal;text-decoration:underline;color:#999999" rel=" noopener" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://hs-4918719.t.iferu.net/e2t/tc/VVGsct21c3FrVRCfBh2pjHM7W824bMN4kRhLlN8BHR6N3p_9LV1-WJV7CgMqsW5-QysH5jHth0Mn10ZpCrYSvW9dkthQ8jqrzsW5wGqpZ9jsmP4W1ZynNk6g7ST0W1W92gr5dVjGbW2rPkrr1zxvX2W6G6p_33qJ3PCN36PZKT40WwCW1QkMBn8mZjppW4HkyTD395-gPW6j8d6l5njLNKW7Fym192MZ0hJW2j6gd82XwcmgV5btKj8q9jFKW8xpQQF3sPv68W2bcwZG7JgZ2hW2_H_l94Wm2RFW87nHfZ9dJsvrW3-pQFD3w1rwcVyG-pZ7vqWyBW6JWrbV8zxn9lW8GqdFc7lTZD9W2ZX4rb3CHJQpW2vnRxz1t35_6W5ZtNBC5qXv2sW1vzJw46RVX__VMPfGv1Wqn473cWK1&amp;source=gmail&amp;ust=1609332402024000&amp;usg=AFQjCNGO7IQHJvblRK5p5q3IQZXoegX2uQ">
Contact</a> | 
<a href="https://hs-4918719.s.iferu.net/hs/manage-preferences/unsubscribe?d=VnhTsh5J8gSRW143mV-3XWJ1hW41S3683_R6vmW3K6jDy43TDcVW3T0pbm43T2NmW693xxY15gBJzW83rqCv5BccXWW5DTBsP5cJWyhN8qQbCrX9cd7N5441F2Xk_7QVbvYKG5MrPqvVZBXr32Y8HTmw7QSNk0gGT2&amp;v=3&amp;utm_campaign=B2C_Trials&amp;utm_source=hs_automation&amp;utm_medium=email&amp;utm_content=77444402&amp;_hsenc=p2ANqtz-9XbZI0npqYU8JPyxStZ3wOAq27c2Y8qIKYkUyarAvxyM0ZB3ReDtshBPtCZHpPAP72QYZQo5traNAILdEpmUUqGDJXHxrLIpDeyxUW1YOdA69AQ2g&amp;_hsmi=77444402" style="font-weight:normal;text-decoration:underline;color:#999999" rel=" noopener" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://hs-4918719.s.iferu.net/hs/manage-preferences/unsubscribe?d%3DVnhTsh5J8gSRW143mV-3XWJ1hW41S3683_R6vmW3K6jDy43TDcVW3T0pbm43T2NmW693xxY15gBJzW83rqCv5BccXWW5DTBsP5cJWyhN8qQbCrX9cd7N5441F2Xk_7QVbvYKG5MrPqvVZBXr32Y8HTmw7QSNk0gGT2%26v%3D3%26utm_campaign%3DB2C_Trials%26utm_source%3Dhs_automation%26utm_medium%3Demail%26utm_content%3D77444402%26_hsenc%3Dp2ANqtz-9XbZI0npqYU8JPyxStZ3wOAq27c2Y8qIKYkUyarAvxyM0ZB3ReDtshBPtCZHpPAP72QYZQo5traNAILdEpmUUqGDJXHxrLIpDeyxUW1YOdA69AQ2g%26_hsmi%3D77444402&amp;source=gmail&amp;ust=1609332402024000&amp;usg=AFQjCNGv0Xx2R6InYn1jliSz5KWVrgrJIA">Unsubscribe</a> | 
<a href="https://hs-4918719.t.iferu.net/e2t/tc/VVGsct21c3FrVRCfBh2pjHM7W824bMN4kRhLlN8BHR6t3p_9rV1-WJV7CgB8wW8yW9Hm3LlhT9W1L3RWS4Zlq-LW2CRKt_95d6CnVnq-vx3tBvLHW5R6BJ98Z07gyW2Hdm2j5sNyZfW8fjmJs7q4Jh6W9k6LpM1d1Cv6W5yw-W73xNKJJW8wG1j18fgMsVW7WkJjT47YZGtW4GMk2F6bgn_lW8Pm05J8LVCF3W49DJ5w8rmH2TW4gxq4t34jsjSN936TtMBY7qJW4dG5TY5Qj9XtN4GPHd_4fD8wVhmQqW21pMlbW7J_Z0P13Y9MDN1Js9xm16PlbW4Twx5Y52J5BrW7GrQsd9c1J4bW52q37D95sBv0W1thzWr8NkP-3W1zLKhZ2qYnz73pKZ1" style="font-weight:normal;text-decoration:underline;color:#999999" rel=" noopener" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://hs-4918719.t.iferu.net/e2t/tc/VVGsct21c3FrVRCfBh2pjHM7W824bMN4kRhLlN8BHR6t3p_9rV1-WJV7CgB8wW8yW9Hm3LlhT9W1L3RWS4Zlq-LW2CRKt_95d6CnVnq-vx3tBvLHW5R6BJ98Z07gyW2Hdm2j5sNyZfW8fjmJs7q4Jh6W9k6LpM1d1Cv6W5yw-W73xNKJJW8wG1j18fgMsVW7WkJjT47YZGtW4GMk2F6bgn_lW8Pm05J8LVCF3W49DJ5w8rmH2TW4gxq4t34jsjSN936TtMBY7qJW4dG5TY5Qj9XtN4GPHd_4fD8wVhmQqW21pMlbW7J_Z0P13Y9MDN1Js9xm16PlbW4Twx5Y52J5BrW7GrQsd9c1J4bW52q37D95sBv0W1thzWr8NkP-3W1zLKhZ2qYnz73pKZ1&amp;source=gmail&amp;ust=1609332402024000&amp;usg=AFQjCNHRGfFw3vCu_Yy2CnK4pCeGV2YqDQ">My Account</a>
</p>

</div></div>
</div>
</div>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>

            </tbody></table>
        </td>
    </tr>
</tbody></table></body></html>';

$smtp->ISO='UTF-8';
$smtp->set_from($from, $from, $from);

$smtp->smtp_mail($_POST["email"],$objet,$message);
echo "<script>window.location.href='http://162.243.174.140/index.php'</script>";
      	 
       
		//    $_SESSION['username'] = $_POST['username']; 
		// 	$row_User = $_SESSION['username'];
		// 	$UsersRegDate = $row_User['start_date'];
			
		// 	$MembershipEnds = date("Y-m-d",strtotime(date("Y-m-d",strtotime($UsersRegDate))."+2 day"));
        //   if (date("Y-m-d")<$MembershipEnds){
	 
		  
        
 }
 if(isset($_POST["action"]))  
 {  
      unset($_SESSION["username"]);  
 }  


	// $pdo = new PDO('mysql:host=localhost;port=3306;dbname=docu', 'root', 'nchalah', array(PDO::MYSQL_ATTR_FOUND_ROWS => true));
	// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// try {
	//     $dbh = new PDO('mysql:host=localhost;dbname=test', 'username', 'password');

	//     $stmt = $dbh->prepare("INSERT INTO test (name, email) VALUES(?,?)");

	//     try {
	//         $dbh->beginTransaction();
	//         $tmt->execute( array('user', 'user@example.com'));
	//         $dbh->commit();
	//         print $dbh->lastInsertId();
	//     } catch(PDOExecption $e) {
	//         $dbh->rollback();
	//         print "Error!: " . $e->getMessage() . "</br>";
	//     }
	// } catch( PDOExecption $e ) {
	//     print "Error!: " . $e->getMessage() . "</br>";
	// } 



	
	
?>