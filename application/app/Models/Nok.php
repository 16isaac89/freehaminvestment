<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nok extends Model
{
    use SoftDeletes, InteractsWithMedia, Auditable, HasFactory;
    use Notifiable;

    public $table = 'noks';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'gender',
        'village',
        'district',
        'phone',
        'relationship',
        'member_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function member()
    {
        return $this->belongsTo(Share::class, 'member_id', 'id');
    }
}
