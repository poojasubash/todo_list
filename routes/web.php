<?php

// routes/web.php
use App\Http\Controllers\TodoController;

Route::resource('todos', TodoController::class);

