<?php  ?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Особистий кабінет — TENBOOK</title>
    <style>
* { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Inter', sans-serif; background: #f8fafc; color: #1e293b; }

        main { max-width: 1100px; margin: 0 auto; padding: 7rem 2rem 4rem; }

        /* Profile */
        .profile-section { display: flex; align-items: center; gap: 1.5rem; margin-bottom: 3rem; padding: 2rem; background: white; border-radius: 20px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); border: 1px solid #f1f5f9; }
        .profile-avatar { width: 72px; height: 72px; border-radius: 50%; object-fit: cover; border: 3px solid #e2e8f0; flex-shrink: 0; }
        .profile-avatar-placeholder { width: 72px; height: 72px; border-radius: 50%; background: linear-gradient(135deg, #0ea5e9, #8b5cf6); display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
        .profile-info h1 { font-size: 1.4rem; font-weight: 800; color: #1e293b; }
        .profile-info p { color: #64748b; font-size: 0.9rem; margin-top: 0.2rem; }
        .profile-stats { margin-left: auto; display: flex; gap: 2rem; }
        .stat-item { text-align: center; }
        .stat-num { font-size: 1.6rem; font-weight: 900; color: #1e293b; line-height: 1; }
        .stat-label { font-size: 0.75rem; color: #94a3b8; margin-top: 0.2rem; }
        .btn-signout { margin-left: 1rem; padding: 0.5rem 1rem; border: 1.5px solid #e2e8f0; border-radius: 8px; background: white; color: #64748b; font-size: 0.85rem; font-weight: 500; cursor: pointer; transition: all 0.2s; }
        .btn-signout:hover { border-color: #ef4444; color: #ef4444; }

        /* Favorites */
        .section-title { font-size: 1.2rem; font-weight: 800; color: #1e293b; margin-bottom: 1.2rem; display: flex; align-items: center; gap: 0.6rem; }
        .section-title span { font-size: 0.8rem; font-weight: 600; color: #94a3b8; background: #f1f5f9; padding: 0.2rem 0.6rem; border-radius: 20px; }

        .books-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 1.5rem; }

        /* Book cards — стиль як у каталозі */
        .book-card { background: white; border-radius: 16px; border: 1px solid #e8edf2; overflow: hidden; transition: all 0.25s; box-shadow: 0 2px 8px rgba(0,0,0,0.05); display: flex; flex-direction: column; }
        .book-card:hover { transform: translateY(-4px); box-shadow: 0 12px 32px rgba(0,0,0,0.1); }
        .book-cover { width: 100%; aspect-ratio: 3/4; position: relative; overflow: hidden; cursor: pointer; flex-shrink: 0; }
        .book-cover img { position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; display: block; }
        .book-info { padding: 0.9rem 1rem 1rem; display: flex; flex-direction: column; flex: 1; }
        .book-title { font-size: 0.95rem; font-weight: 700; color: #1e293b; margin-bottom: 0.25rem; line-height: 1.35; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; min-height: 2.7em; }
        .book-author { font-size: 0.8rem; color: #64748b; margin-bottom: 0.75rem; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
        .book-actions { padding-top: 0.6rem; border-top: 1px solid #e8edf2; margin-top: auto; }
        .book-progress-bar-wrap { height: 6px; background: #f1f5f9; border-radius: 10px; overflow: hidden; margin-bottom: 0.5rem; }
        .book-progress-bar-fill { height: 100%; border-radius: 10px; background: linear-gradient(90deg, #0ea5e9, #8b5cf6); transition: width 0.6s ease; }
        .book-progress-meta { display: flex; align-items: center; justify-content: space-between; }
        .book-progress-pct { font-size: 0.78rem; font-weight: 700; color: #0ea5e9; }
        .book-progress-label { font-size: 0.75rem; color: #94a3b8; }
        .book-actions-row { display: flex; gap: 0.5rem; margin-top: 0.6rem; }
        .btn-read { flex: 1; padding: 0.5rem; background: linear-gradient(135deg, #0ea5e9, #8b5cf6); color: white; border: none; border-radius: 8px; font-size: 0.82rem; font-weight: 600; cursor: pointer; text-decoration: none; text-align: center; transition: opacity 0.2s; display: flex; align-items: center; justify-content: center; }
        .btn-read:hover { opacity: 0.85; }
        .btn-remove { padding: 0.5rem 0.7rem; border: 1.5px solid #fee2e2; background: #fff1f2; color: #ef4444; border-radius: 8px; cursor: pointer; transition: all 0.2s; display: flex; align-items: center; justify-content: center; }
        .btn-remove:hover { background: #ffe4e6; }
        .btn-remove svg { fill: #ef4444; }

        /* Empty state */
        .empty-state { text-align: center; padding: 4rem 2rem; color: #94a3b8; }
        .empty-state svg { margin-bottom: 1rem; opacity: 0.4; }
        .empty-state h3 { font-size: 1.1rem; font-weight: 700; color: #64748b; margin-bottom: 0.5rem; }
        .empty-state p { font-size: 0.9rem; margin-bottom: 1.5rem; }
        .btn-catalog { display: inline-block; padding: 0.75rem 1.5rem; background: linear-gradient(135deg, #0ea5e9, #8b5cf6); color: white; border-radius: 10px; text-decoration: none; font-weight: 600; font-size: 0.9rem; }

        /* Not logged in */
        .auth-gate { text-align: center; padding: 6rem 2rem; }
        .auth-gate h2 { font-size: 1.5rem; font-weight: 800; margin-bottom: 0.5rem; }
        .auth-gate p { color: #64748b; margin-bottom: 2rem; }
        .btn-google { display: inline-flex; align-items: center; gap: 0.75rem; padding: 0.9rem 2rem; border: 2px solid #e2e8f0; border-radius: 12px; background: white; font-size: 1rem; font-weight: 600; cursor: pointer; transition: all 0.2s; box-shadow: 0 2px 8px rgba(0,0,0,0.06); }
        .btn-google:hover { border-color: #0ea5e9; box-shadow: 0 4px 16px rgba(14,165,233,0.15); }

        @media (max-width: 640px) {
            .profile-stats { display: none; }
            .books-grid { grid-template-columns: repeat(2, 1fr); }
            .profile-section { flex-wrap: wrap; gap: 1rem; padding: 1.2rem; }
            .btn-signout { margin-left: 0; width: 100%; text-align: center; }
        }
    </style>
<?php include 'header_styles.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>
<script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore-compat.js"></script>
<main id="mainContent">
        <!-- Заповнюється JS -->
    </main>
    <script>
    // Firebase вже ініціалізовано в header.php
    var auth = firebase.auth();
    var db = firebase.firestore();

    var BOOKS = {
        'atomic_habits': { title: 'Атомні Звички', author: 'Джеймс Клір', cover_bg: '#EBF8EF', cover_img: 'covers_ua/Atomic Habits.svg', page: 'book_page_atomic_habits', reader: 'reader_atomic_habits' },
        'zero_to_one':   { title: 'Від Нуля до Одиниці', author: 'Пітер Тіль', cover_bg: '#E4EBF5', cover_img: 'covers_ua/Zero to One.svg', page: 'book_page_zero_to_one', reader: 'reader_zero_to_one' },
        '7habits':       { title: '7 Навичок', author: 'Стівен Кові', cover_bg: '#EEF4F8', cover_img: 'covers_ua/The 7 Habits.svg', page: 'book_page_7habits', reader: 'reader_7habits' },
        'sapiens':       { title: 'Сапієнс', author: 'Юваль Ной Харарі', cover_bg: '#F6F1E8', cover_img: 'covers_ua/Sapiens.svg', page: 'book_page_sapiens', reader: 'reader_sapiens' },
        'principles':    { title: 'Принципи', author: 'Рей Даліо', cover_bg: '#EDEEE9', cover_img: 'covers_ua/Principles.svg', page: 'book_page_principles', reader: 'reader_principles' },
    };

    function signInWithGoogle() {
        var provider = new firebase.auth.GoogleAuthProvider();
        auth.signInWithPopup(provider).catch(console.error);
    }

    function signOut() {
        auth.signOut().then(function() {
            window.location.href = 'index';
        });
    }

    function renderNotLoggedIn() {
        document.getElementById('mainContent').innerHTML =
            '<div class="auth-gate">' +
            '<h2>Увійдіть у кабінет</h2>' +
            '<p>Зберігайте улюблені книги та відстежуйте прогрес читання</p>' +
            '<button class="btn-google" onclick="signInWithGoogle()">' +
            '<svg width="20" height="20" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>' +
            'Увійти через Google' +
            '</button></div>';
    }

    function renderCabinet(user, favs, progressMap) {
        progressMap = progressMap || {};
        var accountBtn = document.getElementById('accountBtn');
        if (accountBtn && user.photoURL) {
            accountBtn.innerHTML = '<img src="' + user.photoURL + '" style="width:100%;height:100%;object-fit:cover;">';
        }

        var favCount = favs.length;
        var profileHtml =
            '<div class="profile-section">' +
            (user.photoURL
                ? '<img class="profile-avatar" src="' + user.photoURL + '" alt="' + (user.displayName||'') + '">'
                : '<div class="profile-avatar-placeholder"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>') +
            '<div class="profile-info"><h1>' + (user.displayName || 'Користувач') + '</h1><p>' + user.email + '</p></div>' +
            '<div class="profile-stats"><div class="stat-item"><div class="stat-num">' + favCount + '</div><div class="stat-label">Обраних книг</div></div></div>' +
            '<button class="btn-signout" onclick="signOut()">Вийти</button>' +
            '</div>';

        var favsHtml = '<div class="section-title">Обрані книги <span>' + favCount + '</span></div>';

        if (favCount === 0) {
            favsHtml += '<div class="empty-state">' +
                '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>' +
                '<h3>Поки що порожньо</h3>' +
                '<p>Додавайте книги в обрані на сторінці книги</p>' +
                '<a href="catalog_page" class="btn-catalog">Переглянути каталог</a>' +
                '</div>';
        } else {
            favsHtml += '<div class="books-grid">';
            favs.forEach(function(bookId) {
                var b = BOOKS[bookId];
                if (!b) return;
                var pct = (progressMap[bookId] && progressMap[bookId].percent) ? progressMap[bookId].percent : 0;
                var btnLabel = pct > 0 ? 'Продовжити' : 'Читати';
                var progressLabel = pct >= 100 ? 'Прочитано!' : (pct > 0 ? 'Прочитано ' + pct + '%' : 'Ще не читали');
                favsHtml +=
                    '<div class="book-card">' +
                    '<div class="book-cover" style="background:' + b.cover_bg + ';position:relative;overflow:hidden;" onclick="window.location=\'' + b.page + '\'">' +
                    '<img src="' + b.cover_img + '" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;display:block;">' +
                    '</div>' +
                    '<div class="book-info">' +
                    '<div class="book-title">' + b.title + '</div>' +
                    '<div class="book-author">' + b.author + '</div>' +
                    '<div class="book-actions">' +
                    '<div class="book-progress-bar-wrap"><div class="book-progress-bar-fill" style="width:' + pct + '%"></div></div>' +
                    '<div class="book-progress-meta"><span class="book-progress-pct">' + pct + '%</span><span class="book-progress-label">' + progressLabel + '</span></div>' +
                    '<div class="book-actions-row">' +
                    '<a href="' + b.reader + '" class="btn-read">' + btnLabel + '</a>' +
                    '<button class="btn-remove" onclick="removeFavorite(\'' + bookId + '\')" title="Видалити з обраних">' +
                    '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>' +
                    '</button>' +
                    '</div></div></div></div>';
            });
            favsHtml += '</div>';
        }

        document.getElementById('mainContent').innerHTML = profileHtml + favsHtml;
    }

    function removeFavorite(bookId) {
        var user = auth.currentUser;
        if (!user) return;
        db.collection('users').doc(user.uid).get().then(function(doc) {
            var favs = doc.exists ? (doc.data().favorites || []) : [];
            favs = favs.filter(function(id) { return id !== bookId; });
            return db.collection('users').doc(user.uid).set({ favorites: favs }, { merge: true });
        }).then(function() {
            auth.currentUser && loadCabinet(auth.currentUser);
        });
    }

    function loadCabinet(user) {
        db.collection('users').doc(user.uid).get().then(function(doc) {
            var favs = doc.exists ? (doc.data().favorites || []) : [];
            if (favs.length === 0) { renderCabinet(user, favs, {}); return; }
            var progressPromises = favs.map(function(bookId) {
                return db.collection('users').doc(user.uid).collection('progress').doc(bookId).get()
                    .then(function(d) { return { bookId: bookId, data: d.exists ? d.data() : {} }; })
                    .catch(function() { return { bookId: bookId, data: {} }; });
            });
            Promise.all(progressPromises).then(function(results) {
                var progressMap = {};
                results.forEach(function(r) { progressMap[r.bookId] = r.data; });
                renderCabinet(user, favs, progressMap);
            });
        }).catch(function(err) {
            console.error('Firestore error:', err);
            renderCabinet(user, [], {});
        });
    }

    auth.onAuthStateChanged(function(user) {
        if (user) {
            loadCabinet(user);
        } else {
            renderNotLoggedIn();
        }
    });
    </script>
</body>
</html>
