<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>All News | TechNews</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@500;700;800&family=Public+Sans:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    :root{--bg:#fff;--surface:#f5f7fb;--ink:#131a2b;--muted:#5b6479;--line:#e3e7ef;--accent:#2347ff;--head:"Bricolage Grotesque","Segoe UI",system-ui,sans-serif;--body:"Public Sans","Segoe UI",system-ui,sans-serif}
    *{box-sizing:border-box}html{scroll-behavior:smooth}body{margin:0;background:var(--bg);color:var(--ink);font:400 16px/1.65 var(--body)}a{color:inherit;text-decoration:none}.wrap{max-width:1080px;margin:auto;padding:0 24px}
    header{position:sticky;top:0;z-index:5;background:var(--bg);border-bottom:1px solid var(--line)}.bar{height:68px;display:flex;align-items:center;justify-content:space-between;gap:20px}.logo{font:800 23px var(--head);letter-spacing:-.03em}.logo span{color:var(--accent)}nav{display:flex;align-items:center;gap:26px;color:var(--muted);font-size:14px}nav a:hover,nav a.active{color:var(--accent)}
    h1,h2,h3{font-family:var(--head);line-height:1.15;letter-spacing:-.02em;margin:0}.intro{padding:64px 0 34px}.eyebrow{color:var(--accent);font-weight:600;font-size:13px;text-transform:uppercase;letter-spacing:.08em}.intro h1{font-size:clamp(38px,6vw,58px);margin:10px 0}.intro p{max-width:650px;color:var(--muted);margin:0}
    .toolbar{display:flex;justify-content:space-between;align-items:center;gap:16px;flex-wrap:wrap;margin:20px 0 28px}.filters{display:flex;gap:8px;flex-wrap:wrap}.chip{border:1px solid var(--line);background:#fff;color:var(--muted);border-radius:999px;padding:8px 15px;font:500 14px var(--body);cursor:pointer}.chip[aria-pressed="true"]{background:var(--ink);border-color:var(--ink);color:#fff}.search{padding:10px 13px;border:1px solid var(--line);border-radius:9px;font:inherit;min-width:min(260px,100%)}
    .grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:24px 20px;padding-bottom:72px}.card{border:1px solid var(--line);border-radius:14px;overflow:hidden;display:flex;flex-direction:column;background:#fff}.card img{width:100%;height:175px;object-fit:cover;background:var(--surface)}.content{padding:18px;display:flex;flex-direction:column;gap:9px;flex:1}.tag{font-size:12px;font-weight:700;color:var(--accent);text-transform:uppercase;letter-spacing:.05em}.card h2{font-size:20px}.date{font-size:13px;color:var(--muted)}.content p{margin:0;color:var(--muted);font-size:14px}.read{margin-top:auto;padding-top:8px;color:var(--accent);font-size:14px;font-weight:600}.empty{grid-column:1/-1;color:var(--muted)}
    footer{border-top:1px solid var(--line);padding:28px 0;color:var(--muted);font-size:14px}footer .wrap{display:flex;justify-content:space-between;gap:16px;flex-wrap:wrap}
    @media(max-width:800px){.grid{grid-template-columns:repeat(2,minmax(0,1fr))}nav{gap:14px}}@media(max-width:560px){.grid{grid-template-columns:1fr}.bar{height:auto;min-height:68px;flex-wrap:wrap;padding:12px 0}nav{width:100%;justify-content:space-between}.intro{padding-top:42px}}
  </style>
</head>
<body>
<x-header></x-header>
<main class="wrap">
  <section class="intro"><span class="eyebrow">Stay informed</span><h1>All the latest tech news.</h1><p>Browse our latest stories about artificial intelligence, the web, cybersecurity, and gadgets. Clear summaries help you catch up quickly.</p></section>
  <div class="toolbar"><div class="filters" id="filters" role="group" aria-label="Filter news by category"></div><input class="search" id="search" type="search" placeholder="Search news..." aria-label="Search news"></div>
  <section class="grid" id="newsGrid" aria-live="polite"></section>
</main>
<x-footer></x-footer>
<script>
const posts = [
 {category:'AI',title:'Open-source AI models are catching up fast',date:'October 28, 2026',description:'Free and open models are becoming more capable, giving students, developers, and small teams more ways to use AI.',image:'https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=900&q=80'},
 {category:'Web',title:'Browsers get smarter about online tracking',date:'October 26, 2026',description:'New privacy controls make it easier for people to understand and limit how websites track their activity.',image:'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=900&q=80'},
 {category:'Security',title:'Why a password manager is worth using',date:'October 24, 2026',description:'A password manager helps create and store unique passwords, reducing the risks of reusing the same password.',image:'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&w=900&q=80'},
 {category:'Gadgets',title:'What to look for when choosing a laptop',date:'October 21, 2026',description:'Battery life, memory, screen quality, and a comfortable keyboard are important features to compare before buying.',image:'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=900&q=80'},
 {category:'AI',title:'How students can use AI and keep learning',date:'October 18, 2026',description:'Use AI to explore ideas and get feedback, but practise solving problems yourself to build lasting skills.',image:'https://images.unsplash.com/photo-1535378620166-273708d44e4c?auto=format&fit=crop&w=900&q=80'},
 {category:'Web',title:'Small changes can make websites load faster',date:'October 15, 2026',description:'Optimized images, fewer scripts, and efficient fonts can improve loading speed and make a website easier to use.',image:'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=900&q=80'}
];
const categories=['All','AI','Web','Security','Gadgets'];let active='All';
const filters=document.getElementById('filters'),grid=document.getElementById('newsGrid'),search=document.getElementById('search');
categories.forEach((category,index)=>{const button=document.createElement('button');button.className='chip';button.textContent=category;button.setAttribute('aria-pressed',index===0?'true':'false');button.addEventListener('click',()=>{active=category;filters.querySelectorAll('button').forEach(b=>b.setAttribute('aria-pressed',b===button?'true':'false'));render();});filters.appendChild(button);});
function render(){const term=search.value.trim().toLowerCase();const shown=posts.filter(post=>(active==='All'||post.category===active)&&(`${post.title} ${post.description} ${post.category}`).toLowerCase().includes(term));grid.innerHTML='';if(!shown.length){grid.innerHTML='<p class="empty">No news articles match your search.</p>';return;}shown.forEach(post=>{const article=document.createElement('article');article.className='card';const img=document.createElement('img');img.src=post.image;img.alt='';img.loading='lazy';img.onerror=()=>{img.style.display='none';};const content=document.createElement('div');content.className='content';content.innerHTML=`<span class="tag">${post.category}</span><h2>${post.title}</h2><span class="date">${post.date}</span><p>${post.description}</p><span class="read">News summary</span>`;article.append(img,content);grid.appendChild(article);});}
search.addEventListener('input',render);render();
</script>
</body>
</html>