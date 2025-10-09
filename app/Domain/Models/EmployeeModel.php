<?php

namespace App\Domain\Models;
use App\Helpers\Core\PDOService;

class EmployeeModel extends BaseModel
{

    public function __construct(PDOService $pdo_service) {
        parent::__construct($pdo_service);
    }

}
