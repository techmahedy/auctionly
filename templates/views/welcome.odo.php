#extends('layouts.app')
#section('title')
Auctionly: Self-Hosted RTB Platform and Ad Exchange Software
#endsection
#section('content')

<header class="sticky top-0 z-10 -mx-5 border-b border-rule bg-paper/90 px-5 backdrop-blur">
    <div class="mx-auto flex h-14 max-w-[74rem] items-center gap-8">
        <a href="#top" aria-label="Auctionly home" class="flex items-center gap-2.5 text-lg font-bold tracking-tight no-underline [font-stretch:112%]">
            <img src="/logo-mark.svg" alt="" aria-hidden="true" class="block size-[1.6rem]" />
            Auctionly
        </a>
        <ul class="ml-auto hidden gap-6 text-[0.9375rem] text-ink-2 md:flex">
            <li><a class="no-underline hover:text-accent-ink" href="#how">How it works</a></li>
            <li><a class="no-underline hover:text-accent-ink" href="#formats">Formats</a></li>
            <li><a class="no-underline hover:text-accent-ink" href="#billing">Billing</a></li>
            <li><a class="no-underline hover:text-accent-ink" href="#scale">Architecture</a></li>
            <li><a class="no-underline hover:text-accent-ink" href="#deploy">Deploy</a></li>
            <li><a class="no-underline hover:text-accent-ink" href="#licence">Licence</a></li>
        </ul>
        <a class="ml-auto text-[0.9375rem] text-ink-2 no-underline hover:text-accent-ink md:ml-0" href="#">Sign in</a>
        <button type="button" class="btn !px-3.5 !py-2.5 !text-sm" data-contact="Source licence">Get the source</button>
    </div>
</header>

<main id="top">

    <!-- HERO -->
    <section class="mx-auto grid max-w-[74rem] items-center gap-10 py-12 lg:grid-cols-[1.05fr_1fr] lg:gap-14 lg:pt-[4.5rem] lg:pb-14">
        <div>
            <p class="eyebrow mb-[1.4rem] text-accent-ink">BIDDER + CAMPAIGN MANAGER + WALLET</p>
            <h1 class="text-[clamp(2.5rem,5.4vw,4.4rem)] leading-none font-extrabold tracking-[-0.035em]">
                Your own ad exchange, <em class="bg-[linear-gradient(transparent_74%,var(--color-mark)_74%,var(--color-mark)_92%,transparent_92%)] not-italic">self-hosted.</em>
            </h1>
            <p class="mt-6 max-w-136 text-[1.1875rem] text-ink-2">Auctionly is the bidder, campaign manager and wallet billing for running your own ad network. OpenRTB 2.5 in, a bid out in under 100 ms, seven ad formats, and every record on a server you control</p>
            <div class="mt-8 flex flex-wrap gap-3">
                <button type="button" class="btn" data-contact="Source licence">Get the source</button>
                <button type="button" class="btn btn-ghost" data-contact="Live demo">See a live demo</button>
                <a class="btn btn-ghost" href="#">View docs</a>
            </div>
            <p class="mt-5 font-mono text-[0.8125rem] leading-normal text-ink-3">You deploy it. You own the database. Nothing phones home.</p>
        </div>
        <div class="flex min-w-0 flex-col gap-3">
            <figure class="term">
                <div class="term-head"><span>request</span><span class="ml-auto text-term-str">example</span></div>
<pre><span class="k">POST</span> /bid/<span class="s">xyz-ssp</span>
<span class="d">Content-Type: application/json</span>

{ <span class="k">"id"</span>: <span class="s">"8f2c…"</span>, <span class="k">"tmax"</span>: 120,
  <span class="k">"imp"</span>: [{ <span class="k">"id"</span>: <span class="s">"1"</span>, <span class="k">"banner"</span>: { <span class="k">"w"</span>: 320, <span class="k">"h"</span>: 250 } }],
  <span class="k">"device"</span>: { <span class="k">"os"</span>: <span class="s">"android"</span>, <span class="k">"geo"</span>: { <span class="k">"country"</span>: <span class="s">"USA"</span> } } }</pre>
            </figure>
            <figure class="term">
                <div class="term-head"><span>response</span><span class="ml-auto text-term-str">200 · served from Redis</span></div>
<pre>{ <span class="k">"seatbid"</span>: [{ <span class="k">"bid"</span>: [{
    <span class="k">"impid"</span>: <span class="s">"1"</span>, <span class="k">"price"</span>: 2.40,
    <span class="k">"nurl"</span>: <span class="s">"…/win?sig=<span class="ok">hmac</span>"</span> }] }] }

