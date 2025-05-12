<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'featured_image',
        'body',
        'is_published',
        'is_draft',
        'is_featured',
        'is_trending',
        'allow_comments',
        'visibility',
        'password',
        'scheduled_at'
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'is_draft' => 'boolean',
        'is_featured' => 'boolean',
        'is_trending' => 'boolean',
        'allow_comments' => 'boolean',
        'scheduled_at' => 'datetime',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the user that owns the post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the categories for the post.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_category');
    }

    /**
     * Get the tags for the post.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Check if the post is password protected
     */
    public function isPasswordProtected()
    {
        return $this->visibility === 'password_protected' && !empty($this->password);
    }

    /**
     * Check if the post is private
     */
    public function isPrivate()
    {
        return $this->visibility === 'private';
    }

    /**
     * Check if comments are allowed on the post
     */
    public function commentsAllowed()
    {
        return $this->allow_comments;
    }

    /**
     * Check if post is scheduled for future publishing
     */
    public function isScheduled()
    {
        return !$this->is_published && !$this->is_draft && $this->scheduled_at && $this->scheduled_at->isFuture();
    }

    /**
     * Scope a query to only include published posts.
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Scope a query to only include draft posts.
     */
    public function scopeDraft($query)
    {
        return $query->where('is_draft', true);
    }

    /**
     * Scope a query to only include featured posts.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope a query to only include trending posts.
     */
    public function scopeTrending($query)
    {
        return $query->where('is_trending', true);
    }

    /**
     * Scope a query to only include scheduled posts.
     */
    public function scopeScheduled($query)
    {
        return $query->where('is_published', false)
            ->where('is_draft', false)
            ->whereNotNull('scheduled_at')
            ->where('scheduled_at', '>', now());
    }
}