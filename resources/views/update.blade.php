<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')  <!-- tells Laravel that this form is updating an existing task. -->
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}" required>

        <!-- name="title": the key sent to Laravel when the form is submitted. Laravel reads it with $request->title.
            id="title": uniquely identifies the input. It connects to the label.
            value="{{ $task->title }}": displays the task’s current title inside the input, so the user can edit it.-->
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ $task->description }}</textarea>
    </div>
    <div>
        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="pending" {{ $task->status === 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="in_progress" {{ $task->status === 'in_progress' ? 'selected' : '' }}>In Progress</option>
            <option value="completed" {{ $task->status === 'completed' ? 'selected' : '' }}>Completed</option>
        </select>
    </div>
    <button type="submit">Update Task</button>
</form>