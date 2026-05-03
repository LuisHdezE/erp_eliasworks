<?php

namespace App\Infrastructure\Persistence\Eloquent\Models;

use App\Domain\ApplicationCatalog\Enums\ApplicationStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Application extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'application_category_id',
        'name',
        'slug',
        'short_description',
        'description',
        'main_image',
        'external_link',
        'demo_link',
        'repository_link',
        'is_published',
        'is_featured',
        'status',
        'sort_order',
        'meta_title',
        'meta_description',
        'published_at',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'is_featured' => 'boolean',
        'status' => ApplicationStatus::class,
        'published_at' => 'datetime',
        'sort_order' => 'integer',
    ];

    // — Relations —

    public function category(): BelongsTo
    {
        return $this->belongsTo(ApplicationCategory::class, 'application_category_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(ApplicationImage::class)->orderBy('sort_order');
    }

    public function coverImage(): HasMany
    {
        return $this->hasMany(ApplicationImage::class)->where('is_cover', true);
    }

    // — Scopes —

    public function scopePublished($query)
    {
        return $query->where('is_published', true)
            ->whereHas('category', fn ($q) => $q->where('is_active', true));
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true)->where('is_published', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }

    // — Accessors —

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    // — Mutators —

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function (self $model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->name);
            }
        });

        static::updating(function (self $model) {
            if ($model->isDirty('is_published') && $model->is_published && ! $model->published_at) {
                $model->published_at = now();
            }
        });
    }
}
