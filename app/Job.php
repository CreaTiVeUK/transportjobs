<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
	// protect from mass assignment vulnerabilities
    protected $fillable = [ 'JobStatus', 'NoOfVehicles', 'DrivenPrice', 'TransportedPrice', 'CollectionDate', 'DeliveryDate', 'ServiceType', 'RequestDate'];
}
