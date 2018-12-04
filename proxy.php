<?php 
    set_time_limit(300);

    
require_once('config.php');
$token = TOKEN;
$base  = 'https://secure.galiboo.com/api/';
$count = 1;
$page = 1;
$threshold = 0.5;
$type="";
$request_url = $base;
$url = "";
$method = "get";
/*

{
  "smart_tags": {
      "Emotion-Cheerful_/_Festive": 0.006847914308309555, 
      "Emotion-Calming_/_Soothing": 0.07326637208461761, 
      "Emotion-Happy": 0.010212373919785023, 
      "Emotion-Emotional_/_Passionate": 0.060022205114364624
  }
}
*/
$postData = array("smart_tags" => array(
    "Emotion-Cheerful_/_Festive"=> 0.5, //a
    "Emotion-Calming_/_Soothing"=> 0.5,  //b
    "Emotion-Happy"=> 0.5, //c
    "Emotion-Emotional_/_Passionate"=> 0.5//d
    )
);



if(isset($_GET)){

    if($_GET["type"] && $_GET["type"] != ""){
        $type  = $_GET["type"];
        switch($type){
            case "smart_search":
                if($_GET["query"] && $_GET["query"] != ""){
                    $query  = urlencode($_GET["query"]);
                }else{
                    http_response_code (400);
                }
            
                $request_url .= "discover/tracks/smart_search/"."?token=$token&thershold=$threshold&q=$query&count=$count&page=$page";

                break;

            case "analyze_youtube":
                if($_GET["url"] && $_GET["url"] != ""){
                    $url  = urlencode($_GET["url"]);
                }else{
                    http_response_code (400);
                }
                $request_url .= "analyzer/analyze_youtube/"."?token=$token&url=$url";
            break;

            case "range_search":
/*             $postData = array("smart_tags" => array(
                "Emotion-Cheerful_/_Festive"=> 0.006847914308309555, //a
                "Emotion-Calming_/_Soothing"=> 0.07326637208461761,  //b
                "Emotion-Happy"=> 0.010212373919785023, //c
                "Emotion-Emotional_/_Passionate"=> 0.060022205114364624 //d
                )
            ); */
            $method = "post";
            $a = 0;

            if($_GET["a"] && $_GET["a"] != ""){
                $a =$_GET["a"];
                $postData["smart_tags"]["Emotion-Cheerful_/_Festive"] = $a;
            }else{
                //http_response_code (400);
            };
            if($_GET["b"] && $_GET["b"] != ""){
                $b =$_GET["b"];
                $postData["smart_tags"]["Emotion-Calming_/_Soothing"] = $b;
            }else{
                //http_response_code (400);
            };
            if($_GET["c"] && $_GET["c"] != ""){
                $c =$_GET["c"];
                $postData["smart_tags"]["Emotion-Happy"] = $c;
            }else{
                //http_response_code (400);
            };


            $request_url .= "discover/tracks/find/"."?token=$token&threshold=$threshold&limit=$count&page=$page";
            break;
        }
}

if($method == "get"){
    
    echo(file_get_contents($request_url));
}else{

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => $request_url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($postData),
    CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {

        echo($response);
    } 
}

}
?>