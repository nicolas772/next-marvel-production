<main>
  <section>
    <img 
      src="<?= $data["poster_url"]; ?>" 
      width="300" 
      alt="Poster de <?= $data["title"]; ?>"
      style="border-radius: 16px;"
      
    ?>
  </section>
  <hgroup>
    <h3><?= $data["title"];?> - <?= $untilMessage ?></h3>
    <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
    <p>La siguiente producción de Marvel es: <?= $data["following_production"]["title"]; ?></p>
  </hgroup>
</main>