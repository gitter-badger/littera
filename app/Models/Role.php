<?php namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{

    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';

    /**
     * The registered rules
     *
     * @var array
     */
    protected $rules = [
        'name' => 'required',
        'description' => '',
    ];

}