<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MarketplaceProperty extends Model
{
    protected $table = 'marketplace_property';
    protected $guarded = [];
    
    public function marketplace()
    {
        return $this->belongsTo('App\Model\PropertyMarketplace','marketplace_id', 'id');
    }

    public function property()
    {
        return $this->hasOne('App\Model\Property','id', 'property_id');
    }
}
