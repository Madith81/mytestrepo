<?xml version="1.0" encoding="UTF-8"?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($books as $key => $book)
        <sitemap>
            <loc>
                {{$book->getUrl()}}
            </loc>
        </sitemap>
    @endforeach
</sitemapindex>
