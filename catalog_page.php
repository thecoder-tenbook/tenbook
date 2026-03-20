<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TENBOOK - Каталог книг</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            line-height: 1.6;
            color: #1a1a1a;
            background: #f8fafc;
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            z-index: 1000;
            border-bottom: 1px solid #f0f0f0;
        }

        nav {
            max-width: 1400px;
            margin: 0 auto;
            padding: 1.5rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.75rem;
            font-weight: 900;
            letter-spacing: -1px;
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-decoration: none;
        }

        .nav-menu {
            display: flex;
            gap: 2.5rem;
            align-items: center;
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            text-decoration: none;
            color: #4a5568;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.3rem;
            cursor: pointer;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #0ea5e9;
        }

        .dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
            min-width: 200px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s;
        }

        .nav-item:hover .dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown a {
            display: block;
            padding: 0.75rem 1.5rem;
            color: #4a5568;
            text-decoration: none;
            transition: all 0.2s;
        }

        .dropdown a:hover {
            background: #f8fafc;
            color: #0ea5e9;
        }

        .lang-selector {
            display: flex;
            gap: 0.5rem;
            padding: 0.5rem;
            background: #f8fafc;
            border-radius: 8px;
        }

        .lang-btn {
            padding: 0.4rem 0.8rem;
            border: none;
            background: transparent;
            cursor: pointer;
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.3s;
        }

        .lang-btn.active {
            background: white;
            color: #0ea5e9;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .nav-account-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: 1.5px solid #e2e8f0;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: #64748b;
            transition: all 0.2s;
            flex-shrink: 0;
        }

        .nav-account-btn:hover {
            border-color: #0ea5e9;
            color: #0ea5e9;
            background: #f0f9ff;
        }

        .btn-primary {
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(14, 165, 233, 0.3);
        }

        .catalog-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 8rem 2rem 4rem;
        }

        .catalog-header {
            margin-bottom: 3rem;
        }

        .catalog-header h1 {
            font-size: 3rem;
            font-weight: 900;
            margin-bottom: 1rem;
        }

        .catalog-header p {
            font-size: 0.95rem;
            color: #64748b;
        }

        .catalog-controls {
            display: flex;
            gap: 2rem;
            margin-bottom: 3rem;
            align-items: center;
            flex-wrap: wrap;
        }

        .search-box {
            flex: 1;
            min-width: 300px;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 1rem 1rem 1rem 3rem;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .search-input:focus {
            outline: none;
            border-color: #0ea5e9;
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.2rem;
            color: #64748b;
        }

        .filter-dropdown {
            position: relative;
        }

        .filter-btn {
            padding: 1rem 1.5rem;
            background: white;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s;
        }

        .filter-btn:hover {
            border-color: #0ea5e9;
            color: #0ea5e9;
        }

        .filter-btn.active {
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            color: white;
            border-color: transparent;
        }

        .leaders-filter {
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: white;
            border-radius: 16px;
            border: 2px solid #e2e8f0;
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            transition: all 0.4s ease;
        }

        .leaders-filter.open {
            max-height: 500px;
            opacity: 1;
            padding: 1.5rem;
        }

        .leaders-filter-title {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .leaders-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
        }

        .leader-card {
            padding: 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s;
            text-align: center;
        }

        .leader-card:hover {
            border-color: #0ea5e9;
            transform: translateY(-3px);
        }

        .leader-card.active {
            border-color: #0ea5e9;
            background: linear-gradient(135deg, #0ea5e905 0%, #8b5cf605 100%);
        }

        .leader-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin: 0 auto 0.8rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
        }

        .leader-name {
            font-size: 0.95rem;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 0.3rem;
        }

        .leader-count {
            font-size: 0.8rem;
            color: #64748b;
        }

        .active-filters {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            margin-bottom: 1.5rem;
        }

        .filter-tag {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            color: white;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .filter-tag-close {
            cursor: pointer;
            font-weight: 700;
            font-size: 1.1rem;
        }

        .filter-tag-close:hover {
            transform: scale(1.2);
        }

        .categories-tabs {
            display: flex;
            gap: 1rem;
            overflow-x: auto;
            padding-bottom: 1rem;
            margin-bottom: 1.5rem;
        }

        .categories-tabs::-webkit-scrollbar {
            height: 3px;
        }

        .categories-tabs::-webkit-scrollbar-track {
            background: transparent;
        }

        .categories-tabs::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }

        .categories-tabs::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        .category-tab {
            padding: 0.75rem 1.5rem;
            background: white;
            border: 2px solid #e2e8f0;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            white-space: nowrap;
            flex-shrink: 0;
        }

        .category-tab:hover {
            border-color: #cbd5e1;
            background: #f8fafc;
            color: #374151;
        }

        .category-tab.active {
            background: rgba(14, 165, 233, 0.07);
            color: #0ea5e9;
            border-color: rgba(14, 165, 233, 0.4);
            font-weight: 700;
        }

        .books-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
        }

        .book-card {
            background: transparent;
            border-radius: 16px;
            padding: 0;
            transition: transform 0.3s;
            cursor: pointer;
            display: flex;
            flex-direction: column;
        }

        .book-card:hover {
            transform: translateY(-6px);
        }

        .book-card:hover .book-cover {
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.13);
        }

        .book-fav-btn {
            position: absolute;
            top: 12px;
            right: 12px;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.88);
            backdrop-filter: blur(6px);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: #9ca3af;
            transition: all 0.2s;
            z-index: 2;
        }

        .book-fav-btn:hover {
            background: white;
            color: #ec4899;
            transform: scale(1.12);
        }

        .book-fav-btn.active {
            color: #ec4899;
            background: white;
        }

        .book-fav-btn.active svg {
            fill: #ec4899;
        }

        .book-cover {
            width: 100%;
            aspect-ratio: 2 / 3;
            border-radius: 12px;
            margin-bottom: 1rem;
            position: relative;
            overflow: hidden;
            transition: box-shadow 0.3s;
        }

        .book-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.18rem 0.55rem;
            background: rgba(14, 165, 233, 0.08);
            color: #0ea5e9;
            border: 1px solid rgba(14, 165, 233, 0.25);
            border-radius: 20px;
            font-size: 0.62rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            vertical-align: middle;
            margin-left: 0.45rem;
            position: relative;
            top: -1px;
        }

        .book-category {
            font-size: 0.75rem;
            font-weight: 700;
            color: #0ea5e9;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
        }

        .book-title {
            font-size: 0.95rem;
            font-weight: 700;
            margin-bottom: 0.3rem;
            color: #1a1a1a;
            line-height: 1.35;
        }

        .book-author {
            font-size: 0.8rem;
            color: #64748b;
            margin-bottom: 0.75rem;
        }

        .book-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 0.6rem;
            border-top: 1px solid #e8edf2;
            margin-top: auto;
        }

        .book-duration {
            display: flex;
            align-items: center;
            gap: 0.3rem;
            font-size: 0.8rem;
            color: #64748b;
        }

        .book-rating {
            display: flex;
            align-items: center;
            gap: 0.25rem;
            font-size: 0.8rem;
            color: #fbbf24;
            font-weight: 600;
        }

        .load-more {
            text-align: center;
            margin-top: 3rem;
        }

        .load-more-btn {
            padding: 1rem 2.5rem;
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
        }

        .load-more-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(14, 165, 233, 0.4);
        }

        .results-count {
            margin-bottom: 2rem;
            font-size: 1.1rem;
            color: #64748b;
        }

        @media (max-width: 768px) {
            .catalog-container {
                padding: 5rem 1rem 2rem;
            }

            .catalog-header {
                margin-bottom: 1.5rem;
            }

            .catalog-controls {
                margin-bottom: 1rem;
            }

            .catalog-header h1 {
                font-size: 2rem;
            }

            .catalog-controls {
                flex-direction: row;
                align-items: center;
                gap: 0.6rem;
            }

            .search-box {
                flex: 1;
                min-width: 0;
            }

            .filter-dropdown {
                flex-shrink: 0;
            }

            .filter-btn span {
                display: none;
            }

            .filter-btn {
                padding: 0.7rem 0.9rem;
                gap: 0;
            }

            .books-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 0.8rem;
            }

            .book-card {
                padding: 0.8rem;
            }

            .book-title {
                font-size: 0.95rem;
            }

            .nav-menu {
                display: none;
            }
        }

        .nav-cta-btn { background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%); color: white; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s; border: none; cursor: pointer; font-size: 0.95rem; }
        .nav-cta-btn:hover { transform: translateY(-2px); box-shadow: 0 10px 30px rgba(14,165,233,0.3); }

        /* ===== FOOTER ===== */
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
        .messengers-popup { display: none; flex-direction: column; gap: 0.5rem; margin-bottom: 1rem; padding: 0.8rem; background: rgba(255,255,255,0.05); border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); }
        .messengers-popup.active { display: flex; }
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
        }
    </style>
