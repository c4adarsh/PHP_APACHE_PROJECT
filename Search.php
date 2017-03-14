<!DOCTYPE html>
<html>
<head>
    <title> HW6 </title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <style>
        .theSearchbackground{
            background-color: #F3F3F3;
            height: 155px;
            width: 800px;
            margin: auto;
            padding-top: 2px;
            border: 2px solid #E8E8E8;
        }

        .table_properties{
            background-color: #F3F3F3;
            width: 900px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 30px;
            padding-top: 2px;
            border: 2px solid #E8E8E8;
            text-align: center;
            font-family: Arial;
        }

        p{
            margin: auto;
            text-align: center;
            font-size: xx-large;
        }

        .linecolor{
            background-color: #BFBFBF;
            margin: 4px;
            height: 1px;
        }

        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance:textfield;
        }

        table {
            border-collapse: collapse;
        }

        table.listtable, td.listcolumn, th {
            border: 2px solid #E8E8E8;
            text-align: left;
        }

        button {
            border: 0;
            padding: 0;
            display: inline;
            background: none;
            text-decoration: underline;
            color: blue;
        }

        button:hover {
            cursor: pointer;
        }

        .table_properties_dark_background{
            background-color: #E8E8E8;
            width: 900px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 30px;
            padding-top: 2px;
            border: 2px solid #E8E8E8;
            text-align: center;
            font-family: Arial;
        }

        .table_properties_left_align{
            background-color: #F3F3F3;
            width: 900px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 30px;
            padding-top: 2px;
            border: 2px solid #E8E8E8;
            text-align: left;
            font-family: Arial;
        }

        .table_properties_table_detail{
            background-color: #F3F3F3;
            width: 900px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 30px;
            padding-top: 2px;
            border: 2px solid #E8E8E8;
            text-align: left;
            font-family: Arial;
        }

        .table_properties_row{
            background-color: white;
            width: 900px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 30px;
            padding-top: 2px;
            border: 1px solid #E8E8E8;
            text-align: left;
            font-family: Arial;
        }

        .row_not_found{
            background-color: white;
            width: 900px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 30px;
            padding-top: 2px;
            border: 2px solid #E8E8E8;
            text-align: center;
            font-family: Arial;
        }

        .initial_gone {
            display: none;
        }

    </style>

    <script type="text/javascript">

        function detailsTable(myLabel){
            var x = document.getElementById("photo"+myLabel);
            if(x!=null){
                if (x.style.display == 'none' || x.style.display == '') {
                    x.style.display = 'block';
                    if(myLabel == "albums" || myLabel == "posts" ){
                        x.style.display = 'table';
                    }else{
                        x.style.display = 'table-row';
                    }
                } else {
                    x.style.display = 'none';
                }
            }
        }

        function showPosts(){
            var posts = document.getElementById("photoposts");
            if(posts!=null) {
                if(posts.style.display != 'none'){
                    posts.style.display = 'none';
                }else{
                    var albums = document.getElementById("photoalbums");
                    if(albums!=null) {
                        var photo0 = document.getElementById("photo0");
                        if(photo0!=null) {
                            photo0.style.display = 'none';
                        }
                        var photo1 = document.getElementById("photo1");
                        if(photo1!=null) {
                            photo1.style.display = 'none';
                        }
                        var photo2 = document.getElementById("photo2");
                        if(photo2!=null) {
                            photo2.style.display = 'none';
                        }
                        var photo3 = document.getElementById("photo3");
                        if(photo3!=null) {
                            photo3.style.display = 'none';
                        }
                        var photo4 = document.getElementById("photo4");
                        if(photo4!=null) {
                            photo4.style.display = 'none';
                        }
                        albums.style.display = 'none';
                    }
                    posts.style.display = 'block';
                    posts.style.display='table';
                }
            }
        }


        function showAlbums(){
            var albums = document.getElementById("photoalbums");
            if(albums!=null) {
                if(albums.style.display != 'none'){
                    var photo0 = document.getElementById("photo0");
                    if(photo0!=null) {
                        photo0.style.display = 'none';
                    }
                    var photo1 = document.getElementById("photo1");
                    if(photo1!=null) {
                        photo1.style.display = 'none';
                    }
                    var photo2 = document.getElementById("photo2");
                    if(photo2!=null) {
                        photo2.style.display = 'none';
                    }
                    var photo3 = document.getElementById("photo3");
                    if(photo3!=null) {
                        photo3.style.display = 'none';
                    }
                    var photo4 = document.getElementById("photo4");
                    if(photo4!=null) {
                        photo4.style.display = 'none';
                    }
                    albums.style.display = 'none';
                }else{
                    albums.style.display = 'block';
                    albums.style.display = 'table';
                    var posts = document.getElementById("photoposts");
                    if(posts!=null){
                        posts.style.display = 'none';
                    }
                }
            }
        }


        function setAlbums(){
            var x = document.getElementById("photoalbums");
            x.style.display = 'none';
        }

        function setPosts(){
            var x = document.getElementById("photoposts");
            if(x!=null){
                x.style.display = 'none';
            }
        }

        function showOrHideLocation()
        {
            if (document.getElementById("types").value == "place") {
                document.getElementById("locate_distance_row").style.visibility='visible';
            } else {
                document.getElementById("locate_distance_row").style.visibility='hidden';
            }
        }

        function clearAll()
        {
            document.selectform.q.value = "";
            document.selectform.location.value = "";
            document.selectform.distance.value="";
            document.selectform.type.value="user";
            document.getElementById("locate_distance_row").style.visibility='hidden';
            var child = document.getElementById("total_result_frame");
            child.parentNode.removeChild(child);
        }

        function validateForm(myFormNumber)
        {
            formName = 'detailsForm'+myFormNumber;
            qId = formName+'q';
            typeId = formName+'type';
            locationId = formName+'location';
            distanceId = formName+'distance';
            document.getElementById(qId).value = document.selectform.q.value;
            document.getElementById(typeId).value = document.selectform.type.value;
            document.getElementById(locationId).value = document.selectform.location.value;
            document.getElementById(distanceId).value = document.selectform.distance.value;
        }

        function openImage(pUrl){
            var img = '<!DOCTYPE html><html><head><title>image</title></head><body><p><img src =' + pUrl + ' Stretch="None"></p></body></html>';
            myWindow = window.open("");
            myWindow.document.write(img);
            myWindow.document.close();
        }

    </script>
