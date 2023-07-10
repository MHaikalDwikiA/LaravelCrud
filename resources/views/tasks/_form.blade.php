<div class="mb-2 d-flex justify-content-between">
    <input type="text" class="form-control @error('list') is-invalid @enderror" name="list" value="{{ old('list', $task->list) }}" placeholder="The Name of The Task">
    @error('list')
        <span class="invalid-feedback">{{$message}}</span>
    @enderror
</div>
<button class="btn btn-primary" type="submit">{{$submit}}</button>
