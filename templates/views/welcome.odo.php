#extends('layouts.app')
#section('title')
Auctionly: Self-Hosted Campaign Manager for Push, Pop and Deeplink Traffic
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
            <li><a class="no-underline hover:text-accent-ink" href="#publishers">Publishers</a></li>
            <li><a class="no-underline hover:text-accent-ink" href="#billing">Billing</a></li>
            <li><a class="no-underline hover:text-accent-ink" href="#api">API</a></li>
            <li><a class="no-underline hover:text-accent-ink" href="#scale">Architecture</a></li>
            <li><a class="no-underline hover:text-accent-ink" href="#deploy">Deploy</a></li>
            <li><a class="no-underline hover:text-accent-ink" href="#licence">Pricing</a></li>
        </ul>
        <button type="button" class="btn ml-auto !px-3.5 !py-2.5 !text-sm md:ml-0" data-contact="Source licence">Get the source</button>
    </div>
</header>

<main id="top">

    <!-- HERO -->
    <section class="mx-auto grid max-w-[74rem] items-center gap-10 py-12 lg:grid-cols-[1.05fr_1fr] lg:gap-14 lg:pt-[4.5rem] lg:pb-14">
        <div>
            <p class="eyebrow mb-[1.4rem] text-accent-ink">A complete campaign manager</p>
            <h1 class="text-[clamp(2.5rem,5.4vw,4.4rem)] leading-none font-extrabold tracking-[-0.035em]">
                Advertisers, publishers and campaigns, <em class="bg-[linear-gradient(transparent_74%,var(--color-mark)_74%,var(--color-mark)_92%,transparent_92%)] not-italic">on your own server.</em>
            </h1>
            <p class="mt-6 max-w-136 text-[1.1875rem] text-ink-2">Auctionly is a complete campaign manager: the bidder, publisher portal and billing for buying and selling push, pop, domain redirect and deeplink traffic. Buy from ad exchanges over OpenRTB 2.5 with a bid out in under 100 ms, or from publishers you onboard yourself, who send visitors through a tracked link with their own sub ID and click ID. Every click, conversion and dollar stays on a server you control.</p>
            <div class="mt-8 flex flex-wrap gap-3">
                <button type="button" class="btn" data-contact="Source licence">Get the source</button>
                <button type="button" class="btn btn-ghost" data-contact="Live demo">See a live demo</button>
                <a class="btn btn-ghost" href="#">View docs</a>
            </div>
            <p class="mt-5 font-mono text-[0.8125rem] leading-normal text-ink-3">You deploy it. You own the database. Nothing phones home.</p>
        </div>
        <div class="flex min-w-0 flex-col gap-3">
            <figure class="term">
                <div class="term-head"><span>publisher link</span><span class="ml-auto text-term-str">no ad tag, no ad server</span></div>
<pre><span class="k">GET</span> /r/<span class="s">z-4f2a91c07b</span>
  ?adv=<span class="s">5</span>&amp;floor=0.005&amp;sig=<span class="ok">hmac</span>
  &amp;sub=<span class="s">push_us_1</span>&amp;clickid=<span class="s">a81f2c…</span>&amp;keyword=<span class="s">intel_i5</span>
  &amp;product_url=<span class="s">https%3A%2F%2Fbrand.com%2Fp%2F1</span></pre>
            </figure>
            <figure class="term">
                <div class="term-head"><span>redirect</span><span class="ml-auto text-term-str">302 · served from Redis</span></div>
<pre><span class="k">Location</span>: https://network.example/go
  ?url=<span class="s">…brand.com%2Fp%2F1</span>&amp;cid=<span class="s">35f1668d…</span>&amp;camp=<span class="s">1</span>

<span class="d">click booked · advertiser debited · publisher credited, once</span>
<span class="d">no campaign takes it → the link's fallback URL</span></pre>
            </figure>
            <figure class="term">
                <div class="term-head"><span>conversion postback</span><span class="ml-auto text-term-str">from the advertiser's network</span></div>
<pre><span class="k">GET</span> /conversion?click_id=<span class="s">35f1668d…</span>
  &amp;event=<span class="s">purchase</span>&amp;value=<span class="s">25</span>&amp;tx=<span class="s">order-1</span>
{ <span class="k">"status"</span>: <span class="s">"recorded"</span> }