<span class="d">no match → 204 + X-Nobid-Reasons: targeting:country=3</span></pre>
            </figure>
        </div>
    </section>

    <!-- CREDIBILITY STRIP -->
    <div class="-mx-5 grid grid-cols-2 border-y border-rule-strong bg-panel md:grid-cols-3 lg:grid-cols-6" role="list" aria-label="Stack">
        <div role="listitem" class="strip-cell"><small>Language</small><b>PHP 8.3</b></div>
        <div role="listitem" class="strip-cell"><small>Protocol</small><b>OpenRTB 2.5</b></div>
        <div role="listitem" class="strip-cell"><small>Runtime</small><b>Docker-native</b></div>
        <div role="listitem" class="strip-cell"><small>Data</small><b>PostgreSQL, Redis, Elasticsearch</b></div>
        <div role="listitem" class="strip-cell"><small>Payments</small><b>Stripe and bank transfer</b></div>
        <div role="listitem" class="strip-cell"><small>Static analysis</small><b>PHPStan level 8</b></div>
    </div>

    <div class="mx-auto max-w-[74rem]">

        <!-- HOW IT WORKS -->
        <section class="sec" id="how">
            <div class="sec-label">How it works</div>
            <div class="sec-body">
                <div>
                    <h2 class="h2">From funded wallet to billed impression.</h2>
                    <p class="lede">Three parties, one event stream. Each step writes to <code>rtb:events</code>, so billing and reporting read the same facts the bidder produced.</p>
                </div>

                <ol class="panel grid md:grid-cols-3">
                    <li class="step"><span class="n">STEP 1</span><h3>Advertisers fund and launch</h3><p>Sign up, add funds by card or bank transfer, create a campaign in any of seven formats. It reaches the bidder about three seconds after you save it.</p></li>
                    <li class="step"><span class="n">STEP 2</span><h3>Exchanges send bid requests</h3><p>Each exchange registers once and posts OpenRTB 2.5 to its own <code>/bid/{exchange}</code> endpoint with its token.</p></li>
                    <li class="step"><span class="n">STEP 3</span><h3>Bidder answers, billing happens once</h3><p>The bidder picks the best campaign per impression and responds inside the exchange's <code>tmax</code>. The aggregator debits the wallet one time per impression.</p></li>
                </ol>

                <div class="panel min-w-0 px-6 pt-6 pb-5">
                    <div class="mono-label mb-6 flex flex-wrap justify-between gap-4 !leading-snug"><span>Life of one impression</span><span>Every hop is HMAC-signed</span></div>
                    <ol class="relative grid gap-5 before:absolute before:top-1.5 before:bottom-1.5 before:left-[0.42rem] before:border-l-[1.5px] before:border-ink before:content-[''] md:grid-cols-5 md:gap-0 md:before:inset-x-0 md:before:top-[0.6rem] md:before:bottom-auto md:before:left-0 md:before:border-t-[1.5px] md:before:border-l-0">
                        <li class="flow-item"><b>Bid</b><code>/bid/{exchange}</code><span>Auction runs against in-memory campaigns.</span></li>
                        <li class="flow-item bill"><b>Win</b><code>/win</code><span>Exchange reports the clearing price. Wallet is debited, once.</span></li>
                        <li class="flow-item"><b>Pixel</b><code>/pixel</code><span>Ad renders and the impression is confirmed.</span></li>
                        <li class="flow-item"><b>Click</b><code>/click</code><span>Redirect to the advertiser's page, click recorded.</span></li>
                        <li class="flow-item"><b>Conversion</b><code>/conversion</code><span>Postback matched to the click inside its window.</span></li>
                    </ol>
                    <div class="mt-6 grid items-center gap-x-4 gap-y-3 border-t border-dashed border-rule-strong pt-[1.1rem] text-sm text-ink-2 md:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)]">
                        <span><i class="mr-2 inline-block size-[0.7rem] rounded-full bg-mark align-[-1px]"></i>Billing event. A win delivered twice is charged once.</span>
                        <span class="w-fit rounded-[3px] bg-accent-tint px-[0.7rem] py-2 font-mono text-[0.8rem] leading-none font-medium whitespace-nowrap text-accent-ink">rtb:events</span>
                        <span>Aggregator writes stats and spend. Indexer writes each event to Elasticsearch.</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- AD FORMATS -->
        <section class="sec" id="formats">
            <div class="sec-label">Ad formats</div>
            <div class="sec-body">
                <div>
                    <h2 class="h2">Seven formats, one campaign form.</h2>
                    <p class="lede">Pick a format and the form asks for exactly the creative that format needs. The web form and the REST API share one rule set, so neither can save a campaign the other would refuse.</p>
                </div>
                <div class="border-t border-b border-t-ink border-b-rule-strong bg-panel" role="table" aria-label="Ad formats">
                    <div class="row mono-label hidden !bg-paper !py-3 md:grid" role="row"><span class="!text-ink-3">Format</span><span class="!text-ink-3">adformat</span><span class="!text-ink-3">Creative it takes</span></div>
                    <div class="row" role="row"><b>Display</b><code>display</code><span>Banner image or HTML in the sizes the exchange requests.</span></div>
                    <div class="row" role="row"><b>Video (VAST)</b><code>video</code><span>A video file or VAST tag, matched to the player size.</span></div>
                    <div class="row" role="row"><b>Native</b><code>native</code><span>Title, description, icon and image that the publisher styles.</span></div>
                    <div class="row" role="row"><b>Push</b><code>push</code><span>Notification title, body, icon and a destination URL.</span></div>
                    <div class="row" role="row"><b>Pop</b><code>pop</code><span>A destination URL. No creative to host.</span></div>
                    <div class="row" role="row"><b>Domain redirect</b><code>domain</code><span>A destination URL for redirect traffic.</span></div>
                    <div class="row" role="row"><b>Deeplink</b><code>deeplink</code><span>An app deeplink or universal link as the destination.</span></div>
                </div>
                <p class="max-w-176 text-[0.9375rem] text-ink-2">Display, video and native are read from the OpenRTB imp objects. Push, pop, domain and deeplink are not, so the exchange either sends <code>imp.ext.adformat</code> or is registered with a traffic type.</p>
            </div>
        </section>

        <!-- BILLING -->
        <section class="sec" id="billing">
            <div class="sec-label">Billing</div>
            <div class="sec-body">
                <div>
                    <h2 class="h2">Card or bank transfer. Credited when the money is real.</h2>
                    <p class="lede">Advertisers fund a prepaid wallet. Spend is debited as impressions are won, and a campaign pauses when its funds run out. You choose which funding methods to switch on.</p>
                </div>

                <div class="grid gap-6 md:grid-cols-2">
                    <article class="panel flex min-w-0 flex-col gap-4 p-6">
                        <div class="flex items-baseline justify-between gap-4"><h3 class="text-xl tracking-[-0.015em]">Card via Stripe</h3><span class="mono-label">stripe checkout</span></div>
                        <ol class="relative flex flex-col gap-3 pl-7 text-[0.9375rem] text-ink-2 before:absolute before:top-2 before:bottom-2 before:left-[0.3rem] before:border-l before:border-rule-strong before:content-['']">
                            <li class="relative before:absolute before:top-[0.45rem] before:-left-7 before:size-[0.6rem] before:rounded-full before:border-[1.5px] before:border-ink before:bg-panel before:content-['']"><b class="text-ink">Advertiser pays</b> on Stripe's hosted checkout.</li>
                            <li class="relative before:absolute before:top-[0.45rem] before:-left-7 before:size-[0.6rem] before:rounded-full before:border-[1.5px] before:border-ink before:bg-panel before:content-['']"><b class="text-ink">Stripe confirms</b> with a signed webhook.</li>
                            <li class="relative before:absolute before:top-[0.45rem] before:-left-7 before:size-[0.6rem] before:rounded-full before:border-[1.5px] before:border-ink before:bg-mark before:content-['']"><b class="text-ink">Wallet is credited.</b> Never because a browser said so.</li>
                        </ol>
                        <ul class="check-list">
                            <li class="check">A worker asks Stripe about anything still pending every minute, in case a webhook was lost.</li>
                            <li class="check">A refund in Stripe debits the wallet.</li>
                            <li class="check">No Stripe SDK. The app calls Stripe's HTTP API directly, so there is less code to audit.</li>
                        </ul>
                    </article>
                    <article class="panel flex min-w-0 flex-col gap-4 p-6">
                        <div class="flex items-baseline justify-between gap-4"><h3 class="text-xl tracking-[-0.015em]">Bank transfer</h3><span class="mono-label">admin approved</span></div>
                        <ol class="relative flex flex-col gap-3 pl-7 text-[0.9375rem] text-ink-2 before:absolute before:top-2 before:bottom-2 before:left-[0.3rem] before:border-l before:border-rule-strong before:content-['']">
                            <li class="relative before:absolute before:top-[0.45rem] before:-left-7 before:size-[0.6rem] before:rounded-full before:border-[1.5px] before:border-ink before:bg-panel before:content-['']"><b class="text-ink">Advertiser requests a top-up</b> and sees your bank details.</li>
                            <li class="relative before:absolute before:top-[0.45rem] before:-left-7 before:size-[0.6rem] before:rounded-full before:border-[1.5px] before:border-ink before:bg-panel before:content-['']"><b class="text-ink">You check your account</b> and enter the amount received and the bank reference.</li>
                            <li class="relative before:absolute before:top-[0.45rem] before:-left-7 before:size-[0.6rem] before:rounded-full before:border-[1.5px] before:border-ink before:bg-mark before:content-['']"><b class="text-ink">Wallet is credited</b> once you approve.</li>
                        </ol>
                        <ul class="check-list">
                            <li class="check">Requests nobody approves expire on their own.</li>
                            <li class="check">Leave your bank details empty and the option disappears. Run card-only or transfer-only.</li>
                            <li class="check">Implausible amounts are refused, and every confirmation or rejection lands in the audit log.</li>
                        </ul>
                    </article>
                </div>

                <dl class="grid border-t border-ink sm:grid-cols-2 lg:grid-cols-4">
                    <div class="border-b border-rule py-4 sm:pr-4"><dt class="mono-label">Minimum top-up</dt><dd class="mt-2 font-mono text-xl font-medium">$10</dd></div>
                    <div class="border-b border-rule py-4 sm:pl-4 lg:border-l"><dt class="mono-label">Maximum top-up</dt><dd class="mt-2 font-mono text-xl font-medium">$10,000</dd></div>
                    <div class="border-b border-rule py-4 sm:pr-4 lg:border-l lg:pl-4"><dt class="mono-label">First top-up cap</dt><dd class="mt-2 font-mono text-xl font-medium">$500</dd></div>
                    <div class="border-b border-rule py-4 sm:pl-4 lg:border-l"><dt class="mono-label">Billing and tax details</dt><dd class="mt-2 font-mono text-xl font-medium">per advertiser</dd></div>
                </dl>
                <p class="-mt-4 max-w-176 text-[0.9375rem] text-ink-2">Limits are defaults you can change in the environment file. The first-top-up cap applies until an advertiser's first payment has settled, which limits the damage from a stolen card. The wallet balance shows in the top bar, with a warning when it will not cover the recent daily spend.</p>
            </div>
        </section>

        <!-- ARCHITECTURE -->
        <section class="sec" id="scale">
            <div class="sec-label">Architecture</div>
            <div class="sec-body">
                <div>
                    <h2 class="h2">Built for scale, not demos.</h2>
                    <p class="lede">The path that answers an exchange is kept small and separate from everything that can be slow.</p>
                </div>
                <div class="panel grid md:grid-cols-[1fr_1.25fr]">
                    <div class="min-w-0 p-6">
                        <h3 class="zone-title"><span class="text-accent-ink">Hot path</span> · answers the exchange</h3>
                        <div class="flex flex-wrap gap-2"><span class="node">exchange</span><span class="node node-core">bidder</span><span class="node node-store">redis</span></div>
                        <p class="zone-note">The bidder reads campaigns from memory and Redis. It never opens a database connection, so a slow Postgres cannot slow a bid.</p>
                    </div>
                    <div class="min-w-0 border-t border-rule bg-paper p-6 md:border-t-0 md:border-l">
                        <h3 class="zone-title">Cold path · money, reports, admin</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="node">campaign-manager</span><span class="node node-store">postgres</span><span class="node">aggregator</span><span class="node">indexer</span><span class="node node-store">elasticsearch</span><span class="node">reporting</span><span class="node">optimizer</span>
                        </div>
                        <p class="zone-note">Campaigns, wallets and users live in PostgreSQL. Events flow through a Redis stream to the aggregator and the indexer, at their own pace.</p>
                    </div>
                </div>

                <div class="grid border-t border-ink md:grid-cols-2">
                    <div class="fact"><h3>Redis only on the bid path</h3><p>Campaigns are held in memory. The bidder has no database driver in its request loop.</p></div>
                    <div class="fact"><h3>Exactly-once billing</h3><p>An impression delivered twice is charged once. Events are keyed by stream id, so a redelivery overwrites itself.</p></div>
                    <div class="fact"><h3>Under 100&nbsp;ms target</h3><p>A per-request deadline is derived from the exchange's <code class="inline-code">tmax</code>. <code class="inline-code">make latency</code> measures it with wrk on your hardware.</p></div>
                    <div class="fact"><h3>Fuzz-tested input</h3><p>Seeded random malformed bid requests must never crash the parser or the auction. <code class="inline-code">make fuzz</code></p></div>
                    <div class="fact"><h3>Chaos-tested outages</h3><p>Redis, Postgres, Elasticsearch, mail and a killed worker are injected on purpose. <code class="inline-code">make chaos</code></p></div>
                    <div class="fact"><h3>Fails in the exchange's favour</h3><p>If Redis is down, win notices answer 503 so the exchange retries instead of losing the sale.</p></div>
                </div>
            </div>
        </section>

        <!-- PLATFORM -->
        <section class="sec" id="platform">
            <div class="sec-label">Inside the box</div>
            <div class="sec-body">
                <div>
                    <h2 class="h2">Everything an ad network needs, in one repository.</h2>
                    <p class="lede">Seven services, one shared kernel, one Docker Compose file. Read it, change it, ship it.</p>
                </div>
                <div class="panel grid md:grid-cols-2 lg:grid-cols-3">
                    <article class="feat"><span class="mono-label">campaign-manager</span><h3>Web app and REST API</h3><p>One campaign form with ad-format cards, budgets, bid hierarchy, delivery limits, creatives, targeting and conversion setup. The API enforces the same rules.</p></article>
                    <article class="feat"><span class="mono-label">reporting</span><h3>Reports on every dimension</h3><p>Totals, time series and breakdowns by campaign, day, hour, exchange, bid level, creative, country, OS, device, site, publisher, ad format and zone. CSV export and event-log search.</p></article>
                    <article class="feat"><span class="mono-label">optimizer</span><h3>Bids that follow results</h3><p>Give a campaign a CPA or CTR goal and a bid multiplier moves toward what converts, without anyone touching the bid.</p></article>
                    <article class="feat"><span class="mono-label">zones</span><h3>Whitelist, blacklist, bid per zone</h3><p>Block or allow placements, share large lists between campaigns, and set a bid for one zone straight from the report.</p></article>
                    <article class="feat"><span class="mono-label">tracking</span><h3>Landing-URL tags and postbacks</h3><p>Insert tags like {click_id}, {zone} and {country} into destination URLs. A postback builder writes the conversion URL for your tracker.</p></article>
                    <article class="feat"><span class="mono-label">limits</span><h3>Budgets, pacing, caps</h3><p>Daily and lifetime budgets, pacing, frequency caps, schedules, impression and click limits. A campaign that hits one pauses and records why.</p></article>
                    <article class="feat"><span class="mono-label">metrics</span><h3>Operable from day one</h3><p>The bidder serves /health and Prometheus /metrics: requests by exchange and outcome, rejections by reason, a latency histogram.</p></article>
                    <article class="feat"><span class="mono-label">mail</span><h3>Queued email with retries</h3><p>Sign-up, password reset and payment email goes through a queue with retries after 1, 2, 4 and 8 minutes. Bodies are erased once sent.</p></article>
                    <article class="feat"><span class="mono-label">demo</span><h3>Realistic data in one command</h3><p>make fake-data creates advertisers, wallets and campaigns. make traffic sends 300 requests through bid, win, pixel, click and conversion.</p></article>
                </div>
            </div>
        </section>

        <!-- ADVERTISERS -->
        <section class="sec" id="advertisers">
            <div class="sec-label">For advertisers</div>
            <div class="sec-body">
                <h2 class="h2">Self-serve buying, with the controls media buyers ask for.</h2>
                <div class="grid items-start gap-10 md:grid-cols-2">
                    <dl class="border-t border-ink">
                        <div class="dl-row"><dt>Wallet</dt><dd>Fund by card (credited only after Stripe confirms) or by bank transfer approved by an admin.</dd></div>
                        <div class="dl-row"><dt>Targeting</dt><dd>Geo (country to ZIP), device, OS, carrier, domain, app, zone, category, keyword, audience.</dd></div>
                        <div class="dl-row"><dt>Conversions</dt><dd>Postback builder, a window per campaign, and conversions that keep the click's format, zone and country.</dd></div>
                        <div class="dl-row"><dt>Attribution</dt><dd>Six attribution models.</dd></div>
                        <div class="dl-row"><dt>Limits</dt><dd>Daily and lifetime budgets, pacing, frequency caps, schedules.</dd></div>
                        <div class="dl-row"><dt>REST API</dt><dd>Token-based, using the same validation as the web form.</dd></div>
                    </dl>
                    <div class="panel px-5 pt-5 pb-[1.4rem]">
                        <h3 class="zone-title">Bid hierarchy · most specific wins</h3>
                        <ol class="flex flex-col gap-[0.45rem]">
                            <li class="rung rung-top">Zone <code>z-100</code></li>
                            <li class="rung md:ml-4">Site, app or publisher <code>news.example</code></li>
                            <li class="rung md:ml-8">Category <code>IAB12</code></li>
                            <li class="rung md:ml-12">Exchange <code>xyz-ssp</code></li>
                            <li class="rung md:ml-16">Campaign <code>default bid</code></li>
                        </ol>
                        <p class="mt-4 text-sm text-ink-2">Pay more on the zone that converts, and the default everywhere else. Ties are split at random.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- EXCHANGES -->
        <section class="sec" id="supply">
            <div class="sec-label">For exchanges</div>
            <div class="sec-body">
                <div>
                    <h2 class="h2">Connect an SSP in minutes.</h2>
                    <p class="lede">An administrator registers the exchange with its token, seat, network margin and traffic type. The exchange gets one endpoint.</p>
                </div>
                <div class="grid items-start gap-10 md:grid-cols-2">
                    <ul class="border-t border-ink text-[0.9875rem] text-ink-2">
                        <li class="check"><b class="font-semibold text-ink">A dedicated endpoint</b> at <code>/bid/{exchange}</code>, token-checked, pausable.</li>
                        <li class="check"><b class="font-semibold text-ink">OpenRTB 2.5</b> request, impression, device, geo, deal, video and native objects.</li>
                        <li class="check"><b class="font-semibold text-ink">Deal support</b> as a targeting dimension on each campaign.</li>
                        <li class="check"><b class="font-semibold text-ink">Traffic-type classification</b> for pop, push and redirect supply that OpenRTB cannot describe.</li>
                        <li class="check"><b class="font-semibold text-ink">Win-price macro</b> and signed win, pixel and click URLs per exchange.</li>
                        <li class="check"><b class="font-semibold text-ink">Plain no-bids.</b> A 204 with the reason in a header, so partners can debug.</li>
                    </ul>
                    <figure class="term">
                        <div class="term-head"><span>try it locally</span><button class="copy ml-auto" type="button" data-copy="curl -X POST localhost:9501/bid/demo -H 'Content-Type: application/json' -d @services/bidder/fixtures/sample-bid-request.json">copy</button></div>
