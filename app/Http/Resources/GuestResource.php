<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GuestResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'wedding_id' => $this->wedding_id,
            'table_id' => $this->table_id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'rsvp_token' => $this->rsvp_token,
            'rsvp_status' => $this->rsvp_status,
            'allergies' => $this->allergies,
            'created_at' => $this->created_at,
        ];
    }
}