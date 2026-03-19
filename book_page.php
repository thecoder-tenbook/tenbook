<?php
$active_page = 'catalog';
// Determine book ID
if (!isset($book_id)) {
    $book_id = isset($_GET['id']) ? preg_replace('/[^a-z0-9\-]/', '', $_GET['id']) : '';
}
if (empty($book_id) || !file_exists("summaries/{$book_id}.json")) {
    header("Location: catalog_page"); exit;
}
$book = json_decode(file_get_contents("summaries/{$book_id}.json"), true);
$d = $book['display'];   // display metadata
$seo = $book['seo'];
// Reader URL: reader_{$book_id with dashes replaced by underscores}
$reader_url = 'reader_' . str_replace('-', '_', $book_id);
// Build stars HTML helper
function starsHtml($rating) {
    $html = '';
    for ($i = 1; $i <= 5; $i++) {
        $opacity = ($i <= floor($rating)) ? '1' : (($i == ceil($rating) && $rating != floor($rating)) ? '0.6' : '0.2');
        $html .= "<svg width=\"15\" height=\"15\" viewBox=\"0 0 24 24\" fill=\"#fbbf24\" opacity=\"{$opacity}\"><polygon points=\"12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26\"/></svg>";
    }
    return $html;
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($seo['page_title']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($seo['meta_description']) ?>">
    <link rel="canonical" href="https://tenbook.com.ua/book_page_<?= $book_id ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="book">
    <meta property="og:title" content="<?= htmlspecialchars($book['title']) ?> — короткий зміст | TENBOOK">
    <meta property="og:description" content="<?= htmlspecialchars($seo['og_description']) ?>">
    <meta property="og:url" content="https://tenbook.com.ua/book_page_<?= $book_id ?>">
    <meta property="og:site_name" content="TENBOOK">
    <meta property="og:image" content="<?= htmlspecialchars($seo['og_image']) ?>">
    <meta property="og:locale" content="uk_UA">
    <meta property="book:author" content="<?= htmlspecialchars($book['author']) ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($book['title']) ?> — короткий зміст | TENBOOK">
    <meta name="twitter:description" content="<?= htmlspecialchars($seo['meta_description']) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($seo['og_image']) ?>">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Book",
          "@id": "https://tenbook.com.ua/book_page_<?= $book_id ?>#book",
          "name": "<?= addslashes($book['title']) ?>",
          "alternateName": "<?= addslashes($book['original_title']) ?>",
          "author": {
            "@type": "Person",
            "name": "<?= addslashes($book['author']) ?>",
            "alternateName": "<?= addslashes($book['author_original']) ?>"
          },
          "inLanguage": "<?= $book['language'] ?>",
          "description": "<?= addslashes($seo['meta_description']) ?>",
          "genre": "<?= addslashes(implode(', ', $d['category_labels'])) ?>",
          "numberOfPages": <?= intval($book['pages']) ?>,
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "<?= $book['rating'] ?>",
            "reviewCount": "<?= $d['reviews_count'] ?>",
            "bestRating": "5",
            "worstRating": "1"
          }
        },
        {
          "@type": "Article",
          "@id": "https://tenbook.com.ua/book_page_<?= $book_id ?>#article",
          "headline": "<?= addslashes($book['title']) ?> — короткий зміст і ключові ідеї",
          "description": "<?= addslashes($seo['meta_description']) ?>",
          "about": { "@id": "https://tenbook.com.ua/book_page_<?= $book_id ?>#book" },
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
            { "@type": "ListItem", "position": 3, "name": "<?= addslashes($book['title']) ?>" }
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
            text-decoration: none;
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

        .author-header { display: flex; align-items: center; gap: 1rem; margin-bottom: 1.2rem; }
        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, #1B2E50 0%, #0ea5e9 100%);
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
            text-decoration: none;
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
        .review-card-header { display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.6rem; }
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

        /* about-book extras */
        .about-highlight {
            background: linear-gradient(135deg, rgba(14,165,233,0.04) 0%, rgba(139,92,246,0.04) 100%);
            border: 1px solid rgba(14,165,233,0.12);
            border-radius: 14px;
            padding: 1.4rem 1.6rem;
            margin: 1.5rem 0;
        }
        .about-highlight-label {
            font-size: 0.72rem;
            font-weight: 700;
            color: #0ea5e9;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 0.5rem;
        }
        .about-highlight-title {
            font-size: 1rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.5rem;
        }
        .about-highlight-text {
            font-size: 0.9rem;
            line-height: 1.75;
            color: #475569;
        }

        /* topic-tag alias for tag */
        .topic-tag {
            padding: 0.3rem 0.75rem;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            font-size: 0.75rem;
            color: #64748b;
            cursor: pointer;
            transition: all 0.2s;
        }
        .topic-tag:hover {
            background: rgba(14,165,233,0.06);
            border-color: rgba(14,165,233,0.3);
            color: #0ea5e9;
        }

        /* ── MOBILE ── */
        @media (max-width: 768px) {
        .nav-header-btn { padding: 0.55rem 1.4rem; background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%); color: white; border: none; border-radius: 20px; font-weight: 600; cursor: pointer; text-decoration: none; font-size: 0.9rem; transition: opacity 0.2s; }
        .nav-header-btn:hover { opacity: 0.9; }
        @media (max-width: 768px) { }
            .btn-primary { padding: 0.5rem 1rem; font-size: 0.82rem; }
            .page-layout { grid-template-columns: 1fr; padding: 0; gap: 0; }
            .page-cover-col { position: static; padding: 1.4rem 1.2rem 0; gap: 0.8rem; }
            .hero-cover-actions { flex-direction: row; flex-wrap: nowrap; gap: 0.6rem; }
            .btn-read { flex: 1; padding: 0.8rem 0.6rem; font-size: 0.88rem; }
            .btn-listen { flex: 1; padding: 0.8rem 0.6rem; font-size: 0.88rem; }
            .btn-fav { display: flex; flex: 0 0 auto; width: 48px; padding: 0; justify-content: center; }
            .btn-fav-text { display: none; }
            .breadcrumb { padding: 1rem 1.2rem 0; font-size: 0.78rem; }
            .hero-info { padding: 0.8rem 1.2rem 0; min-width: 0; }
            .hero-title { font-size: 1.6rem; letter-spacing: -0.3px; }
            .hero-author { margin-bottom: 1rem; font-size: 0.88rem; }
            .hero-meta-row { gap: 0.75rem; margin-bottom: 1.2rem; }
            .hero-meta-divider { display: none; }
            .hero-rating-count { display: none; }
            .hero-desc { font-size: 0.88rem; margin-bottom: 1.2rem; }
            .hero-stats { gap: 0.6rem; margin: 0 -1.2rem 1.2rem; padding: 0 1.2rem 2px; flex-wrap: nowrap; overflow-x: auto; -webkit-overflow-scrolling: touch; scrollbar-width: none; }
            .hero-stats::-webkit-scrollbar { display: none; }
            .hero-stat-chip { font-size: 0.76rem; padding: 0.4rem 0.8rem; white-space: nowrap; flex-shrink: 0; }
            .hero-leaders-row { margin-bottom: 0; }
            .tabs-wrapper { top: 56px; }
            .tabs-inner { padding: 0 0.5rem; overflow-x: auto; -webkit-overflow-scrolling: touch; scrollbar-width: none; }
            .tabs-inner::-webkit-scrollbar { display: none; }
            .tab-btn { padding: 0.85rem 1rem; font-size: 0.83rem; }
            .content-wrapper { grid-template-columns: 1fr; padding: 1.5rem 1.2rem 3rem; gap: 2rem; }
            .sidebar { position: static; }
            .idea-card { padding: 1.1rem 1.1rem; gap: 0.85rem; }
            .idea-num { width: 36px; height: 36px; border-radius: 10px; font-size: 0.88rem; }
            .idea-title { font-size: 0.88rem; }
            .idea-text { font-size: 0.8rem; }
            .quote-block { padding: 1.4rem 1.2rem; }
            .quote-text { font-size: 0.92rem; }
            .section-heading { font-size: 1.2rem; }
            .author-card { padding: 1.2rem; }
            .share-row { gap: 0.4rem; }
            .share-btn { font-size: 0.74rem; padding: 0.55rem 0.4rem; }
            .reviews-summary { grid-template-columns: 1fr; gap: 1.2rem; }
            .reviews-big-stars { justify-content: flex-start; }
        }

        /* ── TABLET ── */
        @media (min-width: 769px) and (max-width: 1024px) {
            .nav-lang { display: none; }
            .page-layout { grid-template-columns: 220px 1fr; gap: 2rem; padding: 0 1.5rem; }
            .content-wrapper { grid-template-columns: 1fr 240px; gap: 1.8rem; }
            .hero-title { font-size: 2rem; }
        }
            .btn-fav.active { color: #e11d48; border-color: #fecdd3; background: #fff1f2; }
        .btn-fav.active svg { fill: #e11d48; stroke: #e11d48; }
    </style>
<?php include 'header_styles.php'; ?>
</head>
<body data-book-id="<?= str_replace('-', '_', $book_id) ?>">
<?php include 'header.php'; ?>
<!-- PAGE LAYOUT -->
<main style="padding-top: 96px;">
<div class="page-layout">

<!-- LEFT: sticky cover -->
<div class="page-cover-col">
    <div class="hero-cover" style="background:<?= htmlspecialchars($book['cover_bg']) ?>;position:relative;overflow:hidden;">
        <img src="<?= htmlspecialchars($book['cover']) ?>" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;display:block;">
    </div>

    <div class="hero-cover-actions">
        <a class="btn-read" href="<?= $reader_url ?>">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
            Читати
        </a>
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
    <a href="catalog_page"><?= htmlspecialchars($d['breadcrumb_category']) ?></a>
    <span class="breadcrumb-sep">›</span>
    <span class="breadcrumb-current"><?= htmlspecialchars($book['title']) ?></span>
</div>

    <!-- Info -->
    <div class="hero-info">
        <div class="hero-category"><?= implode(' · ', array_map('htmlspecialchars', $d['category_labels'])) ?></div>
        <h1 class="hero-title"><?= htmlspecialchars($book['title']) ?></h1>
        <p class="hero-author">Автор: <a href="#"><?= htmlspecialchars($book['author']) ?></a></p>

        <div class="hero-meta-row">
            <div class="hero-rating">
                <div class="hero-stars">
                    <?= starsHtml($book['rating']) ?>
                </div>
                <span class="hero-rating-val"><?= $book['rating'] ?></span>
                <span class="hero-rating-count">(<?= number_format($d['reviews_count'] * 91, 0, '.', ' ') ?> оцінок)</span>
            </div>
            <div class="hero-meta-divider"></div>
            <div class="hero-meta-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <?= $book['read_time_minutes'] ?> хв читання
            </div>
            <div class="hero-meta-divider"></div>
            <span class="hero-badge top"><?= htmlspecialchars(strtoupper($d['badge'])) ?></span>
        </div>

        <p class="hero-desc">
            <?= htmlspecialchars($d['hero_desc']) ?>
        </p>

        <div class="hero-leaders-label">РЕКОМЕНДУЮТЬ ЛІДЕРИ</div>
        <div class="hero-leaders-row">
            <?php foreach($d['leaders'] as $i => $leader): ?>
            <div class="leader-avatar"<?= $i > 0 ? ' style="margin-left:-8px;"' : '' ?>>
                <img src="https://unavatar.io/twitter/<?= htmlspecialchars($leader['twitter']) ?>" alt="<?= htmlspecialchars($leader['name']) ?>">
            </div>
            <?php endforeach; ?>
            <span class="hero-leaders-text"><?= htmlspecialchars($d['leaders_text']) ?></span>
        </div>
    </div>

<!-- TABS -->
<div class="tabs-wrapper">
    <div class="tabs-inner">
        <button class="tab-btn active" onclick="switchTab('ideas', this)">Що всередині</button>
        <button class="tab-btn" onclick="switchTab('about', this)">Про книгу</button>
        <button class="tab-btn" onclick="switchTab('author', this)">Про автора</button>
        <button class="tab-btn" onclick="switchTab('reviews', this)">Відгуки <span class="tab-count"><?= $d['reviews_count'] ?></span></button>
    </div>
</div>

<!-- CONTENT -->
<div class="content-wrapper">
    <div class="main-col">

        <!-- TAB: KEY IDEAS -->
        <div class="tab-panel active" id="panel-ideas">
            <div class="section-label">Скорочення</div>
            <h2 class="section-heading"><?= count($book['klyuchovi_ideyi']) ?> тем книги</h2>
            <p class="section-sub">Натисніть на будь-яку — і читайте повний розбір</p>

            <div class="ideas-list">
                <?php foreach($book['klyuchovi_ideyi'] as $idx => $idea):
                    $num = isset($idea['num']) ? $idea['num'] : (isset($idea['number']) ? $idea['number'] : ($idx+1));
                ?>
                <div class="idea-card" onclick="window.location='<?= $reader_url ?>'">
                    <div class="idea-num"><?= $num ?></div>
                    <div class="idea-content">
                        <h3 class="idea-title"><?= htmlspecialchars($idea['title']) ?></h3>
                        <div class="idea-text"><?= htmlspecialchars(mb_substr($idea['content'], 0, 150)) ?>...</div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <?php if (isset($book['vysnovok']['odna_fraza']) && $book['vysnovok']['odna_fraza']): ?>
            <div class="quote-block">
                <span class="quote-mark">"</span>
                <p class="quote-text"><?= htmlspecialchars($book['vysnovok']['odna_fraza']) ?></p>
                <p class="quote-source">— <?= htmlspecialchars($book['author']) ?>, <?= htmlspecialchars($book['title']) ?></p>
            </div>
            <?php endif; ?>
        </div>

        <!-- TAB: ABOUT -->
        <div class="tab-panel" id="panel-about">
            <div class="section-label">Огляд</div>
            <h2 class="section-heading">Про книгу</h2>
            <p class="section-sub">Що робить цю книгу особливою</p>
            <div class="about-text">
                <?php
                $korotko = $book['zagalna_informatsia']['korotko'];
                foreach(explode("\n\n", $korotko) as $para) {
                    if(trim($para)) echo '<p>' . htmlspecialchars(trim($para)) . '</p>';
                }
                ?>
            </div>

            <?php if (!empty($book['zagalna_informatsia']['chomu_varta'])): ?>
            <div class="about-highlight">
                <div class="about-highlight-label">Чому варта читання</div>
                <div class="about-highlight-text"><?= htmlspecialchars($book['zagalna_informatsia']['chomu_varta']) ?></div>
            </div>
            <?php endif; ?>

            <?php if (!empty($book['zagalna_informatsia']['komu_pidide'])): ?>
            <div class="about-highlight">
                <div class="about-highlight-label">Кому підійде</div>
                <div class="about-highlight-text"><?= htmlspecialchars($book['zagalna_informatsia']['komu_pidide']) ?></div>
            </div>
            <?php endif; ?>

            <?php if (!empty($book['holovna_metafora'])): ?>
            <div class="about-highlight">
                <div class="about-highlight-label">Головна метафора</div>
                <div class="about-highlight-title"><?= htmlspecialchars($book['holovna_metafora']['nazva']) ?></div>
                <div class="about-highlight-text"><?= htmlspecialchars($book['holovna_metafora']['opis']) ?></div>
            </div>
            <?php endif; ?>
        </div>

        <!-- TAB: AUTHOR -->
        <div class="tab-panel" id="panel-author">
            <div class="section-label">Автор</div>
            <h2 class="section-heading"><?= htmlspecialchars($book['author']) ?></h2>
            <p class="section-sub"><?= htmlspecialchars($d['author_subtitle']) ?></p>
            <div class="about-text">
                <?php
                $bio = $book['pro_avtora']['bio'];
                foreach(explode("\n\n", $bio) as $para) {
                    if(trim($para)) echo '<p>' . htmlspecialchars(trim($para)) . '</p>';
                }
                ?>
            </div>
        </div>

        <!-- TAB: REVIEWS -->
        <div class="tab-panel" id="panel-reviews">
            <div class="section-label">Спільнота</div>
            <h2 class="section-heading">Відгуки читачів</h2>
            <p class="section-sub"><?= $d['reviews_count'] ?> відгуків · середня оцінка <?= $d['reviews_rating'] ?> із 5</p>

            <div class="reviews-summary">
                <div class="reviews-big-score">
                    <div class="reviews-big-number"><?= $d['reviews_rating'] ?></div>
                    <div class="reviews-big-stars">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" opacity="0.55"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                    </div>
                    <div class="reviews-total"><?= $d['reviews_count'] ?> відгуків</div>
                </div>
                <div class="reviews-bars">
                    <div class="reviews-bar-row"><span class="reviews-bar-label">5</span><div class="reviews-bar-track"><div class="reviews-bar-fill" style="width:71%"></div></div><span class="reviews-bar-pct">71%</span></div>
                    <div class="reviews-bar-row"><span class="reviews-bar-label">4</span><div class="reviews-bar-track"><div class="reviews-bar-fill" style="width:18%"></div></div><span class="reviews-bar-pct">18%</span></div>
                    <div class="reviews-bar-row"><span class="reviews-bar-label">3</span><div class="reviews-bar-track"><div class="reviews-bar-fill" style="width:7%"></div></div><span class="reviews-bar-pct">7%</span></div>
                    <div class="reviews-bar-row"><span class="reviews-bar-label">2</span><div class="reviews-bar-track"><div class="reviews-bar-fill" style="width:3%"></div></div><span class="reviews-bar-pct">3%</span></div>
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
                        <div class="review-userpic" style="background:linear-gradient(135deg,#0ea5e9,#6366f1)">АК</div>
                        <div class="review-user-info"><div class="review-username">Андрій Коваль</div><div class="review-date">10 березня 2026</div></div>
                        <div class="review-stars"><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></div>
                    </div>
                    <div class="review-text">Ця книга змінила моє ставлення до помилок. Раніше я намагався їх приховати або виправдати. Тепер — аналізую і записую правило. Культура Bridgewater звучить як щось із антиутопії, але логіка залізна. TENBOOK передав суть точно — після розбору захотілось прочитати оригінал повністю.</div>
                    <div class="reviews-helpful">Корисно? <button onclick="this.textContent='Так (1)'">Так</button><button>Ні</button></div>
                </div>
                <div class="review-card">
                    <div class="review-card-header">
                        <div class="review-userpic" style="background:linear-gradient(135deg,#10b981,#059669)">МГ</div>
                        <div class="review-user-info"><div class="review-username">Марія Гречко</div><div class="review-date">25 лютого 2026</div></div>
                        <div class="review-stars"><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor" opacity="0.3"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></div>
                    </div>
                    <div class="review-text">Концепція «радикальної правдивості» спочатку здалась мені жорсткою. Але потім зрозуміла: в більшості команд люди витрачають колосальну енергію на «корпоративну дипломатію» замість реальної роботи. Даліо пропонує альтернативу. Чи підходить вона всім — питання. Але читати захопливо.</div>
                    <div class="reviews-helpful">Корисно? <button onclick="this.textContent='Так (1)'">Так</button><button>Ні</button></div>
                </div>
                <div class="review-card">
                    <div class="review-card-header">
                        <div class="review-userpic" style="background:linear-gradient(135deg,#f59e0b,#d97706)">ВС</div>
                        <div class="review-user-info"><div class="review-username">Василь Стельмах</div><div class="review-date">8 січня 2026</div></div>
                        <div class="review-stars"><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></div>
                    </div>
                    <div class="review-text">Найкраща бізнес-книга, яку я читав за останні три роки. П'ятирівневий процес досягнення цілей — золото. Я одразу застосував його до стратегії нашої компанії і виявив, що ми роками вирішували симптоми, а не причини. Дякую TENBOOK за якісний розбір.</div>
                    <div class="reviews-helpful">Корисно? <button onclick="this.textContent='Так (1)'">Так</button><button>Ні</button></div>
                </div>
                <div class="review-card">
                    <div class="review-card-header">
                        <div class="review-userpic" style="background:linear-gradient(135deg,#8b5cf6,#6d28d9)">ОЛ</div>
                        <div class="review-user-info"><div class="review-username">Олена Лисенко</div><div class="review-date">15 грудня 2025</div></div>
                        <div class="review-stars"><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#f59e0b" stroke-width="2"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></div>
                    </div>
                    <div class="review-text">Деякі ідеї здаються неможливими у реальному житті — особливо повна прозорість. Але формула «Біль + Рефлексія = Прогрес» змінила моє ставлення до невдач. Тепер кожна помилка — не трагедія, а матеріал для аналізу. Це вже коштує прочитаного.</div>
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
                            stroke-dasharray="163" stroke-dashoffset="147" stroke-linecap="round" id="progressArc"/>
                    </svg>
                    <div class="progress-pct" id="progressPct">0%</div>
                </div>
                <div>
                    <div class="progress-info-title" id="progressTitle"><?= htmlspecialchars($book['title']) ?></div>
                    <div class="progress-info-sub">Залишилось ~<?= $book['read_time_minutes'] ?> хв</div>
                </div>
            </div>
            <button class="continue-btn" onclick="window.location='<?= $reader_url ?>'">Читати зараз</button>
        </div>

        <div class="sidebar-card">
            <div class="sidebar-card-title">Схожі книги</div>
            <?php foreach($d['related_books'] as $related): ?>
            <a class="related-book" href="<?= htmlspecialchars($related['href']) ?>">
                <div class="related-cover" style="background:<?= htmlspecialchars($related['cover_bg']) ?>;position:relative;overflow:hidden;">
                    <img src="<?= htmlspecialchars($related['cover']) ?>" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;display:block;">
                </div>
                <div class="related-info">
                    <div class="related-title"><?= htmlspecialchars($related['title']) ?></div>
                    <div class="related-author"><?= htmlspecialchars($related['author']) ?></div>
                    <div class="related-rating">
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="#f59e0b"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                        <?= $related['rating'] ?>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>

        <div class="sidebar-card">
            <div class="sidebar-card-title">Теми</div>
            <div class="tags-row">
                <?php foreach($book['tags'] as $tag): ?>
                <span class="topic-tag"><?= htmlspecialchars($tag) ?></span>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="sidebar-card">
            <div class="sidebar-card-title">Поділитись</div>
            <div class="share-row">
                <button class="share-btn" onclick="if(navigator.share){navigator.share({title:document.title,url:location.href})}else{navigator.clipboard.writeText(location.href)}">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"/><polyline points="16 6 12 2 8 6"/><line x1="12" y1="2" x2="12" y2="15"/></svg>
                    Поділитись
                </button>
                <button class="share-btn" onclick="navigator.clipboard.writeText(location.href)">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
                    Копіювати
                </button>
            </div>
        </div>
    </aside>
</div>

</div><!-- /page-main-col -->
</div><!-- /page-layout -->
</main>

<div class="footer-note">
    TENBOOK — стислі розбори найкращих книг українською · 2026
</div>

<script>
function switchTab(id, btn) {
    document.querySelectorAll('.tab-panel').forEach(function(p) { p.classList.remove('active'); });
    document.querySelectorAll('.tab-btn').forEach(function(b) { b.classList.remove('active'); });
    document.getElementById('panel-' + id).classList.add('active');
    btn.classList.add('active');
}

var selectedStars = 0;
function setStars(val) {
    selectedStars = val;
    document.querySelectorAll('.star-picker-btn').forEach(function(btn) {
        btn.classList.toggle('active', parseInt(btn.dataset.val) <= val);
    });
}

function submitReview() {
    var text = document.getElementById('reviewText').value.trim();
    if (!text || !selectedStars) { alert('Оберіть оцінку і напишіть відгук'); return; }
    var stars = '';
    for (var i = 0; i < selectedStars; i++) {
        stars += '<svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>';
    }
    var card = document.createElement('div');
    card.className = 'review-card';
    card.innerHTML = '<div class="review-card-header"><div class="review-userpic" style="background:linear-gradient(135deg,#0ea5e9,#8b5cf6)">Я</div><div class="review-user-info"><div class="review-username">Ви</div><div class="review-date">Щойно</div></div><div class="review-stars">' + stars + '</div></div><div class="review-text">' + text + '</div>';
    document.getElementById('reviewsList').prepend(card);
    document.getElementById('reviewText').value = '';
    setStars(0);
}
</script>
<script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore-compat.js"></script>
<script>
(function() {
    var db = firebase.firestore();
    var currentUser = null;
    var bookId = '<?= str_replace('-', '_', $book_id) ?>';

    firebase.auth().onAuthStateChanged(function(user) {
        currentUser = user;
        if (user) { loadFavoriteState(); loadProgress(); }
    });

    function loadFavoriteState() {
        if (!currentUser) return;
        var btn = document.querySelector('.btn-fav');
        if (!btn) return;
        db.collection('users').doc(currentUser.uid).get().then(function(doc) {
            var favs = doc.exists ? (doc.data().favorites || []) : [];
            if (favs.indexOf(bookId) !== -1) {
                btn.classList.add('active');
                var txt = btn.querySelector('.btn-fav-text');
                if (txt) txt.textContent = 'В обраних';
            }
        });
    }

    function loadProgress() {
        if (!currentUser) return;
        db.collection('users').doc(currentUser.uid).collection('progress').doc(bookId).get().then(function(doc) {
            if (!doc.exists) return;
            var data = doc.data();
            var pct = data.percent || 0;
            var arcEl = document.getElementById('progressArc');
            var pctEl = document.getElementById('progressPct');
            var subEl = document.querySelector('.progress-info-sub');
            if (arcEl) {
                var circumference = 163;
                arcEl.setAttribute('stroke-dashoffset', circumference - (circumference * pct / 100));
            }
            if (pctEl) pctEl.textContent = pct + '%';
            if (subEl && pct > 0) {
                var remaining = Math.round(<?= $book['read_time_minutes'] ?> * (1 - pct/100));
                subEl.textContent = remaining > 0 ? 'Залишилось ~' + remaining + ' хв' : 'Прочитано!';
            }
        });
    }

    function toggleFavorite() {
        if (!currentUser) { window.location.href = 'cabinet'; return; }
        var btn = document.querySelector('.btn-fav');
        var ref = db.collection('users').doc(currentUser.uid);
        ref.get().then(function(doc) {
            var favs = doc.exists ? (doc.data().favorites || []) : [];
            var idx = favs.indexOf(bookId);
            var txt = btn.querySelector('.btn-fav-text');
            if (idx === -1) {
                favs.push(bookId);
                btn.classList.add('active');
                if (txt) txt.textContent = 'В обраних';
            } else {
                favs.splice(idx, 1);
                btn.classList.remove('active');
                if (txt) txt.textContent = 'Додати в обрані';
            }
            return ref.set({ favorites: favs }, { merge: true });
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        var btn = document.querySelector('.btn-fav');
        if (btn) btn.addEventListener('click', toggleFavorite);
    });
})();
</script>
</body>
</html>
