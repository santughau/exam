<?php 
ob_start();
session_start();
$page_title = "Login Page ";
$page_key = "";
$page_desc = "";
include('inc/top.php');

?>
    <!-- Start from here-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php include('inc/nav.php'); ?>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <h2 class="text-secondary text-center">Disclaimer for Orange Computer</h2><hr>
                <p class="text-justify">If you require any more information or have any questions about our site’s disclaimer, please feel free to contact us by email at <a href="admin@orangecomputers.us">admin@orangecomputers.us</a> Disclaimers for <a href="www.orangecomputers.us">Orange Computer</a>.</p><br>
            <p class="text-justify">All the information on this website is published in good faith and for general information purpose only. <a href="www.orangecomputers.us">www.orangecomputers.us</a> does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (<a href="www.orangecomputers.us">www.orangecomputers.us</a>), is strictly at your own risk. <a href="www.orangecomputers.us">www.orangecomputers.us</a> will not be liable for any losses and/or damages in connection with the use of our website.</p><br>
            
            <p class="text-justify">From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone ‘bad’.</p>
            
            
            
            <p class="text-justify">Please be also aware that when you leave <a href="www.orangecomputers.us">Our Website</a>, other sites may have different privacy policies and terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their “Terms of Service” before engaging in any business or uploading any information.</p><br>
            <h2 class="text-danger">Consent</h2>
            <p class="text-justify">By using our website, you hereby consent to our disclaimer and agree to its terms.</p><br>
            <h2 class="text-danger">Update</h2>
            <p class="text-justify">Should we update, amend or make any changes to this document, those changes will be prominently posted here.</p><br
                 
            </div>
        </div>
        <hr>
        <!--------------------Footer---------------------------------->
        <div class="container-fluid">
            <div class="row bg-dark" style="padding-top:20px;">
                <?php include('inc/footer.php');?>
            </div>
        </div>
        <!--------------------Footer---------------------------------->
        
        <script>
    $(".table").DataTable();
</script>