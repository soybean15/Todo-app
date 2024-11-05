<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

class Task extends Model
{
    //
    use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

    use SoftDeletes;
    protected $fillable=[
        'title',
        'description',
        'parent_id',
        'order',
        'status',
        'completed_at',
        'start_date',
        'due_date',
    ];

    public function scopeFilter(Builder $builder,$filter){


        switch($filter){
            case 'today':
                 $builder->where('start_date',Carbon::today());
                 break;
            case 'upcoming':
                $builder->where('start_date','>',Carbon::today());
                break;
            case 'overdue':
                    $builder->where('start_date','<',Carbon::today());
                    break;
            default :
                $builder;
        }
    }

}
