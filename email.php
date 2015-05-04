<?php
$to      = 'dinneract2015@gmail.com';
$subject = "signup " . date(DATE_RFC2822);
$role	 = $_POST["type"];
$userEmail = $_POST["email"];
$message = "I'm a " . $role . " and my email is " . $userEmail;
$headers = 'From: noreply@dinneract.com' . "\r\n" .
   // 'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$status = mail($to, $subject, $message, $headers);

if(!$status) {
	$error = error_get_last();
	echo $error["message"];	
	//echo "failed";
}
//image
$roleImgs = array(
	"Foodie" 	=> "http://res.cloudinary.com/dinneract/image/upload/v1430753846/foodie_qiae9c.jpg",
	"Merchant"	=> "http://res.cloudinary.com/dinneract/image/upload/v1430753846/merchant_xc7gab.jpg",
	"Chef"		=> "http://res.cloudinary.com/dinneract/image/upload/v1430753846/chef_necqzd.jpg",
);

$roleMsgs = array(
	"Foodie" 	=> "insiders to gain early access to Dinneract.",
	"Merchant"	=> "business insiders to gain early access to Dinneract.",
	"Chef"		=> "business insiders to gain early access to Dinneract.",
);



$userMsg = '';

$userMsg .= '
<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;margin: 0;padding: 0;background-color: #F2F2F2;height: 100% !important;width: 100% !important;">
                <tr>
                    <td align="center" valign="top" id="bodyCell" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;margin: 0;padding: 20px;border-top: 0;height: 100% !important;width: 100% !important;">
                        <!-- BEGIN TEMPLATE // -->
                        <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;border: 0;">
                            <tr>
                                <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                    <!-- BEGIN PREHEADER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="templatePreheader" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FFFFFF;border-top: 0;border-bottom: 0;">
                                        <tr>
                                        	<td valign="top" class="preheaderContainer" style="padding-top: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                
            </td>
        </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>
                                    <!-- // END PREHEADER -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                    <!-- BEGIN HEADER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FFFFFF;border-top: 0;border-bottom: 0;">
                                        <tr>
                                            <td valign="top" class="headerContainer" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnCaptionBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <tbody class="mcnCaptionBlockOuter">
        <tr>
            <td class="mcnCaptionBlockInner" valign="top" style="padding: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                



