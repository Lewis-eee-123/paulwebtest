<?php

define('EMAIL_FOR_REPORTS', 'sensa.ansa@gmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thank you, your order is being processed. Before collecting your order, please check your email for confirmation of your order and the time to collect your order. If you do not receive this email, call BEFORE 3.30pm either 01449 258456 or 07818 408940');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-green.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-green.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-green" style="background-color:#FFFFFF;font-size:15px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:960px;min-width:150px" method="post"><div class="title"><h2>Order</h2></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input1" required="required" placeholder="Name"/><span class="icon-place"></span></div></div>
	<div class="element-email<?php frmd_add_class("email"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="email" name="email" value="" required="required" placeholder="Email"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input3"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input3" required="required" placeholder="Phone"/><span class="icon-place"></span></div></div>
	<div class="element-checkbox<?php frmd_add_class("checkbox"); ?>" title="If you would like > 1 of an item; DO NOT CLICK HERE state the item and amount in the text box at the bottom of the form:"><label class="title">Main Order:</label>		<div class="column column1"><label><input type="checkbox" name="checkbox[]" value="Chicken Curry"/ ><span>Chicken Curry</span></label><label><input type="checkbox" name="checkbox[]" value="Chicken Korma"/ ><span>Chicken Korma</span></label><label><input type="checkbox" name="checkbox[]" value="Lamb Curry"/ ><span>Lamb Curry</span></label><label><input type="checkbox" name="checkbox[]" value="Lamb Korma"/ ><span>Lamb Korma</span></label><label><input type="checkbox" name="checkbox[]" value="King Prawn Curry"/ ><span>King Prawn Curry</span></label><label><input type="checkbox" name="checkbox[]" value="King Prawn Korma"/ ><span>King Prawn Korma</span></label><label><input type="checkbox" name="checkbox[]" value="Vegtable Curry"/ ><span>Vegtable Curry</span></label><label><input type="checkbox" name="checkbox[]" value="Vegtable Korma"/ ><span>Vegtable Korma</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-checkbox<?php frmd_add_class("checkbox1"); ?>"><label class="title">Side Order:</label>		<div class="column column1"><label><input type="checkbox" name="checkbox1[]" value="Pilau Rice"/ ><span>Pilau Rice</span></label><label><input type="checkbox" name="checkbox1[]" value="Poppadom"/ ><span>Poppadom</span></label><label><input type="checkbox" name="checkbox1[]" value="Naan Bread"/ ><span>Naan Bread</span></label><label><input type="checkbox" name="checkbox1[]" value="Samosa"/ ><span>Samosa</span></label><label><input type="checkbox" name="checkbox1[]" value="Inion Bahjee"/ ><span>Inion Bahjee</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input" placeholder="> 1 item"/><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-green.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>