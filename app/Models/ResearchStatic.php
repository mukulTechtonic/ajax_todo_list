<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchStatic extends Model
{
    use HasFactory;
    protected $table = 'research_static';
    protected $fillable =['res_article_heading','res_article_desc','res_article_subheading_1','res_article_subdesc_1','res_article_subheading_2','res_article_subdesc_2','res_article_subheading_3','res_article_subdesc_3','extra_1','extra_2','extra_3','action_reserch_text','extra_4','extra_5','updated_by','created_by'
    ];
}
