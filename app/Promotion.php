<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "promotions";
    protected $fillable = ['nom'];

    public $timestamps = false;


    public function etudiants()
    {
        return $this->hasMany('App\Etudiant');
    }

    public function specialites()
    {
        return $this->belongsToMany('App\Specialite');
    }

    /**
     * Une promotions peut être liée à PLUSIEURS modérateurs
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function moderateurs()
    {
        return $this->belongsToMany('App\Moderateur');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function offre_stage()
    {
        return $this->belongsToMany('App\OffreStage');
    }
}
