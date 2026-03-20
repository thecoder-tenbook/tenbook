<style>
    footer { background: #0a0a0a; color: white; padding: 4rem 2rem 2rem; }
    .footer-container { max-width: 1400px; margin: 0 auto; }
    .footer-main { display: grid; grid-template-columns: 1.5fr 2.5fr; gap: 4rem; padding-bottom: 3rem; border-bottom: 1px solid rgba(255,255,255,0.1); }
    .footer-brand { max-width: 350px; }
    .footer-logo { font-size: 2rem; font-weight: 900; letter-spacing: -1px; background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 1rem; }
    .footer-tagline { color: rgba(255,255,255,0.7); margin-bottom: 2rem; line-height: 1.6; }
    .app-buttons { display: flex; flex-direction: column; gap: 1rem; }
    .app-btn { display: flex; align-items: center; gap: 0.8rem; padding: 0.8rem 1.2rem; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; color: white; cursor: pointer; transition: all 0.3s; text-align: left; }
    .app-btn:hover { background: rgba(255,255,255,0.1); border-color: #0ea5e9; transform: translateY(-2px); }
    .app-btn-wrap { position: relative; display: block; }
    .app-btn-wrap .app-btn { width: 100%; }
    .app-btn-icon { width: 36px; height: 36px; object-fit: contain; border-radius: 8px; flex-shrink: 0; }
    .app-btn-sub { font-size: 0.7rem; opacity: 0.7; }
    .app-btn-name { font-weight: 700; font-size: 1rem; }
    .app-wip { position: absolute; top: -8px; right: 12px; display: inline-block; font-size: 0.62rem; font-weight: 700; color: #f59e0b; background: #1c1400; border: 1px solid #f59e0b; border-radius: 4px; padding: 0.1rem 0.4rem; letter-spacing: 0.2px; pointer-events: none; }
    .footer-links { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; }
    .footer-column h4 { font-size: 1rem; font-weight: 700; margin-bottom: 1.5rem; color: white; }
    .footer-column a { display: block; color: rgba(255,255,255,0.7); text-decoration: none; margin-bottom: 0.8rem; font-size: 0.95rem; transition: all 0.3s; }
    .footer-column a:hover { color: #0ea5e9; transform: translateX(5px); }
    .support-btn { background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%); color: white !important; padding: 0.6rem 1rem; border-radius: 8px; font-weight: 600; display: inline-block !important; margin-bottom: 1rem !important; border: none; cursor: pointer; width: 100%; text-align: left; transition: all 0.3s; }
    .support-btn:hover { transform: translateY(-2px) !important; box-shadow: 0 5px 20px rgba(14,165,233,0.4); }
    .messengers-popup { display: none; flex-direction: column; gap: 0.5rem; margin-bottom: 1rem; padding: 0.8rem; background: rgba(255,255,255,0.05); border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); animation: footerSlideDown 0.3s ease; }
    .messengers-popup.active { display: flex; }
    @keyframes footerSlideDown { from { opacity: 0; transform: translateY(-10px); } to { opacity: 1; transform: translateY(0); } }
    .messenger-link { display: flex !important; align-items: center; gap: 0.8rem; padding: 0.6rem 0.8rem !important; background: rgba(255,255,255,0.03); border-radius: 6px; transition: all 0.3s !important; margin-bottom: 0 !important; }
    .messenger-link:hover { background: rgba(14,165,233,0.2) !important; transform: translateX(5px) !important; }
    .messenger-icon { font-size: 1.2rem; }
    .footer-bottom { display: flex; justify-content: space-between; align-items: center; padding: 2rem 0; border-bottom: 1px solid rgba(255,255,255,0.1); }
    .footer-legal { display: flex; gap: 1rem; align-items: center; flex-wrap: wrap; }
    .footer-legal a { color: rgba(255,255,255,0.7); text-decoration: none; font-size: 0.9rem; transition: color 0.3s; }
    .footer-legal a:hover { color: #0ea5e9; }
    .footer-legal span { color: rgba(255,255,255,0.3); }
    .footer-copyright { text-align: center; padding-top: 2rem; }
    .footer-copyright p { color: rgba(255,255,255,0.5); font-size: 0.9rem; }
    @media (max-width: 768px) {
        .footer-main { grid-template-columns: 1fr; gap: 2rem; }
        .footer-links { grid-template-columns: repeat(2, 1fr); }
        .footer-bottom { flex-direction: column; gap: 1.5rem; text-align: center; }
    }
</style>

<footer>
    <div class="footer-container">
        <div class="footer-main">
            <div class="footer-brand">
                <div class="footer-logo">TENBOOK</div>
                <p class="footer-tagline">Читай як найуспішніші люди світу</p>
                <div class="app-buttons">
                    <div class="app-btn-wrap">
                        <button class="app-btn">
                            <img src="icons/apple.svg" class="app-btn-icon" alt="Apple">
                            <div>
                                <div class="app-btn-sub">Завантажити в</div>
                                <div class="app-btn-name">App Store</div>
                            </div>
                        </button>
                        <span class="app-wip">В розробці</span>
                    </div>
                    <div class="app-btn-wrap">
                        <button class="app-btn">
                            <img src="icons/android.svg" class="app-btn-icon" alt="Android">
                            <div>
                                <div class="app-btn-sub">Завантажити в</div>
                                <div class="app-btn-name">Google Play</div>
                            </div>
                        </button>
                        <span class="app-wip">В розробці</span>
                    </div>
                </div>
            </div>

            <div class="footer-links">
                <div class="footer-column">
                    <h4>Категорії</h4>
                    <a href="catalog_page?category=business">Бізнес</a>
                    <a href="catalog_page?category=psychology">Психологія</a>
                    <a href="catalog_page?category=self-dev">Саморозвиток</a>
                    <a href="catalog_page?category=finance">Фінанси</a>
                    <a href="catalog_page?category=creativity">Креативність</a>
                    <a href="catalog_page?category=science">Наука</a>
                    <a href="catalog_page?category=biography">Біографії</a>
                    <a href="catalog_page?category=history">Історія</a>
                </div>

                <div class="footer-column">
                    <h4>Продукт</h4>
                    <a href="/#features">Можливості</a>
                    <a href="/#celebrities">Рекомендації лідерів</a>
                    <a href="catalog_page">Всі книги</a>
                </div>

                <div class="footer-column">
                    <h4>Підтримка</h4>
                    <button class="support-btn" onclick="toggleMessengers()">💬 Напишіть нам</button>
                    <div class="messengers-popup" id="messengersPopup">
                        <a href="https://t.me/tenbook" target="_blank" class="messenger-link">
                            <span class="messenger-icon">✈️</span>
                            <span>Telegram</span>
                        </a>
                        <a href="viber://chat?number=+380000000000" class="messenger-link">
                            <span class="messenger-icon">📱</span>
                            <span>Viber</span>
                        </a>
                        <a href="mailto:support@tenbook.com" class="messenger-link">
                            <span class="messenger-icon">✉️</span>
                            <span>Email</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-legal">
                <a href="#">Політика конфіденційності</a>
                <span>•</span>
                <a href="#">Публічна оферта</a>
                <span>•</span>
                <a href="#">Умови використання</a>
            </div>
            <?php /* SOCIAL ICONS - HIDDEN
            <div class="footer-social">
                <a href="#" class="social-link">📘</a>
                <a href="#" class="social-link">📷</a>
                <a href="#" class="social-link">🐦</a>
                <a href="#" class="social-link">💼</a>
            </div>
            ENDSOCIAL */ ?>
        </div>

        <div class="footer-copyright">
            <p>&copy; 2026 TENBOOK. Всі права захищені.</p>
        </div>
    </div>
</footer>

<script>
function toggleMessengers() {
    var popup = document.getElementById('messengersPopup');
    if (popup) popup.classList.toggle('active');
}
</script>
