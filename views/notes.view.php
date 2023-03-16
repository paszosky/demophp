<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
<?php require('partials/banner.php'); ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <h2>Yours notes:</h2>
      <ul>
        <?php foreach ($notes as $note): ?>
          <li>
            <a href="note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
              <?= $note['body'] ?>
            </a>
          <li>
        <?php endforeach; ?>
      </ul>
    </div>
  </main>

  <?php require('partials/footer.php'); ?>