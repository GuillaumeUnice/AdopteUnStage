<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialite extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "specialites";

    /**
     * @var array
     */
    protected $fillable = ['nom', 'promotion_id'];

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function etudiants()
    {
        return $this->hasMany('App\Etudiant');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function promotion()
    {
        return $this->belongsToMany('App\Promotion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function offre_stage()
    {
        return $this->belongsToMany('App\OffreStage');
    }

}
