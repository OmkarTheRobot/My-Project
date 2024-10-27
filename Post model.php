// app/Models/Post.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    use HasFactory;

    protected $fillable = ['title', 'content', 'author_id', 'category_id', 'published_at', 'status'];

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
