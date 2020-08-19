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
                <h2 class="text-secondary text-center">Privacy Policy</h2><hr>
                <h2 class="text-danger">What information do we collect?</h2>
            <p class="text-justify">We collect information from you when you register on our site, subscribe to our newsletter, fill out a form or comment on the site. When registering on our site, as appropriate, you may be asked to enter your: name, e-mail address or website URL. You may, however, visit our site anonymously.</p>
            <p class="text-justify">Google, as a third party vendor, uses cookies to serve ads on your site. Google’s use of the DART cookie enables it to serve ads to your users based on their visit to your sites and other sites on the Internet. Users may opt out of the use of the DART cookie by visiting the Google ad and content network privacy policy.</p><br>
            
            <h2 class="text-danger">What do we use your information for?</h2>
            <p class="text-justify">Any of the information we collect from you may be used in one of the following ways:</p>
            <ol>
                <li>To personalize your experience : (your information helps us to better respond to your individual needs).</li>
                <li>To improve our website : (we continually strive to improve our website offerings based on the information and feedback we receive from you).</li>
                <li>To improve customer service : (your information helps us to more effectively respond to your customer service requests and support needs).</li>
                <li>To send periodic emails : The email address you provide may be used to send you information, respond to inquiries, and/or other requests or questions.</li>
            </ol><br>
            
            <h2 class="text-danger">How do we protect your information?</h2>
            <p class="text-justify">We implement a variety of security measures to maintain the safety of your personal information when you enter, submit, or access your personal information.</p>
            <p class="text-justify">We use cookies to understand and save your preferences for future visits and compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future. We may contract with third-party service providers to assist us in better understanding our site visitors. These service providers are not permitted to use the information collected on our behalf except to help us conduct and improve our business.</p><br>
            
            <h2 class="text-danger">Do we disclose any information to outside parties?</h2>
            <p class="text-justify">We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.</p><br>
            
            <h2 class="text-danger">Third party links</h2>
            <p class="text-justify">Occasionally, at our discretion, we may include or offer third party products or services on our website. These third party sites have separate and independent privacy policies. We therefore have no responsibility or liability for the content and activities of these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any feedback about these sites.  </p><br>
            <h2 class="text-danger">Online Privacy Policy Only</h2>
            <p class="text-justify">This online privacy policy applies only to information collected through our website and not to information collected offline. </p> 
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