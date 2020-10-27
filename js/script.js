$('#jsShowMore').click(function (e) {
  e.preventDefault();
  let show = $('#jsShowMore').attr('data-show')
  $('#jsShowMore').attr('data-show', 5 + parseInt(show))

  $.ajax({
    type: 'POST',
    url: '/controllers/index.php',
    data: {SHOW: show},
    success: function(data){
      console.log(data)
      $('#gallery').html(data)
    }
  })
})
