/*
 *      Check us out on Twitter: @fourdeo.
 */
 
$(function() {
    //  Set the default variables
    var $d = $(document),
        $w = $(window),
        $b = $('body');

    //  Add a JS class to the body
    $b.addClass('js');

    //  Get the latest tweet, and replace
    $.ajax({
        type: 'get',
        url: 'http://api.twitter.com/1/statuses/user_timeline/fourdeo.json',
        dataType: 'jsonp',
        success: function(data) {
            var tweet = data[0].text;
            
            if(tweet.length >= 80) {
                tweet = tweet.substr(0, 77) + '&hellip;';
            }
            $('footer p span').html(tweet + ' <a href="http://twitter.com/fourdeo">We\'re @fourdeo.</a>');
        }
    })
});