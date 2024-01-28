<?php

use App\Models\EditionList;
use App\Models\generalsetting;


function editionList(){
    $activeStatus = 'Active';
    $data = EditionList::where('status', $activeStatus)->get();
    return $data;
}
function get_settings(){
    $data=generalsetting::first();
     $data = $data;
     return $data;
}
?>
