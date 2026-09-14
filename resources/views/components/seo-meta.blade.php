@props([
    'title' => null,
    'description' => null,
    'image' => null,
    'url' => null,
    'type' => 'website'
])

@php
    $defaultTitle = config('portfolio.site.name', 'EliasWorks');
    $defaultDescription = config(
        'portfolio.site.description',
        'Software development portfolio focused on backend, APIs, legacy modernization and transactional applications.'
    );

    $finalTitle = $title ? "{$title} | {$defaultTitle}" : $defaultTitle;
    $finalDescription = $description ?? $defaultDescription;
    $finalImage = $image ?? url('/images/og-image.jpg');
    $finalUrl = $url ?? request()->url();
@endphp

<title>{{ $finalTitle }}</title>
<meta name="description" content="{{ $finalDescription }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ $type }}">
<meta property="og:url" content="{{ $finalUrl }}">
<meta property="og:title" content="{{ $finalTitle }}">
<meta property="og:description" content="{{ $finalDescription }}">
<meta property="og:image" content="{{ $finalImage }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ $finalUrl }}">
<meta property="twitter:title" content="{{ $finalTitle }}">
<meta property="twitter:description" content="{{ $finalDescription }}">
<meta property="twitter:image" content="{{ $finalImage }}">
