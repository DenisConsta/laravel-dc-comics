<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'thumb', 'price', 'series', 'sale_date', 'type'];
    public static function generateSlug($string){
        $slug = Str::slug($string, '-');
        $original_slug = $slug;
        $c = 1;
        $house_exist = Comic::where('slug', $slug)->first();
        while($house_exist){
            $slug = $original_slug . '-' . $c;
            $house_exist = Comic::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
    }
}
