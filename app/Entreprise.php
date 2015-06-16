<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Entreprise extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'entreprises';

    public function users()
    {
        return $this->morphMany('\App\User', 'user');
    }
    
    public function offres(){
        return $this->hasMany('\App\OffreStage','entreprise_id');
    }

}