<span class="d">matched to the click → counted → publisher postback</span></pre>
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
                    <h2 class="h2">From funded wallet to billed visit.</h2>
                    <p class="lede">Advertisers, and two ways to bring supply: exchanges over OpenRTB, or publishers you onboard directly. One event stream either way. Each step writes to <code>rtb:events</code>, so billing and reporting read the same facts the bidder produced.</p>
                </div>

                <ol class="panel grid md:grid-cols-3">
                    <li class="step"><span class="n">STEP 1</span><h3>Advertisers fund and launch</h3><p>Sign up, add funds by card or bank transfer, create a campaign in one of four formats: push, pop, domain redirect or deeplink. It reaches the bidder about three seconds after you save it.</p></li>
                    <li class="step"><span class="n">STEP 2</span><h3>Supply arrives from exchanges or publishers</h3><p>An exchange registers once and posts OpenRTB 2.5 to its own <code>/bid/{exchange}</code> endpoint. A publisher verifies a site and makes a link in the Link generator, with its own sub ID, click ID and keyword.</p></li>
                    <li class="step"><span class="n">STEP 3</span><h3>A campaign is picked, billing happens once</h3><p>Exchange traffic runs an auction inside the exchange's <code>tmax</code>. Publisher traffic goes to matching campaigns in turn at their fixed prices. The aggregator debits the wallet and credits the publisher one time per visit.</p></li>
                </ol>

                <div class="panel min-w-0 px-6 pt-6 pb-5">
                    <div class="mono-label mb-6 flex flex-wrap justify-between gap-4 !leading-snug"><span>Life of one exchange bid</span><span>Every hop is HMAC-signed</span></div>
                    <ol class="relative grid gap-5 before:absolute before:top-1.5 before:bottom-1.5 before:left-[0.42rem] before:border-l-[1.5px] before:border-ink before:content-[''] md:grid-cols-5 md:gap-0 md:before:inset-x-0 md:before:top-[0.6rem] md:before:bottom-auto md:before:left-0 md:before:border-t-[1.5px] md:before:border-l-0">
                        <li class="flow-item"><b>Bid</b><code>/bid/{exchange}</code><span>Auction runs against in-memory campaigns.</span></li>
                        <li class="flow-item bill"><b>Win</b><code>/win</code><span>Exchange reports the clearing price. Wallet is debited, once.</span></li>
                        <li class="flow-item"><b>Pixel</b><code>/pixel</code><span>The push is shown and the view is confirmed.</span></li>
                        <li class="flow-item"><b>Click</b><code>/click</code><span>Redirect to the advertiser's page, click recorded.</span></li>
                        <li class="flow-item"><b>Conversion</b><code>/conversion</code><span>Postback matched to the click inside its window.</span></li>
                    </ol>
                    <div class="mt-6 grid items-center gap-x-4 gap-y-3 border-t border-dashed border-rule-strong pt-[1.1rem] text-sm text-ink-2 md:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)]">
                        <span><i class="mr-2 inline-block size-[0.7rem] rounded-full bg-mark align-[-1px]"></i>Billing event. A win delivered twice is charged once.</span>
                        <span class="w-fit rounded-[3px] bg-accent-tint px-[0.7rem] py-2 font-mono text-[0.8rem] leading-none font-medium whitespace-nowrap text-accent-ink">rtb:events</span>
                        <span>Aggregator writes stats and spend. Indexer writes each event to Elasticsearch.</span>
                    </div>
                </div>

                <div class="panel min-w-0 px-6 pt-6 pb-5">
                    <div class="mono-label mb-6 flex flex-wrap justify-between gap-4 !leading-snug"><span>Life of one publisher visit</span><span>No auction, no ad tag</span></div>
                    <ol class="relative grid gap-5 before:absolute before:top-1.5 before:bottom-1.5 before:left-[0.42rem] before:border-l-[1.5px] before:border-ink before:content-[''] md:grid-cols-5 md:gap-0 md:before:inset-x-0 md:before:top-[0.6rem] md:before:bottom-auto md:before:left-0 md:before:border-t-[1.5px] md:before:border-l-0">
                        <li class="flow-item"><b>Link</b><code>/r/{zone}</code><span>The publisher's link, with its sub ID, click ID and keyword, is opened.</span></li>
                        <li class="flow-item"><b>Check</b><code>limits</code><span>A real browser, within the visitor, address and zone limits. Bots are not sold.</span></li>
                        <li class="flow-item"><b>Pick</b><code>rotation</code><span>Matching campaigns take turns, each at its own fixed price.</span></li>
                        <li class="flow-item bill"><b>Count</b><code>visit</code><span>The visit is the view and the click. Advertiser debited, publisher credited, once.</span></li>
                        <li class="flow-item"><b>Land</b><code>302</code><span>Redirect to the advertiser, or its network, with a click id. The sub ID and click ID stay on the click.</span></li>
                    </ol>
                    <div class="mt-6 grid items-center gap-x-4 gap-y-3 border-t border-dashed border-rule-strong pt-[1.1rem] text-sm text-ink-2 md:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)]">
                        <span><i class="mr-2 inline-block size-[0.7rem] rounded-full bg-mark align-[-1px]"></i>Pop, domain redirect and deeplink traffic counts the view and the click in one visit.</span>
                        <span class="w-fit rounded-[3px] bg-accent-tint px-[0.7rem] py-2 font-mono text-[0.8rem] leading-none font-medium whitespace-nowrap text-accent-ink">/r/{zone}</span>
                        <span>The same event stream feeds billing, publisher earnings and reports.</span>
                    </div>
                </div>

                <div class="panel min-w-0 px-6 pt-6 pb-5">
                    <div class="mono-label mb-6 flex flex-wrap justify-between gap-4 !leading-snug"><span>Life of one conversion</span><span>Reported by the advertiser's side</span></div>
                    <ol class="relative grid gap-5 before:absolute before:top-1.5 before:bottom-1.5 before:left-[0.42rem] before:border-l-[1.5px] before:border-ink before:content-[''] md:grid-cols-5 md:gap-0 md:before:inset-x-0 md:before:top-[0.6rem] md:before:bottom-auto md:before:left-0 md:before:border-t-[1.5px] md:before:border-l-0">
                        <li class="flow-item"><b>Click id</b><code>cid</code><span>The platform hands its click id to the advertiser's network in the destination URL.</span></li>
                        <li class="flow-item"><b>Sale</b><code>brand site</code><span>The visitor buys. The brand confirms the sale to its network or tracker.</span></li>
                        <li class="flow-item"><b>Postback</b><code>/conversion</code><span>The network calls the platform with the click id it kept, the event, the value and a transaction id.</span></li>
                        <li class="flow-item bill"><b>Credit</b><code>conversion</code><span>Matched to the click inside its window and counted. A campaign can hold it for approval.</span></li>
                        <li class="flow-item"><b>Publisher</b><code>{clickid}</code><span>The publisher's own click id goes back to its tracker in a postback.</span></li>
                    </ol>
                    <div class="mt-6 grid items-center gap-x-4 gap-y-3 border-t border-dashed border-rule-strong pt-[1.1rem] text-sm text-ink-2 md:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)]">
                        <span><i class="mr-2 inline-block size-[0.7rem] rounded-full bg-mark align-[-1px]"></i>The platform learns about a sale only when the advertiser's side calls it.</span>
                        <span class="w-fit rounded-[3px] bg-accent-tint px-[0.7rem] py-2 font-mono text-[0.8rem] leading-none font-medium whitespace-nowrap text-accent-ink">/conversion?click_id=…</span>
                        <span>A pixel and an API call work too, for advertisers without a network.</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- AD FORMATS -->
        <section class="sec" id="formats">
            <div class="sec-label">Ad formats</div>
            <div class="sec-body">
                <div>
                    <h2 class="h2">Four formats, one campaign form.</h2>
                    <p class="lede">Pick a format and the form asks for exactly what that format needs. The web form and the REST API share one rule set, so neither can save a campaign the other would refuse. The platform sells traffic: there are no banners, video or ad sizes to manage.</p>
                </div>
                <div class="border-t border-b border-t-ink border-b-rule-strong bg-panel" role="table" aria-label="Ad formats">
                    <div class="row mono-label hidden !bg-paper !py-3 md:grid" role="row"><span class="!text-ink-3">Format</span><span class="!text-ink-3">adformat</span><span class="!text-ink-3">What the campaign takes</span></div>
                    <div class="row" role="row"><b>Push</b><code>push</code><span>Notification title, body, icon and a destination URL. Sent to exchanges as an OpenRTB native ad.</span></div>
                    <div class="row" role="row"><b>Pop</b><code>pop</code><span>A destination URL. No creative to host.</span></div>
                    <div class="row" role="row"><b>Domain redirect</b><code>domain</code><span>A destination URL for redirect traffic, such as parked and type-in domains sent straight to the offer.</span></div>
                    <div class="row" role="row"><b>Deeplink</b><code>deeplink</code><span>A network or tracker deeplink with <code>{product_url}</code> where the product page goes. The visit brings the page.</span></div>
                </div>
                <p class="max-w-176 text-[0.9375rem] text-ink-2">Through exchanges all four run. Publishers you onboard directly sell <b class="text-ink">pop</b>, <b class="text-ink">domain redirect</b> and <b class="text-ink">deeplink</b> through a tracked link. Push stays on OpenRTB.</p>
                <p class="max-w-176 text-[0.9375rem] text-ink-2">OpenRTB objects cannot tell these formats apart, so an exchange either sends <code>imp.ext.adformat</code> on each impression or is registered with the one traffic type it sells.</p>

                <div class="grid items-start gap-10 md:grid-cols-2">
                    <div>
                        <h3 class="text-xl tracking-[-0.015em]">Deeplinks, the way networks do them</h3>
                        <ul class="mt-4 border-t border-ink text-[0.9875rem] text-ink-2">
                            <li class="check"><b class="font-semibold text-ink">No product page in the campaign.</b> The advertiser keeps a place for it with <code>{product_url}</code>, as the value of one parameter.</li>
                            <li class="check"><b class="font-semibold text-ink">The visit brings the page.</b> The platform fills it in, URL-encoded, and redirects to the network or tracker, which forwards the visitor.</li>
                            <li class="check"><b class="font-semibold text-ink">Only the brand's own site.</b> A product page on another website is not sold, so a publisher cannot send traffic anywhere else through a deeplink.</li>
                            <li class="check"><b class="font-semibold text-ink">Checked when saved.</b> A destination where the tag would replace part of the address is refused, and the form links to a guide with the parameter of each network.</li>
                        </ul>
                    </div>
                    <figure class="term">
                        <div class="term-head"><span>destination URL of a deeplink campaign</span><span class="ml-auto text-term-str">example</span></div>
