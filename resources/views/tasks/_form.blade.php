<div class="mb-2">
    <input type="text" name="list" class="form-control @error('list') is-invalid @enderror me-2" value="{{ old('list') ?? $task->list }}" placeholder="The name of the tasks">
    @error('list')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<button type="submit" class="btn btn-primary">{{ $submit }}</button>
