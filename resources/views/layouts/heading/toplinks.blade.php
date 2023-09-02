

<div class="title">
    <span class="material-symbols-outlined">{{$icon??'link'}}</span>
    <h1>{{$label??'label'}}</h1>
</div>

<div class="date"><input type="date"></div>
<div class="insights">
    <div class="expenses">
        <a href="{{$url1??''}}">
            <span class="material-icons-sharp">{{$icon1??'persons'}}</span>
            <div class="middle">
                <div class="left">

                    <h1>{{$label1??''}}</h1>
                    <h2>{{$count}}</h2>
                </div>
            </div>
            <small class="text-muted">Last 24 hours</small>
        </a>

    </div>
    <div class="expenses">
        <a href="{{$url2??''}}">
            <span class="material-icons-sharp">{{$icon2??'persons'}}</span>
            <div class="middle">
                <div class="left">

                    <h1>{{$label2??''}}</h1>
                    {{--<h2>258</h2>--}}
                </div>
            </div>
            {{--<small class="text-muted">Last 24 hours</small>--}}
        </a>

    </div>
    <div class="expenses">
        <a href="{{$url3??''}}">
            <span class="material-icons-sharp">{{$icon3??'persons'}}</span>
            <div class="middle">
                <div class="left">

                    <h1>{{$label3??''}}</h1>
                    {{--<h2>258</h2>--}}
                </div>
            </div>
{{--<small class="text-muted">Last 24 hours</small>--}}
</a>

</div>

</div>
