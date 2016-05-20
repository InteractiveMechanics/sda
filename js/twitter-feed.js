$( window ).load(function() {

/* TWITTER FETCHER */

var config1 = {
	"id": '657514433682501632', // Tweets by @paeaonline
	"domId":'',
	"maxTweets": 4,
	"enableLinks": true,
	"showUser": false,
	"showTime": false,
// 	"dateFunction": momentDateFormatter,
	"showRetweet": true,
	"customCallback": handleTweets,
	"showInteraction": false
};

/*
function momentDateFormatter(date, dateString) {
  return moment(dateString).fromNow();
}
*/

function handleTweets(tweets) {
	
	var x = tweets.length;
	var n = 0;
	var element = $('#twitter-feed');
	while(n < x) {
/*
		for(i= 0; i < element.length; i++) {
			element.append(tweets[n]);
			n++;
			
		}
*/
		
		$('#twitter-feed').each(function() {
			$(this).append
		});
		n++
	
	}
    }
	
twitterFetcher.fetch(config1);


});