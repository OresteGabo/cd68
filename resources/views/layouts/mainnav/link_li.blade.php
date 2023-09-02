<li>
    <a href="{{$url}}" class="{{str_contains('/'.request()->path(),$url)? 'active':''}}" aria-label="">
        <span class="material-symbols-outlined">{{$icon}}</span>
        <span class="link-name">{{$label}}</span>
    </a>
</li>
