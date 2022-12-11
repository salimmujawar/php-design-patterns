<?php
require_once './Leave.php';
require_once './LeaveFactory.php';
require_once './LeaveInterface.php';
require_once './AnnualLeave.php';
require_once './CompoffLeave.php';

//we create DB conn here
$db = 'conn';
$leaveType = 'annual_leave';

//Get the correct Leave class for the leave applied
$leaveFactory = new LeaveFactory();
$leaveService = $leaveFactory->make($leaveType);

//Create leave for the employee
$leave = new Leave($db, $leaveService);
$leave->submitLeave();
