<?php
namespace PHPMaker2020\p_simasset1;

// Autoload
include_once "autoload.php";

// Session
if (session_status() !== PHP_SESSION_ACTIVE)
	\Delight\Cookie\Session::start(Config("COOKIE_SAMESITE")); // Init session data

// Output buffering
ob_start();
?>
<?php

// Write header
WriteHeader(FALSE);

// Create page object
$t001_property_add = new t001_property_add();

// Run the page
$t001_property_add->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t001_property_add->Page_Render();
?>
<?php include_once "header.php"; ?>
<script>
var ft001_propertyadd, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "add";
	ft001_propertyadd = currentForm = new ew.Form("ft001_propertyadd", "add");

	// Validate form
	ft001_propertyadd.validate = function() {
		if (!this.validateRequired)
			return true; // Ignore validation
		var $ = jQuery, fobj = this.getForm(), $fobj = $(fobj);
		if ($fobj.find("#confirm").val() == "confirm")
			return true;
		var elm, felm, uelm, addcnt = 0;
		var $k = $fobj.find("#" + this.formKeyCountName); // Get key_count
		var rowcnt = ($k[0]) ? parseInt($k.val(), 10) : 1;
		var startcnt = (rowcnt == 0) ? 0 : 1; // Check rowcnt == 0 => Inline-Add
		var gridinsert = ["insert", "gridinsert"].includes($fobj.find("#action").val()) && $k[0];
		for (var i = startcnt; i <= rowcnt; i++) {
			var infix = ($k[0]) ? String(i) : "";
			$fobj.data("rowindex", infix);
			<?php if ($t001_property_add->Property->Required) { ?>
				elm = this.getElements("x" + infix + "_Property");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t001_property_add->Property->caption(), $t001_property_add->Property->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t001_property_add->TemplateFile->Required) { ?>
				elm = this.getElements("x" + infix + "_TemplateFile");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t001_property_add->TemplateFile->caption(), $t001_property_add->TemplateFile->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t001_property_add->TemplateFile2->Required) { ?>
				elm = this.getElements("x" + infix + "_TemplateFile2");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t001_property_add->TemplateFile2->caption(), $t001_property_add->TemplateFile2->RequiredErrorMessage)) ?>");
			<?php } ?>

				// Call Form_CustomValidate event
				if (!this.Form_CustomValidate(fobj))
					return false;
		}

		// Process detail forms
		var dfs = $fobj.find("input[name='detailpage']").get();
		for (var i = 0; i < dfs.length; i++) {
			var df = dfs[i], val = df.value;
			if (val && ew.forms[val])
				if (!ew.forms[val].validate())
					return false;
		}
		return true;
	}

	// Form_CustomValidate
	ft001_propertyadd.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

		// Your custom validation code here, return false if invalid.
		return true;
	}

	// Use JavaScript validation or not
	ft001_propertyadd.validateRequired = <?php echo Config("CLIENT_VALIDATE") ? "true" : "false" ?>;

	// Dynamic selection lists
	loadjs.done("ft001_propertyadd");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php $t001_property_add->showPageHeader(); ?>
<?php
$t001_property_add->showMessage();
?>
<form name="ft001_propertyadd" id="ft001_propertyadd" class="<?php echo $t001_property_add->FormClassName ?>" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t001_property">
<input type="hidden" name="action" id="action" value="insert">
<input type="hidden" name="modal" value="<?php echo (int)$t001_property_add->IsModal ?>">
<div class="ew-add-div"><!-- page* -->
<?php if ($t001_property_add->Property->Visible) { // Property ?>
	<div id="r_Property" class="form-group row">
		<label id="elh_t001_property_Property" for="x_Property" class="<?php echo $t001_property_add->LeftColumnClass ?>"><?php echo $t001_property_add->Property->caption() ?><?php echo $t001_property_add->Property->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t001_property_add->RightColumnClass ?>"><div <?php echo $t001_property_add->Property->cellAttributes() ?>>
<span id="el_t001_property_Property">
<input type="text" data-table="t001_property" data-field="x_Property" name="x_Property" id="x_Property" size="30" maxlength="100" placeholder="<?php echo HtmlEncode($t001_property_add->Property->getPlaceHolder()) ?>" value="<?php echo $t001_property_add->Property->EditValue ?>"<?php echo $t001_property_add->Property->editAttributes() ?>>
</span>
<?php echo $t001_property_add->Property->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t001_property_add->TemplateFile->Visible) { // TemplateFile ?>
	<div id="r_TemplateFile" class="form-group row">
		<label id="elh_t001_property_TemplateFile" for="x_TemplateFile" class="<?php echo $t001_property_add->LeftColumnClass ?>"><?php echo $t001_property_add->TemplateFile->caption() ?><?php echo $t001_property_add->TemplateFile->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t001_property_add->RightColumnClass ?>"><div <?php echo $t001_property_add->TemplateFile->cellAttributes() ?>>
<span id="el_t001_property_TemplateFile">
<input type="text" data-table="t001_property" data-field="x_TemplateFile" name="x_TemplateFile" id="x_TemplateFile" size="30" maxlength="100" placeholder="<?php echo HtmlEncode($t001_property_add->TemplateFile->getPlaceHolder()) ?>" value="<?php echo $t001_property_add->TemplateFile->EditValue ?>"<?php echo $t001_property_add->TemplateFile->editAttributes() ?>>
</span>
<?php echo $t001_property_add->TemplateFile->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t001_property_add->TemplateFile2->Visible) { // TemplateFile2 ?>
	<div id="r_TemplateFile2" class="form-group row">
		<label id="elh_t001_property_TemplateFile2" for="x_TemplateFile2" class="<?php echo $t001_property_add->LeftColumnClass ?>"><?php echo $t001_property_add->TemplateFile2->caption() ?><?php echo $t001_property_add->TemplateFile2->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t001_property_add->RightColumnClass ?>"><div <?php echo $t001_property_add->TemplateFile2->cellAttributes() ?>>
<span id="el_t001_property_TemplateFile2">
<input type="text" data-table="t001_property" data-field="x_TemplateFile2" name="x_TemplateFile2" id="x_TemplateFile2" size="30" maxlength="100" placeholder="<?php echo HtmlEncode($t001_property_add->TemplateFile2->getPlaceHolder()) ?>" value="<?php echo $t001_property_add->TemplateFile2->EditValue ?>"<?php echo $t001_property_add->TemplateFile2->editAttributes() ?>>
</span>
<?php echo $t001_property_add->TemplateFile2->CustomMsg ?></div></div>
	</div>
<?php } ?>
</div><!-- /page* -->
<?php if (!$t001_property_add->IsModal) { ?>
<div class="form-group row"><!-- buttons .form-group -->
	<div class="<?php echo $t001_property_add->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("AddBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t001_property_add->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
	</div><!-- /buttons offset -->
</div><!-- /buttons .form-group -->
<?php } ?>
</form>
<?php
$t001_property_add->showPageFooter();
if (Config("DEBUG"))
	echo GetDebugMessage();
?>
<script>
loadjs.ready("load", function() {

	// Startup script
	// Write your table-specific startup script here
	// console.log("page loaded");

});
</script>
<?php include_once "footer.php"; ?>
<?php
$t001_property_add->terminate();
?>