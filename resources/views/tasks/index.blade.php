<x-app-layout title="Tasks">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @include('tasks._create')
            </div>
        </div>

    <ul class="list-group mt-4">
            @foreach ($tasks as $index => $task)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$index + 1}} - {{$task->list}}
                    <div class="d-flex">
                        <a class="btn btn-primary me-2" href="{{route('tasks.edit', $task->id)}}">edit</a>
                        <form action="{{route('tasks.destroy', $task->id)}}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
      </ul>
</div>

</x-app-layout>
