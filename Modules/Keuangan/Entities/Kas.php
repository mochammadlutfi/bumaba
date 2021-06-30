<?php

namespace Modules\Keuangan\Entities;

use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    protected $table = 'kas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama', 'saldo'
    ];

    public function trans_kas()
    {
        return $this->hasMany('Modules\Keuangan\Entities\TransaksiKas', 'kas_id', 'kas_id');
    }

    public function trans_kas_untuk()
    {
        return $this->hasOne('Modules\Keuangan\Entities\TransaksiKas', 'kas_id', 'tujuan');
    }
}
