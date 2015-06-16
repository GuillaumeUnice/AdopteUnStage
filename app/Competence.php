<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "competences";

    protected $fillable = ['nom'];


    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function etudiants()
    {
        return $this->belongsToMany('App\Etudiant', 'competence_etudiant');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function offre_stages()
    {
        return $this->belongsToMany('App\OffreStage');
    }
}