<pre><span class="d">$</span> curl -X POST localhost:9501/bid/demo \
    -H <span class="s">'Content-Type: application/json'</span> \
    -d @services/bidder/fixtures/sample-bid-request.json

<span class="d">$</span> make win
<span class="d"># bid, win notice (sent twice), pixel, click</span>
<span class="d"># wallet debited once</span></pre>
                    </figure>
                </div>
            </div>
        </section>

        <!-- SECURITY -->
        <section class="sec" id="security">
            <div class="sec-label">Security</div>
            <div class="sec-body">
                <h2 class="h2">Money and tracking you can defend.</h2>
                <div class="panel grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                    <div class="sec-cell"><h3>Two-factor, enforced</h3><p>Admins must enable TOTP. Recovery codes and a 48-hour cancellable lost-phone flow.</p></div>
                    <div class="sec-cell"><h3>Signed tracking URLs</h3><p>Win, pixel and click URLs carry an HMAC, so they cannot be forged.</p></div>
                    <div class="sec-cell"><h3>Audit log</h3><p>Sign-ins, account changes and admin actions are recorded.</p></div>
                    <div class="sec-cell"><h3>Stripe-confirmed only</h3><p>Cards are credited after Stripe confirms. A worker reconciles lost webhooks.</p></div>
                    <div class="sec-cell"><h3>Automated backups</h3><p><code>make backup</code> dumps the database and creatives, keeping as many as you set.</p></div>
                </div>
            </div>
        </section>

        <!-- DEPLOYMENT -->
        <section class="sec" id="deploy">
            <div class="sec-label">Deployment</div>
            <div class="sec-body">
                <div>
                    <h2 class="h2">Runs anywhere Docker does.</h2>
                    <p class="lede">Every service is its own container. Start on a laptop, then move the same images to a server.</p>
                </div>
                <div class="grid gap-6 md:grid-cols-2">
                    <div class="flex min-w-0 flex-col gap-4">
                        <h3 class="text-xl tracking-[-0.015em]">One-server quick start <small class="ml-2 font-mono text-[0.78rem] font-normal tracking-normal text-ink-3 [font-stretch:100%]">development</small></h3>
                        <figure class="term">
                            <div class="term-head"><span>shell</span><button class="copy ml-auto" type="button" data-copy="cp .env.example .env&#10;make install&#10;make up&#10;make migrate&#10;make seed">copy</button></div>
