(function($) {
  $('.button_dark').on('click', function(event) {
    event.preventDefault();
    $.ajax({
      method: 'get',
      url:
        qod_vars.rest_url +
        'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
      beforeSend: function(xhr) {
        xhr.setRequestHeader('X-WP-Nonce', qod_vars.wpapi_nonce);
      }
    }).done(function(response) {
      console.log(response);
      $('.entry-content').html(response[0].content.rendered);
      $('.entry-author').html(response[0].title.rendered);
      $('.entry-source').html(response[0]._qod_quote_source.rendered);

    });
  });
// })(jQuery);

$('#form').on('submit', function(event) {
  event.preventDefault();

  const info = {
    title: $('#author').val(),
    content: $('#quote').val(),
    _qod_quote_source: $('#source').val(),
    _qod_quote_source_url: $('#url').val(),

  };
  $.ajax({
    method: 'post',
    url: qod_vars.rest_url + 'wp/v2/posts/',
    data: info,
    success: function(responses) {
      console.log('success');

    },
    beforeSend: function(xhr) {
      xhr.setRequestHeader('X-WP-Nonce', qod_vars.wpapi_nonce);
    }
  }).done(function(){
    console.log('done');
  })
});
})(jQuery);
  