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
                <h2 class="text-secondary text-center">Terms and Conditions</h2><hr>
                <p class="text-justify">Please also visit our Terms and Conditions section establishing the use, disclaimers, and limitations of liability governing the use of our website at <a href="www.orangecomputers.us">Orange Computer</a>.</p><br>
            <p class="text-justify">Orange Computers is not responsible for material posted to this social media site and does not guarantee the content, accuracy, or use of the content in this site.   Orange Computers does not in any way endorse or recommend individuals, products or services that may be discussed on this site.   Orange Computers specifically disclaims all liability for claims, for damages that may result from any posting on this site.   Orange Computers accepts no responsibility for the opinions and information posted on this forum, and such opinions do not necessarily reflect the policies of Orange Computers.  In no event shall Orange Computers be liable to you or anyone else for any decision made or action taken by you in reliance on information on this site.</p><br>
            <p class="text-justify">With the foregoing in mind, the Orange Computers terms of use for this site are as follows:</p><br>
            <p class="text-justify">You must be at least 18 years old to interact with any content on any Orange Computers Social Media Site.</p><br>
            <p class="text-justify">As a guest posting content to any Orange Computers Social Media Site on the internet, you agree that you will not:</p><br>
            <p class="text-justify">violate any local, state, federal and international laws and regulations, including but not limited to copyright and intellectual property rights laws regarding any content that you send or receive via this Policy;</p><br>
            <p class="text-justify">transmit any material (by uploading, posting, email or otherwise) that is unlawful, disruptive, threatening, profane, abusive, harassing, embarrassing, tortuous, defamatory, obscene, libelous, or is an invasion of another's privacy, is hateful or racially, ethnically or otherwise objectionable as solely determined in Orange Computer’s discretion;</p><br>
            <p class="text-justify">impersonate any person or entity or falsely state or otherwise misrepresent your affiliation with a person or entity; transmit any material (by uploading, posting, email or otherwise) that you do not have a right to make available under any law or under contractual or fiduciary relationships; transmit any material (by uploading, posting, email or otherwise) that infringes any patent, trademark, trade secret, copyright or other proprietary rights of any party;</p><br>
            <p class="text-justify">transmit (by uploading, posting, email or otherwise) any unsolicited or unauthorized advertising (including advertising of non-Orange Computers services or products), promotional materials, "junk mail," "spam," "chain letters," "pyramid schemes" or any other form of solicitation;</p><br>
            <p class="text-justify">transmit any material (by uploading, posting, email or otherwise) that contains software viruses, worms, disabling code, or any other malicious computer code, files or programs designed to interrupt, destroy or limit the functionality of any computer software or hardware or telecommunications equipment, harass another, or collect or store, or attempt to collect or store, personal data about third parties without their knowledge or consent or to share confidential pricing information of any party.</p><br>
            <p class="text-justify">By posting any content on any Orange Computers Social Media Site, you grant to Orange Computers the irrevocable right to reproduce, distribute, publish, and display such content and the right to create derivative works from your content, edit or modify such content and use such content for any Orange Computers purpose.</p><br>
            <p class="text-justify">You expressly acknowledge that you assume all responsibility related to the security, privacy, and confidentiality risks inherent in sending any content over the internet. Orange Computers does not control third-party sites and the internet over which you may choose to send confidential or personal information; therefore Orange Computers does not make any warranties, express or implied, against  interceptions or compromises to your information.</p><br>
            <p class="text-justify">You may not provide any content to an Orange Computers Social Media Site that contains any product or service endorsements.</p><br>
            <p class="text-justify">Orange Computers is a nonpartisan organization.   In furtherance of that policy, you may not  provide any content to an Orange Computers Social Media Site that may be construed as  (a) lobbying for or against any legislation or legislative proposal, (b) a solicitation  of contributions for any persons, entity or cause, or (c) a statement for or against any political candidate for public office.   In addition, you may not link to any sites  of political candidates or parties or use the Orange Computers Social Media Site to discuss political campaigns.</p><br>
            <p class="text-justify">Orange Computers’s policy is to scrupulously comply with all antitrust laws, and all users of this site are cautioned to guard against activity that could be construed as a violation of the antitrust laws. Do not post any material that:</p><br>
            <p class="text-justify">references specific fees charged or paid for professional services.</p><br>
            <p class="text-justify">discusses prices, discounts, terms or conditions of sale and other price or cost-related items.</p><br>
            <p class="text-justify">addresses salaries or terms of employment.</p><br>
            <p class="text-justify">attempts to allocate markets.</p><br>
            <p class="text-justify">Includes information that could otherwise be construed to impose a restraint on trade and inhibit free and fair competition.</p><br>
            <p class="text-justify">Orange Computer sre serves the right to remove any content in violation of this policy or that is otherwise objectionable, as well as to take steps to block access by any person violating this policy.</p><br>
            
            <p class="text-justify">Your Consent</p><br>
            <p class="text-justify">By using our site, you consent to our <a href="www.freeprivacypolicy.com">online privacy policy</a>.Changes to our Privacy Policy. If we decide to change our privacy policy, we will post those changes on this page.This policy was last modified on 26/11/2017.</p>
            
            
            <h2 class="text-danger">Contacting Us  </h2>
            <p class="text-justify">If there are any questions regarding this privacy policy you may contact us using the information below.</p>
            <p class="text-justify">admin@orangecomputers.us</p><br>
                 
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