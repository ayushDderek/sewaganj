<?php

namespace app\models;

use app\core\Model;

class category extends Model
{
    public string $categoryName;
    public string $image;

    public function rules(): array
    {
        return [
            'category' => [self::RULE_REQUIRED],
            'image' => [self::RULE_REQUIRED]
        ];
    }

    public function labels(): array
    {
        return [];
    }

    public function category()
    {

    }
}