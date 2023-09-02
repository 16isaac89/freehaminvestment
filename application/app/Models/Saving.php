<?php

namespace App\Models;

use App\Traits\Auditable;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Saving extends Model
{
    use SoftDeletes, Auditable, HasFactory;

    public $table = 'savings';

    protected $dates = [
        'from_date',
        'to_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'member_id',
        'target_amount',
        'from_date',
        'to_date',
        'month',
        'year',
        'price',
        'amount_saved',
        'balance',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');
    }

    public function getFromDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setFromDateAttribute($value)
    {
        $this->attributes['from_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getToDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setToDateAttribute($value)
    {
        $this->attributes['to_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
    public function transaction()
    {
        return $this->morphOne(Transaction::class, 'transactionable');
    }
}
