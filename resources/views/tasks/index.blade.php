<x-app-layout>

    <h1>Tasks</h1>

    <form action="/tasks" method="post">
        @csrf

        <input type="text" name="list"  placeholder="The name of tasks">
        <button type="submit">Add</button>
    </form>

    <ul style="list-style: none">

        @foreach ($tasks as $index => $task)

            <li>
                {{$index + 1}} - {{$task->list}}
                <div>
                    <a href="/tasks/{{ $task->id }}/edit" style="color: skyblue">edit</a>
                    <form action="/tasks/{{$task->id}}/delete" method="post" style="display: inline">
                    @csrf
                    @method('DELETE')

                    <button type="submit">Delete</button>
                </form>
            </div>
            </li>

        @endforeach

    </ul>

</x-app-layout>