<pre><span class="d"># the network's deeplink, parameter replaced</span>
https://network.example/deeplink
  ?offer=<span class="s">12</span>
  &amp;url=<span class="ok">{product_url}</span>
  &amp;cid=<span class="ok">{click_id}</span>&amp;camp=<span class="ok">{campaign_id}</span>

<span class="d">visit brings https://brand.com/p/1</span>
<span class="d">→ …?offer=12&amp;url=https%3A%2F%2Fbrand.com%2Fp%2F1</span></pre>
                    </figure>
                </div>
            </div>
        </section>

        <!-- BILLING -->
        <section class="sec" id="billing">
            <div class="sec-label">Billing</div>
            <div class="sec-body">
                <div>
                    <h2 class="h2">Card or bank transfer. Credited when the money is real.</h2>
                    <p class="lede">Advertisers fund a prepaid wallet. Spend is debited as visits, clicks and conversions are booked, at the campaign's price, and a campaign pauses when its funds run out. You choose which funding methods to switch on.</p>
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
                    <div class="border-b border-rule py-4 sm:pl-4 lg:border-l"><dt class="mono-label">Billing and tax details</dt><dd class="mt-2 font-mono text-xl font-medium">advertisers and publishers</dd></div>
                </dl>
                <p class="-mt-4 max-w-176 text-[0.9375rem] text-ink-2">Limits are defaults you can change in the environment file. The first-top-up cap applies until an advertiser's first payment has settled, which limits the damage from a stolen card. The wallet balance shows in the top bar, with a warning when it will not cover the recent daily spend. Every credited top-up has a printable receipt with your company details.</p>
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
                        <div class="flex flex-wrap gap-2"><span class="node">exchange</span><span class="node">publisher link</span><span class="node node-core">bidder</span><span class="node node-store">redis</span></div>
                        <p class="zone-note">The bidder reads campaigns from memory and Redis, for exchange bids and publisher visits alike. It never opens a database connection, so a slow Postgres cannot slow a bid.</p>
                    </div>
                    <div class="min-w-0 border-t border-rule bg-paper p-6 md:border-t-0 md:border-l">
                        <h3 class="zone-title">Cold path · money, reports, admin</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="node">campaign-manager</span><span class="node node-store">postgres</span><span class="node">aggregator</span><span class="node">indexer</span><span class="node">monitor</span><span class="node node-store">elasticsearch</span><span class="node">reporting</span><span class="node">optimizer</span>
                        </div>
                        <p class="zone-note">Campaigns, wallets and users live in PostgreSQL. Events flow through a Redis stream to the aggregator and the indexer, at their own pace.</p>
                    </div>
                </div>

                <div class="grid border-t border-ink md:grid-cols-2">
                    <div class="fact"><h3>Redis only on the bid path</h3><p>Campaigns are held in memory. The bidder has no database driver in its request loop.</p></div>
                    <div class="fact"><h3>Exactly-once billing</h3><p>A visit delivered twice is charged once. The aggregator books each batch and its stream position in one transaction, so a crash or a redelivery cannot bill twice. Only one aggregator may run, and a lock enforces it.</p></div>
                    <div class="fact"><h3>Bad events cannot stall billing</h3><p>An event that keeps failing is set aside after three tries in a quarantine list, so the rest of the stream keeps flowing and you are alerted.</p></div>
                    <div class="fact"><h3>Redis can be rebuilt</h3><p>The campaign snapshot and today's spend counters are rebuilt from PostgreSQL. Only events not yet read by the aggregator live in Redis alone, and the monitor watches how old they are.</p></div>
                    <div class="fact"><h3>Under 100&nbsp;ms target</h3><p>A per-request deadline is derived from the exchange's <code class="inline-code">tmax</code>. <code class="inline-code">make latency</code> measures it with wrk on your hardware.</p></div>
                    <div class="fact"><h3>Fuzz-tested input</h3><p>Seeded random malformed bid requests must never crash the parser or the auction. <code class="inline-code">make fuzz</code></p></div>
                    <div class="fact"><h3>Chaos-tested outages</h3><p>Redis, Postgres, Elasticsearch, mail and a killed worker are injected on purpose. <code class="inline-code">make chaos</code></p></div>
                    <div class="fact"><h3>Fails in the exchange's favour</h3><p>If Redis is down, win notices answer 503 so the exchange retries instead of losing the sale.</p></div>
                    <div class="fact"><h3>Images stay off the app server</h3><p>Push icons and images are served from a media domain by Caddy straight from disk, with <code class="inline-code">immutable</code> caching. Point a CDN at it when traffic grows.</p></div>
                    <div class="fact"><h3>Publishers do not slow the bidder</h3><p>Zones live in their own Redis hash, are fetched on demand and cached for seconds. A new zone never makes every bidder reload the campaigns.</p></div>
                    <div class="fact"><h3>Money is bounded per zone</h3><p>Daily ceilings per address and per zone cap what any one zone can cost advertisers, whatever a script does. <code class="inline-code">DIRECT_VISITS_PER_ZONE_PER_DAY</code></p></div>
                    <div class="fact"><h3>Every click is kept for two jobs</h3><p>Counts and spend go to PostgreSQL for billing. The raw click goes to Elasticsearch for search and reports, kept 90 days by default.</p></div>
                </div>
            </div>
        </section>

        <!-- PLATFORM -->
        <section class="sec" id="platform">
            <div class="sec-label">Inside the box</div>
            <div class="sec-body">
                <div>
                    <h2 class="h2">Everything a campaign manager needs, in one repository.</h2>
                    <p class="lede">Every service, one shared kernel, one Docker Compose file. Read it, change it, ship it.</p>
                </div>
                <div class="panel grid md:grid-cols-2 lg:grid-cols-3">
                    <article class="feat"><span class="mono-label">campaign-manager</span><h3>Web app and REST API</h3><p>One campaign form with four ad-format cards, budgets, bid hierarchy, delivery limits, creatives, targeting and conversion setup. The API enforces the same rules.</p></article>
                    <article class="feat"><span class="mono-label">reporting</span><h3>Reports on every dimension</h3><p>Totals, time series and breakdowns by campaign, day, hour, exchange, bid level, creative, country, OS, device, site, publisher, ad format, zone and sub ID. CSV export and event-log search.</p></article>
                    <article class="feat"><span class="mono-label">optimizer</span><h3>Bids that follow results</h3><p>Give a campaign a CPA or CTR goal and a bid multiplier moves toward what converts, without anyone touching the bid.</p></article>
                    <article class="feat"><span class="mono-label">links</span><h3>Link generator and Test link</h3><p>A publisher makes a link for an advertiser and a site, with a sub ID, click ID, keyword, bid floor and fallback URL. Test link shows where a visit would be sent and counts nothing.</p></article>
                    <article class="feat"><span class="mono-label">sub ids</span><h3>Sub IDs, click IDs, keywords</h3><p>Everything a publisher puts on a link is stored with the click. Reports by sub ID and by sub ID per site, a click-level report, and allow and block lists by sub ID per advertiser.</p></article>
                    <article class="feat"><span class="mono-label">placements</span><h3>Whitelist, blacklist, bid per zone</h3><p>Block or allow sources and placements, share large lists between campaigns, and set a bid for one zone straight from the report.</p></article>
                    <article class="feat"><span class="mono-label">tracking</span><h3>Destination tags and postbacks</h3><p>Insert tags like {click_id}, {zone}, {country} and {product_url} into destination URLs. A postback builder writes the conversion URL for the advertiser's network or tracker.</p></article>
                    <article class="feat"><span class="mono-label">deeplinks</span><h3>A guide inside the form</h3><p>The deeplink form links to a guide with the landing-page parameter of each affiliate network, and refuses a destination where the product tag would break the address.</p></article>
                    <article class="feat"><span class="mono-label">limits</span><h3>Budgets, pacing, caps</h3><p>Daily and lifetime budgets, pacing, frequency caps, schedules, impression and click limits. A campaign that hits one pauses and records why.</p></article>
                    <article class="feat"><span class="mono-label">metrics</span><h3>Operable from day one</h3><p>The bidder serves /health, a /ready that checks Redis and the loaded campaigns, and Prometheus /metrics: requests by exchange and outcome, rejections by reason, lost events, a latency histogram.</p></article>
                    <article class="feat"><span class="mono-label">mail</span><h3>Queued email with retries</h3><p>Sign-up, password reset and payment email goes through a queue with retries after 1, 2, 4 and 8 minutes. Bodies are erased once sent.</p></article>
                    <article class="feat"><span class="mono-label">demo</span><h3>Realistic data in one command</h3><p>make seed creates an admin, advertisers, campaigns, publishers with links and 30 days of traffic. make fresh gives an empty install with three logins and one test campaign, for local testing.</p></article>
                    <article class="feat"><span class="mono-label">review</span><h3>Approve before it bids</h3><p>An advertiser's campaign waits in review until you approve it or send it back with a note. Trusted advertisers can skip it.</p></article>
                    <article class="feat"><span class="mono-label">receipts</span><h3>Receipts, Terms, Privacy</h3><p>Every credited top-up has a printable receipt with your company details. Sign-up records which version of the Terms was accepted.</p></article>
                    <article class="feat"><span class="mono-label">publishers</span><h3>Portal for sites, links and payouts</h3><p>Publishers sign up, add a site, make links and read their reports. Earnings, payout progress and billing details are in their own area, and an X-API-KEY API does the same by script.</p></article>
                    <article class="feat"><span class="mono-label">verification</span><h3>Ownership proven before traffic</h3><p>A meta tag, a file or a DNS record proves a site is the publisher's. You approve it, and only then can it make links.</p></article>
                    <article class="feat"><span class="mono-label">conversions</span><h3>Hold, approve, reverse</h3><p>A campaign can hold conversions for the advertiser's approval. Approved ones can later be reversed, and the wallet and the publisher's earnings are corrected with explicit adjustment rows.</p></article>
                    <article class="feat"><span class="mono-label">monitor</span><h3>Alerts before customers notice</h3><p>A monitor checks event backlog, aggregator lag, lost events, errors and backups. A System page shows ok, warn or critical, and a webhook tells you when it changes.</p></article>
                    <article class="feat"><span class="mono-label">ledger</span><h3>Books that reconcile</h3><p>Money is booked in whole micro-dollars by one aggregator. <code>make reconcile-ledger</code> proves every wallet equals its ledger, and <code>make restore-drill</code> restores a backup into a scratch database to prove it works.</p></article>
                    <article class="feat"><span class="mono-label">media</span><h3>Push images and a CDN-ready domain</h3><p>Upload push icons and images in the form or with POST /api/v1/media. Serve them from their own domain, cached for a year, with a CDN in front when you need one.</p></article>
                    <article class="feat"><span class="mono-label">environments</span><h3>Local and production, one switch</h3><p><code>APP_ENV=local</code> lifts the click limits and accepts localhost as a site, to test with many clicks. Production keeps the limits and never accepts it, and the go-live check fails otherwise.</p></article>
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
                        <div class="dl-row"><dt>Supply</dt><dd>Buy from exchanges, from your own publishers, or both, per campaign. Publisher-only campaigns pay a fixed price per visit, click or conversion.</dd></div>
                        <div class="dl-row"><dt>Wallet</dt><dd>Fund by card (credited only after Stripe confirms) or by bank transfer approved by an admin.</dd></div>
                        <div class="dl-row"><dt>Targeting</dt><dd>Geo (country to ZIP), device, OS, carrier, domain, app, zone, sub ID, category, keyword, audience.</dd></div>
                        <div class="dl-row"><dt>Conversions</dt><dd>Postback builder, a window per campaign, and conversions that keep the click's format, zone and country. Hold them for your approval, and reverse one later if it turns out to be fake.</dd></div>
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

        <!-- REVIEW -->
        <section class="sec" id="review">
            <div class="sec-label">Quality control</div>
            <div class="sec-body">
                <div>
                    <h2 class="h2">Every campaign is reviewed before it bids.</h2>
                    <p class="lede">Advertisers cannot put a campaign live by themselves. You decide what runs on your network, and the advertiser always hears the outcome.</p>
                </div>
                <ol class="panel grid md:grid-cols-4">
                    <li class="step"><span class="n">SUBMITTED</span><h3>Save and submit</h3><p>The advertiser presses submit. The campaign is <b class="text-ink">In review</b> and does not bid.</p></li>
                    <li class="step"><span class="n">YOU ARE TOLD</span><h3>Email and a queue</h3><p>Administrators get an email and see it on the dashboard, in the In review tab and as a count in the navigation.</p></li>
                    <li class="step"><span class="n">DECIDED</span><h3>Approve or send back</h3><p>Approve and it bids within seconds. Or send it back to draft with a note, which the advertiser is emailed.</p></li>
                    <li class="step"><span class="n">AFTERWARDS</span><h3>Stays approved</h3><p>Pausing and resuming needs no new review. Changing a creative or its landing URL sends it back.</p></li>
                </ol>
                <div class="grid items-start gap-10 md:grid-cols-2">
                    <ul class="border-t border-ink text-[0.9875rem] text-ink-2">
                        <li class="check"><b class="font-semibold text-ink">Trusted advertisers</b> skip the queue once you have seen their work.</li>
                        <li class="check"><b class="font-semibold text-ink">The API follows the same rule.</b> A token that asks for <code>active</code> gets <code>202</code> and <code>pending_review</code>.</li>
                        <li class="check"><b class="font-semibold text-ink">One switch.</b> <code>REQUIRE_CAMPAIGN_REVIEW=false</code> turns it off for everyone.</li>
                        <li class="check"><b class="font-semibold text-ink">Every decision is in the audit log,</b> with who made it and the note.</li>
                    </ul>
                    <p class="max-w-120 border-l-[3px] border-mark py-1 pl-[1.1rem] text-ink-2"><b class="text-ink">Why it matters.</b> Exchanges and publishers hold you responsible for what you send. A review step is the cheapest protection against a misleading offer costing you a supply partner.</p>
                </div>
            </div>
        </section>

        <!-- API -->
        <section class="sec" id="api">
            <div class="sec-label">For developers</div>
            <div class="sec-body">
                <div>
                    <h2 class="h2">Everything in the web app is in the API too.</h2>
                    <p class="lede">Ten endpoints under <code>/api/v1</code>, JSON in and out, one personal token per script. An advertiser's token only ever sees that advertiser's campaigns, and the same validation applies as in the form. Publishers have their own API: an <code>X-API-KEY</code> header, a rate limit, and endpoints for links, reports, sites, placements, sub ID lists and postbacks.</p>
                </div>
                <div class="grid items-start gap-10 lg:grid-cols-2">
                    <ul class="min-w-0 border-t border-ink">
                        <li class="border-b border-rule py-3"><code class="text-accent-ink">GET /api/v1/me</code><p class="text-[0.9875rem] text-ink-2">Who the token belongs to.</p></li>
                        <li class="border-b border-rule py-3"><code class="text-accent-ink">GET /api/v1/advertisers</code><p class="text-[0.9875rem] text-ink-2">The accounts you can see, with wallet balance.</p></li>
                        <li class="border-b border-rule py-3"><code class="text-accent-ink">GET /api/v1/campaigns</code><p class="text-[0.9875rem] text-ink-2">List with filters, paging and sorting.</p></li>
                        <li class="border-b border-rule py-3"><code class="text-accent-ink">POST /api/v1/campaigns</code><p class="text-[0.9875rem] text-ink-2">Create. The body is the campaign form.</p></li>
                        <li class="border-b border-rule py-3"><code class="text-accent-ink">GET · PUT · DELETE /api/v1/campaigns/{id}</code><p class="text-[0.9875rem] text-ink-2">Read, change or delete one campaign.</p></li>
                        <li class="border-b border-rule py-3"><code class="text-accent-ink">POST /api/v1/campaigns/{id}/status</code><p class="text-[0.9875rem] text-ink-2">Activate, pause, draft or archive. Activating can answer 202 while it waits for review.</p></li>
                        <li class="border-b border-rule py-3"><code class="text-accent-ink">POST /api/v1/media</code><p class="text-[0.9875rem] text-ink-2">Upload a push icon or image and get its address.</p></li>
                        <li class="border-b border-rule py-3"><code class="text-accent-ink">GET /api/v1/reports/campaigns</code><p class="text-[0.9875rem] text-ink-2">Spend, clicks and conversions per campaign.</p></li>
                    </ul>
                    <figure class="term">
                        <div class="term-head"><span>upload, create, go live</span><span class="ml-auto text-term-str">example</span></div>
