<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventorySettings extends Model
{
    use HasFactory;

    public function inventorysettingdetails() {
        return $this->hasMany(InventorySettingDetails::class, 'commonCode_id');
    }
    
    
}
