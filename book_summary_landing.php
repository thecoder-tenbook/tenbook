<?php $active_page = 'landing'; ?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TENBOOK - Читай як лідери</title>
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
            overflow-x: hidden;
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

        .hero {
            max-width: 1400px;
            margin: 0 auto;
            padding: 10rem 2rem 6rem;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -20%;
            right: -10%;
            width: 700px;
            height: 700px;
            background: radial-gradient(circle, rgba(14, 165, 233, 0.15) 0%, rgba(14, 165, 233, 0.05) 50%, transparent 70%);
            border-radius: 50%;
            animation: float-bg 20s ease-in-out infinite;
            z-index: 0;
            display: none;
        }

        .hero::after {
            content: '';
            position: absolute;
            bottom: -20%;
            left: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(139, 92, 246, 0.15) 0%, rgba(139, 92, 246, 0.05) 50%, transparent 70%);
            border-radius: 50%;
            animation: float-bg 25s ease-in-out infinite reverse;
            z-index: 0;
            display: none;
        }

        @keyframes float-bg {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }
            33% {
                transform: translate(30px, -30px) scale(1.1);
            }
            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
        }

        .hero-particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
            display: none;
        }

        .particle {
            position: absolute;
            width: 8px;
            height: 8px;
            background: linear-gradient(135deg, #0ea5e9, #8b5cf6);
            border-radius: 50%;
            opacity: 0.4;
            animation: particle-float 15s ease-in-out infinite;
            box-shadow: 0 0 10px rgba(14, 165, 233, 0.5);
        }

        .particle:nth-child(1) {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
            animation-duration: 12s;
        }

        .particle:nth-child(2) {
            top: 60%;
            left: 80%;
            animation-delay: 2s;
            animation-duration: 15s;
        }

        .particle:nth-child(3) {
            top: 40%;
            left: 60%;
            animation-delay: 4s;
            animation-duration: 18s;
        }

        .particle:nth-child(4) {
            top: 70%;
            left: 30%;
            animation-delay: 6s;
            animation-duration: 20s;
        }

        .particle:nth-child(5) {
            top: 30%;
            left: 90%;
            animation-delay: 8s;
            animation-duration: 14s;
        }

        @keyframes particle-float {
            0%, 100% {
                transform: translateY(0) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 0.3;
            }
            50% {
                transform: translateY(-100px) translateX(50px);
                opacity: 0.6;
            }
            90% {
                opacity: 0.3;
            }
        }

        .hero-content {
            text-align: center;
            max-width: 900px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .hero-badge {
            display: inline-block;
            padding: 0.5rem 1.2rem;
            background: linear-gradient(135deg, #0ea5e920 0%, #8b5cf620 100%);
            border: 1px solid #0ea5e960;
            border-radius: 50px;
            color: #0ea5e9;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 2rem;
            animation: pulse 3s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .hero h1 {
            font-size: 4.5rem;
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            letter-spacing: -2px;
        }

        .hero h1 .gradient-text {
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 50%, #ec4899 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            display: inline-block;
        }

        .hero p {
            font-size: 1.4rem;
            color: #64748b;
            margin-bottom: 2.5rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-bottom: 4rem;
        }

        .btn-secondary {
            background: white;
            color: #0ea5e9;
            padding: 0.75rem 1.5rem;
            border: 2px solid #0ea5e9;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-secondary:hover {
            background: #0ea5e9;
            color: white;
        }

        .floating-books {
            position: relative;
            height: 400px;
            margin-top: 3rem;
        }

        .book-3d {
            position: absolute;
            background: white;
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s;
            cursor: pointer;
            width: 280px;
        }

        .book-3d:hover {
            transform: translateY(-10px) scale(1.05);
        }

        .book-3d:nth-child(1) {
            top: 50px;
            left: 10%;
            animation: float 8s ease-in-out infinite;
        }

        .book-3d:nth-child(2) {
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 320px;
            animation: float 8s ease-in-out infinite 2s;
        }

        .book-3d:nth-child(3) {
            top: 50px;
            right: 10%;
            animation: float 8s ease-in-out infinite 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-30px); }
        }

        .book-content {
            display: flex;
            gap: 1rem;
            align-items: flex-start;
        }

        .book-cover-3d {
            width: 90px;
            height: 130px;
            border-radius: 8px;
            position: relative;
            flex-shrink: 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }

        .book-cover-3d::before {
            content: '';
            position: absolute;
            top: 0;
            left: -5px;
            width: 5px;
            height: 100%;
            background: linear-gradient(90deg, rgba(0,0,0,0.3), transparent);
            border-radius: 2px 0 0 2px;
        }

        .book-info h3 {
            font-size: 1.1rem;
            margin-bottom: 0.3rem;
            color: #1a1a1a;
            font-weight: 700;
        }

        .book-author {
            font-size: 0.9rem;
            color: #64748b;
            margin-bottom: 0.5rem;
        }

        .recommended-by {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 0.8rem;
            padding-top: 0.8rem;
            border-top: 1px solid #e2e8f0;
        }

        .avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: linear-gradient(135deg, #0ea5e9, #8b5cf6);
        }

        .recommender-label {
            font-size: 0.65rem;
            color: #94a3b8;
            font-weight: 400;
            letter-spacing: 0.03em;
            line-height: 1.2;
        }

        .recommender-name {
            font-size: 0.85rem;
            color: #0ea5e9;
            font-weight: 600;
        }

        .celebrities {
            background: linear-gradient(135deg, #0ea5e905 0%, #8b5cf605 100%);
            padding: 6rem 2rem;
        }

        .celebrities-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-header { text-align: center; margin-bottom: 3rem; }

        .section-header h2 {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        .section-header p {
            font-size: 0.95rem;
            color: #64748b;
        }

        .celebrity-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .celebrity-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s;
            cursor: pointer;
        }

        .celebrity-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .celebrity-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto 1rem;
            background: linear-gradient(135deg, #0ea5e9, #8b5cf6);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: white;
        }

        .celebrity-name {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 0.3rem;
        }

        .celebrity-title {
            font-size: 0.9rem;
            color: #64748b;
            margin-bottom: 1rem;
        }

        .books-count {
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .celebrity-showcase {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            margin-bottom: 2rem;
            display: grid;
            grid-template-columns: 280px 1fr;
            grid-template-rows: auto auto 1fr;
            grid-template-areas:
                "celeb-profile celeb-books"
                "celeb-quote   celeb-books"
                "celeb-btn     celeb-books";
            column-gap: 3rem;
            row-gap: 1.5rem;
            align-items: start;
            transition: all 0.3s;
        }

        .celebrity-showcase:hover {
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }

        .celeb-profile {
            grid-area: celeb-profile;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .celeb-quote-wrap { grid-area: celeb-quote; }
        .celeb-books { grid-area: celeb-books; }
        .celeb-btn { grid-area: celeb-btn; }

        .celebrity-photo {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .celebrity-info h3 {
            font-size: 1.5rem;
            font-weight: 800;
            margin-bottom: 0.3rem;
        }

        .celebrity-info p {
            color: #64748b;
            margin-bottom: 0;
        }

        .celebrity-quote {
            font-style: italic;
            color: #0ea5e9;
            font-size: 0.95rem;
            padding: 1rem;
            background: #f8fafc;
            border-radius: 8px;
        }

        .books-horizontal {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .book-item-h {
            background: #f8fafc;
            border-radius: 12px;
            padding: 1.2rem;
            transition: all 0.3s;
            cursor: pointer;
            position: relative;
        }

        .book-item-h:hover {
            background: white;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }

        .book-details {
            position: relative;
        }

        .book-details h4 {
            font-size: 0.95rem;
            font-weight: 700;
            margin-bottom: 0.3rem;
            color: #1a1a1a;
        }

        .book-details p {
            font-size: 0.85rem;
            color: #64748b;
        }

        .book-cover-h {
            width: 100%;
            aspect-ratio: 2 / 3;
            border-radius: 8px;
            margin-bottom: 1rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
        }

        .read-icon-btn {
            position: absolute;
            bottom: 0.8rem;
            right: 0.8rem;
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            border-radius: 50%;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            transition: all 0.3s;
            opacity: 1;
            box-shadow: 0 5px 20px rgba(14, 165, 233, 0.4);
        }

        .read-icon-btn:hover {
            transform: scale(1.15);
            box-shadow: 0 8px 30px rgba(14, 165, 233, 0.6);
        }

        .read-icon-btn:active {
            transform: scale(0.95);
        }

        .view-all-btn {
            display: inline-block;
            text-decoration: none;
            text-align: center;
            margin-top: 1.2rem;
            padding: 0.5rem 1.2rem;
            background: transparent;
            border: 1.5px solid rgba(14, 165, 233, 0.45);
            color: #0ea5e9;
            border-radius: 20px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.25s;
            font-size: 0.8rem;
            letter-spacing: 0.2px;
        }

        .view-all-btn:hover {
            background: #0ea5e9;
            border-color: #0ea5e9;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(14, 165, 233, 0.25);
        }

        .new-releases {
            padding: 6rem 2rem;
            background: white;
        }

        .new-releases-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .books-showcase {
            display: flex;
            flex-wrap: nowrap;
            gap: 1.5rem;
            margin-top: 2.5rem;
            overflow-x: auto;
            padding-bottom: 1rem;
        }

        .books-showcase::-webkit-scrollbar {
            height: 4px;
        }

        .books-showcase::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }

        .book-card-large {
            background: white;
            border-radius: 16px;
            padding: 1.2rem;
            transition: all 0.3s;
            cursor: pointer;
            flex: 0 0 210px;
            display: flex;
            flex-direction: column;
        }

        .book-card-large:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .book-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.15rem 0.45rem;
            background: rgba(14, 165, 233, 0.08);
            color: #0ea5e9;
            border: 1px solid rgba(14, 165, 233, 0.25);
            border-radius: 20px;
            font-size: 0.58rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .book-cover-large {
            width: 100%;
            aspect-ratio: 2 / 3;
            border-radius: 12px;
            margin-bottom: 1.2rem;
            position: relative;
            overflow: hidden;
        }

        .book-info-large {
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .book-category {
            font-size: 0.7rem;
            font-weight: 700;
            color: #0ea5e9;
            letter-spacing: 1px;
            margin-bottom: 0.4rem;
        }

        .book-info-large h3 {
            font-size: 1rem;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 0.3rem;
            line-height: 1.3;
        }

        .book-author {
            font-size: 0.8rem;
            color: #64748b;
            margin-bottom: 0.6rem;
        }

        .book-meta-nr {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 0.7rem;
            border-top: 1px solid #f1f5f9;
            margin-top: auto;
            margin-bottom: 0.8rem;
        }

        .book-duration-nr {
            display: flex;
            align-items: center;
            gap: 0.3rem;
            font-size: 0.82rem;
            color: #64748b;
        }

        .book-rating-nr {
            display: flex;
            align-items: center;
            gap: 0.25rem;
            font-size: 0.82rem;
            color: #fbbf24;
            font-weight: 600;
        }

        .read-btn {
            width: 100%;
            padding: 0.7rem;
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 700;
            font-size: 0.88rem;
            cursor: pointer;
            transition: all 0.3s;
        }

        .read-btn:hover {
            opacity: 0.9;
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(14, 165, 233, 0.35);
        }

        .read-btn span { position: relative; }

        .categories {
            padding: 5rem 2rem;
            background: white;
        }

        .categories-container {
            max-width: 1100px;
            margin: 0 auto;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            margin-bottom: 2.5rem;
        }

        .category-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 1.5rem 1.2rem;
            text-align: center;
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .category-card:hover {
            background: #fff;
            border-color: #cbd5e1;
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.07);
        }

        .category-icon {
            width: 38px;
            height: 38px;
            margin: 0 auto 0.9rem;
            display: block;
            transition: transform 0.2s ease;
        }

        .category-icon svg {
            width: 100%;
            height: 100%;
        }

        /* Кольори іконок по категоріях */
        .categories-grid .category-card:nth-child(1) .category-icon { color: #3b82f6; }
        .categories-grid .category-card:nth-child(2) .category-icon { color: #8b5cf6; }
        .categories-grid .category-card:nth-child(3) .category-icon { color: #22c55e; }
        .categories-grid .category-card:nth-child(4) .category-icon { color: #f59e0b; }
        .categories-grid .category-card:nth-child(5) .category-icon { color: #ec4899; }
        .categories-grid .category-card:nth-child(6) .category-icon { color: #06b6d4; }
        .categories-grid .category-card:nth-child(7) .category-icon { color: #6366f1; }
        .categories-grid .category-card:nth-child(8) .category-icon { color: #f97316; }

        .category-card:hover .category-icon {
            transform: scale(1.1);
        }

        .category-name {
            font-size: 0.92rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.3rem;
        }

        .category-count {
            color: #94a3b8;
            font-size: 0.78rem;
            font-weight: 500;
        }

        .category-arrow { display: none; }

        .time-comparison {
            background: #F0F3F8;
            padding: 5rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .tc-bg-grid { display: none; }

        .tc-container {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .tc-header { text-align: center; margin-bottom: 2.5rem; }
        .tc-badge {
            display: inline-block;
            padding: 0.35rem 1rem;
            background: rgba(14, 165, 233, 0.08);
            border: 1px solid rgba(14, 165, 233, 0.22);
            border-radius: 50px;
            color: #0ea5e9;
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-bottom: 1rem;
        }
        .tc-header h2 {
            font-size: 2rem;
            font-weight: 900;
            color: #111827;
            margin-bottom: 0.6rem;
            line-height: 1.2;
        }
        .tc-header p { color: #64748b; font-size: 0.95rem; }

        /* ── Dot-grid year comparison ── */
        .tc-dotgrid-wrapper { display: flex; flex-direction: column; align-items: center; gap: 2rem; }
        .tc-dotgrid-year-label {
            font-size: 0.72rem; color: #94A3B8; font-weight: 700;
            letter-spacing: 1.2px; text-transform: uppercase;
        }
        .tc-dotgrid-panels { display: flex; justify-content: center; gap: 3rem; align-items: flex-start; }
        .tc-dotgrid-divider { width: 1px; background: #CDD4DF; align-self: stretch; flex-shrink: 0; }
        .tc-dotgrid-panel { display: flex; flex-direction: column; align-items: center; gap: 1.4rem; }
        .tc-dotgrid-panel-label {
            font-size: 0.7rem; font-weight: 700; letter-spacing: 0.6px;
            text-transform: uppercase;
        }
        .tc-dotgrid-slow .tc-dotgrid-panel-label { color: #C4756A; }
        .tc-dotgrid-fast .tc-dotgrid-panel-label { color: #4A9070; }
        .tc-dotgrid { display: grid; grid-template-columns: repeat(13, 1fr); gap: 5px; }
        .tc-dot {
            width: 13px; height: 13px; border-radius: 50%;
            background: #D8E2EE;
            transform: scale(0);
            animation: tcDotPop 0.28s cubic-bezier(0.34, 1.56, 0.64, 1) var(--dd, 0s) both;
        }
        .tc-dot.active-slow { background: #C4756A; }
        .tc-dot.active-fast { background: #5A9E7A; }
        @keyframes tcDotPop { from { transform: scale(0); } to { transform: scale(1); } }
        .tc-dotgrid-info { display: flex; flex-direction: column; align-items: center; gap: 0.15rem; text-align: center; }
        .tc-dotgrid-number { font-size: 2.8rem; font-weight: 900; line-height: 1; letter-spacing: -1.5px; }
        .tc-dotgrid-slow .tc-dotgrid-number { color: #C4756A; }
        .tc-dotgrid-fast .tc-dotgrid-number { color: #4A9070; }
        .tc-dotgrid-unit { font-size: 0.78rem; font-weight: 700; color: #8A9AB0; margin-top: 0.1rem; }
        .tc-dotgrid-sublabel { font-size: 0.68rem; color: #A8B4C0; }
        .tc-dotgrid-legend {
            display: flex; align-items: center; gap: 2rem;
            font-size: 0.73rem; color: #8A9AB0; margin-top: 0.5rem;
        }
        .tc-legend-item { display: flex; align-items: center; gap: 0.45rem; }
        .tc-legend-dot { width: 9px; height: 9px; border-radius: 50%; flex-shrink: 0; }

        @media (max-width: 640px) {
            .tc-dotgrid-panels { gap: 1.5rem; }
            .tc-dot { width: 10px; height: 10px; }
            .tc-dotgrid { gap: 3px; }
            .tc-dotgrid-number { font-size: 2.2rem; }
        }

        .view-catalog-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            padding: 1.2rem 3rem;
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 700;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 10px 30px rgba(14, 165, 233, 0.3);
        }

        .view-catalog-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(14, 165, 233, 0.4);
        }

        .view-catalog-btn::after {
            content: '→';
            font-size: 1.3rem;
            transition: transform 0.3s;
        }

        .view-catalog-btn:hover::after {
            transform: translateX(5px);
        }

        .view-catalog-btn.secondary {
            background: white;
            color: #0ea5e9;
            border: 2px solid #0ea5e9;
        }

        .view-catalog-btn.secondary:hover {
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            color: white;
            border-color: transparent;
        }

        /* ── Features (Split layout) ── */
        .features {
            background: #f8fafc;
            padding: 5rem 2rem;
        }

        .features-container {
            max-width: 1100px;
            margin: 0 auto;
        }

        .features-split {
            display: grid;
            grid-template-columns: 2fr 3fr;
            gap: 5rem;
            align-items: center;
        }

        .features-left h2 {
            font-size: 2rem;
            font-weight: 900;
            color: #0f172a;
            line-height: 1.15;
            margin-bottom: 1rem;
        }

        .features-left h2 span {
            background: linear-gradient(135deg, #0ea5e9, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .features-left p {
            font-size: 0.95rem;
            color: #64748b;
            line-height: 1.65;
            margin-bottom: 2rem;
        }

        .features-cta-mobile { display: none; }

        .features-left-cta {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.7rem 1.4rem;
            background: #0f172a;
            color: white;
            border-radius: 10px;
            font-size: 0.88rem;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.2s;
            cursor: pointer;
            border: none;
        }

        .features-left-cta:hover { background: #1e293b; }

        .features-right {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
        }

        .fi-row {
            display: flex;
            align-items: flex-start;
            gap: 0.9rem;
            padding: 1.2rem 1rem;
            border-bottom: 1px solid #e2e8f0;
            transition: background 0.18s;
            border-radius: 0;
        }

        .fi-row:hover { background: #fff; border-radius: 10px; }

        .fi-row:nth-child(odd)  { border-right: 1px solid #e2e8f0; }

        .fi-row:nth-last-child(-n+2) { border-bottom: none; }

        .fi-icon {
            width: 34px;
            height: 34px;
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .fi-icon.c-blue   { background: #eff6ff; }
        .fi-icon.c-violet { background: #f5f3ff; }
        .fi-icon.c-amber  { background: #fffbeb; }
        .fi-icon.c-green  { background: #f0fdf4; }
        .fi-icon.c-rose   { background: #fff1f2; }
        .fi-icon.c-teal   { background: #f0fdfa; }

        .fi-text h4 {
            font-size: 0.88rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.2rem;
            line-height: 1.2;
        }

        .fi-text p {
            font-size: 0.78rem;
            color: #94a3b8;
            line-height: 1.45;
        }

        .pricing {
            padding: 5rem 2rem;
            background: #f8fafc;
        }

        .pricing-container {
            max-width: 820px;
            margin: 0 auto;
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.25rem;
            margin-top: 2.5rem;
        }

        .pricing-card {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 2rem;
            transition: all 0.2s ease;
            display: flex;
            flex-direction: column;
        }

        .pricing-card:hover {
            border-color: #cbd5e1;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
        }

        .pricing-card.featured {
            border-color: #0ea5e9;
            border-width: 1.5px;
            position: relative;
        }

        .featured-badge {
            position: absolute;
            top: -12px;
            right: 18px;
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            color: white;
            padding: 0.3rem 0.85rem;
            border-radius: 50px;
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.3px;
        }

        .pricing-plan-name {
            font-size: 0.95rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.75rem;
        }

        .price {
            font-size: 2.6rem;
            font-weight: 900;
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1;
            margin-bottom: 0.4rem;
        }

        .price-period {
            font-size: 0.88rem;
            color: #94a3b8;
            font-weight: 500;
            -webkit-text-fill-color: #94a3b8;
        }

        .pricing-desc {
            font-size: 0.82rem;
            color: #94a3b8;
            margin-bottom: 1.5rem;
            margin-top: 0.5rem;
        }

        .pricing-features {
            list-style: none;
            margin-bottom: 1.75rem;
            flex: 1;
        }

        .pricing-features li {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            padding: 0.38rem 0;
            font-size: 0.88rem;
            color: #374151;
            border-bottom: 1px solid #f1f5f9;
        }

        .pricing-features li:last-child { border-bottom: none; }

        .pricing-features li::before {
            content: '';
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #f0fdf4;
            border: 1px solid #bbf7d0;
            flex-shrink: 0;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10' viewBox='0 0 24 24' fill='none' stroke='%2322c55e' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='20 6 9 17 4 12'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: center;
        }

        .testimonials {
            padding: 5rem 2rem;
            background: #f8fafc;
        }

        .stats-section {
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 100%);
            padding: 6rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .stats-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 50%, rgba(14, 165, 233, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(139, 92, 246, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        .stats-container {
            max-width: 1400px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 3rem;
            margin-top: 3rem;
        }

        .stat-card {
            text-align: center;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            transition: all 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.05);
            border-color: rgba(14, 165, 233, 0.5);
        }

        .stat-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            display: inline-block;
            animation: float 3s ease-in-out infinite;
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 900;
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
            line-height: 1;
        }

        .stat-label {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.7);
            font-weight: 500;
        }

        .personalization-section {
            padding: 6rem 2rem;
            background: white;
        }

        .personalization-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .personalization-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        .personalization-card {
            background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
            padding: 2.5rem;
            border-radius: 20px;
            border: 2px solid #e2e8f0;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .personalization-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(14, 165, 233, 0.05) 0%, rgba(139, 92, 246, 0.05) 100%);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .personalization-card:hover::before {
            opacity: 1;
        }

        .personalization-card:hover {
            transform: translateY(-10px);
            border-color: #0ea5e9;
            box-shadow: 0 20px 40px rgba(14, 165, 233, 0.15);
        }

        .personalization-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 10px 30px rgba(14, 165, 233, 0.3);
            position: relative;
            z-index: 1;
        }

        .personalization-card h3 {
            font-size: 1.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            position: relative;
            z-index: 1;
        }

        .personalization-card p {
            color: #64748b;
            line-height: 1.8;
            position: relative;
            z-index: 1;
        }

        .faq-section {
            padding: 6rem 2rem;
            background: #f8fafc;
        }

        .faq-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .faq-list {
            margin-top: 3rem;
        }

        .faq-item {
            background: white;
            border-radius: 16px;
            margin-bottom: 1.5rem;
            border: 2px solid #e2e8f0;
            overflow: hidden;
            transition: all 0.3s;
        }

        .faq-item:hover {
            border-color: #0ea5e9;
        }

        .faq-question {
            padding: 1.5rem 2rem;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s;
        }

        .faq-question:hover {
            color: #0ea5e9;
        }

        .faq-icon {
            font-size: 1.5rem;
            transition: transform 0.3s;
            color: #0ea5e9;
        }

        .faq-item.active .faq-icon {
            transform: rotate(45deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .faq-item.active .faq-answer {
            max-height: 500px;
        }

        .faq-answer-content {
            padding: 0 2rem 1.5rem;
            color: #64748b;
            line-height: 1.8;
        }

        .testimonials-container {
            max-width: 820px;
            margin: 0 auto;
        }

        .testi-list {
            margin-top: 3rem;
        }

        .testi-row {
            display: grid;
            grid-template-columns: 190px 1fr;
            gap: 2.5rem;
            align-items: start;
            padding: 1.8rem 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .testi-row:first-child { border-top: 1px solid #e2e8f0; }

        .testi-person {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .testi-avatar-sm {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 0.7rem;
            flex-shrink: 0;
        }

        .testi-person-name {
            font-weight: 700;
            color: #0f172a;
            font-size: 0.88rem;
        }

        .testi-person-role {
            color: #94a3b8;
            font-size: 0.75rem;
            margin-top: 0.15rem;
        }

        .testi-mini-stars {
            display: flex;
            gap: 2px;
            margin-bottom: 0.5rem;
        }

        .testi-review-text {
            font-size: 0.92rem;
            line-height: 1.65;
            color: #374151;
        }

        .add-review-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 1rem 2rem;
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 2rem;
            box-shadow: 0 10px 30px rgba(14, 165, 233, 0.3);
        }

        .add-review-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(14, 165, 233, 0.4);
        }

        .review-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 10000;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(5px);
        }

        .review-modal.active {
            display: flex;
        }

        .review-modal-content {
            background: white;
            border-radius: 20px;
            padding: 3rem;
            max-width: 600px;
            width: 90%;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            animation: modalSlideIn 0.3s ease;
        }

        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal-close {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            width: 40px;
            height: 40px;
            background: #f1f5f9;
            border: none;
            border-radius: 50%;
            font-size: 1.5rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .modal-close:hover {
            background: #e2e8f0;
            transform: rotate(90deg);
        }

        .modal-title {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 2rem;
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #1a1a1a;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s;
            font-family: inherit;
        }

        .form-input:focus {
            outline: none;
            border-color: #0ea5e9;
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.1);
        }

        .form-textarea {
            min-height: 120px;
            resize: vertical;
        }

        .star-rating {
            display: flex;
            gap: 0.5rem;
            margin-top: 0.5rem;
        }

        .star-rating input {
            display: none;
        }

        .star-rating label {
            cursor: pointer;
            color: #e2e8f0;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
        }

        .star-rating label:hover,
        .star-rating label:hover ~ label,
        .star-rating input:checked ~ label {
            color: #fbbf24;
            transform: scale(1.1);
        }

        .form-submit {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 1rem;
        }

        .form-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(14, 165, 233, 0.4);
        }

        .newsletter {
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            padding: 5rem 2rem;
            color: white;
        }

        .newsletter-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .newsletter-content {
            text-align: center;
        }

        .newsletter-content h2 {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        .newsletter-content p {
            font-size: 0.95rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .newsletter-form {
            display: flex;
            gap: 1rem;
            max-width: 600px;
            margin: 0 auto 1rem;
        }

        .email-input {
            flex: 1;
            padding: 1rem 1.5rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            outline: none;
        }

        .email-input::placeholder {
            color: #94a3b8;
        }

        .newsletter-note {
            font-size: 0.85rem;
            opacity: 0.8;
        }

        .newsletter-form .btn-primary {
            white-space: nowrap;
            background: white;
            color: #0ea5e9;
        }

        .newsletter-form .btn-primary:hover {
            background: #f8fafc;
        }

        footer {
            background: #0a0a0a;
            color: white;
            padding: 4rem 2rem 2rem;
        }

        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .footer-main {
            display: grid;
            grid-template-columns: 1.5fr 2.5fr;
            gap: 4rem;
            padding-bottom: 3rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-brand {
            max-width: 350px;
        }

        .footer-logo {
            font-size: 2rem;
            font-weight: 900;
            letter-spacing: -1px;
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
        }

        .footer-tagline {
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .app-buttons {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .app-btn {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            padding: 0.8rem 1.2rem;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            color: white;
            cursor: pointer;
            transition: all 0.3s;
            text-align: left;
        }

        .app-btn:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: #0ea5e9;
            transform: translateY(-2px);
        }

        .footer-links {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .footer-column h4 {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: white;
        }

        .footer-column a {
            display: block;
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            margin-bottom: 0.8rem;
            font-size: 0.95rem;
            transition: all 0.3s;
        }

        .footer-column a:hover {
            color: #0ea5e9;
            transform: translateX(5px);
        }

        .support-btn {
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            color: white !important;
            padding: 0.6rem 1rem;
            border-radius: 8px;
            font-weight: 600;
            display: inline-block !important;
            margin-bottom: 1rem !important;
            border: none;
            cursor: pointer;
            width: 100%;
            text-align: left;
            transition: all 0.3s;
        }

        .support-btn:hover {
            transform: translateY(-2px) !important;
            box-shadow: 0 5px 20px rgba(14, 165, 233, 0.4);
        }

        .messengers-popup {
            display: none;
            flex-direction: column;
            gap: 0.5rem;
            margin-bottom: 1rem;
            padding: 0.8rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            animation: slideDown 0.3s ease;
        }

        .messengers-popup.active {
            display: flex;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .messenger-link {
            display: flex !important;
            align-items: center;
            gap: 0.8rem;
            padding: 0.6rem 0.8rem !important;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 6px;
            transition: all 0.3s !important;
            margin-bottom: 0 !important;
        }

        .messenger-link:hover {
            background: rgba(14, 165, 233, 0.2) !important;
            transform: translateX(5px) !important;
        }

        .messenger-icon {
            font-size: 1.2rem;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 2rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-legal {
            display: flex;
            gap: 1rem;
            align-items: center;
            flex-wrap: wrap;
        }

        .footer-legal a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s;
        }

        .footer-legal a:hover {
            color: #0ea5e9;
        }

        .footer-legal span {
            color: rgba(255, 255, 255, 0.3);
        }

        .footer-social {
            display: flex;
            gap: 1rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            text-decoration: none;
            font-size: 1.2rem;
            transition: all 0.3s;
        }

        .social-link:hover {
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            transform: translateY(-3px);
        }

        .footer-copyright {
            text-align: center;
            padding-top: 2rem;
        }

        .footer-copyright p {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
        }

        @media (max-width: 1024px) {
            .celebrity-grid,
            .categories-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .features-grid,
            .testimonials-grid {
                grid-template-columns: 1fr;
            }

            .celebrity-showcase {
                grid-template-columns: 1fr;
                text-align: center;
                overflow: hidden;
            }

            .celebrity-profile {
                align-items: center;
            }

            .celebrity-showcase > div {
                min-width: 0;
                overflow: hidden;
            }

            .books-horizontal {
                display: flex;
                overflow-x: auto;
                scroll-snap-type: x mandatory;
                -webkit-overflow-scrolling: touch;
                gap: 1rem;
                padding-bottom: 0.5rem;
                scrollbar-width: none;
            }
            .books-horizontal::-webkit-scrollbar { display: none; }
            .books-horizontal .book-item-h {
                flex: 0 0 130px;
                min-width: 130px;
                max-width: 130px;
                box-sizing: border-box;
                scroll-snap-align: start;
                display: flex;
                flex-direction: column;
                padding: 0.8rem;
            }
            .books-horizontal .book-cover-h {
                height: 155px;
                aspect-ratio: unset;
                margin-bottom: 0.6rem;
            }
            .books-horizontal .book-details h4 {
                font-size: 0.8rem;
                font-weight: 700;
                line-height: 1.3;
                line-height: 1.4;
                height: 2.8em;
                overflow: hidden;
                margin-bottom: 0.25rem;
            }
            .books-horizontal .book-details p {
                font-size: 0.72rem;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                color: #64748b;
            }

            .view-all-btn {
                width: 100%;
                text-align: center;
                box-sizing: border-box;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .personalization-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .floating-books {
                display: none;
            }

            .celebrity-grid,
            .pricing-grid,
            .testimonials-grid {
                grid-template-columns: 1fr;
            }

            .categories-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 0.6rem;
            }
            .category-card:hover {
                transform: none;
                box-shadow: none;
                background: #f8fafc;
                border-color: #e2e8f0;
            }
            .category-card { padding: 0.9rem 0.4rem; }
            .category-icon { width: 28px; height: 28px; margin-bottom: 0.5rem; }
            .category-name { font-size: 0.72rem; }
            .category-count { font-size: 0.65rem; }

            .celebrity-showcase {
                grid-template-columns: 1fr;
                padding: 1.5rem;
            }

            .celebrities {
                padding: 1.5rem 1rem;
                overflow-x: hidden;
            }

            .features-split {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .features-cta-desktop { display: none !important; }
            .features-cta-mobile { text-align: center; margin-top: 1.5rem; display: block; }
            .features-cta-mobile .view-all-btn { font-size: 0.95rem; padding: 0.75rem 2rem; }
            .hero { padding: 6rem 1.5rem 3rem; }
            .features { padding: 1.5rem 1rem; }
            .new-releases { padding: 1.5rem 1rem; }
            .categories { padding: 1.5rem 1rem; }
            .how-it-works { padding: 1.5rem 1rem; }
            .time-comparison { padding: 1.5rem 1rem; }
            .personalization { padding: 1.5rem 1rem; }
            .testimonials { padding: 1.5rem 1rem; }
            .testi-row {
                display: flex;
                flex-direction: column;
                gap: 0.8rem;
                padding: 1.2rem;
                background: white;
                border-radius: 16px;
                border: 1px solid #e2e8f0 !important;
                margin-bottom: 0.8rem;
            }
            .testi-row:first-child { border-top: 1px solid #e2e8f0 !important; }
            .testi-person {
                order: 2;
                padding-top: 0.8rem;
                border-top: 1px solid #f1f5f9;
            }
            .testi-row > div:last-child { order: 1; }
            .testi-review-text { font-size: 0.88rem; }
            .testi-list { margin-top: 1.5rem; }
            .pricing { padding: 1.5rem 1rem; }
            .faq { padding: 1.5rem 1rem; }
            .newsletter { padding: 1.5rem 1rem; }
            .section-header { margin-bottom: 1.2rem; }

            .newsletter-form {
                flex-direction: column;
            }

            .footer-main {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .footer-links {
                grid-template-columns: 1fr;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 1.5rem;
                text-align: center;
            }
        }
    </style>
<?php include 'header_styles.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>
<section class="hero">
        <div class="hero-particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
        <div class="hero-content">
            <div class="hero-badge">✨ Читай книги, які рекомендують лідери</div>
            <h1>Читай як <span class="gradient-text">найуспішніші</span> люди світу</h1>
            <p>10 хвилин замість 10 годин. Ключові ідеї з книг, які читають Ілон Маск, Білл Гейтс та інші лідери думок</p>
            <div class="hero-buttons">
                <a href="#" class="btn-primary">Почати безкоштовно</a>
                <a href="catalog_page" class="btn-secondary">Подивитись бібліотеку</a>
            </div>
        </div>

        <div class="floating-books">
            <div class="book-3d" onclick="window.location='book_page_principles'" style="cursor:pointer;">
                <div class="book-content">
                    <div class="book-cover-3d" style="background: #1B2E50; overflow: hidden;">
                        <img src="covers_ua/Principles.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                    </div>
                    <div class="book-info">
                        <h3>Принципи</h3>
                        <div class="book-author">Рей Даліо</div>
                        <div class="recommended-by">
                            <div class="avatar" style="background:none;overflow:hidden;padding:0;"><img src="leaders-photos/bill-gates.jpg" alt="Білл Гейтс" style="width:100%;height:100%;object-fit:cover;border-radius:50%;display:block;filter:grayscale(100%);"></div>
                            <div>
                                <div class="recommender-label">рекомендує</div>
                                <div class="recommender-name">Білл Гейтс</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="book-3d" onclick="window.location='book_page_zero_to_one'" style="cursor:pointer;">
                <div class="book-content">
                    <div class="book-cover-3d" style="background: #E4EBF5; overflow: hidden;">
                        <img src="covers_ua/Zero to One.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                    </div>
                    <div class="book-info">
                        <h3>Від Нуля до Одиниці</h3>
                        <div class="book-author">Пітер Тіль</div>
                        <div class="recommended-by">
                            <div class="avatar" style="background:none;overflow:hidden;padding:0;"><img src="leaders-photos/elon-musk.jpg" alt="Ілон Маск" style="width:100%;height:100%;object-fit:cover;border-radius:50%;display:block;filter:grayscale(100%);"></div>
                            <div>
                                <div class="recommender-label">рекомендує</div>
                                <div class="recommender-name">Ілон Маск</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="book-3d" onclick="window.location='book_page_sapiens'" style="cursor:pointer;">
                <div class="book-content">
                    <div class="book-cover-3d" style="background: #F6F1E8; overflow: hidden;">
                        <img src="covers_ua/Sapiens.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                    </div>
                    <div class="book-info">
                        <h3>Сапієнс</h3>
                        <div class="book-author">Юваль Ной Харарі</div>
                        <div class="recommended-by">
                            <div class="avatar" style="background:none;overflow:hidden;padding:0;"><img src="leaders-photos/zuckerberg.jpg" alt="Марк Цукерберг" style="width:100%;height:100%;object-fit:cover;border-radius:50%;display:block;filter:grayscale(100%);"></div>
                            <div>
                                <div class="recommender-label">рекомендує</div>
                                <div class="recommender-name">Марк Цукерберг</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="time-comparison">
        <div class="tc-bg-grid"></div>
        <div class="tc-container">

            <div class="tc-header">
                <span class="tc-badge">⏱ Економія часу</span>
                <h2>Скільки книг ви прочитаєте за рік?</h2>
                <p>Порівняйте зростання вашої бібліотеки знань</p>
            </div>

            <!-- Book-stack comparison -->
            <!-- Dot-grid year comparison -->
            <div class="tc-dotgrid-wrapper">
                <div class="tc-dotgrid-year-label">1 рік = 52 тижні</div>
                <div class="tc-dotgrid-panels">

                    <div class="tc-dotgrid-panel tc-dotgrid-slow">
                        <div class="tc-dotgrid-panel-label">Традиційне читання</div>
                        <div class="tc-dotgrid" id="tcGridSlow"></div>
                        <div class="tc-dotgrid-info">
                            <div class="tc-dotgrid-number">10</div>
                            <div class="tc-dotgrid-unit">книги / рік</div>
                            <div class="tc-dotgrid-sublabel">~1 книга на місяць</div>
                        </div>
                    </div>

                    <div class="tc-dotgrid-divider"></div>

                    <div class="tc-dotgrid-panel tc-dotgrid-fast">
                        <div class="tc-dotgrid-panel-label">З Tenbook</div>
                        <div class="tc-dotgrid" id="tcGridFast"></div>
                        <div class="tc-dotgrid-info">
                            <div class="tc-dotgrid-number">32</div>
                            <div class="tc-dotgrid-unit">книги / рік</div>
                            <div class="tc-dotgrid-sublabel">~1 книга кожні 1.5 тижні</div>
                        </div>
                    </div>

                </div>
                <div class="tc-dotgrid-legend">
                    <div class="tc-legend-item">
                        <div class="tc-legend-dot" style="background:#D8E2EE"></div>
                        тиждень без книги
                    </div>
                    <div class="tc-legend-item">
                        <div class="tc-legend-dot" style="background:#5A9E7A"></div>
                        книгу прочитано
                    </div>
                </div>
            </div>
            <script>
            (function(){
                var slowActive = new Set([0,5,10,16,21,27,32,37,43,48]);
                var fastActive = new Set([0,1,3,4,6,7,9,10,12,13,15,16,18,19,21,22,24,25,27,28,30,31,33,34,36,37,39,40,42,43,45,46]);
                function buildGrid(id, activeSet, cls) {
                    var g = document.getElementById(id);
                    for (var i = 0; i < 52; i++) {
                        var d = document.createElement('div');
                        d.className = 'tc-dot' + (activeSet.has(i) ? ' ' + cls : '');
                        d.style.setProperty('--dd', (i * 0.022) + 's');
                        g.appendChild(d);
                    }
                }
                buildGrid('tcGridSlow', slowActive, 'active-slow');
                buildGrid('tcGridFast', fastActive, 'active-fast');
            })();
            </script>

        </div>
    </section>

    <section class="celebrities" id="celebrities">
        <div class="celebrities-container">
            <div class="section-header">
                <h2>Рекомендації успішних людей</h2>
                <p>Дізнайтеся, що читають найуспішніші люди планети</p>
            </div>

            <div class="celebrity-showcase">
                <div class="celeb-profile">
                    <div class="celebrity-photo" style="background: none; overflow: hidden;">
                        <img src="leaders-photos/elon-musk.jpg" alt="Ілон Маск" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%; filter: grayscale(100%);">
                    </div>
                    <div class="celebrity-info">
                        <h3>Ілон Маск</h3>
                        <p>CEO Tesla & SpaceX</p>
                    </div>
                </div>
                <div class="celeb-quote-wrap">
                    <div class="celebrity-quote">"Читайте багато книг. Це найкращий спосіб навчання."</div>
                </div>
                <div class="celeb-books">
                    <div class="books-horizontal">
                        <div class="book-item-h" onclick="window.location='book_page_zero_to_one'" style="cursor:pointer;">
                            <div class="book-cover-h" style="background: #E4EBF5;">
                                <img src="covers_ua/Zero to One.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                            </div>
                            <div class="book-details"><h4>Від Нуля до Одиниці</h4><p>Пітер Тіль</p></div>
                        </div>
                        <div class="book-item-h" onclick="window.location='book_page_atomic_habits'" style="cursor:pointer;">
                            <div class="book-cover-h" style="background: #EBF8EF;">
                                <img src="covers_ua/Atomic Habits.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                            </div>
                            <div class="book-details"><h4>Атомні Звички</h4><p>Джеймс Клір</p></div>
                        </div>
                        <div class="book-item-h" onclick="window.location='book_page_sapiens'" style="cursor:pointer;">
                            <div class="book-cover-h" style="background: #F6F1E8;">
                                <img src="covers_ua/Sapiens.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                            </div>
                            <div class="book-details"><h4>Сапієнс</h4><p>Юваль Ной Харарі</p></div>
                        </div>
                        <div class="book-item-h" onclick="window.location='book_page_principles'" style="cursor:pointer;">
                            <div class="book-cover-h" style="background: #1B2E50;">
                                <img src="covers_ua/Principles.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                            </div>
                            <div class="book-details"><h4>Принципи</h4><p>Рей Даліо</p></div>
                        </div>
                    </div>
                </div>
                <a href="leaders_elon_musk" class="view-all-btn celeb-btn">Переглянути усі (24 книги) →</a>
            </div>

            <div class="celebrity-showcase">
                <div class="celeb-profile">
                    <div class="celebrity-photo" style="background: none; overflow: hidden;">
                        <img src="leaders-photos/bill-gates.jpg" alt="Білл Гейтс" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%; filter: grayscale(100%);">
                    </div>
                    <div class="celebrity-info">
                        <h3>Білл Гейтс</h3>
                        <p>Засновник Microsoft</p>
                    </div>
                </div>
                <div class="celeb-quote-wrap">
                    <div class="celebrity-quote">"Читання досі є основним способом, яким я вчуся."</div>
                </div>
                <div class="celeb-books">
                    <div class="books-horizontal">
                        <div class="book-item-h" onclick="window.location='book_page_principles'" style="cursor:pointer;">
                            <div class="book-cover-h" style="background: #1B2E50;">
                                <img src="covers_ua/Principles.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                            </div>
                            <div class="book-details"><h4>Принципи</h4><p>Рей Даліо</p></div>
                        </div>
                        <div class="book-item-h" onclick="window.location='book_page_atomic_habits'" style="cursor:pointer;">
                            <div class="book-cover-h" style="background: #EBF8EF;">
                                <img src="covers_ua/Atomic Habits.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                            </div>
                            <div class="book-details"><h4>Атомні Звички</h4><p>Джеймс Клір</p></div>
                        </div>
                        <div class="book-item-h">
                            <div class="book-cover-h" style="background: #EEF2F8;">
                                <img src="covers_ua/Better Angels.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                            </div>
                            <div class="book-details"><h4>Краща Природа Людини</h4><p>Стівен Пінкер</p></div>
                        </div>
                        <div class="book-item-h" onclick="window.location='book_page_7habits'" style="cursor:pointer;">
                            <div class="book-cover-h" style="background: #EEF4F8;">
                                <img src="covers_ua/The 7 Habits.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                            </div>
                            <div class="book-details"><h4>7 Звичок</h4><p>Стівен Кові</p></div>
                        </div>
                    </div>
                </div>
                <a href="leaders_bill_gates" class="view-all-btn celeb-btn">Переглянути усі (52 книги) →</a>
            </div>

            <div class="celebrity-showcase">
                <div class="celeb-profile">
                    <div class="celebrity-photo" style="background: none; overflow: hidden;">
                        <img src="leaders-photos/warren-buffett.jpg" alt="Уоррен Баффет" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%; filter: grayscale(100%);">
                    </div>
                    <div class="celebrity-info">
                        <h3>Уоррен Баффет</h3>
                        <p>Інвестор, CEO Berkshire</p>
                    </div>
                </div>
                <div class="celeb-quote-wrap">
                    <div class="celebrity-quote">"Читайте 500 сторінок щодня. Так працює знання."</div>
                </div>
                <div class="celeb-books">
                    <div class="books-horizontal">
                        <div class="book-item-h">
                            <div class="book-cover-h" style="background: #F5F2E4;">
                                <img src="covers_ua/The Intelligent Investor.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                            </div>
                            <div class="book-details"><h4>Розумний Інвестор</h4><p>Бенджамін Грем</p></div>
                        </div>
                        <div class="book-item-h">
                            <div class="book-cover-h" style="background: #F8F4EE;">
                                <img src="covers_ua/Common Stocks.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                            </div>
                            <div class="book-details"><h4>Звичайні Акції та Незвичайні Прибутки</h4><p>Філіп Фішер</p></div>
                        </div>
                        <div class="book-item-h">
                            <div class="book-cover-h" style="background: #EEF6F2;">
                                <img src="covers_ua/Business Adventures.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                            </div>
                            <div class="book-details"><h4>Бізнес-Пригоди</h4><p>Джон Брукс</p></div>
                        </div>
                        <div class="book-item-h">
                            <div class="book-cover-h" style="background: #F4EEF8;">
                                <img src="covers_ua/The Outsiders.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                            </div>
                            <div class="book-details"><h4>Аутсайдери</h4><p>Вільям Торндайк</p></div>
                        </div>
                    </div>
                </div>
                <a href="leaders_warren_buffett" class="view-all-btn celeb-btn">Переглянути усі (38 книг) →</a>
            </div>
        </div>
    </section>

    <section class="new-releases">
        <div class="new-releases-container">
            <div class="section-header">
                <h2>Нові надходження</h2>
                <p>Щотижня додаємо нові скорочення найпопулярніших книг</p>
            </div>

            <div class="books-showcase">

                <!-- 12 Rules for Life -->
                <div class="book-card-large">
                    <div class="book-cover-large" style="background:#F5EFE6;">
                        <img src="covers_ua/12 Rules for Life.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                    </div>
                    <div class="book-info-large">
                        <div class="book-category">САМОРОЗВИТОК</div>
                        <h3>12 Правил Життя</h3>
                        <p class="book-author">Джордан Б. Пітерсон</p>
                        <div class="book-meta-nr">
                            <div class="book-duration-nr"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>18 хв</div>
                            <span class="book-badge">НОВЕ</span>
                            <div class="book-rating-nr"><svg width="12" height="12" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>4.7</div>
                        </div>
                        <button class="read-btn"><span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:5px;margin-bottom:1px"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>Читати</span></button>
                    </div>
                </div>

                <!-- How to Win Friends -->
                <div class="book-card-large">
                    <div class="book-cover-large" style="background:#EDF3F8;">
                        <img src="covers_ua/How to Win Friends.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                    </div>
                    <div class="book-info-large">
                        <div class="book-category">КОМУНІКАЦІЯ</div>
                        <h3>Як Здобувати Друзів</h3>
                        <p class="book-author">Дейл Карнегі</p>
                        <div class="book-meta-nr">
                            <div class="book-duration-nr"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>15 хв</div>
                            <span class="book-badge">НОВЕ</span>
                            <div class="book-rating-nr"><svg width="12" height="12" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>4.9</div>
                        </div>
                        <button class="read-btn"><span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:5px;margin-bottom:1px"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>Читати</span></button>
                    </div>
                </div>

                <!-- Blue Ocean Strategy -->
                <div class="book-card-large">
                    <div class="book-cover-large" style="background:#E6F2FF;">
                        <img src="covers_ua/Blue Ocean Strategy.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                    </div>
                    <div class="book-info-large">
                        <div class="book-category">БІЗНЕС</div>
                        <h3>Стратегія Блакитного Океану</h3>
                        <p class="book-author">В. Чан Кім</p>
                        <div class="book-meta-nr">
                            <div class="book-duration-nr"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>16 хв</div>
                            <span class="book-badge">НОВЕ</span>
                            <div class="book-rating-nr"><svg width="12" height="12" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>4.6</div>
                        </div>
                        <button class="read-btn"><span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:5px;margin-bottom:1px"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>Читати</span></button>
                    </div>
                </div>

                <!-- A Brief History of Time -->
                <div class="book-card-large">
                    <div class="book-cover-large" style="background:#07071A;">
                        <img src="covers_ua/A Brief History of Time.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                    </div>
                    <div class="book-info-large">
                        <div class="book-category">НАУКА</div>
                        <h3>Коротка Історія Часу</h3>
                        <p class="book-author">Стівен Гокінг</p>
                        <div class="book-meta-nr">
                            <div class="book-duration-nr"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>14 хв</div>
                            <span class="book-badge">НОВЕ</span>
                            <div class="book-rating-nr"><svg width="12" height="12" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>4.8</div>
                        </div>
                        <button class="read-btn"><span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:5px;margin-bottom:1px"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>Читати</span></button>
                    </div>
                </div>

                <!-- Thinking, Fast and Slow -->
                <div class="book-card-large">
                    <div class="book-cover-large" style="background:#F3EFF8;">
                        <img src="covers_ua/Thinking Fast and Slow.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                    </div>
                    <div class="book-info-large">
                        <div class="book-category">ПСИХОЛОГІЯ</div>
                        <h3>Мислення Швидке й Повільне</h3>
                        <p class="book-author">Деніел Канеман</p>
                        <div class="book-meta-nr">
                            <div class="book-duration-nr"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>20 хв</div>
                            <span class="book-badge">НОВЕ</span>
                            <div class="book-rating-nr"><svg width="12" height="12" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>4.9</div>
                        </div>
                        <button class="read-btn"><span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:5px;margin-bottom:1px"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>Читати</span></button>
                    </div>
                </div>

                <!-- Atomic Habits -->
                <div class="book-card-large" onclick="window.location='book_page_atomic_habits'" style="cursor:pointer;">
                    <div class="book-cover-large" style="background:#EBF8EF;">
                        <img src="covers_ua/Atomic Habits.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                    </div>
                    <div class="book-info-large">
                        <div class="book-category">САМОРОЗВИТОК</div>
                        <h3>Атомні Звички</h3>
                        <p class="book-author">Джеймс Клір</p>
                        <div class="book-meta-nr">
                            <div class="book-duration-nr"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>15 хв</div>
                            <span class="book-badge">НОВЕ</span>
                            <div class="book-rating-nr"><svg width="12" height="12" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>4.9</div>
                        </div>
                        <a href="book_page_atomic_habits" class="read-btn" onclick="event.stopPropagation()"><span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:5px;margin-bottom:1px"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>Читати</span></a>
                    </div>
                </div>

                <!-- The Lean Startup -->
                <div class="book-card-large">
                    <div class="book-cover-large" style="background:#EEF7F2;">
                        <img src="covers_ua/The Lean Startup.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                    </div>
                    <div class="book-info-large">
                        <div class="book-category">БІЗНЕС</div>
                        <h3>Бережливий Стартап</h3>
                        <p class="book-author">Ерік Різ</p>
                        <div class="book-meta-nr">
                            <div class="book-duration-nr"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>14 хв</div>
                            <span class="book-badge">НОВЕ</span>
                            <div class="book-rating-nr"><svg width="12" height="12" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>4.6</div>
                        </div>
                        <button class="read-btn"><span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:5px;margin-bottom:1px"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>Читати</span></button>
                    </div>
                </div>

                <!-- Sapiens -->
                <div class="book-card-large" onclick="window.location='book_page_sapiens'" style="cursor:pointer;">
                    <div class="book-cover-large" style="background:#F6F1E8;">
                        <img src="covers_ua/Sapiens.svg" style="position:absolute;top:0;left:0;width:100%;height:100%;display:block;">
                    </div>
                    <div class="book-info-large">
                        <div class="book-category">ІСТОРІЯ</div>
                        <h3>Сапієнс</h3>
                        <p class="book-author">Юваль Ной Харарі</p>
                        <div class="book-meta-nr">
                            <div class="book-duration-nr"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>20 хв</div>
                            <span class="book-badge">БЕСТСЕЛЕР</span>
                            <div class="book-rating-nr"><svg width="12" height="12" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>4.7</div>
                        </div>
                        <a href="book_page_sapiens" class="read-btn" onclick="event.stopPropagation()"><span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle;margin-right:5px;margin-bottom:1px"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>Читати</span></a>
                    </div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 3rem;">
                <a href="catalog_page" class="btn-secondary" style="border: none; padding: 1rem 2.5rem; display: inline-block;">Переглянути всі книги</a>
            </div>
        </div>
    </section>

    <section class="categories">
        <div class="categories-container">
            <div class="section-header">
                <h2>Обирайте за категоріями</h2>
                <p>Понад 2000+ скорочень найкращих книг</p>
            </div>

            <div class="categories-grid">
                <!-- Бізнес -->
                <a href="catalog_page?category=business" class="category-card" style="text-decoration:none;color:inherit;">
                    <div class="category-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="14" rx="2"/>
                            <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>
                            <line x1="12" y1="12" x2="12" y2="12"/>
                            <path d="M2 12h20"/>
                        </svg>
                    </div>
                    <div class="category-name">Бізнес</div>
                    <div class="category-count">450+ книг</div>
                    <div class="category-arrow">→</div>
                </a>

                <!-- Психологія -->
                <a href="catalog_page?category=psychology" class="category-card" style="text-decoration:none;color:inherit;">
                    <div class="category-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2a5 5 0 0 1 5 5c0 1.5-.6 2.8-1.5 3.8A4 4 0 0 1 16 14v1a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2v-1a4 4 0 0 1 .5-3.2A5 5 0 0 1 7 7a5 5 0 0 1 5-5z"/>
                            <line x1="9" y1="11" x2="9" y2="11"/>
                            <line x1="12" y1="9" x2="12" y2="9"/>
                            <line x1="15" y1="11" x2="15" y2="11"/>
                            <path d="M10 17v3m4-3v3"/>
                        </svg>
                    </div>
                    <div class="category-name">Психологія</div>
                    <div class="category-count">380+ книг</div>
                    <div class="category-arrow">→</div>
                </a>

                <!-- Саморозвиток -->
                <a href="catalog_page?category=self-dev" class="category-card" style="text-decoration:none;color:inherit;">
                    <div class="category-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/>
                            <polyline points="17 6 23 6 23 12"/>
                        </svg>
                    </div>
                    <div class="category-name">Саморозвиток</div>
                    <div class="category-count">520+ книг</div>
                    <div class="category-arrow">→</div>
                </a>

                <!-- Фінанси -->
                <a href="catalog_page?category=finance" class="category-card" style="text-decoration:none;color:inherit;">
                    <div class="category-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 6v2m0 8v2"/>
                            <path d="M9.5 9.5A2.5 2.5 0 0 1 12 8h.5a2.5 2.5 0 0 1 0 5h-1a2.5 2.5 0 0 0 0 5H12a2.5 2.5 0 0 0 2.5-1.5"/>
                        </svg>
                    </div>
                    <div class="category-name">Фінанси</div>
                    <div class="category-count">290+ книг</div>
                    <div class="category-arrow">→</div>
                </a>

                <!-- Креативність -->
                <a href="catalog_page?category=creativity" class="category-card" style="text-decoration:none;color:inherit;">
                    <div class="category-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 19l7-7 3 3-7 7-3-3z"/>
                            <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/>
                            <path d="M2 2l7.586 7.586"/>
                            <circle cx="11" cy="11" r="2"/>
                        </svg>
                    </div>
                    <div class="category-name">Креативність</div>
                    <div class="category-count">210+ книг</div>
                    <div class="category-arrow">→</div>
                </a>

                <!-- Наука -->
                <a href="catalog_page?category=science" class="category-card" style="text-decoration:none;color:inherit;">
                    <div class="category-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="1"/>
                            <ellipse cx="12" cy="12" rx="10" ry="4"/>
                            <ellipse cx="12" cy="12" rx="10" ry="4" transform="rotate(60 12 12)"/>
                            <ellipse cx="12" cy="12" rx="10" ry="4" transform="rotate(120 12 12)"/>
                        </svg>
                    </div>
                    <div class="category-name">Наука</div>
                    <div class="category-count">180+ книг</div>
                    <div class="category-arrow">→</div>
                </a>

                <!-- Біографії -->
                <a href="catalog_page?category=biography" class="category-card" style="text-decoration:none;color:inherit;">
                    <div class="category-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                    <div class="category-name">Біографії</div>
                    <div class="category-count">160+ книг</div>
                    <div class="category-arrow">→</div>
                </a>

                <!-- Історія -->
                <a href="catalog_page?category=history" class="category-card" style="text-decoration:none;color:inherit;">
                    <div class="category-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="2" y1="12" x2="22" y2="12"/>
                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                        </svg>
                    </div>
                    <div class="category-name">Історія</div>
                    <div class="category-count">140+ книг</div>
                    <div class="category-arrow">→</div>
                </a>
            </div>

            <div style="text-align: center;">
                <button class="btn-secondary" style="border: none; padding: 1rem 2.5rem;">Перейти в бібліотеку</button>
            </div>
        </div>
    </section>

    <section class="features" id="features">
        <div class="features-container">
            <div class="features-split">

                <!-- Ліва частина: заголовок + CTA -->
                <div class="features-left">
                    <h2>Все що потрібно для <span>ефективного</span> читання</h2>
                    <p>Tenbook — це не просто скорочення. Це повноцінна система, яка допомагає читати більше, засвоювати краще і витрачати менше часу.</p>
                    <button class="features-left-cta features-cta-desktop">
                        Спробувати безкоштовно
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </button>
                </div>

                <!-- Права частина: 2×3 сітка фіч -->
                <div class="features-right">
                    <div class="fi-row">
                        <div class="fi-icon c-blue">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div class="fi-text">
                            <h4>10 хвилин читання</h4>
                            <p>Ключові ідеї без зайвої води</p>
                        </div>
                    </div>
                    <div class="fi-row">
                        <div class="fi-icon c-violet">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#8b5cf6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3z"/><path d="M3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg>
                        </div>
                        <div class="fi-text">
                            <h4>Аудіо версії</h4>
                            <p>Озвучка українською мовою</p>
                        </div>
                    </div>
                    <div class="fi-row">
                        <div class="fi-icon c-amber">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        </div>
                        <div class="fi-text">
                            <h4>Рекомендації лідерів</h4>
                            <p>Що читають Маск, Гейтс та інші</p>
                        </div>
                    </div>
                    <div class="fi-row">
                        <div class="fi-icon c-green">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
                        </div>
                        <div class="fi-text">
                            <h4>Будь-де</h4>
                            <p>Телефон, планшет, комп'ютер</p>
                        </div>
                    </div>
                    <div class="fi-row">
                        <div class="fi-icon c-rose">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#f43f5e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                        </div>
                        <div class="fi-text">
                            <h4>Багатомовність</h4>
                            <p>Українська, англійська, польська</p>
                        </div>
                    </div>
                    <div class="fi-row">
                        <div class="fi-icon c-teal">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#14b8a6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                        </div>
                        <div class="fi-text">
                            <h4>Щотижневі новинки</h4>
                            <p>Нові скорочення кожного тижня</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="features-cta-mobile">
                <a href="register" class="view-all-btn" style="display:inline-block;">Спробувати безкоштовно →</a>
            </div>
        </div>
    </section>

    <?php /* PRICING SECTION - HIDDEN
    <section class="pricing" id="pricing">
        <div class="pricing-container">
            <div class="section-header">
                <h2>Оберіть свій план</h2>
                <p>Доступ до всіх книг та рекомендацій</p>
            </div>

            <div class="pricing-grid">
                <div class="pricing-card">
                    <div class="pricing-plan-name">Місячний</div>
                    <div class="price">₴199<span class="price-period">/міс</span></div>
                    <p class="pricing-desc">Гнучкий план для початку</p>
                    <ul class="pricing-features">
                        <li>Необмежений доступ</li>
                        <li>Аудіо версії</li>
                        <li>Рекомендації лідерів</li>
                        <li>Всі категорії</li>
                    </ul>
                    <button class="btn-secondary" style="width:100%;border:none;">Обрати</button>
                </div>

                <div class="pricing-card featured">
                    <div class="featured-badge">Найпопулярніше</div>
                    <div class="pricing-plan-name">Річний</div>
                    <div class="price">₴1599<span class="price-period">/рік</span></div>
                    <p class="pricing-desc">Заощаджуйте 33% при оплаті на рік</p>
                    <ul class="pricing-features">
                        <li>Всі переваги місячного</li>
                        <li>Ранній доступ</li>
                        <li>Пріоритетна підтримка</li>
                        <li>Знижка 33%</li>
                    </ul>
                    <button class="btn-primary" style="width:100%;">Обрати</button>
                </div>
            </div>
        </div>
    </section>
ENDPRICING */ ?>

    <section class="testimonials">
        <div class="testimonials-container">
            <div class="section-header">
                <h2 class="section-title">Що кажуть наші читачі</h2>
                <p class="section-subtitle">Тисячі людей вже покращили свої знання з TENBOOK</p>
            </div>

            <div class="testi-list">
                <div class="testi-row">
                    <div class="testi-person">
                        <div class="testi-avatar-sm" style="background: linear-gradient(135deg, #667eea, #764ba2);">ОМ</div>
                        <div>
                            <div class="testi-person-name">Олександр Мельник</div>
                            <div class="testi-person-role">Підприємець, Київ</div>
                        </div>
                    </div>
                    <div>
                        <div class="testi-mini-stars">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                        </div>
                        <p class="testi-review-text">TENBOOK змінив моє ставлення до читання. Прочитав понад 50 скорочень за місяць — і це лише за перший місяць використання!</p>
                    </div>
                </div>
                <div class="testi-row">
                    <div class="testi-person">
                        <div class="testi-avatar-sm" style="background: linear-gradient(135deg, #f093fb, #f5576c);">ІК</div>
                        <div>
                            <div class="testi-person-name">Ірина Коваленко</div>
                            <div class="testi-person-role">Маркетолог, Львів</div>
                        </div>
                    </div>
                    <div>
                        <div class="testi-mini-stars">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                        </div>
                        <p class="testi-review-text">Рекомендації лідерів — це топ! Дізналася про стільки цікавих книг за короткий час. Тепер розумію, що читають успішні люди.</p>
                    </div>
                </div>
                <div class="testi-row">
                    <div class="testi-person">
                        <div class="testi-avatar-sm" style="background: linear-gradient(135deg, #4facfe, #00f2fe);">АП</div>
                        <div>
                            <div class="testi-person-name">Андрій Петренко</div>
                            <div class="testi-person-role">Студент, Харків</div>
                        </div>
                    </div>
                    <div>
                        <div class="testi-mini-stars">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                        </div>
                        <p class="testi-review-text">Як студент, можу дізнатися про топ книги за 10 хвилин. Ідеально вписується в насичений графік між парами і підготовкою.</p>
                    </div>
                </div>
                <div class="testi-row">
                    <div class="testi-person">
                        <div class="testi-avatar-sm" style="background: linear-gradient(135deg, #43e97b, #38f9d7);">МС</div>
                        <div>
                            <div class="testi-person-name">Марія Савченко</div>
                            <div class="testi-person-role">IT-менеджер, Дніпро</div>
                        </div>
                    </div>
                    <div>
                        <div class="testi-mini-stars">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="#fbbf24"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                        </div>
                        <p class="testi-review-text">Синхронізація між пристроями працює бездоганно. Починаю читати вдома, продовжую в метро — жодних зупинок у прогресі.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="review-modal" id="reviewModal">
        <div class="review-modal-content">
            <button class="modal-close" onclick="closeReviewModal()">✕</button>
            <h3 class="modal-title">Залишити відгук</h3>
            
            <form onsubmit="submitReview(event)">
                <div class="form-group">
                    <label class="form-label">Ім'я *</label>
                    <input type="text" class="form-input" required placeholder="Введіть ваше ім'я">
                </div>

                <div class="form-group">
                    <label class="form-label">Прізвище *</label>
                    <input type="text" class="form-input" required placeholder="Введіть ваше прізвище">
                </div>

                <div class="form-group">
                    <label class="form-label">Посада</label>
                    <input type="text" class="form-input" placeholder="Наприклад: Маркетолог, Київ">
                </div>

                <div class="form-group">
                    <label class="form-label">Ваша оцінка *</label>
                    <div class="star-rating">
                        <input type="radio" name="rating" id="star5" value="5" required>
                        <label for="star5"><svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></label>
                        <input type="radio" name="rating" id="star4" value="4">
                        <label for="star4"><svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></label>
                        <input type="radio" name="rating" id="star3" value="3">
                        <label for="star3"><svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></label>
                        <input type="radio" name="rating" id="star2" value="2">
                        <label for="star2"><svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></label>
                        <input type="radio" name="rating" id="star1" value="1">
                        <label for="star1"><svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Ваш відгук *</label>
                    <textarea class="form-input form-textarea" required placeholder="Поділіться своїми враженнями про TENBOOK..."></textarea>
                </div>

                <button type="submit" class="form-submit">Надіслати відгук</button>
            </form>
        </div>
    </div>

    <?php /* NEWSLETTER SECTION - HIDDEN
    <section class="newsletter">
        <div class="newsletter-container">
            <div class="newsletter-content">
                <h2>Отримуйте кращі скорочення щотижня</h2>
                <p>Підпишіться на розсилку та отримуйте добірку найцікавіших книжкових скорочень прямо на email</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Ваш email" class="email-input" required>
                    <button type="submit" class="btn-primary">Підписатися</button>
                </form>
                <p class="newsletter-note">Без спаму. Тільки якісний контент. Відписка в один клік.</p>
            </div>
        </div>
    </section>
ENDNEWSLETTER */ ?>

    <footer>
        <div class="footer-container">
            <div class="footer-main">
                <div class="footer-brand">
                    <div class="footer-logo">TENBOOK</div>
                    <p class="footer-tagline">Читай як найуспішніші люди світу</p>
                    <div class="app-buttons">
                        <button class="app-btn">
                            <span style="font-size: 1.5rem;">📱</span>
                            <div>
                                <div style="font-size: 0.7rem; opacity: 0.8;">Завантажити в</div>
                                <div style="font-weight: 700;">App Store</div>
                            </div>
                        </button>
                        <button class="app-btn">
                            <span style="font-size: 1.5rem;">🤖</span>
                            <div>
                                <div style="font-size: 0.7rem; opacity: 0.8;">Завантажити в</div>
                                <div style="font-weight: 700;">Google Play</div>
                            </div>
                        </button>
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
                    </div>

                    <div class="footer-column">
                        <h4>Продукт</h4>
                        <a href="#features">Можливості</a>
                        <a href="#celebrities">Рекомендації лідерів</a>
                        <a href="#pricing">Ціни</a>
                        <a href="#">Нові надходження</a>
                        <a href="catalog_page">Всі книги</a>
                    </div>

                    <div class="footer-column">
                        <h4>Компанія</h4>
                        <a href="#">Про нас</a>
                        <a href="#">Співпраця</a>
                        <a href="#">Блог</a>
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
                        <a href="#">FAQ</a>
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
                <div class="footer-social">
                    <a href="#" class="social-link">📘</a>
                    <a href="#" class="social-link">📷</a>
                    <a href="#" class="social-link">🐦</a>
                    <a href="#" class="social-link">💼</a>
                </div>
            </div>

            <div class="footer-copyright">
                <p>&copy; 2026 TENBOOK. Всі права захищені.</p>
            </div>
        </div>
    </footer>

    <script>
        // tc-bars: animation handled entirely by CSS @keyframes (see .tc-bar-fill-slow / fast)

        // Language selector
        document.querySelectorAll('.lang-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.lang-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
            });
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // Newsletter form
        document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('.email-input').value;
            alert('Дякуємо за підписку! Перевірте ' + email + ' для підтвердження.');
            this.reset();
        });

        // Toggle messengers popup
        function toggleMessengers() {
            const popup = document.getElementById('messengersPopup');
            popup.classList.toggle('active');
        }

        // Close messengers popup when clicking outside
        document.addEventListener('click', function(e) {
            const popup = document.getElementById('messengersPopup');
            const btn = document.querySelector('.support-btn');
            if (popup && !popup.contains(e.target) && e.target !== btn) {
                popup.classList.remove('active');
            }
        });

        // Review modal functions
        function openReviewModal() {
            document.getElementById('reviewModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeReviewModal() {
            document.getElementById('reviewModal').classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        function submitReview(e) {
            e.preventDefault();
            alert('Дякуємо за ваш відгук! Він буде опублікований після модерації.');
            closeReviewModal();
            e.target.reset();
        }

        // Close modal on outside click
        document.getElementById('reviewModal')?.addEventListener('click', function(e) {
            if (e.target === this) {
                closeReviewModal();
            }
        });
        // Toggle FAQ
        function toggleFaq(element) {
            const faqItem = element.parentElement;
            const isActive = faqItem.classList.contains('active');
            
            // Close all FAQ items
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
            });
            
            // Open clicked item if it wasn't active
            if (!isActive) {
                faqItem.classList.add('active');
            }
        }

        // Animated counters
        function animateCounter(element) {
            const target = parseInt(element.getAttribute('data-target'));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;

            const updateCounter = () => {
                current += step;
                if (current < target) {
                    element.textContent = Math.floor(current).toLocaleString();
                    requestAnimationFrame(updateCounter);
                } else {
                    element.textContent = target.toLocaleString();
                }
            };

            updateCounter();
        }

        // Trigger counter animation when section is visible
        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counters = entry.target.querySelectorAll('.stat-number[data-target]');
                    counters.forEach(counter => {
                        if (!counter.classList.contains('animated')) {
                            counter.classList.add('animated');
                            animateCounter(counter);
                        }
                    });
                }
            });
        }, observerOptions);

        const statsSection = document.querySelector('.stats-section');
        if (statsSection) {
            observer.observe(statsSection);
        }
        // Toggle FAQ
        function toggleFaq(element) {
            const faqItem = element.parentElement;
            const isActive = faqItem.classList.contains('active');
            
            // Close all FAQ items
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
            });
            
            // Open clicked item if it wasn't active
            if (!isActive) {
                faqItem.classList.add('active');
            }
        }

        // Animated counters
        function animateCounter(element) {
            const target = parseInt(element.getAttribute('data-target'));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;

            const updateCounter = () => {
                current += step;
                if (current < target) {
                    element.textContent = Math.floor(current).toLocaleString();
                    requestAnimationFrame(updateCounter);
                } else {
                    element.textContent = target.toLocaleString();
                }
            };

            updateCounter();
        }

        // Trigger counter animation when section is visible
        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counters = entry.target.querySelectorAll('.stat-number[data-target]');
                    counters.forEach(counter => {
                        if (!counter.classList.contains('animated')) {
                            counter.classList.add('animated');
                            animateCounter(counter);
                        }
                    });
                }
            });
        }, observerOptions);

        const statsSection = document.querySelector('.stats-section');
        if (statsSection) {
            observer.observe(statsSection);
        }

    </script>
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
        var btn = document.querySelector('.nav-account-btn');
        if (!btn) return;
        btn.onclick = function() { window.location.href = 'cabinet'; };
        if (user && user.photoURL) {
            btn.innerHTML = '<img src="' + user.photoURL + '" style="width:28px;height:28px;border-radius:50%;object-fit:cover;">';
        }
    });
    </script>
</body>
</html>            .celebrity-showcase {
                grid-template-columns: 1fr;
                grid-template-areas:
                    "celeb-profile"
                    "celeb-quote"
                    "celeb-books"
                    "celeb-btn";
                overflow: hidden;
                padding: 1.5rem;
            }

            .celeb-profile {
                flex-direction: row;
                align-items: center;
                text-align: left;
                gap: 1rem;
            }
            .celeb-profile .celebrity-photo {
                width: 64px;
                height: 64px;
                min-width: 64px;
                margin-bottom: 0;
            }
            .celeb-profile .celebrity-info h3 { font-size: 1.1rem; }
            .celeb-profile .celebrity-info p { font-size: 0.85rem; }
            .celeb-books { min-width: 0; overflow: hidden; }
            .book-item-h:hover {
                transform: none;
                box-shadow: none;
                background: #f8fafc;
            }

            .books-horizontal {
                display: flex;
                overflow-x: auto;
                scroll-snap-type: x mandatory;
                -webkit-overflow-scrolling: touch;
                gap: 1rem;
                padding-bottom: 0.5rem;
                scrollbar-width: none;
            }
            .books-horizontal::-webkit-scrollbar { display: none; }
            .books-horizontal .book-item-h {
                flex: 0 0 130px;
                min-width: 130px;
                max-width: 130px;
                box-sizing: border-box;
                scroll-snap-align: start;
                display: flex;
                flex-direction: column;
                padding: 0.8rem;
            }
            .books-horizontal .book-cover-h {
                height: 155px;
                aspect-ratio: unset;
                margin-bottom: 0.6rem;
            }
            .books-horizontal .book-details h4 {
                font-size: 0.8rem;
                font-weight: 700;
                line-height: 1.3;
                line-height: 1.4;
                height: 2.8em;
                overflow: hidden;
                margin-bottom: 0.25rem;
            }
            .books-horizontal .book-details p {
                font-size: 0.72rem;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                color: #64748b;
            }

            .celeb-btn {
                width: 100%;
                text-align: center;
                box-sizing: border-box;
                margin-top: 0;
            }


