<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us | TechNews</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@500;700;800&family=Public+Sans:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    :root{--bg:#fff;--surface:#f5f7fb;--ink:#131a2b;--muted:#5b6479;--line:#e3e7ef;--accent:#2347ff;--ok:#0a7a4b;--err:#c23a3a;--head:"Bricolage Grotesque","Segoe UI",system-ui,sans-serif;--body:"Public Sans","Segoe UI",system-ui,sans-serif}
    *{box-sizing:border-box}html{scroll-behavior:smooth}body{margin:0;background:var(--bg);color:var(--ink);font:400 16px/1.65 var(--body)}a{color:inherit;text-decoration:none}.wrap{max-width:1080px;margin:auto;padding:0 24px}
    header{position:sticky;top:0;z-index:5;background:#fff;border-bottom:1px solid var(--line)}.bar{height:68px;display:flex;align-items:center;justify-content:space-between;gap:20px}.logo{font:800 23px var(--head);letter-spacing:-.03em}.logo span{color:var(--accent)}nav{display:flex;gap:26px;color:var(--muted);font-size:14px}nav a:hover,nav a.active{color:var(--accent)}
    h1,h2,h3{font-family:var(--head);line-height:1.15;letter-spacing:-.02em;margin:0}
    main{padding:64px 0 80px}.intro{max-width:650px;margin-bottom:36px}.intro h1{font-size:clamp(38px,6vw,56px);margin:0 0 14px}.intro p{color:var(--muted);margin:0}
    .layout{display:grid;grid-template-columns:.8fr 1.2fr;gap:32px;align-items:start}
    .info{display:grid;gap:16px}.info div{border:1px solid var(--line);border-radius:14px;padding:20px}.info h3{font-size:18px;margin-bottom:4px}.info p{margin:0;color:var(--muted);font-size:15px}.info a{color:var(--accent);font-weight:600}
    .panel{background:var(--surface);border:1px solid var(--line);border-radius:16px;padding:28px}.panel h2{font-size:23px;margin-bottom:8px}.hint{color:var(--muted);font-size:14px;margin:0 0 22px}
    .form-grid{display:grid;grid-template-columns:1fr 1fr;gap:17px}.field{display:flex;flex-direction:column;gap:7px}.field.full{grid-column:1/-1}label{font-size:14px;font-weight:600}.required{color:var(--err)}
    input,select,textarea{width:100%;border:1px solid #d6dce8;border-radius:9px;padding:12px 13px;background:#fff;color:var(--ink);font:400 15px var(--body)}textarea{min-height:150px;resize:vertical}
    input:focus,select:focus,textarea:focus{outline:3px solid #2347ff26;border-color:var(--accent)}
    .btn{border:0;border-radius:10px;background:var(--accent);color:#fff;padding:13px 20px;font:600 15px var(--body);cursor:pointer}.btn:hover{filter:brightness(1.08)}
    .actions{margin-top:20px;display:flex;align-items:center;gap:15px;flex-wrap:wrap}.status{font-size:14px;margin:0;color:var(--muted)}.status.ok{color:var(--ok)}.status.err{color:var(--err)}
    footer{border-top:1px solid var(--line);padding:28px 0;color:var(--muted);font-size:14px}footer .wrap{display:flex;justify-content:space-between;gap:16px;flex-wrap:wrap}
    @media(max-width:860px){.layout{grid-template-columns:1fr}}
    @media(max-width:600px){.bar{height:auto;min-height:68px;flex-wrap:wrap;padding:12px 0}nav{width:100%;justify-content:space-between}.form-grid{grid-template-columns:1fr}.field.full{grid-column:auto}.panel{padding:20px}main{padding-top:42px}}
  </style>
  @stack('styles')
</head>
<body>
<x-header></x-header>
<main class="wrap">
  <section class="intro">
    <h1>Contact us</h1>
    <p>Have a question, a story tip, or a partnership idea? Send us a message and we will reply within two working days.</p>
  </section>

  <div class="layout">
    <aside class="info" aria-label="Contact details">
      <div><h3>General questions</h3><p><a href="mailto:hello@technews.example">hello@technews.example</a></p></div>
      <div><h3>Story tips</h3><p><a href="mailto:tips@technews.example">tips@technews.example</a></p></div>
      <div><h3>Found a problem?</h3><p>Use the <a href="{{ url('/report') }}">report form</a> so we can fix it faster.</p></div>
    </aside>

    <section class="panel" aria-labelledby="form-title">
      <h2 id="form-title">Send us a message</h2>
      <p class="hint">Fields marked with <span class="required">*</span> are required.</p>
      <form id="contactForm" novalidate>
        <div class="form-grid">
          <div class="field"><label for="name">Name <span class="required">*</span></label><input id="name" name="name" type="text" autocomplete="name" required></div>
          <div class="field"><label for="email">Email <span class="required">*</span></label><input id="email" name="email" type="email" autocomplete="email" placeholder="you@example.com" required></div>
          <div class="field full"><label for="topic">Topic</label>
            <select id="topic" name="topic"><option>General question</option><option>Story tip</option><option>Partnership</option><option>Other</option></select></div>
          <div class="field full"><label for="message">Message <span class="required">*</span></label><textarea id="message" name="message" required></textarea></div>
        </div>
        <div class="actions"><button class="btn" type="submit">Send message</button><p class="status" id="status" role="status" aria-live="polite"></p></div>
      </form>
    </section>
  </div>
</main>
<x-footer></x-footer>
<script>
document.getElementById('contactForm').addEventListener('submit', function (e) {
  e.preventDefault();
  var f = e.currentTarget, s = document.getElementById('status');
  if (!f.reportValidity()) { s.className = 'status err'; s.textContent = 'Please fill in all required fields.'; return; }
  // Connect to your Laravel route here, e.g. fetch('/contact', {method:'POST', body:new FormData(f)})
  s.className = 'status ok';
  s.textContent = 'Thank you! Your message has been sent.';
  f.reset();
});
</script>
</body>
</html>