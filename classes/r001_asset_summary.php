<?php
namespace PHPMaker2020\p_simasset1;

/**
 * Page class
 */
class r001_asset_summary extends r001_asset
{

	// Page ID
	public $PageID = "summary";

	// Project ID
	public $ProjectID = "{E1C6E322-15B9-474C-85CF-A99378A9BC2B}";

	// Table name
	public $TableName = 'r001_asset';

	// Page object name
	public $PageObjName = "r001_asset_summary";

	// CSS
	public $ReportTableClass = "";
	public $ReportTableStyle = "";

	// Page URLs
	public $AddUrl;
	public $EditUrl;
	public $CopyUrl;
	public $DeleteUrl;
	public $ViewUrl;
	public $ListUrl;

	// Export URLs
	public $ExportPrintUrl;
	public $ExportHtmlUrl;
	public $ExportExcelUrl;
	public $ExportWordUrl;
	public $ExportXmlUrl;
	public $ExportCsvUrl;
	public $ExportPdfUrl;

	// Custom export
	public $ExportExcelCustom = FALSE;
	public $ExportWordCustom = FALSE;
	public $ExportPdfCustom = FALSE;
	public $ExportEmailCustom = FALSE;

	// Update URLs
	public $InlineAddUrl;
	public $InlineCopyUrl;
	public $InlineEditUrl;
	public $GridAddUrl;
	public $GridEditUrl;
	public $MultiDeleteUrl;
	public $MultiUpdateUrl;

	// Page headings
	public $Heading = "";
	public $Subheading = "";
	public $PageHeader;
	public $PageFooter;

	// Token
	public $Token = "";
	public $TokenTimeout = 0;
	public $CheckToken;

	// Page heading
	public function pageHeading()
	{
		global $Language;
		if ($this->Heading != "")
			return $this->Heading;
		if (method_exists($this, "tableCaption"))
			return $this->tableCaption();
		return "";
	}

	// Page subheading
	public function pageSubheading()
	{
		global $Language;
		if ($this->Subheading != "")
			return $this->Subheading;
		return "";
	}

	// Page name
	public function pageName()
	{
		return CurrentPageName();
	}

	// Page URL
	public function pageUrl()
	{
		$url = CurrentPageName() . "?";
		return $url;
	}

	// Messages
	private $_message = "";
	private $_failureMessage = "";
	private $_successMessage = "";
	private $_warningMessage = "";

	// Get message
	public function getMessage()
	{
		return isset($_SESSION[SESSION_MESSAGE]) ? $_SESSION[SESSION_MESSAGE] : $this->_message;
	}

	// Set message
	public function setMessage($v)
	{
		AddMessage($this->_message, $v);
		$_SESSION[SESSION_MESSAGE] = $this->_message;
	}

	// Get failure message
	public function getFailureMessage()
	{
		return isset($_SESSION[SESSION_FAILURE_MESSAGE]) ? $_SESSION[SESSION_FAILURE_MESSAGE] : $this->_failureMessage;
	}

	// Set failure message
	public function setFailureMessage($v)
	{
		AddMessage($this->_failureMessage, $v);
		$_SESSION[SESSION_FAILURE_MESSAGE] = $this->_failureMessage;
	}

	// Get success message
	public function getSuccessMessage()
	{
		return isset($_SESSION[SESSION_SUCCESS_MESSAGE]) ? $_SESSION[SESSION_SUCCESS_MESSAGE] : $this->_successMessage;
	}

	// Set success message
	public function setSuccessMessage($v)
	{
		AddMessage($this->_successMessage, $v);
		$_SESSION[SESSION_SUCCESS_MESSAGE] = $this->_successMessage;
	}

	// Get warning message
	public function getWarningMessage()
	{
		return isset($_SESSION[SESSION_WARNING_MESSAGE]) ? $_SESSION[SESSION_WARNING_MESSAGE] : $this->_warningMessage;
	}

	// Set warning message
	public function setWarningMessage($v)
	{
		AddMessage($this->_warningMessage, $v);
		$_SESSION[SESSION_WARNING_MESSAGE] = $this->_warningMessage;
	}

	// Clear message
	public function clearMessage()
	{
		$this->_message = "";
		$_SESSION[SESSION_MESSAGE] = "";
	}

	// Clear failure message
	public function clearFailureMessage()
	{
		$this->_failureMessage = "";
		$_SESSION[SESSION_FAILURE_MESSAGE] = "";
	}

	// Clear success message
	public function clearSuccessMessage()
	{
		$this->_successMessage = "";
		$_SESSION[SESSION_SUCCESS_MESSAGE] = "";
	}

	// Clear warning message
	public function clearWarningMessage()
	{
		$this->_warningMessage = "";
		$_SESSION[SESSION_WARNING_MESSAGE] = "";
	}

	// Clear messages
	public function clearMessages()
	{
		$this->clearMessage();
		$this->clearFailureMessage();
		$this->clearSuccessMessage();
		$this->clearWarningMessage();
	}

	// Show message
	public function showMessage()
	{
		$hidden = TRUE;
		$html = "";

		// Message
		$message = $this->getMessage();
		if (method_exists($this, "Message_Showing"))
			$this->Message_Showing($message, "");
		if ($message != "") { // Message in Session, display
			if (!$hidden)
				$message = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $message;
			$html .= '<div class="alert alert-info alert-dismissible ew-info"><i class="icon fas fa-info"></i>' . $message . '</div>';
			$_SESSION[SESSION_MESSAGE] = ""; // Clear message in Session
		}

		// Warning message
		$warningMessage = $this->getWarningMessage();
		if (method_exists($this, "Message_Showing"))
			$this->Message_Showing($warningMessage, "warning");
		if ($warningMessage != "") { // Message in Session, display
			if (!$hidden)
				$warningMessage = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $warningMessage;
			$html .= '<div class="alert alert-warning alert-dismissible ew-warning"><i class="icon fas fa-exclamation"></i>' . $warningMessage . '</div>';
			$_SESSION[SESSION_WARNING_MESSAGE] = ""; // Clear message in Session
		}

		// Success message
		$successMessage = $this->getSuccessMessage();
		if (method_exists($this, "Message_Showing"))
			$this->Message_Showing($successMessage, "success");
		if ($successMessage != "") { // Message in Session, display
			if (!$hidden)
				$successMessage = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $successMessage;
			$html .= '<div class="alert alert-success alert-dismissible ew-success"><i class="icon fas fa-check"></i>' . $successMessage . '</div>';
			$_SESSION[SESSION_SUCCESS_MESSAGE] = ""; // Clear message in Session
		}

		// Failure message
		$errorMessage = $this->getFailureMessage();
		if (method_exists($this, "Message_Showing"))
			$this->Message_Showing($errorMessage, "failure");
		if ($errorMessage != "") { // Message in Session, display
			if (!$hidden)
				$errorMessage = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $errorMessage;
			$html .= '<div class="alert alert-danger alert-dismissible ew-error"><i class="icon fas fa-ban"></i>' . $errorMessage . '</div>';
			$_SESSION[SESSION_FAILURE_MESSAGE] = ""; // Clear message in Session
		}
		echo '<div class="ew-message-dialog' . (($hidden) ? ' d-none' : "") . '">' . $html . '</div>';
	}

	// Get message as array
	public function getMessages()
	{
		$ar = [];

		// Message
		$message = $this->getMessage();

		//if (method_exists($this, "Message_Showing"))
		//	$this->Message_Showing($message, "");

		if ($message != "") { // Message in Session, display
			$ar["message"] = $message;
			$_SESSION[SESSION_MESSAGE] = ""; // Clear message in Session
		}

		// Warning message
		$warningMessage = $this->getWarningMessage();

		//if (method_exists($this, "Message_Showing"))
		//	$this->Message_Showing($warningMessage, "warning");

		if ($warningMessage != "") { // Message in Session, display
			$ar["warningMessage"] = $warningMessage;
			$_SESSION[SESSION_WARNING_MESSAGE] = ""; // Clear message in Session
		}

		// Success message
		$successMessage = $this->getSuccessMessage();

		//if (method_exists($this, "Message_Showing"))
		//	$this->Message_Showing($successMessage, "success");

		if ($successMessage != "") { // Message in Session, display
			$ar["successMessage"] = $successMessage;
			$_SESSION[SESSION_SUCCESS_MESSAGE] = ""; // Clear message in Session
		}

		// Failure message
		$failureMessage = $this->getFailureMessage();

		//if (method_exists($this, "Message_Showing"))
		//	$this->Message_Showing($failureMessage, "failure");

		if ($failureMessage != "") { // Message in Session, display
			$ar["failureMessage"] = $failureMessage;
			$_SESSION[SESSION_FAILURE_MESSAGE] = ""; // Clear message in Session
		}
		return $ar;
	}

	// Show Page Header
	public function showPageHeader()
	{
		$header = $this->PageHeader;
		$this->Page_DataRendering($header);
		if ($header != "") { // Header exists, display
			echo '<p id="ew-page-header">' . $header . '</p>';
		}
	}

	// Show Page Footer
	public function showPageFooter()
	{
		$footer = $this->PageFooter;
		$this->Page_DataRendered($footer);
		if ($footer != "") { // Footer exists, display
			echo '<p id="ew-page-footer">' . $footer . '</p>';
		}
	}

	// Validate page request
	protected function isPageRequest()
	{
		return TRUE;
	}

	// Valid Post
	protected function validPost()
	{
		if (!$this->CheckToken || !IsPost() || IsApi())
			return TRUE;
		if (Post(Config("TOKEN_NAME")) === NULL)
			return FALSE;
		$fn = Config("CHECK_TOKEN_FUNC");
		if (is_callable($fn))
			return $fn(Post(Config("TOKEN_NAME")), $this->TokenTimeout);
		return FALSE;
	}

	// Create Token
	public function createToken()
	{
		global $CurrentToken;
		$fn = Config("CREATE_TOKEN_FUNC"); // Always create token, required by API file/lookup request
		if ($this->Token == "" && is_callable($fn)) // Create token
			$this->Token = $fn();
		$CurrentToken = $this->Token; // Save to global variable
	}

	// Constructor
	public function __construct()
	{
		global $Language, $DashboardReport;
		global $UserTable;

		// Check token
		$this->CheckToken = Config("CHECK_TOKEN");

		// Initialize
		$GLOBALS["Page"] = &$this;
		$this->TokenTimeout = SessionTimeoutTime();

		// Language object
		if (!isset($Language))
			$Language = new Language();

		// Parent constuctor
		parent::__construct();

		// Table object (r001_asset)
		if (!isset($GLOBALS["r001_asset"]) || get_class($GLOBALS["r001_asset"]) == PROJECT_NAMESPACE . "r001_asset") {
			$GLOBALS["r001_asset"] = &$this;
			$GLOBALS["Table"] = &$GLOBALS["r001_asset"];
		}

		// Initialize URLs
		$this->ExportPrintUrl = $this->pageUrl() . "export=print";
		$this->ExportExcelUrl = $this->pageUrl() . "export=excel";
		$this->ExportWordUrl = $this->pageUrl() . "export=word";
		$this->ExportPdfUrl = $this->pageUrl() . "export=pdf";

		// Table object (t201_users)
		if (!isset($GLOBALS['t201_users']))
			$GLOBALS['t201_users'] = new t201_users();

		// Page ID (for backward compatibility only)
		if (!defined(PROJECT_NAMESPACE . "PAGE_ID"))
			define(PROJECT_NAMESPACE . "PAGE_ID", 'summary');

		// Table name (for backward compatibility only)
		if (!defined(PROJECT_NAMESPACE . "TABLE_NAME"))
			define(PROJECT_NAMESPACE . "TABLE_NAME", 'r001_asset');

		// Start timer
		if (!isset($GLOBALS["DebugTimer"]))
			$GLOBALS["DebugTimer"] = new Timer();

		// Debug message
		LoadDebugMessage();

		// Open connection
		if (!isset($GLOBALS["Conn"]))
			$GLOBALS["Conn"] = $this->getConnection();

		// User table object (t201_users)
		$UserTable = $UserTable ?: new t201_users();

		// Export options
		$this->ExportOptions = new ListOptions("div");
		$this->ExportOptions->TagClassName = "ew-export-option";

		// Filter options
		$this->FilterOptions = new ListOptions("div");
		$this->FilterOptions->TagClassName = "ew-filter-option fsummary";
	}

	// Terminate page
	public function terminate($url = "")
	{
		global $ExportFileName, $TempImages, $DashboardReport;

		// Page Unload event
		$this->Page_Unload();

		// Global Page Unloaded event (in userfn*.php)
		Page_Unloaded();

		// Export
		if ($this->isExport() && !$this->isExport("print") && $fn = Config("REPORT_EXPORT_FUNCTIONS." . $this->Export)) {
			$content = ob_get_clean();
			$this->$fn($content);
		}
		if (!IsApi())
			$this->Page_Redirecting($url);

		// Close connection if not in dashboard
		if (!$DashboardReport)
			CloseConnections();

		// Return for API
		if (IsApi()) {
			$res = $url === TRUE;
			if (!$res) // Show error
				WriteJson(array_merge(["success" => FALSE], $this->getMessages()));
			return;
		}

		// Go to URL if specified
		if ($url != "") {
			if (!Config("DEBUG") && ob_get_length())
				ob_end_clean();
			SaveDebugMessage();
			AddHeader("Location", $url);
		}

		// Exit if not in dashboard
		if (!$DashboardReport)
			exit();
	}

	// Lookup data
	public function lookup()
	{
		global $Language, $Security;
		if (!isset($Language))
			$Language = new Language(Config("LANGUAGE_FOLDER"), Post("language", ""));

		// Set up API request
		if (!ValidApiRequest())
			return FALSE;
		$this->setupApiSecurity();

		// Get lookup object
		$fieldName = Post("field");
		if (!array_key_exists($fieldName, $this->fields))
			return FALSE;
		$lookupField = $this->fields[$fieldName];
		$lookup = $lookupField->Lookup;
		if ($lookup === NULL)
			return FALSE;
		$tbl = $lookup->getTable();
		if (!$Security->allowLookup(Config("PROJECT_ID") . $tbl->TableName)) // Lookup permission
			return FALSE;
		if (in_array($lookup->LinkTable, [$this->ReportSourceTable, $this->TableVar]))
			$lookup->RenderViewFunc = "renderLookup"; // Set up view renderer
		$lookup->RenderEditFunc = ""; // Set up edit renderer

		// Get lookup parameters
		$lookupType = Post("ajax", "unknown");
		$pageSize = -1;
		$offset = -1;
		$searchValue = "";
		if (SameText($lookupType, "modal")) {
			$searchValue = Post("sv", "");
			$pageSize = Post("recperpage", 10);
			$offset = Post("start", 0);
		} elseif (SameText($lookupType, "autosuggest")) {
			$searchValue = Param("q", "");
			$pageSize = Param("n", -1);
			$pageSize = is_numeric($pageSize) ? (int)$pageSize : -1;
			if ($pageSize <= 0)
				$pageSize = Config("AUTO_SUGGEST_MAX_ENTRIES");
			$start = Param("start", -1);
			$start = is_numeric($start) ? (int)$start : -1;
			$page = Param("page", -1);
			$page = is_numeric($page) ? (int)$page : -1;
			$offset = $start >= 0 ? $start : ($page > 0 && $pageSize > 0 ? ($page - 1) * $pageSize : 0);
		}
		$userSelect = Decrypt(Post("s", ""));
		$userFilter = Decrypt(Post("f", ""));
		$userOrderBy = Decrypt(Post("o", ""));
		$keys = Post("keys");
		$lookup->LookupType = $lookupType; // Lookup type
		if ($keys !== NULL) { // Selected records from modal
			if (is_array($keys))
				$keys = implode(Config("MULTIPLE_OPTION_SEPARATOR"), $keys);
			$lookup->FilterFields = []; // Skip parent fields if any
			$lookup->FilterValues[] = $keys; // Lookup values
			$pageSize = -1; // Show all records
		} else { // Lookup values
			$lookup->FilterValues[] = Post("v0", Post("lookupValue", ""));
		}
		$cnt = is_array($lookup->FilterFields) ? count($lookup->FilterFields) : 0;
		for ($i = 1; $i <= $cnt; $i++)
			$lookup->FilterValues[] = Post("v" . $i, "");
		$lookup->SearchValue = $searchValue;
		$lookup->PageSize = $pageSize;
		$lookup->Offset = $offset;
		if ($userSelect != "")
			$lookup->UserSelect = $userSelect;
		if ($userFilter != "")
			$lookup->UserFilter = $userFilter;
		if ($userOrderBy != "")
			$lookup->UserOrderBy = $userOrderBy;
		$lookup->toJson($this); // Use settings from current page
	}

