<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Posts
 * @package App\Models
 * @version October 14, 2021, 4:14 am UTC
 *
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $user_id
 */
class Posts extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'table_posts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'description',
        'image',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'image' => 'string',
        'user_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'nullable|string|max:200',
        'description' => 'nullable|string',
        'image' => 'nullable|string|max:1000',
        'user_id' => 'nullable|string|max:200',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
