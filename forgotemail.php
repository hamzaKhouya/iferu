

<?php
include('Class.SMTP.php'); 
 if(isset($_POST["email"])){
    $email=strip_tags($_POST["email"]);
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
    <div id="m_-2363520970027202618hs_cos_wrapper_module_15379566794101590" style="color:inherit;font-size:inherit;line-height:inherit"><div id="m_-2363520970027202618hs_cos_wrapper_module_15379566794101590_" style="color:inherit;font-size:inherit;line-height:inherit"><p style="margin-bottom:1em">Bonjour<span>&nbsp;</span></p>
    <p style="margin-bottom:1em">Pour réinitialiser votre mot de passe Iferu, il vous suffit de cliquer sur le lien ci-dessous.</p>
    <p style="margin-bottom:1em">Ce lien vous donnera accès à une page web vous permettant de créer un nouveau mot de passe.</p>
    <p style="margin-bottom:1em">Merci de noter que ce lien expirera 24 heures après l\'envoi de ce message électronique.&nbsp;</p>
    
    <a href=http://162.243.174.140/forget.php?email='.$email.'
    <p style="margin-bottom:1em">Reset Password</p></div></div>
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
    
    
                </tbody></table>
            </td>
        </tr>
    </tbody></table></body></html>';
    
    $smtp->ISO='UTF-8';
    $smtp->set_from($from, $from, $from);
    
    $smtp->smtp_mail($_POST["email"],$objet,$message);
    echo "<script> location.href='index.php'; </script>";
    }

?>