<table border="0" cellpadding="0" cellspacing="0" class="mcnCaptionRightContentOuter" width="100%" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <tbody><tr>
        <td valign="top" class="mcnCaptionRightContentInner" style="padding: 0 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
            <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnCaptionRightImageContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                <tbody><tr>
                    <td class="mcnCaptionRightImageContent" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    

						<a href="http://www.dinneract.com/" title="'.$role.'" class="" target="_blank" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                        
                        <img alt="'.$role.'" src="'.$roleImgs[$role].'" width="264" style="max-width: 447px;border: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;vertical-align: bottom;" class="mcnImage">
                        
                        </a>

                    
                    </td>
                </tr>
            </tbody></table>
            <table class="mcnCaptionRightTextContentContainer" align="right" border="0" cellpadding="0" cellspacing="0" width="264" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                <tbody><tr>
                    <td valign="top" class="mcnTextContent" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-family: Helvetica;font-size: 15px;line-height: 150%;text-align: left;">
                        <span style="color: #606060;font-family: helvetica;font-size: 14px;line-height: 22.5px;">Dear Chef,</span>
                        <br style="color: #606060;line-height: 10px;">
                        <br style="color: #606060;font-family: Helvetica;font-size: 15px;line-height: 22.5px;">
						<span style="color: #606060;font-family: helvetica;font-size: 15px;line-height: 22.5px;">Thank you for joining Dinneract!</span>
						<br style="color: #606060;font-family: Helvetica;font-size: 15px;line-height: 22.5px;">
						<span style="color: #606060;font-family: helvetica;font-size: 15px;line-height: 22.5px;">You are one of the top&nbsp;</span><strong style="color: #606060;font-family: helvetica;font-size: 15px;line-height: 22.5px;">1,000</strong><span style="color: #606060;font-family: helvetica;font-size: 15px;line-height: 22.5px;">&nbsp;'.$roleMsgs[role].'</span>
						<br style="color: #606060;font-family: Helvetica;font-size: 15px;line-height: 22.5px;">
						<span style="color: #606060;font-family: helvetica;font-size: 15px;line-height: 22.5px;">You will soon receive a special invitation to our app and web portal when we launch.</span>
						<br style="color: #606060;font-family: Helvetica;font-size: 15px;line-height: 22.5px;">
						<span style="color: #606060;font-family: helvetica;font-size: 15px;line-height: 22.5px;">For questions and feebacks, contact us at</span>
						<a href="mailto:dinneract2015@gmail.com" style="color: #6DC6DD;font-family: Helvetica;font-size: 15px;line-height: 22.5px;word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;font-weight: normal;text-decoration: underline;" target="_blank">dinneract2015@gmail.com</a>
						<br style="color: #606060;font-family: Helvetica;font-size: 15px;line-height: 22.5px;">
						<span style="color: #606060;font-family: helvetica;font-size: 15px;line-height: 22.5px;">We look forward to serving your business!</span>
						<br style="color: #606060;font-family: Helvetica;font-size: 15px;line-height: 22.5px;">
						<br style="color: #606060;font-family: Helvetica;font-size: 15px;line-height: 22.5px;">
						<span style="color: #606060;font-family: helvetica;font-size: 18px;line-height: 22.5px;"><strong>Dinneract Team</strong></span>
						<br style="color: #606060;font-family: Helvetica;font-size: 15px;line-height: 22.5px;">
						<em style="color: #606060;font-family: helvetica;font-size: 15px;line-height: 22.5px;">Food is the new fashion.</em>
                    </td>
                </tr>
            </tbody></table>
        </td>
    </tr>
</tbody></table>




            </td>
        </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>
                                    <!-- // END HEADER -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                    <!-- BEGIN BODY // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FFFFFF;border-top: 0;border-bottom: 0;">
                                        <tr>
                                            <td valign="top" class="bodyContainer" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                
                <table align="left" border="0" cellpadding="0" cellspacing="0" width="600" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top: 9px;padding-right: 18px;padding-bottom: 9px;padding-left: 18px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-family: Helvetica;font-size: 15px;line-height: 150%;text-align: left;">
                        
                            <span style="color: #606060;font-family: open sans,sans-serif;font-size: 12px;line-height: normal;">Dinneract is world\'s first community powered food social shopping App. Our mission is to diminish the retail obstacles between vendors and consumers and bring the latest healthy, quality specialty foods and kitchenwares to everyone in the most effective and stylish way.</span>
                        </td>
                    </tr>
                </tbody></table>
                
            </td>
        </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>
                                    <!-- // END BODY -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                    <!-- BEGIN FOOTER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateFooter" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FFFFFF;border-top: 0;border-bottom: 0;">
                                        <tr>
                                            <td valign="top" class="footerContainer" style="padding-bottom: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                
                <table align="left" border="0" cellpadding="0" cellspacing="0" width="600" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top: 9px;padding-right: 18px;padding-bottom: 9px;padding-left: 18px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-family: Helvetica;font-size: 11px;line-height: 125%;text-align: left;">
                        
                            <em>Copyright © 2015 Dinneract, All rights reserved.</em><br>
&nbsp;
                        </td>
                    </tr>
                </tbody></table>
                
            </td>
        </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>
                                    <!-- // END FOOTER -->
                                </td>
                            </tr>
                        </table>
                        <!-- // END TEMPLATE -->
                    </td>
                </tr>
            </table>';





$subject = "Dinneract Subscription Confirmation";
$headers = 'From: noreply@dinneract.com' . "\r\n" .
	'Reply-To: dinneract2015@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$status = mail($userEmail, $subject, $userMsg, $headers);


if($status) {
	echo "success";
} else {
	$error = error_get_last();
	echo $error["message"];	
	//echo "failed";
}
?> 
