

@extends('dashboard.layouts.layout')
@section('main-content')


    <?php
        use App\Models\User;
    ?>


    <div class="main-content">
        <form>
            <div class="row">
                <!-- First Column -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="input1">Input 1:</label>
                        <input type="text" class="form-control" id="input1" name="input1" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Form 1</button>
                </div>

                <!-- Second Column -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="input2">Input 2:</label>
                        <input type="text" class="form-control" id="input2" name="input2" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Form 2</button>
                </div>
            </div>
        </form>

    </div>
@endsection
