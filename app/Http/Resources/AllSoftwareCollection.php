<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AllSoftwareCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request)
    {
             return $this->collection->map(function($item) {
            return [
                'id' => $item->id,
                'order_date' => $item->order_date,
                'price' => $item->price,
                'number_of_device' => $item->number_of_device,
                'demon_version' => $item->demon_version,
                'created_at' => $item->created_at->format(' M D Y'),

                'software' => [
                    'id' => $item->software->id,
                    'name' => $item->software->name,
                    'version' => $item->software->version,
                    'icon' => $item->software->icon,
                ],

                // 'invoice' => [
                //     'id' => $item->invoice->id,
                //     'number' => $item->invoice->number,
                //     'date' => $item->invoice->date,
                //     'total' => $item->invoice->total,
                //     'paid' => $item->invoice->paid,
                // ],

                'keys' => $item->Key->map(function ($key) {
                    return [
                        'id' => $key->id,
                        'expiration_date' => $key->expiration_date,
                        'activaed_key' => $key->activate_key,
                        'device_number'=>$key->device_number
                         ];
                         }),
                 'order_status' => [
                    'id' => $item->orderstatus->id,
                    'name' => $item->orderstatus->name,

                ]



            ];
        });
    }
}
