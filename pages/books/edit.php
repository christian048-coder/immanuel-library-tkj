<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Buku - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/books/edit.css">
</head>
<body>
  <?php
  require '../../repositories/book-repository.php';
  require '../../repositories/category-repository.php';
  require '../../repositories/author-repository.php';
  // getBook ngasih satu buku contoh Antologi Rasa Nusantara, ditampung di $book terus dipakai buat ngisi value tiap input.
  $book = getBook();
  $categories = getCategories();
  $authors = getAuthors();
  ?>
  <div class="app-shell">
  <?php require '../../components/admin/sidebar.php'; ?>

    <main class="app-main">
    <?php $pageTitle = 'Edit Buku'; $pageSubtitle = 'Perbarui data buku, kategori, dan penulis'; require '../../components/admin/topbar.php'; ?>

      <div class="app-content">
      <!-- formnya dikirim POST ke update.php, tombolnya namanya ubah_buku plus ada hidden id biar tahu buku mana yang diubah. -->
        <form method="POST" action="../../actions/books/update.php">
          <!-- input id yang disembunyiin, ikut kekirim pas submit biar actions tahu baris mana yang dimaksud. -->
          <input type="hidden" name="id" value="<?= $book['id'] ?>">
          <div class="form-card" style="margin-bottom:20px;">
            <div class="form-section-title">Data Buku</div>
            <div class="form-group">
              <label for="title">Judul Buku</label>
              <input type="text" id="title" name="title" value="<?= $book['title'] ?>">
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" id="isbn" name="isbn" value="<?= $book['isbn'] ?>">
              </div>
              <div class="form-group">
                <label for="year">Tahun Terbit</label>
                <input type="number" id="year" name="year" value="<?= $book['year'] ?>">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="stock">Jumlah Stok</label>
                <input type="number" id="stock" name="stock" value="<?= $book['stock'] ?>">
              </div>
              <div class="form-group">
                <label for="category_id">Kategori</label>
                <select id="category_id" name="category_id">
                  <?php foreach ($categories as $category): ?>
                    <?php // kalau id kategorinya sama kayak punya buku, dropdownnya otomatis kepilih itu, trik kecil biar user enggak milih ulang. ?>
                    <option value="<?= $category['id'] ?>" <?= $category['id'] === $book['category_id'] ? 'selected' : '' ?>><?= $category['name'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea id="description" name="description" rows="3"><?= $book['description'] ?></textarea>
            </div>
          </div>

          <div class="form-card">
            <div class="form-section-title">Penulis Buku</div>
            <div class="form-group">
              <label>Pilih Penulis (bisa lebih dari satu)</label>
              <div class="checkbox-grid">
                <?php foreach ($authors as $author): ?>
                  <label class="checkbox-item">
                    <?php // kalau id penulisnya ada di author_ids bukunya, checkboxnya otomatis kecentang. ?>
                    <input type="checkbox" name="author_ids[]" value="<?= $author['id'] ?>" <?= in_array($author['id'], $book['author_ids']) ? 'checked' : '' ?>>
                    <?= $author['name'] ?>
                  </label>
                <?php endforeach; ?>
              </div>
            </div>

            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" name="ubah_buku" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
