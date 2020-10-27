$('#jsShowMore').click(function (e) {
  e.preventDefault();
  console.log('click');
  let show = $('#jsShowMore').attr('data-show')
  // let content = $('#content')
  console.log('show: ' + show)


  $.ajax({
    type: 'POST',
    url: '/controllers/index.php',
    data: {SHOW: show},
    success: function(data){
      console.log(data)

      // $('#content').html(data);
      $('#gallery').html(data);
    }
  })

})
