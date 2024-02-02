<?php

interface SecurityActions
{
    public function enforceSecurity();
    public function monitorThreats();
    public function blockSuspiciousActivity();
    public function notifySecurityTeam();
}
?>
