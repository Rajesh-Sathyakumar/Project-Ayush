<?php

$conn = mysqli_connect("localhost","root","","ayush");

if (!$conn) {
    die("connection failed:" . mysqli_connect_error());
}

$SearchBy = $_GET['SearchBy'];
$SearchFilter = $_GET['SearchFilter'];
$FilterValue = $_GET['FilterValue'];

if(($_GET['SearchBy'])=='drugtab' && (($_GET['SearchFilter'])=='drugname'))
{
$sql="select DrugName,Ingredients,DrugUsage,DrugType,Price,Dosage from drug_details where DrugName='$FilterValue'";

if ($result=mysqli_query($conn, $sql)) {

echo " <table class=\"table table-striped jambo_table bulk_action\">
    <thead>
    <tr class=\"heading\">
        <th class=\"column-title\">DrugName</th>
        <th class=\"column-title\">Ingredients</th>
        <th class=\"column-title\">DrugUsage </th>
        <th class=\"column-title\">DrugType</th>
        <th class=\"column-title\">Price</th>
        <th class=\"column-title\">Dosage</th>
    </tr>
</thead>
<tbody>
    ";
while ($row=mysqli_fetch_row($result))
{
           
           echo "<tr> <td>";
            echo $row[0];
            echo "</td> <td>";
            echo $row[1];
            echo "</td> <td>";
            echo $row[2];
            echo "</td> <td>";
            echo $row[3];
            echo "</td> <td>";
            echo $row[4];
            echo "</td> <td>";
            echo $row[5];
           echo "</td> </tr>";
    }
    echo "</tbody></table>";
} else {
echo "Error: " .$resultset . "" . mysqli_error($conn);
}
}
    if(($_GET['SearchBy'])=='drugtab' && (($_GET['SearchFilter'])=='category')) {
       $resultset="SELECT DrugName,Ingredients,DrugUsage,drug_types.DrugType,Price,Dosage  FROM drug_details
JOIN drug_types ON drug_details.DrugType = drug_types.DrugKey
where drug_types.DrugType = '$FilterValue'";
        if ($result = mysqli_query($conn, $resultset)) {
            
           echo  "<table class=\"table table-striped jambo_table bulk_action\">
    <thead>
                <tr>                    
                    <th class=\"column-title\">DrugName</th>
                    <th class=\"column-title\">Ingredients</th>
                    <th class=\"column-title\">DrugUsage</th>
                    <th class=\"column-title\">DrugType</th>
                    <th class=\"column-title\">Price</th>
                    <th class=\"column-title\">Dosage</th>
                </tr>
                </thead>
                <tbody>
                ";
            
            while ($row = mysqli_fetch_row($result)) {
                
                echo "<tr> <td>";
                echo $row[0];
                echo "</td> <td>";
                echo $row[1];
                echo "</td> <td>";
                echo $row[2];
                echo "</td> <td>";
                echo $row[3];
                echo "</td> <td>";
                echo $row[4];
                echo "</td> <td>";
                echo $row[5];
                echo "</td> </tr>";

            }
            echo "</tbody></table>";
        } else {
            echo "Error: " . $resultset . "" . mysqli_error($conn);
        }
    }
    if(($_GET['SearchBy'])=='companytab' && (($_GET['SearchFilter'])=='certificates'))
  {
       $resultset="SELECT a.CompanyName, a.PhoneNumber, a.EmailAddress, 
concat(a.City,\", \",a.State,\", Pin Code - \",a.Pincode) as Location,
 c.CertificationName FROM company_details a join companycertifications b on a.CompanyKey=b.Company join certifications c on c.CertificationKey=b.Certification where c.CertificationName = '$FilterValue'";

            if ($result = mysqli_query($conn, $resultset)) {
         

                echo "<table class=\"table table-striped jambo_table bulk_action\">
    <thead>
                    <tr>
                        <th class=\"column-title\">CompanyName</th>
                        <th class=\"column-title\">PhoneNumber</th>
                        <th class=\"column-title\">EmailAddress</th>
                        <th class=\"column-title\">Location</th>
                        <th class=\"column-title\">Certification</th>
                       
                    </tr>
                    </thead>
                    <tbody>
                    ";
           
                while ($row = mysqli_fetch_row($result)) {
                    echo "<tr> <td>";
                    echo $row[0];
                    echo "</td> <td>";
                    echo $row[1];
                    echo "</td> <td>";
                    echo $row[2];
                    echo "</td> <td>";
                    echo $row[3];
                    echo "</td> <td>";
                    echo $row[4];
                    echo "</td> </tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "Error: " . $resultset . "" . mysqli_error($conn);
            }
  }
if(($_GET['SearchBy'])=='companytab' && (($_GET['SearchFilter'])=='companyname')) {
                $resultset = "select CompanyName,PhoneNumber,EmailAddress,concat(City,', ',State,', ', 'Pin Code - ',Pincode) as Location from company_details  where companyname='$FilterValue'";
                    $iso ="SELECT a.CompanyName, a.PhoneNumber, a.EmailAddress, concat(a.City,', ',a.State,', ', 'Pin Code - ',a.Pincode) as Location, c.CertificationName FROM company_details a join companycertifications b on a.CompanyKey=b.Company join certifications c on c.CertificationKey=b.Certification where c.CertificationName = 'iso' AND companyname='$FilterValue'";
                mysqli_query($conn,$iso);
                 $rows_returned1=mysqli_affected_rows($conn);
           
                 $gmp ="SELECT a.CompanyName, a.PhoneNumber, a.EmailAddress, concat(a.City,', ',a.State,', ', 'Pin Code - ',a.Pincode) as Location, c.CertificationName FROM company_details a join companycertifications b on a.CompanyKey=b.Company join certifications c on c.CertificationKey=b.Certification where c.CertificationName = 'GMP' and companyname='$FilterValue'";
                mysqli_query($conn,$gmp);
                 $rows_returned2=mysqli_affected_rows($conn);
                    
                if ($result = mysqli_query($conn, $resultset)) {
                
                   echo "<table class=\"table table-striped jambo_table bulk_action\">
    <thead>
                        <tr>
                            <th class=\"column-title\">COMPANYNAME</th>
                            <th class=\"column-title\">PHONENO</th>
                            <th class=\"column-title\">EMAILID</th>
                            <th class=\"column-title\">LOCATION</th>     
                           <th class=\"column-title\">ISO Certified</th>
                            <th class=\"column-title\">GMP Certified</th>
                     
                           
                                
                          </tr>  
                          </thead>
                        
                        <tbody>
                        ";
                        
                        while ($row = mysqli_fetch_row($result)) {
                            echo "<tr> <td>";
                            echo $row[0];
                            echo "</td> <td>";
                            echo $row[1];
                            echo "</td> <td>";
                            echo $row[2];
                            echo "</td> <td>";
                            echo $row[3];
                            echo "</td>";
                             echo "<td>";
                                if($rows_returned1==1)
                            {
                                echo "YES";
                            }
                          else{
                                echo "NO";
                                }
                          echo "</td> <td>";
                                 if($rows_returned2==1)
                            {
                                echo "YES";
                            }
                          else{
                                echo "NO";
                                }
                            echo "</td>";
                            
                            

                            echo "</td> </tr>
                            
                            ";
                        }
                    echo "</tbody></table>";
                        } else {
                            echo "Error: " . $resultset . "" . mysqli_error($conn);
                        }
                        }
    if (($_GET['SearchBy'])=='drugtab' && (($_GET['SearchFilter'])=='patentedcompany')) {
        $resultset = "select DrugName,Ingredients,DrugUsage,DrugType,Price,Dosage from drug_details join company_details on company_details.CompanyKey=drug_details.Company where companyName='$FilterValue' and ownership='patent'";
                        if ($result = mysqli_query($conn, $resultset)) {
            

            echo "<table class=\"table table-striped jambo_table bulk_action\">
    <thead>
                <tr>
                    <th class=\"column-title\">DrugName</th>
                    <th class=\"column-title\">Ingredients</th>
                    <th class=\"column-title\">DrugUsage</th>
                    <th class=\"column-title\">DrugType</th>
                    <th class=\"column-title\">Price</th>
                    <th class=\"column-title\">Dosage</th>
              </tr>
              </thead>
<tbody>
                ";
            
            while ($row = mysqli_fetch_row($result)) {
                echo "<tr> <td>";
                echo $row[0];
                echo "</td> <td>";
                echo $row[1];
                echo "</td> <td>";
                echo $row[2];
                echo "</td> <td>";
                echo $row[3];
                echo "</td> <td>";
                echo $row[4];
                echo "</td> <td>";
                echo $row[5];
                echo "</td> </tr>
               
                ";
            }
                            echo "</tbody></table>";
        } else {
            echo "Error: " .$resultset . "" . mysqli_error($conn);
        }
    }

if(($_GET['SearchBy'])=='companytab' && (($_GET['SearchFilter'])=='location'))
{
  $resultset="select CompanyName,PhoneNumber,EmailAddress,concat(City,', ',State,', ', 'Pin Code - ',Pincode) as Location from company_details where city='$FilterValue'";
        $iso ="SELECT a.CompanyName, a.PhoneNumber, a.EmailAddress, concat(a.City,', ',a.State,', ', 'Pin Code - ',a.Pincode) as location, c.CertificationName FROM company_details a join companycertifications b on a.CompanyKey=b.Company join certifications c on c.CertificationKey=b.Certification where c .CertificationName = 'ISO' AND city='$FilterValue'";
                        mysqli_query($conn,$iso);
                 $rows_returned1=mysqli_affected_rows($conn);
        $gmp ="SELECT a.CompanyName, a.PhoneNumber, a.EmailAddress, concat(a.City,', ',a.State,', ', 'Pin Code - ',a.Pincode) as location, c.CertificationName FROM company_details a join companycertifications b on a.CompanyKey=b.Company join certifications c on c.CertificationKey=b.Certification where c.CertificationName = 'GMP' AND city='$FilterValue'";
                mysqli_query($conn,$gmp);
            $rows_returned2=mysqli_affected_rows($conn);

            if ($result = mysqli_query($conn, $resultset)) {
            
                echo"<table class=\"table table-striped jambo_table bulk_action\">
    <thead>
                    <tr>
                        <th class=\"column-title\">COMPANYNAME</th>
                        <th class=\"column-title\">PHONENO</th>
                        <th class=\"column-title\">EMAILID</th>
                        <th class=\"column-title\">LOCATION</th>
                       <th class=\"column-title\">ISO Certified</th>
                        <th class=\"column-title\">GMP Certified</th>
                      </tr>
                      </thead>
                    <tbody>
                    ";
                
                while ($row = mysqli_fetch_row($result)) {
                    echo "<tr> <td>";
                    echo $row[0];
                    echo "</td> <td>";
                    echo $row[1];
                    echo "</td> <td>";
                    echo $row[2];
                    echo "</td> <td>";
                    echo $row[3];
                     echo "<td>";
                                if($rows_returned1==1)
                            {
                                echo "YES";
                            }   
                          else{
                                echo "NO";
                                }
                          echo "</td> <td>";
                                 if($rows_returned2==1)
                            {
                                echo "YES";
                            }
                          else{
                                echo "NO";
                                }
                            echo "</td>";
                            
                            

                    echo "</td> </tr>
                   
                    ";
                }
                echo "</tbody></table>";
            } else {
                echo "Error: " . $resultset . "" . mysqli_error($conn);
            }


}


if(($_GET['SearchBy'])=='companytab' && (($_GET['SearchFilter'])=='DrugName'))
{
    $resultset="select c.CompanyName,c.PhoneNumber,c.EmailAddress,concat(City,', ',State,', ', 'Pin Code - ',Pincode) as Location from drug_details d join company_details c on d.Company=c.CompanyKey where d.DrugName='$FilterValue'";
    $iso ="SELECT a.CompanyName, a.PhoneNumber, a.EmailAddress, SELECT a.CompanyName, a.PhoneNumber, a.EmailAddress, concat(a.City,', ',a.State,', ', 'Pin Code - ',a.Pincode) as location, c.CertificationName FROM company_details a join companycertifications b on a.CompanyKey=b.Company join certifications c on c.CertificationKey=b.Certification where c .CertificationName = 'ISO' AND location='$FilterValue'";
    mysqli_query($conn,$iso);
    $rows_returned1=mysqli_affected_rows($conn);
    $gmp ="SELECT a.CompanyName, a.PhoneNumber, a.EmailAddress, concat(a.City,', ',a.State,', ', 'Pin Code - ',a.Pincode) as location, c.CertificationName FROM company_details a join companycertifications b on a.CompanyKey=b.Company join certifications c on c.CertificationKey=b.Certification where c.CertificationName = 'GMP' AND
location='$FilterValue'";
    mysqli_query($conn,$gmp);
    $rows_returned2=mysqli_affected_rows($conn);
    if ($result = mysqli_query($conn, $resultset)) {

        echo"<table class=\"table table-striped jambo_table bulk_action\">
    <thead>
                    <tr>
                        <th class=\"column-title\">COMPANYNAME</th>
                        <th class=\"column-title\">PHONENO</th>
                        <th class=\"column-title\">EMAILID</th>
                        <th class=\"column-title\">LOCATION</th>
                       <th class=\"column-title\">ISO Certified</th>
                        <th class=\"column-title\">GMP Certified</th>
                      </tr>
                      </thead>
                    <tbody>";

        while ($row = mysqli_fetch_row($result)) {
            echo "<tr> <td>";
            echo $row[0];
            echo "</td> <td>";
            echo $row[1];
            echo "</td> <td>";
            echo $row[2];
            echo "</td> <td>";
            echo $row[3];
            echo "<td>";
            if($rows_returned1==1)
            {
                echo "YES";
            }
            else{
                echo "NO";
            }
            echo "</td> <td>";
            if($rows_returned2==1)
            {
                echo "YES";
            }
            else{
                echo "NO";
            }
            echo "</td>";



            echo "</td> </tr>
                   
                    ";
        }
        echo "</tbody></table>";
    } else {
        echo "Error: " . $resultset . "" . mysqli_error($conn);
    }
}

?>