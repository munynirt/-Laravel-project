<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>About – TechNews</title>
    <meta name="description"
        content="TechNews gathers tech stories from trusted sources and turns each one into a short, clear summary.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@500;700;800&family=Public+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --bg: #ffffff;
            --surface: #f5f7fb;
            --ink: #131a2b;
            --muted: #5b6479;
            --line: #e3e7ef;
            --accent: #2347ff;
            --accent-ink: #ffffff;
            --ok: #0a7a4b;
            color-scheme: light;
            --head: "Bricolage Grotesque", "Segoe UI", system-ui, sans-serif;
            --body: "Public Sans", "Segoe UI", system-ui, sans-serif;
            box-sizing: border-box;
            padding-top: env(safe-area-inset-top, 0px);
            padding-bottom: env(safe-area-inset-bottom, 0px);
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--ink);
            font: 400 17px/1.65 var(--body)
        }

        a {
            color: inherit;
            text-decoration: none
        }

        :focus-visible {
            outline: 3px solid var(--accent);
            outline-offset: 3px;
            border-radius: 6px
        }

        .wrap {
            max-width: 1080px;
            margin: 0 auto;
            padding: 0 24px
        }

        h1,
        h2,
        h3 {
            font-family: var(--head);
            line-height: 1.1;
            margin: 0;
            letter-spacing: -.02em
        }

        /* Header (same as landing) */
        header {
            position: sticky;
            top: env(safe-area-inset-top, 0px);
            z-index: 5;
            background: var(--bg);
            border-bottom: 1px solid var(--line)
        }

        .bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 64px
        }

        .logo {
            font: 800 22px var(--head);
            letter-spacing: -.03em
        }

        .logo span {
            color: var(--accent)
        }

        nav {
            display: flex;
            align-items: center;
            gap: 28px;
            font-size: 15px;
            color: var(--muted)
        }

        nav a:hover,
        nav a[aria-current="page"] {
            color: var(--ink)
        }

        .btn {
            display: inline-block;
            border: 0;
            cursor: pointer;
            font: 600 15px var(--body);
            padding: 12px 20px;
            border-radius: 10px;
            background: var(--accent);
            color: var(--accent-ink)
        }

        .btn:hover {
            filter: brightness(1.08)
        }

        nav .btn {
            padding: 9px 16px;
            color: var(--accent-ink)
        }

        .sub {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            max-width: 460px
        }

        .sub input {
            flex: 1 1 220px;
            min-width: 0;
            font: 400 16px var(--body);
            padding: 12px 14px;
            border: 1px solid var(--line);
            border-radius: 10px;
            background: var(--bg);
            color: var(--ink)
        }

        .note {
            font-size: 14px;
            color: var(--muted);
            margin: 10px 0 0;
            min-height: 1.6em
        }

        .note.ok {
            color: var(--ok)
        }

        .note.err {
            color: #c23a3a
        }

        /* Hero */
        .hero {
            padding: 88px 0 72px;
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 56px;
            align-items: center
        }

        .hero h1 {
            font-size: clamp(40px, 6vw, 64px);
            font-weight: 800
        }

        .hero p.lead {
            font-size: 19px;
            color: var(--muted);
            max-width: 30em;
            margin: 22px 0 0
        }

        /* Story squeeze: the one memorable element */
        .squeeze {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 24px
        }

        .squeeze .label {
            font-size: 14px;
            font-weight: 600;
            color: var(--muted);
            margin: 0 0 10px
        }

        .long {
            display: grid;
            gap: 7px;
            margin-bottom: 22px
        }

        .long i {
            display: block;
            height: 8px;
            border-radius: 4px;
            background: #d3d9e6
        }

        .long i:nth-child(3n) {
            width: 82%
        }

        .long i:nth-child(4n) {
            width: 64%
        }

        .long i:last-child {
            width: 40%
        }

        .arrow {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--accent);
            font: 700 15px var(--head);
            margin: 0 0 18px
        }

        .arrow::before,
        .arrow::after {
            content: "";
            flex: 1;
            height: 1px;
            background: var(--line)
        }

        .short {
            background: var(--bg);
            border: 1px solid var(--accent);
            border-radius: 12px;
            padding: 16px 18px
        }

        .short b {
            display: block;
            font: 700 18px/1.3 var(--head);
            margin-bottom: 4px
        }

        .short span {
            font-size: 15px;
            color: var(--muted)
        }

        /* Sections */
        section {
            padding: 72px 0
        }

        .sec-h {
            font-size: clamp(28px, 4vw, 40px);
            font-weight: 700;
            margin-bottom: 12px
        }

        .sec-p {
            color: var(--muted);
            max-width: 34em;
            margin: 0 0 40px
        }

        /* Mission */
        .mission {
            padding-top: 24px
        }

        .mission blockquote {
            margin: 0;
            max-width: 24em;
            font: 700 clamp(26px, 3.6vw, 38px)/1.2 var(--head);
            letter-spacing: -.02em
        }

        .mission p {
            color: var(--muted);
            max-width: 36em;
            margin: 20px 0 0
        }

        /* How it works: a real sequence, so numbered */
        .how {
            background: var(--surface);
            border-block: 1px solid var(--line)
        }

        .steps {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
            counter-reset: s
        }

        .steps li {
            counter-increment: s;
            background: var(--bg);
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 22px
        }

        .steps li::before {
            content: counter(s);
            display: grid;
            place-items: center;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: var(--accent);
            color: var(--accent-ink);
            font: 700 15px var(--head);
            margin-bottom: 14px
        }

        .steps h3 {
            font-size: 20px;
            margin-bottom: 6px
        }

        .steps p {
            margin: 0;
            font-size: 15px;
            color: var(--muted)
        }

        /* Principles */
        .cols {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px
        }

        .cols h3 {
            font-size: 21px;
            margin-bottom: 8px
        }

        .cols p {
            margin: 0;
            color: var(--muted);
            font-size: 16px
        }

        /* FAQ */
        .faq {
            border-top: 1px solid var(--line)
        }

        .faq details {
            border-bottom: 1px solid var(--line);
            padding: 18px 0
        }

        .faq summary {
            cursor: pointer;
            font: 700 19px/1.3 var(--head);
            list-style: none;
            display: flex;
            justify-content: space-between;
            gap: 16px
        }

        .faq summary::-webkit-details-marker {
            display: none
        }

        .faq summary::after {
            content: "+";
            color: var(--accent);
            font-size: 24px;
            line-height: 1
        }

        .faq details[open] summary::after {
            content: "–"
        }

        .faq details p {
            margin: 10px 0 0;
            color: var(--muted);
            max-width: 40em
        }

        /* CTA */
        .cta {
            text-align: center
        }

        .cta h2 {
            font: 800 clamp(30px, 4.5vw, 46px) var(--head);
            max-width: 15em;
            margin: 0 auto 16px
        }

        .cta p {
            color: var(--muted);
            margin: 0 auto 28px;
            max-width: 30em
        }

        .cta .sub {
            margin: 0 auto;
            justify-content: center
        }

        .cta p.note {
            margin: 10px auto 0
        }

        footer {
            border-top: 1px solid var(--line);
            padding: 32px 0;
            font-size: 14px;
            color: var(--muted)
        }

        footer .wrap {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            flex-wrap: wrap
        }

        footer nav {
            gap: 20px;
            font-size: 14px
        }

        @media (max-width:860px) {
            .hero {
                grid-template-columns: 1fr;
                padding-top: 56px
            }

            .steps {
                grid-template-columns: 1fr 1fr
            }

            .cols {
                grid-template-columns: 1fr
            }

            nav a:not(.btn) {
                display: none
            }
        }

        @media (max-width:520px) {
            .steps {
                grid-template-columns: 1fr
            }
        }

        @media (prefers-reduced-motion:no-preference) {

            .hero h1,
            .hero .lead,
            .squeeze {
                animation: rise .6s ease both
            }

            .hero .lead {
                animation-delay: .08s
            }

            .squeeze {
                animation-delay: .16s
            }

            @keyframes rise {
                from {
                    opacity: 0;
                    transform: translateY(12px)
                }

                to {
                    opacity: 1;
                    transform: none
                }
            }
        }
    </style>
