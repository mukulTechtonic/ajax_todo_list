<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResourceDynamic extends Model
{
    use HasFactory;
    protected $table = 'research_dynamic';
    protected $fillable =['res_article_tittle','res_article_heading','res_article_para','res_article_related','extra_1','extra_2','extra_3','action_reserch_text','extra_4','extra_5','updated_by','created_by'
    ];

}
