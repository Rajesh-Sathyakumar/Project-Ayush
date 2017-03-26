<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 3/23/2017
 * Time: 4:58 PM
 */

$pincode=601204;
$ul="https://data.gov.in/api/datastore/resource.json?resource_id=6176ee09-3d56-4a3b-8115-21841576b2f6&api-key=90daa0c49dc352c43d228cf5ba16ad07&filters[pincode]=".urlencode($pincode);
$ul.="&limit=1&fields=Districtname,statename";
$catList=json_decode(file_get_contents($ul),true);
$catList=$catList['records'];

$var=$catList[0];

foreach($var as $item){
    echo $item;
    echo "";
}



?>