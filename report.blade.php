<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Report a problem – TechNews</title>
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
            --err: #c23a3a;
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

        nav a:hover {
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
            padding: 9px 16px
        }

        /* Page layout: same two-column rhythm as the landing hero */
        .report {
            padding: 88px 0 72px;
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 56px;
            align-items: start
        }

        .report h1 {
            font-size: clamp(40px, 6vw, 68px);
            font-weight: 800
        }

        .report p.lead {
            font-size: 19px;
            color: var(--muted);
            max-width: 30em;
            margin: 22px 0 32px
        }

        /* Form */
        .form {
            display: grid;
            gap: 18px;
            max-width: 560px
        }

        .row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px
        }

        .field {
            display: grid;
            gap: 6px
        }

        label {
            font-weight: 600;
            font-size: 15px
        }

        input,
        textarea {
            width: 100%;
            font: 400 16px var(--body);
            padding: 12px 14px;
            border: 1px solid var(--line);
            border-radius: 10px;
            background: var(--bg);
            color: var(--ink)
        }

        textarea {
            min-height: 160px;
            resize: vertical
        }

        input[aria-invalid="true"],
        textarea[aria-invalid="true"] {
            border-color: var(--err)
        }

        .err-msg {
            font-size: 14px;
            color: var(--err);
            margin: 0
        }

        .alert {
            margin: 0 0 24px;
            padding: 14px 16px;
            border-radius: 10px;
            font-size: 15px;
            max-width: 560px
        }

        .alert.ok {
            background: #e6f5ee;
            color: var(--ok)
        }

        .note {
            font-size: 14px;
            color: var(--muted);
            margin: 0
        }

        /* Side card (same look as "Top stories today") */
        .today {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 8px 24px
        }

        .today h2 {
            font-size: 15px;
            font-weight: 700;
            color: var(--muted);
            padding: 16px 0 4px;
            letter-spacing: 0
        }

        .today div {
            padding: 16px 0;
            border-top: 1px solid var(--line)
        }

        .today div:first-of-type {
            border-top: 0
        }

        .today b {
            display: block;
            font: 700 18px/1.3 var(--head)
        }

        .today small {
            color: var(--muted);
            font-size: 14px
        }

        /* Footer (same as landing) */
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
            .report {
                grid-template-columns: 1fr;
                padding-top: 56px
            }

            nav a:not(.btn) {
                display: none
            }
        }

        @media (max-width:560px) {
            .row {
                grid-template-columns: 1fr
            }
        }

        @media (prefers-reduced-motion:no-preference) {

            .report h1,
            .report .lead,
            .report .form {
                animation: rise .6s ease both
            }

            .report .lead {
                animation-delay: .08s
            }

            .report .form {
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
    @stack('styles')
</head>

<body>
    <x-header></x-header>

    <main id="top">
        <div class="wrap report">
            <div>
                <h1>Found a problem? Tell us.</h1>
                <p class="lead">Spotted a mistake in a story, a broken page, or have an idea to make TechNews better?
                    Send us a short message and we will take a look.</p>

                @if (session('success'))
                    <p class="alert ok" role="status">{{ session('success') }}</p>
                @endif

                <form class="form" method="POST" action="{{ route('report.send') }}" novalidate>
                    @csrf
                    <div class="row">
                        <div class="field">
                            <label for="name">Name</label>
                            <input id="name" name="name" type="text" autocomplete="name" value="{{ old('name') }}"
                                @error('name') aria-invalid="true" @enderror required>
                            @error('name')<p class="err-msg">{{ $message }}</p>@enderror
                        </div>
                        <div class="field">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" autocomplete="email" placeholder="you@example.com"
                                value="{{ old('email') }}" @error('email') aria-invalid="true" @enderror required>
                            @error('email')<p class="err-msg">{{ $message }}</p>@enderror
                        </div>
                    </div>

                    <div class="field">
                        <label for="subject">Subject</label>
                        <input id="subject" name="subject" type="text" value="{{ old('subject') }}"
                            @error('subject') aria-invalid="true" @enderror required>
                        @error('subject')<p class="err-msg">{{ $message }}</p>@enderror
                    </div>

                    <div class="field">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" @error('message') aria-invalid="true" @enderror required>{{ old('message') }}</textarea>
                        @error('message')<p class="err-msg">{{ $message }}</p>@enderror
                    </div>

                    <div><button class="btn" type="submit">Send report</button></div>
                    <p class="note">We only use your email to reply to this report.</p>
                </form>
            </div>

            <aside class="today" aria-label="What to include">
                <h2>What to include</h2>
                <div><b>The page or story</b><small>Paste the link or the title so we can find it.</small></div>
                <div><b>What went wrong</b><small>Describe what you saw and what you expected.</small></div>
                <div><b>Your device</b><small>Phone or computer, and the browser you use.</small></div>
            </aside>
        </div>
    </main>

    <x-footer></x-footer>
</body>

</html>