<?php

use App\Filament\Pages\KanbanBoard;
use Filament\Facades\Filament;
use App\Http\Controllers\TodoController;


Route::get('/', function () {return redirect('/admin/login');});
Route::post('/todos/update-status', [Kanban::class, 'updateTodoStatus'])->name('todos.update-status');

                    