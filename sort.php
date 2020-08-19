<?php 
$page_title = "Tech Exam ";
$page_key = "microsoft system engineer,what does comptia stand for,a plus certification online classes,networking certification exams,it technician certification,security plus training courses,boson ccna,network certification classes";
$page_desc = "Online CompTIA practice tests mapping to the latest exam domains. CompTIA A+ 220-901 / 220-902, CompTIA Network+ N10-006, CompTIA Security+.Online CompTIA A+ certification practice test 1. Exam 220-901. Each quiz cosists of 25 practice questions. Free online score reports are available";
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
            
            <div class="col-md-6">
                
                <div class="row">
                    <?php
                    if(isset($_GET['d_id'])){
                                $record_per_page = 12   ;
                                $page = '';
                                if (isset($_GET["page"]))
                                {
                                $page = $_GET["page"];
                                }
                                else 
                                {
                                $page = 1;	
                                }
                                $start_from = ($page-1)*$record_per_page;
                    $d_id = $_GET['d_id'];
                    $get_option = "SELECT * FROM exam WHERE dept_id = '$d_id' ORDER BY exam_name ASC LIMIT $start_from, $record_per_page";
                }
                else{
                    $get_option = "SELECT * FROM exam ORDER BY exam_name ASC ";
                }
                
                $run_option = mysqli_query($con,$get_option);
                while ($row_option = mysqli_fetch_array($run_option)){
                $option_id = $row_option['exam_id'];
                    
                $exam_image = $row_option['exam_image'];
                $option_title = ucfirst($row_option['exam_name']);
                ?>
                        <div class="col-md-4" style="padding-bottom:15px; height:320px;">
                            <div class="card"> <img class="card-img-top" src="images/exam/<?php echo $exam_image;?>" alt="<?php echo $option_title;?>-online-exam" height="150px;">
                                <div class="card-body" style="height:150px;">
                                    <h4 class="card-title text" style="height:70px;"><?php echo $option_title; ?></h4> <a href="s-index.php?exam_id=<?php echo $option_id?>" class="btn btn-primary">Start Exam</a> </div>
                            </div>
                        </div>
                        <?php } ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination pagination-circle border-0">
                            <?php 
                            $page_query = "SELECT * FROM exam WHERE dept_id = '$d_id'";
                            $page_result = mysqli_query($con,$page_query);
                            $total_records = mysqli_num_rows($page_result);
                             $total_pages = ceil($total_records/$record_per_page);
                            for ($i=1;$i<=$total_pages; $i++)
                            {
                                echo "<li class='page-item ".($page==$i ? 'active':'')."'><a class='page-link ".($page==$i ? 'deep-orange':'deep-orange-text')."' href='sort.php?d_id=".$d_id."&page=".$i."'>".$i."</a></li>";
                            }
                                
                            ?>  
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 table-responsive">
               
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
        