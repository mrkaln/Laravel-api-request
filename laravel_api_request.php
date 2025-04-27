 <?php

$client = new \GuzzleHttp\Client();

$response = $client->request('GET', 'https://imdb232.p.rapidapi.com/api/actors/get-bio?nm=nm0000573', [
	'headers' => [
		'x-rapidapi-host' => 'imdb232.p.rapidapi.com',
		'x-rapidapi-key' => '000000',
	],
]);

$data = json_decode($response->getBody(), true);
$actorName = $data['data']['name']['nameText']['text'];
$actorimage = $data['data']['name']['primaryImage']['url'];

//output the image/
echo "<img class='h-24 w-24' src='$actorimage' height='100px' width='100px'";

?>