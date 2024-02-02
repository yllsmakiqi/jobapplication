<?php

require_once 'SecurityLevel.php';
require_once 'securityactions.php';
require_once 'auditloggermodule.php';
require_once 'authenticationmanager.php';

class SecurityEnforcer implements SecurityActions
{
    public function enforceSecurity()
    {
        $userRole = $_SESSION['role'] ?? 'guest';

        if ($userRole === 'admin') {
            echo "Admin user has unrestricted access.\n";
        } else {
            echo "Admin is fine! ";
        }
    }
    public function monitorThreats()
    {
        $anomaliesDetected = $this->detectAnomalies();

        if ($anomaliesDetected) {
            $this->writeToLogFile("Potential threat detected. Initiating security protocols.");
            $this->notifySecurityTeam();
            $this->blockSuspiciousActivity();
        } else {
            echo "No potential threats detected.\n";
        }
    }
    public function blockSuspiciousActivity()
    {
        $unusualBehaviorDetected = $this->detectUnusualBehavior();

        if ($unusualBehaviorDetected) {
            $this->writeToLogFile("Blocking suspicious activity. Unusual behavior detected.");
        } else {
            echo "No suspicious activity to block.\n";
        }
    }

    public function notifySecurityTeam()
    {
        $securityTeamEmail = 'security@gmail.com';
        $subject = 'Security Alert';
        $message = 'Security incident detected. Please investigate immediately.';
        mail($securityTeamEmail, $subject, $message);
        echo "Security team notified.\n";
    }
    private function writeToLogFile($message)
    {

        $logFilePath = 'audit_log.txt';
        file_put_contents($logFilePath, $message . PHP_EOL, FILE_APPEND);
    }
    private function detectAnomalies()
{
    $data = [[1.0, 1.0], [1.1, 0.9], [1.2, 1.2], [2.0, 2.0], [2.1, 2.1], [8.0, 8.0], [8.1, 8.1], [8.2, 8.2]];
    $lof = new $data(); // Hypothetical LOF class from scikit-learn or another library
    $lof->fit($data);
    $anomalyScores = $lof->predict($data);
    $threshold = 2.0;
    $anomalies = array_filter(
        $anomalyScores,
        function ($score) use ($threshold) {
            return $score > $threshold;
        }
    );

    if (!empty($anomalies)) {
        $this->writeToLogFile("Anomalies detected: " . implode(', ', array_keys($anomalies)));
        return true; // Anomalies detected
    } else {
        return false; // No anomalies detected
    }
}
private function detectUnusualBehavior()
{
    $userActions = ['actionA', 'actionB', 'actionC', 'unusualAction'];
    $unusualCriteria = ['unusualAction'];
    $unusualDetected = !empty(array_intersect($userActions, $unusualCriteria));

    if ($unusualDetected) {
        $this->writeToLogFile("Unusual behavior detected: User exhibited abnormal actions.");
        return true;
    } else {
        return false;
    }
}


}
?>
