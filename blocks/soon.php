<?

$q = $m->query("SELECT * FROM games WHERE releasetime > CURRENT_DATE ORDER BY releasetime ASC LIMIT 3");

while ($game = $q->fetch_assoc()) {

    $release = explode('-', $game['releasetime']);
    $year = $release[0];
    $month = $release[1];
    $day = $release[2];
?>
<div class="game_block">
  <img src="images/games/<? echo $game['image']; ?>w.png" alt="<? echo $game['title']; ?>" />
  <div class="game_datetime" data-time="<? echo $game['releasetime']; ?>">
    <div class="date_block year"><span><? echo $year; ?></span>Years</div>
    <div class="date_block month"><span><? echo $month; ?></span>Months</div>
    <div class="date_block day"><span><? echo $day; ?></span>Days</div>
  </div>
</div>
<? } ?>
