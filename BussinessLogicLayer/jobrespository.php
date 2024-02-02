<?php
//job resporitory pattern
interface JobRepository {
    public function insertJob(Job $job);
    public function getAllJobs();
    public function getJobById($job_id);
    public function deleteJob($pid);
}
?>
