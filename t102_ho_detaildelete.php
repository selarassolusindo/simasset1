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
$t102_ho_detail_delete = new t102_ho_detail_delete();

// Run the page
$t102_ho_detail_delete->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t102_ho_detail_delete->Page_Render();
?>
<?php include_once "header.php"; ?>
<script>
var ft102_ho_detaildelete, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "delete";
	ft102_ho_detaildelete = currentForm = new ew.Form("ft102_ho_detaildelete", "delete");
	loadjs.done("ft102_ho_detaildelete");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php $t102_ho_detail_delete->showPageHeader(); ?>
<?php
$t102_ho_detail_delete->showMessage();
?>
<form name="ft102_ho_detaildelete" id="ft102_ho_detaildelete" class="form-inline ew-form ew-delete-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t102_ho_detail">
<input type="hidden" name="action" id="action" value="delete">
<?php foreach ($t102_ho_detail_delete->RecKeys as $key) { ?>
<?php $keyvalue = is_array($key) ? implode(Config("COMPOSITE_KEY_SEPARATOR"), $key) : $key; ?>
<input type="hidden" name="key_m[]" value="<?php echo HtmlEncode($keyvalue) ?>">
<?php } ?>
<div class="card ew-card ew-grid">
<div class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<table class="table ew-table">
	<thead>
	<tr class="ew-table-header">
<?php if ($t102_ho_detail_delete->asset_id->Visible) { // asset_id ?>
		<th class="<?php echo $t102_ho_detail_delete->asset_id->headerCellClass() ?>"><span id="elh_t102_ho_detail_asset_id" class="t102_ho_detail_asset_id"><?php echo $t102_ho_detail_delete->asset_id->caption() ?></span></th>
<?php } ?>
	</tr>
	</thead>
	<tbody>
<?php
$t102_ho_detail_delete->RecordCount = 0;
$i = 0;
while (!$t102_ho_detail_delete->Recordset->EOF) {
	$t102_ho_detail_delete->RecordCount++;
	$t102_ho_detail_delete->RowCount++;

	// Set row properties
	$t102_ho_detail->resetAttributes();
	$t102_ho_detail->RowType = ROWTYPE_VIEW; // View

	// Get the field contents
	$t102_ho_detail_delete->loadRowValues($t102_ho_detail_delete->Recordset);

	// Render row
	$t102_ho_detail_delete->renderRow();
?>
	<tr <?php echo $t102_ho_detail->rowAttributes() ?>>
<?php if ($t102_ho_detail_delete->asset_id->Visible) { // asset_id ?>
		<td <?php echo $t102_ho_detail_delete->asset_id->cellAttributes() ?>>
<span id="el<?php echo $t102_ho_detail_delete->RowCount ?>_t102_ho_detail_asset_id" class="t102_ho_detail_asset_id">
<span<?php echo $t102_ho_detail_delete->asset_id->viewAttributes() ?>><?php echo $t102_ho_detail_delete->asset_id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
	</tr>
<?php
	$t102_ho_detail_delete->Recordset->moveNext();
}
$t102_ho_detail_delete->Recordset->close();
?>
</tbody>
</table>
</div>
</div>
<div>
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("DeleteBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t102_ho_detail_delete->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
</div>
</form>
<?php
$t102_ho_detail_delete->showPageFooter();
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
$t102_ho_detail_delete->terminate();
?>