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
$t201_users_view = new t201_users_view();

// Run the page
$t201_users_view->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t201_users_view->Page_Render();
?>
<?php include_once "header.php"; ?>
<?php if (!$t201_users_view->isExport()) { ?>
<script>
var ft201_usersview, currentPageID;
loadjs.ready("head", function() {

	// Form object
	currentPageID = ew.PAGE_ID = "view";
	ft201_usersview = currentForm = new ew.Form("ft201_usersview", "view");
	loadjs.done("ft201_usersview");
});
</script>
<script>
loadjs.ready("head", function() {

	// Client script
	// Write your client script here, no need to add script tags.

});
</script>
<?php } ?>
<?php if (!$t201_users_view->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php $t201_users_view->ExportOptions->render("body") ?>
<?php $t201_users_view->OtherOptions->render("body") ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php $t201_users_view->showPageHeader(); ?>
<?php
$t201_users_view->showMessage();
?>
<form name="ft201_usersview" id="ft201_usersview" class="form-inline ew-form ew-view-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($Page->CheckToken) { ?>
<input type="hidden" name="<?php echo Config("TOKEN_NAME") ?>" value="<?php echo $Page->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t201_users">
<input type="hidden" name="modal" value="<?php echo (int)$t201_users_view->IsModal ?>">
<table class="table table-striped table-sm ew-view-table">
<?php if ($t201_users_view->EmployeeID->Visible) { // EmployeeID ?>
	<tr id="r_EmployeeID">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_EmployeeID"><?php echo $t201_users_view->EmployeeID->caption() ?></span></td>
		<td data-name="EmployeeID" <?php echo $t201_users_view->EmployeeID->cellAttributes() ?>>
<span id="el_t201_users_EmployeeID">
<span<?php echo $t201_users_view->EmployeeID->viewAttributes() ?>><?php echo $t201_users_view->EmployeeID->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->LastName->Visible) { // LastName ?>
	<tr id="r_LastName">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_LastName"><?php echo $t201_users_view->LastName->caption() ?></span></td>
		<td data-name="LastName" <?php echo $t201_users_view->LastName->cellAttributes() ?>>
<span id="el_t201_users_LastName">
<span<?php echo $t201_users_view->LastName->viewAttributes() ?>><?php echo $t201_users_view->LastName->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->FirstName->Visible) { // FirstName ?>
	<tr id="r_FirstName">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_FirstName"><?php echo $t201_users_view->FirstName->caption() ?></span></td>
		<td data-name="FirstName" <?php echo $t201_users_view->FirstName->cellAttributes() ?>>
<span id="el_t201_users_FirstName">
<span<?php echo $t201_users_view->FirstName->viewAttributes() ?>><?php echo $t201_users_view->FirstName->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->Title->Visible) { // Title ?>
	<tr id="r_Title">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_Title"><?php echo $t201_users_view->Title->caption() ?></span></td>
		<td data-name="Title" <?php echo $t201_users_view->Title->cellAttributes() ?>>
<span id="el_t201_users_Title">
<span<?php echo $t201_users_view->Title->viewAttributes() ?>><?php echo $t201_users_view->Title->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->TitleOfCourtesy->Visible) { // TitleOfCourtesy ?>
	<tr id="r_TitleOfCourtesy">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_TitleOfCourtesy"><?php echo $t201_users_view->TitleOfCourtesy->caption() ?></span></td>
		<td data-name="TitleOfCourtesy" <?php echo $t201_users_view->TitleOfCourtesy->cellAttributes() ?>>
<span id="el_t201_users_TitleOfCourtesy">
<span<?php echo $t201_users_view->TitleOfCourtesy->viewAttributes() ?>><?php echo $t201_users_view->TitleOfCourtesy->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->BirthDate->Visible) { // BirthDate ?>
	<tr id="r_BirthDate">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_BirthDate"><?php echo $t201_users_view->BirthDate->caption() ?></span></td>
		<td data-name="BirthDate" <?php echo $t201_users_view->BirthDate->cellAttributes() ?>>
<span id="el_t201_users_BirthDate">
<span<?php echo $t201_users_view->BirthDate->viewAttributes() ?>><?php echo $t201_users_view->BirthDate->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->HireDate->Visible) { // HireDate ?>
	<tr id="r_HireDate">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_HireDate"><?php echo $t201_users_view->HireDate->caption() ?></span></td>
		<td data-name="HireDate" <?php echo $t201_users_view->HireDate->cellAttributes() ?>>
<span id="el_t201_users_HireDate">
<span<?php echo $t201_users_view->HireDate->viewAttributes() ?>><?php echo $t201_users_view->HireDate->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->Address->Visible) { // Address ?>
	<tr id="r_Address">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_Address"><?php echo $t201_users_view->Address->caption() ?></span></td>
		<td data-name="Address" <?php echo $t201_users_view->Address->cellAttributes() ?>>
<span id="el_t201_users_Address">
<span<?php echo $t201_users_view->Address->viewAttributes() ?>><?php echo $t201_users_view->Address->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->City->Visible) { // City ?>
	<tr id="r_City">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_City"><?php echo $t201_users_view->City->caption() ?></span></td>
		<td data-name="City" <?php echo $t201_users_view->City->cellAttributes() ?>>
<span id="el_t201_users_City">
<span<?php echo $t201_users_view->City->viewAttributes() ?>><?php echo $t201_users_view->City->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->Region->Visible) { // Region ?>
	<tr id="r_Region">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_Region"><?php echo $t201_users_view->Region->caption() ?></span></td>
		<td data-name="Region" <?php echo $t201_users_view->Region->cellAttributes() ?>>
<span id="el_t201_users_Region">
<span<?php echo $t201_users_view->Region->viewAttributes() ?>><?php echo $t201_users_view->Region->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->PostalCode->Visible) { // PostalCode ?>
	<tr id="r_PostalCode">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_PostalCode"><?php echo $t201_users_view->PostalCode->caption() ?></span></td>
		<td data-name="PostalCode" <?php echo $t201_users_view->PostalCode->cellAttributes() ?>>
<span id="el_t201_users_PostalCode">
<span<?php echo $t201_users_view->PostalCode->viewAttributes() ?>><?php echo $t201_users_view->PostalCode->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->Country->Visible) { // Country ?>
	<tr id="r_Country">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_Country"><?php echo $t201_users_view->Country->caption() ?></span></td>
		<td data-name="Country" <?php echo $t201_users_view->Country->cellAttributes() ?>>
<span id="el_t201_users_Country">
<span<?php echo $t201_users_view->Country->viewAttributes() ?>><?php echo $t201_users_view->Country->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->HomePhone->Visible) { // HomePhone ?>
	<tr id="r_HomePhone">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_HomePhone"><?php echo $t201_users_view->HomePhone->caption() ?></span></td>
		<td data-name="HomePhone" <?php echo $t201_users_view->HomePhone->cellAttributes() ?>>
<span id="el_t201_users_HomePhone">
<span<?php echo $t201_users_view->HomePhone->viewAttributes() ?>><?php echo $t201_users_view->HomePhone->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->Extension->Visible) { // Extension ?>
	<tr id="r_Extension">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_Extension"><?php echo $t201_users_view->Extension->caption() ?></span></td>
		<td data-name="Extension" <?php echo $t201_users_view->Extension->cellAttributes() ?>>
<span id="el_t201_users_Extension">
<span<?php echo $t201_users_view->Extension->viewAttributes() ?>><?php echo $t201_users_view->Extension->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->_Email->Visible) { // Email ?>
	<tr id="r__Email">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users__Email"><?php echo $t201_users_view->_Email->caption() ?></span></td>
		<td data-name="_Email" <?php echo $t201_users_view->_Email->cellAttributes() ?>>
<span id="el_t201_users__Email">
<span<?php echo $t201_users_view->_Email->viewAttributes() ?>><?php echo $t201_users_view->_Email->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->Photo->Visible) { // Photo ?>
	<tr id="r_Photo">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_Photo"><?php echo $t201_users_view->Photo->caption() ?></span></td>
		<td data-name="Photo" <?php echo $t201_users_view->Photo->cellAttributes() ?>>
<span id="el_t201_users_Photo">
<span<?php echo $t201_users_view->Photo->viewAttributes() ?>><?php echo $t201_users_view->Photo->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->Notes->Visible) { // Notes ?>
	<tr id="r_Notes">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_Notes"><?php echo $t201_users_view->Notes->caption() ?></span></td>
		<td data-name="Notes" <?php echo $t201_users_view->Notes->cellAttributes() ?>>
<span id="el_t201_users_Notes">
<span<?php echo $t201_users_view->Notes->viewAttributes() ?>><?php echo $t201_users_view->Notes->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->ReportsTo->Visible) { // ReportsTo ?>
	<tr id="r_ReportsTo">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_ReportsTo"><?php echo $t201_users_view->ReportsTo->caption() ?></span></td>
		<td data-name="ReportsTo" <?php echo $t201_users_view->ReportsTo->cellAttributes() ?>>
<span id="el_t201_users_ReportsTo">
<span<?php echo $t201_users_view->ReportsTo->viewAttributes() ?>><?php echo $t201_users_view->ReportsTo->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->Password->Visible) { // Password ?>
	<tr id="r_Password">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_Password"><?php echo $t201_users_view->Password->caption() ?></span></td>
		<td data-name="Password" <?php echo $t201_users_view->Password->cellAttributes() ?>>
<span id="el_t201_users_Password">
<span<?php echo $t201_users_view->Password->viewAttributes() ?>><?php echo $t201_users_view->Password->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->_UserLevel->Visible) { // UserLevel ?>
	<tr id="r__UserLevel">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users__UserLevel"><?php echo $t201_users_view->_UserLevel->caption() ?></span></td>
		<td data-name="_UserLevel" <?php echo $t201_users_view->_UserLevel->cellAttributes() ?>>
<span id="el_t201_users__UserLevel">
<span<?php echo $t201_users_view->_UserLevel->viewAttributes() ?>><?php echo $t201_users_view->_UserLevel->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->Username->Visible) { // Username ?>
	<tr id="r_Username">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_Username"><?php echo $t201_users_view->Username->caption() ?></span></td>
		<td data-name="Username" <?php echo $t201_users_view->Username->cellAttributes() ?>>
<span id="el_t201_users_Username">
<span<?php echo $t201_users_view->Username->viewAttributes() ?>><?php echo $t201_users_view->Username->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->Activated->Visible) { // Activated ?>
	<tr id="r_Activated">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_Activated"><?php echo $t201_users_view->Activated->caption() ?></span></td>
		<td data-name="Activated" <?php echo $t201_users_view->Activated->cellAttributes() ?>>
<span id="el_t201_users_Activated">
<span<?php echo $t201_users_view->Activated->viewAttributes() ?>><div class="custom-control custom-checkbox d-inline-block"><input type="checkbox" id="x_Activated" class="custom-control-input" value="<?php echo $t201_users_view->Activated->getViewValue() ?>" disabled<?php if (ConvertToBool($t201_users_view->Activated->CurrentValue)) { ?> checked<?php } ?>><label class="custom-control-label" for="x_Activated"></label></div></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t201_users_view->Profile->Visible) { // Profile ?>
	<tr id="r_Profile">
		<td class="<?php echo $t201_users_view->TableLeftColumnClass ?>"><span id="elh_t201_users_Profile"><?php echo $t201_users_view->Profile->caption() ?></span></td>
		<td data-name="Profile" <?php echo $t201_users_view->Profile->cellAttributes() ?>>
<span id="el_t201_users_Profile">
<span<?php echo $t201_users_view->Profile->viewAttributes() ?>><?php echo $t201_users_view->Profile->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
</table>
<?php if (!$t201_users_view->IsModal) { ?>
<?php if (!$t201_users_view->isExport()) { ?>
<?php echo $t201_users_view->Pager->render() ?>
<div class="clearfix"></div>
<?php } ?>
<?php } ?>
</form>
<?php
$t201_users_view->showPageFooter();
if (Config("DEBUG"))
	echo GetDebugMessage();
?>
<?php if (!$t201_users_view->isExport()) { ?>
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
$t201_users_view->terminate();
?>