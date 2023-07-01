<x-app-layout>
    <h1>Tasks</h1>

    @include('tasks._create')
    
    <ul style="list-style-type: none" class="tasks-list list-group mt-2">
        @foreach ($tasks as $index => $task)
            <li style="margin-bottom: 10px" class="list-group-item d-flex justify-content-between">
                {{$index + 1}} - {{$task->list}}
                <div>
                    <a style="color:skyblue" class="btn btn-primary text-light" href="{{ route('tasks.edit', $task -> id)}}">Edit</a>
                    <form action="{{ route('tasks.destroy', $task ->id) }}" method="post" style="display: inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-app-layout>