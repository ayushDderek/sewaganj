<?php

namespace app\core;

use app\core\db\DbModel;

abstract class CategoryModel extends DbModel
{
    abstract public function getImagePath(): string;
}