<pre><span class="d">$</span> curl -X POST $BASE/api/v1/media \
    -H <span class="s">"Authorization: Bearer $TOKEN"</span> \
    -F image=@push-icon.png
{ <span class="k">"data"</span>: {
    <span class="k">"url"</span>: <span class="s">"https://media.example.com/media/ab/3f…c1.png"</span>,
    <span class="k">"width"</span>: 192, <span class="k">"height"</span>: 192 } }

<span class="d">$</span> curl -X POST $BASE/api/v1/campaigns/123/status \
    -H <span class="s">"Authorization: Bearer $TOKEN"</span> \
    -d <span class="s">'{"status":"active"}'</span>
<span class="d">HTTP 202</span>
{ <span class="k">"data"</span>: { <span class="k">"id"</span>: 123, <span class="k">"status"</span>: <span class="s">"pending_review"</span> } }</pre>
                    </figure>
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
                        <li class="check"><b class="font-semibold text-ink">OpenRTB 2.5</b> request, impression, device, geo, deal and native objects.</li>
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

        <!-- PUBLISHERS -->
        <section class="sec" id="publishers">
            <div class="sec-label">For publishers</div>
            <div class="sec-body">
                <div>
                    <h2 class="h2">Give site owners a link, not an ad tag.</h2>
                    <p class="lede">Most publishers cannot speak OpenRTB. They sign up, add a website, prove it is theirs and make a link in the Link generator. There is no ad to render and no auction: matching campaigns take turns at fixed prices, and the publisher is paid on terms you set.</p>
                </div>

                <ol class="panel grid md:grid-cols-4">
                    <li class="step"><span class="n">SIGN UP</span><h3>Submit a site</h3><p>A publisher creates an account and adds the website it sends traffic from. The site waits for review.</p></li>
                    <li class="step"><span class="n">VERIFIED</span><h3>Prove it is theirs</h3><p>A meta tag, a file at the root, or a DNS TXT record. Any one is enough, and the check refuses private addresses.</p></li>
                    <li class="step"><span class="n">APPROVED</span><h3>You review the site</h3><p>Approve or reject with a reason, and the publisher is emailed. Suspend a site and its links stop at once.</p></li>
                    <li class="step"><span class="n">LIVE</span><h3>Make a link</h3><p>Only an approved site can make links. Pick an advertiser and a site, add a sub ID, click ID, keyword, bid floor or fallback URL if wanted, and copy the link.</p></li>
                </ol>

                <div class="grid items-start gap-10 md:grid-cols-2">
                    <ul class="border-t border-ink text-[0.9875rem] text-ink-2">
                        <li class="check"><b class="font-semibold text-ink">One link per source.</b> The advertiser, bid floor and fallback are signed by the platform. The publisher adds its own sub ID, click ID and keyword as query parameters, and every click is stored with them.</li>
                        <li class="check"><b class="font-semibold text-ink">Fixed prices, no auction.</b> Campaigns that match the visitor rotate. Advertisers pay per visit, per click or per conversion.</li>
                        <li class="check"><b class="font-semibold text-ink">Test link.</b> A dry run that shows where a visitor would be sent and counts nothing.</li>
                        <li class="check"><b class="font-semibold text-ink">Reports by source.</b> By day, advertiser, sub ID, sub ID per site and site, a click-level report with every click ID, and conversions. Allow or block sub IDs per advertiser.</li>
                        <li class="check"><b class="font-semibold text-ink">Postbacks to its own tracker.</b> A conversion goes back with the publisher's click ID, sub ID and payout.</li>
                        <li class="check"><b class="font-semibold text-ink">Pay on your terms.</b> A share of the advertiser's spend, or a fixed amount per visit, click or conversion, per publisher or per zone. Earnings are held for a few days, then paid out on request with progress from requested to paid.</li>
                        <li class="check"><b class="font-semibold text-ink">An API of its own.</b> An <code>X-API-KEY</code> header and a rate limit, for links, reports, sites, placements and postbacks.</li>
                    </ul>
                    <figure class="term">
                        <div class="term-head"><span>what a publisher uses</span><span class="ml-auto text-term-str">example</span></div>
