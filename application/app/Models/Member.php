<?php

namespace App\Models;

use App\Traits\Auditable;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Notifications\MemberResetPasswordNotification;
use Illuminate\Notifications\Notifiable;

class Member extends Authenticatable implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, Auditable, HasFactory;
    use Notifiable;

    public $table = 'members';
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $appends = [
        'profile_photo',
    ];

    protected $dates = [
        'dob',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'first_name',
        'second_name',
        'freham',
        'phone_1',
        'phone_2',
        'dob',
        'nok',
        'district',
        'village',
        'gender',
        'idno',
        'email',
        'noknumber',
        'password',
//nok
        'nok_name',
        'nok_gender',
        'nok_village',
        'nok_district',
        'noknumber',
        'nok_relationship',
        //
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function memberSavings()
    {
        return $this->hasMany(Saving::class, 'member_id', 'id');
    }

    public function memberShares()
    {
        return $this->hasMany(Share::class, 'member_id', 'id');
    }

    public function getDobAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDobAttribute($value)
    {
        $this->attributes['dob'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getProfilePhotoAttribute()
    {
        $file = $this->getMedia('profile_photo')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }
    public function parent()
    {
        return $this->belongsTo(Member::class,'nok')->where('nok',0)->with('nok');
    }

    public function children()
    {
        return $this->hasMany(Member::class,'nok')->with('children');
    }
    public function shares()
    {
        return $this->hasMany(Share::class);
    }
    public function savings()
    {
        return $this->hasMany(Saving::class);
    }
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MemberResetPasswordNotification($token));
    }
}
