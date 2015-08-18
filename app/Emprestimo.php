<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Emprestimo extends Model {

    use SoftDeletes;

	protected $fillable = ['data', 'obs'];
    protected $dates = ['data', 'deleted_at'];

    public function status() {
        return $this->belongsTo('App\Status', 'status_id');
    }

    public function livro() {
        return $this->belongsTo('App\Livro', 'livro_id');
    }

    public function dono() {
        return $this->belongsTo('App\User', 'dono_id');
    }

    public function solicitante() {
        return $this->belongsTo('App\User', 'solicitante_id');
    }
}
