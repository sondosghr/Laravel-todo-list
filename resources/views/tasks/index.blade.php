<html >

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
   <a class="btn btn-primary" href="{{ route('tasks.create') }}" role="button">Create Task</a>
  @foreach ( $tasks as $task )
    

    <tr>
      <th scope="row">{{ $loop->iteration }}</th> <!-- $loop->iteration is used to display the serial number of the task -->
      <td>{{ $task->title }}</td>
      <td>{{ $task->description }}</td>
      <td>{{ $task->status }}</td>
      <td>
       <a class="btn btn-primary" href="{{ route('tasks.edit', $task->id) }}" role="button">Edit</a>
          
       
        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
            @csrf
             @method('DELETE')  <!--//DELETE is used because the action removes a task. POST is only 
                                // used because normal HTML forms cannot send DELETE directly. -->
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
   
   @endforeach
</table>
        </body>
</html>    

















{{-- <html >
    <head>
        <title>Task</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
                    <h1>Task Details</h1>

        @foreach($tasks as $task)
       
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><strong>Title:</strong> {{ $task->title }}</p>
                    <p><strong>Description:</strong> {{ $task->description }}</p>
                    <p><strong>Status:</strong> {{ $task->status }}</p>
                </div>
            </div>
        </div>
         @endforeach
    </body>
</html> --}}