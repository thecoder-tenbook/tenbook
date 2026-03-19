<?php
// header.php — єдиний хедер для всіх сторінок
// Опційно перед include задати: $active_page = 'catalog'; (landing/catalog/leaders/cabinet)
if (!isset($active_page)) $active_page = '';
?>

<header>
    <nav>
        <a href="/" class="nav-logo">TENBOOK</a>

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
                    <a href="catalog_page?category=science"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#06b6d4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v11m0 0H3m6 0h12m0 0V9m0 6v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6m16 0H3"/></svg>Наука</a>
                    <a href="catalog_page?category=biography"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#6366f1" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>Біографії</a>
                    <a href="catalog_page?category=creativity"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#ec4899" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 0 1 10 10c0 5.52-4.48 10-10 10S2 17.52 2 12"/><path d="M12 6v6l4 2"/><circle cx="12" cy="12" r="1" fill="#ec4899"/></svg>Творчість</a>
                </div>
            </div>
            <a href="leaders_page" class="nav-link <?= $active_page==='leaders' ? 'active' : '' ?>">Лідери</a>
            <a href="/#features" class="nav-link">Можливості</a>
            <a href="/#pricing" class="nav-link">Ціни</a>
            <div class="lang-selector">
                <button class="lang-btn active" onclick="setLang('ua',this)">UA</button>
                <button class="lang-btn" onclick="setLang('en',this)">EN</button>
                <button class="lang-btn" onclick="setLang('pl',this)">PL</button>
            </div>
            <button class="nav-account-btn" id="navAccountBtn" title="Особистий кабінет">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            </button>
            <a href="/#pricing" class="nav-cta-btn">Спробувати</a>
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
        <a href="/#features" class="drawer-link">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
            Можливості
        </a>
        <a href="/#pricing" class="drawer-link">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v2m0 8v2M9.5 9.5A2.5 2.5 0 0 1 12 8h.5a2.5 2.5 0 0 1 0 5h-1a2.5 2.5 0 0 0 0 5H12a2.5 2.5 0 0 0 2.5-1.5"/></svg>
            Ціни
        </a>
        <div class="drawer-divider"></div>
        <div class="drawer-lang">
            <button class="active" onclick="setLang('ua',this)">UA</button>
            <button onclick="setLang('en',this)">EN</button>
            <button onclick="setLang('pl',this)">PL</button>
        </div>
        <a href="/#pricing" class="drawer-cta">Спробувати безкоштовно</a>
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
