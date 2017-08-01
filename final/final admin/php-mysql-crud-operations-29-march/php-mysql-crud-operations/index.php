<?php
if(!isset($_SESSION)){
    session_start();
    $_SESSION['type'] = $_GET['type'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Drugs</title>

    <!-- Bootstrap CSS File  -->
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.css"/>
    <style>
        /* Reset body padding and margins */
        body { margin:0; padding:0; }

        /* Make Header Sticky */
        #header_container { background:#eee; border:1px solid #666; height:60px; left:0; position:fixed; width:100%; top:0; }
        #header{ line-height:60px; margin:0 auto; width:940px; text-align:center; }

        /* CSS for the content of page. I am giving top and bottom padding of 80px to make sure the header and footer do not overlap the content.*/
        #container { margin:0 auto; overflow:auto; padding:80px 0; width:940px; }
        #content{}

        /* Make Footer Sticky */
        #footer_container { background:#eee; border:1px solid #666; bottom:0; height:60px; left:0; position:fixed; width:100%; }
        #footer { line-height:60px; margin:0 auto; width:940px; text-align:center; }
    </style>
</head>
<body>
<br><br><Br><br>
<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Drugs</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New Record</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Drugs:</h3>

            <div class="records_content"><h4>type</h4>

            </div>
        </div>
    </div>
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="drug_name">Drug Name</label>
                    <input type="text" id="drug_name" placeholder="Drug Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="sub_category">sub category</label>
                    <input type="text" id="sub_category" placeholder="sub Category" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="usage">Usage</label>
                    <input type="text" id="usage" placeholder="Usage" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="dosage">Dosage</label>
                    <input type="text" id="dosage" placeholder="Dosage" class="form-control"/>
                </div>
				
				<div class="form-group">
                    <label for="ingredients">Ingredients</label>
                    <input type="text" id="ingredients" placeholder="Ingredients" class="form-control"/>
                </div>
				
				<div class="form-group">
                    <label for="drug_price">Drug Price</label>
                    <input type="text" id="drug_price" placeholder="Drug Price" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="dispensing_size">Dispensing size</label>
                    <input type="text" id="dispensing_size" placeholder="Dispensing Size" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="drug_format">Drug Format</label>
                    <input type="text" id="drug_format" placeholder="Drug Format" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="update_drug_name">Drug Name</label>
                    <input type="text" id="update_drug_name" placeholder="Drug Name" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="update_drug_name">Drug Name</label>
                    <input type="text" id="update_drug_name" placeholder="Drug Name" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="sub_category">sub category</label>
                    <input type="text" id="update_sub_category" placeholder="sub Category" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="update_usage">Usage</label>
                    <input type="text" id="update_usage" placeholder="Usage" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_dosage">Dosage</label>
                    <input type="text" id="update_dosage" placeholder="Dosage" class="form-control"/>
                </div>

				 <div class="form-group">
                    <label for="update_ingredients">Ingredients</label>
                    <input type="text" id="update_ingredients" placeholder="Ingredients" class="form-control"/>
                </div>
				
				<div class="form-group">
                    <label for="update_drug_price">Drug Price</label>
                    <input type="text" id="update_drug_price" placeholder="Drug Price" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="update_drug_price">Dispensing size</label>
                    <input type="text" id="update_dispensing_size" placeholder="Dispensing Size" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="update_drug_format">Drug Format</label>
                    <input type="text" id="update_drug_format" placeholder="Drug Format" class="form-control"/>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_user_id">
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/script.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-75591362-1', 'auto');
    ga('send', 'pageview');

</script>
<!-- BEGIN: Sticky Header -->
<div id="header_container">
    &nbsp;&nbsp;&nbsp;&nbsp; <a href='index1.php'> <div class="glyphicon glyphicon-home" aria-hidden="true" style="font-size: 40px" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ABC Company</div>
    <div id="header">

    </div>
</div>
<!-- END: Sticky Header -->

<!-- BEGIN: Page Content -->
<div id="container">
    <div id="content">

       </div>
</div>
<!-- END: Page Content -->

<!-- BEGIN: Sticky Footer -->
<div id="footer_container">
    <div id="footer">
        Ministry of Ayush-drug monitoring
    </div>
</div>
<!-- END: Sticky Footer -->

</body>
</html>
