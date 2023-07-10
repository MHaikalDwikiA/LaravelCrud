<div class="card">
    <div class="card-header">Create New Task</div>
    <div class="card-body">
        <form action="{{route('tasks.store')}}" method="post" class="d-flex">
            @csrf
            <div class="mb-2">
                @include('tasks._form')
            </div>
        </form>
    </div>
</div>
