<?php

// vars and constants
define("dollarsPerView", .001);
$salesAssoc = "Pat Patterson";
$customerViews = array("Acme"=>2000,"Beta"=>200000,"Catnip"=>45000);
$revenueValue = 0;
$customerRevenue = array();

// functions
function figureRevenue($customerViews) {
    foreach ($customerViews as $key => $val) {
        $revenueValue = ($val * dollarsPerView);
        $customerRevenue["$key"] = "$revenueValue";
    }
    return($customerRevenue);
}

// procedural code
$customerRevenue = figureRevenue($customerViews);
$AcmeValue = $customerRevenue["Acme"];
$BetaValue = $customerRevenue["Beta"];
$CatnipValue = $customerRevenue["Catnip"];

?>