<?php include 'header_styles.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>

    <div class="catalog-container">
        <div class="catalog-header">
            <h1>Каталог книг</h1>
            <p>Понад 2000+ скорочень найкращих книг у різних категоріях</p>
        </div>

        <div class="categories-tabs">
                <button class="category-tab active" data-category="all">Всі категорії</button>
                <button class="category-tab" data-category="business"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:6px"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>Бізнес</button>
                <button class="category-tab" data-category="psychology"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#8b5cf6" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:6px"><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><circle cx="12" cy="12" r="10"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>Психологія</button>
                <button class="category-tab" data-category="self-dev"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:6px"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>Саморозвиток</button>
                <button class="category-tab" data-category="finance"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#f59e0b" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:6px"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>Фінанси</button>
                <button class="category-tab" data-category="creativity"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ec4899" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:6px"><circle cx="13.5" cy="6.5" r=".5"/><circle cx="17.5" cy="10.5" r=".5"/><circle cx="8.5" cy="7.5" r=".5"/><circle cx="6.5" cy="12.5" r=".5"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z"/></svg>Креативність</button>
                <button class="category-tab" data-category="science"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#06b6d4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:6px"><path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v11m0 0H3m6 0h12m0 0V9m0 6v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6m16 0H3"/></svg>Наука</button>
                <button class="category-tab" data-category="biography"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#6366f1" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:6px"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>Біографії</button>
                <button class="category-tab" data-category="history"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:6px"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Історія</button>
        </div>

        <div class="catalog-controls">
            <div class="search-box">
                <span class="search-icon"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg></span>
                <input type="text" class="search-input" placeholder="Шукати книги..." id="searchInput">
            </div>
            <div class="filter-dropdown">
                <button class="filter-btn" id="leadersFilterBtn">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    <span>Фільтр по лідерах</span>
                </button>
            </div>
        </div>

        <div class="leaders-filter" id="leadersFilter">
            <div class="leaders-filter-title">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:6px"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>Оберіть лідера
            </div>
            <div class="leaders-grid">
                <div class="leader-card" data-leader="elon-musk">
                    <div class="leader-avatar" style="background: none; overflow: hidden; padding: 0;">
                        <img src="leaders-photos/elon-musk.jpg" alt="Ілон Маск" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%; display: block; filter: grayscale(100%);">
                    </div>
                    <div class="leader-name">Ілон Маск</div>
                    <div class="leader-count">6 книг</div>
                </div>
                <div class="leader-card" data-leader="bill-gates">
                    <div class="leader-avatar" style="background: none; overflow: hidden; padding: 0;">
                        <img src="leaders-photos/bill-gates.jpg" alt="Білл Гейтс" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%; display: block; filter: grayscale(100%);">
                    </div>
                    <div class="leader-name">Білл Гейтс</div>
                    <div class="leader-count">8 книг</div>
                </div>
                <div class="leader-card" data-leader="warren-buffett">
                    <div class="leader-avatar" style="background: none; overflow: hidden; padding: 0;">
                        <img src="leaders-photos/warren-buffett.jpg" alt="Уоррен Баффет" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%; display: block; filter: grayscale(100%);">
                    </div>
                    <div class="leader-name">Уоррен Баффет</div>
                    <div class="leader-count">5 книг</div>
                </div>
                <div class="leader-card" data-leader="mark-zuckerberg">
                    <div class="leader-avatar" style="background: none; overflow: hidden; padding: 0;">
                        <img src="leaders-photos/zuckerberg.jpg" alt="Марк Цукерберг" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%; display: block; filter: grayscale(100%);">
                    </div>
                    <div class="leader-name">Марк Цукерберг</div>
                    <div class="leader-count">4 книги</div>
                </div>
                <div class="leader-card" data-leader="steve-jobs">
                    <div class="leader-avatar" style="background: none; overflow: hidden; padding: 0;">
                        <img src="leaders-photos/steve-jobs.jpg" alt="Стів Джобс" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%; display: block; filter: grayscale(100%);">
                    </div>
                    <div class="leader-name">Стів Джобс</div>
                    <div class="leader-count">5 книг</div>
                </div>
                <div class="leader-card" data-leader="jeff-bezos">
                    <div class="leader-avatar" style="background: none; overflow: hidden; padding: 0;">
                        <img src="leaders-photos/bezos.jpg" alt="Джефф Безос" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%; display: block; filter: grayscale(100%);">
                    </div>
                    <div class="leader-name">Джефф Безос</div>
                    <div class="leader-count">4 книги</div>
                </div>
            </div>
        </div>

        <div class="active-filters" id="activeFilters"></div>

        <div class="results-count">
            Знайдено <strong id="resultsCount">24</strong> книг
        </div>

        <div class="books-grid" id="booksGrid">
            <!-- Книги генеруються JavaScript -->
        </div>

        <div class="load-more">
            <button class="load-more-btn">Завантажити ще</button>
        </div>
    </div>

    <script>
        const bookCovers = {
            "Сапієнс": `<img src="covers_ua/Sapiens.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Принципи": `<img src="covers_ua/Principles.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Від Нуля до Одиниці": `<img src="covers_ua/Zero to One.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Атомні Звички": `<img src="covers_ua/Atomic Habits.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Мислення Швидке й Повільне": `<img src="covers_ua/Thinking Fast and Slow.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Бережливий Стартап": `<img src="covers_ua/The Lean Startup.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Розумний Інвестор": `<img src="covers_ua/The Intelligent Investor.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Вплив": `<img src="covers_ua/Influence.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "7 Звичок": `<img src="covers_ua/The 7 Habits.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Глибока Робота": `<img src="covers_ua/Deep Work.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Сила Теперішнього": `<img src="covers_ua/The Power of Now.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Від Хорошого до Величного": `<img src="covers_ua/Good to Great.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Стів Джобс": `<img src="covers_ua/Steve Jobs.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Мистецтво Війни": `<img src="covers_ua/The Art of War.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Творчість, Інк.": `<img src="covers_ua/Creativity Inc..svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Коротка Історія Часу": `<img src="covers_ua/A Brief History of Time.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Багатий Тато, Бідний Тато": `<img src="covers_ua/Rich Dad Poor Dad.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Мислення": `<img src="covers_ua/Mindset.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Починай із Чому": `<img src="covers_ua/Start with Why.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Егоїстичний Ген": `<img src="covers_ua/The Selfish Gene.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Леонардо да Вінчі": `<img src="covers_ua/Leonardo da Vinci.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Перешкода як Шлях": `<img src="covers_ua/The Obstacle Is the Way.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Зброя, Мікроби та Сталь": `<img src="covers_ua/Guns Germs and Steel.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`,
            "Кради як Художник": `<img src="covers_ua/Steal Like an Artist.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">`
        };

        // Title → Firebase book ID
        const TITLE_TO_ID = {
            'Атомні Звички': 'atomic_habits',
            'Від Нуля до Одиниці': 'zero_to_one',
            'Сапієнс': 'sapiens',
            'Принципи': 'principles',
            '7 Звичок': '7habits',
        };

        const favorites = new Set();

        function getBookId(title) {
            return TITLE_TO_ID[title] || title.toLowerCase().replace(/\s+/g, '_');
        }

        function toggleFavorite(title, btn, e) {
            e.stopPropagation();
            const bookId = getBookId(title);
            if (!window._fbUser) {
                const provider = new firebase.auth.GoogleAuthProvider();
                firebase.auth().signInWithPopup(provider).catch(console.error);
                return;
            }
            const ref = firebase.firestore().collection('users').doc(window._fbUser.uid);
            ref.get().then(doc => {
                let favs = doc.exists ? (doc.data().favorites || []) : [];
                const idx = favs.indexOf(bookId);
                if (idx !== -1) {
                    favs.splice(idx, 1);
                    favorites.delete(bookId);
                    btn.classList.remove('active');
                    btn.querySelector('svg').setAttribute('fill', 'none');
                } else {
                    favs.push(bookId);
                    favorites.add(bookId);
                    btn.classList.add('active');
                    btn.querySelector('svg').setAttribute('fill', '#ec4899');
                }
                ref.set({ favorites: favs }, { merge: true });
            });
        }

        const books = [
            { title: "Атомні Звички", author: "Джеймс Клір", category: "self-dev", duration: "12 хв", rating: "4.9", gradient: "linear-gradient(135deg, #fd79a8 0%, #e84393 100%)", badge: "Топ", recommendedBy: ["elon-musk", "bill-gates"] },
            { title: "Від Нуля до Одиниці", author: "Пітер Тіль", category: "business", duration: "15 хв", rating: "4.8", gradient: "linear-gradient(135deg, #f093fb 0%, #f5576c 100%)", badge: "Нове", recommendedBy: ["elon-musk", "mark-zuckerberg"] },
            { title: "Сапієнс", author: "Юваль Ной Харарі", category: "history", duration: "18 хв", rating: "4.9", gradient: "linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)", recommendedBy: ["bill-gates", "mark-zuckerberg"] },
            { title: "Мислення Швидке й Повільне", author: "Деніел Канеман", category: "psychology", duration: "16 хв", rating: "4.7", gradient: "linear-gradient(135deg, #a29bfe 0%, #6c5ce7 100%)", recommendedBy: ["bill-gates"] },
            { title: "Бережливий Стартап", author: "Ерік Різ", category: "business", duration: "14 хв", rating: "4.6", gradient: "linear-gradient(135deg, #55efc4 0%, #00b894 100%)", recommendedBy: ["elon-musk", "steve-jobs"] },
            { title: "Принципи", author: "Рей Даліо", category: "business", duration: "20 хв", rating: "4.8", gradient: "linear-gradient(135deg, #667eea 0%, #764ba2 100%)", recommendedBy: ["bill-gates", "warren-buffett"] },
            { title: "Розумний Інвестор", author: "Бенджамін Грем", category: "finance", duration: "17 хв", rating: "4.9", gradient: "linear-gradient(135deg, #ffeaa7 0%, #fdcb6e 100%)", recommendedBy: ["warren-buffett"] },
            { title: "Вплив", author: "Роберт Чалдіні", category: "psychology", duration: "13 хв", rating: "4.7", gradient: "linear-gradient(135deg, #fab1a0 0%, #ff7675 100%)", recommendedBy: ["bill-gates"] },
            { title: "7 Звичок", author: "Стівен Кові", category: "self-dev", duration: "16 хв", rating: "4.8", gradient: "linear-gradient(135deg, #74b9ff 0%, #0984e3 100%)", recommendedBy: ["warren-buffett"] },
            { title: "Глибока Робота", author: "Кел Ньюпорт", category: "self-dev", duration: "12 хв", rating: "4.7", gradient: "linear-gradient(135deg, #a29bfe 0%, #6c5ce7 100%)", badge: "Нове", recommendedBy: ["bill-gates"] },
            { title: "Сила Теперішнього", author: "Екгарт Толле", category: "psychology", duration: "11 хв", rating: "4.6", gradient: "linear-gradient(135deg, #ffeaa7 0%, #fdcb6e 100%)", recommendedBy: [] },
            { title: "Від Хорошого до Величного", author: "Джим Коллінз", category: "business", duration: "15 хв", rating: "4.8", gradient: "linear-gradient(135deg, #55efc4 0%, #00b894 100%)", recommendedBy: ["jeff-bezos"] },
            { title: "Стів Джобс", author: "Волтер Айзексон", category: "biography", duration: "22 хв", rating: "4.9", gradient: "linear-gradient(135deg, #2d3436 0%, #000000 100%)", badge: "Топ", recommendedBy: ["bill-gates", "elon-musk"] },
            { title: "Мистецтво Війни", author: "Сунь Цзи", category: "history", duration: "10 хв", rating: "4.7", gradient: "linear-gradient(135deg, #ff7675 0%, #d63031 100%)", recommendedBy: ["warren-buffett"] },
            { title: "Творчість, Інк.", author: "Ед Кетмалл", category: "creativity", duration: "16 хв", rating: "4.8", gradient: "linear-gradient(135deg, #fd79a8 0%, #e84393 100%)", recommendedBy: ["steve-jobs"] },
            { title: "Коротка Історія Часу", author: "Стівен Гокінг", category: "science", duration: "19 хв", rating: "4.9", gradient: "linear-gradient(135deg, #2d3436 0%, #000000 100%)", recommendedBy: ["bill-gates"] },
            { title: "Багатий Тато, Бідний Тато", author: "Роберт Кійосакі", category: "finance", duration: "14 хв", rating: "4.6", gradient: "linear-gradient(135deg, #ffeaa7 0%, #fdcb6e 100%)", recommendedBy: ["warren-buffett"] },
            { title: "Мислення", author: "Керол Двек", category: "psychology", duration: "13 хв", rating: "4.7", gradient: "linear-gradient(135deg, #a29bfe 0%, #6c5ce7 100%)", recommendedBy: ["bill-gates"] },
            { title: "Починай із Чому", author: "Саймон Сінек", category: "business", duration: "12 хв", rating: "4.8", gradient: "linear-gradient(135deg, #74b9ff 0%, #0984e3 100%)", badge: "Нове", recommendedBy: ["steve-jobs", "jeff-bezos"] },
            { title: "Егоїстичний Ген", author: "Річард Докінз", category: "science", duration: "17 хв", rating: "4.7", gradient: "linear-gradient(135deg, #55efc4 0%, #00b894 100%)", recommendedBy: ["bill-gates"] },
            { title: "Леонардо да Вінчі", author: "Волтер Айзексон", category: "biography", duration: "21 хв", rating: "4.9", gradient: "linear-gradient(135deg, #fab1a0 0%, #ff7675 100%)", recommendedBy: ["steve-jobs"] },
            { title: "Перешкода як Шлях", author: "Раян Голідей", category: "self-dev", duration: "11 хв", rating: "4.6", gradient: "linear-gradient(135deg, #667eea 0%, #764ba2 100%)", recommendedBy: ["elon-musk"] },
            { title: "Зброя, Мікроби та Сталь", author: "Джаред Даймонд", category: "history", duration: "20 хв", rating: "4.8", gradient: "linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)", recommendedBy: ["bill-gates", "jeff-bezos"] },
            { title: "Кради як Художник", author: "Остін Клеон", category: "creativity", duration: "9 хв", rating: "4.5", gradient: "linear-gradient(135deg, #f093fb 0%, #f5576c 100%)", recommendedBy: ["steve-jobs"] }
        ];

        const categoryNames = {
            'all': 'Всі категорії',
            'business': 'Бізнес',
            'psychology': 'Психологія',
            'self-dev': 'Саморозвиток',
            'finance': 'Фінанси',
            'creativity': 'Креативність',
            'science': 'Наука',
            'biography': 'Біографії',
            'history': 'Історія'
        };

        const leaderNames = {
            'elon-musk': 'Ілон Маск',
            'bill-gates': 'Білл Гейтс',
            'warren-buffett': 'Уоррен Баффет',
            'mark-zuckerberg': 'Марк Цукерберг',
            'steve-jobs': 'Стів Джобс',
            'jeff-bezos': 'Джефф Безос'
        };

        let currentCategory = 'all';
        let searchQuery = '';
        let selectedLeaders = [];

        function updateActiveFilters() {
            const container = document.getElementById('activeFilters');
            if (selectedLeaders.length === 0) {
                container.innerHTML = '';
                return;
            }

            container.innerHTML = selectedLeaders.map(leader => `
                <div class="filter-tag">
                    <span>${leaderNames[leader]}</span>
                    <span class="filter-tag-close" onclick="removeLeaderFilter('${leader}')">×</span>
                </div>
            `).join('');
        }

        function renderBooks() {
            const grid = document.getElementById('booksGrid');
            const filteredBooks = books.filter(book => {
                const matchesCategory = currentCategory === 'all' || book.category === currentCategory;
                const matchesSearch = book.title.toLowerCase().includes(searchQuery.toLowerCase()) || 
                                     book.author.toLowerCase().includes(searchQuery.toLowerCase());
                const matchesLeader = selectedLeaders.length === 0 || 
                                     selectedLeaders.some(leader => book.recommendedBy.includes(leader));
                return matchesCategory && matchesSearch && matchesLeader;
            });

            document.getElementById('resultsCount').textContent = filteredBooks.length;

            grid.innerHTML = filteredBooks.map(book => `
                <div class="book-card" ${book.title === 'Атомні Звички' ? "onclick=\"window.location='book_page_atomic_habits'\"" : book.title === '7 Звичок' ? "onclick=\"window.location='book_page_7habits'\"" : book.title === 'Від Нуля до Одиниці' ? "onclick=\"window.location='book_page_zero_to_one'\"" : book.title === 'Сапієнс' ? "onclick=\"window.location='book_page_sapiens'\"" : book.title === 'Принципи' ? "onclick=\"window.location='book_page_principles'\"" : ''} style="${book.title === 'Атомні Звички' || book.title === '7 Звичок' || book.title === 'Від Нуля до Одиниці' || book.title === 'Сапієнс' || book.title === 'Принципи' ? 'cursor:pointer;' : ''}">
                    <div class="book-cover" style="background: ${book.title === 'Сапієнс' ? '#F6F1E8' : book.title === 'Принципи' ? '#EDEEE9' : book.title === 'Від Нуля до Одиниці' ? '#E4EBF5' : book.title === 'Атомні Звички' ? '#EBF8EF' : book.gradient};">
                        ${bookCovers[book.title] || ''}
                        <button class="book-fav-btn ${favorites.has(getBookId(book.title)) ? 'active' : ''}" onclick="toggleFavorite('${book.title.replace(/'/g, "\\'")}', this, event)" title="Додати в обрані">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="${favorites.has(getBookId(book.title)) ? '#ec4899' : 'none'}" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                        </button>
                    </div>
                    <div class="book-category">${categoryNames[book.category].toUpperCase()}</div>
                    <div class="book-title">${book.title}${book.badge ? `<span class="book-badge">${book.badge}</span>` : ''}</div>
                    <div class="book-author">${book.author}</div>
                    <div class="book-meta">
                        <div class="book-duration">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;flex-shrink:0"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            <span>${book.duration}</span>
                        </div>
                        <div class="book-rating">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="#fbbf24" xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;flex-shrink:0"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <span>${book.rating}</span>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        function removeLeaderFilter(leader) {
            selectedLeaders = selectedLeaders.filter(l => l !== leader);
            document.querySelector(`[data-leader="${leader}"]`).classList.remove('active');
            updateActiveFilters();
            renderBooks();
        }

        // Leader cards
        document.querySelectorAll('.leader-card').forEach(card => {
            card.addEventListener('click', () => {
                const leader = card.dataset.leader;
                if (selectedLeaders.includes(leader)) {
                    selectedLeaders = selectedLeaders.filter(l => l !== leader);
                    card.classList.remove('active');
                } else {
                    selectedLeaders.push(leader);
                    card.classList.add('active');
                }
                updateActiveFilters();
                renderBooks();
            });
        });

        // Toggle leaders filter
        document.getElementById('leadersFilterBtn').addEventListener('click', function() {
            const filter = document.getElementById('leadersFilter');
            const btn = this;
            filter.classList.toggle('open');
            btn.classList.toggle('active');
        });

        // Select category programmatically (used by nav dropdown)
        function selectCategory(cat) {
            currentCategory = cat;
            document.querySelectorAll('.category-tab').forEach(t => {
                t.classList.toggle('active', t.dataset.category === cat);
            });
            renderBooks();
            document.querySelector('.catalog-section')?.scrollIntoView({ behavior: 'smooth' });
        }
        window.selectCategory = selectCategory;

        // Category tabs
        document.querySelectorAll('.category-tab').forEach(tab => {
            tab.addEventListener('click', () => {
                document.querySelectorAll('.category-tab').forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                currentCategory = tab.dataset.category;
                renderBooks();
            });
        });

        // Search
        document.getElementById('searchInput').addEventListener('input', (e) => {
            searchQuery = e.target.value;
            renderBooks();
        });

        // Read category from URL param and activate tab
        const urlParams = new URLSearchParams(window.location.search);
        const catParam = urlParams.get('category');
        if (catParam) {
            currentCategory = catParam;
            document.querySelectorAll('.category-tab').forEach(t => {
                t.classList.toggle('active', t.dataset.category === catParam);
            });
        }

        // Initial render
        renderBooks();

        // Language selector
        document.querySelectorAll('.lang-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.lang-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
            });
        });
    </script>

    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-auth-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore-compat.js"></script>
    <script>
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
        var accountBtn = document.querySelector('.nav-account-btn');
        if (user) {
            if (accountBtn) {
                accountBtn.innerHTML = user.photoURL
                    ? '<img src="' + user.photoURL + '" style="width:28px;height:28px;border-radius:50%;object-fit:cover;">'
                    : '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>';
                accountBtn.onclick = function() { window.location.href = 'cabinet'; };
            }
            // Завантажити обрані
            firebase.firestore().collection('users').doc(user.uid).get().then(function(doc) {
                var favs = doc.exists ? (doc.data().favorites || []) : [];
                favs.forEach(function(id) { favorites.add(id); });
                renderBooks();
            });
        } else {
            if (accountBtn) {
                accountBtn.onclick = function() { window.location.href = 'cabinet'; };
            }
        }
    });
    </script>
    <script>
    function toggleMessengers() {
        var popup = document.getElementById('messengersPopup');
        if (popup) popup.classList.toggle('active');
    }
    </script>

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
</body>
</html>