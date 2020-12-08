<?php namespace PHPMaker2020\p_simasset1; ?>
<?php

/**
 * Table class for r001_asset
 */
class r001_asset extends ReportTable
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
	public $ShowGroupHeaderAsRow = TRUE;
	public $ShowCompactSummaryFooter = TRUE;

	// Export
	public $ExportDoc;

	// Fields
	public $id;
	public $property_id;
	public $group_id;
	public $Code;
	public $Description;
	public $brand_id;
	public $type_id;
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
		$this->TableVar = 'r001_asset';
		$this->TableName = 'r001_asset';
		$this->TableType = 'REPORT';

		// Update Table
		$this->UpdateTable = "`t004_asset`";
		$this->ReportSourceTable = 't004_asset'; // Report source table
		$this->Dbid = 'DB';
		$this->ExportAll = TRUE;
		$this->ExportPageBreakCount = 0; // Page break per every n record (report only)
		$this->ExportPageOrientation = "portrait"; // Page orientation (PDF only)
		$this->ExportPageSize = "a4"; // Page size (PDF only)
		$this->ExportExcelPageOrientation = ""; // Page orientation (PhpSpreadsheet only)
		$this->ExportExcelPageSize = ""; // Page size (PhpSpreadsheet only)
		$this->ExportWordPageOrientation = "portrait"; // Page orientation (PHPWord only)
		$this->ExportWordColumnWidth = NULL; // Cell width (PHPWord only)
		$this->UserIDAllowSecurity = Config("DEFAULT_USER_ID_ALLOW_SECURITY"); // Default User ID allowed permissions

		// id
		$this->id = new ReportField('r001_asset', 'r001_asset', 'x_id', 'id', '`id`', '`id`', 3, 11, -1, FALSE, '`id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'NO');
		$this->id->IsAutoIncrement = TRUE; // Autoincrement field
		$this->id->IsPrimaryKey = TRUE; // Primary key field
		$this->id->Sortable = TRUE; // Allow sort
		$this->id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->id->SourceTableVar = 't004_asset';
		$this->fields['id'] = &$this->id;

		// property_id
		$this->property_id = new ReportField('r001_asset', 'r001_asset', 'x_property_id', 'property_id', '`property_id`', '`property_id`', 3, 11, -1, FALSE, '`property_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->property_id->GroupingFieldId = 1;
		$this->property_id->ShowGroupHeaderAsRow = $this->ShowGroupHeaderAsRow;
		$this->property_id->ShowCompactSummaryFooter = $this->ShowCompactSummaryFooter;
		$this->property_id->GroupByType = "";
		$this->property_id->GroupInterval = "0";
		$this->property_id->GroupSql = "";
		$this->property_id->Nullable = FALSE; // NOT NULL field
		$this->property_id->Required = TRUE; // Required field
		$this->property_id->Sortable = TRUE; // Allow sort
		$this->property_id->Lookup = new Lookup('property_id', 't001_property', FALSE, 'id', ["Property","","",""], [], [], [], [], [], [], '', '');
		$this->property_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->property_id->SourceTableVar = 't004_asset';
		$this->fields['property_id'] = &$this->property_id;

		// group_id
		$this->group_id = new ReportField('r001_asset', 'r001_asset', 'x_group_id', 'group_id', '`group_id`', '`group_id`', 3, 11, -1, FALSE, '`group_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->group_id->GroupingFieldId = 2;
		$this->group_id->ShowGroupHeaderAsRow = $this->ShowGroupHeaderAsRow;
		$this->group_id->ShowCompactSummaryFooter = $this->ShowCompactSummaryFooter;
		$this->group_id->GroupByType = "";
		$this->group_id->GroupInterval = "0";
		$this->group_id->GroupSql = "";
		$this->group_id->Nullable = FALSE; // NOT NULL field
		$this->group_id->Required = TRUE; // Required field
		$this->group_id->Sortable = TRUE; // Allow sort
		$this->group_id->Lookup = new Lookup('group_id', 't005_assetgroup', FALSE, 'id', ["Description","","",""], [], [], [], [], [], [], '', '');
		$this->group_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->group_id->SourceTableVar = 't004_asset';
		$this->fields['group_id'] = &$this->group_id;

		// Code
		$this->Code = new ReportField('r001_asset', 'r001_asset', 'x_Code', 'Code', '`Code`', '`Code`', 200, 25, -1, FALSE, '`Code`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->Code->Nullable = FALSE; // NOT NULL field
		$this->Code->Required = TRUE; // Required field
		$this->Code->Sortable = TRUE; // Allow sort
		$this->Code->SourceTableVar = 't004_asset';
		$this->fields['Code'] = &$this->Code;

		// Description
		$this->Description = new ReportField('r001_asset', 'r001_asset', 'x_Description', 'Description', '`Description`', '`Description`', 200, 255, -1, FALSE, '`Description`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->Description->Nullable = FALSE; // NOT NULL field
		$this->Description->Required = TRUE; // Required field
		$this->Description->Sortable = TRUE; // Allow sort
		$this->Description->SourceTableVar = 't004_asset';
		$this->fields['Description'] = &$this->Description;

		// brand_id
		$this->brand_id = new ReportField('r001_asset', 'r001_asset', 'x_brand_id', 'brand_id', '`brand_id`', '`brand_id`', 3, 11, -1, FALSE, '`brand_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->brand_id->Nullable = FALSE; // NOT NULL field
		$this->brand_id->Required = TRUE; // Required field
		$this->brand_id->Sortable = TRUE; // Allow sort
		$this->brand_id->Lookup = new Lookup('brand_id', 't008_brand', FALSE, 'id', ["Brand","","",""], [], [], [], [], [], [], '', '');
		$this->brand_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->brand_id->SourceTableVar = 't004_asset';
		$this->fields['brand_id'] = &$this->brand_id;

		// type_id
		$this->type_id = new ReportField('r001_asset', 'r001_asset', 'x_type_id', 'type_id', '`type_id`', '`type_id`', 3, 11, -1, FALSE, '`type_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->type_id->GroupingFieldId = 3;
		$this->type_id->ShowGroupHeaderAsRow = $this->ShowGroupHeaderAsRow;
		$this->type_id->ShowCompactSummaryFooter = $this->ShowCompactSummaryFooter;
		$this->type_id->GroupByType = "";
		$this->type_id->GroupInterval = "0";
		$this->type_id->GroupSql = "";
		$this->type_id->Nullable = FALSE; // NOT NULL field
		$this->type_id->Required = TRUE; // Required field
		$this->type_id->Sortable = TRUE; // Allow sort
		$this->type_id->Lookup = new Lookup('type_id', 't007_assettype', FALSE, 'id', ["Description","","",""], [], [], [], [], [], [], '', '');
		$this->type_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->type_id->SourceTableVar = 't004_asset';
		$this->fields['type_id'] = &$this->type_id;

		// signature_id
		$this->signature_id = new ReportField('r001_asset', 'r001_asset', 'x_signature_id', 'signature_id', '`signature_id`', '`signature_id`', 3, 11, -1, FALSE, '`signature_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->signature_id->Nullable = FALSE; // NOT NULL field
		$this->signature_id->Required = TRUE; // Required field
		$this->signature_id->Sortable = TRUE; // Allow sort
		$this->signature_id->Lookup = new Lookup('signature_id', 't003_signature', FALSE, 'id', ["Signature","","",""], [], [], [], [], [], [], '', '');
		$this->signature_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->signature_id->SourceTableVar = 't004_asset';
		$this->fields['signature_id'] = &$this->signature_id;

		// department_id
		$this->department_id = new ReportField('r001_asset', 'r001_asset', 'x_department_id', 'department_id', '`department_id`', '`department_id`', 3, 11, -1, FALSE, '`department_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->department_id->Nullable = FALSE; // NOT NULL field
		$this->department_id->Required = TRUE; // Required field
		$this->department_id->Sortable = TRUE; // Allow sort
		$this->department_id->Lookup = new Lookup('department_id', 't002_department', FALSE, 'id', ["Department","","",""], [], [], [], [], [], [], '', '');
		$this->department_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->department_id->SourceTableVar = 't004_asset';
		$this->fields['department_id'] = &$this->department_id;

		// location_id
		$this->location_id = new ReportField('r001_asset', 'r001_asset', 'x_location_id', 'location_id', '`location_id`', '`location_id`', 3, 11, -1, FALSE, '`location_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->location_id->Nullable = FALSE; // NOT NULL field
		$this->location_id->Required = TRUE; // Required field
		$this->location_id->Sortable = TRUE; // Allow sort
		$this->location_id->Lookup = new Lookup('location_id', 't009_location', FALSE, 'id', ["Location","","",""], [], [], [], [], [], [], '', '');
		$this->location_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->location_id->SourceTableVar = 't004_asset';
		$this->fields['location_id'] = &$this->location_id;

		// Qty
		$this->Qty = new ReportField('r001_asset', 'r001_asset', 'x_Qty', 'Qty', '`Qty`', '`Qty`', 4, 14, -1, FALSE, '`Qty`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->Qty->Nullable = FALSE; // NOT NULL field
		$this->Qty->Required = TRUE; // Required field
		$this->Qty->Sortable = TRUE; // Allow sort
		$this->Qty->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->Qty->SourceTableVar = 't004_asset';
		$this->fields['Qty'] = &$this->Qty;

		// Variance
		$this->Variance = new ReportField('r001_asset', 'r001_asset', 'x_Variance', 'Variance', '`Variance`', '`Variance`', 4, 14, -1, FALSE, '`Variance`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->Variance->Nullable = FALSE; // NOT NULL field
		$this->Variance->Sortable = TRUE; // Allow sort
		$this->Variance->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->Variance->SourceTableVar = 't004_asset';
		$this->fields['Variance'] = &$this->Variance;

		// cond_id
		$this->cond_id = new ReportField('r001_asset', 'r001_asset', 'x_cond_id', 'cond_id', '`cond_id`', '`cond_id`', 3, 11, -1, FALSE, '`cond_id`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->cond_id->Nullable = FALSE; // NOT NULL field
		$this->cond_id->Required = TRUE; // Required field
		$this->cond_id->Sortable = TRUE; // Allow sort
		$this->cond_id->Lookup = new Lookup('cond_id', 't010_condition', FALSE, 'id', ["Status","","",""], [], [], [], [], [], [], '', '');
		$this->cond_id->DefaultErrorMessage = $Language->phrase("IncorrectInteger");
		$this->cond_id->SourceTableVar = 't004_asset';
		$this->fields['cond_id'] = &$this->cond_id;

		// Remarks
		$this->Remarks = new ReportField('r001_asset', 'r001_asset', 'x_Remarks', 'Remarks', '`Remarks`', '`Remarks`', 201, 65535, -1, FALSE, '`Remarks`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXTAREA');
		$this->Remarks->Sortable = TRUE; // Allow sort
		$this->Remarks->SourceTableVar = 't004_asset';
		$this->fields['Remarks'] = &$this->Remarks;

		// ProcurementDate
		$this->ProcurementDate = new ReportField('r001_asset', 'r001_asset', 'x_ProcurementDate', 'ProcurementDate', '`ProcurementDate`', CastDateFieldForLike("`ProcurementDate`", 7, "DB"), 133, 10, 7, FALSE, '`ProcurementDate`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->ProcurementDate->Nullable = FALSE; // NOT NULL field
		$this->ProcurementDate->Required = TRUE; // Required field
		$this->ProcurementDate->Sortable = TRUE; // Allow sort
		$this->ProcurementDate->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_SEPARATOR"], $Language->phrase("IncorrectDateDMY"));
		$this->ProcurementDate->SourceTableVar = 't004_asset';
		$this->fields['ProcurementDate'] = &$this->ProcurementDate;

		// ProcurementCurrentCost
		$this->ProcurementCurrentCost = new ReportField('r001_asset', 'r001_asset', 'x_ProcurementCurrentCost', 'ProcurementCurrentCost', '`ProcurementCurrentCost`', '`ProcurementCurrentCost`', 4, 17, -1, FALSE, '`ProcurementCurrentCost`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->ProcurementCurrentCost->Nullable = FALSE; // NOT NULL field
		$this->ProcurementCurrentCost->Required = TRUE; // Required field
		$this->ProcurementCurrentCost->Sortable = TRUE; // Allow sort
		$this->ProcurementCurrentCost->DefaultErrorMessage = $Language->phrase("IncorrectFloat");
		$this->ProcurementCurrentCost->SourceTableVar = 't004_asset';
		$this->fields['ProcurementCurrentCost'] = &$this->ProcurementCurrentCost;

		// PeriodBegin
		$this->PeriodBegin = new ReportField('r001_asset', 'r001_asset', 'x_PeriodBegin', 'PeriodBegin', '`PeriodBegin`', CastDateFieldForLike("`PeriodBegin`", 7, "DB"), 133, 10, 7, FALSE, '`PeriodBegin`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->PeriodBegin->Nullable = FALSE; // NOT NULL field
		$this->PeriodBegin->Required = TRUE; // Required field
		$this->PeriodBegin->Sortable = TRUE; // Allow sort
		$this->PeriodBegin->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_SEPARATOR"], $Language->phrase("IncorrectDateDMY"));
		$this->PeriodBegin->SourceTableVar = 't004_asset';
		$this->fields['PeriodBegin'] = &$this->PeriodBegin;

		// PeriodEnd
		$this->PeriodEnd = new ReportField('r001_asset', 'r001_asset', 'x_PeriodEnd', 'PeriodEnd', '`PeriodEnd`', CastDateFieldForLike("`PeriodEnd`", 7, "DB"), 133, 10, 7, FALSE, '`PeriodEnd`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->PeriodEnd->Nullable = FALSE; // NOT NULL field
		$this->PeriodEnd->Required = TRUE; // Required field
		$this->PeriodEnd->Sortable = TRUE; // Allow sort
		$this->PeriodEnd->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_SEPARATOR"], $Language->phrase("IncorrectDateDMY"));
		$this->PeriodEnd->SourceTableVar = 't004_asset';
		$this->fields['PeriodEnd'] = &$this->PeriodEnd;
	}

	// Field Visibility
	public function getFieldVisibility($fldParm)
	{
		global $Security;
		return $this->$fldParm->Visible; // Returns original value
	}

	// Multiple column sort
	protected function updateSort(&$fld, $ctrl)
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
			if ($fld->GroupingFieldId == 0) {
				if ($ctrl) {
					$orderBy = $this->getDetailOrderBy();
					if (strpos($orderBy, $sortField . " " . $lastSort) !== FALSE) {
						$orderBy = str_replace($sortField . " " . $lastSort, $sortField . " " . $thisSort, $orderBy);
					} else {
						if ($orderBy != "") $orderBy .= ", ";
						$orderBy .= $sortField . " " . $thisSort;
					}
					$this->setDetailOrderBy($orderBy); // Save to Session
				} else {
					$this->setDetailOrderBy($sortField . " " . $thisSort); // Save to Session
				}
			}
		} else {
			if ($fld->GroupingFieldId == 0 && !$ctrl) $fld->setSort("");
		}
	}

	// Get Sort SQL
	protected function sortSql()
	{
		$dtlSortSql = $this->getDetailOrderBy(); // Get ORDER BY for detail fields from session
		$argrps = [];
		foreach ($this->fields as $fld) {
			if ($fld->getSort() != "") {
				$fldsql = $fld->Expression;
				if ($fld->GroupingFieldId > 0) {
					if ($fld->GroupSql != "")
						$argrps[$fld->GroupingFieldId] = str_replace("%s", $fldsql, $fld->GroupSql) . " " . $fld->getSort();
					else
						$argrps[$fld->GroupingFieldId] = $fldsql . " " . $fld->getSort();
				}
			}
		}
		$sortSql = "";
		foreach ($argrps as $grp) {
			if ($sortSql != "") $sortSql .= ", ";
			$sortSql .= $grp;
		}
		if ($dtlSortSql != "") {
			if ($sortSql != "") $sortSql .= ", ";
			$sortSql .= $dtlSortSql;
		}
		return $sortSql;
	}

	// Table Level Group SQL
	private $_sqlFirstGroupField = "";
	private $_sqlSelectGroup = "";
	private $_sqlOrderByGroup = "";

	// First Group Field
	public function getSqlFirstGroupField($alias = FALSE)
	{
		if ($this->_sqlFirstGroupField != "")
			return $this->_sqlFirstGroupField;
		$firstGroupField = &$this->property_id;
		$expr = $firstGroupField->Expression;
		if ($firstGroupField->GroupSql != "") {
			$expr = str_replace("%s", $firstGroupField->Expression, $firstGroupField->GroupSql);
			if ($alias)
				$expr .= " AS " . QuotedName($firstGroupField->getGroupName(), $this->Dbid);
		}
		return $expr;
	}
	public function setSqlFirstGroupField($v)
	{
		$this->_sqlFirstGroupField = $v;
	}

	// Select Group
	public function getSqlSelectGroup()
	{
		return ($this->_sqlSelectGroup != "") ? $this->_sqlSelectGroup : "SELECT DISTINCT " . $this->getSqlFirstGroupField(TRUE) . " FROM " . $this->getSqlFrom();
	}
	public function setSqlSelectGroup($v)
	{
		$this->_sqlSelectGroup = $v;
	}

	// Order By Group
	public function getSqlOrderByGroup()
	{
		if ($this->_sqlOrderByGroup != "")
			return $this->_sqlOrderByGroup;
		return $this->getSqlFirstGroupField() . " ASC";
	}
	public function setSqlOrderByGroup($v)
	{
		$this->_sqlOrderByGroup = $v;
	}

	// Summary properties
	private $_sqlSelectAggregate = "";
	private $_sqlAggregatePrefix = "";
	private $_sqlAggregateSuffix = "";
	private $_sqlSelectCount = "";

	// Select Aggregate
	public function getSqlSelectAggregate()
	{
		return ($this->_sqlSelectAggregate != "") ? $this->_sqlSelectAggregate : "SELECT * FROM " . $this->getSqlFrom();
	}
	public function setSqlSelectAggregate($v)
	{
		$this->_sqlSelectAggregate = $v;
	}

	// Aggregate Prefix
	public function getSqlAggregatePrefix()
	{
		return ($this->_sqlAggregatePrefix != "") ? $this->_sqlAggregatePrefix : "";
	}
	public function setSqlAggregatePrefix($v)
	{
		$this->_sqlAggregatePrefix = $v;
	}

	// Aggregate Suffix
	public function getSqlAggregateSuffix()
	{
		return ($this->_sqlAggregateSuffix != "") ? $this->_sqlAggregateSuffix : "";
	}
	public function setSqlAggregateSuffix($v)
	{
		$this->_sqlAggregateSuffix = $v;
	}

	// Select Count
	public function getSqlSelectCount()
	{
		return ($this->_sqlSelectCount != "") ? $this->_sqlSelectCount : "SELECT COUNT(*) FROM " . $this->getSqlFrom();
	}
	public function setSqlSelectCount($v)
	{
		$this->_sqlSelectCount = $v;
	}

	// Render for lookup
	public function renderLookup()
	{
		$this->property_id->ViewValue = $this->property_id->CurrentValue;
		$this->group_id->ViewValue = $this->group_id->CurrentValue;
		$this->Code->ViewValue = $this->Code->CurrentValue;
		$this->Description->ViewValue = $this->Description->CurrentValue;
		$this->brand_id->ViewValue = $this->brand_id->CurrentValue;
		$this->type_id->ViewValue = $this->type_id->CurrentValue;
		$this->signature_id->ViewValue = $this->signature_id->CurrentValue;
		$this->department_id->ViewValue = $this->department_id->CurrentValue;
		$this->location_id->ViewValue = $this->location_id->CurrentValue;
		$this->cond_id->ViewValue = $this->cond_id->CurrentValue;
		$this->Remarks->ViewValue = $this->Remarks->CurrentValue;
		$this->ProcurementDate->ViewValue = FormatDateTime($this->ProcurementDate->CurrentValue, 7);
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
		if ($this->SqlSelect != "")
			return $this->SqlSelect;
		$select = "*";
		$groupField = &$this->property_id;
		if ($groupField->GroupSql != "") {
			$expr = str_replace("%s", $groupField->Expression, $groupField->GroupSql) . " AS " . QuotedName($groupField->getGroupName(), $this->Dbid);
			$select .= ", " . $expr;
		}
		$groupField = &$this->group_id;
		if ($groupField->GroupSql != "") {
			$expr = str_replace("%s", $groupField->Expression, $groupField->GroupSql) . " AS " . QuotedName($groupField->getGroupName(), $this->Dbid);
			$select .= ", " . $expr;
		}
		$groupField = &$this->type_id;
		if ($groupField->GroupSql != "") {
			$expr = str_replace("%s", $groupField->Expression, $groupField->GroupSql) . " AS " . QuotedName($groupField->getGroupName(), $this->Dbid);
			$select .= ", " . $expr;
		}
		return "SELECT " . $select . " FROM " . $this->getSqlFrom();
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
			return "";
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
		if ($pageName == "")
			return $Language->phrase("View");
		elseif ($pageName == "")
			return $Language->phrase("Edit");
		elseif ($pageName == "")
			return $Language->phrase("Add");
		else
			return "";
	}

	// List URL
	public function getListUrl()
	{
		return "";
	}

	// View URL
	public function getViewUrl($parm = "")
	{
		if ($parm != "")
			$url = $this->keyUrl("", $this->getUrlParm($parm));
		else
			$url = $this->keyUrl("", $this->getUrlParm(Config("TABLE_SHOW_DETAIL") . "="));
		return $this->addMasterUrl($url);
	}

	// Add URL
	public function getAddUrl($parm = "")
	{
		if ($parm != "")
			$url = "?" . $this->getUrlParm($parm);
		else
			$url = "";
		return $this->addMasterUrl($url);
	}

	// Edit URL
	public function getEditUrl($parm = "")
	{
		$url = $this->keyUrl("", $this->getUrlParm($parm));
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
		$url = $this->keyUrl("", $this->getUrlParm($parm));
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
		return $this->keyUrl("", $this->getUrlParm());
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
		global $DashboardReport;
		if ($this->CurrentAction || $this->isExport() ||
			$this->DrillDown || $DashboardReport ||
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

	// Get file data
	public function getFileData($fldparm, $key, $resize, $width = 0, $height = 0)
	{

		// No binary fields
		return FALSE;
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