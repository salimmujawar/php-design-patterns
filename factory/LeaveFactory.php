<?php
class LeaveFactory
{

    public function make($leaveType)
    {
        switch ($leaveType) {
            case 'annual_leave':
                return $this->createAnnualLeave();
                break;
            case 'compoff_leave':
                return $this->createCompoffLeave();
                break;
        }
    }

    private function determineCorrectLeave($leaveType): string
    {
        if ($leaveType == 'annual_leave') {
            return 'annual_leave';
        }
        return 'compoff_leave';
    }

    private function createAnnualLeave(): AnnualLeave
    {
        $annualLeave = new AnnualLeave();
        return $annualLeave;
    }

    private function createCompoffLeave(): CompoffLeave
    {
        $compoffLeave = new CompoffLeave();
        return $compoffLeave;
    }
}
