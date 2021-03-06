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
$t102_ho_detail_edit = new t102_ho_detail_edit();

// Run the page
$t102_ho_detail_edit->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t102_ho_detail_edit->Page_Render();
?>
<?php include_once "header.php"; ?>
<script>
var ft102_ho_detailedit, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "edit";
	ft102_ho_detailedit = currentForm = new ew.Form("ft102_ho_detailedit", "edit");

	// Validate form
	ft102_ho_detailedit.validate = function() {
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
			<?php if ($t102_ho_detail_edit->asset_id->Required) { ?>
				elm = this.getElements("x" + infix + "_asset_id");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t102_ho_detail_edit->asset_id->caption(), $t102_ho_detail_edit->asset_id->RequiredErrorMessage)) ?>");
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
	ft102_ho_detailedit.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

		// Your custom validation code here, return false if invalid.
		return true;
	}

	// Use JavaScript validation or not
	ft102_ho_detailedit.validateRequired = <?php echo Config("CLIENT_VALIDATE") ? "true" : "false" ?>;

	// Dynamic selection lists
	ft102_ho_detailedit.lists["x_asset_id"] = <?php echo $t102_ho_detail_edit->asset_id->Lookup->toClientList($t102_ho_detail_edit) ?>;
	ft102_ho_detailedit.lists["x_asset_id"].options = <?php echo JsonEncode($t102_ho_detail_edit->asset_id->lookupOptions()) ?>;
	loadjs.done("ft102_ho_detailedit");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php $t102_ho_detail_edit->showPageHeader(); ?>
<?php
$t102_ho_detail_edit->showMessage();
?>
<form name="ft102_ho_detailedit" id="ft102_ho_detailedit" class="<?php echo $t102_ho_detail_edit->FormClassName ?>" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t102_ho_detail">
<input type="hidden" name="action" id="action" value="update">
<input type="hidden" name="modal" value="<?php echo (int)$t102_ho_detail_edit->IsModal ?>">
<?php if ($t102_ho_detail->getCurrentMasterTable() == "t101_ho_head") { ?>
<input type="hidden" name="<?php echo Config("TABLE_SHOW_MASTER") ?>" value="t101_ho_head">
<input type="hidden" name="fk_id" value="<?php echo HtmlEncode($t102_ho_detail_edit->hohead_id->getSessionValue()) ?>">
<?php } ?>
<div class="ew-edit-div"><!-- page* -->
<?php if ($t102_ho_detail_edit->asset_id->Visible) { // asset_id ?>
	<div id="r_asset_id" class="form-group row">
		<label id="elh_t102_ho_detail_asset_id" for="x_asset_id" class="<?php echo $t102_ho_detail_edit->LeftColumnClass ?>"><?php echo $t102_ho_detail_edit->asset_id->caption() ?><?php echo $t102_ho_detail_edit->asset_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t102_ho_detail_edit->RightColumnClass ?>"><div <?php echo $t102_ho_detail_edit->asset_id->cellAttributes() ?>>
<span id="el_t102_ho_detail_asset_id">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_asset_id"><?php echo EmptyValue(strval($t102_ho_detail_edit->asset_id->ViewValue)) ? $Language->phrase("PleaseSelect") : $t102_ho_detail_edit->asset_id->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t102_ho_detail_edit->asset_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t102_ho_detail_edit->asset_id->ReadOnly || $t102_ho_detail_edit->asset_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_asset_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $t102_ho_detail_edit->asset_id->Lookup->getParamTag($t102_ho_detail_edit, "p_x_asset_id") ?>
<input type="hidden" data-table="t102_ho_detail" data-field="x_asset_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t102_ho_detail_edit->asset_id->displayValueSeparatorAttribute() ?>" name="x_asset_id" id="x_asset_id" value="<?php echo $t102_ho_detail_edit->asset_id->CurrentValue ?>"<?php echo $t102_ho_detail_edit->asset_id->editAttributes() ?>>
</span>
<?php echo $t102_ho_detail_edit->asset_id->CustomMsg ?></div></div>
	</div>
<?php } ?>
</div><!-- /page* -->
	<input type="hidden" data-table="t102_ho_detail" data-field="x_id" name="x_id" id="x_id" value="<?php echo HtmlEncode($t102_ho_detail_edit->id->CurrentValue) ?>">
<?php if (!$t102_ho_detail_edit->IsModal) { ?>
<div class="form-group row"><!-- buttons .form-group -->
	<div class="<?php echo $t102_ho_detail_edit->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("SaveBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t102_ho_detail_edit->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
	</div><!-- /buttons offset -->
</div><!-- /buttons .form-group -->
<?php } ?>
</form>
<?php
$t102_ho_detail_edit->showPageFooter();
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
$t102_ho_detail_edit->terminate();
?>