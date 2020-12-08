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
$t103_opname_list = new t103_opname_list();

// Run the page
$t103_opname_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t103_opname_list->Page_Render();
?>
<?php include_once "header.php"; ?>
<?php if (!$t103_opname_list->isExport()) { ?>
<script>
var ft103_opnamelist, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "list";
	ft103_opnamelist = currentForm = new ew.Form("ft103_opnamelist", "list");
	ft103_opnamelist.formKeyCountName = '<?php echo $t103_opname_list->FormKeyCountName ?>';
	loadjs.done("ft103_opnamelist");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php } ?>
<?php if (!$t103_opname_list->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($t103_opname_list->TotalRecords > 0 && $t103_opname_list->ExportOptions->visible()) { ?>
<?php $t103_opname_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($t103_opname_list->ImportOptions->visible()) { ?>
<?php $t103_opname_list->ImportOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php
$t103_opname_list->renderOtherOptions();
?>
<?php $t103_opname_list->showPageHeader(); ?>
<?php
$t103_opname_list->showMessage();
?>
<?php if ($t103_opname_list->TotalRecords > 0 || $t103_opname->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($t103_opname_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> t103_opname">
<form name="ft103_opnamelist" id="ft103_opnamelist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t103_opname">
<div id="gmp_t103_opname" class="<?php echo ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<?php if ($t103_opname_list->TotalRecords > 0 || $t103_opname_list->isGridEdit()) { ?>
<table id="tbl_t103_opnamelist" class="table ew-table"><!-- .ew-table -->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$t103_opname->RowType = ROWTYPE_HEADER;

// Render list options
$t103_opname_list->renderListOptions();

// Render list options (header, left)
$t103_opname_list->ListOptions->render("header", "left");
?>
<?php if ($t103_opname_list->id->Visible) { // id ?>
	<?php if ($t103_opname_list->SortUrl($t103_opname_list->id) == "") { ?>
		<th data-name="id" class="<?php echo $t103_opname_list->id->headerCellClass() ?>"><div id="elh_t103_opname_id" class="t103_opname_id"><div class="ew-table-header-caption"><?php echo $t103_opname_list->id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="id" class="<?php echo $t103_opname_list->id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t103_opname_list->SortUrl($t103_opname_list->id) ?>', 2);"><div id="elh_t103_opname_id" class="t103_opname_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_opname_list->id->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_opname_list->id->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_opname_list->id->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_opname_list->OpnameDate->Visible) { // OpnameDate ?>
	<?php if ($t103_opname_list->SortUrl($t103_opname_list->OpnameDate) == "") { ?>
		<th data-name="OpnameDate" class="<?php echo $t103_opname_list->OpnameDate->headerCellClass() ?>"><div id="elh_t103_opname_OpnameDate" class="t103_opname_OpnameDate"><div class="ew-table-header-caption"><?php echo $t103_opname_list->OpnameDate->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="OpnameDate" class="<?php echo $t103_opname_list->OpnameDate->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t103_opname_list->SortUrl($t103_opname_list->OpnameDate) ?>', 2);"><div id="elh_t103_opname_OpnameDate" class="t103_opname_OpnameDate">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_opname_list->OpnameDate->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_opname_list->OpnameDate->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_opname_list->OpnameDate->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_opname_list->property_id->Visible) { // property_id ?>
	<?php if ($t103_opname_list->SortUrl($t103_opname_list->property_id) == "") { ?>
		<th data-name="property_id" class="<?php echo $t103_opname_list->property_id->headerCellClass() ?>"><div id="elh_t103_opname_property_id" class="t103_opname_property_id"><div class="ew-table-header-caption"><?php echo $t103_opname_list->property_id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="property_id" class="<?php echo $t103_opname_list->property_id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t103_opname_list->SortUrl($t103_opname_list->property_id) ?>', 2);"><div id="elh_t103_opname_property_id" class="t103_opname_property_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_opname_list->property_id->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_opname_list->property_id->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_opname_list->property_id->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_opname_list->location_id->Visible) { // location_id ?>
	<?php if ($t103_opname_list->SortUrl($t103_opname_list->location_id) == "") { ?>
		<th data-name="location_id" class="<?php echo $t103_opname_list->location_id->headerCellClass() ?>"><div id="elh_t103_opname_location_id" class="t103_opname_location_id"><div class="ew-table-header-caption"><?php echo $t103_opname_list->location_id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="location_id" class="<?php echo $t103_opname_list->location_id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t103_opname_list->SortUrl($t103_opname_list->location_id) ?>', 2);"><div id="elh_t103_opname_location_id" class="t103_opname_location_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_opname_list->location_id->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_opname_list->location_id->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_opname_list->location_id->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_opname_list->asset_id->Visible) { // asset_id ?>
	<?php if ($t103_opname_list->SortUrl($t103_opname_list->asset_id) == "") { ?>
		<th data-name="asset_id" class="<?php echo $t103_opname_list->asset_id->headerCellClass() ?>"><div id="elh_t103_opname_asset_id" class="t103_opname_asset_id"><div class="ew-table-header-caption"><?php echo $t103_opname_list->asset_id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="asset_id" class="<?php echo $t103_opname_list->asset_id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t103_opname_list->SortUrl($t103_opname_list->asset_id) ?>', 2);"><div id="elh_t103_opname_asset_id" class="t103_opname_asset_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_opname_list->asset_id->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_opname_list->asset_id->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_opname_list->asset_id->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_opname_list->signature_id->Visible) { // signature_id ?>
	<?php if ($t103_opname_list->SortUrl($t103_opname_list->signature_id) == "") { ?>
		<th data-name="signature_id" class="<?php echo $t103_opname_list->signature_id->headerCellClass() ?>"><div id="elh_t103_opname_signature_id" class="t103_opname_signature_id"><div class="ew-table-header-caption"><?php echo $t103_opname_list->signature_id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="signature_id" class="<?php echo $t103_opname_list->signature_id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t103_opname_list->SortUrl($t103_opname_list->signature_id) ?>', 2);"><div id="elh_t103_opname_signature_id" class="t103_opname_signature_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_opname_list->signature_id->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_opname_list->signature_id->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_opname_list->signature_id->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_opname_list->Actual->Visible) { // Actual ?>
	<?php if ($t103_opname_list->SortUrl($t103_opname_list->Actual) == "") { ?>
		<th data-name="Actual" class="<?php echo $t103_opname_list->Actual->headerCellClass() ?>"><div id="elh_t103_opname_Actual" class="t103_opname_Actual"><div class="ew-table-header-caption"><?php echo $t103_opname_list->Actual->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Actual" class="<?php echo $t103_opname_list->Actual->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t103_opname_list->SortUrl($t103_opname_list->Actual) ?>', 2);"><div id="elh_t103_opname_Actual" class="t103_opname_Actual">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_opname_list->Actual->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_opname_list->Actual->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_opname_list->Actual->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_opname_list->OpnameQty->Visible) { // OpnameQty ?>
	<?php if ($t103_opname_list->SortUrl($t103_opname_list->OpnameQty) == "") { ?>
		<th data-name="OpnameQty" class="<?php echo $t103_opname_list->OpnameQty->headerCellClass() ?>"><div id="elh_t103_opname_OpnameQty" class="t103_opname_OpnameQty"><div class="ew-table-header-caption"><?php echo $t103_opname_list->OpnameQty->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="OpnameQty" class="<?php echo $t103_opname_list->OpnameQty->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t103_opname_list->SortUrl($t103_opname_list->OpnameQty) ?>', 2);"><div id="elh_t103_opname_OpnameQty" class="t103_opname_OpnameQty">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_opname_list->OpnameQty->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_opname_list->OpnameQty->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_opname_list->OpnameQty->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_opname_list->Diff->Visible) { // Diff ?>
	<?php if ($t103_opname_list->SortUrl($t103_opname_list->Diff) == "") { ?>
		<th data-name="Diff" class="<?php echo $t103_opname_list->Diff->headerCellClass() ?>"><div id="elh_t103_opname_Diff" class="t103_opname_Diff"><div class="ew-table-header-caption"><?php echo $t103_opname_list->Diff->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Diff" class="<?php echo $t103_opname_list->Diff->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event, '<?php echo $t103_opname_list->SortUrl($t103_opname_list->Diff) ?>', 2);"><div id="elh_t103_opname_Diff" class="t103_opname_Diff">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_opname_list->Diff->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_opname_list->Diff->getSort() == "ASC") { ?><i class="fas fa-sort-up"></i><?php } elseif ($t103_opname_list->Diff->getSort() == "DESC") { ?><i class="fas fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$t103_opname_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
if ($t103_opname_list->ExportAll && $t103_opname_list->isExport()) {
	$t103_opname_list->StopRecord = $t103_opname_list->TotalRecords;
} else {

	// Set the last record to display
	if ($t103_opname_list->TotalRecords > $t103_opname_list->StartRecord + $t103_opname_list->DisplayRecords - 1)
		$t103_opname_list->StopRecord = $t103_opname_list->StartRecord + $t103_opname_list->DisplayRecords - 1;
	else
		$t103_opname_list->StopRecord = $t103_opname_list->TotalRecords;
}
$t103_opname_list->RecordCount = $t103_opname_list->StartRecord - 1;
if ($t103_opname_list->Recordset && !$t103_opname_list->Recordset->EOF) {
	$t103_opname_list->Recordset->moveFirst();
	$selectLimit = $t103_opname_list->UseSelectLimit;
	if (!$selectLimit && $t103_opname_list->StartRecord > 1)
		$t103_opname_list->Recordset->move($t103_opname_list->StartRecord - 1);
} elseif (!$t103_opname->AllowAddDeleteRow && $t103_opname_list->StopRecord == 0) {
	$t103_opname_list->StopRecord = $t103_opname->GridAddRowCount;
}

// Initialize aggregate
$t103_opname->RowType = ROWTYPE_AGGREGATEINIT;
$t103_opname->resetAttributes();
$t103_opname_list->renderRow();
while ($t103_opname_list->RecordCount < $t103_opname_list->StopRecord) {
	$t103_opname_list->RecordCount++;
	if ($t103_opname_list->RecordCount >= $t103_opname_list->StartRecord) {
		$t103_opname_list->RowCount++;

		// Set up key count
		$t103_opname_list->KeyCount = $t103_opname_list->RowIndex;

		// Init row class and style
		$t103_opname->resetAttributes();
		$t103_opname->CssClass = "";
		if ($t103_opname_list->isGridAdd()) {
		} else {
			$t103_opname_list->loadRowValues($t103_opname_list->Recordset); // Load row values
		}
		$t103_opname->RowType = ROWTYPE_VIEW; // Render view

		// Set up row id / data-rowindex
		$t103_opname->RowAttrs->merge(["data-rowindex" => $t103_opname_list->RowCount, "id" => "r" . $t103_opname_list->RowCount . "_t103_opname", "data-rowtype" => $t103_opname->RowType]);

		// Render row
		$t103_opname_list->renderRow();

		// Render list options
		$t103_opname_list->renderListOptions();
?>
	<tr <?php echo $t103_opname->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t103_opname_list->ListOptions->render("body", "left", $t103_opname_list->RowCount);
?>
	<?php if ($t103_opname_list->id->Visible) { // id ?>
		<td data-name="id" <?php echo $t103_opname_list->id->cellAttributes() ?>>
<span id="el<?php echo $t103_opname_list->RowCount ?>_t103_opname_id">
<span<?php echo $t103_opname_list->id->viewAttributes() ?>><?php echo $t103_opname_list->id->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t103_opname_list->OpnameDate->Visible) { // OpnameDate ?>
		<td data-name="OpnameDate" <?php echo $t103_opname_list->OpnameDate->cellAttributes() ?>>
<span id="el<?php echo $t103_opname_list->RowCount ?>_t103_opname_OpnameDate">
<span<?php echo $t103_opname_list->OpnameDate->viewAttributes() ?>><?php echo $t103_opname_list->OpnameDate->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t103_opname_list->property_id->Visible) { // property_id ?>
		<td data-name="property_id" <?php echo $t103_opname_list->property_id->cellAttributes() ?>>
<span id="el<?php echo $t103_opname_list->RowCount ?>_t103_opname_property_id">
<span<?php echo $t103_opname_list->property_id->viewAttributes() ?>><?php echo $t103_opname_list->property_id->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t103_opname_list->location_id->Visible) { // location_id ?>
		<td data-name="location_id" <?php echo $t103_opname_list->location_id->cellAttributes() ?>>
<span id="el<?php echo $t103_opname_list->RowCount ?>_t103_opname_location_id">
<span<?php echo $t103_opname_list->location_id->viewAttributes() ?>><?php echo $t103_opname_list->location_id->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t103_opname_list->asset_id->Visible) { // asset_id ?>
		<td data-name="asset_id" <?php echo $t103_opname_list->asset_id->cellAttributes() ?>>
<span id="el<?php echo $t103_opname_list->RowCount ?>_t103_opname_asset_id">
<span<?php echo $t103_opname_list->asset_id->viewAttributes() ?>><?php echo $t103_opname_list->asset_id->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t103_opname_list->signature_id->Visible) { // signature_id ?>
		<td data-name="signature_id" <?php echo $t103_opname_list->signature_id->cellAttributes() ?>>
<span id="el<?php echo $t103_opname_list->RowCount ?>_t103_opname_signature_id">
<span<?php echo $t103_opname_list->signature_id->viewAttributes() ?>><?php echo $t103_opname_list->signature_id->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t103_opname_list->Actual->Visible) { // Actual ?>
		<td data-name="Actual" <?php echo $t103_opname_list->Actual->cellAttributes() ?>>
<span id="el<?php echo $t103_opname_list->RowCount ?>_t103_opname_Actual">
<span<?php echo $t103_opname_list->Actual->viewAttributes() ?>><?php echo $t103_opname_list->Actual->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t103_opname_list->OpnameQty->Visible) { // OpnameQty ?>
		<td data-name="OpnameQty" <?php echo $t103_opname_list->OpnameQty->cellAttributes() ?>>
<span id="el<?php echo $t103_opname_list->RowCount ?>_t103_opname_OpnameQty">
<span<?php echo $t103_opname_list->OpnameQty->viewAttributes() ?>><?php echo $t103_opname_list->OpnameQty->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
	<?php if ($t103_opname_list->Diff->Visible) { // Diff ?>
		<td data-name="Diff" <?php echo $t103_opname_list->Diff->cellAttributes() ?>>
<span id="el<?php echo $t103_opname_list->RowCount ?>_t103_opname_Diff">
<span<?php echo $t103_opname_list->Diff->viewAttributes() ?>><?php echo $t103_opname_list->Diff->getViewValue() ?></span>
</span>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t103_opname_list->ListOptions->render("body", "right", $t103_opname_list->RowCount);
?>
	</tr>
<?php
	}
	if (!$t103_opname_list->isGridAdd())
		$t103_opname_list->Recordset->moveNext();
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
<?php if (!$t103_opname->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($t103_opname_list->Recordset)
	$t103_opname_list->Recordset->Close();
?>
<?php if (!$t103_opname_list->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$t103_opname_list->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php echo $t103_opname_list->Pager->render() ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t103_opname_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($t103_opname_list->TotalRecords == 0 && !$t103_opname->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $t103_opname_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$t103_opname_list->showPageFooter();
if (Config("DEBUG"))
	echo GetDebugMessage();
?>
<?php if (!$t103_opname_list->isExport()) { ?>
<script>
loadjs.ready("load", function() {

	// Startup script
	// Write your table-specific startup script here
	// console.log("page loaded");

});
</script>
<?php } ?>
<?php include_once "footer.php"; ?>
<?php
$t103_opname_list->terminate();
?>