	// Set up API security
	public function setupApiSecurity()
	{
		global $Security;

		// Setup security for API request
		if ($Security->isLoggedIn()) $Security->TablePermission_Loading();
		$Security->loadCurrentUserLevel(Config("PROJECT_ID") . $this->TableName);
		if ($Security->isLoggedIn()) $Security->TablePermission_Loaded();
		$Security->UserID_Loading();
		$Security->loadUserID();
		$Security->UserID_Loaded();
	}

	// Initialize common variables
	public $HideOptions = FALSE;
	public $ExportOptions; // Export options
	public $SearchOptions; // Search options
	public $FilterOptions; // Filter options

	// Records
	public $GroupRecords = [];
	public $DetailRecords = [];
	public $DetailRecordCount = 0;

	// Paging variables
	public $RecordIndex = 0; // Record index
	public $RecordCount = 0; // Record count (start from 1 for each group)
	public $StartGroup = 0; // Start group
	public $StopGroup = 0; // Stop group
	public $TotalGroups = 0; // Total groups
	public $GroupCount = 0; // Group count
	public $GroupCounter = []; // Group counter
	public $DisplayGroups = 5; // Groups per page
	public $GroupRange = 10;
	public $PageSizes = "1,2,3,5,-1"; // Page sizes (comma separated)
	public $Sort = "";
	public $Filter = "";
	public $PageFirstGroupFilter = "";
	public $UserIDFilter = "";
	public $DefaultSearchWhere = ""; // Default search WHERE clause
	public $SearchWhere = "";
	public $SearchPanelClass = "ew-search-panel collapse show"; // Search Panel class
	public $SearchRowCount = 0; // For extended search
	public $SearchColumnCount = 0; // For extended search
	public $SearchFieldsPerRow = 1; // For extended search
	public $DrillDownList = "";
	public $DbMasterFilter = ""; // Master filter
	public $DbDetailFilter = ""; // Detail filter
	public $SearchCommand = FALSE;
	public $ShowHeader;
	public $GroupColumnCount = 0;
	public $SubGroupColumnCount = 0;
	public $DetailColumnCount = 0;
	public $TotalCount;
	public $PageTotalCount;
	public $TopContentClass = "col-sm-12 ew-top";
	public $LeftContentClass = "ew-left";
	public $CenterContentClass = "col-sm-12 ew-center";
	public $RightContentClass = "ew-right";
	public $BottomContentClass = "col-sm-12 ew-bottom";

	//
	// Page run
	//

	public function run()
	{
		global $ExportType, $ExportFileName, $Language, $Security, $UserProfile,
			$Security, $FormError, $DrillDownInPanel, $Breadcrumb,
			$DashboardReport, $CustomExportType, $ReportExportType;

		// User profile
		$UserProfile = new UserProfile();

		// Security
		if (ValidApiRequest()) { // API request
			$this->setupApiSecurity(); // Set up API Security
		} else {
			$Security = new AdvancedSecurity();
			if (!$Security->isLoggedIn())
				$Security->autoLogin();
			if ($Security->isLoggedIn())
				$Security->TablePermission_Loading();
			$Security->loadCurrentUserLevel($this->ProjectID . $this->TableName);
			if ($Security->isLoggedIn())
				$Security->TablePermission_Loaded();
			if (!$Security->canReport()) {
				$Security->saveLastUrl();
				$this->setFailureMessage(DeniedMessage()); // Set no permission
				$this->terminate(GetUrl("index.php"));
				return;
			}
			if ($Security->isLoggedIn()) {
				$Security->UserID_Loading();
				$Security->loadUserID();
				$Security->UserID_Loaded();
			}
		}

		// Get export parameters
		$custom = "";
		if (Param("export") !== NULL) {
			$this->Export = Param("export");
			$custom = Param("custom", "");
		}
		$ExportFileName = $this->TableVar; // Get export file, used in header

		// Get custom export parameters
		if ($this->isExport() && $custom != "") {
			$this->CustomExport = $this->Export;
			$this->Export = "print";
		}
		$CustomExportType = $this->CustomExport;
		$ExportType = $this->Export; // Get export parameter, used in header
		$ReportExportType = $ExportType; // Report export type, used in header

		// Update Export URLs
		if (Config("USE_PHPEXCEL"))
			$this->ExportExcelCustom = FALSE;
		if ($this->ExportExcelCustom)
			$this->ExportExcelUrl .= "&amp;custom=1";
		if (Config("USE_PHPWORD"))
			$this->ExportWordCustom = FALSE;
		if ($this->ExportWordCustom)
			$this->ExportWordUrl .= "&amp;custom=1";
		if ($this->ExportPdfCustom)
			$this->ExportPdfUrl .= "&amp;custom=1";
		$this->CurrentAction = Param("action"); // Set up current action

		// Setup export options
		$this->setupExportOptions();

		// Global Page Loading event (in userfn*.php)
		Page_Loading();

		// Page Load event
		$this->Page_Load();

		// Check token
		if (!$this->validPost()) {
			Write($Language->phrase("InvalidPostRequest"));
			$this->terminate();
		}

		// Create Token
		$this->createToken();

		// Setup other options
		$this->setupOtherOptions();

		// Set up table class
		if ($this->isExport("word") || $this->isExport("excel") || $this->isExport("pdf"))
			$this->ReportTableClass = "ew-table";
		else
			$this->ReportTableClass = "table ew-table";

		// Set field visibility for detail fields
		$this->Code->setVisibility();
		$this->Description->setVisibility();
		$this->brand_id->setVisibility();
		$this->signature_id->setVisibility();
		$this->department_id->setVisibility();
		$this->location_id->setVisibility();
		$this->Qty->setVisibility();
		$this->Variance->setVisibility();
		$this->cond_id->setVisibility();
		$this->Remarks->setVisibility();
		$this->ProcurementDate->setVisibility();
		$this->ProcurementCurrentCost->setVisibility();
		$this->PeriodBegin->setVisibility();
		$this->PeriodEnd->setVisibility();

		// Set up groups per page dynamically
		$this->setupDisplayGroups();

		// Set up Breadcrumb
		if (!$this->isExport())
			$this->setupBreadcrumb();

		// Check if search command
		$this->SearchCommand = (Get("cmd", "") == "search");

		// Load custom filters
		$this->Page_FilterLoad();

		// Extended filter
		$extendedFilter = "";

		// Restore filter list
		$this->restoreFilterList();

		// Build extended filter
		$extendedFilter = $this->getExtendedFilter();
		AddFilter($this->SearchWhere, $extendedFilter);

		// Call Page Selecting event
		$this->Page_Selecting($this->SearchWhere);

		// Search options
		$this->setupSearchOptions();

		// Set up search panel class
		if ($this->SearchWhere != "")
			AppendClass($this->SearchPanelClass, "show");

		// Get sort
		$this->Sort = $this->getSort();

		// Update filter
		AddFilter($this->Filter, $this->SearchWhere);

		// Get total group count
		$sql = BuildReportSql($this->getSqlSelectGroup(), $this->getSqlWhere(), $this->getSqlGroupBy(), $this->getSqlHaving(), "", $this->Filter, "");
		$this->TotalGroups = $this->getRecordCount($sql);
		if ($this->DisplayGroups <= 0 || $this->DrillDown || $DashboardReport) // Display all groups
			$this->DisplayGroups = $this->TotalGroups;
		$this->StartGroup = 1;

		// Show header
		$this->ShowHeader = ($this->TotalGroups > 0);

		// Set up start position if not export all
		if ($this->ExportAll && $this->isExport())
			$this->DisplayGroups = $this->TotalGroups;
		else
			$this->setupStartGroup();

		// Set no record found message
		if ($this->TotalGroups == 0) {
			if ($Security->canList()) {
				if ($this->SearchWhere == "0=101") {
					$this->setWarningMessage($Language->phrase("EnterSearchCriteria"));
				} else {
					$this->setWarningMessage($Language->phrase("NoRecord"));
				}
			} else {
				$this->setWarningMessage(DeniedMessage());
			}
		}

		// Hide export options if export/dashboard report/hide options
		if ($this->isExport() || $DashboardReport || $this->HideOptions)
			$this->ExportOptions->hideAllOptions();

		// Hide search/filter options if export/drilldown/dashboard report/hide options
		if ($this->isExport() || $this->DrillDown || $DashboardReport || $this->HideOptions) {
			$this->SearchOptions->hideAllOptions();
			$this->FilterOptions->hideAllOptions();
		}

		// Get group records
		if ($this->TotalGroups > 0) {
			$grpSort = UpdateSortFields($this->getSqlOrderByGroup(), $this->Sort, 2); // Get grouping field only
			$sql = BuildReportSql($this->getSqlSelectGroup(), $this->getSqlWhere(), $this->getSqlGroupBy(), $this->getSqlHaving(), $this->getSqlOrderByGroup(), $this->Filter, $grpSort);
			$grpRs = $this->getRecordset($sql, $this->DisplayGroups, $this->StartGroup - 1);
			$this->GroupRecords = $grpRs->getRows(); // Get records of first grouping field
			$this->loadGroupRowValues();
			$this->GroupCount = 1;
		}

		// Init detail records
		$this->DetailRecords = [];
		$this->setupFieldCount();

		// Set the last group to display if not export all
		if ($this->ExportAll && $this->isExport()) {
			$this->StopGroup = $this->TotalGroups;
		} else {
			$this->StopGroup = $this->StartGroup + $this->DisplayGroups - 1;
		}

		// Stop group <= total number of groups
		if (intval($this->StopGroup) > intval($this->TotalGroups))
			$this->StopGroup = $this->TotalGroups;
		$this->RecordCount = 0;
		$this->RecordIndex = 0;

		// Set up pager
		$this->Pager = new PrevNextPager($this->StartGroup, $this->DisplayGroups, $this->TotalGroups, $this->PageSizes, $this->GroupRange, $this->AutoHidePager, $this->AutoHidePageSizeSelector);
	}

	// Load group row values
	public function loadGroupRowValues()
	{
		$cnt = count($this->GroupRecords); // Get record count
		if ($this->GroupCount < $cnt)
			$this->property_id->setGroupValue($this->GroupRecords[$this->GroupCount][0]);
		else
			$this->property_id->setGroupValue("");
	}

	// Load row values
	public function loadRowValues($record)
	{
		if ($this->RecordIndex == 1) { // Load first row data
			$data = [];
			$data["id"] = $record['id'];
			$data["property_id"] = $record['property_id'];
			$data["group_id"] = $record['group_id'];
			$data["Code"] = $record['Code'];
			$data["Description"] = $record['Description'];
			$data["brand_id"] = $record['brand_id'];
			$data["type_id"] = $record['type_id'];
			$data["signature_id"] = $record['signature_id'];
			$data["department_id"] = $record['department_id'];
			$data["location_id"] = $record['location_id'];
			$data["Qty"] = $record['Qty'];
			$data["Variance"] = $record['Variance'];
			$data["cond_id"] = $record['cond_id'];
			$data["ProcurementDate"] = $record['ProcurementDate'];
			$data["ProcurementCurrentCost"] = $record['ProcurementCurrentCost'];
			$data["PeriodBegin"] = $record['PeriodBegin'];
			$data["PeriodEnd"] = $record['PeriodEnd'];
			$this->Rows[] = $data;
		}
		$this->id->setDbValue($record['id']);
		$this->property_id->setDbValue(GroupValue($this->property_id, $record['property_id']));
		$this->group_id->setDbValue($record['group_id']);
		$this->Code->setDbValue($record['Code']);
		$this->Description->setDbValue($record['Description']);
		$this->brand_id->setDbValue($record['brand_id']);
		$this->type_id->setDbValue($record['type_id']);
		$this->signature_id->setDbValue($record['signature_id']);
		$this->department_id->setDbValue($record['department_id']);
		$this->location_id->setDbValue($record['location_id']);
		$this->Qty->setDbValue($record['Qty']);
		$this->Variance->setDbValue($record['Variance']);
		$this->cond_id->setDbValue($record['cond_id']);
		$this->Remarks->setDbValue($record['Remarks']);
		$this->ProcurementDate->setDbValue($record['ProcurementDate']);
		$this->ProcurementCurrentCost->setDbValue($record['ProcurementCurrentCost']);
		$this->PeriodBegin->setDbValue($record['PeriodBegin']);
		$this->PeriodEnd->setDbValue($record['PeriodEnd']);
	}

