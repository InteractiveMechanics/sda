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

	$('.grid-item--large').each(function(i, elem) {
		$(elem).append(tweets[i]);
		
	})
	
	
}
	
twitterFetcher.fetch(config1);


});