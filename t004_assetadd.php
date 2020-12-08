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
$t004_asset_add = new t004_asset_add();

// Run the page
$t004_asset_add->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t004_asset_add->Page_Render();
?>
<?php include_once "header.php"; ?>
<script>
var ft004_assetadd, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "add";
	ft004_assetadd = currentForm = new ew.Form("ft004_assetadd", "add");

	// Validate form
	ft004_assetadd.validate = function() {
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
			<?php if ($t004_asset_add->property_id->Required) { ?>
				elm = this.getElements("x" + infix + "_property_id");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t004_asset_add->property_id->caption(), $t004_asset_add->property_id->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t004_asset_add->type_id->Required) { ?>
				elm = this.getElements("x" + infix + "_type_id");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t004_asset_add->type_id->caption(), $t004_asset_add->type_id->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t004_asset_add->Description->Required) { ?>
				elm = this.getElements("x" + infix + "_Description");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t004_asset_add->Description->caption(), $t004_asset_add->Description->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t004_asset_add->brand_id->Required) { ?>
				elm = this.getElements("x" + infix + "_brand_id");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t004_asset_add->brand_id->caption(), $t004_asset_add->brand_id->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t004_asset_add->signature_id->Required) { ?>
				elm = this.getElements("x" + infix + "_signature_id");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t004_asset_add->signature_id->caption(), $t004_asset_add->signature_id->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t004_asset_add->department_id->Required) { ?>
				elm = this.getElements("x" + infix + "_department_id");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t004_asset_add->department_id->caption(), $t004_asset_add->department_id->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t004_asset_add->location_id->Required) { ?>
				elm = this.getElements("x" + infix + "_location_id");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t004_asset_add->location_id->caption(), $t004_asset_add->location_id->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t004_asset_add->Qty->Required) { ?>
				elm = this.getElements("x" + infix + "_Qty");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t004_asset_add->Qty->caption(), $t004_asset_add->Qty->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_Qty");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t004_asset_add->Qty->errorMessage()) ?>");
			<?php if ($t004_asset_add->Variance->Required) { ?>
				elm = this.getElements("x" + infix + "_Variance");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t004_asset_add->Variance->caption(), $t004_asset_add->Variance->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_Variance");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t004_asset_add->Variance->errorMessage()) ?>");
			<?php if ($t004_asset_add->cond_id->Required) { ?>
				elm = this.getElements("x" + infix + "_cond_id");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t004_asset_add->cond_id->caption(), $t004_asset_add->cond_id->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t004_asset_add->Remarks->Required) { ?>
				elm = this.getElements("x" + infix + "_Remarks");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t004_asset_add->Remarks->caption(), $t004_asset_add->Remarks->RequiredErrorMessage)) ?>");
			<?php } ?>
			<?php if ($t004_asset_add->ProcurementDate->Required) { ?>
				elm = this.getElements("x" + infix + "_ProcurementDate");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t004_asset_add->ProcurementDate->caption(), $t004_asset_add->ProcurementDate->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_ProcurementDate");
				if (elm && !ew.checkEuroDate(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t004_asset_add->ProcurementDate->errorMessage()) ?>");
			<?php if ($t004_asset_add->ProcurementCurrentCost->Required) { ?>
				elm = this.getElements("x" + infix + "_ProcurementCurrentCost");
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t004_asset_add->ProcurementCurrentCost->caption(), $t004_asset_add->ProcurementCurrentCost->RequiredErrorMessage)) ?>");
			<?php } ?>
				elm = this.getElements("x" + infix + "_ProcurementCurrentCost");
				if (elm && !ew.checkNumber(elm.value))
					return this.onError(elm, "<?php echo JsEncode($t004_asset_add->ProcurementCurrentCost->errorMessage()) ?>");

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
	ft004_assetadd.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

		// Your custom validation code here, return false if invalid.
		return true;
	}

	// Use JavaScript validation or not
	ft004_assetadd.validateRequired = <?php echo Config("CLIENT_VALIDATE") ? "true" : "false" ?>;

	// Dynamic selection lists
	ft004_assetadd.lists["x_property_id"] = <?php echo $t004_asset_add->property_id->Lookup->toClientList($t004_asset_add) ?>;
	ft004_assetadd.lists["x_property_id"].options = <?php echo JsonEncode($t004_asset_add->property_id->lookupOptions()) ?>;
	ft004_assetadd.lists["x_type_id"] = <?php echo $t004_asset_add->type_id->Lookup->toClientList($t004_asset_add) ?>;
	ft004_assetadd.lists["x_type_id"].options = <?php echo JsonEncode($t004_asset_add->type_id->lookupOptions()) ?>;
	ft004_assetadd.lists["x_brand_id"] = <?php echo $t004_asset_add->brand_id->Lookup->toClientList($t004_asset_add) ?>;
	ft004_assetadd.lists["x_brand_id"].options = <?php echo JsonEncode($t004_asset_add->brand_id->lookupOptions()) ?>;
	ft004_assetadd.lists["x_signature_id"] = <?php echo $t004_asset_add->signature_id->Lookup->toClientList($t004_asset_add) ?>;
	ft004_assetadd.lists["x_signature_id"].options = <?php echo JsonEncode($t004_asset_add->signature_id->lookupOptions()) ?>;
	ft004_assetadd.lists["x_department_id"] = <?php echo $t004_asset_add->department_id->Lookup->toClientList($t004_asset_add) ?>;
	ft004_assetadd.lists["x_department_id"].options = <?php echo JsonEncode($t004_asset_add->department_id->lookupOptions()) ?>;
	ft004_assetadd.lists["x_location_id"] = <?php echo $t004_asset_add->location_id->Lookup->toClientList($t004_asset_add) ?>;
	ft004_assetadd.lists["x_location_id"].options = <?php echo JsonEncode($t004_asset_add->location_id->lookupOptions()) ?>;
	ft004_assetadd.lists["x_cond_id"] = <?php echo $t004_asset_add->cond_id->Lookup->toClientList($t004_asset_add) ?>;
	ft004_assetadd.lists["x_cond_id"].options = <?php echo JsonEncode($t004_asset_add->cond_id->lookupOptions()) ?>;
	loadjs.done("ft004_assetadd");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php $t004_asset_add->showPageHeader(); ?>
