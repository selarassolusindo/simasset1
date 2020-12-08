<?php namespace PHPMaker2020\p_simasset1; ?>
<?php

/**
 * Table class for t004_asset
 */
class t004_asset extends DbTable
{
	protected $SqlFrom = "";
	protected $SqlSelect = "";
	protected $SqlSelectList = "";
	protected $SqlWhere = "";
	protected $SqlGroupBy = "";
	protected $SqlHaving = "";
	protected $SqlOrderBy = "";
	public $UseSessionForListSql = TRUE;

	// Column CSS classes
	public $LeftColumnClass = "col-sm-2 col-form-label ew-label";
	public $RightColumnClass = "col-sm-10";
	public $OffsetColumnClass = "col-sm-10 offset-sm-2";
	public $TableLeftColumnClass = "w-col-2";

	// Audit trail
	public $AuditTrailOnAdd = TRUE;
	public $AuditTrailOnEdit = TRUE;
	public $AuditTrailOnDelete = TRUE;
	public $AuditTrailOnView = FALSE;
	public $AuditTrailOnViewData = FALSE;
	public $AuditTrailOnSearch = FALSE;

	// Export
	public $ExportDoc;

	// Fields
	public $id;
	public $property_id;
	public $group_id;
	public $type_id;
	public $Code;
	public $Description;
	public $brand_id;
	public $signature_id;
	public $department_id;
	public $location_id;
	public $Qty;
	public $Variance;
	public $cond_id;
	public $Remarks;
	public $ProcurementDate;
	public $ProcurementCurrentCost;
	public $PeriodBegin;
	public $PeriodEnd;

