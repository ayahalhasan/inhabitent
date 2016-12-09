// This function show and hides a search filed in the hrader of all page

jQuery(document).ready(function($) {
    $('.search-toggle').on('click', function() {
        // console.log('test');
        $input = $('.search-header input');
        $input.toggle('smooth');
        $input.focus();
    });
});
