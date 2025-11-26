    <h1 class="mb-4">Input Buku Tamu</h1>

    <form action="proses.php" method="post">
      
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <div class="mb-3">
        <label for="komentar" class="form-label">Komentar</label>
        <textarea class="form-control" id="komentar" name="komentar" rows="5" required></textarea>
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
      <a href = "index.php?p=bukutamu" class="btn btn-secondary">List Tamu</a>
    </form>
    
  </div>
</body>
</html>
