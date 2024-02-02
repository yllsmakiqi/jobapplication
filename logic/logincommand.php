<?php
// Concrete Command 1
class LoginCommand implements Command {
    private $loginLogic;

    public function __construct(LoginLogic $loginLogic) {
        $this->loginLogic = $loginLogic;
    }

    public function execute() {
        $this->loginLogic->verifyData();
    }
}

// Concrete Command 2
class RegisterCommand implements Command {
    private $registerLogic;

    public function __construct(RegisterLogic $registerLogic) {
        $this->registerLogic = $registerLogic;
    }

    public function execute() {
        $this->registerLogic->insertData();
    }
}
?>