</head>
<body>
<form name="selectform" class="theSearchbackground" autocomplete="on" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <p class="adjustBorder"><i> Facebook Search</i></p>
    <p class="linecolor adjustBorder"></p>
    <table>
        <tr>
            <td> Keyword </td>
            <td> <input type="text" name="q" required value="<?php echo isset($_POST['q']) ? $_POST['q'] : '' ?>"> </td>
        </tr>
        <tr>
            <td> Type: </td>
            <?php $selected = isset($_POST['type']) ? $_POST['type'] :'user';

            $pages = "false";
            $events = "false";
            $groups = "false";
            $places = "false";
            $users = "false";

            if($selected=="page"){
                $pages = "selected";
            }else if($selected=="event"){
                $events = "selected";
            }else if($selected=="group"){
                $groups = "selected";
            }else if($selected=="place"){
                $places = "selected";
            }else{
                $users = "selected";
            }

            ?>
            <td> <select name="type" id="types" onChange=showOrHideLocation()>
                    <option value="user" <?php if($users == "selected")echo 'selected="selected"';?>>Users</option>
                    <option value="page" <?php if($pages == "selected")echo 'selected="selected"';?>>Pages</option>
                    <option value="event" <?php if($events == "selected")echo 'selected="selected"';?>>Events</option>
                    <option value="group" <?php if($groups == "selected")echo 'selected="selected"';?>>Groups</option>
                    <option value="place" <?php if($places == "selected")echo 'selected="selected"';?>>Places</option>
                </select>
            </td>
        </tr>
        <tr id="locate_distance_row" <?php if($places=="selected"){}else{echo 'style="visibility: hidden"';}?>>
            <td>Location</td>
            <td> <input type="text" id="locations" name="location"  value="<?php echo isset($_POST['location']) ? $_POST['location'] : '' ?>"> </td>
            <td>Distance(meters)</td>
            <td> <input type="number"  id="distances" name="distance" value="<?php echo isset($_POST['distance']) ? $_POST['distance'] : '' ?>"> </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit"  value="Search">
                <input type="button" value="Clear" onclick=clearAll()>
            </td>

        </tr>

    </table>
