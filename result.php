<?php
require_once('twitter-api-php-master/TwitterAPIExchange.php');
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "Enter your own key",
    'oauth_access_token_secret' => "Enter your own key",
    'consumer_key' => "Enter your own key",
    'consumer_secret' => "Enter your own key"
);
$url = "https://api.twitter.com/1.1/search/tweets.json";
 
if (isset($_GET['keyword']))  {$keyword = preg_replace("/[^A-Za-z0-9_]/", '', $_GET['keyword']);}  else {$keyword  = "NBA";}
if (isset($_GET['count']) && is_numeric($_GET['count'])) {
    $count= $_GET['count'];
} else {
    $count= 10;
}
$requestMethod = "GET"; 
$getfield = "?q=$keyword&count=$count";
 
$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
                    ->buildOauth($url, $requestMethod)
                    ->performRequest();
 
$tweets = json_decode($response);

echo "These are the tweets for $keyword <br/>";
echo "Showing $count results <br />";
echo "<table><tr><a href=\"index.php\"> Search again</a></tr></table>";
echo "<table border =\"1\" style='border-collapse: collapse' id=\"results\">";
    echo "<tr>";
    echo "<th>Time and Date of Tweet </th>";
    echo "<th>Tweet </th>";
    echo "<th>Twitter Name </th>";
    echo "<th> Twitter ID </th>";
    echo "<th> Profile Image </th>";
    echo "</tr>";
foreach($tweets->statuses as $tweet)
{
    echo "<tr>";
    echo "<td> $tweet->created_at </td>";
    echo "<td> $tweet->text  </td>";
    echo "<td>". $tweet->user->name . PHP_EOL . "</td>";
    echo "<td>". $tweet->user->id_str . PHP_EOL . "</td>";
    echo "<td>". $tweet->user->profile_image_url . PHP_EOL . "</td>";
    echo "</tr>";
}
echo "</table>"
?>
<html>
<link rel="stylesheet" href="main.css">
<title>Twitter API Project</title>
</html>