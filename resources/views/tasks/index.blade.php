<x-app-layout>
    <h1>Tasks</h1>

    <form action="/tasks" method="post">
        @csrf
        <input type="text" name="list" placeholder="The name of the tasks">
        <button type="submit">Add</button>
    </form>

    <ul style="list-style-type: none" class="tasks-list">
        @foreach ($tasks as $index => $task)
            <li style="margin-bottom: 10px">
                {{$index + 1}} - {{$task->list}}
                <div>
                    <a style="color:skyblue" href="tasks/{{$task->id}}/edit">Edit</a>
                    <form action="/tasks/{{$task->id}}" method="post" style="display: inline">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-app-layout>