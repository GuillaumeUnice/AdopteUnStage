<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OffreStage extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "offre_stages";

    public function entreprise(){
    	return $this->belongsTo('\App\Entreprise','entreprise_id');
    }

    /**
     * Une offre de stage est associé à UN feedbacks
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function feedback()
    {
        return $this->hasOne('\App\Feedback','feedback_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function promotion()
    {
        return $this->belongsTo('App\Promotion', 'promotion_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function specialite()
    {
        return $this->belongsTo('App\Specialite', 'specialite_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function competences()
    {
        return $this->belongsToMany('App\Competence');
    }

    public function etudiants(){
        return $this->hasMany('App\Etudiant');
    }

}