	// Render row
	public function renderRow()
	{
		global $Security, $Language, $Language;
		$conn = $this->getConnection();
		if ($this->RowType == ROWTYPE_TOTAL && $this->RowTotalSubType == ROWTOTAL_FOOTER && $this->RowTotalType == ROWTOTAL_PAGE) { // Get Page total

			// Build detail SQL
			$firstGrpFld = &$this->property_id;
			$firstGrpFld->getDistinctValues($this->GroupRecords);
			$where = DetailFilterSql($firstGrpFld, $this->getSqlFirstGroupField(), $firstGrpFld->DistinctValues, $this->Dbid);
			if ($this->Filter != "")
				$where = "($this->Filter) AND ($where)";
			$sql = BuildReportSql($this->getSqlSelect(), $this->getSqlWhere(), $this->getSqlGroupBy(), $this->getSqlHaving(), $this->getSqlOrderBy(), $where, $this->Sort);
			$rs = $this->getRecordset($sql);
			$records = $rs ? $rs->getRows() : [];
			$this->PageTotalCount = count($records);
		} elseif ($this->RowType == ROWTYPE_TOTAL && $this->RowTotalSubType == ROWTOTAL_FOOTER && $this->RowTotalType == ROWTOTAL_GRAND) { // Get Grand total
			$hasCount = FALSE;
			$hasSummary = FALSE;

			// Get total count from SQL directly
			$sql = BuildReportSql($this->getSqlSelectCount(), $this->getSqlWhere(), $this->getSqlGroupBy(), $this->getSqlHaving(), "", $this->Filter, "");
			$rstot = $conn->execute($sql);
			if ($rstot) {
				$cnt = ($rstot->recordCount() > 1) ? $rstot->recordCount() : $rstot->fields[0];
				$rstot->close();
				$hasCount = TRUE;
			} else {
				$cnt = 0;
			}
			$this->TotalCount = $cnt;
			$hasSummary = TRUE;

			// Accumulate grand summary from detail records
			if (!$hasCount || !$hasSummary) {
				$sql = BuildReportSql($this->getSqlSelect(), $this->getSqlWhere(), $this->getSqlGroupBy(), $this->getSqlHaving(), "", $this->Filter, "");
				$rs = $this->getRecordset($sql);
				$this->DetailRecords = $rs ? $rs->getRows() : [];
			}
		}

		// Call Row_Rendering event
		$this->Row_Rendering();

		// property_id
		// group_id
		// type_id
		// Code
		// Description
		// brand_id
		// signature_id
		// department_id
		// location_id
		// Qty
		// Variance
		// cond_id
		// Remarks
		// ProcurementDate
		// ProcurementCurrentCost
		// PeriodBegin
		// PeriodEnd

		if ($this->RowType == ROWTYPE_SEARCH) { // Search row

			// property_id
			$this->property_id->EditAttrs["class"] = "form-control";
			$this->property_id->EditCustomAttributes = "";
			$this->property_id->EditValue = HtmlEncode($this->property_id->AdvancedSearch->SearchValue);
			$curVal = strval($this->property_id->AdvancedSearch->SearchValue);
			if ($curVal != "") {
				$this->property_id->EditValue = $this->property_id->lookupCacheOption($curVal);
				if ($this->property_id->EditValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->property_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = [];
						$arwrk[1] = HtmlEncode($rswrk->fields('df'));
						$this->property_id->EditValue = $this->property_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->property_id->EditValue = HtmlEncode($this->property_id->AdvancedSearch->SearchValue);
					}
				}
			} else {
				$this->property_id->EditValue = NULL;
			}
			$this->property_id->PlaceHolder = RemoveHtml($this->property_id->caption());

			// group_id
			$this->group_id->EditAttrs["class"] = "form-control";
			$this->group_id->EditCustomAttributes = "";
			$this->group_id->EditValue = HtmlEncode($this->group_id->AdvancedSearch->SearchValue);
			$curVal = strval($this->group_id->AdvancedSearch->SearchValue);
			if ($curVal != "") {
				$this->group_id->EditValue = $this->group_id->lookupCacheOption($curVal);
				if ($this->group_id->EditValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->group_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = [];
						$arwrk[1] = HtmlEncode($rswrk->fields('df'));
						$this->group_id->EditValue = $this->group_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->group_id->EditValue = HtmlEncode($this->group_id->AdvancedSearch->SearchValue);
					}
				}
			} else {
				$this->group_id->EditValue = NULL;
			}
			$this->group_id->PlaceHolder = RemoveHtml($this->group_id->caption());

			// Code
			$this->Code->EditAttrs["class"] = "form-control";
			$this->Code->EditCustomAttributes = "";
			if (!$this->Code->Raw)
				$this->Code->AdvancedSearch->SearchValue = HtmlDecode($this->Code->AdvancedSearch->SearchValue);
			$this->Code->EditValue = HtmlEncode($this->Code->AdvancedSearch->SearchValue);
			$this->Code->PlaceHolder = RemoveHtml($this->Code->caption());

			// Description
			$this->Description->EditAttrs["class"] = "form-control";
			$this->Description->EditCustomAttributes = "";
			if (!$this->Description->Raw)
				$this->Description->AdvancedSearch->SearchValue = HtmlDecode($this->Description->AdvancedSearch->SearchValue);
			$this->Description->EditValue = HtmlEncode($this->Description->AdvancedSearch->SearchValue);
			$this->Description->PlaceHolder = RemoveHtml($this->Description->caption());

