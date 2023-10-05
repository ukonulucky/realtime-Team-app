<?php
namespace App;

use App\Services\Geolocation\Geolocation;
use App\Services\Map\Map;
use App\Services\Satellite\Satellite;

// use App\Services\Geolocation\Geolocation;

class PlayGround {
   public function __construct(Geolocation $geolocation)
   {
    $mapData = new Map();
    $satelliteData = new Satellite();
    $result = new Geolocation($mapData,$satelliteData);
    dump($result->search("china main town"));
    // $data = app(abstract:Geolocation::class);
   }


}