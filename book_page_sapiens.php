<?php $active_page = 'catalog'; ?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сапієнс — короткий зміст і ключові ідеї | TENBOOK</title>
    <meta name="description" content="Короткий зміст «Сапієнса» Юваля Ноя Харарі: 8 ключових ідей за 20 хвилин. 70 000 років людської історії — від першого вогню до штучного інтелекту.">
    <link rel="canonical" href="https://tenbook.com.ua/book_page_sapiens">

    <!-- Open Graph -->
    <meta property="og:type" content="book">
    <meta property="og:title" content="Сапієнс — короткий зміст | TENBOOK">
    <meta property="og:description" content="Короткий зміст «Сапієнса» Харарі: 8 ключових ідей за 20 хвилин. 70 000 років людської історії — від першого вогню до штучного інтелекту.">
    <meta property="og:url" content="https://tenbook.com.ua/book_page_sapiens">
    <meta property="og:site_name" content="TENBOOK">
    <meta property="og:image" content="https://tenbook.com.ua/covers_ua/Sapiens.svg">
    <meta property="og:locale" content="uk_UA">
    <meta property="book:author" content="Юваль Ной Харарі">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Сапієнс — короткий зміст | TENBOOK">
    <meta name="twitter:description" content="8 ключових ідей за 20 хвилин. Від когнітивної революції до сучасного світу — що зробило Homo sapiens господарем планети?">
    <meta name="twitter:image" content="https://tenbook.com.ua/covers_ua/Sapiens.svg">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Book",
          "@id": "https://tenbook.com.ua/book_page_sapiens#book",
          "name": "Сапієнс. Коротка історія людства",
          "alternateName": "Sapiens: A Brief History of Humankind",
          "author": {
            "@type": "Person",
            "name": "Юваль Ной Харарі",
            "alternateName": "Yuval Noah Harari"
          },
          "inLanguage": "uk",
          "description": "«Сапієнс» — грандіозна подорож крізь 70 000 років людської історії. Від крихітного африканського примата до творця атомної бомби та засновника корпорацій.",
          "genre": "Історія, антропологія, нон-фікшн",
          "numberOfPages": 443,
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.7",
            "reviewCount": "31",
            "bestRating": "5",
            "worstRating": "1"
          }
        },
        {
          "@type": "Article",
          "@id": "https://tenbook.com.ua/book_page_sapiens#article",
          "headline": "Сапієнс — короткий зміст і ключові ідеї",
          "description": "Короткий зміст книги «Сапієнс» Юваля Ноя Харарі: 8 ключових ідей за 20 хвилин читання.",
          "about": { "@id": "https://tenbook.com.ua/book_page_sapiens#book" },
          "inLanguage": "uk",
          "publisher": {
            "@type": "Organization",
            "name": "TENBOOK",
            "url": "https://tenbook.com.ua"
          }
        },
        {
          "@type": "BreadcrumbList",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Головна", "item": "https://tenbook.com.ua/" },
            { "@type": "ListItem", "position": 2, "name": "Каталог", "item": "https://tenbook.com.ua/catalog_page" },
            { "@type": "ListItem", "position": 3, "name": "Сапієнс" }
          ]
        }
      ]
    }
    </script>
    <style>
* { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: #f8fafc;
            color: #1e293b;
        }

        /* ── NAVBAR ── */
        .nav-header-btn { padding: 0.55rem 1.4rem; background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%); color: white; border: none; border-radius: 20px; font-weight: 600; cursor: pointer; text-decoration: none; font-size: 0.9rem; transition: opacity 0.2s; }
        .nav-header-btn:hover { opacity: 0.9; }
        @media (max-width: 768px) { }

        .btn-primary {
            padding: 0.55rem 1.4rem;
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: 700;
            font-size: 0.88rem;
            cursor: pointer;
        }

        /* ── PAGE LAYOUT ── */
        .page-layout {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 3.5rem;
            align-items: start;
        }

        .page-cover-col {
            position: sticky;
            top: 80px;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            padding-top: 1.8rem;
        }

        .page-main-col {
            min-width: 0;
        }

        /* ── BREADCRUMB ── */
        .breadcrumb {
            padding: 1.5rem 0 0;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.82rem;
            color: #94a3b8;
        }

        .breadcrumb a {
            text-decoration: none;
            color: #94a3b8;
            transition: color 0.2s;
        }

        .breadcrumb a:hover { color: #0ea5e9; }

        .breadcrumb-sep { opacity: 0.5; }

        .breadcrumb-current { color: #64748b; font-weight: 500; }

        /* ── HERO INFO ── */

        .hero-cover {
            width: 100%;
            aspect-ratio: 2 / 3;
            border-radius: 16px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 24px 56px rgba(0,0,0,0.14);
        }

        .hero-cover svg {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            display: block;
        }

        .hero-cover-actions {
            display: flex;
            flex-direction: column;
            gap: 0.65rem;
        }

        .btn-read {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.85rem;
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 700;
            font-size: 0.95rem;
            cursor: pointer;
            transition: opacity 0.2s, transform 0.2s;
            width: 100%;
        }

        .btn-read:hover { opacity: 0.9; transform: translateY(-1px); }

        .btn-listen {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.85rem;
            background: white;
            color: #1e293b;
            border: 1.5px solid #e2e8f0;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all 0.2s;
            width: 100%;
        }

        .btn-listen:hover {
            border-color: #0ea5e9;
            color: #0ea5e9;
        }

        .btn-fav {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem;
            background: white;
            color: #94a3b8;
            border: 1.5px solid #e2e8f0;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.85rem;
            cursor: pointer;
            transition: all 0.2s;
            width: 100%;
        }

        .btn-fav:hover { color: #ec4899; border-color: #ec4899; }

        /* Info column */
        .hero-info {
            padding-top: 1.5rem;
        }

        .hero-category {
            font-size: 0.72rem;
            font-weight: 700;
            color: #0ea5e9;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            margin-bottom: 0.75rem;
        }

        .hero-title {
            font-size: 2.4rem;
            font-weight: 900;
            line-height: 1.15;
            color: #0f172a;
            margin-bottom: 0.5rem;
            letter-spacing: -0.5px;
        }

        .hero-author {
            font-size: 1rem;
            color: #64748b;
            margin-bottom: 1.5rem;
        }

        .hero-author a {
            color: #0ea5e9;
            text-decoration: none;
            font-weight: 500;
        }

        .hero-meta-row {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 1.8rem;
            flex-wrap: wrap;
        }

        .hero-rating {
            display: flex;
            align-items: center;
            gap: 0.35rem;
        }

        .hero-stars {
            display: flex;
            gap: 2px;
        }

        .hero-rating-val {
            font-size: 0.92rem;
            font-weight: 700;
            color: #1e293b;
        }

        .hero-rating-count {
            font-size: 0.8rem;
            color: #94a3b8;
        }

        .hero-meta-item {
            display: flex;
            align-items: center;
            gap: 0.35rem;
            font-size: 0.85rem;
            color: #64748b;
        }

        .hero-meta-divider {
            width: 1px;
            height: 16px;
            background: #e2e8f0;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.2rem 0.6rem;
            background: rgba(14,165,233,0.07);
            color: #0ea5e9;
            border: 1px solid rgba(14,165,233,0.25);
            border-radius: 20px;
            font-size: 0.65rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .hero-badge.top {
            background: rgba(245,158,11,0.08);
            color: #d97706;
            border-color: rgba(245,158,11,0.25);
        }

        .hero-desc {
            font-size: 0.97rem;
            line-height: 1.75;
            color: #475569;
            margin-bottom: 2rem;
            border-left: 3px solid #e2e8f0;
            padding-left: 1.1rem;
        }

        /* Stats chips */
        .hero-stats {
            display: flex;
            gap: 0.75rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .hero-stat-chip {
            display: flex;
            align-items: center;
            gap: 0.45rem;
            padding: 0.55rem 1rem;
            background: white;
            border: 1.5px solid #e2e8f0;
            border-radius: 10px;
            font-size: 0.82rem;
            color: #475569;
            font-weight: 500;
        }

        .hero-stat-chip svg { color: #94a3b8; }

        /* Leaders row */
        .hero-leaders-label {
            font-size: 0.75rem;
            color: #94a3b8;
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-bottom: 0.6rem;
        }

        .hero-leaders-row {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 2rem;
        }

        .leader-avatar {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            border: 2px solid white;
            box-shadow: 0 1px 4px rgba(0,0,0,0.12);
            overflow: hidden;
            flex-shrink: 0;
        }

        .leader-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .hero-leaders-text {
            font-size: 0.8rem;
            color: #64748b;
        }

        /* ── TABS ── */
        .tabs-wrapper {
            background: white;
            border-bottom: 1px solid #e2e8f0;
            border-top: 1px solid #e2e8f0;
            position: sticky;
            top: 64px;
            z-index: 50;
            margin-top: 1.5rem;
        }

        .tabs-inner {
            display: flex;
            gap: 0;
        }

        .tab-btn {
            padding: 1rem 1.5rem;
            background: none;
            border: none;
            border-bottom: 2.5px solid transparent;
            font-size: 0.88rem;
            font-weight: 600;
            color: #94a3b8;
            cursor: pointer;
            transition: all 0.2s;
            white-space: nowrap;
        }

        .tab-btn:hover { color: #475569; }

        .tab-btn.active {
            color: #0ea5e9;
            border-bottom-color: #0ea5e9;
        }

        .tab-count {
            display: inline-block;
            background: #f1f5f9;
            color: #64748b;
            font-size: 0.7rem;
            font-weight: 700;
            border-radius: 20px;
            padding: 0.1rem 0.45rem;
            margin-left: 0.3rem;
            vertical-align: middle;
        }
        .tab-btn.active .tab-count {
            background: rgba(14,165,233,0.1);
            color: #0ea5e9;
        }

        /* ── CONTENT ── */
        .content-wrapper {
            padding: 2.5rem 0 4rem;
            display: grid;
            grid-template-columns: 1fr 280px;
            gap: 2.5rem;
            align-items: start;
        }

        /* Tab panels */
        .tab-panel { display: none; }
        .tab-panel.active { display: block; }

        /* ── KEY IDEAS ── */
        .section-label {
            font-size: 0.72rem;
            font-weight: 700;
            color: #94a3b8;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 0.5rem;
        }

        .section-heading {
            font-size: 1.5rem;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 0.4rem;
        }

        .section-sub {
            font-size: 0.88rem;
            color: #94a3b8;
            margin-bottom: 2rem;
        }

        .ideas-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .idea-card {
            background: white;
            border-radius: 14px;
            padding: 1.4rem 1.5rem;
            display: grid;
            grid-template-columns: 44px 1fr;
            gap: 1.1rem;
            align-items: start;
            border: 1px solid #f1f5f9;
            transition: box-shadow 0.2s, transform 0.2s;
            cursor: pointer;
        }

        .idea-card:hover {
            box-shadow: 0 8px 24px rgba(0,0,0,0.07);
            transform: translateY(-2px);
        }

        .idea-num {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, rgba(14,165,233,0.1) 0%, rgba(139,92,246,0.1) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            font-weight: 900;
            color: #0ea5e9;
            flex-shrink: 0;
        }

        .idea-content {}

        .idea-title {
            font-size: 0.95rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.4rem;
            line-height: 1.3;
        }

        .idea-text {
            font-size: 0.85rem;
            line-height: 1.65;
            color: #64748b;
        }

        /* Quote */
        .quote-block {
            margin: 2rem 0;
            background: linear-gradient(135deg, rgba(14,165,233,0.04) 0%, rgba(139,92,246,0.04) 100%);
            border: 1px solid rgba(14,165,233,0.12);
            border-radius: 16px;
            padding: 1.8rem 2rem;
            position: relative;
        }

        .quote-mark {
            font-size: 5rem;
            line-height: 0.7;
            color: rgba(14,165,233,0.15);
            font-family: Georgia, serif;
            position: absolute;
            top: 1rem;
            left: 1.5rem;
            user-select: none;
        }

        .quote-text {
            font-size: 1.05rem;
            font-style: italic;
            line-height: 1.7;
            color: #334155;
            padding-left: 1rem;
        }

        .quote-source {
            margin-top: 0.8rem;
            font-size: 0.8rem;
            color: #94a3b8;
            padding-left: 1rem;
        }

        /* About text */
        .about-text {
            font-size: 0.95rem;
            line-height: 1.8;
            color: #475569;
        }

        .about-text p { margin-bottom: 1.1rem; }

        /* Author card */
        .author-card {
            background: white;
            border-radius: 16px;
            padding: 1.8rem;
            border: 1px solid #f1f5f9;
            margin-top: 2rem;
        }

        .author-

        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, #1a1f36 0%, #0ea5e9 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 800;
            font-size: 1.1rem;
            flex-shrink: 0;
        }

        .author-name {
            font-size: 1rem;
            font-weight: 700;
            color: #0f172a;
        }

        .author-title {
            font-size: 0.8rem;
            color: #94a3b8;
            margin-top: 0.15rem;
        }

        .author-bio {
            font-size: 0.87rem;
            line-height: 1.7;
            color: #64748b;
        }

        /* ── SIDEBAR ── */
        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
            position: sticky;
            top: 130px;
        }

        .sidebar-card {
            background: white;
            border-radius: 16px;
            padding: 1.4rem;
            border: 1px solid #f1f5f9;
        }

        .sidebar-card-title {
            font-size: 0.78rem;
            font-weight: 700;
            color: #94a3b8;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            margin-bottom: 1rem;
        }

        /* Progress card */
        .progress-ring-wrap {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .progress-circle {
            position: relative;
            width: 64px;
            height: 64px;
            flex-shrink: 0;
        }

        .progress-circle svg { transform: rotate(-90deg); }

        .progress-pct {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.78rem;
            font-weight: 800;
            color: #0ea5e9;
        }

        .progress-info-title {
            font-size: 0.88rem;
            font-weight: 700;
            color: #0f172a;
        }

        .progress-info-sub {
            font-size: 0.78rem;
            color: #94a3b8;
            margin-top: 0.15rem;
        }

        .continue-btn {
            width: 100%;
            padding: 0.75rem;
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: 700;
            font-size: 0.88rem;
            cursor: pointer;
            transition: opacity 0.2s;
        }

        .continue-btn:hover { opacity: 0.9; }

        /* Related books */
        .related-book {
            display: flex;
            gap: 0.85rem;
            align-items: center;
            padding: 0.65rem 0;
            border-bottom: 1px solid #f1f5f9;
            cursor: pointer;
            transition: opacity 0.2s;
        }

        .related-book:last-child { border-bottom: none; padding-bottom: 0; }
        .related-book:first-child { padding-top: 0; }
        .related-book:hover { opacity: 0.72; }

        .related-cover {
            width: 38px;
            flex-shrink: 0;
            aspect-ratio: 2 / 3;
            border-radius: 6px;
            overflow: hidden;
            position: relative;
        }

        .related-cover svg {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            display: block;
        }

        .related-title {
            font-size: 0.83rem;
            font-weight: 600;
            color: #0f172a;
            line-height: 1.3;
            margin-bottom: 0.2rem;
        }

        .related-author {
            font-size: 0.75rem;
            color: #94a3b8;
        }

        .related-rating {
            display: flex;
            align-items: center;
            gap: 0.2rem;
            font-size: 0.75rem;
            font-weight: 600;
            color: #fbbf24;
            margin-top: 0.2rem;
        }

        /* Tags */
        .tags-row {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .tag {
            padding: 0.3rem 0.75rem;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            font-size: 0.75rem;
            color: #64748b;
            cursor: pointer;
            transition: all 0.2s;
        }

        .tag:hover {
            background: rgba(14,165,233,0.06);
            border-color: rgba(14,165,233,0.3);
            color: #0ea5e9;
        }

        /* Share */
        .share-row {
            display: flex;
            gap: 0.6rem;
        }

        .share-btn {
            flex: 1;
            padding: 0.6rem;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-size: 0.78rem;
            font-weight: 600;
            color: #64748b;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.35rem;
            transition: all 0.2s;
        }

        .share-btn:hover {
            background: white;
            border-color: #cbd5e1;
            color: #374151;
        }

        /* ── FOOTER NOTE ── */
        .footer-note {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem 3rem;
            text-align: center;
            font-size: 0.82rem;
            color: #cbd5e1;
        }

        /* ── MOBILE ── */
        @media (max-width: 768px) {
        .nav-header-btn { padding: 0.55rem 1.4rem; background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%); color: white; border: none; border-radius: 20px; font-weight: 600; cursor: pointer; text-decoration: none; font-size: 0.9rem; transition: opacity 0.2s; }
        .nav-header-btn:hover { opacity: 0.9; }
        @media (max-width: 768px) { }

            .btn-primary {
                padding: 0.5rem 1rem;
                font-size: 0.82rem;
            }

            .page-layout {
                grid-template-columns: 1fr;
                padding: 0;
                gap: 0;
            }

            .page-cover-col {
                position: static;
                padding: 1.4rem 1.2rem 0;
                gap: 0.8rem;
            }

            .hero-cover-actions {
                flex-direction: row;
                flex-wrap: nowrap;
                gap: 0.6rem;
            }

            .btn-read   { flex: 1; padding: 0.8rem 0.6rem; font-size: 0.88rem; }
            .btn-listen { flex: 1; padding: 0.8rem 0.6rem; font-size: 0.88rem; }
            .btn-fav    { display: flex; flex: 0 0 auto; width: 48px; padding: 0; justify-content: center; }
            .btn-fav-text { display: none; }

            .breadcrumb {
                padding: 1rem 1.2rem 0;
                font-size: 0.78rem;
            }

            .hero-info {
                padding: 0.8rem 1.2rem 0;
                min-width: 0;
            }

            .hero-title {
                font-size: 1.6rem;
                letter-spacing: -0.3px;
            }

            .hero-author { margin-bottom: 1rem; font-size: 0.88rem; }

            .hero-meta-row {
                gap: 0.75rem;
                margin-bottom: 1.2rem;
            }

            .hero-meta-divider { display: none; }
            .hero-rating-count { display: none; }

            .hero-desc {
                font-size: 0.88rem;
                margin-bottom: 1.2rem;
            }

            .hero-stats {
                gap: 0.6rem;
                margin: 0 -1.2rem 1.2rem;
                padding: 0 1.2rem 2px;
                flex-wrap: nowrap;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                scrollbar-width: none;
            }

            .hero-stats::-webkit-scrollbar { display: none; }

            .hero-stat-chip {
                font-size: 0.76rem;
                padding: 0.4rem 0.8rem;
                white-space: nowrap;
                flex-shrink: 0;
            }

            .hero-leaders-row { margin-bottom: 0; }

            .tabs-wrapper { top: 56px; }

            .tabs-inner {
                padding: 0 0.5rem;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                scrollbar-width: none;
            }

            .tabs-inner::-webkit-scrollbar { display: none; }

            .tab-btn {
                padding: 0.85rem 1rem;
                font-size: 0.83rem;
            }

            .content-wrapper {
                grid-template-columns: 1fr;
                padding: 1.5rem 1.2rem 3rem;
                gap: 2rem;
                margin: 0 -1.2rem;
                padding-left: 1.2rem;
                padding-right: 1.2rem;
            }

            .sidebar { position: static; }

            .idea-card {
                padding: 1.1rem 1.1rem;
                gap: 0.85rem;
            }

            .idea-num {
                width: 36px;
                height: 36px;
                border-radius: 10px;
                font-size: 0.88rem;
            }

            .idea-title { font-size: 0.88rem; }
            .idea-text  { font-size: 0.8rem; }

            .quote-block { padding: 1.4rem 1.2rem; }
            .quote-text  { font-size: 0.92rem; }

            .section-heading { font-size: 1.2rem; }

            .author-card { padding: 1.2rem; }

            .share-row { gap: 0.4rem; }
            .share-btn  { font-size: 0.74rem; padding: 0.55rem 0.4rem; }
        }

        /* ── TABLET ── */
        @media (min-width: 769px) and (max-width: 1024px) {
            .nav-lang  { display: none; }

            .page-layout {
                grid-template-columns: 220px 1fr;
                gap: 2rem;
                padding: 0 1.5rem;
            }

            .content-wrapper {
                grid-template-columns: 1fr 240px;
                gap: 1.8rem;
            }

            .hero-title { font-size: 2rem; }
        }

        /* ── REVIEWS ── */
        .reviews-summary {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 2.5rem;
            align-items: center;
            padding: 2rem;
            background: #f8fafc;
            border: 1px solid #e8edf2;
            border-radius: 16px;
            margin-bottom: 2rem;
        }
        .reviews-big-score { text-align: center; }
        .reviews-big-number {
            font-size: 4rem;
            font-weight: 900;
            color: #0f172a;
            line-height: 1;
        }
        .reviews-big-stars {
            display: flex;
            gap: 3px;
            justify-content: center;
            margin: 0.4rem 0 0.3rem;
        }
        .reviews-big-stars svg { color: #f59e0b; }
        .reviews-total {
            font-size: 0.78rem;
            color: #94a3b8;
        }
        .reviews-bars {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        .reviews-bar-row {
            display: grid;
            grid-template-columns: 20px 1fr 32px;
            align-items: center;
            gap: 0.6rem;
        }
        .reviews-bar-label {
            font-size: 0.78rem;
            color: #64748b;
            font-weight: 600;
            text-align: right;
        }
        .reviews-bar-track {
            height: 7px;
            background: #e8edf2;
            border-radius: 10px;
            overflow: hidden;
        }
        .reviews-bar-fill {
            height: 100%;
            background: #f59e0b;
            border-radius: 10px;
        }
        .reviews-bar-pct {
            font-size: 0.72rem;
            color: #94a3b8;
        }

        .review-form-block {
            border: 1px solid #e8edf2;
            border-radius: 16px;
            padding: 1.6rem;
            margin-bottom: 2rem;
        }
        .review-form-title {
            font-size: 1rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 1.2rem;
        }
        .star-picker {
            display: flex;
            gap: 6px;
            margin-bottom: 1.1rem;
        }
        .star-picker-btn {
            background: none;
            border: none;
            cursor: pointer;
            padding: 2px;
            color: #e2e8f0;
            transition: color 0.15s, transform 0.15s;
        }
        .star-picker-btn:hover,
        .star-picker-btn.active { color: #f59e0b; transform: scale(1.15); }
        .review-textarea {
            width: 100%;
            min-height: 100px;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 0.85rem 1rem;
            font-size: 0.9rem;
            font-family: inherit;
            color: #334155;
            resize: vertical;
            outline: none;
            transition: border-color 0.2s;
            box-sizing: border-box;
        }
        .review-textarea:focus { border-color: #0ea5e9; }
        .review-textarea::placeholder { color: #cbd5e1; }
        .review-form-footer {
            display: flex;
            justify-content: flex-end;
            margin-top: 0.85rem;
        }
        .review-submit-btn {
            background: linear-gradient(135deg, #0ea5e9, #6366f1);
            color: white;
            border: none;
            border-radius: 10px;
            padding: 0.65rem 1.6rem;
            font-size: 0.88rem;
            font-weight: 600;
            cursor: pointer;
            transition: opacity 0.2s;
        }
        .review-submit-btn:hover { opacity: 0.88; }

        .reviews-list { display: flex; flex-direction: column; gap: 1.2rem; }
        .review-card {
            border: 1px solid #e8edf2;
            border-radius: 14px;
            padding: 1.2rem 1.4rem;
        }
        .review-card-
        .review-userpic {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            font-weight: 700;
            color: white;
            flex-shrink: 0;
        }
        .review-user-info { flex: 1; }
        .review-username {
            font-size: 0.88rem;
            font-weight: 700;
            color: #0f172a;
        }
        .review-date {
            font-size: 0.75rem;
            color: #94a3b8;
            margin-top: 1px;
        }
        .review-stars {
            display: flex;
            gap: 2px;
        }
        .review-stars svg { color: #f59e0b; }
        .review-text {
            font-size: 0.88rem;
            line-height: 1.65;
            color: #475569;
        }
        .reviews-helpful {
            display: flex;
            align-items: center;
            gap: 0.4rem;
            margin-top: 0.75rem;
            font-size: 0.78rem;
            color: #94a3b8;
        }
        .reviews-helpful button {
            background: none;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            padding: 0.2rem 0.6rem;
            font-size: 0.75rem;
            color: #64748b;
            cursor: pointer;
            transition: all 0.15s;
        }
        .reviews-helpful button:hover { border-color: #0ea5e9; color: #0ea5e9; }

        @media (max-width: 768px) {
            .reviews-summary { grid-template-columns: 1fr; gap: 1.2rem; }
            .reviews-big-stars { justify-content: flex-start; }
        }
            .btn-fav.active { color: #e11d48; border-color: #fecdd3; background: #fff1f2; }
        .btn-fav.active svg { fill: #e11d48; stroke: #e11d48; }
    </style>
</head>
<body>
<?php include 'header.php'; ?>
<!-- PAGE LAYOUT -->
<main style="padding-top: 96px;">
<div class="page-layout">

<!-- LEFT: sticky cover -->
<div class="page-cover-col">
    <div class="hero-cover" style="background:#F6F1E8;position:relative;overflow:hidden;">
        <img src="covers_ua/Sapiens.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;object-fit:cover;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 296" preserveAspectRatio="xMidYMid slice" style="display:none">
            <rect width="200" height="296" fill="#1a1f36"/>
            <!-- subtle star field -->
            <circle cx="30" cy="20" r="0.8" fill="white" opacity="0.4"/>
            <circle cx="80" cy="15" r="0.6" fill="white" opacity="0.3"/>
            <circle cx="150" cy="25" r="0.9" fill="white" opacity="0.35"/>
            <circle cx="170" cy="55" r="0.7" fill="white" opacity="0.3"/>
            <circle cx="25" cy="70" r="0.8" fill="white" opacity="0.4"/>
            <circle cx="185" cy="90" r="0.6" fill="white" opacity="0.25"/>
            <!-- evolution line silhouette -->
            <g opacity="0.55">
                <!-- hunched figure -->
                <ellipse cx="42" cy="195" rx="6" ry="5" fill="none" stroke="#7c8abf" stroke-width="1.2"/>
                <line x1="42" y1="200" x2="38" y2="212" stroke="#7c8abf" stroke-width="1.4"/>
                <line x1="38" y1="212" x2="34" y2="222" stroke="#7c8abf" stroke-width="1.4"/>
                <line x1="38" y1="212" x2="44" y2="222" stroke="#7c8abf" stroke-width="1.4"/>
                <line x1="42" y1="200" x2="36" y2="207" stroke="#7c8abf" stroke-width="1.4"/>
                <line x1="42" y1="200" x2="48" y2="206" stroke="#7c8abf" stroke-width="1.4"/>
                <!-- arrow -->
                <line x1="55" y1="208" x2="75" y2="208" stroke="#7c8abf" stroke-width="1.2" stroke-dasharray="3,2"/>
                <!-- semi-upright -->
                <ellipse cx="90" cy="192" rx="6" ry="5" fill="none" stroke="#7c8abf" stroke-width="1.2"/>
                <line x1="90" y1="197" x2="88" y2="210" stroke="#7c8abf" stroke-width="1.4"/>
                <line x1="88" y1="210" x2="83" y2="222" stroke="#7c8abf" stroke-width="1.4"/>
                <line x1="88" y1="210" x2="93" y2="222" stroke="#7c8abf" stroke-width="1.4"/>
                <line x1="90" y1="197" x2="84" y2="205" stroke="#7c8abf" stroke-width="1.4"/>
                <line x1="90" y1="197" x2="96" y2="205" stroke="#7c8abf" stroke-width="1.4"/>
                <!-- arrow -->
                <line x1="103" y1="208" x2="123" y2="208" stroke="#7c8abf" stroke-width="1.2" stroke-dasharray="3,2"/>
                <!-- upright figure -->
                <ellipse cx="138" cy="188" rx="6" ry="5.5" fill="none" stroke="#a0aed4" stroke-width="1.5"/>
                <line x1="138" y1="193" x2="138" y2="210" stroke="#a0aed4" stroke-width="1.5"/>
                <line x1="138" y1="210" x2="132" y2="222" stroke="#a0aed4" stroke-width="1.5"/>
                <line x1="138" y1="210" x2="144" y2="222" stroke="#a0aed4" stroke-width="1.5"/>
                <line x1="138" y1="197" x2="131" y2="206" stroke="#a0aed4" stroke-width="1.5"/>
                <line x1="138" y1="197" x2="145" y2="206" stroke="#a0aed4" stroke-width="1.5"/>
            </g>
            <!-- Title -->
            <text x="100" y="46" text-anchor="middle" font-family="Arial Black, Helvetica Neue, sans-serif" font-size="30" font-weight="900" fill="white" letter-spacing="6">SAPIENS</text>
            <line x1="28" y1="55" x2="172" y2="55" stroke="white" stroke-width="0.5" opacity="0.3"/>
            <text x="100" y="70" text-anchor="middle" font-family="Arial, sans-serif" font-size="6.5" fill="#a0aed4" letter-spacing="1.5">A BRIEF HISTORY OF HUMANKIND</text>
            <!-- decorative arc -->
            <path d="M 40 155 Q 100 125 160 155" fill="none" stroke="#4a5480" stroke-width="0.8" opacity="0.6"/>
            <!-- author -->
            <line x1="48" y1="268" x2="152" y2="268" stroke="white" stroke-width="0.4" opacity="0.25"/>
            <text x="100" y="282" text-anchor="middle" font-family="Arial, Helvetica, sans-serif" font-size="9" fill="#a0aed4" letter-spacing="0.8">Yuval Noah Harari</text>
        </svg>
    </div>

    <div class="hero-cover-actions">
        <button class="btn-read" onclick="window.location='reader_sapiens'">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
            Читати
        </button>
        <button class="btn-listen">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg>
            Слухати
        </button>
        <button class="btn-fav">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
            <span class="btn-fav-text">Додати в обрані</span>
        </button>
    </div>
</div><!-- /page-cover-col -->

<!-- RIGHT: scrollable content -->
<div class="page-main-col">

<!-- Breadcrumb -->
<div class="breadcrumb">
    <a href="catalog_page">Каталог</a>
    <span class="breadcrumb-sep">›</span>
    <a href="catalog_page">Історія</a>
    <span class="breadcrumb-sep">›</span>
    <span class="breadcrumb-current">Сапієнс</span>
</div>

    <!-- Info -->
    <div class="hero-info">
        <div class="hero-category">Історія · Антропологія</div>
        <h1 class="hero-title">Сапієнс</h1>
        <p class="hero-author">Автор: <a href="#">Юваль Ной Харарі</a></p>

        <div class="hero-meta-row">
            <div class="hero-rating">
                <div class="hero-stars">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="#fbbf24" opacity="0.6"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                </div>
                <span class="hero-rating-val">4.7</span>
                <span class="hero-rating-count">(3 120 оцінок)</span>
            </div>
            <div class="hero-meta-divider"></div>
            <div class="hero-meta-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                20 хв читання
            </div>
            <div class="hero-meta-divider"></div>
            <span class="hero-badge top">БЕСТСЕЛЕР</span>
        </div>

        <p class="hero-desc">
            «Сапієнс» — книга, яка змінила мій погляд на людство. Обов'язкова до прочитання. — Білл Гейтс
        </p>

        <div class="hero-leaders-label">РЕКОМЕНДУЮТЬ ЛІДЕРИ</div>
        <div class="hero-leaders-row">
            <div class="leader-avatar">
                <img src="https://unavatar.io/twitter/billgates" alt="Білл Гейтс">
            </div>
            <div class="leader-avatar" style="margin-left:-8px;">
                <img src="https://unavatar.io/twitter/BarackObama" alt="Барак Обама">
            </div>
            <div class="leader-avatar" style="margin-left:-8px;">
                <img src="https://unavatar.io/twitter/zuck" alt="Марк Цукерберг">
            </div>
            <span class="hero-leaders-text">Білл Гейтс, Обама, Цукерберг та ще 18 лідерів</span>
        </div>
    </div>

<!-- TABS -->
<div class="tabs-wrapper">
    <div class="tabs-inner">
        <button class="tab-btn active" onclick="switchTab('ideas', this)">Що всередині</button>
        <button class="tab-btn" onclick="switchTab('about', this)">Про книгу</button>
        <button class="tab-btn" onclick="switchTab('author', this)">Про автора</button>
        <button class="tab-btn" onclick="switchTab('reviews', this)">Відгуки <span class="tab-count">38</span></button>
    </div>
</div>

<!-- CONTENT -->
<div class="content-wrapper">
    <div class="main-col">

        <!-- TAB: KEY IDEAS -->
        <div class="tab-panel active" id="panel-ideas">
            <div class="section-label">Скорочення</div>
            <h2 class="section-heading">8 тем книги</h2>
            <p class="section-sub">Натисніть на будь-яку — і читайте повний розбір</p>

            <div class="ideas-list">
                <div class="idea-card" onclick="window.location='reader_sapiens'">
                    <div class="idea-num">1</div>
                    <div class="idea-content">
                        <h3 class="idea-title">Когнітивна революція</h3>
                        <div class="idea-text">70 000 років тому людина була звичайним середнім хижаком. Що змінилось — і чому саме ми підкорили планету?</div>
                    </div>
                </div>
                <div class="idea-card" onclick="window.location='reader_sapiens'">
                    <div class="idea-num">2</div>
                    <div class="idea-content">
                        <h3 class="idea-title">Сільськогосподарська революція</h3>
                        <div class="idea-text">Харарі називає сільськогосподарську революцію найбільшою аферою в історії. Фермери жили гірше мисливців — то чому ж людство не повернулось назад?</div>
                    </div>
                </div>
                <div class="idea-card" onclick="window.location='reader_sapiens'">
                    <div class="idea-num">3</div>
                    <div class="idea-content">
                        <h3 class="idea-title">Уявні порядки</h3>
                        <div class="idea-text">Гроші, нації, права людини, компанії — всього цього не існує в природі. Як вигадки стали фундаментом цивілізації?</div>
                    </div>
                </div>
                <div class="idea-card" onclick="window.location='reader_sapiens'">
                    <div class="idea-num">4</div>
                    <div class="idea-content">
                        <h3 class="idea-title">Гроші — найуспішніша вигадка</h3>
                        <div class="idea-text">Долар вартий рівно стільки, скільки в нього вірять. Харарі пояснює чому гроші — найгеніальніша вигадка за всю історію людства.</div>
                    </div>
                </div>
                <div class="idea-card" onclick="window.location='reader_sapiens'">
                    <div class="idea-num">5</div>
                    <div class="idea-content">
                        <h3 class="idea-title">Релігії та імперії</h3>
                        <div class="idea-text">Що спільного між Римською імперією, ісламом і сучасним капіталізмом? Відповідь пояснює, як мільярди незнайомців живуть за одними правилами.</div>
                    </div>
                </div>
                <div class="idea-card" onclick="window.location='reader_sapiens'">
                    <div class="idea-num">6</div>
                    <div class="idea-content">
                        <h3 class="idea-title">Наукова революція</h3>
                        <div class="idea-text">500 років тому вчені були впевнені що знають усе. Один парадокс змінив це — і запустив найбільший прогрес в історії.</div>
                    </div>
                </div>
                <div class="idea-card" onclick="window.location='reader_sapiens'">
                    <div class="idea-num">7</div>
                    <div class="idea-content">
                        <h3 class="idea-title">Капіталізм і кредит</h3>
                        <div class="idea-text">Кредит — це гроші, яких не існує, під проекти, яких ще немає. Харарі пояснює чому ця вигадка побудувала сучасний світ.</div>
                    </div>
                </div>
                <div class="idea-card" onclick="window.location='reader_sapiens'">
                    <div class="idea-num">8</div>
                    <div class="idea-content">
                        <h3 class="idea-title">Чи стали ми щасливішими?</h3>
                        <div class="idea-text">Ми живемо довше, багатше і безпечніше за будь-яке попереднє покоління. Але чи стали ми щасливішими? Відповідь Харарі — несподівана.</div>
                    </div>
                </div>
            </div>

            <div class="quote-block">
                <span class="quote-mark">"</span>
                <p class="quote-text">Протягом своєї короткої історії Homo sapiens прийняв стільки рішень — і більшість з них були прийняті в повному незнанні їхніх наслідків.</p>
                <p class="quote-source">— Юваль Ной Харарі, Сапієнс</p>
            </div>
        </div>

        <!-- TAB: ABOUT -->
        <div class="tab-panel" id="panel-about">
            <div class="section-label">Огляд</div>
            <h2 class="section-heading">Про книгу</h2>
            <p class="section-sub">Що робить цю книгу особливою</p>
            <div class="about-text">
                <p>«Сапієнс» — одна з найбільш обговорюваних книг XXI століття. Юваль Ной Харарі, ізраїльський історик і професор Єврейського університету в Єрусалимі, стискає 70 000 років людської історії в 443 сторінки — і робить це так, що читаєш ніби захоплюючий роман.</p>
                <p>Книга відслідковує чотири великі революції: Когнітивну (70 000 р. тому), Сільськогосподарську (12 000 р. тому), об'єднання людства в єдину мережу через гроші, релігію та імперії, і Наукову революцію (500 р. тому). Кожна революція змінювала саму природу Homo sapiens — не генетично, а через зміну спільних наративів і уявних порядків.</p>
                <p>Найбільш провокативна ідея книги: гроші, нації, корпорації і права людини — не природні факти, а колективні вигадки. Вони існують лише тому, що достатньо людей вирішили в них вірити. Саме ця унікальна людська здатність вірити у колективні фікції дозволила нам кооперуватись у масштабах, недоступних жодному іншому виду.</p>
                <p>Понад 25 мільйонів проданих копій у 65 країнах. Переведена 45 мовами. Рекомендована Бараком Обамою, Біллом Гейтсом, Марком Цукербергом і Ілоном Маском. Книга стала обов'язковим читанням у провідних університетах світу.</p>
            </div>
        </div>

        <!-- TAB: AUTHOR -->
        <div class="tab-panel" id="panel-author">
            <div class="section-label">Автор</div>
            <h2 class="section-heading">Юваль Ной Харарі</h2>
            <p class="section-sub">Історик, філософ, професор, автор бестселерів</p>
            <div class="about-text">
                <p>Юваль Ной Харарі народився у 1976 році в Кірьят-Аті, Ізраїль. Захистив докторантуру з середньовічної воєнної історії в Оксфордському університеті у 2002 році. Сьогодні — повний професор Єврейського університету в Єрусалимі, де викладає курс «Всесвітня історія від початку часів до сьогодні».</p>
                <p>«Сапієнс» спочатку вийшов ізраїльською мовою у 2011 році і здобув шалену популярність в Ізраїлі. Коли у 2014 році книгу перекладено англійською, вона стала глобальним феноменом, що зробив академічного історика зіркою світового масштабу.</p>
                <p>Харарі є відкритим геєм. Він практикує випасанну медитацію щодня по дві години і стверджує, що саме медитація дозволяє йому бачити великі патерни в людській історії, які інші дослідники пропускають через надмірну зосередженість на деталях.</p>
                <p>Після «Сапієнса» Харарі написав «Homo Deus: Коротка історія майбутнього» (2015) і «21 урок для 21 століття» (2018). Разом ці три книги утворюють трилогію про минуле, майбутнє і теперішнє людства.</p>
            </div>
            <div class="author-card">
                <div class="author-header">
                    <div class="author-avatar">ЮХ</div>
                    <div>
                        <div class="author-name">Юваль Ной Харарі</div>
                        <div class="author-title">ynharari.com · @ylnharari</div>
                    </div>
                </div>
                <div class="author-bio">Ізраїльський історик, автор тріади про людство: «Сапієнс», «Homo Deus» і «21 урок для 21 століття». Досліджує перетин історії, біології, технологій і філософії. Виступає на World Economic Forum у Давосі.</div>
            </div>
        </div>

        <!-- TAB: REVIEWS -->
        <div class="tab-panel" id="panel-reviews">
            <div class="section-label">Спільнота</div>
            <h2 class="section-heading">Відгуки читачів</h2>
            <p class="section-sub">38 відгуків · середня оцінка 4.7 із 5</p>

            <div class="reviews-summary">
                <div class="reviews-big-score">
                    <div class="reviews-big-number">4.7</div>
                    <div class="reviews-big-stars">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" opacity="0.55"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                    </div>
                    <div class="reviews-total">38 відгуків</div>
                </div>
                <div class="reviews-bars">
                    <div class="reviews-bar-row"><span class="reviews-bar-label">5</span><div class="reviews-bar-track"><div class="reviews-bar-fill" style="width:74%"></div></div><span class="reviews-bar-pct">74%</span></div>
                    <div class="reviews-bar-row"><span class="reviews-bar-label">4</span><div class="reviews-bar-track"><div class="reviews-bar-fill" style="width:16%"></div></div><span class="reviews-bar-pct">16%</span></div>
                    <div class="reviews-bar-row"><span class="reviews-bar-label">3</span><div class="reviews-bar-track"><div class="reviews-bar-fill" style="width:7%"></div></div><span class="reviews-bar-pct">7%</span></div>
                    <div class="reviews-bar-row"><span class="reviews-bar-label">2</span><div class="reviews-bar-track"><div class="reviews-bar-fill" style="width:2%"></div></div><span class="reviews-bar-pct">2%</span></div>
                    <div class="reviews-bar-row"><span class="reviews-bar-label">1</span><div class="reviews-bar-track"><div class="reviews-bar-fill" style="width:1%"></div></div><span class="reviews-bar-pct">1%</span></div>
                </div>
            </div>

            <div class="review-form-block">
                <div class="review-form-title">Залишити відгук</div>
                <div class="star-picker" id="starPicker">
                    <button class="star-picker-btn" data-val="1" onclick="setStars(1)"><svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></button>
                    <button class="star-picker-btn" data-val="2" onclick="setStars(2)"><svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></button>
                    <button class="star-picker-btn" data-val="3" onclick="setStars(3)"><svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></button>
                    <button class="star-picker-btn" data-val="4" onclick="setStars(4)"><svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></button>
                    <button class="star-picker-btn" data-val="5" onclick="setStars(5)"><svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></button>
                </div>
                <textarea class="review-textarea" id="reviewText" placeholder="Поділіться враженнями від книги..."></textarea>
                <div class="review-form-footer">
                    <button class="review-submit-btn" onclick="submitReview()">Опублікувати відгук</button>
                </div>
            </div>

            <div class="reviews-list" id="reviewsList">
                <div class="review-card">
                    <div class="review-card-header">
                        <div class="review-userpic" style="background:linear-gradient(135deg,#0ea5e9,#6366f1)">ДМ</div>
                        <div class="review-user-info"><div class="review-username">Дмитро Мороз</div><div class="review-date">5 березня 2026</div></div>
                        <div class="review-stars"><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></div>
                    </div>
                    <div class="review-text">Ця книга змінила моє уявлення про те, що є «природним». Харарі переконливо показує: гроші, держава, права — все це колективні угоди. Розбір на TENBOOK — ідеальне введення, після якого захотілось прочитати всю книгу повністю.</div>
                    <div class="reviews-helpful">Корисно? <button onclick="this.textContent='Так (1)'">Так</button><button>Ні</button></div>
                </div>
                <div class="review-card">
                    <div class="review-card-header">
                        <div class="review-userpic" style="background:linear-gradient(135deg,#10b981,#059669)">НВ</div>
                        <div class="review-user-info"><div class="review-username">Наталія Власенко</div><div class="review-date">18 лютого 2026</div></div>
                        <div class="review-stars"><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></div>
                    </div>
                    <div class="review-text">Найпровокативніша книга, яку я читала за останні роки. Особливо вразило про сільськогосподарську революцію — ніколи не думала, що прогрес міг бути «найбільшою аферою». Формат TENBOOK передає суть блискуче.</div>
                    <div class="reviews-helpful">Корисно? <button onclick="this.textContent='Так (1)'">Так</button><button>Ні</button></div>
                </div>
                <div class="review-card">
                    <div class="review-card-header">
                        <div class="review-userpic" style="background:linear-gradient(135deg,#f59e0b,#d97706)">ОП</div>
                        <div class="review-user-info"><div class="review-username">Олег Павленко</div><div class="review-date">3 січня 2026</div></div>
                        <div class="review-stars"><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#f59e0b" stroke-width="2"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></div>
                    </div>
                    <div class="review-text">Дуже глибока книга, але деякі висновки Харарі здаються надто спрощеними. Проте для загального розуміння еволюції цивілізації — незамінна. TENBOOK добре вхопив ключові ідеї без втрати глибини.</div>
                    <div class="reviews-helpful">Корисно? <button onclick="this.textContent='Так (1)'">Так</button><button>Ні</button></div>
                </div>
                <div class="review-card">
                    <div class="review-card-header">
                        <div class="review-userpic" style="background:linear-gradient(135deg,#8b5cf6,#6d28d9)">СК</div>
                        <div class="review-user-info"><div class="review-username">Софія Кравченко</div><div class="review-date">27 листопада 2025</div></div>
                        <div class="review-stars"><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></div>
                    </div>
                    <div class="review-text">Читаю третій раз і щоразу відкриваю щось нове. Харарі ставить запитання, які я ніколи б не поставила сама. Чи стали ми щасливішими? Відповідь перевернула мій погляд на споживацтво і щастя. Рекомендую всім!</div>
                    <div class="reviews-helpful">Корисно? <button onclick="this.textContent='Так (1)'">Так</button><button>Ні</button></div>
                </div>
            </div>
        </div>

    </div>

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="sidebar-card">
            <div class="sidebar-card-title">Ваш прогрес</div>
            <div class="progress-ring-wrap">
                <div class="progress-circle">
                    <svg width="64" height="64" viewBox="0 0 64 64">
                        <circle cx="32" cy="32" r="26" fill="none" stroke="#f1f5f9" stroke-width="6"/>
                        <circle cx="32" cy="32" r="26" fill="none" stroke="#0ea5e9" stroke-width="6"
                            stroke-dasharray="163" stroke-dashoffset="147" stroke-linecap="round"/>
                    </svg>
                    <div class="progress-pct">10%</div>
                </div>
                <div>
                    <div class="progress-info-title">Вступ</div>
                    <div class="progress-info-sub">Залишилось ~18 хв</div>
                </div>
            </div>
            <button class="continue-btn" onclick="window.location='reader_sapiens'">Читати зараз</button>
        </div>

        <div class="sidebar-card">
            <div class="sidebar-card-title">Схожі книги</div>
            <div class="related-book" onclick="window.location='book_page_atomic_habits'">
                <div class="related-cover" style="background:#EBF8EF;position:relative;overflow:hidden;">
                    <img src="covers_ua/Atomic Habits.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;display:block;">
                </div>
                <div>
                    <div class="related-title">Атомні Звички</div>
                    <div class="related-author">Джеймс Клір</div>
                    <div class="related-rating">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                        4.9
                    </div>
                </div>
            </div>
            <div class="related-book" onclick="window.location='book_page_zero_to_one'">
                <div class="related-cover" style="background:#E4EBF5;position:relative;overflow:hidden;">
                    <img src="covers_ua/Zero to One.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;display:block;">
                </div>
                <div>
                    <div class="related-title">Від Нуля до Одиниці</div>
                    <div class="related-author">Пітер Тіль</div>
                    <div class="related-rating">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                        4.8
                    </div>
                </div>
            </div>
            <div class="related-book" onclick="window.location='book_page_7habits'">
                <div class="related-cover" style="background:#EEF4F8;position:relative;overflow:hidden;">
                    <img src="covers_ua/The 7 Habits.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;display:block;">
                </div>
                <div>
                    <div class="related-title">7 Навичок</div>
                    <div class="related-author">Стівен Кові</div>
                    <div class="related-rating">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                        4.8
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar-card">
            <div class="sidebar-card-title">Теги</div>
            <div class="tags-row">
                <span class="tag">Історія</span>
                <span class="tag">Антропологія</span>
                <span class="tag">Еволюція</span>
                <span class="tag">Цивілізація</span>
                <span class="tag">Філософія</span>
                <span class="tag">Суспільство</span>
                <span class="tag">Майбутнє</span>
            </div>
        </div>

        <div class="sidebar-card">
            <div class="sidebar-card-title">Поділитись</div>
            <div class="share-row">
                <button class="share-btn">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
                    Копіювати
                </button>
                <button class="share-btn">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.27h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.84a16 16 0 0 0 5.25 5.25l.82-1.39a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg>
                    Telegram
                </button>
            </div>
        </div>
    </aside>
</div><!-- /content-wrapper -->

</div><!-- /page-main-col -->
</div><!-- /page-layout -->
</main>

<div class="footer-note">© 2026 TENBOOK · Всі права захищені</div>

<script>
    function switchTab(name, btn) {
        document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
        document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
        btn.classList.add('active');
        document.getElementById('panel-' + name).classList.add('active');
    }

    let selectedStars = 0;

    function setStars(val) {
        selectedStars = val;
        document.querySelectorAll('.star-picker-btn').forEach(btn => {
            btn.classList.toggle('active', parseInt(btn.dataset.val) <= val);
        });
    }

    document.querySelectorAll('.star-picker-btn').forEach(btn => {
        btn.addEventListener('mouseenter', () => {
            const hval = parseInt(btn.dataset.val);
            document.querySelectorAll('.star-picker-btn').forEach(b => {
                b.style.color = parseInt(b.dataset.val) <= hval ? '#f59e0b' : '';
            });
        });
        btn.addEventListener('mouseleave', () => {
            document.querySelectorAll('.star-picker-btn').forEach(b => {
                b.style.color = '';
            });
        });
    });

    const gradients = [
        'linear-gradient(135deg,#0ea5e9,#6366f1)',
        'linear-gradient(135deg,#10b981,#059669)',
        'linear-gradient(135deg,#f59e0b,#d97706)',
        'linear-gradient(135deg,#8b5cf6,#6d28d9)',
        'linear-gradient(135deg,#ec4899,#be185d)',
    ];

    function submitReview() {
        const text = document.getElementById('reviewText').value.trim();
        if (!selectedStars) { alert('Оберіть оцінку від 1 до 5 зірок'); return; }
        if (!text) { alert('Напишіть текст відгуку'); return; }

        const starsHtml = Array.from({length: 5}, (_, i) =>
            i < selectedStars
                ? '<svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>'
                : '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#f59e0b" stroke-width="2"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>'
        ).join('');

        const grad = gradients[Math.floor(Math.random() * gradients.length)];
        const today = new Date().toLocaleDateString('uk-UA', {day:'numeric', month:'long', year:'numeric'});

        const card = document.createElement('div');
        card.className = 'review-card';
        card.innerHTML =
            '<div class="review-card-header">' +
                '<div class="review-userpic" style="background:' + grad + '">Я</div>' +
                '<div class="review-user-info">' +
                    '<div class="review-username">Ви</div>' +
                    '<div class="review-date">' + today + '</div>' +
                '</div>' +
                '<div class="review-stars">' + starsHtml + '</div>' +
            '</div>' +
            '<div class="review-text">' + text + '</div>' +
            '<div class="reviews-helpful">Корисно? <button onclick="this.textContent=\'Так (1)\'">Так</button><button>Ні</button></div>';

        const list = document.getElementById('reviewsList');
        list.insertBefore(card, list.firstChild);
        card.scrollIntoView({ behavior: 'smooth', block: 'start' });

        document.getElementById('reviewText').value = '';
        setStars(0);
        selectedStars = 0;
    }
</script>
</body>
</html>
