<?php

namespace App\Domain\Models;
use App\Helpers\Core\PDOService;

class OrderModel extends BaseModel
{

    public function __construct(PDOService $pdo_service) {
        parent::__construct($pdo_service);
    }

}
