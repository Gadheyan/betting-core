<?php
namespace App\Models;
use App\Models\User;
use App\Util\SecurityUtils;
use Illuminate\Database\Eloquent\Model;
class LinkedSocialAccount extends Model
{
    protected $fillable = [
        'provider_name',
        'provider_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = SecurityUtils::getRandomString();
        });
    }
    public $incrementing = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}