<pre><span class="d">&lt;!-- a link from the Link generator --&gt;</span>
&lt;<span class="k">a</span> <span class="k">href</span>=<span class="s">"https://bid.example.com/r/z-9c13
  ?adv=5&amp;floor=0.005&amp;fb=…&amp;sig=…
  &amp;sub=push_us_1&amp;clickid=a81f2c…
  &amp;keyword=intel_i5"</span>&gt;Open&lt;/<span class="k">a</span>&gt;

<span class="d">a new click id for every click, made by the publisher</span>
<span class="d">site verified → link → click stored → earnings</span></pre>
                    </figure>
                </div>

                <div class="panel grid md:grid-cols-2 lg:grid-cols-4">
                    <article class="feat"><span class="mono-label">portal</span><h3>Sites, links, reports</h3><p>A portal of their own: sites and their review status, the Link generator, reports by source and a dashboard of visits, clicks, conversions and earnings.</p></article>
                    <article class="feat"><span class="mono-label">earnings</span><h3>Exact, once</h3><p>Earnings are credited together with the advertiser's charge, one time per visit, with the terms that applied kept on each row.</p></article>
                    <article class="feat"><span class="mono-label">payouts</span><h3>Requested to paid</h3><p>A payout moves through requested, processing and paid, with a reference. The money leaves the balance when it is asked for, and comes back if it is rejected.</p></article>
                    <article class="feat"><span class="mono-label">admin</span><h3>A queue for you</h3><p>Sites waiting for review, payouts to send, quality flags per zone, a click-level log with each publisher's own click ID, and a margin view of what advertisers paid against what publishers earned.</p></article>
                </div>
            </div>
        </section>

        <!-- TRAFFIC QUALITY -->
        <section class="sec" id="traffic">
            <div class="sec-label">Traffic quality</div>
            <div class="sec-body">
                <div>
                    <h2 class="h2">When a publisher is paid for what it counts, every count is checked.</h2>
                    <p class="lede">Exchanges are contracted companies. Publishers are anyone who signs up, so the platform assumes any number a publisher produces could be false and bounds what it can cost.</p>
                </div>
                <div class="panel grid grid-cols-2 lg:grid-cols-4">
                    <div class="sec-cell"><h3>Verified sites only</h3><p>A link works only while its site is approved. Suspending a site stops its zones at once.</p></div>
                    <div class="sec-cell"><h3>Signed links</h3><p>The advertiser, bid floor and fallback in a link carry an HMAC. A changed or forged link is refused.</p></div>
                    <div class="sec-cell"><h3>Real visitors</h3><p>Bots, crawlers and scripts are not sold. Country and device come from your edge network, not from the publisher.</p></div>
                    <div class="sec-cell"><h3>Visit limits</h3><p>A visitor is sold a few times a day through one zone, and addresses and zones have per-minute and per-day ceilings, whatever browser string is used.</p></div>
                    <div class="sec-cell"><h3>Labels stay labels</h3><p>Sub ID, click ID and keyword are the publisher's own names. They never decide who the publisher is, what it is paid or what a campaign sees.</p></div>
                    <div class="sec-cell"><h3>OpenRTB off by default</h3><p>A publisher's own bid requests prove nothing, so the endpoint is opt-in per zone for partners you trust.</p></div>
                    <div class="sec-cell"><h3>Payout hold</h3><p>Earnings are held for a few days so bad traffic can be taken back with an adjustment before the money leaves.</p></div>
                    <div class="sec-cell"><h3>Quality flags</h3><p>Zones with a very high click rate, no conversions, or a payout above what advertisers pay are flagged for you, with a review queue to dismiss or act on each one.</p></div>
                </div>
                <p class="max-w-168 border-l-[3px] border-mark py-1 pl-[1.1rem] text-ink-2"><b class="text-ink">Honest limits.</b> A redirect has no page to inspect, and a script can fake a referrer. The limits, the hold and the flags are what bound the cost, not a promise that no fake traffic exists.</p>
            </div>
        </section>

        <!-- SECURITY -->
        <section class="sec" id="security">
            <div class="sec-label">Security</div>
            <div class="sec-body">
                <h2 class="h2">Money and tracking you can defend.</h2>
                <div class="panel grid grid-cols-2 lg:grid-cols-4">
                    <div class="sec-cell"><h3>Two-factor, enforced</h3><p>Admins must enable TOTP. Recovery codes and a 48-hour cancellable lost-phone flow.</p></div>
                    <div class="sec-cell"><h3>Signed tracking URLs</h3><p>Win, pixel and click URLs carry an HMAC, so they cannot be forged.</p></div>
                    <div class="sec-cell"><h3>Audit log</h3><p>Sign-ins, account changes and admin actions are recorded.</p></div>
                    <div class="sec-cell"><h3>Stripe-confirmed only</h3><p>Cards are credited after Stripe confirms. A worker reconciles lost webhooks.</p></div>
                    <div class="sec-cell"><h3>Automated backups</h3><p><code>make backup</code> dumps the database and creatives, keeping as many as you set.</p></div>
                    <div class="sec-cell"><h3>Confirmed sign-ups</h3><p>Switch it on and a new account cannot sign in until it opens a one-time link. Only a button confirms, so mail scanners cannot use the link up.</p></div>
                    <div class="sec-cell"><h3>Terms on record</h3><p>Sign-up requires accepting the Terms and Privacy Policy, and stores which version and when.</p></div>
                    <div class="sec-cell"><h3>Signed postbacks</h3><p>An advertiser can require an HMAC on conversion postbacks. Without it, a click id alone is the credential, and a click can credit at most five conversions.</p></div>
                    <div class="sec-cell"><h3>Privacy signals</h3><p>The bidder reads TCF v2, GPP and US privacy strings and refuses to bid where consent was not given. It is on by default and set in the environment.</p></div>
                    <div class="sec-cell"><h3>Tested restore</h3><p>A backup you have never restored is a hope. <code>make restore-drill</code> restores the latest one into a scratch database and checks it.</p></div>
                    <div class="sec-cell"><h3>Abuse limits</h3><p>Failed sign-ins lock out for 15 minutes. Sign-up, password reset, confirmation email and uploads are rate-limited per address.</p></div>
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
                        <p class="text-[0.9875rem] text-ink-2">Seeds an admin, advertisers, campaigns, publishers with links and 30 days of traffic. <code>make traffic</code> sends 300 requests through bid, win, pixel, click and conversion. For a local test with many clicks, set <code>APP_ENV=local</code> and run <code>make fresh</code>.</p>
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
  reporting · aggregator · indexer · monitor</pre>
                        </figure>
                        <p class="text-[0.9875rem] text-ink-2">Caddy is the only published service. It issues certificates, speaks HTTP/2 and limits request sizes. The written guide takes a fresh Linux server to HTTPS in about 45 minutes, plus DNS.</p>
                    </div>
                </div>
                <div class="grid gap-6 md:grid-cols-2">
                    <div class="flex min-w-0 flex-col gap-4">
                        <h3 class="text-xl tracking-[-0.015em]">Go-live check <small class="ml-2 font-mono text-[0.78rem] font-normal tracking-normal text-ink-3 [font-stretch:100%]">before the first customer</small></h3>
                        <figure class="term">
                            <div class="term-head"><span>./scripts/prod-check.sh</span><span class="ml-auto text-term-str">example</span></div>
