<?php

namespace App\Services;

use App\Models\Location;
use Illuminate\Support\Collection;

class LocationService
{
    /**
     * Get all locations from the data source
     *
     * @return Collection
     */
    public function getAllLocations(): Collection
    {
        // Simulated data - in a real application, this would come from a database
        return collect([
            [
                'code' => 'LOC001',
                'name' => 'Sede Central',
                'image' => 'https://images.unsplash.com/photo-1495562569060-2eec283d3391?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'creation_date' => now()
            ],
            [
                'code' => 'LOC002',
                'name' => 'Sede Norte',
                'image' => 'https://images.unsplash.com/photo-1467269204594-9661b134dd2b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'creation_date' => now()->subDays(5)
            ]
        ])->map(function ($location) {
            return new Location($location);
        });
    }
}
