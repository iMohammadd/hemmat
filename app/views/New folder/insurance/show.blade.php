@extends('master')
@section('title')
    جستجو بر اساس بیمه
@endsection
@section('body')
    <div class="pagedetail">
        <div class="pagedetail-title">
            <h3>&equiv; نمایش نتایج برای تفکیک بیمه " <font color="#CC9900"> {{$term}} </font> " &equiv; اطلاعات این نوع کمک را در زیر مشاهده کنید ... </h3>
        </div>
        @include('info')
    </div>
    @include('persons')
    @include('search')
@endsection