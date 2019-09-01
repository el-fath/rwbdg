<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MarketplaceProperty extends Model
{
    protected $table = 'marketplace_property';
    protected $guarded = [];
    
    public function marketplace()
    {
        return $this->hasOne('App\Model\PropertyMarketplace','id', 'marketplace_id');
    }

    public function property()
    {
        return $this->hasOne('App\Model\Property','id', 'property_id');
    }
}
