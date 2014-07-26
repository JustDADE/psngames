<?

$q = $m->query("SELECT * FROM games WHERE releasetime < CURRENT_DATE ORDER BY releasetime DESC LIMIT 3");

while ($game = $q->fetch_assoc()) {
?>

<div class="game_block">
  <img src="images/games/<? echo $game['image']; ?>w.png" alt="Game" />
</div>
<? } ?>
