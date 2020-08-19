<?php 
ob_start();
session_start();
$page_title = "Tech Exam ";
$page_key = "microsoft system engineer,what does comptia stand for,a plus certification online classes,networking certification exams,it technician certification,security plus training courses,boson ccna,network certification classes";
$page_desc = "Online CompTIA practice tests mapping to the latest exam domains. CompTIA A+ 220-901 / 220-902, CompTIA Network+ N10-006, CompTIA Security+.Online CompTIA A+ certification practice test 1. Exam 220-901. Each quiz cosists of 25 practice questions. Free online score reports are available";
include('inc/top.php');
    
$number = (int) $_GET['n'];
$exam_id = $_GET['exam_id'];
$a = $number-1;
$query = "SELECT * FROM questions WHERE exam_id = '$exam_id' LIMIT 1 OFFSET $a";
$result = mysqli_query($con,$query);
$q = mysqli_fetch_array($result);
$qid = $q['question_number'];
$question = $q['text'];
$opt_a = $q['opt_a'];
$opt_b = $q['opt_b'];
$opt_c = $q['opt_c'];
$opt_d = $q['opt_d'];
$ans = $q['ans'];

 $query_t = "SELECT * FROM questions WHERE exam_id = '$exam_id'";
        $result_t = mysqli_query($con,$query_t);
        $total = mysqli_num_rows($result_t);

 $_SESSION['q'] = $qid;
?>
<!-- Start from here-->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php include('inc/nav.php'); ?>
        </div>
    </div>
    <div class="row" style="margin-top:10px;">
        
        <div class="col-md-6" style="margin-bottom:15px;">
		 <div class="row">
                    <div class="col-md-12">
                       <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Responsive -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-4151366218309776"
                         data-ad-slot="5270114532"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    </div>
                </div>
            <div class="jumbotro purple lighten-4 ">
                <p class="lead text-center">Question  <?php echo $number;?> / <?php echo $total;?></p>
                <hr>
            </div>
            <div class="list-group">
                <h3 class="text-danger">Question</h3>
                <a href="#" class="list-group-item list-group-item-action list-group-item-danger"> <b><?php echo $question;?></b></a><hr>
            </div>
            <form method="post" action="s-process.php"  > 
                <h3 class="text-primary">Please Choose one options</h3>
            <ul class="list-group" id="forma">
                <li class="list-group-item" ><input name="choice" type="radio" value="A"> <?php echo $opt_a;?></li>
                <li class="list-group-item" ><input name="choice" type="radio" value="B"> <?php echo $opt_b;?></li>
                <li class="list-group-item "><input name="choice" type="radio" value="C"> <?php echo $opt_c;?></li>
                <li class="list-group-item"><input name="choice" type="radio" value="D"> <?php echo $opt_d;?></li>
            </ul>
                <br>
                <input type="hidden" value="<?php echo $qid;?>" name="exam_id">
                <input type="submit" value="
                    <?php 
            if ($number == $total) {
                echo 'Submit';
                } else {
                echo 'Next';
                }
                ?>" class="btn btn-primary btn-xs col-md-offset-4 col-xs-offset-4" id="btn" >
                <input type="hidden" value="<?php echo $number;?>" name="number">
                <input type="hidden" value="<?php echo $exam_id;?>" name="exam_id">
				<div class="row">
                    <div class="col-md-12">
                       <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Responsive -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-4151366218309776"
                         data-ad-slot="5270114532"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6 ">
        <div class="row">
                    <div class="col-md-12">
                       <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Responsive -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-4151366218309776"
                         data-ad-slot="5270114532"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    </div>
                </div>
				<div class="row">
                    <div class="col-md-12">
                       <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Responsive -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-4151366218309776"
                         data-ad-slot="5270114532"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    </div>
                </div>
        </div>
    </div>
    <hr>
    <!--------------------Footer---------------------------------->
    <div class="container-fluid">
        <div class="row bg-dark" style="padding-top:20px;">
            <?php include('inc/footer.php');?>
        </div>
		 <div class="row">
                    <?php include('inc/bitcoin.php');?>
            </div>
    </div>
    <!--------------------Footer---------------------------------->
    <script>
        $(document).ready(function() {
            $('#btn').mouseover(function() {
                $('#btn').removeClass('btn-primary');
                $('#btn').addClass('btn-danger');
            });
            $('#btn').mouseout(function() {
                $('#btn').removeClass('btn-danger');
                $('#btn').addClass('btn-primary');
            });
            $('#forma li').mouseover(function() {
                //$('#form').removeClass('bg-primary');
                $(this).addClass('active');
            });
            $('#forma li').mouseout(function() {
                $(this).removeClass('active');
               // $('#forma li').addClass('bg-primary');
            });
        });
    </script>
   