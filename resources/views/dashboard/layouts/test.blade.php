@extends('dashboard.layouts.layout')
@section('main-content')
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Bootstrap Page</title>
</head>

<body>
<div class="container">


<div class="row">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" value="value  1">
        <label class="form-check-label" for="flexRadioDisabled">
            Disabled radio
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled"   value="value2">
        <label class="form-check-label" for="flexRadioCheckedDisabled">
            Disabled checked radio
        </label>
    </div></div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="inputText">Input Text:</label>
                <input type="text" class="form-control" id="inputText">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Open Modal
            </button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Input Text Value</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="inputTextValue"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $('#myModal').on('show.bs.modal', function () {
        var inputTextValueSource = $("input[type='radio']:checked[name='flexRadioDisabled']").val();
        //var inputTextValue = $('#inputText').val();
        $('#inputTextValueDestination').text(inputTextValueSource);
    });
</script>
</body>

</html>

@endsection
