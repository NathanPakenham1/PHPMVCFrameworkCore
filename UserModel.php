<?php

namespace nathanpakenham\core;

use nathanpakenham\core\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}
