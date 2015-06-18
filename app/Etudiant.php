<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table="etudiants";

    protected $fillable = ['promotion_id', 'specialite_id', 'website', 'social'];


    public function competences()
    {
        return $this->belongsToMany('App\Competence', 'competence_etudiant');
    }

    public function offre_stages()
    {
        return $this->belongsToMany('App\OffreStage', 'etudiant_offre_stage');
    }

    public function promotion()
    {
        return $this->belongsTo('App\Promotion');
    }

    public function specialite()
    {
        return $this->belongsTo('App\Specialite');
    }

    /**
     * Un étudiant est associé à plusieurs feedbacks
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function feedback()
    {
        return $this->hasMany('App\Feedback');
    }


    public function users()
    {
        return $this->morphMany('App\User', 'user');
    }

}
