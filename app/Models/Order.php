<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends BaseModel
{
    //
    static function getNumbers()
    {
        $research_client_number = ResearchForClientRequest::count();
        $research_company_number = ResearchForCompanyRequest::count();
        $traning_number = TraningRequest::count();
        $bs_dev_number = BusnissDevelopmentRequest::count();
        $elearning_number = ElearningRequest::count();
        $staffing_client_number = StaffingForClientRequest::count();
        $staffing_company_number = StaffingForCompanyRequest::count();
        return compact(
            'research_client_number',
            'research_company_number',
            'traning_number',
            'bs_dev_number',
            'elearning_number',
            'staffing_client_number',
            'staffing_company_number',
        );
    }
}
