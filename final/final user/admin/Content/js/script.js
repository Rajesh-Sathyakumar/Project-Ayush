// Add Record

// READ records
function readRecords() {
    $.get("ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}
function readCertification() {
    $.get("ajax/readCertification.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}



function reject(companycertificationkey) {
    var conf = confirm("Are you sure, do you really want to reject?");
    if (conf == true) {
        $.post("ajax/reject.php", {
                companycertificationkey: companycertificationkey
            },
            function (data, status) {
                // reload Users by using readRecords();
                readCertification();
            }
        );
    }
}
function rejectDrug(id) {
    var conf = confirm("Are you sure, do you really want to reject?");
    if (conf == true) {
        $.post("ajax/rejectDrug.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetDrugDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readDrugDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var drug = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#approve_drug_name").val(drug.DrugName);
            $("#approve_usage").val(drug.DrugUsage);
            $("#approve_dosage").val(drug.Dosage);
			$("#approve_ingredients").val(drug.Ingredients);
			$("#approve_drug_price").val(drug.Price);
        }
    );
    // Open modal popup
    $("#approve_user_modal").modal("show");
}
function GetCertificationDetails(CompanyCertificationKey) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(CompanyCertificationKey);
    $.post("ajax/readCertificationDetails.php", {
            CompanyCertificationKey: CompanyCertificationKey
        },
        function (data, status) {
            // PARSE json data
            var drug = JSON.parse(data);
            var status ="";
            if(drug.IsValid ==1){
                status = "Valid";
            }
            else status = "Invalid";
            // Assing existing values to the modal popup fields
            $("#approve_certification_name").val(drug.CertificationName);
            $("#approve_company_name").val(drug.CompanyName);
            $("#approve_license_number").val(drug.LicenseNumber);
            $("#licenseValidityDate").val(drug.licenseValidity);
            $("#certificationValidityDate").val(drug.certificationValidity);
            $("#certificationValidityStatus").val(status);

        }
    );
    // Open modal popup
    $("#approve_user_modal").modal("show");
}

function ApproveDrugDetails() {
    // get values
    var drug_name = $("#approve_drug_name").val();
    var usage = $("#approve_usage").val();
    var dosage = $("#approve_dosage").val();
	var ingredients = $("#approve_ingredients").val();
	var drug_price = $("#approve_drug_price").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/approveDrugDetails.php", {
            id: id

        },
        function (data, status) {
            // hide modal popup
            $("#approve_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});
function ApproveCertificationDetails() {
    // get values
    var certification_name = $("#approve_certification_name").val();
    var company_name = $("#approve_company_name").val();
    var validity_date = $("#approve_validity_date").val();

    // get hidden field value
    var companycertificationkey = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/approveCertificationDetails.php", {
            companycertificationkey: companycertificationkey

        },
        function (data, status) {
            // hide modal popup
            $("#approve_user_modal").modal("hide");
            // reload Users by using readRecords();
            readCertification();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readCertification(); // calling function
});