// Add Record
function addRecord() {
    // get values
    var drug_name = $("#drug_name").val();
    var usage = $("#usage").val();
    var dosage = $("#dosage").val();
	var ingredients = $("#ingredients").val();
	var drug_price = $("#drug_price").val();

    // Add record
    $.post("ajax/addRecord.php", {
        drug_name: drug_name,
        usage: usage,
        dosage: dosage,
		ingredients: ingredients,
		drug_price: drug_price
		
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#drug_name").val("");
        $("#usage").val("");
        $("#dosage").val("");
		$("#ingredients").val("");
		$("#drug_price").val("");
    });
}

// READ records
function readRecords() {
    $.get("ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(id) {
    var conf = confirm("Are you sure, do you really want to delete User?");
    if (conf == true) {
        $.post("ajax/deleteUser.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var drug = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_drug_name").val(drug.DrugName);
            $("#update_usage").val(drug.DrugUsage);
            $("#update_dosage").val(drug.Dosage);
			$("#update_ingredients").val(drug.Ingredients);
			$("#update_drug_price").val(drug.Price);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var drug_name = $("#update_drug_name").val();
    var usage = $("#update_usage").val();
    var dosage = $("#update_dosage").val();
	var ingredients = $("#update_ingredients").val();
	var drug_price = $("#update_drug_price").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
            id: id,
            drug_name: drug_name,
            usage: usage,
            dosage: dosage,
			ingredients: ingredients,
			drug_price: drug_price
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});