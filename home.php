<?php 
ob_start();
session_start();
$page_title = "Login Page ";
$page_key = "";
$page_desc = "";
include('inc/top.php');
if(!isset($_SESSION['user_email'])){
    header("location:index.php");
}
else{
  if(isset($_SESSION['user_email'])){
       $user_id = $_SESSION['user_id'];
       $mobile = $_SESSION['user_email'];
       $name = ucfirst($_SESSION['user_name']);
      /*
       $to = "santu.ghau@gmail.com";
        $header = "$name<$mobile>";
        $subject = "Home Page From $name";
        $message = "Name: $name \n\n Email:  $mobile ";  
        mail($to, $subject, $message, $header); */ 
  }
?>
    <!-- Start from here-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php include('inc/nav.php'); ?>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-md-2">
                <?php include('inc/sidebar.php'); ?>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <form class="form-inline" action="sort.php?<?php echo $dept_id ; ?>" method="get">
                            <div class="form-group col-md-offset-2">
                                <labeL>Select Exam</label>
                                <select class="form-control text-center" name="d_id">
                                    <?php 
                $get_option = "SELECT * FROM department ORDER BY dept_name ASC";
                $run_option = mysqli_query($con,$get_option);
                 while ($row_option = mysqli_fetch_array($run_option)){
                    $dept_id = $row_option[dept_id];
                    $dept_name = ucfirst($row_option[dept_name]);
                    echo "<option value='$dept_id'>$dept_name</option>";
                    }
                ?>
                                </select>
                            
                            <button type="submit" class="btn btn-info">Submit</button></div>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <?php
                $record_per_page = 12;
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
                $get_option = "SELECT * FROM exam ORDER BY exam_name ASC LIMIT $start_from, $record_per_page";
                $run_option = mysqli_query($con,$get_option);
                while ($row_option = mysqli_fetch_array($run_option)){
                $option_id = $row_option['exam_id'];
                $exam_image = $row_option['exam_image'];
                $option_title = ucfirst($row_option['exam_name']);
                ?>
                        <div class="col-md-4" style="padding-bottom:15px; height:320px;">
                            <div class="card"> <img class="card-img-top" src="images/exam/<?php echo $exam_image;?>" alt="<?php echo $option_title;?>-online-exam" height="150px;">
                                <div class="card-body" style="height:150px;">
                                    <h4 class="card-title text" style="height:70px;"><?php echo $option_title; ?></h4>
                                    <a href="s-index.php?exam_id=<?php echo $option_id?>" class="btn btn-primary" >Start Exam</a> 
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination pagination-circle border-0">
                            <?php 
                            $page_query = "SELECT * FROM exam";
                            $page_result = mysqli_query($con,$page_query);
                            $total_records = mysqli_num_rows($page_result);
                            $total_pages = ceil($total_records/$record_per_page);
                            for ($i=1;$i<=$total_pages; $i++)
                            {
                                echo "<li class='page-item ".($page==$i ? 'active':'')."'><a class='page-link ".($page==$i ? 'deep-orange':'deep-orange-text')."' href='home.php?page=".$i."'>".$i."</a></li>";
                            }
                            ?>  
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 table-responsive">
                <h5 class="bg-warning">View All Performence</h5>
            <table class="table table-bordered table-condensed ">
                <thead class="thead-dark">
                        <tr >
                            <th>Sr</th>
                            <th>Exam</th>
                            <th>Marks</th>
                            <th>Date</th>
                        </tr>
                </thead>
        <?php
        $get_result = "SELECT * FROM result where user_id = '$user_id' ORDER BY 1 DESC";
        $run_result = mysqli_query($con,$get_result);
        $sr = 0;
        while($row_result=mysqli_fetch_array($run_result)){
        $result_id = $row_result['result_id'];
        $user_id = $row_result['user_id'];
        $exam_name = $row_result['exam_name'];
        $percent = $row_result['percent'];
        $exam_date = $row_result['exam_date'];
            $sr++;
        ?>
                        <tr>
                            <td><?php echo $sr;?></td>
                            <td><?php echo $exam_name;?></td>
                            <td><?php echo $percent;?></td>
                            <td><?php echo $exam_date;?></td>
                        </tr>
        <?php } ?>
            </table>
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
        <?php } ?>
        <script>
    $(".table").DataTable();
</script>