<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($courses as $course)
        <url>
            <loc>{{ url($course->prama_link) }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z', strtotime($course->updated_at)) }}</lastmod>
            <changefreq>Hourly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    @foreach ($jobs as $job)
        <url>
            <loc>{{ url($job->prama_link) }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z', strtotime($job->updated_at)) }}</lastmod>
            <changefreq>Hourly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
