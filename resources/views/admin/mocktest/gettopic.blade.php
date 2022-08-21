<select class="form-control m-1" name="subTopicId">
    <option value="">Select Sub Topic</option>
    @forelse ($getTopic as $mockTest)
        <option value="{{ $mockTest->id }}">{{ $mockTest->name }}</option>
    @empty
        <option value="">No Mock Test</option>
    @endforelse
</select>
