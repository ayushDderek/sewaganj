<?php

namespace app\core;

use app\core\db\DbModel;

abstract class ServiceModule extends DbModel
{
    abstract public function getImagePath(): string;
}