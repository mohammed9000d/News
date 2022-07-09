<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 'short_description', 'full_description', 'category_id', 'image', 'status'
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function comments() {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    public function getCreatedAtAttribute($value) {
        return Carbon::parse($value)->diffForHumans();
    }

    public function getUpdatedAtAttribute($value) {
        return Carbon::parse($value)->diffForHumans();
    }

    public function getDeletedAtAttribute($value) {
        return Carbon::parse($value)->diffForHumans();
    }

    public function getImageUrlAttribute() {
        if(!$this->image) {
            return asset('images/placeholder.png');
        }

        if(stripos($this->image, 'http') === 0) {
            return $this->image;
        }

        return asset('uploads/' . $this->image);
    }

    public function setStatusAttribute($value) {
        $this->attributes['status'] = $value ? 'Active' : 'Inactive';
    }

    public function setNameAttribute($value) {
        $this->attributes['name'] = Str::title($value);
        $this->attributes['slug'] = Str::slug($value);
    }

    public function setImageAttribute($value)
    {
        if ($value == null) {
            $this->attributes['image'] = null;
            return;
        }
        $name = time(). '.' . $value->getClientOriginalExtension();
        $this->attributes['image'] = $value->storeAs('/', $name, ['disk' => 'uploads']);
    }

    public function scopeActive($query) {
        return $query->where('status', '=', 'Active');
    }
}
