<?xml version="1.0" encoding="UTF-8"?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($users as $user)
        <sitemap>
            <loc>
                {{ $user->name }}
            </loc>
        </sitemap>
    @endforeach
</sitemapindex>
