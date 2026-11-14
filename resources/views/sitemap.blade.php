{!! '<' . '?xml version="1.0" encoding="UTF-8"?' . '>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:news="http://www.google.com/schemas/sitemap-news/0.9"
        xmlns:xhtml="http://www.w3.org/1999/xhtml"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">

    <!-- Core Pages -->
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ route('about') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('services') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>{{ route('careers') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('contact') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <!-- Services Dynamic Pages -->
    @foreach($services as $slug => $service)
        <url>
            <loc>{{ route('services.details', ['service' => $slug]) }}</loc>
            <lastmod>{{ date('Y-m-d') }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.85</priority>
        </url>
    @endforeach

    <!-- Blog Hub -->
    <url>
        <loc>{{ route('blog') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>

    <!-- Dynamic Blog Posts with Priority & Freshness -->
    @foreach($blogPosts as $post)
        @php
            $postSlug = is_object($post) ? $post->slug : ($post['slug'] ?? '');
            $postDate = is_object($post) ? ($post->updated_at ? $post->updated_at->format('Y-m-d') : ($post->published_at ? $post->published_at->format('Y-m-d') : date('Y-m-d'))) : ($post['iso_date'] ?? date('Y-m-d'));
            $postImage = is_object($post) ? $post->seo_og_image : (isset($post['image']) ? asset($post['image']) : asset('image/logo/logo-main.png'));
            $postTitle = is_object($post) ? $post->title : ($post['title'] ?? '');
        @endphp
        @if(!empty($postSlug))
            <url>
                <loc>{{ route('blog.details', ['slug' => $postSlug]) }}</loc>
                <lastmod>{{ $postDate }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.8</priority>
                <image:image>
                    <image:loc>{{ $postImage }}</image:loc>
                    <image:title>{{ $postTitle }}</image:title>
                </image:image>
            </url>
        @endif
    @endforeach

</urlset>
