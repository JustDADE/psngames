<?

$q = $m->query("SELECT * FROM games JOIN community ON community.game_id = games.id ORDER BY games.releasetime ASC");

while ($game = $q->fetch_assoc()) {

    $release = explode('-', $game['releasetime']);
    $year = $release[0];
    $month = $release[1];
    $day = $release[2];
?>
<div class="game_block">
  <img src="images/games/<? echo $game['image']; ?>w.png" alt="<? echo $game['title']; ?>" />
  <? if ($year != '0000') { ?>
    <div class="game_datetime" data-time="<? echo $game['releasetime']; ?>">
      <div class="date_block year"><span><? echo $year; ?></span>Years</div>
      <div class="date_block month"><span><? echo $month; ?></span>Months</div>
      <div class="date_block day"><span><? echo $day; ?></span>Days</div>
    </div>
  <?}?>
</div>
<? } ?>
