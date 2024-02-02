<?php
require_once 'securityenforcer.php';
require_once 'authenticationmanager.php';
class AuditLoggerModule 
{
    public function logAuthenticationEvent()
    {

        $timestamp = date('Y-m-d H:i:s');
        $username = $_SESSION['username'] ?? 'Unknown User';
        $ipAddress = $_SERVER['REMOTE_ADDR'] ?? 'Unknown IP';
        $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown User Agent';

        $logMessage = "Authentication event at $timestamp: User $username logged in from $ipAddress. User Agent: $userAgent";
        $this->writeToLogFile($logMessage);
    }

    public function logSecurityIncident()
    {

        $timestamp = date('Y-m-d H:i:s');
        $incidentType = 'Unauthorized Access';
        $ipAddress = $_SERVER['REMOTE_ADDR'] ?? 'Unknown IP';
        $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown User Agent';

        $logMessage = "Security incident at $timestamp: $incidentType. IP Address: $ipAddress. User Agent: $userAgent";
        $this->writeToLogFile($logMessage);
    }

    public function logSessionActivity()
    {

        $timestamp = date('Y-m-d H:i:s');
        $username = $_SESSION['username'] ?? 'User';
        $action = 'Interacted with the system';
        $ipAddress = $_SERVER['REMOTE_ADDR'] ?? 'IP';
        $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? ' User Agent';

        $logMessage = "Session activity at $timestamp: User $username $action. IP Address: $ipAddress. User Agent: $userAgent";
        $this->writeToLogFile($logMessage);
    }
    private function writeToLogFile($message)
    {

        $logFilePath = 'audit_log.txt';
        file_put_contents($logFilePath, $message . PHP_EOL, FILE_APPEND);
    }

}
?>
