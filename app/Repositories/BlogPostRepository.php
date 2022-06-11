<?php

namespace App\Repositories;

use App\Models\BlogPost as Model;

class BlogPostRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * Получить список статей для вывода в админке
     * @return LengthAwarePaginator
     */
    public function getAllWithPaginate()
    {
        $columns = [
            'id',
            'title',
            'slug',
            'excerpt',
            'content_raw',
            'content_html',
            'image',
            'likes',
            'comments_count',
            'is_published',
            'published_at',
            'user_id',
            'category_id',
        ];
        $result = $this->startConditions()
            ->select($columns)
//            ->orderBy('id', 'DESC') // выведит записи в блоге по убыванию
            ->orderBy('id')
//            ->with(['category', 'user']) не оптимально
            ->with([
                //можно так
                'category' => function ($query) {
                    $query->select(['id', 'title']);
                },
                //или так
                'user:id,name',
            ])
            ->paginate(2);

        return $result;
    }

    public function getEdit($id)
    {
        return $this->startConditions()->find($id);
    }

}
