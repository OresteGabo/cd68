<div class="border-primary">
@if($paginator->hasPages())
    <div class="hint-text">Page: <b>{{$paginator->currentPage()}}</b> / <b>{{$paginator->lastPage()}}</b></div>
<ul class="pagination border-primary">
    <li class=" page-item {{$paginator->onFirstPage()? "disabled":""}}"><a href="{{$paginator->url(1)}}" class="page-link  "><span class="material-symbols-outlined">skip_previous</span></a></li>
    <li class=" page-item {{$paginator->onFirstPage()? "disabled":""}}"><a href="{{$paginator->previousPageUrl()}}" class="page-link  "><span class="material-symbols-outlined">navigate_before</span></a></li>

    <li class="page-item active"><a href="#" class="page-link disabled" title="La page actuelle">{{$paginator->currentPage()}}</a></li>

    <li class=" page-item {{$paginator->onLastPage()? "disabled":""}}"><a href="{{$paginator->nextPageUrl()}}" class="page-link  "><span class="material-symbols-outlined">navigate_next</span></a></li>
    <li class=" page-item {{$paginator->onLastPage()? "disabled":""}}"><a href="{{$paginator->url($paginator->lastPage())}}" class="page-link  "><span class="material-symbols-outlined">skip_next</span></a></li>
</ul>
@endif
</div>
