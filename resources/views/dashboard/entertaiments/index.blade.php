@extends('dashboard.layouts.layout')
@section('main-content')

    <form action="{{ route('entertaiments.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="kids" class="form-label">Kids Present</label>
            <select multiple class="form-control" id="kids" name="kids[]" required>
                @foreach ($kids as $kid)
                    <option value="{{ $kid->id }}">{{ $kid->first_name }} {{ $kid->last_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create Activity</button>
    </form>
@endsection
