<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="text-center">
                <h1>THISARA</h1>
                <div class="row">
                    <div class="col-md-12">

                        <!-- Display validation errors -->
                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                        @endforeach

                        <!-- Form for submitting tasks -->
                        <form method="post" action="/saveTasks">
                            {{ csrf_field() }}
                            <input type="text" class="form-control" name="task" placeholder="Enter task name" value="{{ old('task') }}">
                            <br>
                            <input type="submit" class="btn btn-primary" value="Save">
                            <input type="button" class="btn btn-warning" value="Clear">
                        </form>

                        <br><br>

                        <!-- Task list table -->
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Task</th>
                                    <th>Completed</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tasks as $task)
                                <tr>
                                    <td>{{ $task->id }}</td>
                                    <td>{{ $task->task }}</td>
                                    <td>{{ $task->iscompleted ? 'Yes' : 'No' }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
