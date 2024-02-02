<?php
include 'components/header.php';
include_once 'logic/JobMapper.php'; // Check if the file path is correct
include_once 'logic/Job.php';

$mapper = new JobMapper();
$jobs = $mapper->getAllJobs();
?>

<div class="main-prod">
<div class="mainnalt-prod">
        <h1>Punët më të fundit.</h1>
        <h2>Shfletoni punët e reja dhe aplikoni tani!</h2>
    </div>

    <ul>
        <?php for ($i = 0; $i < min(3, count($jobs)); $i++) { ?>
            <?php $pid = $jobs[$i]['puna_id']; ?>
            <li>
                <img src="<?php echo $jobs[$i]['fotoprod']; ?>">
                <a href="<?php echo "afterbuying.php?pid=$pid" ?>">
                    <h3>"<?php echo $jobs[$i]['emripuna']; ?>"</h3>
                    <h4>"<?php echo $jobs[$i]['pershkrimi']; ?>"</h4>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>

<div class="mainbottom-prod">
    <div class="bottomupi">
        <h1>Punët e vlefshme</h1>
        <h2>Klikoni mbi punën tuaj të preferuar për t'iu aplikuar</h2>
    </div>
    <ul>
        <?php foreach ($jobs as $job) { ?>
            <li>
                <?php $pid = $job['puna_id']; ?>
                <img src="<?php echo $job['fotoprod']; ?>">
                <a href="<?php echo "afterbuying.php?pid=$pid" ?>">
                    <h3><?php echo $job['emripuna']; ?> </h3>
                    <h4><?php echo $job['pershkrimi']; ?></h4>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>

<?php include 'components/footer.php' ?>