<?php
$t004_asset_add->showMessage();
?>
<form name="ft004_assetadd" id="ft004_assetadd" class="<?php echo $t004_asset_add->FormClassName ?>" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t004_asset">
<input type="hidden" name="action" id="action" value="insert">
<input type="hidden" name="modal" value="<?php echo (int)$t004_asset_add->IsModal ?>">
<div class="ew-add-div"><!-- page* -->
<?php if ($t004_asset_add->property_id->Visible) { // property_id ?>
	<div id="r_property_id" class="form-group row">
		<label id="elh_t004_asset_property_id" for="x_property_id" class="<?php echo $t004_asset_add->LeftColumnClass ?>"><?php echo $t004_asset_add->property_id->caption() ?><?php echo $t004_asset_add->property_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t004_asset_add->RightColumnClass ?>"><div <?php echo $t004_asset_add->property_id->cellAttributes() ?>>
<span id="el_t004_asset_property_id">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_property_id"><?php echo EmptyValue(strval($t004_asset_add->property_id->ViewValue)) ? $Language->phrase("PleaseSelect") : $t004_asset_add->property_id->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t004_asset_add->property_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t004_asset_add->property_id->ReadOnly || $t004_asset_add->property_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_property_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
		<?php if (AllowAdd(CurrentProjectID() . "t001_property") && !$t004_asset_add->property_id->ReadOnly) { ?>
		<button type="button" class="btn btn-default ew-add-opt-btn" id="aol_x_property_id" title="<?php echo HtmlTitle($Language->phrase("AddLink")) . "&nbsp;" . $t004_asset_add->property_id->caption() ?>" data-title="<?php echo $t004_asset_add->property_id->caption() ?>" onclick="ew.addOptionDialogShow({lnk:this,el:'x_property_id',url:'t001_propertyaddopt.php'});"><i class="fas fa-plus ew-icon"></i></button>
		<?php } ?>
	</div>
</div>
<?php echo $t004_asset_add->property_id->Lookup->getParamTag($t004_asset_add, "p_x_property_id") ?>
<input type="hidden" data-table="t004_asset" data-field="x_property_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t004_asset_add->property_id->displayValueSeparatorAttribute() ?>" name="x_property_id" id="x_property_id" value="<?php echo $t004_asset_add->property_id->CurrentValue ?>"<?php echo $t004_asset_add->property_id->editAttributes() ?>>
</span>
<?php echo $t004_asset_add->property_id->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t004_asset_add->type_id->Visible) { // type_id ?>
	<div id="r_type_id" class="form-group row">
		<label id="elh_t004_asset_type_id" for="x_type_id" class="<?php echo $t004_asset_add->LeftColumnClass ?>"><?php echo $t004_asset_add->type_id->caption() ?><?php echo $t004_asset_add->type_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t004_asset_add->RightColumnClass ?>"><div <?php echo $t004_asset_add->type_id->cellAttributes() ?>>
<span id="el_t004_asset_type_id">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_type_id"><?php echo EmptyValue(strval($t004_asset_add->type_id->ViewValue)) ? $Language->phrase("PleaseSelect") : $t004_asset_add->type_id->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t004_asset_add->type_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t004_asset_add->type_id->ReadOnly || $t004_asset_add->type_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_type_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $t004_asset_add->type_id->Lookup->getParamTag($t004_asset_add, "p_x_type_id") ?>
<input type="hidden" data-table="t004_asset" data-field="x_type_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t004_asset_add->type_id->displayValueSeparatorAttribute() ?>" name="x_type_id" id="x_type_id" value="<?php echo $t004_asset_add->type_id->CurrentValue ?>"<?php echo $t004_asset_add->type_id->editAttributes() ?>>
</span>
<?php echo $t004_asset_add->type_id->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t004_asset_add->Description->Visible) { // Description ?>
	<div id="r_Description" class="form-group row">
		<label id="elh_t004_asset_Description" for="x_Description" class="<?php echo $t004_asset_add->LeftColumnClass ?>"><?php echo $t004_asset_add->Description->caption() ?><?php echo $t004_asset_add->Description->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t004_asset_add->RightColumnClass ?>"><div <?php echo $t004_asset_add->Description->cellAttributes() ?>>
<span id="el_t004_asset_Description">
<input type="text" data-table="t004_asset" data-field="x_Description" name="x_Description" id="x_Description" size="30" maxlength="255" placeholder="<?php echo HtmlEncode($t004_asset_add->Description->getPlaceHolder()) ?>" value="<?php echo $t004_asset_add->Description->EditValue ?>"<?php echo $t004_asset_add->Description->editAttributes() ?>>
</span>
<?php echo $t004_asset_add->Description->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t004_asset_add->brand_id->Visible) { // brand_id ?>
	<div id="r_brand_id" class="form-group row">
		<label id="elh_t004_asset_brand_id" for="x_brand_id" class="<?php echo $t004_asset_add->LeftColumnClass ?>"><?php echo $t004_asset_add->brand_id->caption() ?><?php echo $t004_asset_add->brand_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t004_asset_add->RightColumnClass ?>"><div <?php echo $t004_asset_add->brand_id->cellAttributes() ?>>
<span id="el_t004_asset_brand_id">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_brand_id"><?php echo EmptyValue(strval($t004_asset_add->brand_id->ViewValue)) ? $Language->phrase("PleaseSelect") : $t004_asset_add->brand_id->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t004_asset_add->brand_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t004_asset_add->brand_id->ReadOnly || $t004_asset_add->brand_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_brand_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
		<?php if (AllowAdd(CurrentProjectID() . "t008_brand") && !$t004_asset_add->brand_id->ReadOnly) { ?>
		<button type="button" class="btn btn-default ew-add-opt-btn" id="aol_x_brand_id" title="<?php echo HtmlTitle($Language->phrase("AddLink")) . "&nbsp;" . $t004_asset_add->brand_id->caption() ?>" data-title="<?php echo $t004_asset_add->brand_id->caption() ?>" onclick="ew.addOptionDialogShow({lnk:this,el:'x_brand_id',url:'t008_brandaddopt.php'});"><i class="fas fa-plus ew-icon"></i></button>
		<?php } ?>
	</div>
</div>
<?php echo $t004_asset_add->brand_id->Lookup->getParamTag($t004_asset_add, "p_x_brand_id") ?>
<input type="hidden" data-table="t004_asset" data-field="x_brand_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t004_asset_add->brand_id->displayValueSeparatorAttribute() ?>" name="x_brand_id" id="x_brand_id" value="<?php echo $t004_asset_add->brand_id->CurrentValue ?>"<?php echo $t004_asset_add->brand_id->editAttributes() ?>>
</span>
<?php echo $t004_asset_add->brand_id->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t004_asset_add->signature_id->Visible) { // signature_id ?>
	<div id="r_signature_id" class="form-group row">
		<label id="elh_t004_asset_signature_id" for="x_signature_id" class="<?php echo $t004_asset_add->LeftColumnClass ?>"><?php echo $t004_asset_add->signature_id->caption() ?><?php echo $t004_asset_add->signature_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t004_asset_add->RightColumnClass ?>"><div <?php echo $t004_asset_add->signature_id->cellAttributes() ?>>
<span id="el_t004_asset_signature_id">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_signature_id"><?php echo EmptyValue(strval($t004_asset_add->signature_id->ViewValue)) ? $Language->phrase("PleaseSelect") : $t004_asset_add->signature_id->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t004_asset_add->signature_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t004_asset_add->signature_id->ReadOnly || $t004_asset_add->signature_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_signature_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
		<?php if (AllowAdd(CurrentProjectID() . "t003_signature") && !$t004_asset_add->signature_id->ReadOnly) { ?>
		<button type="button" class="btn btn-default ew-add-opt-btn" id="aol_x_signature_id" title="<?php echo HtmlTitle($Language->phrase("AddLink")) . "&nbsp;" . $t004_asset_add->signature_id->caption() ?>" data-title="<?php echo $t004_asset_add->signature_id->caption() ?>" onclick="ew.addOptionDialogShow({lnk:this,el:'x_signature_id',url:'t003_signatureaddopt.php'});"><i class="fas fa-plus ew-icon"></i></button>
		<?php } ?>
	</div>
</div>
<?php echo $t004_asset_add->signature_id->Lookup->getParamTag($t004_asset_add, "p_x_signature_id") ?>
<input type="hidden" data-table="t004_asset" data-field="x_signature_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t004_asset_add->signature_id->displayValueSeparatorAttribute() ?>" name="x_signature_id" id="x_signature_id" value="<?php echo $t004_asset_add->signature_id->CurrentValue ?>"<?php echo $t004_asset_add->signature_id->editAttributes() ?>>
</span>
<?php echo $t004_asset_add->signature_id->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t004_asset_add->department_id->Visible) { // department_id ?>
	<div id="r_department_id" class="form-group row">
		<label id="elh_t004_asset_department_id" for="x_department_id" class="<?php echo $t004_asset_add->LeftColumnClass ?>"><?php echo $t004_asset_add->department_id->caption() ?><?php echo $t004_asset_add->department_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t004_asset_add->RightColumnClass ?>"><div <?php echo $t004_asset_add->department_id->cellAttributes() ?>>
<span id="el_t004_asset_department_id">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_department_id"><?php echo EmptyValue(strval($t004_asset_add->department_id->ViewValue)) ? $Language->phrase("PleaseSelect") : $t004_asset_add->department_id->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t004_asset_add->department_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t004_asset_add->department_id->ReadOnly || $t004_asset_add->department_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_department_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
		<?php if (AllowAdd(CurrentProjectID() . "t002_department") && !$t004_asset_add->department_id->ReadOnly) { ?>
		<button type="button" class="btn btn-default ew-add-opt-btn" id="aol_x_department_id" title="<?php echo HtmlTitle($Language->phrase("AddLink")) . "&nbsp;" . $t004_asset_add->department_id->caption() ?>" data-title="<?php echo $t004_asset_add->department_id->caption() ?>" onclick="ew.addOptionDialogShow({lnk:this,el:'x_department_id',url:'t002_departmentaddopt.php'});"><i class="fas fa-plus ew-icon"></i></button>
		<?php } ?>
	</div>
</div>
<?php echo $t004_asset_add->department_id->Lookup->getParamTag($t004_asset_add, "p_x_department_id") ?>
<input type="hidden" data-table="t004_asset" data-field="x_department_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t004_asset_add->department_id->displayValueSeparatorAttribute() ?>" name="x_department_id" id="x_department_id" value="<?php echo $t004_asset_add->department_id->CurrentValue ?>"<?php echo $t004_asset_add->department_id->editAttributes() ?>>
</span>
<?php echo $t004_asset_add->department_id->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t004_asset_add->location_id->Visible) { // location_id ?>
	<div id="r_location_id" class="form-group row">
		<label id="elh_t004_asset_location_id" for="x_location_id" class="<?php echo $t004_asset_add->LeftColumnClass ?>"><?php echo $t004_asset_add->location_id->caption() ?><?php echo $t004_asset_add->location_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t004_asset_add->RightColumnClass ?>"><div <?php echo $t004_asset_add->location_id->cellAttributes() ?>>
<span id="el_t004_asset_location_id">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_location_id"><?php echo EmptyValue(strval($t004_asset_add->location_id->ViewValue)) ? $Language->phrase("PleaseSelect") : $t004_asset_add->location_id->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t004_asset_add->location_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t004_asset_add->location_id->ReadOnly || $t004_asset_add->location_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_location_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $t004_asset_add->location_id->Lookup->getParamTag($t004_asset_add, "p_x_location_id") ?>
<input type="hidden" data-table="t004_asset" data-field="x_location_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t004_asset_add->location_id->displayValueSeparatorAttribute() ?>" name="x_location_id" id="x_location_id" value="<?php echo $t004_asset_add->location_id->CurrentValue ?>"<?php echo $t004_asset_add->location_id->editAttributes() ?>>
</span>
<?php echo $t004_asset_add->location_id->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t004_asset_add->Qty->Visible) { // Qty ?>
	<div id="r_Qty" class="form-group row">
		<label id="elh_t004_asset_Qty" for="x_Qty" class="<?php echo $t004_asset_add->LeftColumnClass ?>"><?php echo $t004_asset_add->Qty->caption() ?><?php echo $t004_asset_add->Qty->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t004_asset_add->RightColumnClass ?>"><div <?php echo $t004_asset_add->Qty->cellAttributes() ?>>
<span id="el_t004_asset_Qty">
<input type="text" data-table="t004_asset" data-field="x_Qty" name="x_Qty" id="x_Qty" size="5" maxlength="14" placeholder="<?php echo HtmlEncode($t004_asset_add->Qty->getPlaceHolder()) ?>" value="<?php echo $t004_asset_add->Qty->EditValue ?>"<?php echo $t004_asset_add->Qty->editAttributes() ?>>
</span>
<?php echo $t004_asset_add->Qty->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t004_asset_add->Variance->Visible) { // Variance ?>
	<div id="r_Variance" class="form-group row">
		<label id="elh_t004_asset_Variance" for="x_Variance" class="<?php echo $t004_asset_add->LeftColumnClass ?>"><?php echo $t004_asset_add->Variance->caption() ?><?php echo $t004_asset_add->Variance->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t004_asset_add->RightColumnClass ?>"><div <?php echo $t004_asset_add->Variance->cellAttributes() ?>>
<span id="el_t004_asset_Variance">
<input type="text" data-table="t004_asset" data-field="x_Variance" name="x_Variance" id="x_Variance" size="30" maxlength="14" placeholder="<?php echo HtmlEncode($t004_asset_add->Variance->getPlaceHolder()) ?>" value="<?php echo $t004_asset_add->Variance->EditValue ?>"<?php echo $t004_asset_add->Variance->editAttributes() ?>>
</span>
<?php echo $t004_asset_add->Variance->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t004_asset_add->cond_id->Visible) { // cond_id ?>
	<div id="r_cond_id" class="form-group row">
		<label id="elh_t004_asset_cond_id" for="x_cond_id" class="<?php echo $t004_asset_add->LeftColumnClass ?>"><?php echo $t004_asset_add->cond_id->caption() ?><?php echo $t004_asset_add->cond_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t004_asset_add->RightColumnClass ?>"><div <?php echo $t004_asset_add->cond_id->cellAttributes() ?>>
<span id="el_t004_asset_cond_id">
<div class="input-group ew-lookup-list">
	<div class="form-control ew-lookup-text" tabindex="-1" id="lu_x_cond_id"><?php echo EmptyValue(strval($t004_asset_add->cond_id->ViewValue)) ? $Language->phrase("PleaseSelect") : $t004_asset_add->cond_id->ViewValue ?></div>
	<div class="input-group-append">
		<button type="button" title="<?php echo HtmlEncode(str_replace("%s", RemoveHtml($t004_asset_add->cond_id->caption()), $Language->phrase("LookupLink", TRUE))) ?>" class="ew-lookup-btn btn btn-default"<?php echo ($t004_asset_add->cond_id->ReadOnly || $t004_asset_add->cond_id->Disabled) ? " disabled" : "" ?> onclick="ew.modalLookupShow({lnk:this,el:'x_cond_id',m:0,n:10});"><i class="fas fa-search ew-icon"></i></button>
	</div>
</div>
<?php echo $t004_asset_add->cond_id->Lookup->getParamTag($t004_asset_add, "p_x_cond_id") ?>
<input type="hidden" data-table="t004_asset" data-field="x_cond_id" data-multiple="0" data-lookup="1" data-value-separator="<?php echo $t004_asset_add->cond_id->displayValueSeparatorAttribute() ?>" name="x_cond_id" id="x_cond_id" value="<?php echo $t004_asset_add->cond_id->CurrentValue ?>"<?php echo $t004_asset_add->cond_id->editAttributes() ?>>
</span>
<?php echo $t004_asset_add->cond_id->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t004_asset_add->Remarks->Visible) { // Remarks ?>
	<div id="r_Remarks" class="form-group row">
		<label id="elh_t004_asset_Remarks" for="x_Remarks" class="<?php echo $t004_asset_add->LeftColumnClass ?>"><?php echo $t004_asset_add->Remarks->caption() ?><?php echo $t004_asset_add->Remarks->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t004_asset_add->RightColumnClass ?>"><div <?php echo $t004_asset_add->Remarks->cellAttributes() ?>>
<span id="el_t004_asset_Remarks">
<textarea data-table="t004_asset" data-field="x_Remarks" name="x_Remarks" id="x_Remarks" cols="15" rows="1" placeholder="<?php echo HtmlEncode($t004_asset_add->Remarks->getPlaceHolder()) ?>"<?php echo $t004_asset_add->Remarks->editAttributes() ?>><?php echo $t004_asset_add->Remarks->EditValue ?></textarea>
</span>
<?php echo $t004_asset_add->Remarks->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t004_asset_add->ProcurementDate->Visible) { // ProcurementDate ?>
	<div id="r_ProcurementDate" class="form-group row">
		<label id="elh_t004_asset_ProcurementDate" for="x_ProcurementDate" class="<?php echo $t004_asset_add->LeftColumnClass ?>"><?php echo $t004_asset_add->ProcurementDate->caption() ?><?php echo $t004_asset_add->ProcurementDate->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t004_asset_add->RightColumnClass ?>"><div <?php echo $t004_asset_add->ProcurementDate->cellAttributes() ?>>
<span id="el_t004_asset_ProcurementDate">
<input type="text" data-table="t004_asset" data-field="x_ProcurementDate" data-format="7" name="x_ProcurementDate" id="x_ProcurementDate" size="10" maxlength="10" placeholder="<?php echo HtmlEncode($t004_asset_add->ProcurementDate->getPlaceHolder()) ?>" value="<?php echo $t004_asset_add->ProcurementDate->EditValue ?>"<?php echo $t004_asset_add->ProcurementDate->editAttributes() ?>>
<?php if (!$t004_asset_add->ProcurementDate->ReadOnly && !$t004_asset_add->ProcurementDate->Disabled && !isset($t004_asset_add->ProcurementDate->EditAttrs["readonly"]) && !isset($t004_asset_add->ProcurementDate->EditAttrs["disabled"])) { ?>
<script>
loadjs.ready(["ft004_assetadd", "datetimepicker"], function() {
	ew.createDateTimePicker("ft004_assetadd", "x_ProcurementDate", {"ignoreReadonly":true,"useCurrent":false,"format":7});
});
</script>
<?php } ?>
</span>
<?php echo $t004_asset_add->ProcurementDate->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t004_asset_add->ProcurementCurrentCost->Visible) { // ProcurementCurrentCost ?>
	<div id="r_ProcurementCurrentCost" class="form-group row">
		<label id="elh_t004_asset_ProcurementCurrentCost" for="x_ProcurementCurrentCost" class="<?php echo $t004_asset_add->LeftColumnClass ?>"><?php echo $t004_asset_add->ProcurementCurrentCost->caption() ?><?php echo $t004_asset_add->ProcurementCurrentCost->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t004_asset_add->RightColumnClass ?>"><div <?php echo $t004_asset_add->ProcurementCurrentCost->cellAttributes() ?>>
<span id="el_t004_asset_ProcurementCurrentCost">
<input type="text" data-table="t004_asset" data-field="x_ProcurementCurrentCost" name="x_ProcurementCurrentCost" id="x_ProcurementCurrentCost" size="10" maxlength="14" placeholder="<?php echo HtmlEncode($t004_asset_add->ProcurementCurrentCost->getPlaceHolder()) ?>" value="<?php echo $t004_asset_add->ProcurementCurrentCost->EditValue ?>"<?php echo $t004_asset_add->ProcurementCurrentCost->editAttributes() ?>>
</span>
<?php echo $t004_asset_add->ProcurementCurrentCost->CustomMsg ?></div></div>
	</div>
<?php } ?>
</div><!-- /page* -->
<?php
	if (in_array("t006_assetdepreciation", explode(",", $t004_asset->getCurrentDetailTable())) && $t006_assetdepreciation->DetailAdd) {
?>
<?php if ($t004_asset->getCurrentDetailTable() != "") { ?>
<h4 class="ew-detail-caption"><?php echo $Language->tablePhrase("t006_assetdepreciation", "TblCaption") ?></h4>
<?php } ?>
<?php include_once "t006_assetdepreciationgrid.php" ?>
<?php } ?>
<?php if (!$t004_asset_add->IsModal) { ?>
<div class="form-group row"><!-- buttons .form-group -->
	<div class="<?php echo $t004_asset_add->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("AddBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t004_asset_add->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
	</div><!-- /buttons offset -->
</div><!-- /buttons .form-group -->
<?php } ?>
</form>
<?php
$t004_asset_add->showPageFooter();
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
$t004_asset_add->terminate();
?>