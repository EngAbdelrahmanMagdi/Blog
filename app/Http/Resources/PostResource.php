<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'title'=> $this->title,
            'description'=> $this->description,
            'created_at'=> $this->created_at,
            // 'user_id'=> $this->user ? $this->user->id: null,
            // 'user_name'=> $this->user ? $this->user->name: null,
            'user'=> new UserResource($this->user)
        ];
    }
}
