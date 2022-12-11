<?php
class Leave
{
    private $db;
    private $leaveService;

    public function __construct($dbc, LeaveInterface $leaveService)
    {
        $this->db = $dbc;
        $this->leaveService = $leaveService;
    }

    public function submitLeave()
    {
        $this->leaveService->applyLeave();
    }
}