	// Constructor
	public function __construct()
	{
		global $Language, $CurrentLanguage;
		parent::__construct();

		// Language object
		if (!isset($Language))
			$Language = new Language();
		$this->TableVar = 't004_asset';
		$this->TableName = 't004_asset';
		$this->TableType = 'TABLE';

		// Update Table
		$this->UpdateTable = "`t004_asset`";
		$this->Dbid = 'DB';
		$this->ExportAll = TRUE;
		$this->ExportPageBreakCount = 0; // Page break per every n record (PDF only)
		$this->ExportPageOrientation = "portrait"; // Page orientation (PDF only)
		$this->ExportPageSize = "a4"; // Page size (PDF only)
		$this->ExportExcelPageOrientation = ""; // Page orientation (PhpSpreadsheet only)
		$this->ExportExcelPageSize = ""; // Page size (PhpSpreadsheet only)
		$this->ExportWordPageOrientation = "portrait"; // Page orientation (PHPWord only)
		$this->ExportWordColumnWidth = NULL; // Cell width (PHPWord only)
		$this->DetailAdd = FALSE; // Allow detail add
		$this->DetailEdit = FALSE; // Allow detail edit
		$this->DetailView = FALSE; // Allow detail view
		$this->ShowMultipleDetails = FALSE; // Show multiple details
		$this->GridAddRowCount = 5;
		$this->AllowAddDeleteRow = TRUE; // Allow add/delete row
		$this->UserIDAllowSecurity = Config("DEFAULT_USER_ID_ALLOW_SECURITY"); // Default User ID allowed permissions
		$this->BasicSearch = new BasicSearch($this->TableVar);

		// id
		$this->id = new DbField('t004_asset', 't004_asset', 'x_id', 'id', '`id`', '`id`', 3, 11, -1, FALSE, '`id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'NO');
		$this->id->IsAutoIncrement = TRUE; // Autoincrement field
		$this->id->IsPrimaryKey = TRUE; // Primary key field
		$this->id->IsForeignKey = TRUE; // Foreign key field
		$this->id->Sortable = TRUE; // Allow sort
		$this->id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['id'] = &$this->id;

		// property_id
		$this->property_id = new DbField('t004_asset', 't004_asset', 'x_property_id', 'property_id', '`property_id`', '`property_id`', 3, 11, -1, FALSE, '`property_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->property_id->Nullable = FALSE; // NOT NULL field
		$this->property_id->Required = TRUE; // Required field
		$this->property_id->Sortable = TRUE; // Allow sort
		$this->property_id->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->property_id->PleaseSelectText = $Language->phrase("PleaseSelect"); // "PleaseSelect" text
		$this->property_id->Lookup = new Lookup('property_id', 't001_property', FALSE, 'id', ["Property","","",""], [], [], [], [], [], [], '', '');
		$this->property_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['property_id'] = &$this->property_id;

		// group_id
		$this->group_id = new DbField('t004_asset', 't004_asset', 'x_group_id', 'group_id', '`group_id`', '`group_id`', 3, 11, -1, FALSE, '`group_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->group_id->Nullable = FALSE; // NOT NULL field
		$this->group_id->Required = TRUE; // Required field
		$this->group_id->Sortable = TRUE; // Allow sort
		$this->group_id->Lookup = new Lookup('group_id', 't005_assetgroup', FALSE, 'id', ["Code","","",""], [], [], [], [], [], [], '', '');
		$this->group_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['group_id'] = &$this->group_id;

		// type_id
		$this->type_id = new DbField('t004_asset', 't004_asset', 'x_type_id', 'type_id', '`type_id`', '`type_id`', 3, 11, -1, FALSE, '`type_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->type_id->Nullable = FALSE; // NOT NULL field
		$this->type_id->Required = TRUE; // Required field
		$this->type_id->Sortable = TRUE; // Allow sort
		$this->type_id->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->type_id->PleaseSelectText = $Language->phrase("PleaseSelect"); // "PleaseSelect" text
		$this->type_id->Lookup = new Lookup('type_id', 't007_assettype', FALSE, 'id', ["Description","","",""], [], [], [], [], [], [], '', '');
		$this->type_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['type_id'] = &$this->type_id;

		// Code
		$this->Code = new DbField('t004_asset', 't004_asset', 'x_Code', 'Code', '`Code`', '`Code`', 200, 25, -1, FALSE, '`Code`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->Code->Nullable = FALSE; // NOT NULL field
		$this->Code->Required = TRUE; // Required field
		$this->Code->Sortable = TRUE; // Allow sort
		$this->fields['Code'] = &$this->Code;

		// Description
		$this->Description = new DbField('t004_asset', 't004_asset', 'x_Description', 'Description', '`Description`', '`Description`', 200, 255, -1, FALSE, '`Description`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->Description->Nullable = FALSE; // NOT NULL field
		$this->Description->Required = TRUE; // Required field
		$this->Description->Sortable = TRUE; // Allow sort
		$this->fields['Description'] = &$this->Description;

		// brand_id
		$this->brand_id = new DbField('t004_asset', 't004_asset', 'x_brand_id', 'brand_id', '`brand_id`', '`brand_id`', 3, 11, -1, FALSE, '`brand_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->brand_id->Nullable = FALSE; // NOT NULL field
		$this->brand_id->Required = TRUE; // Required field
		$this->brand_id->Sortable = TRUE; // Allow sort
		$this->brand_id->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->brand_id->PleaseSelectText = $Language->phrase("PleaseSelect"); // "PleaseSelect" text
		$this->brand_id->Lookup = new Lookup('brand_id', 't008_brand', FALSE, 'id', ["Brand","","",""], [], [], [], [], [], [], '', '');
		$this->brand_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['brand_id'] = &$this->brand_id;

		// signature_id
		$this->signature_id = new DbField('t004_asset', 't004_asset', 'x_signature_id', 'signature_id', '`signature_id`', '`signature_id`', 3, 11, -1, FALSE, '`signature_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->signature_id->Nullable = FALSE; // NOT NULL field
		$this->signature_id->Required = TRUE; // Required field
		$this->signature_id->Sortable = TRUE; // Allow sort
		$this->signature_id->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->signature_id->PleaseSelectText = $Language->phrase("PleaseSelect"); // "PleaseSelect" text
		$this->signature_id->Lookup = new Lookup('signature_id', 't003_signature', FALSE, 'id', ["Signature","","",""], [], [], [], [], [], [], '', '');
		$this->signature_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['signature_id'] = &$this->signature_id;

		// department_id
		$this->department_id = new DbField('t004_asset', 't004_asset', 'x_department_id', 'department_id', '`department_id`', '`department_id`', 3, 11, -1, FALSE, '`department_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->department_id->Nullable = FALSE; // NOT NULL field
		$this->department_id->Required = TRUE; // Required field
		$this->department_id->Sortable = TRUE; // Allow sort
		$this->department_id->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->department_id->PleaseSelectText = $Language->phrase("PleaseSelect"); // "PleaseSelect" text
		$this->department_id->Lookup = new Lookup('department_id', 't002_department', FALSE, 'id', ["Department","","",""], [], [], [], [], [], [], '', '');
		$this->department_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['department_id'] = &$this->department_id;

		// location_id
		$this->location_id = new DbField('t004_asset', 't004_asset', 'x_location_id', 'location_id', '`location_id`', '`location_id`', 3, 11, -1, FALSE, '`location_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->location_id->Nullable = FALSE; // NOT NULL field
		$this->location_id->Required = TRUE; // Required field
		$this->location_id->Sortable = TRUE; // Allow sort
		$this->location_id->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->location_id->PleaseSelectText = $Language->phrase("PleaseSelect"); // "PleaseSelect" text
		$this->location_id->Lookup = new Lookup('location_id', 't009_location', FALSE, 'id', ["Location","","",""], [], [], [], [], [], [], '', '');
		$this->location_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['location_id'] = &$this->location_id;

		// Qty
		$this->Qty = new DbField('t004_asset', 't004_asset', 'x_Qty', 'Qty', '`Qty`', '`Qty`', 4, 14, -1, FALSE, '`Qty`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->Qty->Nullable = FALSE; // NOT NULL field
		$this->Qty->Required = TRUE; // Required field
		$this->Qty->Sortable = TRUE; // Allow sort
		$this->Qty->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->fields['Qty'] = &$this->Qty;

		// Variance
		$this->Variance = new DbField('t004_asset', 't004_asset', 'x_Variance', 'Variance', '`Variance`', '`Variance`', 4, 14, -1, FALSE, '`Variance`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->Variance->Nullable = FALSE; // NOT NULL field
		$this->Variance->Sortable = TRUE; // Allow sort
		$this->Variance->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->fields['Variance'] = &$this->Variance;

		// cond_id
		$this->cond_id = new DbField('t004_asset', 't004_asset', 'x_cond_id', 'cond_id', '`cond_id`', '`cond_id`', 3, 11, -1, FALSE, '`cond_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'SELECT');
		$this->cond_id->Nullable = FALSE; // NOT NULL field
		$this->cond_id->Required = TRUE; // Required field
		$this->cond_id->Sortable = TRUE; // Allow sort
		$this->cond_id->UsePleaseSelect = TRUE; // Use PleaseSelect by default
		$this->cond_id->PleaseSelectText = $Language->phrase("PleaseSelect"); // "PleaseSelect" text
		$this->cond_id->Lookup = new Lookup('cond_id', 't010_condition', FALSE, 'id', ["Status","","",""], [], [], [], [], [], [], '', '');
		$this->cond_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->fields['cond_id'] = &$this->cond_id;

		// Remarks
		$this->Remarks = new DbField('t004_asset', 't004_asset', 'x_Remarks', 'Remarks', '`Remarks`', '`Remarks`', 201, 65535, -1, FALSE, '`Remarks`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXTAREA');
		$this->Remarks->Sortable = TRUE; // Allow sort
		$this->fields['Remarks'] = &$this->Remarks;

		// ProcurementDate
		$this->ProcurementDate = new DbField('t004_asset', 't004_asset', 'x_ProcurementDate', 'ProcurementDate', '`ProcurementDate`', CastDateFieldForLike("`ProcurementDate`", 7, "DB"), 133, 10, 7, FALSE, '`ProcurementDate`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->ProcurementDate->Nullable = FALSE; // NOT NULL field
		$this->ProcurementDate->Required = TRUE; // Required field
		$this->ProcurementDate->Sortable = TRUE; // Allow sort
		$this->ProcurementDate->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_SEPARATOR"], $Language->phrase("IncorrectDateDMY"));
		$this->fields['ProcurementDate'] = &$this->ProcurementDate;

		// ProcurementCurrentCost
		$this->ProcurementCurrentCost = new DbField('t004_asset', 't004_asset', 'x_ProcurementCurrentCost', 'ProcurementCurrentCost', '`ProcurementCurrentCost`', '`ProcurementCurrentCost`', 4, 17, -1, FALSE, '`ProcurementCurrentCost`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->ProcurementCurrentCost->Nullable = FALSE; // NOT NULL field
		$this->ProcurementCurrentCost->Required = TRUE; // Required field
		$this->ProcurementCurrentCost->Sortable = TRUE; // Allow sort
		$this->ProcurementCurrentCost->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->fields['ProcurementCurrentCost'] = &$this->ProcurementCurrentCost;

		// PeriodBegin
		$this->PeriodBegin = new DbField('t004_asset', 't004_asset', 'x_PeriodBegin', 'PeriodBegin', '`PeriodBegin`', CastDateFieldForLike("`PeriodBegin`", 7, "DB"), 133, 10, 7, FALSE, '`PeriodBegin`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->PeriodBegin->Nullable = FALSE; // NOT NULL field
		$this->PeriodBegin->Required = TRUE; // Required field
		$this->PeriodBegin->Sortable = TRUE; // Allow sort
		$this->PeriodBegin->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_SEPARATOR"], $Language->phrase("IncorrectDateDMY"));
		$this->fields['PeriodBegin'] = &$this->PeriodBegin;

		// PeriodEnd
		$this->PeriodEnd = new DbField('t004_asset', 't004_asset', 'x_PeriodEnd', 'PeriodEnd', '`PeriodEnd`', CastDateFieldForLike("`PeriodEnd`", 7, "DB"), 133, 10, 7, FALSE, '`PeriodEnd`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->PeriodEnd->Nullable = FALSE; // NOT NULL field
		$this->PeriodEnd->Required = TRUE; // Required field
		$this->PeriodEnd->Sortable = TRUE; // Allow sort
		$this->PeriodEnd->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_SEPARATOR"], $Language->phrase("IncorrectDateDMY"));
		$this->fields['PeriodEnd'] = &$this->PeriodEnd;
	}

	// Field Visibility
	public function getFieldVisibility($fldParm)
	{
		global $Security;
		return $this->$fldParm->Visible; // Returns original value
	}

	// Set left column class (must be predefined col-*-* classes of Bootstrap grid system)
	function setLeftColumnClass($class)
	{
		if (preg_match('/^col\-(\w+)\-(\d+)$/', $class, $match)) {
			$this->LeftColumnClass = $class . " col-form-label ew-label";
			$this->RightColumnClass = "col-" . $match[1] . "-" . strval(12 - (int)$match[2]);
			$this->OffsetColumnClass = $this->RightColumnClass . " " . str_replace("col-", "offset-", $class);
			$this->TableLeftColumnClass = preg_replace('/^col-\w+-(\d+)$/', "w-col-$1", $class); // Change to w-col-*
		}
	}

	// Multiple column sort
	public function updateSort(&$fld, $ctrl)
	{
		if ($this->CurrentOrder == $fld->Name) {
			$sortField = $fld->Expression;
			$lastSort = $fld->getSort();
			if ($this->CurrentOrderType == "ASC" || $this->CurrentOrderType == "DESC") {
				$thisSort = $this->CurrentOrderType;
			} else {
				$thisSort = ($lastSort == "ASC") ? "DESC" : "ASC";
			}
			$fld->setSort($thisSort);
			if ($ctrl) {
				$orderBy = $this->getSessionOrderBy();
				if (ContainsString($orderBy, $sortField . " " . $lastSort)) {
					$orderBy = str_replace($sortField . " " . $lastSort, $sortField . " " . $thisSort, $orderBy);
				} else {
					if ($orderBy != "")
						$orderBy .= ", ";
					$orderBy .= $sortField . " " . $thisSort;
				}
				$this->setSessionOrderBy($orderBy); // Save to Session
			} else {
				$this->setSessionOrderBy($sortField . " " . $thisSort); // Save to Session
			}
		} else {
			if (!$ctrl)
				$fld->setSort("");
		}
	}

	// Current detail table name
	public function getCurrentDetailTable()
	{
		return @$_SESSION[PROJECT_NAME . "_" . $this->TableVar . "_" . Config("TABLE_DETAIL_TABLE")];
	}
	public function setCurrentDetailTable($v)
	{
		$_SESSION[PROJECT_NAME . "_" . $this->TableVar . "_" . Config("TABLE_DETAIL_TABLE")] = $v;
	}

	// Get detail url
	public function getDetailUrl()
	{

		// Detail url
		$detailUrl = "";
		if ($this->getCurrentDetailTable() == "t006_assetdepreciation") {
			$detailUrl = $GLOBALS["t006_assetdepreciation"]->getListUrl() . "?" . Config("TABLE_SHOW_MASTER") . "=" . $this->TableVar;
			$detailUrl .= "&fk_id=" . urlencode($this->id->CurrentValue);
		}
		if ($detailUrl == "")
			$detailUrl = "t004_assetlist.php";
		return $detailUrl;
	}

	// Table level SQL
	public function getSqlFrom() // From
	{
		return ($this->SqlFrom != "") ? $this->SqlFrom : "`t004_asset`";
	}
	public function sqlFrom() // For backward compatibility
	{
		return $this->getSqlFrom();
	}
	public function setSqlFrom($v)
	{
		$this->SqlFrom = $v;
	}
	public function getSqlSelect() // Select
	{
		return ($this->SqlSelect != "") ? $this->SqlSelect : "SELECT * FROM " . $this->getSqlFrom();
	}
	public function sqlSelect() // For backward compatibility
	{
		return $this->getSqlSelect();
	}
	public function setSqlSelect($v)
	{
		$this->SqlSelect = $v;
	}
	public function getSqlWhere() // Where
	{
		$where = ($this->SqlWhere != "") ? $this->SqlWhere : "";
		$this->TableFilter = "";
		AddFilter($where, $this->TableFilter);
		return $where;
	}
	public function sqlWhere() // For backward compatibility
	{
		return $this->getSqlWhere();
	}
	public function setSqlWhere($v)
	{
		$this->SqlWhere = $v;
	}
	public function getSqlGroupBy() // Group By
	{
		return ($this->SqlGroupBy != "") ? $this->SqlGroupBy : "";
	}
	public function sqlGroupBy() // For backward compatibility
	{
		return $this->getSqlGroupBy();
	}
	public function setSqlGroupBy($v)
	{
		$this->SqlGroupBy = $v;
	}
	public function getSqlHaving() // Having
	{
		return ($this->SqlHaving != "") ? $this->SqlHaving : "";
	}
	public function sqlHaving() // For backward compatibility
	{
		return $this->getSqlHaving();
	}
	public function setSqlHaving($v)
	{
		$this->SqlHaving = $v;
	}
	public function getSqlOrderBy() // Order By
	{
		return ($this->SqlOrderBy != "") ? $this->SqlOrderBy : "";
	}
	public function sqlOrderBy() // For backward compatibility
	{
		return $this->getSqlOrderBy();
	}
	public function setSqlOrderBy($v)
	{
		$this->SqlOrderBy = $v;
	}

	// Apply User ID filters
	public function applyUserIDFilters($filter, $id = "")
	{
		return $filter;
	}

	// Check if User ID security allows view all
	public function userIDAllow($id = "")
	{
		$allow = $this->UserIDAllowSecurity;
		switch ($id) {
			case "add":
			case "copy":
			case "gridadd":
			case "register":
			case "addopt":
				return (($allow & 1) == 1);
			case "edit":
			case "gridedit":
			case "update":
			case "changepwd":
			case "forgotpwd":
				return (($allow & 4) == 4);
			case "delete":
				return (($allow & 2) == 2);
			case "view":
				return (($allow & 32) == 32);
			case "search":
				return (($allow & 64) == 64);
			case "lookup":
				return (($allow & 256) == 256);
			default:
				return (($allow & 8) == 8);
		}
	}

	// Get recordset
	public function getRecordset($sql, $rowcnt = -1, $offset = -1)
	{
		$conn = $this->getConnection();
		$conn->raiseErrorFn = Config("ERROR_FUNC");
		$rs = $conn->selectLimit($sql, $rowcnt, $offset);
		$conn->raiseErrorFn = "";
		return $rs;
	}

	// Get record count
	public function getRecordCount($sql, $c = NULL)
	{
		$cnt = -1;
		$rs = NULL;
		$sql = preg_replace('/\/\*BeginOrderBy\*\/[\s\S]+\/\*EndOrderBy\*\//', "", $sql); // Remove ORDER BY clause (MSSQL)
		$pattern = '/^SELECT\s([\s\S]+)\sFROM\s/i';

		// Skip Custom View / SubQuery / SELECT DISTINCT / ORDER BY
		if (($this->TableType == 'TABLE' || $this->TableType == 'VIEW' || $this->TableType == 'LINKTABLE') &&
			preg_match($pattern, $sql) && !preg_match('/\(\s*(SELECT[^)]+)\)/i', $sql) &&
			!preg_match('/^\s*select\s+distinct\s+/i', $sql) && !preg_match('/\s+order\s+by\s+/i', $sql)) {
			$sqlwrk = "SELECT COUNT(*) FROM " . preg_replace($pattern, "", $sql);
		} else {
			$sqlwrk = "SELECT COUNT(*) FROM (" . $sql . ") COUNT_TABLE";
		}
		$conn = $c ?: $this->getConnection();
		if ($rs = $conn->execute($sqlwrk)) {
			if (!$rs->EOF && $rs->FieldCount() > 0) {
				$cnt = $rs->fields[0];
				$rs->close();
			}
			return (int)$cnt;
		}

		// Unable to get count, get record count directly
		if ($rs = $conn->execute($sql)) {
			$cnt = $rs->RecordCount();
			$rs->close();
			return (int)$cnt;
		}
		return $cnt;
	}

	// Get SQL
	public function getSql($where, $orderBy = "")
	{
		return BuildSelectSql($this->getSqlSelect(), $this->getSqlWhere(),
			$this->getSqlGroupBy(), $this->getSqlHaving(), $this->getSqlOrderBy(),
			$where, $orderBy);
	}

	// Table SQL
	public function getCurrentSql()
	{
		$filter = $this->CurrentFilter;
		$filter = $this->applyUserIDFilters($filter);
		$sort = $this->getSessionOrderBy();
		return $this->getSql($filter, $sort);
	}

	// Table SQL with List page filter
	public function getListSql()
	{
		$filter = $this->UseSessionForListSql ? $this->getSessionWhere() : "";
		AddFilter($filter, $this->CurrentFilter);
		$filter = $this->applyUserIDFilters($filter);
		$this->Recordset_Selecting($filter);
		$select = $this->getSqlSelect();
		$sort = $this->UseSessionForListSql ? $this->getSessionOrderBy() : "";
		return BuildSelectSql($select, $this->getSqlWhere(), $this->getSqlGroupBy(),
			$this->getSqlHaving(), $this->getSqlOrderBy(), $filter, $sort);
	}

	// Get ORDER BY clause
	public function getOrderBy()
	{
		$sort = $this->getSessionOrderBy();
		return BuildSelectSql("", "", "", "", $this->getSqlOrderBy(), "", $sort);
	}

	// Get record count based on filter (for detail record count in master table pages)
	public function loadRecordCount($filter)
	{
		$origFilter = $this->CurrentFilter;
		$this->CurrentFilter = $filter;
		$this->Recordset_Selecting($this->CurrentFilter);
		$select = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlSelect() : "SELECT * FROM " . $this->getSqlFrom();
		$groupBy = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlGroupBy() : "";
		$having = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlHaving() : "";
		$sql = BuildSelectSql($select, $this->getSqlWhere(), $groupBy, $having, "", $this->CurrentFilter, "");
		$cnt = $this->getRecordCount($sql);
		$this->CurrentFilter = $origFilter;
		return $cnt;
	}

	// Get record count (for current List page)
	public function listRecordCount()
	{
		$filter = $this->getSessionWhere();
		AddFilter($filter, $this->CurrentFilter);
		$filter = $this->applyUserIDFilters($filter);
		$this->Recordset_Selecting($filter);
		$select = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlSelect() : "SELECT * FROM " . $this->getSqlFrom();
		$groupBy = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlGroupBy() : "";
		$having = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlHaving() : "";
		$sql = BuildSelectSql($select, $this->getSqlWhere(), $groupBy, $having, "", $filter, "");
		$cnt = $this->getRecordCount($sql);
		return $cnt;
	}

	// INSERT statement
	protected function insertSql(&$rs)
	{
		$names = "";
		$values = "";
		foreach ($rs as $name => $value) {
			if (!isset($this->fields[$name]) || $this->fields[$name]->IsCustom)
				continue;
			$names .= $this->fields[$name]->Expression . ",";
			$values .= QuotedValue($value, $this->fields[$name]->DataType, $this->Dbid) . ",";
		}
		$names = preg_replace('/,+$/', "", $names);
		$values = preg_replace('/,+$/', "", $values);
		return "INSERT INTO " . $this->UpdateTable . " (" . $names . ") VALUES (" . $values . ")";
	}

	// Insert
	public function insert(&$rs)
	{
		$conn = $this->getConnection();
		$success = $conn->execute($this->insertSql($rs));
		if ($success) {

			// Get insert id if necessary
			$this->id->setDbValue($conn->insert_ID());
			$rs['id'] = $this->id->DbValue;
			if ($this->AuditTrailOnAdd)
				$this->writeAuditTrailOnAdd($rs);
		}
		return $success;
	}

	// UPDATE statement
	protected function updateSql(&$rs, $where = "", $curfilter = TRUE)
	{
		$sql = "UPDATE " . $this->UpdateTable . " SET ";
		foreach ($rs as $name => $value) {
			if (!isset($this->fields[$name]) || $this->fields[$name]->IsCustom || $this->fields[$name]->IsAutoIncrement)
				continue;
			$sql .= $this->fields[$name]->Expression . "=";
			$sql .= QuotedValue($value, $this->fields[$name]->DataType, $this->Dbid) . ",";
		}
		$sql = preg_replace('/,+$/', "", $sql);
		$filter = ($curfilter) ? $this->CurrentFilter : "";
		if (is_array($where))
			$where = $this->arrayToFilter($where);
		AddFilter($filter, $where);
		if ($filter != "")
			$sql .= " WHERE " . $filter;
		return $sql;
	}

	// Update
	public function update(&$rs, $where = "", $rsold = NULL, $curfilter = TRUE)
	{
		$conn = $this->getConnection();

		// Cascade Update detail table 't006_assetdepreciation'
		$cascadeUpdate = FALSE;
		$rscascade = [];
		if ($rsold && (isset($rs['id']) && $rsold['id'] != $rs['id'])) { // Update detail field 'asset_id'
			$cascadeUpdate = TRUE;
			$rscascade['asset_id'] = $rs['id'];
		}
		if ($cascadeUpdate) {
			if (!isset($GLOBALS["t006_assetdepreciation"]))
				$GLOBALS["t006_assetdepreciation"] = new t006_assetdepreciation();
			$rswrk = $GLOBALS["t006_assetdepreciation"]->loadRs("`asset_id` = " . QuotedValue($rsold['id'], DATATYPE_NUMBER, 'DB'));
			while ($rswrk && !$rswrk->EOF) {
				$rskey = [];
				$fldname = 'id';
				$rskey[$fldname] = $rswrk->fields[$fldname];
				$rsdtlold = &$rswrk->fields;
				$rsdtlnew = array_merge($rsdtlold, $rscascade);

				// Call Row_Updating event
				$success = $GLOBALS["t006_assetdepreciation"]->Row_Updating($rsdtlold, $rsdtlnew);
				if ($success)
					$success = $GLOBALS["t006_assetdepreciation"]->update($rscascade, $rskey, $rswrk->fields);
				if (!$success)
					return FALSE;

				// Call Row_Updated event
				$GLOBALS["t006_assetdepreciation"]->Row_Updated($rsdtlold, $rsdtlnew);
				$rswrk->moveNext();
			}
		}
		$success = $conn->execute($this->updateSql($rs, $where, $curfilter));
		if ($success && $this->AuditTrailOnEdit && $rsold) {
			$rsaudit = $rs;
			$fldname = 'id';
			if (!array_key_exists($fldname, $rsaudit))
				$rsaudit[$fldname] = $rsold[$fldname];
			$this->writeAuditTrailOnEdit($rsold, $rsaudit);
		}
		return $success;
	}

	// DELETE statement
	protected function deleteSql(&$rs, $where = "", $curfilter = TRUE)
	{
		$sql = "DELETE FROM " . $this->UpdateTable . " WHERE ";
		if (is_array($where))
			$where = $this->arrayToFilter($where);
		if ($rs) {
			if (array_key_exists('id', $rs))
				AddFilter($where, QuotedName('id', $this->Dbid) . '=' . QuotedValue($rs['id'], $this->id->DataType, $this->Dbid));
		}
		$filter = ($curfilter) ? $this->CurrentFilter : "";
		AddFilter($filter, $where);
		if ($filter != "")
			$sql .= $filter;
		else
			$sql .= "0=1"; // Avoid delete
		return $sql;
	}

	// Delete
	public function delete(&$rs, $where = "", $curfilter = FALSE)
	{
		$success = TRUE;
		$conn = $this->getConnection();

		// Cascade delete detail table 't006_assetdepreciation'
		if (!isset($GLOBALS["t006_assetdepreciation"]))
			$GLOBALS["t006_assetdepreciation"] = new t006_assetdepreciation();
		$rscascade = $GLOBALS["t006_assetdepreciation"]->loadRs("`asset_id` = " . QuotedValue($rs['id'], DATATYPE_NUMBER, "DB"));
		$dtlrows = ($rscascade) ? $rscascade->getRows() : [];

		// Call Row Deleting event
		foreach ($dtlrows as $dtlrow) {
			$success = $GLOBALS["t006_assetdepreciation"]->Row_Deleting($dtlrow);
			if (!$success)
				break;
		}
		if ($success) {
			foreach ($dtlrows as $dtlrow) {
				$success = $GLOBALS["t006_assetdepreciation"]->delete($dtlrow); // Delete
				if (!$success)
					break;
			}
		}

		// Call Row Deleted event
		if ($success) {
			foreach ($dtlrows as $dtlrow)
				$GLOBALS["t006_assetdepreciation"]->Row_Deleted($dtlrow);
		}
		if ($success)
			$success = $conn->execute($this->deleteSql($rs, $where, $curfilter));
		if ($success && $this->AuditTrailOnDelete)
			$this->writeAuditTrailOnDelete($rs);
		return $success;
	}

	// Load DbValue from recordset or array
	protected function loadDbValues(&$rs)
	{
		if (!$rs || !is_array($rs) && $rs->EOF)
			return;
		$row = is_array($rs) ? $rs : $rs->fields;
		$this->id->DbValue = $row['id'];
		$this->property_id->DbValue = $row['property_id'];
		$this->group_id->DbValue = $row['group_id'];
		$this->type_id->DbValue = $row['type_id'];
		$this->Code->DbValue = $row['Code'];
		$this->Description->DbValue = $row['Description'];
		$this->brand_id->DbValue = $row['brand_id'];
		$this->signature_id->DbValue = $row['signature_id'];
		$this->department_id->DbValue = $row['department_id'];
		$this->location_id->DbValue = $row['location_id'];
		$this->Qty->DbValue = $row['Qty'];
		$this->Variance->DbValue = $row['Variance'];
		$this->cond_id->DbValue = $row['cond_id'];
		$this->Remarks->DbValue = $row['Remarks'];
		$this->ProcurementDate->DbValue = $row['ProcurementDate'];
		$this->ProcurementCurrentCost->DbValue = $row['ProcurementCurrentCost'];
		$this->PeriodBegin->DbValue = $row['PeriodBegin'];
		$this->PeriodEnd->DbValue = $row['PeriodEnd'];
	}

	// Delete uploaded files
	public function deleteUploadedFiles($row)
	{
		$this->loadDbValues($row);
	}

	// Record filter WHERE clause
	protected function sqlKeyFilter()
	{
		return "`id` = @id@";
	}

	// Get record filter
	public function getRecordFilter($row = NULL)
	{
		$keyFilter = $this->sqlKeyFilter();
		if (is_array($row))
			$val = array_key_exists('id', $row) ? $row['id'] : NULL;
		else
			$val = $this->id->OldValue !== NULL ? $this->id->OldValue : $this->id->CurrentValue;
		if (!is_numeric($val))
			return "0=1"; // Invalid key
		if ($val == NULL)
			return "0=1"; // Invalid key
		else
			$keyFilter = str_replace("@id@", AdjustSql($val, $this->Dbid), $keyFilter); // Replace key value
		return $keyFilter;
	}

	// Return page URL
	public function getReturnUrl()
	{
		$name = PROJECT_NAME . "_" . $this->TableVar . "_" . Config("TABLE_RETURN_URL");

		// Get referer URL automatically
		if (ServerVar("HTTP_REFERER") != "" && ReferPageName() != CurrentPageName() && ReferPageName() != "login.php") // Referer not same page or login page
			$_SESSION[$name] = ServerVar("HTTP_REFERER"); // Save to Session
		if (@$_SESSION[$name] != "") {
			return $_SESSION[$name];
		} else {
			return "t004_assetlist.php";
		}
	}
	public function setReturnUrl($v)
	{
		$_SESSION[PROJECT_NAME . "_" . $this->TableVar . "_" . Config("TABLE_RETURN_URL")] = $v;
	}

	// Get modal caption
	public function getModalCaption($pageName)
	{
		global $Language;
		if ($pageName == "t004_assetview.php")
			return $Language->phrase("View");
		elseif ($pageName == "t004_assetedit.php")
			return $Language->phrase("Edit");
		elseif ($pageName == "t004_assetadd.php")
			return $Language->phrase("Add");
		else
			return "";
	}

	// List URL
	public function getListUrl()
	{
		return "t004_assetlist.php";
	}

	// View URL
	public function getViewUrl($parm = "")
	{
		if ($parm != "")
			$url = $this->keyUrl("t004_assetview.php", $this->getUrlParm($parm));
		else
			$url = $this->keyUrl("t004_assetview.php", $this->getUrlParm(Config("TABLE_SHOW_DETAIL") . "="));
		return $this->addMasterUrl($url);
	}

	// Add URL
	public function getAddUrl($parm = "")
	{
		if ($parm != "")
			$url = "t004_assetadd.php?" . $this->getUrlParm($parm);
		else
			$url = "t004_assetadd.php";
		return $this->addMasterUrl($url);
	}

	// Edit URL
	public function getEditUrl($parm = "")
	{
		if ($parm != "")
			$url = $this->keyUrl("t004_assetedit.php", $this->getUrlParm($parm));
		else
			$url = $this->keyUrl("t004_assetedit.php", $this->getUrlParm(Config("TABLE_SHOW_DETAIL") . "="));
		return $this->addMasterUrl($url);
	}

	// Inline edit URL
	public function getInlineEditUrl()
	{
		$url = $this->keyUrl(CurrentPageName(), $this->getUrlParm("action=edit"));
		return $this->addMasterUrl($url);
	}

	// Copy URL
	public function getCopyUrl($parm = "")
	{
		if ($parm != "")
			$url = $this->keyUrl("t004_assetadd.php", $this->getUrlParm($parm));
		else
			$url = $this->keyUrl("t004_assetadd.php", $this->getUrlParm(Config("TABLE_SHOW_DETAIL") . "="));
		return $this->addMasterUrl($url);
	}

	// Inline copy URL
	public function getInlineCopyUrl()
	{
		$url = $this->keyUrl(CurrentPageName(), $this->getUrlParm("action=copy"));
		return $this->addMasterUrl($url);
	}

	// Delete URL
	public function getDeleteUrl()
	{
		return $this->keyUrl("t004_assetdelete.php", $this->getUrlParm());
	}

	// Add master url
	public function addMasterUrl($url)
	{
		return $url;
	}
	public function keyToJson($htmlEncode = FALSE)
	{
		$json = "";
		$json .= "id:" . JsonEncode($this->id->CurrentValue, "number");
		$json = "{" . $json . "}";
		if ($htmlEncode)
			$json = HtmlEncode($json);
		return $json;
	}

	// Add key value to URL
	public function keyUrl($url, $parm = "")
	{
		$url = $url . "?";
		if ($parm != "")
			$url .= $parm . "&";
		if ($this->id->CurrentValue != NULL) {
			$url .= "id=" . urlencode($this->id->CurrentValue);
		} else {
			return "javascript:ew.alert(ew.language.phrase('InvalidRecord'));";
		}
		return $url;
	}

	// Sort URL
	public function sortUrl(&$fld)
	{
		if ($this->CurrentAction || $this->isExport() ||
			in_array($fld->Type, [128, 204, 205])) { // Unsortable data type
				return "";
		} elseif ($fld->Sortable) {
			$urlParm = $this->getUrlParm("order=" . urlencode($fld->Name) . "&amp;ordertype=" . $fld->reverseSort());
			return $this->addMasterUrl(CurrentPageName() . "?" . $urlParm);
		} else {
			return "";
		}
	}

	// Get record keys from Post/Get/Session
	public function getRecordKeys()
	{
		$arKeys = [];
		$arKey = [];
		if (Param("key_m") !== NULL) {
			$arKeys = Param("key_m");
			$cnt = count($arKeys);
		} else {
			if (Param("id") !== NULL)
				$arKeys[] = Param("id");
			elseif (IsApi() && Key(0) !== NULL)
				$arKeys[] = Key(0);
			elseif (IsApi() && Route(2) !== NULL)
				$arKeys[] = Route(2);
			else
				$arKeys = NULL; // Do not setup

			//return $arKeys; // Do not return yet, so the values will also be checked by the following code
		}

		// Check keys
		$ar = [];
		if (is_array($arKeys)) {
			foreach ($arKeys as $key) {
				if (!is_numeric($key))
					continue;
				$ar[] = $key;
			}
		}
		return $ar;
	}

	// Get filter from record keys
	public function getFilterFromRecordKeys($setCurrent = TRUE)
	{
		$arKeys = $this->getRecordKeys();
		$keyFilter = "";
		foreach ($arKeys as $key) {
			if ($keyFilter != "") $keyFilter .= " OR ";
			if ($setCurrent)
				$this->id->CurrentValue = $key;
			else
				$this->id->OldValue = $key;
			$keyFilter .= "(" . $this->getRecordFilter() . ")";
		}
		return $keyFilter;
	}

	// Load rows based on filter
	public function &loadRs($filter)
	{

		// Set up filter (WHERE Clause)
		$sql = $this->getSql($filter);
		$conn = $this->getConnection();
		$rs = $conn->execute($sql);
		return $rs;
	}

	// Load row values from recordset
	public function loadListRowValues(&$rs)
	{
		$this->id->setDbValue($rs->fields('id'));
		$this->property_id->setDbValue($rs->fields('property_id'));
		$this->group_id->setDbValue($rs->fields('group_id'));
		$this->type_id->setDbValue($rs->fields('type_id'));
		$this->Code->setDbValue($rs->fields('Code'));
		$this->Description->setDbValue($rs->fields('Description'));
		$this->brand_id->setDbValue($rs->fields('brand_id'));
		$this->signature_id->setDbValue($rs->fields('signature_id'));
		$this->department_id->setDbValue($rs->fields('department_id'));
		$this->location_id->setDbValue($rs->fields('location_id'));
		$this->Qty->setDbValue($rs->fields('Qty'));
		$this->Variance->setDbValue($rs->fields('Variance'));
		$this->cond_id->setDbValue($rs->fields('cond_id'));
		$this->Remarks->setDbValue($rs->fields('Remarks'));
		$this->ProcurementDate->setDbValue($rs->fields('ProcurementDate'));
		$this->ProcurementCurrentCost->setDbValue($rs->fields('ProcurementCurrentCost'));
		$this->PeriodBegin->setDbValue($rs->fields('PeriodBegin'));
		$this->PeriodEnd->setDbValue($rs->fields('PeriodEnd'));
	}

	// Render list row values
	public function renderListRow()
	{
		global $Security, $CurrentLanguage, $Language;

		// Call Row Rendering event
		$this->Row_Rendering();

		// Common render codes
		// id
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
		// id

		$this->id->ViewValue = $this->id->CurrentValue;
		$this->id->ViewCustomAttributes = "";

		// property_id
		$curVal = strval($this->property_id->CurrentValue);
		if ($curVal != "") {
			$this->property_id->ViewValue = $this->property_id->lookupCacheOption($curVal);
			if ($this->property_id->ViewValue === NULL) { // Lookup from database
				$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
				$sqlWrk = $this->property_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
				$rswrk = Conn()->execute($sqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$arwrk = [];
					$arwrk[1] = $rswrk->fields('df');
					$this->property_id->ViewValue = $this->property_id->displayValue($arwrk);
					$rswrk->Close();
				} else {
					$this->property_id->ViewValue = $this->property_id->CurrentValue;
				}
			}
		} else {
			$this->property_id->ViewValue = NULL;
		}
		$this->property_id->ViewCustomAttributes = "";

		// group_id
		$this->group_id->ViewValue = $this->group_id->CurrentValue;
		$curVal = strval($this->group_id->CurrentValue);
		if ($curVal != "") {
			$this->group_id->ViewValue = $this->group_id->lookupCacheOption($curVal);
			if ($this->group_id->ViewValue === NULL) { // Lookup from database
				$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
				$sqlWrk = $this->group_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
				$rswrk = Conn()->execute($sqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$arwrk = [];
					$arwrk[1] = $rswrk->fields('df');
					$this->group_id->ViewValue = $this->group_id->displayValue($arwrk);
					$rswrk->Close();
				} else {
					$this->group_id->ViewValue = $this->group_id->CurrentValue;
				}
			}
		} else {
			$this->group_id->ViewValue = NULL;
		}
		$this->group_id->ViewCustomAttributes = "";

		// type_id
		$curVal = strval($this->type_id->CurrentValue);
		if ($curVal != "") {
			$this->type_id->ViewValue = $this->type_id->lookupCacheOption($curVal);
			if ($this->type_id->ViewValue === NULL) { // Lookup from database
				$filterWrk = "`id`" . SearchString("=", $curVal, DATATYPE_NUMBER, "");
				$sqlWrk = $this->type_id->Lookup->getSql(FALSE, $filterWrk, '', $this);
				$rswrk = Conn()->execute($sqlWrk);
				if ($rswrk && !$rswrk->EOF) { // Lookup values found
					$arwrk = [];
					$arwrk[1] = $rswrk->fields('df');
					$this->type_id->ViewValue = $this->type_id->displayValue($arwrk);
					$rswrk->Close();
				} else {
					$this->type_id->ViewValue = $this->type_id->CurrentValue;
				}
			}
		} else {
			$this->type_id->ViewValue = NULL;
		}
		$this->type_id->ViewCustomAttributes = "";

		// Code
		$this->Code->ViewValue = $this->Code->CurrentValue;
		$this->Code->ViewCustomAttributes = "";

		// Description
		$this->Description->ViewValue = $this->Description->CurrentValue;
		$this->Description->ViewCustomAttributes = "";

		// brand_id
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
		$this->brand_id->ViewCustomAttributes = "";

		// signature_id
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
		$this->signature_id->ViewCustomAttributes = "";

		// department_id
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
		$this->department_id->ViewCustomAttributes = "";

		// location_id
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
		$this->location_id->ViewCustomAttributes = "";

		// Qty
		$this->Qty->ViewValue = $this->Qty->CurrentValue;
		$this->Qty->ViewValue = FormatNumber($this->Qty->ViewValue, 2, -2, -2, -2);
		$this->Qty->CellCssStyle .= "text-align: right;";
		$this->Qty->ViewCustomAttributes = "";

		// Variance
		$this->Variance->ViewValue = $this->Variance->CurrentValue;
		$this->Variance->ViewValue = FormatNumber($this->Variance->ViewValue, 2, -2, -2, -2);
		$this->Variance->ViewCustomAttributes = "";

		// cond_id
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
		$this->cond_id->ViewCustomAttributes = "";

		// Remarks
		$this->Remarks->ViewValue = $this->Remarks->CurrentValue;
		$this->Remarks->ViewCustomAttributes = "";

		// ProcurementDate
		$this->ProcurementDate->ViewValue = $this->ProcurementDate->CurrentValue;
		$this->ProcurementDate->ViewValue = FormatDateTime($this->ProcurementDate->ViewValue, 7);
		$this->ProcurementDate->ViewCustomAttributes = "";

		// ProcurementCurrentCost
		$this->ProcurementCurrentCost->ViewValue = $this->ProcurementCurrentCost->CurrentValue;
		$this->ProcurementCurrentCost->ViewValue = FormatNumber($this->ProcurementCurrentCost->ViewValue, 2, -2, -2, -2);
		$this->ProcurementCurrentCost->CellCssStyle .= "text-align: right;";
		$this->ProcurementCurrentCost->ViewCustomAttributes = "";

		// PeriodBegin
		$this->PeriodBegin->ViewValue = $this->PeriodBegin->CurrentValue;
		$this->PeriodBegin->ViewValue = FormatDateTime($this->PeriodBegin->ViewValue, 7);
		$this->PeriodBegin->ViewCustomAttributes = "";

		// PeriodEnd
		$this->PeriodEnd->ViewValue = $this->PeriodEnd->CurrentValue;
		$this->PeriodEnd->ViewValue = FormatDateTime($this->PeriodEnd->ViewValue, 7);
		$this->PeriodEnd->ViewCustomAttributes = "";

		// id
		$this->id->LinkCustomAttributes = "";
		$this->id->HrefValue = "";
		$this->id->TooltipValue = "";

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

		// Call Row Rendered event
		$this->Row_Rendered();

		// Save data for Custom Template
		$this->Rows[] = $this->customTemplateFieldValues();
	}

	// Render edit row values
	public function renderEditRow()
	{
		global $Security, $CurrentLanguage, $Language;

		// Call Row Rendering event
		$this->Row_Rendering();

		// id
		$this->id->EditAttrs["class"] = "form-control";
		$this->id->EditCustomAttributes = "";
		$this->id->EditValue = $this->id->CurrentValue;
		$this->id->ViewCustomAttributes = "";

		// property_id
		$this->property_id->EditAttrs["class"] = "form-control";
		$this->property_id->EditCustomAttributes = "";

		// group_id
		$this->group_id->EditAttrs["class"] = "form-control";
		$this->group_id->EditCustomAttributes = "";
		$this->group_id->EditValue = $this->group_id->CurrentValue;
		$this->group_id->PlaceHolder = RemoveHtml($this->group_id->caption());

		// type_id
		$this->type_id->EditAttrs["class"] = "form-control";
		$this->type_id->EditCustomAttributes = "";

		// Code
		$this->Code->EditAttrs["class"] = "form-control";
		$this->Code->EditCustomAttributes = "";
		if (!$this->Code->Raw)
			$this->Code->CurrentValue = HtmlDecode($this->Code->CurrentValue);
		$this->Code->EditValue = $this->Code->CurrentValue;
		$this->Code->PlaceHolder = RemoveHtml($this->Code->caption());

		// Description
		$this->Description->EditAttrs["class"] = "form-control";
		$this->Description->EditCustomAttributes = "";
		if (!$this->Description->Raw)
			$this->Description->CurrentValue = HtmlDecode($this->Description->CurrentValue);
		$this->Description->EditValue = $this->Description->CurrentValue;
		$this->Description->PlaceHolder = RemoveHtml($this->Description->caption());

		// brand_id
		$this->brand_id->EditAttrs["class"] = "form-control";
		$this->brand_id->EditCustomAttributes = "";

		// signature_id
		$this->signature_id->EditAttrs["class"] = "form-control";
		$this->signature_id->EditCustomAttributes = "";

		// department_id
		$this->department_id->EditAttrs["class"] = "form-control";
		$this->department_id->EditCustomAttributes = "";

		// location_id
		$this->location_id->EditAttrs["class"] = "form-control";
		$this->location_id->EditCustomAttributes = "";

		// Qty
		$this->Qty->EditAttrs["class"] = "form-control";
		$this->Qty->EditCustomAttributes = "";
		$this->Qty->EditValue = $this->Qty->CurrentValue;
		$this->Qty->PlaceHolder = RemoveHtml($this->Qty->caption());
		if (strval($this->Qty->EditValue) != "" && is_numeric($this->Qty->EditValue))
			$this->Qty->EditValue = FormatNumber($this->Qty->EditValue, -2, -2, -2, -2);
		

		// Variance
		$this->Variance->EditAttrs["class"] = "form-control";
		$this->Variance->EditCustomAttributes = "";
		$this->Variance->EditValue = $this->Variance->CurrentValue;
		$this->Variance->PlaceHolder = RemoveHtml($this->Variance->caption());
		if (strval($this->Variance->EditValue) != "" && is_numeric($this->Variance->EditValue))
			$this->Variance->EditValue = FormatNumber($this->Variance->EditValue, -2, -2, -2, -2);
		

		// cond_id
		$this->cond_id->EditAttrs["class"] = "form-control";
		$this->cond_id->EditCustomAttributes = "";

		// Remarks
		$this->Remarks->EditAttrs["class"] = "form-control";
		$this->Remarks->EditCustomAttributes = "";
		$this->Remarks->EditValue = $this->Remarks->CurrentValue;
		$this->Remarks->PlaceHolder = RemoveHtml($this->Remarks->caption());

		// ProcurementDate
		$this->ProcurementDate->EditAttrs["class"] = "form-control";
		$this->ProcurementDate->EditCustomAttributes = "";
		$this->ProcurementDate->EditValue = FormatDateTime($this->ProcurementDate->CurrentValue, 7);
		$this->ProcurementDate->PlaceHolder = RemoveHtml($this->ProcurementDate->caption());

		// ProcurementCurrentCost
		$this->ProcurementCurrentCost->EditAttrs["class"] = "form-control";
		$this->ProcurementCurrentCost->EditCustomAttributes = "";
		$this->ProcurementCurrentCost->EditValue = $this->ProcurementCurrentCost->CurrentValue;
		$this->ProcurementCurrentCost->PlaceHolder = RemoveHtml($this->ProcurementCurrentCost->caption());
		if (strval($this->ProcurementCurrentCost->EditValue) != "" && is_numeric($this->ProcurementCurrentCost->EditValue))
			$this->ProcurementCurrentCost->EditValue = FormatNumber($this->ProcurementCurrentCost->EditValue, -2, -2, -2, -2);
		

		// PeriodBegin
		$this->PeriodBegin->EditAttrs["class"] = "form-control";
		$this->PeriodBegin->EditCustomAttributes = "";
		$this->PeriodBegin->EditValue = $this->PeriodBegin->CurrentValue;
		$this->PeriodBegin->EditValue = FormatDateTime($this->PeriodBegin->EditValue, 7);
		$this->PeriodBegin->ViewCustomAttributes = "";

		// PeriodEnd
		$this->PeriodEnd->EditAttrs["class"] = "form-control";
		$this->PeriodEnd->EditCustomAttributes = "";
		$this->PeriodEnd->EditValue = $this->PeriodEnd->CurrentValue;
		$this->PeriodEnd->EditValue = FormatDateTime($this->PeriodEnd->EditValue, 7);
		$this->PeriodEnd->ViewCustomAttributes = "";

		// Call Row Rendered event
		$this->Row_Rendered();
	}

	// Aggregate list row values
	public function aggregateListRowValues()
	{
	}

	// Aggregate list row (for rendering)
	public function aggregateListRow()
	{

		// Call Row Rendered event
		$this->Row_Rendered();
	}

	// Export data in HTML/CSV/Word/Excel/Email/PDF format
	public function exportDocument($doc, $recordset, $startRec = 1, $stopRec = 1, $exportPageType = "")
	{
		if (!$recordset || !$doc)
			return;
		if (!$doc->ExportCustom) {

			// Write header
			$doc->exportTableHeader();
			if ($doc->Horizontal) { // Horizontal format, write header
				$doc->beginExportRow();
				if ($exportPageType == "view") {
					$doc->exportCaption($this->property_id);
					$doc->exportCaption($this->group_id);
					$doc->exportCaption($this->type_id);
					$doc->exportCaption($this->Code);
					$doc->exportCaption($this->Description);
					$doc->exportCaption($this->brand_id);
					$doc->exportCaption($this->signature_id);
					$doc->exportCaption($this->department_id);
					$doc->exportCaption($this->location_id);
					$doc->exportCaption($this->Qty);
					$doc->exportCaption($this->Variance);
					$doc->exportCaption($this->cond_id);
					$doc->exportCaption($this->Remarks);
					$doc->exportCaption($this->ProcurementDate);
					$doc->exportCaption($this->ProcurementCurrentCost);
					$doc->exportCaption($this->PeriodBegin);
					$doc->exportCaption($this->PeriodEnd);
				} else {
					$doc->exportCaption($this->id);
					$doc->exportCaption($this->property_id);
					$doc->exportCaption($this->group_id);
					$doc->exportCaption($this->type_id);
					$doc->exportCaption($this->Code);
					$doc->exportCaption($this->Description);
					$doc->exportCaption($this->brand_id);
					$doc->exportCaption($this->signature_id);
					$doc->exportCaption($this->department_id);
					$doc->exportCaption($this->location_id);
					$doc->exportCaption($this->Qty);
					$doc->exportCaption($this->Variance);
					$doc->exportCaption($this->cond_id);
					$doc->exportCaption($this->Remarks);
					$doc->exportCaption($this->ProcurementDate);
					$doc->exportCaption($this->ProcurementCurrentCost);
					$doc->exportCaption($this->PeriodBegin);
					$doc->exportCaption($this->PeriodEnd);
				}
				$doc->endExportRow();
			}
		}

		// Move to first record
		$recCnt = $startRec - 1;
		if (!$recordset->EOF) {
			$recordset->moveFirst();
			if ($startRec > 1)
				$recordset->move($startRec - 1);
		}
		while (!$recordset->EOF && $recCnt < $stopRec) {
			$recCnt++;
			if ($recCnt >= $startRec) {
				$rowCnt = $recCnt - $startRec + 1;

				// Page break
				if ($this->ExportPageBreakCount > 0) {
					if ($rowCnt > 1 && ($rowCnt - 1) % $this->ExportPageBreakCount == 0)
						$doc->exportPageBreak();
				}
				$this->loadListRowValues($recordset);

				// Render row
				$this->RowType = ROWTYPE_VIEW; // Render view
				$this->resetAttributes();
				$this->renderListRow();
				if (!$doc->ExportCustom) {
					$doc->beginExportRow($rowCnt); // Allow CSS styles if enabled
					if ($exportPageType == "view") {
						$doc->exportField($this->property_id);
						$doc->exportField($this->group_id);
						$doc->exportField($this->type_id);
						$doc->exportField($this->Code);
						$doc->exportField($this->Description);
						$doc->exportField($this->brand_id);
						$doc->exportField($this->signature_id);
						$doc->exportField($this->department_id);
						$doc->exportField($this->location_id);
						$doc->exportField($this->Qty);
						$doc->exportField($this->Variance);
						$doc->exportField($this->cond_id);
						$doc->exportField($this->Remarks);
						$doc->exportField($this->ProcurementDate);
						$doc->exportField($this->ProcurementCurrentCost);
						$doc->exportField($this->PeriodBegin);
						$doc->exportField($this->PeriodEnd);
					} else {
						$doc->exportField($this->id);
						$doc->exportField($this->property_id);
						$doc->exportField($this->group_id);
						$doc->exportField($this->type_id);
						$doc->exportField($this->Code);
						$doc->exportField($this->Description);
						$doc->exportField($this->brand_id);
						$doc->exportField($this->signature_id);
						$doc->exportField($this->department_id);
						$doc->exportField($this->location_id);
						$doc->exportField($this->Qty);
						$doc->exportField($this->Variance);
						$doc->exportField($this->cond_id);
						$doc->exportField($this->Remarks);
						$doc->exportField($this->ProcurementDate);
						$doc->exportField($this->ProcurementCurrentCost);
						$doc->exportField($this->PeriodBegin);
						$doc->exportField($this->PeriodEnd);
					}
					$doc->endExportRow($rowCnt);
				}
			}

			// Call Row Export server event
			if ($doc->ExportCustom)
				$this->Row_Export($recordset->fields);
			$recordset->moveNext();
		}
		if (!$doc->ExportCustom) {
			$doc->exportTableFooter();
		}
	}

	// Get file data
	public function getFileData($fldparm, $key, $resize, $width = 0, $height = 0)
	{

		// No binary fields
		return FALSE;
	}

	// Write Audit Trail start/end for grid update
	public function writeAuditTrailDummy($typ)
	{
		$table = 't004_asset';
		$usr = CurrentUserID();
		WriteAuditTrail("log", DbCurrentDateTime(), ScriptName(), $usr, $typ, $table, "", "", "", "");
	}

	// Write Audit Trail (add page)
	public function writeAuditTrailOnAdd(&$rs)
	{
		global $Language;
		if (!$this->AuditTrailOnAdd)
			return;
		$table = 't004_asset';

		// Get key value
		$key = "";
		if ($key != "")
			$key .= Config("COMPOSITE_KEY_SEPARATOR");
		$key .= $rs['id'];

		// Write Audit Trail
		$dt = DbCurrentDateTime();
		$id = ScriptName();
		$usr = CurrentUserID();
		foreach (array_keys($rs) as $fldname) {
			if (array_key_exists($fldname, $this->fields) && $this->fields[$fldname]->DataType != DATATYPE_BLOB) { // Ignore BLOB fields
				if ($this->fields[$fldname]->HtmlTag == "PASSWORD") {
					$newvalue = $Language->phrase("PasswordMask"); // Password Field
				} elseif ($this->fields[$fldname]->DataType == DATATYPE_MEMO) {
					if (Config("AUDIT_TRAIL_TO_DATABASE"))
						$newvalue = $rs[$fldname];
					else
						$newvalue = "[MEMO]"; // Memo Field
				} elseif ($this->fields[$fldname]->DataType == DATATYPE_XML) {
					$newvalue = "[XML]"; // XML Field
				} else {
					$newvalue = $rs[$fldname];
				}
				WriteAuditTrail("log", $dt, $id, $usr, "A", $table, $fldname, $key, "", $newvalue);
			}
		}
	}

	// Write Audit Trail (edit page)
	public function writeAuditTrailOnEdit(&$rsold, &$rsnew)
	{
		global $Language;
		if (!$this->AuditTrailOnEdit)
			return;
		$table = 't004_asset';

		// Get key value
		$key = "";
		if ($key != "")
			$key .= Config("COMPOSITE_KEY_SEPARATOR");
		$key .= $rsold['id'];

		// Write Audit Trail
		$dt = DbCurrentDateTime();
		$id = ScriptName();
		$usr = CurrentUserID();
		foreach (array_keys($rsnew) as $fldname) {
			if (array_key_exists($fldname, $this->fields) && array_key_exists($fldname, $rsold) && $this->fields[$fldname]->DataType != DATATYPE_BLOB) { // Ignore BLOB fields
				if ($this->fields[$fldname]->DataType == DATATYPE_DATE) { // DateTime field
					$modified = (FormatDateTime($rsold[$fldname], 0) != FormatDateTime($rsnew[$fldname], 0));
				} else {
					$modified = !CompareValue($rsold[$fldname], $rsnew[$fldname]);
				}
				if ($modified) {
					if ($this->fields[$fldname]->HtmlTag == "PASSWORD") { // Password Field
						$oldvalue = $Language->phrase("PasswordMask");
						$newvalue = $Language->phrase("PasswordMask");
					} elseif ($this->fields[$fldname]->DataType == DATATYPE_MEMO) { // Memo field
						if (Config("AUDIT_TRAIL_TO_DATABASE")) {
							$oldvalue = $rsold[$fldname];
							$newvalue = $rsnew[$fldname];
						} else {
							$oldvalue = "[MEMO]";
							$newvalue = "[MEMO]";
						}
					} elseif ($this->fields[$fldname]->DataType == DATATYPE_XML) { // XML field
						$oldvalue = "[XML]";
						$newvalue = "[XML]";
					} else {
						$oldvalue = $rsold[$fldname];
						$newvalue = $rsnew[$fldname];
					}
					WriteAuditTrail("log", $dt, $id, $usr, "U", $table, $fldname, $key, $oldvalue, $newvalue);
				}
			}
		}
	}

	// Write Audit Trail (delete page)
	public function writeAuditTrailOnDelete(&$rs)
	{
		global $Language;
		if (!$this->AuditTrailOnDelete)
			return;
		$table = 't004_asset';

		// Get key value
		$key = "";
		if ($key != "")
			$key .= Config("COMPOSITE_KEY_SEPARATOR");
		$key .= $rs['id'];

		// Write Audit Trail
		$dt = DbCurrentDateTime();
		$id = ScriptName();
		$curUser = CurrentUserID();
		foreach (array_keys($rs) as $fldname) {
			if (array_key_exists($fldname, $this->fields) && $this->fields[$fldname]->DataType != DATATYPE_BLOB) { // Ignore BLOB fields
				if ($this->fields[$fldname]->HtmlTag == "PASSWORD") {
					$oldvalue = $Language->phrase("PasswordMask"); // Password Field
				} elseif ($this->fields[$fldname]->DataType == DATATYPE_MEMO) {
					if (Config("AUDIT_TRAIL_TO_DATABASE"))
						$oldvalue = $rs[$fldname];
					else
						$oldvalue = "[MEMO]"; // Memo field
				} elseif ($this->fields[$fldname]->DataType == DATATYPE_XML) {
					$oldvalue = "[XML]"; // XML field
				} else {
					$oldvalue = $rs[$fldname];
				}
				WriteAuditTrail("log", $dt, $id, $curUser, "D", $table, $fldname, $key, $oldvalue, "");
			}
		}
	}

	// Table level events
	// Recordset Selecting event
	function Recordset_Selecting(&$filter) {

		// Enter your code here
	}

	// Recordset Selected event
	function Recordset_Selected(&$rs) {

		//echo "Recordset Selected";
	}

	// Recordset Search Validated event
	function Recordset_SearchValidated() {

		// Example:
		//$this->MyField1->AdvancedSearch->SearchValue = "your search criteria"; // Search value

	}

	// Recordset Searching event
	function Recordset_Searching(&$filter) {

		// Enter your code here
	}

	// Row_Selecting event
	function Row_Selecting(&$filter) {

		// Enter your code here
	}

	// Row Selected event
	function Row_Selected(&$rs) {

		//echo "Row Selected";
	}

	// Row Inserting event
	function Row_Inserting($rsold, &$rsnew) {

		// Enter your code here
		// To cancel, set return value to FALSE
		// cari nilai group_id berdasarkan $rsnew["type_id"]

		$rsnew["group_id"] = fCariGroupID($rsnew["type_id"]);

		// Create Code
		$rsnew["Code"] = fCreateCode(
			$rsnew["property_id"],
			$rsnew["group_id"],
			$rsnew["type_id"],
			$rsnew["ProcurementDate"]
		);

		// ambil nilai economical life time
		// ambil nilai awal periode
		// ambil nilai akhir periode

		list($rsnew["PeriodBegin"], $rsnew["PeriodEnd"]) = fCariAwalAkhirPeriode($rsnew["group_id"], $rsnew["ProcurementDate"]);
		return TRUE;
	}

	// Row Inserted event
	function Row_Inserted($rsold, &$rsnew) {

		//echo "Row Inserted"
		// buat perincian data penyusutan

		fCreatePenyusutan($rsnew);
	}

	// Row Updating event
	function Row_Updating($rsold, &$rsnew) {

		// Enter your code here
		// To cancel, set return value to FALSE
		// cari nilai group_id berdasarkan $rsnew["type_id"]

		$rsnew["group_id"] = fCariGroupID($rsnew["type_id"]);

		// Update Code
		$rsnew["Code"] = fUpdateCode(
			$rsnew["property_id"],
			$rsnew["group_id"],
			$rsnew["type_id"],
			$rsnew["ProcurementDate"],
			$rsold["id"]
		);

		// ambil nilai economical life time
		// ambil nilai awal periode
		// ambil nilai akhir periode

		list($rsnew["PeriodBegin"], $rsnew["PeriodEnd"]) = fCariAwalAkhirPeriode($rsnew["group_id"], $rsnew["ProcurementDate"]);
		return TRUE;
	}

	// Row Updated event
	function Row_Updated($rsold, &$rsnew) {

		//echo "Row Updated";
		fDeletePenyusutan($rsold["id"]);
		$rsnew["id"] = $rsold["id"];
		fCreatePenyusutan($rsnew);
	}

	// Row Update Conflict event
	function Row_UpdateConflict($rsold, &$rsnew) {

		// Enter your code here
		// To ignore conflict, set return value to FALSE

		return TRUE;
	}

	// Grid Inserting event
	function Grid_Inserting() {

		// Enter your code here
		// To reject grid insert, set return value to FALSE

		return TRUE;
	}

	// Grid Inserted event
	function Grid_Inserted($rsnew) {

		//echo "Grid Inserted";
	}

	// Grid Updating event
	function Grid_Updating($rsold) {

		// Enter your code here
		// To reject grid update, set return value to FALSE

		return TRUE;
	}

	// Grid Updated event
	function Grid_Updated($rsold, $rsnew) {

		//echo "Grid Updated";
	}

	// Row Deleting event
	function Row_Deleting(&$rs) {

		// Enter your code here
		// To cancel, set return value to False

		return TRUE;
	}

	// Row Deleted event
	function Row_Deleted(&$rs) {

		//echo "Row Deleted";
	}

	// Email Sending event
	function Email_Sending($email, &$args) {

		//var_dump($email); var_dump($args); exit();
		return TRUE;
	}

	// Lookup Selecting event
	function Lookup_Selecting($fld, &$filter) {

		//var_dump($fld->Name, $fld->Lookup, $filter); // Uncomment to view the filter
		// Enter your code here

	}

	// Row Rendering event
	function Row_Rendering() {

		// Enter your code here
	}

	// Row Rendered event
	function Row_Rendered() {

		// To view properties of field class, use:
		//var_dump($this-><FieldName>);

	}

	// User ID Filtering event
	function UserID_Filtering(&$filter) {

		// Enter your code here
	}
}
?>