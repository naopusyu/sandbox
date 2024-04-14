<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Model;

class Service 
{
    public function echo(): void
    {
        $model = new Model();
        $model->echo();
    }
}