<pre><span class="ok">  ok  </span> DB_PASSWORD looks strong
<span class="ok">  ok  </span> administrators must use two-factor
<span class="ok">  ok  </span> Stripe is in LIVE mode
<span class="s">  FAIL</span> LEGAL_REVIEWED is not true
<span class="s">  FAIL</span> COMPANY_ADDRESS is empty

<span class="d">NOT READY: 2 blocking problem(s)</span></pre>
                        </figure>
                        <p class="text-[0.9875rem] text-ink-2">It refuses to pass while a secret is weak, debug is on, email goes nowhere, Stripe is in test mode, <code>APP_ENV</code> is not production or your company details are missing. The owner's guide walks from an empty server to your first advertiser.</p>
                    </div>
                    <div class="flex min-w-0 flex-col gap-4">
                        <h3 class="text-xl tracking-[-0.015em]">Push images and a CDN <small class="ml-2 font-mono text-[0.78rem] font-normal tracking-normal text-ink-3 [font-stretch:100%]">optional</small></h3>
                        <figure class="term">
                            <div class="term-head"><span>.env</span></div>
<pre>MEDIA_DOMAIN=<span class="s">media.example.com</span>
MEDIA_BASE_URL=<span class="s">https://media.example.com</span>
<span class="d"># or the address of a CDN that pulls from it</span>