			// brand_id
			$this->brand_id->EditAttrs["class"] = "form-control";
			$this->brand_id->EditCustomAttributes = "";
			$this->brand_id->EditValue = HtmlEncode($this->brand_id->AdvancedSearch->SearchValue);
			$curVal = strval($this->brand_id->AdvancedSearch->SearchValue);
			if ($curVal != "") {
				$this->brand_id->EditValue = $this->brand_id->lookupCacheOption($curVal);
				if ($this->brand_id->EditValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->brand_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = [];
						$arwrk[1] = HtmlEncode($rswrk->fields('df'));
						$this->brand_id->EditValue = $this->brand_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->brand_id->EditValue = HtmlEncode($this->brand_id->AdvancedSearch->SearchValue);
					}
				}
			} else {
				$this->brand_id->EditValue = NULL;
			}
			$this->brand_id->PlaceHolder = RemoveHtml($this->brand_id->caption());

			// type_id
			$this->type_id->EditAttrs["class"] = "form-control";
			$this->type_id->EditCustomAttributes = "";
			$this->type_id->EditValue = HtmlEncode($this->type_id->AdvancedSearch->SearchValue);
			$curVal = strval($this->type_id->AdvancedSearch->SearchValue);
			if ($curVal != "") {
				$this->type_id->EditValue = $this->type_id->lookupCacheOption($curVal);
				if ($this->type_id->EditValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->type_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = [];
						$arwrk[1] = HtmlEncode($rswrk->fields('df'));
						$this->type_id->EditValue = $this->type_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->type_id->EditValue = HtmlEncode($this->type_id->AdvancedSearch->SearchValue);
					}
				}
			} else {
				$this->type_id->EditValue = NULL;
			}
			$this->type_id->PlaceHolder = RemoveHtml($this->type_id->caption());

			// signature_id
			$this->signature_id->EditAttrs["class"] = "form-control";
			$this->signature_id->EditCustomAttributes = "";
			$this->signature_id->EditValue = HtmlEncode($this->signature_id->AdvancedSearch->SearchValue);
			$curVal = strval($this->signature_id->AdvancedSearch->SearchValue);
			if ($curVal != "") {
				$this->signature_id->EditValue = $this->signature_id->lookupCacheOption($curVal);
				if ($this->signature_id->EditValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->signature_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = [];
						$arwrk[1] = HtmlEncode($rswrk->fields('df'));
						$this->signature_id->EditValue = $this->signature_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->signature_id->EditValue = HtmlEncode($this->signature_id->AdvancedSearch->SearchValue);
					}
				}
			} else {
				$this->signature_id->EditValue = NULL;
			}
			$this->signature_id->PlaceHolder = RemoveHtml($this->signature_id->caption());

			// department_id
			$this->department_id->EditAttrs["class"] = "form-control";
			$this->department_id->EditCustomAttributes = "";
			$this->department_id->EditValue = HtmlEncode($this->department_id->AdvancedSearch->SearchValue);
			$curVal = strval($this->department_id->AdvancedSearch->SearchValue);
			if ($curVal != "") {
				$this->department_id->EditValue = $this->department_id->lookupCacheOption($curVal);
				if ($this->department_id->EditValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->department_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = [];
						$arwrk[1] = HtmlEncode($rswrk->fields('df'));
						$this->department_id->EditValue = $this->department_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->department_id->EditValue = HtmlEncode($this->department_id->AdvancedSearch->SearchValue);
					}
				}
			} else {
				$this->department_id->EditValue = NULL;
			}
			$this->department_id->PlaceHolder = RemoveHtml($this->department_id->caption());

			// location_id
			$this->location_id->EditAttrs["class"] = "form-control";
			$this->location_id->EditCustomAttributes = "";
			$this->location_id->EditValue = HtmlEncode($this->location_id->AdvancedSearch->SearchValue);
			$curVal = strval($this->location_id->AdvancedSearch->SearchValue);
			if ($curVal != "") {
				$this->location_id->EditValue = $this->location_id->lookupCacheOption($curVal);
				if ($this->location_id->EditValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->location_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = [];
						$arwrk[1] = HtmlEncode($rswrk->fields('df'));
						$this->location_id->EditValue = $this->location_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->location_id->EditValue = HtmlEncode($this->location_id->AdvancedSearch->SearchValue);
					}
				}
			} else {
				$this->location_id->EditValue = NULL;
			}
			$this->location_id->PlaceHolder = RemoveHtml($this->location_id->caption());

			// cond_id
			$this->cond_id->EditAttrs["class"] = "form-control";
			$this->cond_id->EditCustomAttributes = "";
			$this->cond_id->EditValue = HtmlEncode($this->cond_id->AdvancedSearch->SearchValue);
			$curVal = strval($this->cond_id->AdvancedSearch->SearchValue);
			if ($curVal != "") {
				$this->cond_id->EditValue = $this->cond_id->lookupCacheOption($curVal);
				if ($this->cond_id->EditValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->cond_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = [];
						$arwrk[1] = HtmlEncode($rswrk->fields('df'));
						$this->cond_id->EditValue = $this->cond_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->cond_id->EditValue = HtmlEncode($this->cond_id->AdvancedSearch->SearchValue);
					}
				}
			} else {
				$this->cond_id->EditValue = NULL;
			}
			$this->cond_id->PlaceHolder = RemoveHtml($this->cond_id->caption());

			// Remarks
			$this->Remarks->EditAttrs["class"] = "form-control";
			$this->Remarks->EditCustomAttributes = "";
			$this->Remarks->EditValue = HtmlEncode($this->Remarks->AdvancedSearch->SearchValue);
			$this->Remarks->PlaceHolder = RemoveHtml($this->Remarks->caption());

			// ProcurementDate
			$this->ProcurementDate->EditAttrs["class"] = "form-control";
			$this->ProcurementDate->EditCustomAttributes = "";
			$this->ProcurementDate->EditValue = HtmlEncode(FormatDateTime(UnFormatDateTime($this->ProcurementDate->AdvancedSearch->SearchValue, 7), 7));
			$this->ProcurementDate->PlaceHolder = RemoveHtml($this->ProcurementDate->caption());
		} elseif ($this->RowType == ROWTYPE_TOTAL && !($this->RowTotalType == ROWTOTAL_GROUP && $this->RowTotalSubType == ROWTOTAL_HEADER)) { // Summary row
			$this->RowAttrs->prependClass(($this->RowTotalType == ROWTOTAL_PAGE || $this->RowTotalType == ROWTOTAL_GRAND) ? "ew-rpt-grp-aggregate" : ""); // Set up row class
			if ($this->RowTotalType == ROWTOTAL_GROUP)
				$this->RowAttrs["data-group"] = $this->property_id->groupValue(); // Set up group attribute
			if ($this->RowTotalType == ROWTOTAL_GROUP && $this->RowGroupLevel >= 2)
				$this->RowAttrs["data-group-2"] = $this->group_id->groupValue(); // Set up group attribute 2
			if ($this->RowTotalType == ROWTOTAL_GROUP && $this->RowGroupLevel >= 3)
				$this->RowAttrs["data-group-3"] = $this->type_id->groupValue(); // Set up group attribute 3

			// property_id
			$this->property_id->GroupViewValue = $this->property_id->groupValue();
			$curVal = strval($this->property_id->groupValue());
			if ($curVal != "") {
				$this->property_id->GroupViewValue = $this->property_id->lookupCacheOption($curVal);
				if ($this->property_id->GroupViewValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->property_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = [];
						$arwrk[1] = $rswrk->fields('df');
						$this->property_id->GroupViewValue = $this->property_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->property_id->GroupViewValue = $this->property_id->groupValue();
					}
				}
			} else {
				$this->property_id->GroupViewValue = NULL;
			}
			$this->property_id->CellCssClass = ($this->RowGroupLevel == 1 ? "ew-rpt-grp-summary-1" : "ew-rpt-grp-field-1");
			$this->property_id->ViewCustomAttributes = "";
			$this->property_id->GroupViewValue = DisplayGroupValue($this->property_id, $this->property_id->GroupViewValue);

			// group_id
			$this->group_id->GroupViewValue = $this->group_id->groupValue();
			$curVal = strval($this->group_id->groupValue());
			if ($curVal != "") {
				$this->group_id->GroupViewValue = $this->group_id->lookupCacheOption($curVal);
				if ($this->group_id->GroupViewValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->group_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = [];
						$arwrk[1] = $rswrk->fields('df');
						$this->group_id->GroupViewValue = $this->group_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->group_id->GroupViewValue = $this->group_id->groupValue();
					}
				}
			} else {
				$this->group_id->GroupViewValue = NULL;
			}
			$this->group_id->CellCssClass = ($this->RowGroupLevel == 2 ? "ew-rpt-grp-summary-2" : "ew-rpt-grp-field-2");
			$this->group_id->ViewCustomAttributes = "";
			$this->group_id->GroupViewValue = DisplayGroupValue($this->group_id, $this->group_id->GroupViewValue);

			// type_id
			$this->type_id->GroupViewValue = $this->type_id->groupValue();
			$curVal = strval($this->type_id->groupValue());
			if ($curVal != "") {
				$this->type_id->GroupViewValue = $this->type_id->lookupCacheOption($curVal);
				if ($this->type_id->GroupViewValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->type_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = [];
						$arwrk[1] = $rswrk->fields('df');
						$this->type_id->GroupViewValue = $this->type_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->type_id->GroupViewValue = $this->type_id->groupValue();
					}
				}
			} else {
				$this->type_id->GroupViewValue = NULL;
			}
			$this->type_id->CellCssClass = "ew-rpt-grp-field-%g";
			$this->type_id->ViewCustomAttributes = "";
			$this->type_id->GroupViewValue = DisplayGroupValue($this->type_id, $this->type_id->GroupViewValue);

			// property_id
			$this->property_id->HrefValue = "";

			// group_id
			$this->group_id->HrefValue = "";

			// type_id
			$this->type_id->HrefValue = "";

			// Code
			$this->Code->HrefValue = "";

			// Description
			$this->Description->HrefValue = "";

			// brand_id
			$this->brand_id->HrefValue = "";

			// signature_id
			$this->signature_id->HrefValue = "";

			// department_id
			$this->department_id->HrefValue = "";

			// location_id
			$this->location_id->HrefValue = "";

			// Qty
			$this->Qty->HrefValue = "";

			// Variance
			$this->Variance->HrefValue = "";

			// cond_id
			$this->cond_id->HrefValue = "";

			// Remarks
			$this->Remarks->HrefValue = "";

			// ProcurementDate
			$this->ProcurementDate->HrefValue = "";

			// ProcurementCurrentCost
			$this->ProcurementCurrentCost->HrefValue = "";

			// PeriodBegin
			$this->PeriodBegin->HrefValue = "";

			// PeriodEnd
			$this->PeriodEnd->HrefValue = "";
		} else {
			if ($this->RowTotalType == ROWTOTAL_GROUP && $this->RowTotalSubType == ROWTOTAL_HEADER) {
			$this->RowAttrs["data-group"] = $this->property_id->groupValue(); // Set up group attribute
			if ($this->RowGroupLevel >= 2) $this->RowAttrs["data-group-2"] = $this->group_id->groupValue(); // Set up group attribute 2
			if ($this->RowGroupLevel >= 3) $this->RowAttrs["data-group-3"] = $this->type_id->groupValue(); // Set up group attribute 3
			} else {
			$this->RowAttrs["data-group"] = $this->property_id->groupValue(); // Set up group attribute
			$this->RowAttrs["data-group-2"] = $this->group_id->groupValue(); // Set up group attribute 2
			$this->RowAttrs["data-group-3"] = $this->type_id->groupValue(); // Set up group attribute 3
			}

			// property_id
			$this->property_id->GroupViewValue = $this->property_id->groupValue();
			$curVal = strval($this->property_id->groupValue());
			if ($curVal != "") {
				$this->property_id->GroupViewValue = $this->property_id->lookupCacheOption($curVal);
				if ($this->property_id->GroupViewValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->property_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = [];
						$arwrk[1] = $rswrk->fields('df');
						$this->property_id->GroupViewValue = $this->property_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->property_id->GroupViewValue = $this->property_id->groupValue();
					}
				}
			} else {
				$this->property_id->GroupViewValue = NULL;
			}
			$this->property_id->CellCssClass = "ew-rpt-grp-field-1";
			$this->property_id->ViewCustomAttributes = "";
			$this->property_id->GroupViewValue = DisplayGroupValue($this->property_id, $this->property_id->GroupViewValue);
			if (!$this->property_id->LevelBreak)
				$this->property_id->GroupViewValue = "&nbsp;";
			else
				$this->property_id->LevelBreak = FALSE;

			// group_id
			$this->group_id->GroupViewValue = $this->group_id->groupValue();
			$curVal = strval($this->group_id->groupValue());
			if ($curVal != "") {
				$this->group_id->GroupViewValue = $this->group_id->lookupCacheOption($curVal);
				if ($this->group_id->GroupViewValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->group_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = [];
						$arwrk[1] = $rswrk->fields('df');
						$this->group_id->GroupViewValue = $this->group_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->group_id->GroupViewValue = $this->group_id->groupValue();
					}
				}
			} else {
				$this->group_id->GroupViewValue = NULL;
			}
			$this->group_id->CellCssClass = "ew-rpt-grp-field-2";
			$this->group_id->ViewCustomAttributes = "";
			$this->group_id->GroupViewValue = DisplayGroupValue($this->group_id, $this->group_id->GroupViewValue);
			if (!$this->group_id->LevelBreak)
				$this->group_id->GroupViewValue = "&nbsp;";
			else
				$this->group_id->LevelBreak = FALSE;

			// type_id
			$this->type_id->GroupViewValue = $this->type_id->groupValue();
			$curVal = strval($this->type_id->groupValue());
			if ($curVal != "") {
				$this->type_id->GroupViewValue = $this->type_id->lookupCacheOption($curVal);
				if ($this->type_id->GroupViewValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->type_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = [];
						$arwrk[1] = $rswrk->fields('df');
						$this->type_id->GroupViewValue = $this->type_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->type_id->GroupViewValue = $this->type_id->groupValue();
					}
				}
			} else {
				$this->type_id->GroupViewValue = NULL;
			}
			$this->type_id->CellCssClass = "ew-rpt-grp-field-3";
			$this->type_id->ViewCustomAttributes = "";
			$this->type_id->GroupViewValue = DisplayGroupValue($this->type_id, $this->type_id->GroupViewValue);
			if (!$this->type_id->LevelBreak)
				$this->type_id->GroupViewValue = "&nbsp;";
			else
				$this->type_id->LevelBreak = FALSE;

			// Code
			$this->Code->ViewValue = $this->Code->CurrentValue;
			$this->Code->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->Code->ViewCustomAttributes = "";

			// Description
			$this->Description->ViewValue = $this->Description->CurrentValue;
			$this->Description->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->Description->ViewCustomAttributes = "";

			// brand_id
			$this->brand_id->ViewValue = $this->brand_id->CurrentValue;
			$curVal = strval($this->brand_id->CurrentValue);
			if ($curVal != "") {
				$this->brand_id->ViewValue = $this->brand_id->lookupCacheOption($curVal);
				if ($this->brand_id->ViewValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->brand_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = [];
						$arwrk[1] = $rswrk->fields('df');
						$this->brand_id->ViewValue = $this->brand_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->brand_id->ViewValue = $this->brand_id->CurrentValue;
					}
				}
			} else {
				$this->brand_id->ViewValue = NULL;
			}
			$this->brand_id->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->brand_id->ViewCustomAttributes = "";

			// signature_id
			$this->signature_id->ViewValue = $this->signature_id->CurrentValue;
			$curVal = strval($this->signature_id->CurrentValue);
			if ($curVal != "") {
				$this->signature_id->ViewValue = $this->signature_id->lookupCacheOption($curVal);
				if ($this->signature_id->ViewValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->signature_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = [];
						$arwrk[1] = $rswrk->fields('df');
						$this->signature_id->ViewValue = $this->signature_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->signature_id->ViewValue = $this->signature_id->CurrentValue;
					}
				}
			} else {
				$this->signature_id->ViewValue = NULL;
			}
			$this->signature_id->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->signature_id->ViewCustomAttributes = "";

			// department_id
			$this->department_id->ViewValue = $this->department_id->CurrentValue;
			$curVal = strval($this->department_id->CurrentValue);
			if ($curVal != "") {
				$this->department_id->ViewValue = $this->department_id->lookupCacheOption($curVal);
				if ($this->department_id->ViewValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->department_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = [];
						$arwrk[1] = $rswrk->fields('df');
						$this->department_id->ViewValue = $this->department_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->department_id->ViewValue = $this->department_id->CurrentValue;
					}
				}
			} else {
				$this->department_id->ViewValue = NULL;
			}
			$this->department_id->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->department_id->ViewCustomAttributes = "";

			// location_id
			$this->location_id->ViewValue = $this->location_id->CurrentValue;
			$curVal = strval($this->location_id->CurrentValue);
			if ($curVal != "") {
				$this->location_id->ViewValue = $this->location_id->lookupCacheOption($curVal);
				if ($this->location_id->ViewValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->location_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = [];
						$arwrk[1] = $rswrk->fields('df');
						$this->location_id->ViewValue = $this->location_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->location_id->ViewValue = $this->location_id->CurrentValue;
					}
				}
			} else {
				$this->location_id->ViewValue = NULL;
			}
			$this->location_id->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->location_id->ViewCustomAttributes = "";

			// Qty
			$this->Qty->ViewValue = $this->Qty->CurrentValue;
			$this->Qty->ViewValue = FormatNumber($this->Qty->ViewValue, 2, -2, -2, -2);
			$this->Qty->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->Qty->CellCssStyle .= "text-align: right;";
			$this->Qty->ViewCustomAttributes = "";

			// Variance
			$this->Variance->ViewValue = $this->Variance->CurrentValue;
			$this->Variance->ViewValue = FormatNumber($this->Variance->ViewValue, 2, -2, -2, -2);
			$this->Variance->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->Variance->ViewCustomAttributes = "";

			// cond_id
			$this->cond_id->ViewValue = $this->cond_id->CurrentValue;
			$curVal = strval($this->cond_id->CurrentValue);
			if ($curVal != "") {
				$this->cond_id->ViewValue = $this->cond_id->lookupCacheOption($curVal);
				if ($this->cond_id->ViewValue === NULL) { // Lookup from database
					$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
					$sqlWrk = $this->cond_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
					$rswrk = Conn()->execute($sqlWrk);
					if ($rswrk && !$rswrk->EOF) { // Lookup values found
						$arwrk = [];
						$arwrk[1] = $rswrk->fields('df');
						$this->cond_id->ViewValue = $this->cond_id->displayValue($arwrk);
						$rswrk->Close();
					} else {
						$this->cond_id->ViewValue = $this->cond_id->CurrentValue;
					}
				}
			} else {
				$this->cond_id->ViewValue = NULL;
			}
			$this->cond_id->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->cond_id->ViewCustomAttributes = "";

			// Remarks
			$this->Remarks->ViewValue = $this->Remarks->CurrentValue;
			$this->Remarks->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->Remarks->ViewCustomAttributes = "";

			// ProcurementDate
			$this->ProcurementDate->ViewValue = $this->ProcurementDate->CurrentValue;
			$this->ProcurementDate->ViewValue = FormatDateTime($this->ProcurementDate->ViewValue, 7);
			$this->ProcurementDate->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->ProcurementDate->ViewCustomAttributes = "";

			// ProcurementCurrentCost
			$this->ProcurementCurrentCost->ViewValue = $this->ProcurementCurrentCost->CurrentValue;
			$this->ProcurementCurrentCost->ViewValue = FormatNumber($this->ProcurementCurrentCost->ViewValue, 2, -2, -2, -2);
			$this->ProcurementCurrentCost->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->ProcurementCurrentCost->CellCssStyle .= "text-align: right;";
			$this->ProcurementCurrentCost->ViewCustomAttributes = "";

			// PeriodBegin
			$this->PeriodBegin->ViewValue = $this->PeriodBegin->CurrentValue;
			$this->PeriodBegin->ViewValue = FormatDateTime($this->PeriodBegin->ViewValue, 7);
			$this->PeriodBegin->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->PeriodBegin->ViewCustomAttributes = "";

			// PeriodEnd
			$this->PeriodEnd->ViewValue = $this->PeriodEnd->CurrentValue;
			$this->PeriodEnd->ViewValue = FormatDateTime($this->PeriodEnd->ViewValue, 7);
			$this->PeriodEnd->CellCssClass = ($this->RecordCount % 2 != 1 ? "ew-table-alt-row" : "ew-table-row");
			$this->PeriodEnd->ViewCustomAttributes = "";

			// property_id
			$this->property_id->LinkCustomAttributes = "";
			$this->property_id->HrefValue = "";
			$this->property_id->TooltipValue = "";

			// group_id
			$this->group_id->LinkCustomAttributes = "";
			$this->group_id->HrefValue = "";
			$this->group_id->TooltipValue = "";

			// type_id
			$this->type_id->LinkCustomAttributes = "";
			$this->type_id->HrefValue = "";
			$this->type_id->TooltipValue = "";

			// Code
			$this->Code->LinkCustomAttributes = "";
			$this->Code->HrefValue = "";
			$this->Code->TooltipValue = "";

			// Description
			$this->Description->LinkCustomAttributes = "";
			$this->Description->HrefValue = "";
			$this->Description->TooltipValue = "";

			// brand_id
			$this->brand_id->LinkCustomAttributes = "";
			$this->brand_id->HrefValue = "";
			$this->brand_id->TooltipValue = "";

			// signature_id
			$this->signature_id->LinkCustomAttributes = "";
			$this->signature_id->HrefValue = "";
			$this->signature_id->TooltipValue = "";

			// department_id
			$this->department_id->LinkCustomAttributes = "";
			$this->department_id->HrefValue = "";
			$this->department_id->TooltipValue = "";

			// location_id
			$this->location_id->LinkCustomAttributes = "";
			$this->location_id->HrefValue = "";
			$this->location_id->TooltipValue = "";

			// Qty
			$this->Qty->LinkCustomAttributes = "";
			$this->Qty->HrefValue = "";
			$this->Qty->TooltipValue = "";

			// Variance
			$this->Variance->LinkCustomAttributes = "";
			$this->Variance->HrefValue = "";
			$this->Variance->TooltipValue = "";

			// cond_id
			$this->cond_id->LinkCustomAttributes = "";
			$this->cond_id->HrefValue = "";
			$this->cond_id->TooltipValue = "";

			// Remarks
			$this->Remarks->LinkCustomAttributes = "";
			$this->Remarks->HrefValue = "";
			$this->Remarks->TooltipValue = "";

			// ProcurementDate
			$this->ProcurementDate->LinkCustomAttributes = "";
			$this->ProcurementDate->HrefValue = "";
			$this->ProcurementDate->TooltipValue = "";

			// ProcurementCurrentCost
			$this->ProcurementCurrentCost->LinkCustomAttributes = "";
			$this->ProcurementCurrentCost->HrefValue = "";
			$this->ProcurementCurrentCost->TooltipValue = "";

			// PeriodBegin
			$this->PeriodBegin->LinkCustomAttributes = "";
			$this->PeriodBegin->HrefValue = "";
			$this->PeriodBegin->TooltipValue = "";

			// PeriodEnd
			$this->PeriodEnd->LinkCustomAttributes = "";
			$this->PeriodEnd->HrefValue = "";
			$this->PeriodEnd->TooltipValue = "";
		}

		// Call Cell_Rendered event
		if ($this->RowType == ROWTYPE_TOTAL) { // Summary row

			// property_id
			$currentValue = $this->property_id->GroupViewValue;
			$viewValue = &$this->property_id->GroupViewValue;
			$viewAttrs = &$this->property_id->ViewAttrs;
			$cellAttrs = &$this->property_id->CellAttrs;
			$hrefValue = &$this->property_id->HrefValue;
			$linkAttrs = &$this->property_id->LinkAttrs;
			$this->Cell_Rendered($this->property_id, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// group_id
			$currentValue = $this->group_id->GroupViewValue;
			$viewValue = &$this->group_id->GroupViewValue;
			$viewAttrs = &$this->group_id->ViewAttrs;
			$cellAttrs = &$this->group_id->CellAttrs;
			$hrefValue = &$this->group_id->HrefValue;
			$linkAttrs = &$this->group_id->LinkAttrs;
			$this->Cell_Rendered($this->group_id, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// type_id
			$currentValue = $this->type_id->GroupViewValue;
			$viewValue = &$this->type_id->GroupViewValue;
			$viewAttrs = &$this->type_id->ViewAttrs;
			$cellAttrs = &$this->type_id->CellAttrs;
			$hrefValue = &$this->type_id->HrefValue;
			$linkAttrs = &$this->type_id->LinkAttrs;
			$this->Cell_Rendered($this->type_id, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);
		} else {

			// property_id
			$currentValue = $this->property_id->groupValue();
			$viewValue = &$this->property_id->GroupViewValue;
			$viewAttrs = &$this->property_id->ViewAttrs;
			$cellAttrs = &$this->property_id->CellAttrs;
			$hrefValue = &$this->property_id->HrefValue;
			$linkAttrs = &$this->property_id->LinkAttrs;
			$this->Cell_Rendered($this->property_id, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// group_id
			$currentValue = $this->group_id->groupValue();
			$viewValue = &$this->group_id->GroupViewValue;
			$viewAttrs = &$this->group_id->ViewAttrs;
			$cellAttrs = &$this->group_id->CellAttrs;
			$hrefValue = &$this->group_id->HrefValue;
			$linkAttrs = &$this->group_id->LinkAttrs;
			$this->Cell_Rendered($this->group_id, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// type_id
			$currentValue = $this->type_id->groupValue();
			$viewValue = &$this->type_id->GroupViewValue;
			$viewAttrs = &$this->type_id->ViewAttrs;
			$cellAttrs = &$this->type_id->CellAttrs;
			$hrefValue = &$this->type_id->HrefValue;
			$linkAttrs = &$this->type_id->LinkAttrs;
			$this->Cell_Rendered($this->type_id, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// Code
			$currentValue = $this->Code->CurrentValue;
			$viewValue = &$this->Code->ViewValue;
			$viewAttrs = &$this->Code->ViewAttrs;
			$cellAttrs = &$this->Code->CellAttrs;
			$hrefValue = &$this->Code->HrefValue;
			$linkAttrs = &$this->Code->LinkAttrs;
			$this->Cell_Rendered($this->Code, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// Description
			$currentValue = $this->Description->CurrentValue;
			$viewValue = &$this->Description->ViewValue;
			$viewAttrs = &$this->Description->ViewAttrs;
			$cellAttrs = &$this->Description->CellAttrs;
			$hrefValue = &$this->Description->HrefValue;
			$linkAttrs = &$this->Description->LinkAttrs;
			$this->Cell_Rendered($this->Description, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// brand_id
			$currentValue = $this->brand_id->CurrentValue;
			$viewValue = &$this->brand_id->ViewValue;
			$viewAttrs = &$this->brand_id->ViewAttrs;
			$cellAttrs = &$this->brand_id->CellAttrs;
			$hrefValue = &$this->brand_id->HrefValue;
			$linkAttrs = &$this->brand_id->LinkAttrs;
			$this->Cell_Rendered($this->brand_id, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// signature_id
			$currentValue = $this->signature_id->CurrentValue;
			$viewValue = &$this->signature_id->ViewValue;
			$viewAttrs = &$this->signature_id->ViewAttrs;
			$cellAttrs = &$this->signature_id->CellAttrs;
			$hrefValue = &$this->signature_id->HrefValue;
			$linkAttrs = &$this->signature_id->LinkAttrs;
			$this->Cell_Rendered($this->signature_id, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// department_id
			$currentValue = $this->department_id->CurrentValue;
			$viewValue = &$this->department_id->ViewValue;
			$viewAttrs = &$this->department_id->ViewAttrs;
			$cellAttrs = &$this->department_id->CellAttrs;
			$hrefValue = &$this->department_id->HrefValue;
			$linkAttrs = &$this->department_id->LinkAttrs;
			$this->Cell_Rendered($this->department_id, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// location_id
			$currentValue = $this->location_id->CurrentValue;
			$viewValue = &$this->location_id->ViewValue;
			$viewAttrs = &$this->location_id->ViewAttrs;
			$cellAttrs = &$this->location_id->CellAttrs;
			$hrefValue = &$this->location_id->HrefValue;
			$linkAttrs = &$this->location_id->LinkAttrs;
			$this->Cell_Rendered($this->location_id, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// Qty
			$currentValue = $this->Qty->CurrentValue;
			$viewValue = &$this->Qty->ViewValue;
			$viewAttrs = &$this->Qty->ViewAttrs;
			$cellAttrs = &$this->Qty->CellAttrs;
			$hrefValue = &$this->Qty->HrefValue;
			$linkAttrs = &$this->Qty->LinkAttrs;
			$this->Cell_Rendered($this->Qty, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// Variance
			$currentValue = $this->Variance->CurrentValue;
			$viewValue = &$this->Variance->ViewValue;
			$viewAttrs = &$this->Variance->ViewAttrs;
			$cellAttrs = &$this->Variance->CellAttrs;
			$hrefValue = &$this->Variance->HrefValue;
			$linkAttrs = &$this->Variance->LinkAttrs;
			$this->Cell_Rendered($this->Variance, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// cond_id
			$currentValue = $this->cond_id->CurrentValue;
			$viewValue = &$this->cond_id->ViewValue;
			$viewAttrs = &$this->cond_id->ViewAttrs;
			$cellAttrs = &$this->cond_id->CellAttrs;
			$hrefValue = &$this->cond_id->HrefValue;
			$linkAttrs = &$this->cond_id->LinkAttrs;
			$this->Cell_Rendered($this->cond_id, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// Remarks
			$currentValue = $this->Remarks->CurrentValue;
			$viewValue = &$this->Remarks->ViewValue;
			$viewAttrs = &$this->Remarks->ViewAttrs;
			$cellAttrs = &$this->Remarks->CellAttrs;
			$hrefValue = &$this->Remarks->HrefValue;
			$linkAttrs = &$this->Remarks->LinkAttrs;
			$this->Cell_Rendered($this->Remarks, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// ProcurementDate
			$currentValue = $this->ProcurementDate->CurrentValue;
			$viewValue = &$this->ProcurementDate->ViewValue;
			$viewAttrs = &$this->ProcurementDate->ViewAttrs;
			$cellAttrs = &$this->ProcurementDate->CellAttrs;
			$hrefValue = &$this->ProcurementDate->HrefValue;
			$linkAttrs = &$this->ProcurementDate->LinkAttrs;
			$this->Cell_Rendered($this->ProcurementDate, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// ProcurementCurrentCost
			$currentValue = $this->ProcurementCurrentCost->CurrentValue;
			$viewValue = &$this->ProcurementCurrentCost->ViewValue;
			$viewAttrs = &$this->ProcurementCurrentCost->ViewAttrs;
			$cellAttrs = &$this->ProcurementCurrentCost->CellAttrs;
			$hrefValue = &$this->ProcurementCurrentCost->HrefValue;
			$linkAttrs = &$this->ProcurementCurrentCost->LinkAttrs;
			$this->Cell_Rendered($this->ProcurementCurrentCost, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// PeriodBegin
			$currentValue = $this->PeriodBegin->CurrentValue;
			$viewValue = &$this->PeriodBegin->ViewValue;
			$viewAttrs = &$this->PeriodBegin->ViewAttrs;
			$cellAttrs = &$this->PeriodBegin->CellAttrs;
			$hrefValue = &$this->PeriodBegin->HrefValue;
			$linkAttrs = &$this->PeriodBegin->LinkAttrs;
			$this->Cell_Rendered($this->PeriodBegin, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);

			// PeriodEnd
			$currentValue = $this->PeriodEnd->CurrentValue;
			$viewValue = &$this->PeriodEnd->ViewValue;
			$viewAttrs = &$this->PeriodEnd->ViewAttrs;
			$cellAttrs = &$this->PeriodEnd->CellAttrs;
			$hrefValue = &$this->PeriodEnd->HrefValue;
			$linkAttrs = &$this->PeriodEnd->LinkAttrs;
			$this->Cell_Rendered($this->PeriodEnd, $currentValue, $viewValue, $viewAttrs, $cellAttrs, $hrefValue, $linkAttrs);
		}

		// Call Row_Rendered event
		$this->Row_Rendered();
		$this->setupFieldCount();
	}
	private $_groupCounts = [];

	// Get group count
	public function getGroupCount(...$args)
	{
		$key = "";
		foreach($args as $arg) {
			if ($key != "")
				$key .= "_";
			$key .= strval($arg);
		}
		if ($key == "") {
			return -1;
		} elseif ($key == "0") { // Number of first level groups
			$i = 1;
			while (isset($this->_groupCounts[strval($i)]))
				$i++;
			return $i - 1;
		}
		return isset($this->_groupCounts[$key]) ? $this->_groupCounts[$key] : -1;
	}

	// Set group count
	public function setGroupCount($value, ...$args)
	{
		$key = "";
		foreach($args as $arg) {
			if ($key != "")
				$key .= "_";
			$key .= strval($arg);
		}
		if ($key == "")
			return;
		$this->_groupCounts[$key] = $value;
	}

	// Setup field count
	protected function setupFieldCount()
	{
		$this->GroupColumnCount = 0;
		$this->SubGroupColumnCount = 0;
		$this->DetailColumnCount = 0;
		if ($this->property_id->Visible)
			$this->GroupColumnCount += 1;
		if ($this->group_id->Visible) {
			$this->GroupColumnCount += 1;
			$this->SubGroupColumnCount += 1;
		}
		if ($this->type_id->Visible) {
			$this->GroupColumnCount += 1;
			$this->SubGroupColumnCount += 1;
		}
		if ($this->Code->Visible)
			$this->DetailColumnCount += 1;
		if ($this->Description->Visible)
			$this->DetailColumnCount += 1;
		if ($this->brand_id->Visible)
			$this->DetailColumnCount += 1;
		if ($this->signature_id->Visible)
			$this->DetailColumnCount += 1;
		if ($this->department_id->Visible)
			$this->DetailColumnCount += 1;
		if ($this->location_id->Visible)
			$this->DetailColumnCount += 1;
		if ($this->Qty->Visible)
			$this->DetailColumnCount += 1;
		if ($this->Variance->Visible)
			$this->DetailColumnCount += 1;
		if ($this->cond_id->Visible)
			$this->DetailColumnCount += 1;
		if ($this->Remarks->Visible)
			$this->DetailColumnCount += 1;
		if ($this->ProcurementDate->Visible)
			$this->DetailColumnCount += 1;
		if ($this->ProcurementCurrentCost->Visible)
			$this->DetailColumnCount += 1;
		if ($this->PeriodBegin->Visible)
			$this->DetailColumnCount += 1;
		if ($this->PeriodEnd->Visible)
			$this->DetailColumnCount += 1;
	}

	// Get export HTML tag
	protected function getExportTag($type, $custom = FALSE)
	{
		global $Language;
		if (SameText($type, "excel")) {
			return '<a class="ew-export-link ew-excel" title="' . HtmlEncode($Language->phrase("ExportToExcel", TRUE)) . '" data-caption="' . HtmlEncode($Language->phrase("ExportToExcel", TRUE)) . '" href="#" onclick="return ew.exportWithCharts(event, \'' . $this->ExportExcelUrl . '\', \'' . session_id() . '\');">' . $Language->phrase("ExportToExcel") . '</a>';
		} elseif (SameText($type, "word")) {
			return '<a class="ew-export-link ew-word" title="' . HtmlEncode($Language->phrase("ExportToWord", TRUE)) . '" data-caption="' . HtmlEncode($Language->phrase("ExportToWord", TRUE)) . '" href="#" onclick="return ew.exportWithCharts(event, \'' . $this->ExportWordUrl . '\', \'' . session_id() . '\');">' . $Language->phrase("ExportToWord") . '</a>';
		} elseif (SameText($type, "pdf")) {
			return '<a class="ew-export-link ew-pdf" title="' . HtmlEncode($Language->phrase("ExportToPDF", TRUE)) . '" data-caption="' . HtmlEncode($Language->phrase("ExportToPDF", TRUE)) . '" href="#" onclick="return ew.exportWithCharts(event, \'' . $this->ExportPdfUrl . '\', \'' . session_id() . '\');">' . $Language->phrase("ExportToPDF") . '</a>';
		} elseif (SameText($type, "email")) {
			return '<a class="ew-export-link ew-email" title="' . HtmlEncode($Language->phrase("ExportToEmail", TRUE)) . '" data-caption="' . HtmlEncode($Language->phrase("ExportToEmail", TRUE)) . '" id="emf_r001_asset" href="#" onclick="return ew.emailDialogShow({ lnk: \'emf_r001_asset\', hdr: ew.language.phrase(\'ExportToEmailText\'), url: \'' . $this->pageUrl() . 'export=email\', exportid: \'' . session_id() . '\', el: this });">' . $Language->phrase("ExportToEmail") . '</a>';
		} elseif (SameText($type, "print")) {
			return "<a href=\"" . $this->ExportPrintUrl . "\" class=\"ew-export-link ew-print\" title=\"" . HtmlEncode($Language->phrase("PrinterFriendlyText")) . "\" data-caption=\"" . HtmlEncode($Language->phrase("PrinterFriendlyText")) . "\">" . $Language->phrase("PrinterFriendly") . "</a>";
		}
	}

	// Set up export options
	protected function setupExportOptions()
	{
		global $Language;

		// Printer friendly
		$item = &$this->ExportOptions->add("print");
		$item->Body = $this->getExportTag("print");
		$item->Visible = FALSE;

		// Export to Excel
		$item = &$this->ExportOptions->add("excel");
		$item->Body = $this->getExportTag("excel");
		$item->Visible = TRUE;

		// Export to Word
		$item = &$this->ExportOptions->add("word");
		$item->Body = $this->getExportTag("word");
		$item->Visible = FALSE;

		// Export to Pdf
		$item = &$this->ExportOptions->add("pdf");
		$item->Body = $this->getExportTag("pdf");
		$item->Visible = FALSE;

		// Export to Email
		$item = &$this->ExportOptions->add("email");
		$item->Body = $this->getExportTag("email");
		$item->Visible = FALSE;

		// Drop down button for export
		$this->ExportOptions->UseButtonGroup = TRUE;
		$this->ExportOptions->UseDropDownButton = FALSE;
		if ($this->ExportOptions->UseButtonGroup && IsMobile())
			$this->ExportOptions->UseDropDownButton = TRUE;
		$this->ExportOptions->DropDownButtonPhrase = $Language->phrase("ButtonExport");

		// Add group option item
		$item = &$this->ExportOptions->add($this->ExportOptions->GroupOptionName);
		$item->Body = "";
		$item->Visible = FALSE;

		// Hide options for export
		if ($this->isExport())
			$this->ExportOptions->hideAllOptions();
	}

	// Set up search options
	protected function setupSearchOptions()
	{
		global $Language;
		$this->SearchOptions = new ListOptions("div");
		$this->SearchOptions->TagClassName = "ew-search-option";

		// Search button
		$item = &$this->SearchOptions->add("searchtoggle");
		$searchToggleClass = ($this->SearchWhere != "") ? " active" : " active";
		$item->Body = "<a class=\"btn btn-default ew-search-toggle" . $searchToggleClass . "\" href=\"#\" role=\"button\" title=\"" . $Language->phrase("SearchPanel") . "\" data-caption=\"" . $Language->phrase("SearchPanel") . "\" data-toggle=\"button\" data-form=\"fsummary\" aria-pressed=\"" . ($searchToggleClass == " active" ? "true" : "false") . "\">" . $Language->phrase("SearchLink") . "</a>";
		$item->Visible = TRUE;

		// Show all button
		$item = &$this->SearchOptions->add("showall");
		$item->Body = "<a class=\"btn btn-default ew-show-all\" title=\"" . $Language->phrase("ShowAll") . "\" data-caption=\"" . $Language->phrase("ShowAll") . "\" href=\"" . $this->pageUrl() . "cmd=reset\">" . $Language->phrase("ShowAllBtn") . "</a>";
		$item->Visible = ($this->SearchWhere != $this->DefaultSearchWhere && $this->SearchWhere != "0=101");

		// Button group for search
		$this->SearchOptions->UseDropDownButton = FALSE;
		$this->SearchOptions->UseButtonGroup = TRUE;
		$this->SearchOptions->DropDownButtonPhrase = $Language->phrase("ButtonSearch");

		// Add group option item
		$item = &$this->SearchOptions->add($this->SearchOptions->GroupOptionName);
		$item->Body = "";
		$item->Visible = FALSE;

		// Hide search options
		if ($this->isExport() || $this->CurrentAction)
			$this->SearchOptions->hideAllOptions();
		global $Security;
		if (!$Security->canSearch()) {
			$this->SearchOptions->hideAllOptions();
			$this->FilterOptions->hideAllOptions();
		}
	}

	// Set up Breadcrumb
	protected function setupBreadcrumb()
	{
		global $Breadcrumb, $Language;
		$Breadcrumb = new Breadcrumb();
		$url = substr(CurrentUrl(), strrpos(CurrentUrl(), "/")+1);
		$url = preg_replace('/\?cmd=reset(all){0,1}$/i', '', $url); // Remove cmd=reset / cmd=resetall
		$Breadcrumb->add("summary", $this->TableVar, $url, "", $this->TableVar, TRUE);
	}

	// Setup lookup options
	public function setupLookupOptions($fld)
	{
		if ($fld->Lookup !== NULL && $fld->Lookup->Options === NULL) {

			// Get default connection and filter
			$conn = $this->getConnection();
			$lookupFilter = "";

			// No need to check any more
			$fld->Lookup->Options = [];

			// Set up lookup SQL and connection
			switch ($fld->FieldVar) {
				case "x_property_id":
					break;
				case "x_group_id":
					break;
				case "x_brand_id":
					break;
				case "x_type_id":
					break;
				case "x_signature_id":
					break;
				case "x_department_id":
					break;
				case "x_location_id":
					break;
				case "x_cond_id":
					break;
				default:
					$lookupFilter = "";
					break;
			}

			// Always call to Lookup->getSql so that user can setup Lookup->Options in Lookup_Selecting server event
			$sql = $fld->Lookup->getSql(FALSE, "", $lookupFilter, $this);

			// Set up lookup cache
			if ($fld->UseLookupCache && $sql != "" && count($fld->Lookup->Options) == 0) {
				$totalCnt = $this->getRecordCount($sql, $conn);
				if ($totalCnt > $fld->LookupCacheCount) // Total count > cache count, do not cache
					return;
				$rs = $conn->execute($sql);
				$ar = [];
				while ($rs && !$rs->EOF) {
					$row = &$rs->fields;

					// Format the field values
					switch ($fld->FieldVar) {
						case "x_property_id":
							break;
						case "x_group_id":
							break;
						case "x_brand_id":
							break;
						case "x_type_id":
							break;
						case "x_signature_id":
							break;
						case "x_department_id":
							break;
						case "x_location_id":
							break;
						case "x_cond_id":
							break;
					}
					$ar[strval($row[0])] = $row;
					$rs->moveNext();
				}
				if ($rs)
					$rs->close();
				$fld->Lookup->Options = $ar;
			}
		}
	}

	// Set up other options
	protected function setupOtherOptions()
	{
		global $Language, $Security;

		// Filter button
		$item = &$this->FilterOptions->add("savecurrentfilter");
		$item->Body = "<a class=\"ew-save-filter\" data-form=\"fsummary\" href=\"#\" onclick=\"return false;\">" . $Language->phrase("SaveCurrentFilter") . "</a>";
		$item->Visible = TRUE;
		$item = &$this->FilterOptions->add("deletefilter");
		$item->Body = "<a class=\"ew-delete-filter\" data-form=\"fsummary\" href=\"#\" onclick=\"return false;\">" . $Language->phrase("DeleteFilter") . "</a>";
		$item->Visible = TRUE;
		$this->FilterOptions->UseDropDownButton = TRUE;
		$this->FilterOptions->UseButtonGroup = !$this->FilterOptions->UseDropDownButton;
		$this->FilterOptions->DropDownButtonPhrase = $Language->phrase("Filters");

		// Add group option item
		$item = &$this->FilterOptions->add($this->FilterOptions->GroupOptionName);
		$item->Body = "";
		$item->Visible = FALSE;
	}

	// Export report to Excel
	public function exportReportExcel($html)
	{
		global $ExportFileName;
		$charset = Config("PROJECT_CHARSET");
		AddHeader("Content-Type", "application/vnd.ms-excel" . ($charset ? "; charset=" . $charset : ""));
		AddHeader("Content-Disposition", "attachment; filename=" . $ExportFileName . ".xls");
		AddHeader("Set-Cookie", "fileDownload=true; path=/");
		Write($html);
	}

// Export PDF
	public function exportReportPdf($html)
	{
		global $ExportFileName;
		@ini_set("memory_limit", Config("PDF_MEMORY_LIMIT"));
		set_time_limit(Config("PDF_TIME_LIMIT"));
		$html = CheckHtml($html);
		if (Config("DEBUG")) // Add debug message
			$html = str_replace("</body>", GetDebugMessage() . "</body>", $html);
		$dompdf = new \Dompdf\Dompdf(["pdf_backend" => "CPDF"]);
		$doc = new \DOMDocument("1.0", "utf-8");
		@$doc->loadHTML('<?xml encoding="uft-8">' . ConvertToUtf8($html)); // Convert to utf-8
		$spans = $doc->getElementsByTagName("span");
		foreach ($spans as $span) {
			$classNames = $span->getAttribute("class");
			if ($classNames == "ew-filter-caption") // Insert colon
				$span->parentNode->insertBefore($doc->createElement("span", ":&nbsp;"), $span->nextSibling);
			elseif (preg_match('/\bicon\-\w+\b/', $classNames)) // Remove icons
				$span->parentNode->removeChild($span);
		}
		$images = $doc->getElementsByTagName("img");
		$pageSize = $this->ExportPageSize;
		$pageOrientation = $this->ExportPageOrientation;
		$portrait = SameText($pageOrientation, "portrait");
		foreach ($images as $image) {
			$imagefn = $image->getAttribute("src");
			if (file_exists($imagefn)) {
				$imagefn = realpath($imagefn);
				$size = getimagesize($imagefn); // Get image size
				if ($size[0] != 0) {
					if (SameText($pageSize, "letter")) { // Letter paper (8.5 in. by 11 in.)
						$w = $portrait ? 216 : 279;
					} elseif (SameText($pageSize, "legal")) { // Legal paper (8.5 in. by 14 in.)
						$w = $portrait ? 216 : 356;
					} else {
						$w = $portrait ? 210 : 297; // A4 paper (210 mm by 297 mm)
					}
					$w = min($size[0], ($w - 20 * 2) / 25.4 * 72 * Config("PDF_IMAGE_SCALE_FACTOR")); // Resize image, adjust the scale factor if necessary
					$h = $w / $size[0] * $size[1];
					$image->setAttribute("width", $w);
					$image->setAttribute("height", $h);
				}
			}
		}
		$html = $doc->saveHTML();
		$html = ConvertFromUtf8($html);
		$dompdf->load_html($html);
		$dompdf->set_paper($pageSize, $pageOrientation);
		$dompdf->render();
		header('Set-Cookie: fileDownload=true; path=/');
		$exportFile = EndsText(".pdf", $ExportFileName) ? $ExportFileName : $ExportFileName . ".pdf";
		$dompdf->stream($exportFile, ["Attachment" => 1]); // 0 to open in browser, 1 to download
		DeleteTempImages();
		exit();
	}

	// Set up starting group
	protected function setupStartGroup()
	{

		// Exit if no groups
		if ($this->DisplayGroups == 0)
			return;
		$startGrp = Param(Config("TABLE_START_GROUP"), "");
		$pageNo = Param("pageno", "");

		// Check for a 'start' parameter
		if ($startGrp != "") {
			$this->StartGroup = $startGrp;
			$this->setStartGroup($this->StartGroup);
		} elseif ($pageNo != "") {
			if (is_numeric($pageNo)) {
				$this->StartGroup = ($pageNo - 1) * $this->DisplayGroups + 1;
				if ($this->StartGroup <= 0) {
					$this->StartGroup = 1;
				} elseif ($this->StartGroup >= intval(($this->TotalGroups - 1) / $this->DisplayGroups) * $this->DisplayGroups + 1) {
					$this->StartGroup = intval(($this->TotalGroups - 1) / $this->DisplayGroups) * $this->DisplayGroups + 1;
				}
				$this->setStartGroup($this->StartGroup);
			} else {
				$this->StartGroup = $this->getStartGroup();
			}
		} else {
			$this->StartGroup = $this->getStartGroup();
		}

		// Check if correct start group counter
		if (!is_numeric($this->StartGroup) || $this->StartGroup == "") { // Avoid invalid start group counter
			$this->StartGroup = 1; // Reset start group counter
			$this->setStartGroup($this->StartGroup);
		} elseif (intval($this->StartGroup) > intval($this->TotalGroups)) { // Avoid starting group > total groups
			$this->StartGroup = intval(($this->TotalGroups - 1) / $this->DisplayGroups) * $this->DisplayGroups + 1; // Point to last page first group
			$this->setStartGroup($this->StartGroup);
		} elseif (($this->StartGroup-1) % $this->DisplayGroups != 0) {
			$this->StartGroup = intval(($this->StartGroup - 1) / $this->DisplayGroups) * $this->DisplayGroups + 1; // Point to page boundary
			$this->setStartGroup($this->StartGroup);
		}
	}

	// Reset pager
	protected function resetPager()
	{

		// Reset start position (reset command)
		$this->StartGroup = 1;
		$this->setStartGroup($this->StartGroup);
	}

	// Set up number of groups displayed per page
	protected function setupDisplayGroups()
	{
		if (Param(Config("TABLE_GROUP_PER_PAGE")) !== NULL) {
			$wrk = Param(Config("TABLE_GROUP_PER_PAGE"));
			if (is_numeric($wrk)) {
				$this->DisplayGroups = intval($wrk);
			} else {
				if (strtoupper($wrk) == "ALL") { // Display all groups
					$this->DisplayGroups = -1;
				} else {
					$this->DisplayGroups = 5; // Non-numeric, load default
				}
			}
			$this->setGroupPerPage($this->DisplayGroups); // Save to session

			// Reset start position (reset command)
			$this->StartGroup = 1;
			$this->setStartGroup($this->StartGroup);
		} else {
			if ($this->getGroupPerPage() != "") {
				$this->DisplayGroups = $this->getGroupPerPage(); // Restore from session
			} else {
				$this->DisplayGroups = 5; // Load default
			}
		}
	}

	// Get sort parameters based on sort links clicked
	protected function getSort()
	{
		if ($this->DrillDown)
			return "";
		$resetSort = Param("cmd") === "resetsort";
		$orderBy = Param("order", "");
		$orderType = Param("ordertype", "");

		// Check for Ctrl pressed
		$ctrl = (Param("ctrl") !== NULL);

		// Check for a resetsort command
		if ($resetSort) {
			$this->setOrderBy("");
			$this->setStartGroup(1);
			$this->property_id->setSort("");
			$this->group_id->setSort("");
			$this->Code->setSort("");
			$this->Description->setSort("");
			$this->brand_id->setSort("");
			$this->type_id->setSort("");
			$this->signature_id->setSort("");
			$this->department_id->setSort("");
			$this->location_id->setSort("");
			$this->Qty->setSort("");
			$this->Variance->setSort("");
			$this->cond_id->setSort("");
			$this->Remarks->setSort("");
			$this->ProcurementDate->setSort("");
			$this->ProcurementCurrentCost->setSort("");
			$this->PeriodBegin->setSort("");
			$this->PeriodEnd->setSort("");

		// Check for an Order parameter
		} elseif ($orderBy != "") {
			$this->CurrentOrder = $orderBy;
			$this->CurrentOrderType = $orderType;
			$this->updateSort($this->property_id, $ctrl); // property_id
			$this->updateSort($this->group_id, $ctrl); // group_id
			$this->updateSort($this->Code, $ctrl); // Code
			$this->updateSort($this->Description, $ctrl); // Description
			$this->updateSort($this->brand_id, $ctrl); // brand_id
			$this->updateSort($this->type_id, $ctrl); // type_id
			$this->updateSort($this->signature_id, $ctrl); // signature_id
			$this->updateSort($this->department_id, $ctrl); // department_id
			$this->updateSort($this->location_id, $ctrl); // location_id
			$this->updateSort($this->Qty, $ctrl); // Qty
			$this->updateSort($this->Variance, $ctrl); // Variance
			$this->updateSort($this->cond_id, $ctrl); // cond_id
			$this->updateSort($this->Remarks, $ctrl); // Remarks
			$this->updateSort($this->ProcurementDate, $ctrl); // ProcurementDate
			$this->updateSort($this->ProcurementCurrentCost, $ctrl); // ProcurementCurrentCost
			$this->updateSort($this->PeriodBegin, $ctrl); // PeriodBegin
			$this->updateSort($this->PeriodEnd, $ctrl); // PeriodEnd
			$sortSql = $this->sortSql();
			$this->setOrderBy($sortSql);
			$this->setStartGroup(1);
		}
		return $this->getOrderBy();
	}

	// Return extended filter
	protected function getExtendedFilter()
	{
		global $FormError;
		$filter = "";
		if ($this->DrillDown)
			return "";
		$restoreSession = FALSE;
		$restoreDefault = FALSE;

		// Reset search command
		if (Get("cmd", "") == "reset") {

			// Set default values
			$this->property_id->AdvancedSearch->unsetSession();
			$this->group_id->AdvancedSearch->unsetSession();
			$this->Code->AdvancedSearch->unsetSession();
			$this->Description->AdvancedSearch->unsetSession();
			$this->brand_id->AdvancedSearch->unsetSession();
			$this->type_id->AdvancedSearch->unsetSession();
			$this->signature_id->AdvancedSearch->unsetSession();
			$this->department_id->AdvancedSearch->unsetSession();
			$this->location_id->AdvancedSearch->unsetSession();
			$this->cond_id->AdvancedSearch->unsetSession();
			$this->Remarks->AdvancedSearch->unsetSession();
			$this->ProcurementDate->AdvancedSearch->unsetSession();
			$restoreDefault = TRUE;
		} else {
			$restoreSession = !$this->SearchCommand;

			// Field property_id
			if ($this->property_id->AdvancedSearch->get()) {
				if (FieldDataType($this->property_id->Type) == DATATYPE_DATE) // Format default date format
					$this->property_id->AdvancedSearch->SearchValue = FormatDateTime($this->property_id->AdvancedSearch->SearchValue, 0);
			}

			// Field group_id
			if ($this->group_id->AdvancedSearch->get()) {
				if (FieldDataType($this->group_id->Type) == DATATYPE_DATE) // Format default date format
					$this->group_id->AdvancedSearch->SearchValue = FormatDateTime($this->group_id->AdvancedSearch->SearchValue, 0);
			}

			// Field Code
			if ($this->Code->AdvancedSearch->get()) {
			}

			// Field Description
			if ($this->Description->AdvancedSearch->get()) {
			}

			// Field brand_id
			if ($this->brand_id->AdvancedSearch->get()) {
				if (FieldDataType($this->brand_id->Type) == DATATYPE_DATE) // Format default date format
					$this->brand_id->AdvancedSearch->SearchValue = FormatDateTime($this->brand_id->AdvancedSearch->SearchValue, 0);
			}

			// Field type_id
			if ($this->type_id->AdvancedSearch->get()) {
				if (FieldDataType($this->type_id->Type) == DATATYPE_DATE) // Format default date format
					$this->type_id->AdvancedSearch->SearchValue = FormatDateTime($this->type_id->AdvancedSearch->SearchValue, 0);
			}

			// Field signature_id
			if ($this->signature_id->AdvancedSearch->get()) {
				if (FieldDataType($this->signature_id->Type) == DATATYPE_DATE) // Format default date format
					$this->signature_id->AdvancedSearch->SearchValue = FormatDateTime($this->signature_id->AdvancedSearch->SearchValue, 0);
			}

			// Field department_id
			if ($this->department_id->AdvancedSearch->get()) {
				if (FieldDataType($this->department_id->Type) == DATATYPE_DATE) // Format default date format
					$this->department_id->AdvancedSearch->SearchValue = FormatDateTime($this->department_id->AdvancedSearch->SearchValue, 0);
			}

			// Field location_id
			if ($this->location_id->AdvancedSearch->get()) {
				if (FieldDataType($this->location_id->Type) == DATATYPE_DATE) // Format default date format
					$this->location_id->AdvancedSearch->SearchValue = FormatDateTime($this->location_id->AdvancedSearch->SearchValue, 0);
			}

			// Field cond_id
			if ($this->cond_id->AdvancedSearch->get()) {
				if (FieldDataType($this->cond_id->Type) == DATATYPE_DATE) // Format default date format
					$this->cond_id->AdvancedSearch->SearchValue = FormatDateTime($this->cond_id->AdvancedSearch->SearchValue, 0);
			}

			// Field Remarks
			if ($this->Remarks->AdvancedSearch->get()) {
			}

			// Field ProcurementDate
			if ($this->ProcurementDate->AdvancedSearch->get()) {
			}
			if (!$this->validateForm()) {
				$this->setFailureMessage($FormError);
				return $filter;
			}
		}

		// Restore session
		if ($restoreSession) {
			$restoreDefault = TRUE;
			if ($this->property_id->AdvancedSearch->issetSession()) { // Field property_id
				$this->property_id->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->group_id->AdvancedSearch->issetSession()) { // Field group_id
				$this->group_id->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->Code->AdvancedSearch->issetSession()) { // Field Code
				$this->Code->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->Description->AdvancedSearch->issetSession()) { // Field Description
				$this->Description->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->brand_id->AdvancedSearch->issetSession()) { // Field brand_id
				$this->brand_id->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->type_id->AdvancedSearch->issetSession()) { // Field type_id
				$this->type_id->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->signature_id->AdvancedSearch->issetSession()) { // Field signature_id
				$this->signature_id->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->department_id->AdvancedSearch->issetSession()) { // Field department_id
				$this->department_id->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->location_id->AdvancedSearch->issetSession()) { // Field location_id
				$this->location_id->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->cond_id->AdvancedSearch->issetSession()) { // Field cond_id
				$this->cond_id->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->Remarks->AdvancedSearch->issetSession()) { // Field Remarks
				$this->Remarks->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
			if ($this->ProcurementDate->AdvancedSearch->issetSession()) { // Field ProcurementDate
				$this->ProcurementDate->AdvancedSearch->load();
				$restoreDefault = FALSE;
			}
		}

		// Restore default
		if ($restoreDefault)
			$this->loadDefaultFilters();

		// Call page filter validated event
		$this->Page_FilterValidated();

		// Build SQL and save to session
		$this->buildExtendedFilter($this->property_id, $filter, FALSE, TRUE); // Field property_id
		$this->property_id->AdvancedSearch->save();
		$this->buildExtendedFilter($this->group_id, $filter, FALSE, TRUE); // Field group_id
		$this->group_id->AdvancedSearch->save();
		$this->buildExtendedFilter($this->Code, $filter, FALSE, TRUE); // Field Code
		$this->Code->AdvancedSearch->save();
		$this->buildExtendedFilter($this->Description, $filter, FALSE, TRUE); // Field Description
		$this->Description->AdvancedSearch->save();
		$this->buildExtendedFilter($this->brand_id, $filter, FALSE, TRUE); // Field brand_id
		$this->brand_id->AdvancedSearch->save();
		$this->buildExtendedFilter($this->type_id, $filter, FALSE, TRUE); // Field type_id
		$this->type_id->AdvancedSearch->save();
		$this->buildExtendedFilter($this->signature_id, $filter, FALSE, TRUE); // Field signature_id
		$this->signature_id->AdvancedSearch->save();
		$this->buildExtendedFilter($this->department_id, $filter, FALSE, TRUE); // Field department_id
		$this->department_id->AdvancedSearch->save();
		$this->buildExtendedFilter($this->location_id, $filter, FALSE, TRUE); // Field location_id
		$this->location_id->AdvancedSearch->save();
		$this->buildExtendedFilter($this->cond_id, $filter, FALSE, TRUE); // Field cond_id
		$this->cond_id->AdvancedSearch->save();
		$this->buildExtendedFilter($this->Remarks, $filter, FALSE, TRUE); // Field Remarks
		$this->Remarks->AdvancedSearch->save();
		$this->buildExtendedFilter($this->ProcurementDate, $filter, FALSE, TRUE); // Field ProcurementDate
		$this->ProcurementDate->AdvancedSearch->save();
		return $filter;
	}

	// Build dropdown filter
	protected function buildDropDownFilter(&$fld, &$filterClause, $fldOpr, $default = FALSE, $saveFilter = FALSE)
	{
		$fldVal = ($default) ? $fld->AdvancedSearch->SearchValueDefault : $fld->AdvancedSearch->SearchValue;
		$sql = "";
		if (is_array($fldVal)) {
			foreach ($fldVal as $val) {
				$wrk = $this->getDropDownFilter($fld, $val, $fldOpr);

				// Call Page Filtering event
				if (!StartsString("@@", $val))
					$this->Page_Filtering($fld, $wrk, "dropdown", $fldOpr, $val);
				if ($wrk != "") {
					if ($sql != "")
						$sql .= " OR " . $wrk;
					else
						$sql = $wrk;
				}
			}
		} else {
			$sql = $this->getDropDownFilter($fld, $fldVal, $fldOpr);

			// Call Page Filtering event
			if (!StartsString("@@", $fldVal))
				$this->Page_Filtering($fld, $sql, "dropdown", $fldOpr, $fldVal);
		}
		if ($sql != "") {
			AddFilter($filterClause, $sql);
			if ($saveFilter) $fld->CurrentFilter = $sql;
		}
	}

	// Get dropdown filter
	protected function getDropDownFilter(&$fld, $fldVal, $fldOpr)
	{
		$fldName = $fld->Name;
		$fldExpression = $fld->Expression;
		$fldDataType = $fld->DataType;
		$isMultiple = $fld->HtmlTag == "CHECKBOX" || $fld->HtmlTag == "SELECT" && $fld->SelectMultiple;
		$fldVal = strval($fldVal);
		if ($fldOpr == "") $fldOpr = "=";
		$wrk = "";
		if (SameString($fldVal, Config("NULL_VALUE"))) {
			$wrk = $fldExpression . " IS NULL";
		} elseif (SameString($fldVal, Config("NOT_NULL_VALUE"))) {
			$wrk = $fldExpression . " IS NOT NULL";
		} elseif (SameString($fldVal, EMPTY_VALUE)) {
			$wrk = $fldExpression . " = ''";
		} elseif (SameString($fldVal, ALL_VALUE)) {
			$wrk = "1 = 1";
		} else {
			if ($fld->GroupSql != "") // Use grouping SQL for search if exists
				$fldExpression = str_replace("%s", $fldExpression, $fld->GroupSql);
			if (StartsString("@@", $fldVal)) {
				$wrk = $this->getCustomFilter($fld, $fldVal, $this->Dbid);
			} elseif ($isMultiple && IsMultiSearchOperator($fldOpr) && trim($fldVal) != "" && $fldVal != INIT_VALUE && ($fldDataType == DATATYPE_STRING || $fldDataType == DATATYPE_MEMO)) {
				$wrk = GetMultiSearchSql($fld, $fldOpr, trim($fldVal), $this->Dbid);
			} else {
				if ($fldVal != "" && $fldVal != INIT_VALUE) {
					if ($fldDataType == DATATYPE_DATE && $fld->GroupSql == "" && $fldOpr != "") {
						$wrk = GetDateFilterSql($fldExpression, $fldOpr, $fldVal, $fldDataType, $this->Dbid);
					} else {
						$wrk = GetFilterSql($fldOpr, $fldVal, $fldDataType, $this->Dbid);
						if ($wrk != "") $wrk = $fldExpression . $wrk;
					}
				}
			}
		}
		return $wrk;
	}

	// Get custom filter
	protected function getCustomFilter(&$fld, $fldVal, $dbid = 0)
	{
		$wrk = "";
		if (is_array($fld->AdvancedFilters)) {
			foreach ($fld->AdvancedFilters as $filter) {
				if ($filter->ID == $fldVal && $filter->Enabled) {
					$fldExpr = $fld->Expression;
					$fn = $filter->FunctionName;
					$wrkid = StartsString("@@", $filter->ID) ? substr($filter->ID, 2) : $filter->ID;
					if ($fn != "") {
						$fn = PROJECT_NAMESPACE . $fn;
						$wrk = $fn($fldExpr, $dbid);
					} else
						$wrk = "";
					$this->Page_Filtering($fld, $wrk, "custom", $wrkid);
					break;
				}
			}
		}
		return $wrk;
	}

	// Build extended filter
	protected function buildExtendedFilter(&$fld, &$filterClause, $default = FALSE, $saveFilter = FALSE)
	{
		$wrk = GetExtendedFilter($fld, $default, $this->Dbid);
		if (!$default)
			$this->Page_Filtering($fld, $wrk, "extended", $fld->AdvancedSearch->SearchOperator, $fld->AdvancedSearch->SearchValue, $fld->AdvancedSearch->SearchCondition, $fld->AdvancedSearch->SearchOperator2, $fld->AdvancedSearch->SearchValue2);
		if ($wrk != "") {
			AddFilter($filterClause, $wrk);
			if ($saveFilter) $fld->CurrentFilter = $wrk;
		}
	}

	// Get drop down value from querystring
	protected function getDropDownValue(&$fld)
	{
		$parm = $fld->Param;
		if (IsPost())
			return FALSE; // Skip post back
		$opr = Get("z_$parm");
		if ($opr !== NULL)
			$fld->AdvancedSearch->SearchOperator = $opr;
		$val = Get("x_$parm");
		if ($val !== NULL) {
			if (is_array($val))
				$val = implode(Config("MULTIPLE_OPTION_SEPARATOR"), $val); 
			$fld->AdvancedSearch->setSearchValue($val);
			return TRUE;
		}
		return FALSE;
	}

	// Dropdown filter exist
	protected function dropDownFilterExist(&$fld, $fldOpr)
	{
		$wrk = "";
		$this->buildDropDownFilter($fld, $wrk, $fldOpr);
		return ($wrk != "");
	}

	// Extended filter exist
	protected function extendedFilterExist(&$fld)
	{
		$extWrk = "";
		$this->buildExtendedFilter($fld, $extWrk);
		return ($extWrk != "");
	}

	// Validate form
	protected function validateForm()
	{
		global $Language, $FormError;

		// Initialize form error message
		$FormError = "";

		// Check if validation required
		if (!Config("SERVER_VALIDATE"))
			return ($FormError == "");
		if (!CheckEuroDate($this->PeriodEnd->FormValue)) {
			AddMessage($FormError, $this->PeriodEnd->errorMessage());
		}
		if (!CheckEuroDate($this->PeriodEnd->FormValue)) {
			AddMessage($FormError, $this->PeriodEnd->errorMessage());
		}
		if (!CheckEuroDate($this->PeriodEnd->FormValue)) {
			AddMessage($FormError, $this->PeriodEnd->errorMessage());
		}
		if (!CheckEuroDate($this->PeriodEnd->FormValue)) {
			AddMessage($FormError, $this->PeriodEnd->errorMessage());
		}
		if (!CheckEuroDate($this->PeriodEnd->FormValue)) {
			AddMessage($FormError, $this->PeriodEnd->errorMessage());
		}
		if (!CheckEuroDate($this->PeriodEnd->FormValue)) {
			AddMessage($FormError, $this->PeriodEnd->errorMessage());
		}
		if (!CheckEuroDate($this->PeriodEnd->FormValue)) {
			AddMessage($FormError, $this->PeriodEnd->errorMessage());
		}
		if (!CheckEuroDate($this->PeriodEnd->FormValue)) {
			AddMessage($FormError, $this->PeriodEnd->errorMessage());
		}
		if (!CheckEuroDate($this->PeriodEnd->FormValue)) {
			AddMessage($FormError, $this->PeriodEnd->errorMessage());
		}
		if (!CheckEuroDate($this->PeriodEnd->FormValue)) {
			AddMessage($FormError, $this->PeriodEnd->errorMessage());
		}
		if (!CheckEuroDate($this->PeriodEnd->FormValue)) {
			AddMessage($FormError, $this->PeriodEnd->errorMessage());
		}
		if (!CheckEuroDate($this->PeriodEnd->FormValue)) {
			AddMessage($FormError, $this->PeriodEnd->errorMessage());
		}

		// Return validate result
		$validateForm = ($FormError == "");

		// Call Form_CustomValidate event
		$formCustomError = "";
		$validateForm = $validateForm && $this->Form_CustomValidate($formCustomError);
		if ($formCustomError != "") {
			$FormError .= ($FormError != "") ? "<p>&nbsp;</p>" : "";
			$FormError .= $formCustomError;
		}
		return $validateForm;
	}

	// Load default value for filters
	protected function loadDefaultFilters()
	{

		/**
		* Set up default values for extended filters
		*/
		// Field property_id

		$this->property_id->AdvancedSearch->loadDefault();

		// Field group_id
		$this->group_id->AdvancedSearch->loadDefault();

		// Field Code
		$this->Code->AdvancedSearch->loadDefault();

		// Field Description
		$this->Description->AdvancedSearch->loadDefault();

		// Field brand_id
		$this->brand_id->AdvancedSearch->loadDefault();

		// Field type_id
		$this->type_id->AdvancedSearch->loadDefault();

		// Field signature_id
		$this->signature_id->AdvancedSearch->loadDefault();

		// Field department_id
		$this->department_id->AdvancedSearch->loadDefault();

		// Field location_id
		$this->location_id->AdvancedSearch->loadDefault();

		// Field cond_id
		$this->cond_id->AdvancedSearch->loadDefault();

		// Field Remarks
		$this->Remarks->AdvancedSearch->loadDefault();

		// Field ProcurementDate
		$this->ProcurementDate->AdvancedSearch->loadDefault();
	}

	// Show list of filters
	public function showFilterList()
	{
		global $Language;

		// Initialize
		$filterList = "";
		$captionClass = $this->isExport("email") ? "ew-filter-caption-email" : "ew-filter-caption";
		$captionSuffix = $this->isExport("email") ? ": " : "";

		// Field property_id
		$extWrk = "";
		$this->buildExtendedFilter($this->property_id, $extWrk);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->property_id->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field group_id
		$extWrk = "";
		$this->buildExtendedFilter($this->group_id, $extWrk);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->group_id->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field Code
		$extWrk = "";
		$this->buildExtendedFilter($this->Code, $extWrk);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->Code->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field Description
		$extWrk = "";
		$this->buildExtendedFilter($this->Description, $extWrk);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->Description->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field brand_id
		$extWrk = "";
		$this->buildExtendedFilter($this->brand_id, $extWrk);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->brand_id->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field type_id
		$extWrk = "";
		$this->buildExtendedFilter($this->type_id, $extWrk);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->type_id->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field signature_id
		$extWrk = "";
		$this->buildExtendedFilter($this->signature_id, $extWrk);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->signature_id->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field department_id
		$extWrk = "";
		$this->buildExtendedFilter($this->department_id, $extWrk);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->department_id->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field location_id
		$extWrk = "";
		$this->buildExtendedFilter($this->location_id, $extWrk);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->location_id->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field cond_id
		$extWrk = "";
		$this->buildExtendedFilter($this->cond_id, $extWrk);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->cond_id->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field Remarks
		$extWrk = "";
		$this->buildExtendedFilter($this->Remarks, $extWrk);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->Remarks->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Field ProcurementDate
		$extWrk = "";
		$this->buildExtendedFilter($this->ProcurementDate, $extWrk);
		$filter = "";
		if ($extWrk != "")
			$filter .= "<span class=\"ew-filter-value\">$extWrk</span>";
		if ($filter != "")
			$filterList .= "<div><span class=\"" . $captionClass . "\">" . $this->ProcurementDate->caption() . "</span>" . $captionSuffix . $filter . "</div>";

		// Show Filters
		if ($filterList != "") {
			$message = "<div id=\"ew-filter-list\" class=\"alert alert-info d-table\"><div id=\"ew-current-filters\">" .
				$Language->phrase("CurrentFilters") . "</div>" . $filterList . "</div>";
			$this->Message_Showing($message, "");
			Write($message);
		}
	}

	// Get list of filters
	public function getFilterList()
	{
		global $UserProfile;

		// Initialize
		$filterList = "";
		$savedFilterList = "";

		// Field property_id
		$wrk = "";
		if ($this->property_id->AdvancedSearch->SearchValue != "" || $this->property_id->AdvancedSearch->SearchValue2 != "") {
			$wrk = "\"x_property_id\":\"" . JsEncode($this->property_id->AdvancedSearch->SearchValue) . "\"," .
				"\"z_property_id\":\"" . JsEncode($this->property_id->AdvancedSearch->SearchOperator) . "\"," .
				"\"v_property_id\":\"" . JsEncode($this->property_id->AdvancedSearch->SearchCondition) . "\"," .
				"\"y_property_id\":\"" . JsEncode($this->property_id->AdvancedSearch->SearchValue2) . "\"," .
				"\"w_property_id\":\"" . JsEncode($this->property_id->AdvancedSearch->SearchOperator2) . "\"";
		}
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field group_id
		$wrk = "";
		if ($this->group_id->AdvancedSearch->SearchValue != "" || $this->group_id->AdvancedSearch->SearchValue2 != "") {
			$wrk = "\"x_group_id\":\"" . JsEncode($this->group_id->AdvancedSearch->SearchValue) . "\"," .
				"\"z_group_id\":\"" . JsEncode($this->group_id->AdvancedSearch->SearchOperator) . "\"," .
				"\"v_group_id\":\"" . JsEncode($this->group_id->AdvancedSearch->SearchCondition) . "\"," .
				"\"y_group_id\":\"" . JsEncode($this->group_id->AdvancedSearch->SearchValue2) . "\"," .
				"\"w_group_id\":\"" . JsEncode($this->group_id->AdvancedSearch->SearchOperator2) . "\"";
		}
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field Code
		$wrk = "";
		if ($this->Code->AdvancedSearch->SearchValue != "" || $this->Code->AdvancedSearch->SearchValue2 != "") {
			$wrk = "\"x_Code\":\"" . JsEncode($this->Code->AdvancedSearch->SearchValue) . "\"," .
				"\"z_Code\":\"" . JsEncode($this->Code->AdvancedSearch->SearchOperator) . "\"," .
				"\"v_Code\":\"" . JsEncode($this->Code->AdvancedSearch->SearchCondition) . "\"," .
				"\"y_Code\":\"" . JsEncode($this->Code->AdvancedSearch->SearchValue2) . "\"," .
				"\"w_Code\":\"" . JsEncode($this->Code->AdvancedSearch->SearchOperator2) . "\"";
		}
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field Description
		$wrk = "";
		if ($this->Description->AdvancedSearch->SearchValue != "" || $this->Description->AdvancedSearch->SearchValue2 != "") {
			$wrk = "\"x_Description\":\"" . JsEncode($this->Description->AdvancedSearch->SearchValue) . "\"," .
				"\"z_Description\":\"" . JsEncode($this->Description->AdvancedSearch->SearchOperator) . "\"," .
				"\"v_Description\":\"" . JsEncode($this->Description->AdvancedSearch->SearchCondition) . "\"," .
				"\"y_Description\":\"" . JsEncode($this->Description->AdvancedSearch->SearchValue2) . "\"," .
				"\"w_Description\":\"" . JsEncode($this->Description->AdvancedSearch->SearchOperator2) . "\"";
		}
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field brand_id
		$wrk = "";
		if ($this->brand_id->AdvancedSearch->SearchValue != "" || $this->brand_id->AdvancedSearch->SearchValue2 != "") {
			$wrk = "\"x_brand_id\":\"" . JsEncode($this->brand_id->AdvancedSearch->SearchValue) . "\"," .
				"\"z_brand_id\":\"" . JsEncode($this->brand_id->AdvancedSearch->SearchOperator) . "\"," .
				"\"v_brand_id\":\"" . JsEncode($this->brand_id->AdvancedSearch->SearchCondition) . "\"," .
				"\"y_brand_id\":\"" . JsEncode($this->brand_id->AdvancedSearch->SearchValue2) . "\"," .
				"\"w_brand_id\":\"" . JsEncode($this->brand_id->AdvancedSearch->SearchOperator2) . "\"";
		}
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field type_id
		$wrk = "";
		if ($this->type_id->AdvancedSearch->SearchValue != "" || $this->type_id->AdvancedSearch->SearchValue2 != "") {
			$wrk = "\"x_type_id\":\"" . JsEncode($this->type_id->AdvancedSearch->SearchValue) . "\"," .
				"\"z_type_id\":\"" . JsEncode($this->type_id->AdvancedSearch->SearchOperator) . "\"," .
				"\"v_type_id\":\"" . JsEncode($this->type_id->AdvancedSearch->SearchCondition) . "\"," .
				"\"y_type_id\":\"" . JsEncode($this->type_id->AdvancedSearch->SearchValue2) . "\"," .
				"\"w_type_id\":\"" . JsEncode($this->type_id->AdvancedSearch->SearchOperator2) . "\"";
		}
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field signature_id
		$wrk = "";
		if ($this->signature_id->AdvancedSearch->SearchValue != "" || $this->signature_id->AdvancedSearch->SearchValue2 != "") {
			$wrk = "\"x_signature_id\":\"" . JsEncode($this->signature_id->AdvancedSearch->SearchValue) . "\"," .
				"\"z_signature_id\":\"" . JsEncode($this->signature_id->AdvancedSearch->SearchOperator) . "\"," .
				"\"v_signature_id\":\"" . JsEncode($this->signature_id->AdvancedSearch->SearchCondition) . "\"," .
				"\"y_signature_id\":\"" . JsEncode($this->signature_id->AdvancedSearch->SearchValue2) . "\"," .
				"\"w_signature_id\":\"" . JsEncode($this->signature_id->AdvancedSearch->SearchOperator2) . "\"";
		}
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field department_id
		$wrk = "";
		if ($this->department_id->AdvancedSearch->SearchValue != "" || $this->department_id->AdvancedSearch->SearchValue2 != "") {
			$wrk = "\"x_department_id\":\"" . JsEncode($this->department_id->AdvancedSearch->SearchValue) . "\"," .
				"\"z_department_id\":\"" . JsEncode($this->department_id->AdvancedSearch->SearchOperator) . "\"," .
				"\"v_department_id\":\"" . JsEncode($this->department_id->AdvancedSearch->SearchCondition) . "\"," .
				"\"y_department_id\":\"" . JsEncode($this->department_id->AdvancedSearch->SearchValue2) . "\"," .
				"\"w_department_id\":\"" . JsEncode($this->department_id->AdvancedSearch->SearchOperator2) . "\"";
		}
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field location_id
		$wrk = "";
		if ($this->location_id->AdvancedSearch->SearchValue != "" || $this->location_id->AdvancedSearch->SearchValue2 != "") {
			$wrk = "\"x_location_id\":\"" . JsEncode($this->location_id->AdvancedSearch->SearchValue) . "\"," .
				"\"z_location_id\":\"" . JsEncode($this->location_id->AdvancedSearch->SearchOperator) . "\"," .
				"\"v_location_id\":\"" . JsEncode($this->location_id->AdvancedSearch->SearchCondition) . "\"," .
				"\"y_location_id\":\"" . JsEncode($this->location_id->AdvancedSearch->SearchValue2) . "\"," .
				"\"w_location_id\":\"" . JsEncode($this->location_id->AdvancedSearch->SearchOperator2) . "\"";
		}
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field cond_id
		$wrk = "";
		if ($this->cond_id->AdvancedSearch->SearchValue != "" || $this->cond_id->AdvancedSearch->SearchValue2 != "") {
			$wrk = "\"x_cond_id\":\"" . JsEncode($this->cond_id->AdvancedSearch->SearchValue) . "\"," .
				"\"z_cond_id\":\"" . JsEncode($this->cond_id->AdvancedSearch->SearchOperator) . "\"," .
				"\"v_cond_id\":\"" . JsEncode($this->cond_id->AdvancedSearch->SearchCondition) . "\"," .
				"\"y_cond_id\":\"" . JsEncode($this->cond_id->AdvancedSearch->SearchValue2) . "\"," .
				"\"w_cond_id\":\"" . JsEncode($this->cond_id->AdvancedSearch->SearchOperator2) . "\"";
		}
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field Remarks
		$wrk = "";
		if ($this->Remarks->AdvancedSearch->SearchValue != "" || $this->Remarks->AdvancedSearch->SearchValue2 != "") {
			$wrk = "\"x_Remarks\":\"" . JsEncode($this->Remarks->AdvancedSearch->SearchValue) . "\"," .
				"\"z_Remarks\":\"" . JsEncode($this->Remarks->AdvancedSearch->SearchOperator) . "\"," .
				"\"v_Remarks\":\"" . JsEncode($this->Remarks->AdvancedSearch->SearchCondition) . "\"," .
				"\"y_Remarks\":\"" . JsEncode($this->Remarks->AdvancedSearch->SearchValue2) . "\"," .
				"\"w_Remarks\":\"" . JsEncode($this->Remarks->AdvancedSearch->SearchOperator2) . "\"";
		}
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Field ProcurementDate
		$wrk = "";
		if ($this->ProcurementDate->AdvancedSearch->SearchValue != "" || $this->ProcurementDate->AdvancedSearch->SearchValue2 != "") {
			$wrk = "\"x_ProcurementDate\":\"" . JsEncode($this->ProcurementDate->AdvancedSearch->SearchValue) . "\"," .
				"\"z_ProcurementDate\":\"" . JsEncode($this->ProcurementDate->AdvancedSearch->SearchOperator) . "\"," .
				"\"v_ProcurementDate\":\"" . JsEncode($this->ProcurementDate->AdvancedSearch->SearchCondition) . "\"," .
				"\"y_ProcurementDate\":\"" . JsEncode($this->ProcurementDate->AdvancedSearch->SearchValue2) . "\"," .
				"\"w_ProcurementDate\":\"" . JsEncode($this->ProcurementDate->AdvancedSearch->SearchOperator2) . "\"";
		}
		if ($wrk != "") {
			if ($filterList != "") $filterList .= ",";
			$filterList .= $wrk;
		}

		// Return filter list in json
		if ($filterList != "")
			$filterList = "\"data\":{" . $filterList . "}";
		if ($savedFilterList != "")
			$filterList = Concat($filterList, "\"filters\":" . $savedFilterList, ",");
		return ($filterList != "") ? "{" . $filterList . "}" : "null";
	}

	// Restore list of filters
	protected function restoreFilterList()
	{

		// Return if not reset filter
		if (Post("cmd", "") != "resetfilter")
			return FALSE;
		$filter = json_decode(Post("filter", ""), TRUE);
		return $this->setupFilterList($filter);
	}

	// Setup list of filters
	protected function setupFilterList($filter)
	{
		if (!is_array($filter))
			return FALSE;

		// Field property_id
		if (!$this->property_id->AdvancedSearch->getFromArray($filter))
			$this->property_id->AdvancedSearch->loadDefault(); // Clear filter
		$this->property_id->AdvancedSearch->save();

		// Field group_id
		if (!$this->group_id->AdvancedSearch->getFromArray($filter))
			$this->group_id->AdvancedSearch->loadDefault(); // Clear filter
		$this->group_id->AdvancedSearch->save();

		// Field Code
		if (!$this->Code->AdvancedSearch->getFromArray($filter))
			$this->Code->AdvancedSearch->loadDefault(); // Clear filter
		$this->Code->AdvancedSearch->save();

		// Field Description
		if (!$this->Description->AdvancedSearch->getFromArray($filter))
			$this->Description->AdvancedSearch->loadDefault(); // Clear filter
		$this->Description->AdvancedSearch->save();

		// Field brand_id
		if (!$this->brand_id->AdvancedSearch->getFromArray($filter))
			$this->brand_id->AdvancedSearch->loadDefault(); // Clear filter
		$this->brand_id->AdvancedSearch->save();

		// Field type_id
		if (!$this->type_id->AdvancedSearch->getFromArray($filter))
			$this->type_id->AdvancedSearch->loadDefault(); // Clear filter
		$this->type_id->AdvancedSearch->save();

		// Field signature_id
		if (!$this->signature_id->AdvancedSearch->getFromArray($filter))
			$this->signature_id->AdvancedSearch->loadDefault(); // Clear filter
		$this->signature_id->AdvancedSearch->save();

		// Field department_id
		if (!$this->department_id->AdvancedSearch->getFromArray($filter))
			$this->department_id->AdvancedSearch->loadDefault(); // Clear filter
		$this->department_id->AdvancedSearch->save();

		// Field location_id
		if (!$this->location_id->AdvancedSearch->getFromArray($filter))
			$this->location_id->AdvancedSearch->loadDefault(); // Clear filter
		$this->location_id->AdvancedSearch->save();

		// Field cond_id
		if (!$this->cond_id->AdvancedSearch->getFromArray($filter))
			$this->cond_id->AdvancedSearch->loadDefault(); // Clear filter
		$this->cond_id->AdvancedSearch->save();

		// Field Remarks
		if (!$this->Remarks->AdvancedSearch->getFromArray($filter))
			$this->Remarks->AdvancedSearch->loadDefault(); // Clear filter
		$this->Remarks->AdvancedSearch->save();

		// Field ProcurementDate
		if (!$this->ProcurementDate->AdvancedSearch->getFromArray($filter))
			$this->ProcurementDate->AdvancedSearch->loadDefault(); // Clear filter
		$this->ProcurementDate->AdvancedSearch->save();
		return TRUE;
	}

	// Page Load event
	function Page_Load() {

		//echo "Page Load";
	}

	// Page Unload event
	function Page_Unload() {

		//echo "Page Unload";
	}

	// Page Redirecting event
	function Page_Redirecting(&$url) {

		// Example:
		//$url = "your URL";

	}

	// Message Showing event
	// $type = ''|'success'|'failure'|'warning'
	function Message_Showing(&$msg, $type) {
		if ($type == 'success') {

			//$msg = "your success message";
		} elseif ($type == 'failure') {

			//$msg = "your failure message";
		} elseif ($type == 'warning') {

			//$msg = "your warning message";
		} else {

			//$msg = "your message";
		}
	}

	// Page Render event
	function Page_Render() {

		//echo "Page Render";
	}

	// Page Data Rendering event
	function Page_DataRendering(&$header) {

		// Example:
		//$header = "your header";

	}

	// Page Data Rendered event
	function Page_DataRendered(&$footer) {

		// Example:
		//$footer = "your footer";

	}

	// Page Breaking event
	function Page_Breaking(&$break, &$content) {

		// Example:
		//$break = FALSE; // Skip page break, or
		//$content = "<div style=\"page-break-after:always;\">&nbsp;</div>"; // Modify page break content

	}

	// Load Filters event
	function Page_FilterLoad() {

		// Enter your code here
		// Example: Register/Unregister Custom Extended Filter
		//RegisterFilter($this-><Field>, 'StartsWithA', 'Starts With A', PROJECT_NAMESPACE . 'GetStartsWithAFilter'); // With function, or
		//RegisterFilter($this-><Field>, 'StartsWithA', 'Starts With A'); // No function, use Page_Filtering event
		//UnregisterFilter($this-><Field>, 'StartsWithA');

	}

	// Page Selecting event
	function Page_Selecting(&$filter) {

		// Enter your code here
	}

	// Page Filter Validated event
	function Page_FilterValidated() {

		// Example:
		//$this->MyField1->AdvancedSearch->SearchValue = "your search criteria"; // Search value

	}

	// Page Filtering event
	function Page_Filtering(&$fld, &$filter, $typ, $opr = "", $val = "", $cond = "", $opr2 = "", $val2 = "") {

		// Note: ALWAYS CHECK THE FILTER TYPE ($typ)! Example:
		//if ($typ == "dropdown" && $fld->Name == "MyField") // Dropdown filter
		//	$filter = "..."; // Modify the filter
		//if ($typ == "extended" && $fld->Name == "MyField") // Extended filter
		//	$filter = "..."; // Modify the filter
		//if ($typ == "popup" && $fld->Name == "MyField") // Popup filter
		//	$filter = "..."; // Modify the filter
		//if ($typ == "custom" && $opr == "..." && $fld->Name == "MyField") // Custom filter, $opr is the custom filter ID
		//	$filter = "..."; // Modify the filter

	}

	// Cell Rendered event
	function Cell_Rendered(&$Field, $CurrentValue, &$ViewValue, &$ViewAttrs, &$CellAttrs, &$HrefValue, &$LinkAttrs) {

		//$ViewValue = "xxx";
		//$ViewAttrs["class"] = "xxx";

	}

	// Form Custom Validate event
	function Form_CustomValidate(&$customError) {

		// Return error message in CustomError
		return TRUE;
	}
} // End class
?>