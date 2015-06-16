<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model {

    /**
     * Nom de la table associée au model
     * @var string
     */
	protected $table = 'feedbacks';

    /**
     * Proporiétés autorisées pour l'envoie de données de masse
     * @var array
     */
    protected $fillable = ['etudiant_id', 'contenu', 'titre'];



    /**
     * Un feedback est lié à UN étudiant
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function etudiant()
    {
        return $this->belongsTo('App\Etudiant');
    }

    /**
     * Un feedback est associé à UNE entreprise
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function offre_stage()
    {
        return $this->belongsTo('\App\OffreStage','feedback_id');
    }


}
