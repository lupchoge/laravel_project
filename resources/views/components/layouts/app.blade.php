<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}">
</head>

<body>
<x-layouts.nav/>
@if(session('status'))
    <div>{{ session('status') }}</div>
    @endif
{{ $slot }}  

</body>
</html>