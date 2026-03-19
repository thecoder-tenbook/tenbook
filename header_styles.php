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
