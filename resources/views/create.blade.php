<form action="{{ route('tasks.store') }}" method="POST">
    
<!-- tasks.create: opens and displays the create form.
tasks.store: receives the submitted form data and saves the new task.
So the user visits tasks.create, then the form sends its data to tasks.store.

Usually the routes are:
Route::get('/tasks/create', ...)->name('tasks.create'); // show form
Route::post('/tasks', ...)->name('tasks.store');        // save task
 -->
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea>
    </div>
    <div>
        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="pending">Pending</option>
            <option value="in_progress">In Progress</option>
            <option value="completed">Completed</option>
        </select>
    </div>
    <button type="submit">Create Task</button>
</form>