</head>

<body>
    <x-header></x-header>

    <main>
        <div class="wrap hero">
            <div>
                <h1>We read a lot of tech news so you don’t have to.</h1>
                <p class="lead">TechNews collects stories from trusted sources every day and turns each one into a
                    short, clear summary. You get the point in a minute and decide for yourself what deserves more of
                    your time.</p>
            </div>
            <div class="squeeze" aria-label="Example of how we shorten a story">
                <p class="label">What goes in</p>
                <div class="long" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
                </div>
                <p class="arrow">We cut it down</p>
                <div class="short"><b>Browsers add built-in tracking protection</b><span>The main browsers now block
                        common trackers by default. You don’t need to install anything.</span></div>
            </div>
        </div>

        <section class="wrap mission">
            <blockquote>Technology moves fast. Keeping up with it shouldn’t take your whole morning.</blockquote>
            <p>Most tech sites are written for people who already follow every release. We write for everyone else:
                students, busy developers, and curious readers who want to understand what happened and why it matters,
                without the jargon.</p>
        </section>

        <section class="how">
            <div class="wrap">
                <h2 class="sec-h">How a story reaches you</h2>
                <p class="sec-p">Every story on the site goes through the same four steps.</p>
                <ol class="steps">
                    <li>
                        <h3>Collect</h3>
                        <p>New articles arrive from trusted feeds throughout the day.</p>
                    </li>
                    <li>
                        <h3>Cut</h3>
                        <p>We remove repeats, hype, and anything that is not news.</p>
                    </li>
                    <li>
                        <h3>Summarise</h3>
                        <p>Each story becomes a few plain lines with a link to the original.</p>
                    </li>
                    <li>
                        <h3>Send</h3>
                        <p>The best stories land on the site and in your inbox each morning.</p>
                    </li>
                </ol>
            </div>
        </section>

        <section class="wrap">
            <h2 class="sec-h">What we stand for</h2>
            <p class="sec-p">Three rules that decide what we publish and how we write it.</p>
            <div class="cols">
                <div>
                    <h3>Clear over clever</h3>
                    <p>Short sentences and everyday words. If a term needs explaining, we explain it.</p>
                </div>
                <div>
                    <h3>Credit the source</h3>
                    <p>Every summary links to the original article so you can read the full story and check our work.
                    </p>
                </div>
                <div>
                    <h3>Respect your time</h3>
                    <p>One email a day, no tracking tricks, and an unsubscribe link that always works.</p>
                </div>
            </div>
        </section>

        <section class="wrap" id="faq" style="padding-top:0">
            <h2 class="sec-h">Questions readers ask</h2>
            <div class="faq" style="margin-top:28px">
                <details>
                    <summary>Is TechNews free?</summary>
                    <p>Yes. Reading the site and receiving the daily email are both free.</p>
                </details>
                <details>
                    <summary>Where do the stories come from?</summary>
                    <p>From trusted publishers and official announcements. We always link back to the original so you
                        can read more.</p>
                </details>
                <details>
                    <summary>How often is the site updated?</summary>
                    <p>Throughout the day. The daily email gathers the most important stories into one message.</p>
                </details>
                <details>
                    <summary>How do I unsubscribe?</summary>
                    <p>Use the link at the bottom of any email. It takes one click.</p>
                </details>
            </div>
        </section>

        <section id="subscribe" class="cta wrap" style="border-top:1px solid var(--line)">
            <h2>Start your morning with one email</h2>
            <p>Join readers who catch up on technology before their first coffee.</p>
            <form class="sub" data-sub novalidate>
                <input type="email" name="email" placeholder="you@example.com" aria-label="Email address" required>
                <button class="btn" type="submit">Subscribe</button>
            </form>
            <p class="note" data-note aria-live="polite">Free. One email a day. Unsubscribe anytime.</p>
        </section>
    </main>

    <footer>
        <div class="wrap">
            <span>© <span id="yr">2026</span> TechNews. All rights reserved.</span>
            <nav aria-label="Footer"><a href="{{ url('/') }}#latest">Latest</a><a
                    href="{{ url('/about') }}">About</a><a href="#subscribe">Subscribe</a></nav>
        </div>
    </footer>

    <script>
        // Subscribe form: simple email check (connect to your mail service or a Laravel route later)
        document.querySelectorAll("[data-sub]").forEach(function(f) {
            f.addEventListener("submit", function(e) {
                e.preventDefault();
                var note = f.parentNode.querySelector("[data-note]"),
                    v = f.email.value.trim();
                if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v)) {
                    note.className = "note err";
                    note.textContent = "Enter a valid email address, like you@example.com.";
                    return;
                }
                note.className = "note ok";
                note.textContent = "You’re subscribed. Check your inbox tomorrow morning.";
                f.reset();
            });
        });
        document.getElementById("yr").textContent = new Date().getFullYear();
    </script>
</body>

</html>
