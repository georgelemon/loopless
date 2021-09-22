<?php

namespace App\Model;

use Loopless\Database\Model;

class UserModel extends Model
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'user';

    /**
     * Primary Key
     * @var string
     */
    protected $primaryKey = 'id';

}