<span class="d">uploads  →  ads.example.com   →  disk</span>
<span class="d">viewers  →  media.example.com →  disk</span></pre>
                        </figure>
                        <p class="text-[0.9875rem] text-ink-2">Uploads always go to the app and are saved on your server. The media domain only reads and serves them, so push images never load from the web app.</p>
                    </div>
                </div>
                <p class="max-w-168 border-l-[3px] border-mark py-1 pl-[1.1rem] text-ink-2"><b class="text-ink">Fully self-hosted.</b> There is no Auctionly cloud. Campaigns, wallets, events and creatives stay on your infrastructure, and your data never leaves it.</p>
            </div>
        </section>

        <!-- LICENSING -->
        <section class="sec" id="licence">
            <div class="sec-label">Pricing</div>
            <div class="sec-body">
                <div>
                    <h2 class="h2">Buy the source. Run it as your own.</h2>
                    <p class="lede">You receive the code and deploy it yourself. Choose how much help you want with it: none, ongoing support, or a white-label setup we plan with you.</p>
                </div>
                <div class="panel grid md:grid-cols-3">
                    <div class="plan">
                        <span class="mono-label">Tier A</span>
                        <h3>Source licence</h3>
                        <div class="price">$999 <i>one-time</i></div>
                        <p class="text-[0.9375rem] text-ink-2">The code, sold once. No consultation and no support: you read it, you run it.</p>
                        <ul><li>Full source for all services</li><li>One payment, no renewal</li><li>No consultation, no support</li></ul>
                        <button type="button" class="btn btn-ghost mt-auto" data-contact="Source licence">Get the source</button>
                    </div>
                    <div class="plan">
                        <span class="mono-label">Tier B</span>
                        <h3>Subscription</h3>
                        <div class="price">$1,499</div>
                        <p class="text-[0.9375rem] text-ink-2">Everything in Tier A, with a team behind it when something needs answering.</p>
                        <ul><li>Everything in Tier A</li><li>Continuous updates</li><li>Support channel</li></ul>
                        <button type="button" class="btn btn-ghost mt-auto" data-contact="Subscription">Choose the subscription</button>
                    </div>
                    <div class="plan">
                        <span class="mono-label">Tier C</span>
                        <h3>White-label</h3>
                        <p class="text-[0.9375rem] text-ink-2">Your brand on the whole platform, with our support and consultation. The terms are agreed in a conversation, not listed.</p>
                        <ul><li>Everything in Tier A and B</li><li>Support and consultation included</li><li>Price defined together</li></ul>
                        <button type="button" class="btn mt-auto" data-contact="White-label">Talk to us</button>
                    </div>
                </div>
                <p class="max-w-176 text-[0.9375rem] text-ink-2">Prices are in US dollars.</p>
            </div>
        </section>

        <!-- FAQ -->
        <section class="sec" id="faq">
            <div class="sec-label">Questions</div>
            <div class="sec-body">
                <h2 class="h2">Answers for people who have evaluated campaign managers and ad networks before.</h2>
                <div class="border-t border-ink">
                    <details class="faq"><summary>Is Auctionly a hosted service?</summary><p>No. Auctionly is self-hosted software. You deploy it with Docker on your own server, and your campaigns, wallets and events stay on your infrastructure.</p></details>
                    <details class="faq"><summary>Which OpenRTB version does it support?</summary><p>OpenRTB 2.5. Each exchange gets its own /bid/{exchange} endpoint and receives a bid, win notices and tracked clicks.</p></details>
                    <details class="faq"><summary>How fast does the bidder respond?</summary><p>The target is under 100 ms, typically a few milliseconds. The bidder never touches the database on the bid path, and it applies a deadline derived from the exchange's tmax.</p></details>
                    <details class="faq"><summary>Which ad formats can advertisers run?</summary><p>Four: push, pop, domain redirect and deeplink. Through exchanges all four run. Publishers you onboard directly sell pop, domain redirect and deeplink through a tracked link, and push stays on OpenRTB. There are no banners, video or native ads in a page: the platform sells traffic.</p></details>
                    <details class="faq"><summary>Can publishers send traffic without an ad server?</summary><p>Yes. A publisher signs up, adds a website, verifies it and makes a link in the Link generator. It adds its own sub ID, click ID and keyword to the link, and every click is kept with them. There is no ad tag, no OpenRTB and no auction on that path: matching campaigns take turns at their own fixed prices.</p></details>
                    <details class="faq"><summary>What does a publisher put on a link?</summary><p>The Link generator makes the link for an advertiser and a site. The advertiser, bid floor and fallback URL are signed by the platform. The publisher adds a sub ID (its own name for the source), a click ID (its own unique id for the click) and a keyword, as query parameters. They are stored with the click, shown in the publisher's reports, and the click ID goes back to the publisher's tracker in the conversion postback. A Test link shows where a visit would be sent and counts nothing.</p></details>
                    <details class="faq"><summary>How does a deeplink campaign work?</summary><p>The advertiser takes the deeplink made by its affiliate network or tracker and replaces the network's landing-page parameter with {product_url}, for example https://network.example/deeplink?url={product_url}&amp;cid={click_id}. The product page comes with each visit. The platform puts it into the tag, URL-encoded, and redirects to the network, which forwards the visitor. Only product pages on the brand's website are sold, so a publisher cannot send traffic anywhere else, and a visit without a product page is not sold.</p></details>
                    <details class="faq"><summary>How is a conversion reported?</summary><p>When a visitor buys, the advertiser's affiliate network or tracker, or its own site, calls the platform's /conversion postback with the click ID the platform gave it, for example /conversion?click_id=35f1…&amp;event=purchase&amp;value=25&amp;tx=order-1. The conversion is matched to the click inside its window and counted for the campaign and the publisher. It can be held for approval or reversed later, and the publisher's own click ID goes back to its tracker.</p></details>
                    <details class="faq"><summary>How do you verify that a publisher owns a site?</summary><p>The publisher proves it with a meta tag on the home page, a file at the root of the site, or a DNS TXT record. An administrator then approves the site, and only an approved site can make links. Suspending or rejecting a site stops its zones at once.</p></details>
                    <details class="faq"><summary>How are publishers paid?</summary><p>On terms you set per publisher or per zone: a share of what the advertiser spent, or a fixed amount per visit, click or conversion. Earnings are credited once, held for a few days, and paid out on request, with progress from requested to processing to paid.</p></details>
                    <details class="faq"><summary>How do you stop fake traffic from publishers?</summary><p>Bots are not sold. A visitor can be sold only a few times a day through one zone, and addresses and zones have per-minute and per-day ceilings that bound what any zone can cost. The advertiser, bid floor and fallback in a link are signed, OpenRTB is off by default for publisher zones, and earnings are held so bad traffic can be taken back. Zones with odd click rates are flagged for review.</p></details>
                    <details class="faq"><summary>How do advertisers pay?</summary><p>They fund a prepaid wallet by card through Stripe or by bank transfer. Card payments are credited only after Stripe confirms them. Bank transfers are credited when an administrator approves the request.</p></details>
                    <details class="faq"><summary>Can a click be billed twice?</summary><p>No. A visit, click or conversion that is delivered twice is charged once. Events are keyed by their stream id, so a redelivered event overwrites itself instead of billing again.</p></details>
                    <details class="faq"><summary>Can I hold conversions until I have checked them?</summary><p>Yes. Switch it on per campaign and new conversions wait as pending until the advertiser approves or rejects them. An approved conversion can be reversed later, which corrects the wallet and the publisher's earnings with adjustment rows instead of rewriting history.</p></details>
                    <details class="faq"><summary>How is the conversion postback trusted?</summary><p>By default the signed click id is the credential. An advertiser can turn on a secret and sign each postback with HMAC-SHA256, and an unsigned or wrongly signed one is refused. A single click can credit at most five conversions either way.</p></details>
                    <details class="faq"><summary>How do I know something is broken?</summary><p>A monitor checks the event backlog, aggregator lag, lost events, errors and backups. The System page shows each as ok, warn or critical, and a webhook can notify you of a change. The bidder also has a /ready endpoint for load balancers.</p></details>
                    <details class="faq"><summary>Does it respect user consent signals?</summary><p>The bidder parses TCF v2, GPP and US privacy strings. By default it does not bid on a request that says consent was not given for the purposes you list. You can switch it off or change the purposes in the environment, and you stay responsible for your own legal review.</p></details>
                    <details class="faq"><summary>What happens if Elasticsearch goes down?</summary><p>Reporting falls back to PostgreSQL rollups. The dimensions that only the event log knows are then reported as unavailable, and bidding is not affected because the bidder only uses Redis.</p></details>
                    <details class="faq"><summary>Are campaigns reviewed before they go live?</summary><p>Yes, by default. An advertiser's campaign waits in review until an administrator approves it or sends it back with a note, and the advertiser is emailed either way. Administrators can mark an advertiser as trusted to skip the review, or switch the review off.</p></details>
                    <details class="faq"><summary>Can advertisers and publishers use an API?</summary><p>Yes. The advertiser REST API has ten endpoints for campaigns, status changes, image upload and reports, with personal tokens and the same validation as the web form. Publishers have their own API, authenticated with an X-API-KEY header and rate limited, for links, reports, sites, placements, sub ID lists and postbacks. A token only sees its own owner's data.</p></details>
                    <details class="faq"><summary>Do push notification images need a CDN?</summary><p>Not at first. By default the web app serves uploaded icons and images. When traffic grows, serve them from a separate media domain, cached for a year, and put a CDN in front of it. Uploads always go to the app; the media domain only serves files.</p></details>
                </div>
            </div>
        </section>
    </div>

    <!-- FINAL CTA -->
    <section class="-mx-5 mt-24 bg-ink px-5 py-[4.5rem] text-white">
        <div class="mx-auto grid max-w-[74rem] items-center gap-12 lg:grid-cols-[1.2fr_1fr]">
            <div>
                <h2 class="max-w-[16ch] text-[clamp(2rem,4vw,3.2rem)]">Own your traffic stack.</h2>
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
            <li><button type="button" class="cursor-pointer hover:text-white" data-contact="Live demo">Request a demo</button></li>
            <li><button type="button" class="cursor-pointer hover:text-white" data-contact="Live demo">Contact</button></li>
        </ul>
        <span>Self-hosted software. You deploy it, you own it.</span>
    </div>
</footer>
<!-- CONTACT MODAL -->
<dialog id="contact-dialog" class="contact" aria-labelledby="contact-title">
    <div class="contact-grid">
        <aside class="contact-side">
            <p class="eyebrow text-term-str">Talk to us</p>
            <h2 id="contact-title" class="mt-3 text-[1.6rem] md:mt-4 md:text-[1.9rem] leading-[1.05] font-extrabold tracking-[-0.03em] text-white">Let's talk about your campaign manager.</h2>
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
