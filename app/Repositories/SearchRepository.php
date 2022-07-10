<?php

namespace App\Repositories;


use App\Models\BlogPost as Model;

class SearchRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }

    public function search($request)
    {
        $search = $request->s;
        $paginator = Model::where('title', 'LIKE', "%{$search}%")->orderBy('title')->paginate(10);
        return $paginator;
    }

}
