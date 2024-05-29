 <?php

function generateID($length, $characters) {
    $id = '';
    for ($i = 0; $i < $length; $i++) {
        $id .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $id;
}


function generateNumericID($length) {
    $characters = '0123456789';
    return generateID($length, $characters);
}


$share_id = generateNumericID(9);
$red_pack_id = generateNumericID(2);
$short_key = generateID(8, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789');


$url = "https://incentive.kwai.com/share/incentive/redpack?";
$url .= "webview=yoda&";
$url .= "page=redpack&";
$url .= "share_item_type=redpack&";
$url .= "share_device_id=ANDROID_ef3e176aa60e093b&";
$url .= "share_uid=150001539005291&";
$url .= "countryInfo=BR&";
$url .= "language=pt-br&";
$url .= "ft=promotion&";
$url .= "countryCode=BR&";
$url .= "kpn=KWAI&";
$url .= "fishId=2607&";
$url .= "sharePageType=0&";
$url .= "innerPage=https%3A%2F%2Fincentive.kwai.com%2Fevents%2Fredpack%3Fwebview%3Dyoda%26need_login%3Dtrue%26loginCheck%3D1%26showLoading%3Dtrue%26hyId%3Dexternals%252Cug_redpack%26source%3DSEAMLESS%26red_pack_id%3D50" . urlencode($red_pack_id) . "&";
$url .= "share_id=ANDROID_ef3e176aa60e093b_1714" . urlencode($share_id) . "&";
$url .= "sourcePlatform=ANDROID&";
$url .= "hyId=externals%2Cug_redpack&";
$url .= "red_pack_id=50" . urlencode($red_pack_id) . "&";
$url .= "targetInnerPath=%2Fevents%2Fredpack&";
$url .= "cc=COPY_LINK&";
$url .= "shareEnter=1&";
$url .= "shareBucket=br&";
$url .= "pwa_source=share&";
$url .= "shareCountry=BRA&";
$url .= "shareBiz=h5_activity&";
$url .= "short_key=" . urlencode($short_key);


echo $url;
?>
