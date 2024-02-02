<?php 
include "JobMapper.php";
if (isset($_GET['action']) && $_GET['action']=="delete-job") {
    if(isset($_GET['job-id']) && (is_numeric($_GET['job-id']))){
        $pid = $_GET['job-id'];
        $mapper = new JobMapper();
        $mapper->deleteJob($pid);
        header("Location:../dashboardjob.php");
    }
    
    
}