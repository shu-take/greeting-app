<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($greeting == 'morning')
        <h1>朝のあいさつ</h1>
        <h2>おはようございます</h2>
    @elseif($greeting == 'afternoon')
        <h1>昼のあいさつ</h1>
        <h2>こんにちは</h2>
    @elseif($greeting == 'evening')
        <h1>夕方のあいさつ</h1>
        <h2>こんばんは</h2>
    @elseif($greeting == 'night')
        <h1>夜のあいさつ</h1>
        <h2>おやすみなさい</h2>
    @elseif($greeting == 'random')
        <h1>ランダムなメッセージ</h1>
        <h2>{{$random}}</h2>
    @elseif(!empty($freeword))
        <h1>自由なメッセージ</h1>
        <h2>{{$freeword}}</h2>
    @endif

</body>
</html>