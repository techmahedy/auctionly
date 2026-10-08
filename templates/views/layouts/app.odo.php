<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>#yield('title')</title>
        <meta name="csrf-token" content="[[ csrf_token() ]]" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <meta name="google-site-verification" content="-1eA9k5djprG5CclmW7KDMlnBDn81sptX-dc73zTC-Q" />
        <meta name="description" content="Run your own ad network. Auctionly is self-hosted software that buys from ad exchanges over OpenRTB 2.5 and from publishers you onboard yourself: sub-100 ms bidding, ad tags, 7 ad formats, publisher payouts, Stripe and bank-transfer billing. Docker-native, open to your data." />
        <meta name="keywords" content="self-hosted ad network software, publisher portal, publisher ad tag, direct publisher traffic, publisher payouts, ad network platform, self-hosted RTB platform, real-time bidding software, OpenRTB 2.5 bidder, ad exchange software, campaign management platform, DSP software, ad network software, affiliate marketing platform, white-label ad platform, PHP RTB, Zeropark alternative, PropellerAds alternative, Kevel alternative, Adnuntius alternative, push ads, pop ads, VAST video ads, native ads, domain redirect ads, deeplink ads" />
        <meta name="author" content="Auctionly" />
        <meta name="publisher" content="Auctionly" />
        <meta name="application-name" content="Auctionly" />
        <meta name="generator" content="Doppar" />
        <meta name="referrer" content="strict-origin-when-cross-origin" />
        <meta name="format-detection" content="telephone=no, address=no, email=no" />
        <meta name="color-scheme" content="light" />
        <meta name="theme-color" content="#f8f9fb" />
        <meta name="msapplication-TileColor" content="#0e7a52" />
        <meta name="msapplication-config" content="none" />
        <meta name="apple-mobile-web-app-title" content="Auctionly" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="rating" content="general" />
        <meta name="distribution" content="global" />
        <meta name="language" content="English" />
        <meta name="coverage" content="Worldwide" />
        <meta name="category" content="Advertising technology, Software" />

        <!-- Crawlers -->
        <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />

        <!-- Canonical, language, feeds -->
        <link rel="canonical" href="[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/" />
        <link rel="alternate" hreflang="en" href="[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/" />
        <link rel="alternate" hreflang="x-default" href="[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/" />
        <link rel="sitemap" type="application/xml" title="Sitemap" href="[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/sitemap.xml" />
        <link rel="manifest" href="/site.webmanifest" />
        <link rel="dns-prefetch" href="https://fonts.googleapis.com" />
        <link rel="dns-prefetch" href="https://fonts.gstatic.com" />

        <!-- Icons -->
        <link rel="icon" href="/favicon.svg" type="image/svg+xml" />
        <link rel="icon" href="/favicon.ico" sizes="48x48" />
        <link rel="icon" href="/favicon-32.png" type="image/png" sizes="32x32" />
        <link rel="icon" href="/icon-192.png" type="image/png" sizes="192x192" />
        <link rel="icon" href="/icon-512.png" type="image/png" sizes="512x512" />
        <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

        <!-- Open Graph -->
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Auctionly" />
        <meta property="og:title" content="Auctionly: Self-Hosted RTB Platform and Ad Network Software" />
        <meta property="og:description" content="Self-hosted ad network software. Buy from exchanges over OpenRTB 2.5 or from verified publishers with an ad tag, seven ad formats, publisher payouts, Stripe and bank-transfer billing. You deploy it, you own the data." />
        <meta property="og:url" content="[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:image" content="[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/og-image.png" />
        <meta property="og:image:secure_url" content="[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/og-image.png" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta property="og:image:alt" content="Auctionly: your own ad exchange, self-hosted. An OpenRTB 2.5 bid request and response." />

        <!-- Twitter / X -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Auctionly: Self-Hosted RTB Platform and Ad Network Software" />
        <meta name="twitter:description" content="Self-hosted ad network software. Buy from exchanges over OpenRTB 2.5 or from verified publishers with an ad tag, seven ad formats, publisher payouts, Stripe and bank-transfer billing. You deploy it, you own the data." />
        <meta name="twitter:image" content="[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/og-image.png" />
        <meta name="twitter:image:alt" content="Auctionly: your own ad exchange, self-hosted. An OpenRTB 2.5 bid request and response." />

        <!-- Structured data -->
        <script type="application/ld+json">
        {
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/#organization",
      "name": "Auctionly",
      "url": "[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/",
      "logo": {
        "@type": "ImageObject",
        "url": "[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/icon-512.png",
        "width": 512,
        "height": 512
      }
    },
    {
      "@type": "WebSite",
      "@id": "[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/#website",
      "url": "[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/",
      "name": "Auctionly",
      "description": "Run your own ad network. Auctionly is self-hosted software that buys from ad exchanges over OpenRTB 2.5 and from publishers you onboard yourself: sub-100 ms bidding, ad tags, 7 ad formats, publisher payouts, Stripe and bank-transfer billing. Docker-native, open to your data.",
      "inLanguage": "en",
      "publisher": {
        "@id": "[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/#organization"
      }
    },
    {
      "@type": "WebPage",
      "@id": "[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/#webpage",
      "url": "[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/",
      "name": "Auctionly: Self-Hosted RTB Platform and Ad Network Software",
      "description": "Run your own ad network. Auctionly is self-hosted software that buys from ad exchanges over OpenRTB 2.5 and from publishers you onboard yourself: sub-100 ms bidding, ad tags, 7 ad formats, publisher payouts, Stripe and bank-transfer billing. Docker-native, open to your data.",
      "inLanguage": "en",
      "isPartOf": {
        "@id": "[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/#website"
      },
      "about": {
        "@id": "[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/#software"
      },
      "primaryImageOfPage": {
        "@type": "ImageObject",
        "url": "[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/og-image.png",
        "width": 1200,
        "height": 630
      }
    },
    {
      "@type": "SoftwareApplication",
      "@id": "[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/#software",
      "name": "Auctionly",
      "url": "[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/",
      "image": "[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/og-image.png",
      "description": "Self-hosted ad network platform for ad networks, affiliate marketers and agencies: real-time bidding (OpenRTB 2.5) and direct publishers with verified sites and ad tags, campaign management, seven ad formats, publisher payouts and wallet billing with Stripe and bank transfer.",
      "applicationCategory": "BusinessApplication",
      "applicationSubCategory": "Advertising technology",
      "operatingSystem": "Linux, Docker",
      "softwareRequirements": "Docker, PostgreSQL, Redis, Elasticsearch",
      "programmingLanguage": "PHP 8.3",
      "inLanguage": "en",
      "publisher": {
        "@id": "[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/#organization"
      },
      "featureList": [
        "OpenRTB 2.5 bidder with sub-100 ms target latency",
        "Seven ad formats: display, video (VAST), native, push, pop, domain redirect, deeplink",
        "Publisher portal: verified sites, zones, copy-and-paste ad tags and traffic URLs",
        "Site ownership verification by meta tag, file or DNS record, with administrator approval",
        "Fixed-price delivery to publisher traffic (per view, click or conversion), no auction",
        "Publisher earnings by share or fixed rate, with payout requests, progress tracking, billing and tax details",
        "Traffic-quality controls for publishers: per-zone daily limits, referrer checks, signed URLs, payout hold",
        "Prepaid wallet funded by Stripe card payments or bank transfer",
        "Exactly-once billing",
        "Bid hierarchy: zone, site, category, campaign",
        "Conversion tracking with postback builder and attribution models",
        "REST API with ten endpoints, including creative image upload",
        "Campaign review: advertiser campaigns are approved by an administrator before they bid",
        "Printable receipts for every top-up, Terms and Privacy acceptance on record, optional email confirmation at sign-up",
        "Two-factor authentication, signed tracking URLs, audit log",
        "Media domain and CDN-ready creative image delivery",
        "Self-hosted with Docker and Caddy"
      ]
    }
  ]
}
        </script>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is Auctionly a hosted service?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Auctionly is self-hosted software. You deploy it with Docker on your own server, and your campaigns, wallets and events stay on your infrastructure."
              }
            },
            {
              "@type": "Question",
              "name": "Which OpenRTB version does it support?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "OpenRTB 2.5. Each exchange gets its own /bid/{exchange} endpoint and receives a bid, win notices and tracked clicks."
              }
            },
            {
              "@type": "Question",
              "name": "How fast does the bidder respond?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The target is under 100 ms, typically a few milliseconds. The bidder never touches the database on the bid path, and it applies a deadline derived from the exchange's tmax."
              }
            },
            {
              "@type": "Question",
              "name": "Can publishers send traffic without an ad server?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. A publisher signs up, adds a website, verifies it and pastes one ad tag, or sends visitors to a traffic URL. There is no OpenRTB and no auction on that path: matching campaigns take turns at their own fixed prices."
              }
            },
            {
              "@type": "Question",
              "name": "How do you verify that a publisher owns a site?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The publisher proves it with a meta tag on the home page, a file at the root of the site, or a DNS TXT record. An administrator then approves the site, and only an approved site can have zones. Suspending or rejecting a site stops its zones at once."
              }
            },
            {
              "@type": "Question",
              "name": "How are publishers paid?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "On terms you set per publisher or per zone: a share of what the advertiser spent, or a fixed amount per impression, click or conversion. Earnings are credited once, held for a few days, and paid out on request, with progress from requested to processing to paid."
              }
            },
            {
              "@type": "Question",
              "name": "How do you stop fake traffic from publishers?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Ads are only served to the zone's own approved site, bots are not sold, and limits per address and per zone per day bound what any zone can cost. Tracked URLs are signed, OpenRTB is off by default for publisher zones, and earnings are held so bad traffic can be taken back. Zones with odd click rates are flagged for review."
              }
            },
            {
              "@type": "Question",
              "name": "Which ad formats can advertisers run?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Seven: display, video (VAST), native, push, pop, domain redirect and deeplink. Through publishers you onboard directly, display runs through an ad tag and pop, domain redirect and deeplink through a traffic URL."
              }
            },
            {
              "@type": "Question",
              "name": "How do advertisers pay?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "They fund a prepaid wallet by card through Stripe or by bank transfer. Card payments are credited only after Stripe confirms them. Bank transfers are credited when an administrator approves the request."
              }
            },
            {
              "@type": "Question",
              "name": "Can an impression be billed twice?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. An impression that is delivered twice is charged once. Events are keyed by their stream id, so a redelivered event overwrites itself instead of billing again."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if Elasticsearch goes down?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Reporting falls back to PostgreSQL rollups. The dimensions that only the event log knows are then reported as unavailable, and bidding is not affected because the bidder only uses Redis."
              }
            },
            {
              "@type": "Question",
              "name": "Are campaigns reviewed before they go live?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, by default. An advertiser's campaign waits in review until an administrator approves it or sends it back with a note, and the advertiser is emailed either way. Administrators can mark an advertiser as trusted to skip the review, or switch the review off."
              }
            },
            {
              "@type": "Question",
              "name": "Can advertisers use an API?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. The REST API has ten endpoints for campaigns, status changes, image upload and reports, with personal tokens and the same validation as the web form. An advertiser's token only sees that advertiser's campaigns."
              }
            },
            {
              "@type": "Question",
              "name": "Do banner images need a CDN?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Not at first. By default the web app serves uploaded images. When traffic grows, serve them from a separate media domain, cached for a year, and put a CDN in front of it. Uploads always go to the app; the media domain only serves files."
              }
            }
          ]
        }
      </script>
        <link href="https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@62..125,100..900&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
        <script>
            window.__DOPPAR_FRONTEND__ = {
                version: "[[ 'v' . Application::VERSION ]]",
                phpVersion: "PHP [[ phpversion() ]]",
                logoUrl: "[[ enqueue('logo.png') ]]",
                csrfToken: "[[ csrf_token() ]]"
            };
        </script>
        #vite('templates/client/js/app.ts')
    </head>
    <body>
        #yield('content')
    </body>
</html>
