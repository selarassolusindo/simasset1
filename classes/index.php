<?php
namespace PHPMaker2020\p_simasset1;

/**
 * Class for index
 */
class index
{

	// Project ID
	public $ProjectID = "{E1C6E322-15B9-474C-85CF-A99378A9BC2B}";

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

	// Token
	public $Token = "";
	public $TokenTimeout = 0;
	public $CheckToken;

	// Constructor
	public function __construct() {
		$this->CheckToken = Config("CHECK_TOKEN");
	}

	// Terminate page
	public function terminate($url = "")
	{

		// Page Unload event
		$this->Page_Unload();

		// Global Page Unloaded event (in userfn*.php)
		Page_Unloaded();

		// Page Redirecting event
		$this->Page_Redirecting($url);

		// Go to URL if specified
		if ($url != "") {
			SaveDebugMessage();
			AddHeader("Location", $url);
		}
		exit();
	}

	//
	// Page run
	//

	public function run()
	{
		global $Language, $UserProfile, $Security, $Breadcrumb;

		// Initialize
		$GLOBALS["Page"] = &$this;
		$this->TokenTimeout = SessionTimeoutTime();

		// Language object
		if (!isset($Language))
			$Language = new Language();

		// Start timer
		if (!isset($GLOBALS["DebugTimer"]))
			$GLOBALS["DebugTimer"] = new Timer();

		// User profile
		$UserProfile = new UserProfile();

		// Security object
		$Security = new AdvancedSecurity();
		if (!$Security->isLoggedIn())
			$Security->autoLogin();
		$Security->loadUserLevel(); // Load User Level

		// Global Page Loading event (in userfn*.php)
		Page_Loading();

		// Page Load event
		$this->Page_Load();

		// Breadcrumb
		$Breadcrumb = new Breadcrumb();

		// If session expired, show session expired message
		if (Get("expired") == "1")
			$this->setFailureMessage($Language->phrase("SessionExpired"));
		if (!$Security->isLoggedIn())
			$Security->autoLogin();
		$Security->loadUserLevel(); // Load User Level
		if ($Security->allowList(CurrentProjectID() . 'd301_home'))
			$this->terminate("d301_homedsb.php"); // Exit and go to default page
		if ($Security->allowList(CurrentProjectID() . 'c101_ho.php'))
			$this->terminate("c101_ho.php");
		if ($Security->allowList(CurrentProjectID() . 'c101_ho_2.php'))
			$this->terminate("c101_ho_2.php");
		if ($Security->allowList(CurrentProjectID() . 'c105_disposal.php'))
			$this->terminate("c105_disposal.php");
		if ($Security->allowList(CurrentProjectID() . 'c9.php'))
			$this->terminate("c9.php");
		if ($Security->allowList(CurrentProjectID() . 'r001_asset'))
			$this->terminate("r001_assetsmry.php");
		if ($Security->allowList(CurrentProjectID() . 'r004_assetglobal'))
			$this->terminate("r004_assetglobalsmry.php");
		if ($Security->allowList(CurrentProjectID() . 't001_property'))
			$this->terminate("t001_propertylist.php");
		if ($Security->allowList(CurrentProjectID() . 't002_department'))
			$this->terminate("t002_departmentlist.php");
		if ($Security->allowList(CurrentProjectID() . 't003_signature'))
			$this->terminate("t003_signaturelist.php");
		if ($Security->allowList(CurrentProjectID() . 't004_asset'))
			$this->terminate("t004_assetlist.php");
		if ($Security->allowList(CurrentProjectID() . 't005_assetgroup'))
			$this->terminate("t005_assetgrouplist.php");
		if ($Security->allowList(CurrentProjectID() . 't006_assetdepreciation'))
			$this->terminate("t006_assetdepreciationlist.php");
		if ($Security->allowList(CurrentProjectID() . 't007_assettype'))
			$this->terminate("t007_assettypelist.php");
		if ($Security->allowList(CurrentProjectID() . 't008_brand'))
			$this->terminate("t008_brandlist.php");
		if ($Security->allowList(CurrentProjectID() . 't009_location'))
			$this->terminate("t009_locationlist.php");
		if ($Security->allowList(CurrentProjectID() . 't010_condition'))
			$this->terminate("t010_conditionlist.php");
		if ($Security->allowList(CurrentProjectID() . 't011_reason'))
			$this->terminate("t011_reasonlist.php");
		if ($Security->allowList(CurrentProjectID() . 't101_ho_head'))
			$this->terminate("t101_ho_headlist.php");
		if ($Security->allowList(CurrentProjectID() . 't102_ho_detail'))
			$this->terminate("t102_ho_detaillist.php");
		if ($Security->allowList(CurrentProjectID() . 't103_ho1_head'))
			$this->terminate("t103_ho1_headlist.php");
		if ($Security->allowList(CurrentProjectID() . 't104_ho1_detail'))
			$this->terminate("t104_ho1_detaillist.php");
		if ($Security->allowList(CurrentProjectID() . 't105_disposalhead'))
			$this->terminate("t105_disposalheadlist.php");
		if ($Security->allowList(CurrentProjectID() . 't106_disposaldetail'))
			$this->terminate("t106_disposaldetaillist.php");
		if ($Security->allowList(CurrentProjectID() . 't201_users'))
			$this->terminate("t201_userslist.php");
		if ($Security->allowList(CurrentProjectID() . 't202_userlevels'))
			$this->terminate("t202_userlevelslist.php");
		if ($Security->allowList(CurrentProjectID() . 't203_userlevelpermissions'))
			$this->terminate("t203_userlevelpermissionslist.php");
		if ($Security->allowList(CurrentProjectID() . 't204_audittrail'))
			$this->terminate("t204_audittraillist.php");
		if ($Security->allowList(CurrentProjectID() . 't205_parameter'))
			$this->terminate("t205_parameterlist.php");
		if ($Security->allowList(CurrentProjectID() . 'v101_ho'))
			$this->terminate("v101_holist.php");
		if ($Security->allowList(CurrentProjectID() . 'v101_ho_2'))
			$this->terminate("v101_ho_2list.php");
		if ($Security->allowList(CurrentProjectID() . 'v104_assetglobal'))
			$this->terminate("v104_assetgloballist.php");
		if ($Security->allowList(CurrentProjectID() . 'v105_disposal'))
			$this->terminate("v105_disposallist.php");
		if ($Security->isLoggedIn()) {
			$this->setFailureMessage(DeniedMessage() . "<br><br><a href=\"logout.php\">" . $Language->phrase("BackToLogin") . "</a>");
		} else {
			$this->terminate("login.php"); // Exit and go to login page
		}
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
	// $type = ''|'success'|'failure'
	function Message_Showing(&$msg, $type) {

		// Example:
		//if ($type == 'success') $msg = "your success message";

	}
}
?>