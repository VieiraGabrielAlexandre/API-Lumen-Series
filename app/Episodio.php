<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    public $timestamps = false;
    protected $fillable = ['temporada', 'numero', 'assistido', 'serie_id'];
    protected $appends = ['links'];
    protected $perPage = 5;

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

    public function getAssistidoAttribute($assistido) : bool
    {
        return $assistido;
    }

    public function getLinksAttribute() : array
    {
        return [
            'self' => '/api/episodios/' . $this->id,
            'series' => '/api/series/' . $this->serie_id
        ];
    }
}
