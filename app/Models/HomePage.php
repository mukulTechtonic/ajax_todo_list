<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;
    protected $table = 'home_pages';
    protected $fillable =['banner_text','res_article','res_article_desc','pol_brief','pol_brief_desc','easy_reads','easy_reads_desc','vid_gall','vid_gall_desc','action_reserch_head','action_reserch_text','action_image','action_image_2','action_desc_head','action_desc_para','action_desc_link','updated_by','created_by'
    ];
}
