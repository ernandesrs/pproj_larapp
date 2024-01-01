<?php

namespace App\Models;

trait TraitFilter
{
    /**
     * Search
     *
     * @return mixed
     */
    public static function search(int|string $search)
    {
        $clear = \Str::limit(preg_replace('/[^a-zA-Z0-9\s]/', '', $search), 255);
        return self::whereRaw("MATCH(" . implode(',', self::searchableFields()) . ") AGAINST(? IN BOOLEAN MODE)", [$clear]);
    }

    /**
     * Define the searchable fields
     *
     * @return array[string]
     */
    abstract static public function searchableFields();
}