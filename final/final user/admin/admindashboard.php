<?php

include 'dbh.php';

$total_count_query = "
SELECT 

count(case when approval_status='pending' then 1 else NULL end) as total_pending_approval, 
count(case when approval_status='approved' then 1 else NULL end) as total_approved, 
count(case when approval_status='rejected' then 1 else NULL end) as total_rejected 

FROM companylicenses ";


$certification_query = "

SELECT 
count(case when Certification=1 then 1 else NULL end) as IsoCertified, 
count(case when Certification=2 then 1 else NULL end) as GmpCertified  
FROM companycertifications WHERE Certification = 1 and IsValid=1
";


$drug_query = "

select 
count(case when (DrugType=1 and approval_status='approved') then 1 else NULL end ) as ayurveda_approved,
count(case when (DrugType=1 and approval_status='rejected') then 1 else NULL end ) as ayurveda_rejected,
count(case when (DrugType=1 and approval_status='pending') then 1 else NULL end ) as ayurveda_pending,

count(case when (DrugType=2 and approval_status='approved') then 1 else NULL end ) as unani_approved,
count(case when (DrugType=2 and approval_status='rejected') then 1 else NULL end ) as unani_rejected,
count(case when (DrugType=2 and approval_status='pending') then 1 else NULL end ) as unani_pending,

count(case when (DrugType=3 and approval_status='approved') then 1 else NULL end ) as siddha_approved,
count(case when (DrugType=3 and approval_status='rejected') then 1 else NULL end ) as siddha_rejected,
count(case when (DrugType=3 and approval_status='pending') then 1 else NULL end ) as siddha_pending,

count(case when (DrugType=4 and approval_status='approved') then 1 else NULL end ) as homeopathy_approved,
count(case when (DrugType=4 and approval_status='rejected') then 1 else NULL end ) as homeopathy_rejected,
count(case when (DrugType=4 and approval_status='pending') then 1 else NULL end ) as homeopathy_pending

from drug_details
";

$total_count_result = $conn->query($total_count_query);
$certification_result = $conn->query($certification_query);
$drug_result = $conn->query($drug_query);



    // output data of each row
    $total_count_row = $total_count_result->fetch_assoc();
    $certification_row = $certification_result->fetch_assoc();
      $drug_row = $drug_result->fetch_assoc();



	echo "{ \"total_pending_approval\" : \"".$total_count_row['total_pending_approval'] . "\", \"total_approved\" : \"".$total_count_row['total_approved'] ."\", \"total_rejected\" : \"".$total_count_row['total_rejected'] ."\", \"iso_certification\": \"".$certification_row['IsoCertified'] ."\", \"gmp_certification\" : \"".$certification_row['GmpCertified'] ."\", \"ayurveda_approved\": \"".$drug_row['ayurveda_approved'] ."\", \"ayurveda_rejected\" : \"".$drug_row['ayurveda_rejected'] ."\", \"ayurveda_pending\": \"".$drug_row['ayurveda_pending'] ."\", \"unani_approved\" : \"".$drug_row['unani_approved'] ."\", \"unani_rejected\": \"".$drug_row['unani_rejected'] ."\", \"unani_pending\" : \"".$drug_row['unani_pending'] ."\", \"siddha_approved\": \"".$drug_row['siddha_approved'] ."\", \"siddha_rejected\" : \"".$drug_row['siddha_rejected'] ."\", \"siddha_pending\": \"".$drug_row['siddha_pending'] ."\", \"homeopathy_approved\" : \"".$drug_row['homeopathy_approved'] ."\", \"homeopathy_rejected\": \"".$drug_row['homeopathy_rejected'] ."\", \"homeopathy_pending\" : \"".$drug_row['homeopathy_pending'] ."\" }" ;




$conn->close();


?>
