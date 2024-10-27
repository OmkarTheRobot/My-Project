// routes/web.php

use App\Http\Controllers\PostController;

Route::middleware(['auth'])->group(function () {
    Route::resource('admin/posts', PostController::class);
});
