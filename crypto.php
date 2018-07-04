<?php
    //Simple USSD crypto checker, well am not a PHP pro,am mainly into android development,
    // but hey atleast i got this this simple USSD app up and running. It helps check latest 
    //updates on crypto stats and information for the first 50 cryptocurrencies.

    // Reads the variables sent via POST from our gateway
    $sessionId   = $_POST["sessionId"];
    $serviceCode = $_POST["serviceCode"];
    $phoneNumber = $_POST["phoneNumber"];
    $text        = $_POST["text"];


    $tick = file_get_contents('https://api.coinmarketcap.com/v1/ticker/');
    $url = $tick;
    $json = @file_get_contents($url);
    $data = json_decode($tick, TRUE);

    if ( $text == "" ) {
	 $response  = "CON Welcome to Blockchain Tracker. \n";
	 $response .= "1. Cryptocurrency rates \n";
	 $response .= "2. Cryptocurrency rankings ";

    } else if ( $text == "1" ) {
       // Business logic for first level response
       $response = "CON Choose the cryptocurrency you would like to view\n";
       $response .= "1. Bitcoin \n";
       $response .= "2. Ethereum \n";
       $response .= "3. Ripple \n";
       $response .= "4. Bitcoin Cash \n";
       $response .= "5. EOS \n";
       $response .= "6. Litecoin \n";
       $response .= "7. Stella \n";
       $response .= "8. Cardano \n";
       $response .= "9. IOTA \n";
       $response .= "10. Tether \n";
       $response .= "11. Tron \n";
       $response .= "12. Monero \n";
       $response .= "13. NEO \n";
       $response .= "14. Dash \n";
       $response .= "15. Ethereum Classic \n";
       $response .= "16. Binance Coin \n";
       $response .= "17. VeChain \n";
       $response .= "18. NEM \n";
       $response .= "19. Ontology \n";
       $response .= "20. OmiseGo \n" ;
       $response .= "21. Qtum \n" ;
       $response .= "22. Zcash \n" ;
       $response .= "23. ICON \n" ;
       $response .= "24. Lisk \n" ;
       $response .= "25. Bytecoin \n" ;
       $response .= "26. Zilliqa \n" ;
       $response .= "27. Decred \n" ;
       $response .= "28. Bitcoin Gold \n" ;
       $response .= "29. Aeternity \n" ;
       $response .= "30. 0x \n" ;
       $response .= "31. Augur \n" ;
       $response .= "32. Siacoin \n" ;
       $response .= "33. Bytom \n" ;
       $response .= "34. BitShares \n" ;
       $response .= "35. Steem \n" ;
       $response .= "36. Verge \n" ;
       $response .= "37. Maker \n" ;
       $response .= "38. Nano \n" ;
       $response .= "39. Dogecoin \n" ;
       $response .= "40. RChain \n" ;
       $response .= "41. Golem \n" ;
       $response .= "42. Bitcoin Diamond \n" ;
       $response .= "43. Waves \n" ;
       $response .= "44. DigiByte \n" ;
       $response .= "45. Populous \n" ;
       $response .= "46. Wanchain \n" ;
       $response .= "47. Stratis \n" ;
       $response .= "48. Mixin \n" ;
       $response .= "49. Basic Attention Token \n" ;
       $response .= "50. Status" ;
       
    } else if($text == "2") {
  // This is a terminal request. Note how we start the response with END
  $crypto0 = $data[0]['name'];
  $crypto1 = $data[1]['name'];
  $crypto2 = $data[2]['name'];
  $crypto3 = $data[3]['name'];
  $crypto4 = $data[4]['name'];
  $crypto5 = $data[5]['name'];
  $crypto6 = $data[6]['name'];
  $crypto7 = $data[7]['name'];
  $crypto8 = $data[8]['name'];
  $crypto9 = $data[9]['name'];
  $crypto10 = $data[10]['name'];
  $crypto11 = $data[11]['name'];
  $crypto12 = $data[12]['name'];
  $crypto13 = $data[13]['name'];
  $crypto14 = $data[14]['name'];
  $crypto15 = $data[15]['name'];
  $crypto16 = $data[16]['name'];
  $crypto17 = $data[17]['name'];
  $crypto18 = $data[18]['name'];
  $crypto19 = $data[19]['name'];
  $crypto20 = $data[20]['name'];
  $crypto21 = $data[21]['name'];
  $crypto22 = $data[22]['name'];
  $crypto23 = $data[23]['name'];
  $crypto24 = $data[24]['name'];
  $crypto25 = $data[25]['name'];
  $crypto26 = $data[26]['name'];
  $crypto27 = $data[27]['name'];
  $crypto28 = $data[28]['name'];
  $crypto29 = $data[29]['name'];
  $crypto30 = $data[30]['name'];
  $crypto31 = $data[31]['name'];
  $crypto32 = $data[32]['name'];
  $crypto33 = $data[33]['name'];
  $crypto34 = $data[34]['name'];
  $crypto35 = $data[35]['name'];
  $crypto36 = $data[36]['name'];
  $crypto37 = $data[37]['name'];
  $crypto38 = $data[38]['name'];
  $crypto39 = $data[39]['name'];
  $crypto40 = $data[40]['name'];
  $crypto41 = $data[41]['name'];
  $crypto42 = $data[42]['name'];
  $crypto43 = $data[43]['name'];
  $crypto44 = $data[44]['name'];
  $crypto45 = $data[45]['name'];
  $crypto46 = $data[46]['name'];
  $crypto47 = $data[47]['name'];
  $crypto48 = $data[48]['name'];
  $crypto49 = $data[49]['name'];


  $response = "END Rank 1. $crypto0 \n";
  $response .= "Rank 2. $crypto1 \n";
  $response .= "Rank 3. $crypto2 \n";
  $response .= "Rank 4. $crypto3 \n";
  $response .= "Rank 5. $crypto4 \n";
  $response .= "Rank 6. $crypto5 \n";
  $response .= "Rank 7. $crypto6 \n";
  $response .= "Rank 8. $crypto7 \n";
  $response .= "Rank 9. $crypto8 \n";
  $response .= "Rank 10. $crypto9 \n";
  $response .= "Rank 11. $crypto10 \n";
  $response .= "Rank 12. $crypto11 \n";
  $response .= "Rank 13. $crypto12 \n";
  $response .= "Rank 14. $crypto13 \n";
  $response .= "Rank 15. $crypto14 \n";
  $response .= "Rank 16. $crypto15 \n";
  $response .= "Rank 17. $crypto16 \n";
  $response .= "Rank 18. $crypto17 \n";
  $response .= "Rank 19. $crypto18 \n";  
  $response .= "Rank 20. $crypto19 \n";
  $response .= "Rank 21. $crypto20 \n";
  $response .= "Rank 22. $crypto21 \n";
  $response .= "Rank 23. $crypto22 \n";
  $response .= "Rank 24. $crypto23 \n";
  $response .= "Rank 25. $crypto24 \n";
  $response .= "Rank 26. $crypto25 \n";
  $response .= "Rank 27. $crypto26 \n";
  $response .= "Rank 28. $crypto27 \n";
  $response .= "Rank 29. $crypto28 \n";
  $response .= "Rank 30. $crypto29 \n";
  $response .= "Rank 31. $crypto30 \n";
  $response .= "Rank 32. $crypto31 \n";
  $response .= "Rank 33. $crypto32 \n";
  $response .= "Rank 34. $crypto33 \n";
  $response .= "Rank 35. $crypto34 \n";
  $response .= "Rank 36. $crypto35 \n";
  $response .= "Rank 37. $crypto36 \n";
  $response .= "Rank 38. $crypto37 \n";
  $response .= "Rank 39. $crypto38 \n";
  $response .= "Rank 40. $crypto39 \n";
  $response .= "Rank 41. $crypto40 \n";
  $response .= "Rank 42. $crypto41 \n";
  $response .= "Rank 43. $crypto42 \n";
  $response .= "Rank 44. $crypto43 \n";
  $response .= "Rank 45. $crypto44 \n";
  $response .= "Rank 46. $crypto45 \n";
  $response .= "Rank 47. $crypto46 \n";
  $response .= "Rank 48. $crypto47 \n";
  $response .= "Rank 49. $crypto48 \n";
  $response .= "Rank 50. $crypto49 \n";


 } else if($text == "1*1") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*2") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1027/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*3") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/52/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*4") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1831/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*5") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1765/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*6") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/2/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*7") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/512/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*8") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/2010/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*9") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1720/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*10") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/825/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*11") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1958/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*12") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/328/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*13") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1376/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*14") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/131/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*15") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1321/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*16") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1839/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*17") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1904/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*18") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/873/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*19") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/2566/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*20") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1808/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*21") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1684/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*22") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1437/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*23") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/2099/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*24") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1214/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*25") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/372/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*26") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/2469/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*27") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1168/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*28") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/2083/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*29") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1700/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*30") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1896/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*31") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1104/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*32") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1042/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*33") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1866/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*34") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/463/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*35") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1230/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*36") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/693/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*37") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1518/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*38") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1567/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*39") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/74/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*40") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/2021/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*41") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1455/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*42") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/2222/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*43") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1274/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*44") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/109/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*45") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1789/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*46") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/2606/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*47") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1343/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*48") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/2349/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*49") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1697/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 } else if($text == "1*50") {
  $tick = file_get_contents('https://api.coinmarketcap.com/v2/ticker/1759/');
  $url = $tick;
  $json = @file_get_contents($url);
  $data = json_decode($tick, TRUE);

  $name = $data['data']['name'];
  $symbol = $data['data']['symbol'];
  $price = $data['data']['quotes']['USD']['price'];
  $rank = $data['data']['rank'];
  $change24h = $data['data']['quotes']['USD']['percent_change_24h'];
  $changeW = $data['data']['quotes']['USD']['percent_change_7d'];
  

  $response = "END Name : $name \n";
  $response .= "Symbol : $symbol \n";
  $response .= "Price : $$price \n";
  $response .= "Rank : $rank \n";
  $response .= "24hr Change : $change24h% \n";
  $response .= "1 Week Change : $changeW% ";

 }
// Print the response onto the page so that our gateway can read it
header('Content-type: text/plain');
echo $response;

// DONE!!!
?>