(function($) {

  $('#close-comment').on('click', function(event){
    event.preventDefault();

    $.ajax({
      method: 'post',
      url: comment_vars.rest_url + 'wp/v2/posts/' + comment_vars.the_post_id,
      data: {
        comment_status: 'open'
      },
      beforeSend: function(xhr) {
        xhr.setRequestHeader( 'X-WP-Nonce',comment_vars.wpapi_nonce);
      }
    }).done(function(respond) {
      alert('Success! Comment have been closed.');
    });
  });

}(jQuery));
