@extends('layouts.app')
@section('content')

<title>content</title>
<div class="form_comment">
    <h1>お問い合わせありがとうございます</h1>
    <p>以下の内容にてお問い合わせ承りました。今後もサービス向上に取り組んで参ります。</p>
</div>

<div class="form_confirm">
  <p>お名前：{{$post['username']}}</p>
  <p>年齢：{{$post['age']}}</p>
  <p>アドレス：{{$post['email']}}</p>
  <p>問い合わせ事項：{{$post['content']}}</p>
</div>

<div class="submit_button">
  <button class="submit"><a href="home">HOMEへ戻る</a></button>
</div>


@endsection