<pre><span class="d">$</span> cp .env.example .env
<span class="d">$</span> make install
<span class="d">$</span> make up
<span class="d">$</span> make migrate
<span class="d">$</span> make seed
<span class="ok">→ campaign manager on :9502, bidder on :9501</span></pre>
                        </figure>
                        <p class="text-[0.9875rem] text-ink-2">Seeds an admin, demo advertisers, campaigns and exchanges. <code>make traffic</code> then sends 300 requests through bid, win, pixel, click and conversion.</p>
                    </div>
                    <div class="flex min-w-0 flex-col gap-4">
                        <h3 class="text-xl tracking-[-0.015em]">Production <small class="ml-2 font-mono text-[0.78rem] font-normal tracking-normal text-ink-3 [font-stretch:100%]">Caddy · HTTPS</small></h3>
                        <figure class="term">
                            <div class="term-head"><span>docker-compose.prod.yml</span></div>
<pre><span class="d">internet</span> → <span class="s">caddy</span> <span class="d">:80 :443</span>
          ├─ campaign-manager
          └─ bidder
<span class="d">private network only:</span>
  postgres · redis · elasticsearch
  reporting · aggregator · indexer</pre>
                        </figure>
                        <p class="text-[0.9875rem] text-ink-2">Caddy is the only published service. It issues certificates, speaks HTTP/2 and limits request sizes. The written guide takes a fresh Linux server to HTTPS in about 45 minutes, plus DNS.</p>
                    </div>
                </div>
                <p class="max-w-168 border-l-[3px] border-mark py-1 pl-[1.1rem] text-ink-2"><b class="text-ink">Fully self-hosted.</b> There is no Auctionly cloud. Campaigns, wallets, events and creatives stay on your infrastructure, and your data never leaves it.</p>
            </div>
        </section>

        <!-- LICENSING -->
        <section class="sec" id="licence">
            <div class="sec-label">Licensing</div>
            <div class="sec-body">
                <div>
                    <h2 class="h2">Buy the source. Run it as your own.</h2>
                    <p class="lede">You receive the code and deploy it yourself. These are placeholder tiers; replace them with your actual terms.</p>
                </div>
                <div class="panel grid md:grid-cols-3">
                    <div class="plan"><span class="mono-label">Tier A</span><h3>Source licence</h3><div class="price">$ — <i>one-time</i></div><ul><li>Full source for all services</li><li>Use on your own infrastructure</li><li>Updates for a set period</li></ul></div>
                    <div class="plan"><span class="mono-label">Tier B</span><h3>Subscription</h3><div class="price">$ — <i>per year</i></div><ul><li>Everything in Tier A</li><li>Continuous updates</li><li>Support channel</li></ul></div>
                    <div class="plan"><span class="mono-label">Tier C</span><h3>White-label</h3><div class="price">Talk to us</div><ul><li>Your brand, domain and logo</li><li>Resell to your own advertisers</li><li>Onboarding help</li></ul></div>
                </div>
                <p class="border border-dashed border-rule-strong bg-paper px-[0.9rem] py-[0.7rem] font-mono text-[0.8rem] leading-normal text-ink-3">// PLACEHOLDER: pricing and licence model are not decided. Edit this section before launch.</p>
            </div>
        </section>

        <!-- FAQ -->
        <section class="sec" id="faq">
            <div class="sec-label">Questions</div>
            <div class="sec-body">
                <h2 class="h2">Answers for people who have evaluated RTB platforms before.</h2>
                <div class="border-t border-ink">
                    <details class="faq"><summary>Is Auctionly a hosted service?</summary><p>No. Auctionly is self-hosted software. You deploy it with Docker on your own server, and your campaigns, wallets and events stay on your infrastructure.</p></details>
                    <details class="faq"><summary>Which OpenRTB version does it support?</summary><p>OpenRTB 2.5. Each exchange gets its own /bid/{exchange} endpoint and receives a bid, win notices and tracked clicks.</p></details>
                    <details class="faq"><summary>How fast does the bidder respond?</summary><p>The target is under 100 ms, typically a few milliseconds. The bidder never touches the database on the bid path, and it applies a deadline derived from the exchange's tmax.</p></details>
                    <details class="faq"><summary>Which ad formats can advertisers run?</summary><p>Seven: display, video (VAST), native, push, pop, domain redirect and deeplink.</p></details>
                    <details class="faq"><summary>How do advertisers pay?</summary><p>They fund a prepaid wallet by card through Stripe or by bank transfer. Card payments are credited only after Stripe confirms them. Bank transfers are credited when an administrator approves the request.</p></details>
                    <details class="faq"><summary>Can an impression be billed twice?</summary><p>No. An impression that is delivered twice is charged once. Events are keyed by their stream id, so a redelivered event overwrites itself instead of billing again.</p></details>
                    <details class="faq"><summary>What happens if Elasticsearch goes down?</summary><p>Reporting falls back to PostgreSQL rollups. The dimensions that only the event log knows are then reported as unavailable, and bidding is not affected because the bidder only uses Redis.</p></details>
                </div>
            </div>
        </section>
    </div>

    <!-- FINAL CTA -->
    <section class="-mx-5 mt-24 bg-ink px-5 py-[4.5rem] text-white">
        <div class="mx-auto grid max-w-[74rem] items-center gap-12 lg:grid-cols-[1.2fr_1fr]">
            <div>
                <h2 class="max-w-[16ch] text-[clamp(2rem,4vw,3.2rem)]">Own your ad stack.</h2>
                <p class="mt-4 max-w-120 text-[#b7c5d8]">Run the demo on your machine, then put it on your own server.</p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <button type="button" class="btn !border-white !bg-white !text-ink hover:!border-mark hover:!bg-mark" data-contact="Source licence">Get the source</button>
                    <button type="button" class="btn btn-ghost !border-white/35 !text-white hover:!border-white hover:!bg-transparent" data-contact="Live demo">Request a demo</button>
                </div>
            </div>
            <figure class="term !bg-term-deep">
                <div class="term-head"><span>make stan · make fuzz · make chaos</span></div>
