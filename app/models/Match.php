<?php
 
class Match extends Eloquent {
 
    protected $guarded = array();

    public $rules = array(
    	
    );

	public function lineup()
    {
        return $this->belongsToMany('Player')->withPivot('subin', 'subout');
    }    
}