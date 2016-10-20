<?php

namespace App;

use Laravel\Spark\Team as SparkTeam;
use ZiNETHQ\SparkRoles\Traits\CanHaveRoles;

class Team extends SparkTeam
{
    use CanHaveRoles;
}
