@extends('layouts.app')
@section('content')

<title>content</title>
<br><br><br><br>
<div class="form_comment">
    <h1>お問い合わせありがとうございます</h1>
    <p>以下の内容にてお問い合わせ承りました</p>
  </div>

  
<p>お名前：{{$post['username']}}</p>
<p>問い合わせ事項：{{$post['age']}}</p>
<p>アドレス：{{$post['email']}}</p>
<p>問い合わせ事項：{{$post['content']}}</p>

@endsection