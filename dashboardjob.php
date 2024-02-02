<?php include 'components/header.php';
include_once 'logic/JobMapper.php';

$mapper = new JobMapper();
$jobs = $mapper->getAllJobs();
if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == 1) {
?> 


    <div class="produktet">
            <h3>Punet e postuara</h3>
            <table class="tablla">
                <tr>
                    <th>ID</th>
                    <th>Emri i Produktit</th>
                    <th>Qmimi Produktit</th>
                    <th>Modifiko</th>
                </tr>
                <?php foreach($jobs as $puna){ ?>
                <tr>
                    <td><?php echo $puna['puna_id']?></td>
                    <td><?php echo $puna['emripuna']?></td>
                    <td><?php echo $puna['pershkrimi']?></td>
                   
                    <td><a href="<?php echo "logic/deleteJob.php?action=delete-Job&Job-id=" . $puna['puna_id'];?>">Delete</a></td>
                    
                </tr>
                <?php } ?>
            </table>
    </div>
                
 <?php } else { 
     header("Location: home.php");
 }
 
 include 'components/footer.php' ?>