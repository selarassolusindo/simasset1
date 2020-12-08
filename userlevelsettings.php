<?php

/**
 * PHPMaker 2020 user level settings
 */
namespace PHPMaker2020\p_simasset1;

// User level info
$USER_LEVELS = [["-2","Anonymous"],
	["0","Default"]];

// User level priv info
$USER_LEVEL_PRIVS = [["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}c101_ho.php","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}c101_ho.php","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}c101_ho_2.php","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}c101_ho_2.php","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}c105_disposal.php","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}c105_disposal.php","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}c9.php","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}c9.php","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}d301_home","-2","72"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}d301_home","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}r001_asset","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}r001_asset","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}r004_assetglobal","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}r004_assetglobal","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t001_property","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t001_property","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t002_department","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t002_department","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t003_signature","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t003_signature","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t004_asset","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t004_asset","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t005_assetgroup","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t005_assetgroup","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t006_assetdepreciation","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t006_assetdepreciation","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t007_assettype","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t007_assettype","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t008_brand","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t008_brand","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t009_location","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t009_location","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t010_condition","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t010_condition","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t011_reason","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t011_reason","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t101_ho_head","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t101_ho_head","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t102_ho_detail","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t102_ho_detail","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t103_ho1_head","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t103_ho1_head","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t104_ho1_detail","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t104_ho1_detail","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t105_disposalhead","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t105_disposalhead","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t106_disposaldetail","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t106_disposaldetail","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t201_users","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t201_users","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t202_userlevels","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t202_userlevels","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t203_userlevelpermissions","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t203_userlevelpermissions","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t204_audittrail","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t204_audittrail","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t205_parameter","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}t205_parameter","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}v101_ho","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}v101_ho","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}v101_ho_2","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}v101_ho_2","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}v104_assetglobal","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}v104_assetglobal","0","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}v105_disposal","-2","0"],
	["{E1C6E322-15B9-474C-85CF-A99378A9BC2B}v105_disposal","0","0"]];

// User level table info
$USER_LEVEL_TABLES = [["c101_ho.php","c101_ho","Cetak Handover Form",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["c101_ho_2.php","c101_ho_2","Cetak Handover Form",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["c105_disposal.php","c105_disposal","Cetak Disposal Form",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["c9.php","c9","Dashboard (Trial)",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["d301_home","d301_home","Dashboard",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["r001_asset","r001_asset","Asset (Detail)",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["r004_assetglobal","r004_assetglobal","Asset (Global)",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t001_property","t001_property","Property",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t002_department","t002_department","Department",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t003_signature","t003_signature","Signature",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t004_asset","t004_asset","Asset",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t005_assetgroup","t005_assetgroup","Asset Group",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t006_assetdepreciation","t006_assetdepreciation","Depreciation List",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t007_assettype","t007_assettype","Asset Type",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t008_brand","t008_brand","Brand",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t009_location","t009_location","Location",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t010_condition","t010_condition","Status",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t011_reason","t011_reason","Reason",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t101_ho_head","t101_ho_head","Handover",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t102_ho_detail","t102_ho_detail","Asset",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t103_ho1_head","t103_ho1_head","Handover (Property to Personnel/Dept.)",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t104_ho1_detail","t104_ho1_detail","Asset",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t105_disposalhead","t105_disposalhead","Disposal",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t106_disposaldetail","t106_disposaldetail","Asset",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t201_users","t201_users","Users",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t202_userlevels","t202_userlevels","Hak Akses",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t203_userlevelpermissions","t203_userlevelpermissions","Hak Akses Detail",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t204_audittrail","t204_audittrail","Activity Log",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["t205_parameter","t205_parameter","Parameter",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["v101_ho","v101_ho","viewHandover",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["v101_ho_2","v101_ho_2","viewHandover_2",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["v104_assetglobal","v104_assetglobal","viewassetglobal",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"],
	["v105_disposal","v105_disposal","viewDisposal",true,"{E1C6E322-15B9-474C-85CF-A99378A9BC2B}"]];