<pre><span class="d">$</span> make stan    <span class="d"># PHPStan level 8, every service</span>
<span class="d">$</span> make fuzz    <span class="d"># malformed bid requests</span>
<span class="d">$</span> make chaos   <span class="d"># kill redis, postgres, elastic</span></pre>
            </figure>
        </div>
    </section>
</main>

<footer class="-mx-5 border-t border-white/10 bg-ink px-5 pt-10 pb-12 text-[0.9rem] text-[#9fb1c8]">
    <div class="mx-auto flex max-w-[74rem] flex-wrap justify-between gap-x-12 gap-y-6">
        <a class="font-bold text-white no-underline [font-stretch:112%]" href="#top">Auctionly</a>
        <ul class="flex flex-wrap gap-x-7 gap-y-2">
            <li><a class="no-underline hover:text-white" href="#">Docs</a></li>
            <li><a class="no-underline hover:text-white" href="#">Source</a></li>
            <li><a class="no-underline hover:text-white" href="#">Sign in</a></li>
            <li><button type="button" class="cursor-pointer hover:text-white" data-contact="Live demo">Request a demo</button></li>
            <li><a class="no-underline hover:text-white" href="#">Contact: hello@auctionly.com</a></li>
        </ul>
        <span>Self-hosted software. You deploy it, you own it.</span>
    </div>
