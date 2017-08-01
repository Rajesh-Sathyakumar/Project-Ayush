<?php

include 'dbh.php';

$result = "select
count(case when c.DrugType=1 then 1 else NULL end)  as AyurvedaCount,
count(case when c.DrugType=2 then 1 else NULL end)  as UnaniCount,
count(case when c.DrugType=3 then 1 else NULL end)  as SiddhaCount,
count(case when c.DrugType=4 then 1 else NULL end)  as HomeoPathyCount,
b.EmailAddress,
b.PhoneNumber,
b.CompanyHistory,
concat(b.City ,\", \", b.State ,\", PinCode - \",b.Pincode) as Address ,
b.CompanyName
from users a
join company_details b on a.CompanyId=b.CompanyKey
join drug_details c on c.Company=b.CompanyKey
where b.companyKey=1
";

$data = $conn->query($result);
$data_split = $data->fetch_assoc();


echo "{\"AyurvedaCount\" : \"".$data_split['AyurvedaCount']."\",
    \"UnaniCount\" : \"".$data_split['UnaniCount']."\",
    \"SiddhaCount\" : \"".$data_split['SiddhaCount']."\",
    \"HomeoPathyCount\" : \"".$data_split['HomeoPathyCount']."\",
    \"EmailAddress\" : \"".$data_split['EmailAddress']."\",
    \"PhoneNumber\" : \"".$data_split['PhoneNumber']."\",
    \"CompanyHistory\" : \"".$data_split['CompanyHistory']."\",
    \"Address\" : \"".$data_split['Address']."\",
    \"CompanyName\" : \"".$data_split['CompanyName']."\"
}";

?>