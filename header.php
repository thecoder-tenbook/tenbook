<?php
// header.php — єдиний хедер для всіх сторінок
// Використання: <?php include 'header.php'; ?>
// Опційно перед include задати: $active_page = 'catalog'; (landing/catalog/leaders/cabinet)
if (!isset($active_page)) $active_page = '';
?>
<style>
/* ── HEADER ── */
header {
    position: fixed;
    top: 0;
    width: 100%;
    background: rgba(255,255,255,0.98);
    backdrop-filter: blur(10px);
    z-index: 1000;
    border-bottom: 1px solid #f0f0f0;
}
nav {
    max-width: 1400px;
    margin: 0 auto;
    padding: 1rem 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.nav-logo {
    font-size: 1.75rem;
    font-weight: 900;
    letter-spacing: -1px;
    background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-decoration: none;
    cursor: pointer;
}
/* Desktop menu */
.nav-menu {
    display: flex;
    gap: 2rem;
    align-items: center;
}
.nav-item { position: relative; }
.nav-link {
    text-decoration: none;
    color: #4a5568;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 0.3rem;
    cursor: pointer;
    transition: color 0.2s;
    font-size: 0.95rem;
}
.nav-link:hover, .nav-link.active { color: #0ea5e9; }
.dropdown {
    position: absolute;
    top: calc(100% + 0.5rem);
    left: 0;
    background: white;
    border-radius: 12px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.1);
    padding: 0.75rem 0;
    min-width: 200px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-8px);
    transition: all 0.25s;
    z-index: 100;
}
.nav-item:hover .dropdown { opacity: 1; visibility: visible; transform: translateY(0); }
.dropdown a {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.65rem 1.2rem;
    color: #4a5568;
    text-decoration: none;
    font-size: 0.88rem;
    transition: all 0.15s;
}
.dropdown a:hover { background: #f8fafc; color: #0ea5e9; }
.lang-selector { display: flex; gap: 0.3rem; padding: 0.4rem; background: #f8fafc; border-radius: 8px; }
.lang-btn { padding: 0.35rem 0.7rem; border: none; background: transparent; cursor: pointer; border-radius: 6px; font-weight: 500; font-size: 0.82rem; transition: all 0.2s; color: #64748b; }
.lang-btn.active { background: white; color: #0ea5e9; box-shadow: 0 2px 8px rgba(0,0,0,0.06); }
.nav-account-btn {
    width: 36px; height: 36px; border-radius: 50%;
    border: 1.5px solid #e2e8f0; background: white;
    display: flex; align-items: center; justify-content: center;
    cursor: pointer; color: #64748b; transition: all 0.2s; flex-shrink: 0; overflow: hidden;
}
.nav-account-btn:hover { border-color: #0ea5e9; color: #0ea5e9; }
.nav-cta-btn {
    background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
    color: white; padding: 0.65rem 1.4rem; border-radius: 8px;
    text-decoration: none; font-weight: 600; font-size: 0.92rem;
    transition: all 0.3s; border: none; cursor: pointer; white-space: nowrap;
}
.nav-cta-btn:hover { transform: translateY(-1px); box-shadow: 0 8px 24px rgba(14,165,233,0.3); }

/* Mobile controls */
.nav-mobile-controls {
    display: none;
    align-items: center;
    gap: 0.75rem;
}
.burger-btn {
    width: 36px; height: 36px; border-radius: 8px;
    border: 1.5px solid #e2e8f0; background: white;
    display: flex; flex-direction: column; align-items: center; justify-content: center;
    gap: 5px; cursor: pointer; transition: all 0.2s;
}
.burger-btn:hover { border-color: #0ea5e9; }
.burger-btn span {
    display: block; width: 18px; height: 2px;
    background: #4a5568; border-radius: 2px;
    transition: all 0.3s;
}
.burger-btn.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
.burger-btn.open span:nth-child(2) { opacity: 0; }
.burger-btn.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

/* Mobile drawer */
.nav-drawer {
    position: fixed;
    top: 61px; left: 0; right: 0; bottom: 0;
    background: rgba(0,0,0,0.4);
    z-index: 999;
    opacity: 0; visibility: hidden;
    transition: all 0.25s;
}
.nav-drawer.open { opacity: 1; visibility: visible; }
.nav-drawer-inner {
    position: absolute;
    top: 0; right: 0;
    width: 280px; height: 100%;
    background: white;
    padding: 1.5rem;
    transform: translateX(100%);
    transition: transform 0.3s cubic-bezier(0.4,0,0.2,1);
    overflow-y: auto;
}
.nav-drawer.open .nav-drawer-inner { transform: translateX(0); }
.drawer-link {
    display: flex; align-items: center; gap: 0.75rem;
    padding: 0.85rem 0.5rem;
    color: #1e293b; text-decoration: none; font-weight: 500; font-size: 1rem;
    border-bottom: 1px solid #f1f5f9;
    transition: color 0.2s;
}
.drawer-link:hover { color: #0ea5e9; }
.drawer-link svg { flex-shrink: 0; }
.drawer-divider { height: 1px; background: #f1f5f9; margin: 0.75rem 0; }
.drawer-lang { display: flex; gap: 0.5rem; margin-top: 1rem; }
.drawer-lang button { flex: 1; padding: 0.6rem; border: 1.5px solid #e2e8f0; border-radius: 8px; background: white; cursor: pointer; font-weight: 600; font-size: 0.85rem; transition: all 0.2s; }
.drawer-lang button.active { border-color: #0ea5e9; color: #0ea5e9; background: #f0f9ff; }
.drawer-cta {
    display: block; margin-top: 1.2rem;
    padding: 0.85rem; text-align: center;
    background: linear-gradient(135deg, #0ea5e9, #8b5cf6);
    color: white; border-radius: 12px; font-weight: 700; text-decoration: none;
}

/* ── RESPONSIVE ── */
@media (max-width: 900px) {
    .nav-menu { display: none; }
    .nav-mobile-controls { display: flex; }
}
@media (max-width: 600px) {
    nav { padding: 0.85rem 1.2rem; }
    .nav-logo { font-size: 1.5rem; }
}
</style>

<header>
    <nav>
        <a href="index" class="nav-logo">TENBOOK</a>

        <!-- Desktop menu -->
        <div class="nav-menu">
            <div class="nav-item">
                <a href="catalog_page" class="nav-link <?= $active_page==='catalog' ? 'active' : '' ?>">Каталог ▾</a>
                <div class="dropdown">
                    <a href="catalog_page?category=business"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><path d="M2 12h20"/></svg>Бізнес</a>
                    <a href="catalog_page?category=psychology"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#8b5cf6" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="7" r="4"/><path d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"/></svg>Психологія</a>
                    <a href="catalog_page?category=self-dev"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>Саморозвиток</a>
                    <a href="catalog_page?category=finance"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#f59e0b" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v2m0 8v2M9.5 9.5A2.5 2.5 0 0 1 12 8h.5a2.5 2.5 0 0 1 0 5h-1a2.5 2.5 0 0 0 0 5H12a2.5 2.5 0 0 0 2.5-1.5"/></svg>Фінанси</a>
                    <a href="catalog_page?category=history"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>Історія</a>
                    <a href="catalog_page?category=biography"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#6366f1" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>Біографії</a>
                </div>
            </div>
            <a href="leaders_page" class="nav-link <?= $active_page==='leaders' ? 'active' : '' ?>">Лідери</a>
            <a href="index#features" class="nav-link">Можливості</a>
            <a href="index#pricing" class="nav-link">Ціни</a>
            <div class="lang-selector">
                <button class="lang-btn active" onclick="setLang('ua',this)">UA</button>
                <button class="lang-btn" onclick="setLang('en',this)">EN</button>
                <button class="lang-btn" onclick="setLang('pl',this)">PL</button>
            </div>
            <button class="nav-account-btn" id="navAccountBtn" title="Особистий кабінет">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            </button>
            <a href="index#pricing" class="nav-cta-btn">Спробувати</a>
        </div>

        <!-- Mobile controls -->
        <div class="nav-mobile-controls">
            <button class="nav-account-btn" id="navAccountBtnMobile" title="Особистий кабінет">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            </button>
            <button class="burger-btn" id="burgerBtn" onclick="toggleDrawer()">
                <span></span><span></span><span></span>
            </button>
        </div>
    </nav>
</header>

<!-- Mobile drawer -->
<div class="nav-drawer" id="navDrawer" onclick="closeDrawerOnOverlay(event)">
    <div class="nav-drawer-inner">
        <a href="catalog_page" class="drawer-link">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
            Каталог книг
        </a>
        <a href="leaders_page" class="drawer-link">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#8b5cf6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            Лідери думок
        </a>
        <a href="index#features" class="drawer-link">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
            Можливості
        </a>
        <a href="index#pricing" class="drawer-link">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v2m0 8v2M9.5 9.5A2.5 2.5 0 0 1 12 8h.5a2.5 2.5 0 0 1 0 5h-1a2.5 2.5 0 0 0 0 5H12a2.5 2.5 0 0 0 2.5-1.5"/></svg>
            Ціни
        </a>
        <div class="drawer-divider"></div>
        <div class="drawer-lang">
            <button class="active" onclick="setLang('ua',this)">UA</button>
            <button onclick="setLang('en',this)">EN</button>
            <button onclick="setLang('pl',this)">PL</button>
        </div>
        <a href="index#pricing" class="drawer-cta">Спробувати безкоштовно</a>
    </div>
</div>

<script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-app-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-auth-compat.js"></script>
<script>
(function() {
    if (!firebase.apps.length) {
        firebase.initializeApp({
            apiKey: "AIzaSyBITou6TONUHIR1IPcc2yXmUCrSiA7KoJA",
            authDomain: "tenbook-bd3eb.firebaseapp.com",
            projectId: "tenbook-bd3eb",
            storageBucket: "tenbook-bd3eb.firebasestorage.app",
            messagingSenderId: "619158652539",
            appId: "1:619158652539:web:4619616a2fa66d1a1204de"
        });
    }

    firebase.auth().onAuthStateChanged(function(user) {
        window._fbUser = user;
        var btns = [
            document.getElementById('navAccountBtn'),
            document.getElementById('navAccountBtnMobile')
        ];
        btns.forEach(function(btn) {
            if (!btn) return;
            if (user) {
                btn.innerHTML = user.photoURL
                    ? '<img src="' + user.photoURL + '" style="width:100%;height:100%;object-fit:cover;border-radius:50%;">'
                    : '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>';
                btn.onclick = function() { window.location.href = 'cabinet'; };
            } else {
                btn.innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>';
                btn.onclick = function() { window.location.href = 'cabinet'; };
            }
        });
    });

    window.toggleDrawer = function() {
        var drawer = document.getElementById('navDrawer');
        var burger = document.getElementById('burgerBtn');
        drawer.classList.toggle('open');
        burger.classList.toggle('open');
        document.body.style.overflow = drawer.classList.contains('open') ? 'hidden' : '';
    };

    window.closeDrawerOnOverlay = function(e) {
        if (e.target === document.getElementById('navDrawer')) {
            window.toggleDrawer();
        }
    };

    window.setLang = function(lang, btn) {
        document.querySelectorAll('.lang-btn, .drawer-lang button').forEach(function(b) {
            b.classList.remove('active');
        });
        document.querySelectorAll('.lang-btn').forEach(function(b) {
            if (b.textContent.toLowerCase() === lang) b.classList.add('active');
        });
        document.querySelectorAll('.drawer-lang button').forEach(function(b) {
            if (b.textContent.toLowerCase() === lang) b.classList.add('active');
        });
    };
})();
</script>
