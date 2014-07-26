$(document).ready(function() {
  $('.game_datetime').hover(function() {
    $(this).stop().animate({ 'opacity' : 1 });
  }, function() {
    $(this).stop().animate({ 'opacity' : 0 });
  });

  dateAlign();

  $('.game_datetime').each(function() {
      var that = $(this);
      var date = $(this).data('time');
      var mDate = moment(date, 'YYYY-MM-DD');

      function setDifference() {
          var diff = compareDate(moment(), mDate);
          that.find('.year span').html(diff.years);
          that.find('.month span').html(diff.months);
          that.find('.day span').html(diff.days);
          that.find('.time').html(diff.time);
      }

      setInterval(function() { setDifference(); }, 1000);
  });


  var topBlocks = $('#closest .game_block').height();
  var topBlocksDate = $('#closest .game_block .date_block').height();
  var topMargin = (topBlocks - topBlocksDate - 10) / 2;

  $('#closest .game_block .date_block').css('margin-top', topMargin+'px');
  $('#community .game_block .date_block').css('margin-top', topMargin+'px');

  var contentBlocks = $('#upcoming .game_block').height();
  var contentBlocksDate = $('#upcoming .game_block .date_block').height();
  var contentMargin = (contentBlocks - contentBlocksDate - 10) / 2;
  $('#upcoming .game_block .date_block').css('margin-top', contentMargin+'px');

  $(window).on('resize', function() {
    dateAlign();
  });

  function compareDate(start, end) {
    var months = end.diff(start, 'months');
    months = months - (Math.floor(months / 12) * 12);
      var difference = {
          years: end.diff(start, 'years'),
          months: months,
          days: moment(end.diff(start)).format('D'),
          time: moment(end.diff(start)).format('HH:MM:ss')
      };

      return difference;
  }

  function dateAlign() {
    var topBlocks = $('#closest .game_block').height();
    var topBlocksDate = $('#closest .game_block .date_block').height();
    var topMargin = (topBlocks - topBlocksDate - 10) / 2;

    $('#closest .game_block .date_block').css('margin-top', topMargin+'px');
    $('#community .game_block .date_block').css('margin-top', topMargin+'px');

    var contentBlocks = $('#upcoming .game_block').height();
    var contentBlocksDate = $('#upcoming .game_block .date_block').height();
    var contentMargin = (contentBlocks - contentBlocksDate - 10) / 2;
    $('#upcoming .game_block .date_block').css('margin-top', contentMargin+'px');
  }
});
