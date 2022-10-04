<?php

namespace App\TuChance\Contracts;

use Illuminate\Database\Eloquent\Builder;

interface Locateable
{
    /**
     * Country related to the resource
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country();

    /**
     * State related to the resource
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state();

    /**
     * City related to the resource
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city();

    /**
     * Filter query by country code
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @param  string                                $code
     * @return void
     */
    public function scopeByCountry(Builder $query, $code);
}
