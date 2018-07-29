<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cloudflare\API\Auth\APIKey;
use Cloudflare\API\Adapter\Guzzle;
use Cloudflare\API\Endpoints\Zones;
use Cloudflare\API\Endpoints\DNS;

class DomainController extends Controller
{
    public function __construct(Request $request)
    {
        $this->region = trans('region.global');
        $this->serviceName = trans('service.domain');
        $this->key = new APIKey(config('cloudflare.email'), config('cloudflare.key'));
        $this->adapter = new Guzzle($this->key);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cloudflareZones = new Zones($this->adapter);
        $zones = $cloudflareZones->listZones();

        $data = [
            'serviceName' => $this->serviceName,
            'region' => $this->region,
            'zones' => $zones->result,
        ];

        return view('service.domain.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($zoneid, Request $request)
    {
        $cloudflareZones = new Zones($this->adapter);
        $zones = $cloudflareZones->listZones();

        $cloudflareDNS = new DNS($this->adapter);
        $zoneDetails = $cloudflareDNS->listRecords($zoneid);

        $data = [
            'serviceName' => $this->serviceName,
            'region' => $this->region,
            'zones' => $zones->result,
            'zoneName' => $zoneDetails->result[0]->zone_name,
            'zoneDetails' => $zoneDetails->result,
        ];

        return view('service.domain.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
