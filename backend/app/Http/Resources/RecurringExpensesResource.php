<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RecurringExpensesResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'amount' => $this->amount,
            'mark_as_paid' => $this->mark_as_paid,
            'accumulate' => $this->accumulate,
            'duplicate_every_month' => $this->duplicate_every_month,
            'category_id' =>$this->category_id,
            'category' => $this->category,
            'user_id' =>$this->user_id,
            'user' => $this->user,
        ];
    }
}
