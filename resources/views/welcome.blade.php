<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    @foreach($companies as $company)
        <div class="company">
            <div>{{ $company->company_name }}</div>
            <button data-company="{{ $company->id }}" class="load-more">Подробнее</button>
            <ul></ul>
        </div>
    @endforeach
</body>
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
</html>