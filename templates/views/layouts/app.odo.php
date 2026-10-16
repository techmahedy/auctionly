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
        <meta name="description" content="A complete campaign manager you host yourself. Auctionly buys and sells push, pop, domain redirect and deeplink traffic: bid on exchanges over OpenRTB 2.5, or take traffic from publishers through tracked links with sub IDs and click IDs. Conversion postbacks, publisher payouts and Stripe billing. Docker-native, open to your data." />
        <meta name="keywords" content="self-hosted campaign manager, campaign manager software, self-hosted ad network software, traffic network software, push traffic platform, pop traffic platform, domain redirect traffic, deeplink campaigns, publisher link generator, sub ID tracking, publisher click id, conversion postback, publisher portal, direct publisher traffic, publisher payouts, ad network platform, self-hosted RTB platform, real-time bidding software, OpenRTB 2.5 bidder, ad exchange software, campaign management platform, campaign manager, DSP software, ad network software, affiliate marketing platform, white-label ad platform, PHP RTB, Zeropark alternative, SourceKnowledge alternative, PropellerAds alternative, push ads, pop ads, domain redirect ads, deeplink ads" />
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
        <meta property="og:title" content="Auctionly: Self-Hosted Campaign Manager for Push, Pop and Deeplink Traffic" />
        <meta property="og:description" content="A complete, self-hosted campaign manager for push, pop, domain redirect and deeplink traffic. Buy from exchanges over OpenRTB 2.5 or from publishers through tracked links, with sub IDs, click IDs, conversion postbacks, publisher payouts and Stripe and bank-transfer billing. You deploy it, you own the data." />
        <meta property="og:url" content="[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:image" content="[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/og-image.png" />
        <meta property="og:image:secure_url" content="[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/og-image.png" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta property="og:image:alt" content="Auctionly: a complete campaign manager, self-hosted. A publisher link, a booked click and a redirect." />

        <!-- Twitter / X -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Auctionly: Self-Hosted Campaign Manager for Push, Pop and Deeplink Traffic" />
        <meta name="twitter:description" content="A complete, self-hosted campaign manager for push, pop, domain redirect and deeplink traffic. Buy from exchanges over OpenRTB 2.5 or from publishers through tracked links, with sub IDs, click IDs, conversion postbacks, publisher payouts and Stripe and bank-transfer billing. You deploy it, you own the data." />
        <meta name="twitter:image" content="[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/og-image.png" />
        <meta name="twitter:image:alt" content="Auctionly: a complete campaign manager, self-hosted. A publisher link, a booked click and a redirect." />

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
      "description": "A complete campaign manager you host yourself. Auctionly buys and sells push, pop, domain redirect and deeplink traffic: bid on exchanges over OpenRTB 2.5, or take traffic from publishers through tracked links with sub IDs and click IDs. Conversion postbacks, publisher payouts and Stripe billing. Docker-native, open to your data.",
      "inLanguage": "en",
      "publisher": {
        "@id": "[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/#organization"
      }
    },
    {
      "@type": "WebPage",
      "@id": "[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/#webpage",
      "url": "[[ rtrim((string) env('APP_URL', 'http://localhost:8000'), '/') ]]/",
      "name": "Auctionly: Self-Hosted Campaign Manager for Push, Pop and Deeplink Traffic",
      "description": "A complete campaign manager you host yourself. Auctionly buys and sells push, pop, domain redirect and deeplink traffic: bid on exchanges over OpenRTB 2.5, or take traffic from publishers through tracked links with sub IDs and click IDs. Conversion postbacks, publisher payouts and Stripe billing. Docker-native, open to your data.",
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
      "description": "Complete self-hosted campaign manager for ad networks, affiliate marketers and agencies: push, pop, domain redirect and deeplink traffic bought from OpenRTB exchanges and from direct publishers through tracked links, campaign management, publisher payouts and wallet billing with Stripe and bank transfer.",
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
        "OpenRTB 2.5 bidder with sub-100 ms target latency for exchange traffic",
        "Four ad formats: push, pop, domain redirect, deeplink",
        "Deeplink campaigns: a network or tracker deeplink with {product_url}, limited to the brand's own website",
        "Publisher portal: verified sites and a link generator with sub ID, click ID, keyword, bid floor and fallback URL",
        "Test link: a dry run that shows where a visit would be sent and counts nothing",
        "Site ownership verification by meta tag, file or DNS record, with administrator approval",
        "Fixed-price delivery to publisher traffic (per visit, click or conversion), no auction",
        "Publisher reports by day, advertiser, sub ID, sub ID by domain, domain, click and conversion, with sub ID allow and block lists",
        "Publisher API with an X-API-KEY header and a rate limit",
        "Publisher earnings by share or fixed rate, with payout requests, progress tracking, billing and tax details",
        "Traffic-quality controls: visitor, address and zone limits, signed links, bot filtering, payout hold, quality flags",
        "Prepaid wallet funded by Stripe card payments or bank transfer",
        "Exactly-once billing",
        "Campaign types: run of network, or by source, target, keyword or placement, with a bid hierarchy",
        "Conversion tracking: postback from the advertiser's network or tracker, pixel, attribution models, hold and reverse",
        "REST API with ten advertiser endpoints, including push image upload",
        "Campaign review: advertiser campaigns are approved by an administrator before they bid",
        "Printable receipts for every top-up, Terms and Privacy acceptance on record, optional email confirmation at sign-up",
        "Two-factor authentication, signed tracking URLs, audit log",
        "Media domain and CDN-ready push notification image delivery",
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
              "name": "Which ad formats can advertisers run?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Four: push, pop, domain redirect and deeplink. Through exchanges all four run. Publishers you onboard directly sell pop, domain redirect and deeplink through a tracked link, and push stays on OpenRTB. There are no banners, video or native ads in a page: the platform sells traffic."
              }
            },
            {
              "@type": "Question",
              "name": "Can publishers send traffic without an ad server?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. A publisher signs up, adds a website, verifies it and makes a link in the Link generator. It adds its own sub ID, click ID and keyword to the link, and every click is kept with them. There is no ad tag, no OpenRTB and no auction on that path: matching campaigns take turns at their own fixed prices."
              }
            },
            {
              "@type": "Question",
              "name": "What does a publisher put on a link?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The Link generator makes the link for an advertiser and a site. The advertiser, bid floor and fallback URL are signed by the platform. The publisher adds a sub ID (its own name for the source), a click ID (its own unique id for the click) and a keyword, as query parameters. They are stored with the click, shown in the publisher's reports, and the click ID goes back to the publisher's tracker in the conversion postback. A Test link shows where a visit would be sent and counts nothing."
              }
            },
            {
              "@type": "Question",
              "name": "How does a deeplink campaign work?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The advertiser takes the deeplink made by its affiliate network or tracker and replaces the network's landing-page parameter with {product_url}, for example https://network.example/deeplink?url={product_url}&cid={click_id}. The product page comes with each visit. The platform puts it into the tag, URL-encoded, and redirects to the network, which forwards the visitor. Only product pages on the brand's website are sold, so a publisher cannot send traffic anywhere else, and a visit without a product page is not sold."
              }
            },
            {
              "@type": "Question",
              "name": "How is a conversion reported?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "When a visitor buys, the advertiser's affiliate network or tracker, or its own site, calls the platform's /conversion postback with the click ID the platform gave it, for example /conversion?click_id=35f1…&event=purchase&value=25&tx=order-1. The conversion is matched to the click inside its window and counted for the campaign and the publisher. It can be held for approval or reversed later, and the publisher's own click ID goes back to its tracker."
              }
            },
            {
              "@type": "Question",
              "name": "How do you verify that a publisher owns a site?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The publisher proves it with a meta tag on the home page, a file at the root of the site, or a DNS TXT record. An administrator then approves the site, and only an approved site can make links. Suspending or rejecting a site stops its zones at once."
              }
            },
            {
              "@type": "Question",
              "name": "How are publishers paid?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "On terms you set per publisher or per zone: a share of what the advertiser spent, or a fixed amount per visit, click or conversion. Earnings are credited once, held for a few days, and paid out on request, with progress from requested to processing to paid."
              }
            },
            {
              "@type": "Question",
              "name": "How do you stop fake traffic from publishers?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Bots are not sold. A visitor can be sold only a few times a day through one zone, and addresses and zones have per-minute and per-day ceilings that bound what any zone can cost. The advertiser, bid floor and fallback in a link are signed, OpenRTB is off by default for publisher zones, and earnings are held so bad traffic can be taken back. Zones with odd click rates are flagged for review."
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
              "name": "Can a click be billed twice?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. A visit, click or conversion that is delivered twice is charged once. Events are keyed by their stream id, so a redelivered event overwrites itself instead of billing again."
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
              "name": "Can advertisers and publishers use an API?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. The advertiser REST API has ten endpoints for campaigns, status changes, image upload and reports, with personal tokens and the same validation as the web form. Publishers have their own API, authenticated with an X-API-KEY header and rate limited, for links, reports, sites, placements, sub ID lists and postbacks. A token only sees its own owner's data."
              }
            },
            {
              "@type": "Question",
              "name": "Do push notification images need a CDN?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Not at first. By default the web app serves uploaded icons and images. When traffic grows, serve them from a separate media domain, cached for a year, and put a CDN in front of it. Uploads always go to the app; the media domain only serves files."
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
