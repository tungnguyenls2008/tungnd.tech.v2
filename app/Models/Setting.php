<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $facts_description
 * @property string $zalo_link
 * @property string $twitter_link
 * @property string $skills_description
 * @property string $linkin_link
 * @property string $instagram_link
 * @property string $about_additional_description
 * @property string $facebook_link
 * @property string $background_img
 * @property string $avatar_img
 * @property string $about_title
 * @property string $about_phone
 * @property string $about_email
 * @property string $about_description
 * @property string $about_address
 * @property int $updated_at
 * @property int $facts_num_4
 * @property int $facts_num_3
 * @property int $facts_num_2
 * @property int $facts_num_1
 * @property int $deleted_at
 * @property int $created_at
 * @property int $about_bod
 */
class Setting extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'settings';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'facts_description', 'zalo_link', 'updated_at', 'twitter_link', 'skills_description', 'linkin_link', 'instagram_link', 'facts_num_4', 'facts_num_3', 'facts_num_2', 'facts_num_1', 'about_additional_description', 'facebook_link', 'deleted_at', 'created_at', 'background_img', 'avatar_img', 'about_title', 'about_phone', 'about_email', 'about_description', 'about_bod', 'about_address'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'facts_description' => 'string', 'zalo_link' => 'string', 'updated_at' => 'timestamp', 'twitter_link' => 'string', 'skills_description' => 'string', 'linkin_link' => 'string', 'instagram_link' => 'string', 'facts_num_4' => 'int', 'facts_num_3' => 'int', 'facts_num_2' => 'int', 'facts_num_1' => 'int', 'about_additional_description' => 'string', 'facebook_link' => 'string', 'deleted_at' => 'timestamp', 'created_at' => 'timestamp', 'background_img' => 'array', 'avatar_img' => 'array', 'about_title' => 'string', 'about_phone' => 'string', 'about_email' => 'string', 'about_description' => 'string', 'about_bod' => 'timestamp', 'about_address' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'updated_at', 'deleted_at', 'created_at', 'about_bod'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...

    // Functions ...

    // Relations ...
}