</footer>
<!-- CONTACT MODAL -->
<dialog id="contact-dialog" class="contact" aria-labelledby="contact-title">
    <div class="contact-grid">
        <aside class="contact-side">
            <p class="eyebrow text-term-str">Talk to us</p>
            <h2 id="contact-title" class="mt-3 text-[1.6rem] md:mt-4 md:text-[1.9rem] leading-[1.05] font-extrabold tracking-[-0.03em] text-white">Let's talk about your ad stack.</h2>
            <p class="mt-4 text-[0.9375rem] text-[#b7c5d8]">Tell us what you are building. A person reads every message and answers by email.</p>
            <ul class="contact-points">
                <li>Source licence, subscription or white-label</li>
                <li>A walkthrough of the bidder, billing and reporting</li>
                <li>Questions about running it on your own server</li>
            </ul>
            <p class="mt-auto pt-8 font-mono text-xs leading-relaxed text-term-dim max-md:hidden">Self-hosted software. Your data stays on your infrastructure.</p>
        </aside>

        <div class="contact-main">
            <button type="button" class="contact-close" data-contact-close aria-label="Close">
                <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" fill="none"/></svg>
            </button>

            <form id="contact-form" novalidate>
                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="field">
                        <label for="cf-name">Name</label>
                        <input id="cf-name" name="name" type="text" autocomplete="name" maxlength="100" required />
                        <p class="field-error" data-error-for="name"></p>
                    </div>
                    <div class="field">
                        <label for="cf-email">Work email</label>
                        <input id="cf-email" name="email" type="email" autocomplete="email" maxlength="190" required />
                        <p class="field-error" data-error-for="email"></p>
                    </div>
                    <div class="field">
                        <label for="cf-company">Company <span>(optional)</span></label>
                        <input id="cf-company" name="company" type="text" autocomplete="organization" maxlength="120" />
                        <p class="field-error" data-error-for="company"></p>
                    </div>
                    <div class="field">
                        <label for="cf-interest">I am interested in</label>
                        <select id="cf-interest" name="interest" required>
                            <option>Source licence</option>
                            <option>Subscription</option>
                            <option>White-label</option>
                            <option>Live demo</option>
                            <option>Something else</option>
                        </select>
                        <p class="field-error" data-error-for="interest"></p>
                    </div>
                </div>
                <div class="field mt-4">
                    <label for="cf-message">How can we help?</label>
                    <textarea id="cf-message" name="message" rows="5" maxlength="4000" required placeholder="Your traffic, your exchanges, how you sell today, what you want to own."></textarea>
                    <p class="field-error" data-error-for="message"></p>
                </div>

                <div class="contact-trap" aria-hidden="true">
                    <label for="cf-hp">Leave this empty</label>
                    <input id="cf-hp" name="contact_hp" type="text" tabindex="-1" autocomplete="off" />
                </div>

                <p id="contact-alert" class="contact-alert" role="alert" hidden></p>

                <div class="mt-5 flex flex-wrap items-center gap-4">
                    <button type="submit" class="btn btn-loader" id="contact-submit">
                        <span class="btn-label">Send message</span>
                        <span class="btn-spinner" aria-hidden="true"></span>
                    </button>
                    <span class="font-mono text-xs text-ink-3">We reply by email.</span>
                </div>
            </form>

            <div id="contact-success" class="contact-success" hidden tabindex="-1">
                <span class="contact-check" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="30" height="30"><path d="M5 12.5l4.5 4.5L19 7.5" stroke="#fff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg>
                </span>
                <h3 class="text-2xl tracking-[-0.02em]">Message sent.</h3>
                <p id="contact-success-text" class="max-w-96 text-ink-2">Thanks, your message is on its way. We will reply by email.</p>
                <button type="button" class="btn btn-ghost mt-2" data-contact-close>Close</button>
            </div>
        </div>
    </div>
</dialog>
#endsection
