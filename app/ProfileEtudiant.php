<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileEtudiant extends Model {

    protected $fillable = ['etudiant_id', 'professionnel', 'education', 'langue_id'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "profile_etudiants";

    public function competences()
    {
        return $this->belongsToMany('App\Competence');
    }

}
