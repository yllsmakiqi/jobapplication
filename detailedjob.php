<?php
    include 'components/header.php';
    include_once 'logic/UserMapper.php';
    include_once 'logic/JobMapper.php';
    include_once 'logic/Job.php';
    
    $mapper = new JobMapper();
    $pid=$_GET['pid'];
    $puna = $mapper->getJobById($pid);
?>

        <?php
        if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == 1) { 
        ?>
            <div class="kkk2">
                
                <div class="nesepo2">
                    <img src="<?= $puna['fotoprod']?>"> 
                </div>
                <div class="nesepo">
                    <h1> <?= $puna['emripuna']?></h1>
                    <h3><?= $puna['pershkrimi']?></h3>
                    <a href="https://www.instagram.com/tincustoms/?hl=en">Dergo CV</a>
                </div>
            </div>
        <?php }  else { ?>
            <div class="kkk2">
                <div class="nesejo">
                    <img src="images/logo.png" >
                    <h3>Ju duhet te jeni te regjistruar per te shikuar kete pune ne detaje! :( </h3>
                    <a href="logini.php"> Regjistrohu tani!</a>
                </div>
                <div class="nesejo2">
                    <img src="images/giphy.gif" >
                    
                </div>
        </div>
        <?php }?>
        
 <?php include 'components/footer.php'?>