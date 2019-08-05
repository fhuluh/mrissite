<?php

define('EMAIL_FOR_REPORTS', 'fhulu@mris.co.za');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Application Submitted!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-metro-green.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?><a href="http://localhost/new%20bontlebame%20-%20Copy%20(2)/grade12.php" >&nbspx</a></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-metro-green.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-metro-green" style="background-color:silver;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#000000;max-width:100%;min-width:150px" method="post"><div class="title"><h2>Partnering with us</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title">First and Last Name<span class="required"></span></label><input class="large" type="text" name="input" required="required"/></div>

	<div class="element-phone<?php frmd_add_class("phone"); ?>"><label class="title">Phone Number<span class="required"></span></label><input class="large" type="tel" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="24" name="phone" required="required" value=""/></div>
	<div class="element-email<?php frmd_add_class("email"); ?>"><label class="title">Email<span class="required"></span></label><input class="large" type="email" name="email" value="" required="required"/></div>
	<div class="element-select<?php frmd_add_class("select"); ?>"><label class="title">Session Facilitators<span class="required"></span></label><div class="large"><span><select name="select" required="required">

		<option value="--- Select ---">--- Select ---</option>
		<option value="Entrepreneurship ">Entrepreneurship </option>
		<option value="Alternative Qualifications">Alternative Qualifications</option>
		<option value="Tertiary Education and Funds">Tertiary Education and Funds</option>
		<option value="Economic Gaps = New Career Opportunities">Economic Gaps = New Career Opportunities</option>
		<option value="Information Technology">Information Technology</option>
		<option value="Intervention Funding">Intervention Funding</option>
		<option value="Social Dynamics">Social Dynamics</option>
		<option value="0ther">0ther</option></select><i></i></span></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title">Other</label><textarea class="small" name="textarea" cols="20" rows="5" ></textarea></div>

	
	<div class="submit">
  
<input type="submit" value="Submit"/>
<input type="submit" value="close Form" onclick="closeForm()" style="background-color:red;"/>

</div>

</form>

<script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-metro-green.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>