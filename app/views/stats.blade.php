<aside class="rightside">
    <div class="rightside-title">
        <h3 class="rightside-title"> آمار </h3>
    </div>

    <div class="rscontent">
        <ul class="topnav">
            <li><a href="#">تفکیک استانی</a>
                <ul>
                    @foreach($info_states as $item)
                        <li><a> {{$item['title']}} : {{$item['count']}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="#">تفکیک نوع کمک</a>
                <ul>
                    @foreach($info_aids as $item)
                        <li><a> {{$item['title']}} : {{$item['count']}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="#">تفکیک بیمه</a>
                <ul>
                    @foreach($info_insurances as $item)
                        <li><a> {{$item['title']}} : {{$item['count']}}</a> </li>
                    @endforeach
                </ul>
            </li>
            <li><a href="#">تفکیک درآمد</a>
                <ul>
                    @foreach($info_incomes as $item)
                        <li><a> {{$item['title']}} : {{$item['count']}}</a></li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>

</aside>