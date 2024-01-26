<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    public $timestamps = false;

    // protected $fillable = ['title', 'ISBN', 'pages', 'description', 'hard_cover', 'category_id'];
    protected $guided = ['id']; //fillable inverze, az id kivételével mindent enged

    /**
     * Get the category that owns the Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

   /**
    * The authors that belong to the Book
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
   public function authors(): BelongsToMany
   {
       return $this->belongsToMany(Author::class, 'authors_books', 'book_id', 'author_id');
   }
}
