<?php

namespace App\Http\Resources;

class SubCategoryResource extends BaseResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'slug'        => $this->slug,
            'is_active'   => $this->is_active,
            'created_at'  => $this->asDate('created_at'),
        ];
    }
}
