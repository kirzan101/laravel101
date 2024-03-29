<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => (int) $this->getKey(),
            'description' => $this->description,
            'created_at' => $this->created_at,
            'updated_by' => $this->updated_at,
            //'comments' => $this->comments//CommentResource::collection($this->comments),
        ];
    }
}