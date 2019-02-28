(function($) {
  $('#button_dark').on('click', function(event) {
    event.preventDefault();
    $.ajax({
      method: 'get',
      url: qod_vars.rest_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
      beforeSend: function(xhr) {
        xhr.setRequestHeader('X-WP-Nonce', qod_vars.wpapi_nonce);
      }
    }).done(function(response) {
      console.log(response);
      $('.entry-content').html(response[0].content.rendered);
      $('.entry-content').html(response[0].author[2]);

    });
  });
})(jQuery);
