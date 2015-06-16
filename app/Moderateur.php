<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Moderateur extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'moderateurs';

    public function users()
    {
        return $this->morphMany('\App\User', 'user');
    }

    /**
     * Un modérateur peut être lié à PLUSIEURS promotions
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function promotions()
    {
        return $this->belongsToMany('App\Promotion');
    }

}
