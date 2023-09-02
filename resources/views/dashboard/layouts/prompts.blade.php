<?php
    use Illuminate\Support\Facades\DB;
    $prompts=DB::table('prompts')->get();
    //dd($prompts);
?>

<ul class="dropdown-menu">
    @foreach($prompts as $prompt)

{{gettype($prompt->description)}}
        <li><a href="#">this is a {{$prompt->email}} value</a></li>
    @endforeach
</ul>