</form>

<?php
require_once __DIR__ . '/php-graph-sdk-5.0.0/src/Facebook/autoload.php';

$fb = new Facebook\Facebook([
    'app_id' => '748982581944529',
    'app_secret' => '7cfe6986f9736d1fb34ef8f24fcedd9d',
    'default_graph_version' => 'v2.8',
]);
$fb->setDefaultAccessToken('EAAKpMhi9YNEBAOsdyPQDe9ZBxFHZB33QzrRO60dLWI8W6ZBEmJnrrLPhAz2CxYEHujb4hDUUhelohNFtZAITQz9RnpRMEcxRVbAGwTqka9PU6VZC0990tXLemLH6JJ4Nwd7ALO93RBPhNDDDuGngiZB8ZBxr6LaJTAZD');


function getResultLocation($qValue,$type,$location,$distance){
    $encodedUrlLocation = urlencode($location);
    $encodedUrl = "https://maps.google.com/maps/api/geocode/json?address=".$encodedUrlLocation."&sensor=false&key=AIzaSyCQ4DVLPI79Vx3sxr8o9dqXxRq-4fgg-K8";
    $geocode=file_get_contents($encodedUrl);
    $output= json_decode($geocode);

    $size = sizeof($output->results);

    if($size == 0){
        echo '<table class="table_properties"> <tr> <td> Address is invalid</td></tr></table>';
        return false;
    }

    if($output->status == "OK") {
        $lat = $output->results[0]->geometry->location->lat;
        $lng = $output->results[0]->geometry->location->lng;
    }else{
        echo '<table class="table_properties"> <tr> <td> Address is invalid</td></tr></table>';
        return false;
    }

    $encodeURL = urlencode($qValue);

    try {
        $var = '/search?q='.$encodeURL.'&type='.$type.'&center='.$lat.','.$lng.'&distance='.$distance.'&fields=id,name,picture.width(700).height(700)';
        $response = $GLOBALS['fb']->get($var);
        $search = $response->getGraphEdge()->asArray();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    return $search;
}


function getResultLocationNoDistance($qValue,$type,$location){
    $encodedUrlLocation = urlencode($location);
    $encodedUrl = "https://maps.google.com/maps/api/geocode/json?address=".$encodedUrlLocation."&sensor=false&key=AIzaSyCQ4DVLPI79Vx3sxr8o9dqXxRq-4fgg-K8";
    $geocode=file_get_contents($encodedUrl);
    $output= json_decode($geocode);

    $size = sizeof($output->results);

    if($size == 0){
        echo '<table class="table_properties"> <tr> <td> Address is invalid</td></tr></table>';
        return false;
    }

    if($output->status == "OK") {
        $lat = $output->results[0]->geometry->location->lat;
        $lng = $output->results[0]->geometry->location->lng;
    }else{
        echo '<table class="table_properties"> <tr> <td> Address is invalid</td></tr></table>';
        return false;
    }

    $encodeURL = urlencode($qValue);

    try {
        $var = '/search?q='.$encodeURL.'&type='.$type.'&center='.$lat.','.$lng.'&fields=id,name,picture.width(700).height(700)';
        $response = $GLOBALS['fb']->get($var);
        $search = $response->getGraphEdge()->asArray();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    return $search;
}

function getResultAll($qValue,$type){

    try {
        $encodeURL = urlencode($qValue);
        $var = '/search?q='.$encodeURL.'&type='.$type.'&fields=id,name,picture.width(700).height(700)';
        if($type == 'event'){
            $var = '/search?q='.$encodeURL.'&type='.$type.'&fields=id,name,picture.width(700).height(700),place';
        }
        $response = $GLOBALS['fb']->get($var);
        $search = $response->getGraphEdge()->asArray();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    return $search;
}

function getDetails($id){
    try {
        // $id = '124984464200434';
        $var = '/'.$id.'?fields=id,name,picture.width(700).height(700),albums.limit(5){name,photos.limit(2){name, picture}},posts.limit(5)';
        $response = $GLOBALS['fb']->get($var);
        $search = $response->getDecodedBody();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    return $search;
}

function getHighResolutionImageUrlProfile($id){
    try {
        $var = '/'.$id.'/picture?redirect=false&type=large';
        $response = $GLOBALS['fb']->get($var);
        $search = $response->getDecodedBody();
        if(isset($search['data']['url'])){
            $result = $search['data']['url'];
        }else{
            $result = null;
        }
        return $result;
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }
}

function getHighResolutionImageUrl($id){
    try {
        $var = '/'.$id.'/picture?redirect=false';
        $response = $GLOBALS['fb']->get($var);
        $search = $response->getDecodedBody();
        if(isset($search['data']['url'])){
            $result = $search['data']['url'];
        }else{
            $result = null;
        }
        return $result;
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }
}
echo '<div id="total_result_frame">';
if(isset($_POST['submit'])){
    $q_value = $_POST['q'];
    $result=null;
    if($selected == "place"){
        $location = $_POST['location'];
        $distance = $_POST['distance'];
        if($location=="" && $distance ==""){
            $result = getResultAll($q_value,$selected);
        }else{
            if($distance!="" && $location==""){
                echo '<table class="table_properties"> <tr> <td> Distance specified without location or address</td></tr></table>';
                exit;
            }else if($distance=="" && $location!=""){
                $result = getResultLocationNoDistance($q_value,$selected,$location);
            }else{
                $result = getResultLocation($q_value,$selected,$location,$distance);
            }
        }
    }else{
        $result = getResultAll($q_value,$selected);
    }
    if($result == false){
        echo '<table class="table_properties"> <tr> <td> No records have been found </td></tr></table>';
        echo '</div>';
        echo ' <noscript> </noscript>';
        echo '</body>';
        echo '</html>';
        exit;
    } else if($result == null){
        echo '<table class="table_properties"> <tr> <td> No records have been found </td></tr></table>';
    }else{
        echo '<table id ="list_table" class="table_properties listtable">';
        if($selected=="event"){
            echo '<tr style="height:30px"><th>Profile Photo</th><th>Name</th><th>Place</th></tr>';
        }else{
            echo '<tr style="height:30px"><th>Profile Photo</th><th>Name</th><th>Details</th></tr>';
        }

        $tempVar = 0;
        foreach($result as $key){
            if(isset($key['name'])){
                $name = $key['name'];
            }else{
                $name = "";
            }

            if(isset($key['id'])){
                $id = $key['id'];
            }else{
                $id = "";
            }

            if(isset($key['picture']['url'])){
                $picture = $key['picture']['url'];
            }else{
                $picture = "";
            }

            echo '<tr>';
            $url = '\''.$picture.'\'';
            if($selected=="event") {
                echo '<td class="listcolumn" style="width:146px"><a href="javascript:openImage('.$url.')"> <img src='.$picture.' height="30px" width="30px"></a></td>';
            }else{
                echo '<td class="listcolumn" style="width:263px"><a href="javascript:openImage('.$url.')"> <img src='.$picture.' height="30px" width="30px"></a></td>';
            }
            echo '<td class="listcolumn">'.$name.'</td>';
            if($selected=="event"){
                if(isset($key['place']['name'])){
                    $placeName = $key['place']['name'];
                }else{
                    $placeName = "";
                }
                echo '<td class="listcolumn" style="width:263px">' . $placeName . '</td>';
            }else{
                $temp = 'validateForm('.$tempVar.')';
                $value = '"'.$temp.'"';
                $formName = 'detailsForm'.$tempVar;
                $qId = $formName.'q';
                $typeId = $formName.'type';
                $locationId = $formName.'location';
                $distanceId = $formName.'distance';

                echo '<td class="listcolumn" style="width:146px">
             <form  name=detailsForm'.$tempVar.' method="post" onsubmit='. $value.' action='.htmlspecialchars($_SERVER["PHP_SELF"]).'>
             <input type="hidden" name="detailsId" value='.$id.' />
             <input id='.$qId.' type="hidden" name="q" value="" />
             <input id='.$typeId.' type="hidden" name="type" value="" />
             <input id='.$locationId.' type="hidden" name="location" value=""/>
             <input id='.$distanceId.' type="hidden" name="distance" value="" />
             <button>Details</button>
             </form>
             </td>';

                $tempVar++;
            }
            echo '</tr>';
        }
        echo '</table>';
    }
}

if(isset($_POST['detailsId'])){
    $detailsID = $_POST['detailsId'];
    $search = getDetails($detailsID);
    $noAlbums = "No Albums have been found";
    $noPosts = "No Posts have been found";
if(isset($search['albums'])){
    $albums = $search['albums'];
if(isset($albums['data'])){
    $size = sizeof($albums['data']);
if($size==0){
    echo '<table class="row_not_found"><tr><td>'.$noAlbums.'</td></tr></table>';
}else{ ?>
    <div id="albums" class="table_properties_dark_background"><a href="javascript:showAlbums()">Albums</a></div>
<?php
$count=0;
echo '<table class="table_properties_table_detail" id="photoalbums">';
foreach($albums['data'] as $album){

    if(isset($album['name'])){
        $possible1 =  '<tr class="table_properties_row"  colspan="2"><td><a href="javascript:detailsTable('.$count.')">'.$album['name'].'</a></td></tr>';
        $possible2 =  '<tr class="table_properties_row"  colspan="2"><td>'.$album['name'].'</a></td></tr>';
    }else{
        $possible1 =  '<tr class="table_properties_row"  colspan="2"><td><a href="javascript:detailsTable('.$count.')">'.'No Name for the Album'.'</a></td></tr>';
        $possible2 =  '<tr class="table_properties_row"  colspan="2"><td>'.'No Name for the Album'.'</a></td></tr>';
    }

    $checkPhotos = false;
    $possible3 = "";

    if(isset($album['photos']) && isset($album['photos']['data'])){
        $possible3 = $possible3.'<tr class="table_properties_row initial_gone" id="photo'.$count.'">';
        $possible3= $possible3.'<td>';
        $checkPhotos = false;
        foreach($album['photos']['data'] as $photos){
            if(isset($photos['picture'])){
                $checkPhotos = true;
                if(isset($photos['id'])){
                    $mUrl = '\''.getHighResolutionImageUrl($photos['id']).'\'';
                }else{
                    $mUrl = '\''.$photos['picture'].'\'';
                }
                $possible3 = $possible3.'<a href="javascript:openImage('.$mUrl.')"> <img src='.$photos['picture'].' height="60px" width="60px"></a>';
            }
        }
        $possible3 = $possible3.'</td>';
        $possible3 = $possible3.'</tr>';
    }

    if($checkPhotos){
        echo $possible1.$possible3;
    }else{
        echo $possible2.$possible3;
    }
    $count++;
}
echo '</table>'; ?>
    <script>setAlbums();</script>
<?php }
}else{
    echo '<table class="row_not_found"><tr><td>'.$noAlbums.'</td></tr></table>';
}
}else{
    echo '<table class="row_not_found"><tr><td>'.$noAlbums.'</td></tr></table>';
}

if(isset($search['posts'])){
$posts = $search['posts'];
$size = sizeof($search['posts']);
$checkMsg = false;
$possiblePost = "";
if($size==0){
    echo '<table class="row_not_found"><tr><td>'.$noPosts.'</td></tr></table>';
}else{
$possiblePost = $possiblePost.'<div id="posts" class="table_properties_dark_background"><a href="javascript:showPosts()">Posts</a></div>';
$possiblePost = $possiblePost.'<table class="table_properties_table_detail" id="photoposts">';
$possiblePost = $possiblePost.'<tr class="table_properties_left_align" ><th>Message</th></tr>';
foreach($posts['data'] as $post){
    $checkMsg = true;
    if(isset($post['message'])){
        if($post['message'] != ""){
            $possiblePost = $possiblePost.'<tr class="table_properties_row" ><td>'.$post['message'].'</td></tr>';
        }

    }
}
$possiblePost=$possiblePost.'</table>';
if($checkMsg){
    echo $possiblePost;
}else{
    echo '<table class="row_not_found"><tr><td>'.$noPosts.'</td></tr></table>';
}
?>
    <script>setPosts();</script>
    <?php
}
}else{
    echo '<table class="row_not_found"><tr><td>'.$noPosts.'</td></tr></table>';
}
} ?>
<?php
echo '</div>';
?>
<noscript> </noscript>
</body>

</html>