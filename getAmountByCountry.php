<?php
if ($_POST['id'] == null) {
    $country = 3;
} else $country = $_POST['id'];


$host = "213.159.210.74:3306";
$user = "frontUser";
$password = "pIBWqDqsKoUrrs1LoTIW";
$database = "simki24" ;
$conn = @mysqli_connect($host, $user, $password, $database) or die ('Ошибка соединения с БД');
mysqli_set_charset($conn, "utf8") or die ('Не установлена кодировка');


//= $country
//(3, 10, 11, 31, 80, 20)
$sql ="SELECT * FROM simCountV1 WHERE id = $country";
$result = $conn->query($sql);
$returnArray = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row["country"] == "russia") {
            $returnArray["vk"] = $row["vk"];
            $returnArray["ok"] = $row["ok"];
            $returnArray["wa"] = $row["wa"];
            $returnArray["vi"] = $row["vi"];
            $returnArray["tg"] = $row["tg"];
            $returnArray["wb"] = $row["wb"];
            $returnArray["go"] = $row["go"];
            $returnArray["fb"] = $row["fb"];
            $returnArray["av"] = $row["av"];
            $returnArray["tw"] = $row["tw"];

        }
        if ($row["country"] == "kazakhstan") {
            $returnArray["vk"] = $row["vk"];
            $returnArray["ok"] = $row["ok"];
            $returnArray["wa"] = $row["wa"];
            $returnArray["vi"] = $row["vi"];
            $returnArray["tg"] = $row["tg"];
            $returnArray["wb"] = $row["wb"];
            $returnArray["go"] = $row["go"];
            $returnArray["fb"] = $row["fb"];
            $returnArray["av"] = $row["av"];
            $returnArray["tw"] = $row["tw"];
        }
        if ($row["country"] == "ukraine") {
            $returnArray['vk'] = $row["vk"];
            $returnArray["ok"] = $row["ok"];
            $returnArray["wa"] = $row["wa"];
            $returnArray["vi"] = $row["vi"];
            $returnArray["tg"] = $row["tg"];
            $returnArray["wb"] = $row["wb"];
            $returnArray["go"] = $row["go"];
            $returnArray["fb"] = $row["fb"];
            $returnArray["av"] = $row["av"];
            $returnArray["tw"] = $row["tw"];
        }
        if ($row["country"] == "poland") {
            $returnArray['vk'] = $row["vk"];
            $returnArray["ok"] = $row["ok"];
            $returnArray["wa"] = $row["wa"];
            $returnArray["vi"] = $row["vi"];
            $returnArray["tg"] = $row["tg"];
            $returnArray["wb"] = $row["wb"];
            $returnArray["go"] = $row["go"];
            $returnArray["fb"] = $row["fb"];
            $returnArray["av"] = $row["av"];
            $returnArray["tw"] = $row["tw"];
        }
        if ($row["country"] == "kyrgyzstan") {
            $returnArray['vk'] = $row["vk"];
            $returnArray["ok"] = $row["ok"];
            $returnArray["wa"] = $row["wa"];
            $returnArray["vi"] = $row["vi"];
            $returnArray["tg"] = $row["tg"];
            $returnArray["wb"] = $row["wb"];
            $returnArray["go"] = $row["go"];
            $returnArray["fb"] = $row["fb"];
            $returnArray["av"] = $row["av"];
            $returnArray["tw"] = $row["tw"];
        }
        if ($row["country"] == "romania") {
            $returnArray['vk'] = $row["vk"];
            $returnArray["ok"] = $row["ok"];
            $returnArray["wa"] = $row["wa"];
            $returnArray["vi"] = $row["vi"];
            $returnArray["tg"] = $row["tg"];
            $returnArray["wb"] = $row["wb"];
            $returnArray["go"] = $row["go"];
            $returnArray["fb"] = $row["fb"];
            $returnArray["av"] = $row["av"];
            $returnArray["tw"] = $row["tw"];
        }
        if ($row["country"] == "england") {
            $returnArray['vk'] = $row["vk"];
            $returnArray["ok"] = $row["ok"];
            $returnArray["wa"] = $row["wa"];
            $returnArray["vi"] = $row["vi"];
            $returnArray["tg"] = $row["tg"];
            $returnArray["wb"] = $row["wb"];
            $returnArray["go"] = $row["go"];
            $returnArray["fb"] = $row["fb"];
            $returnArray["av"] = $row["av"];
            $returnArray["tw"] = $row["tw"];
        }
        if ($row["country"] == "ireland") {
            $returnArray['vk'] = $row["vk"];
            $returnArray["ok"] = $row["ok"];
            $returnArray["wa"] = $row["wa"];
            $returnArray["vi"] = $row["vi"];
            $returnArray["tg"] = $row["tg"];
            $returnArray["wb"] = $row["wb"];
            $returnArray["go"] = $row["go"];
            $returnArray["fb"] = $row["fb"];
            $returnArray["av"] = $row["av"];
            $returnArray["tw"] = $row["tw"];
        }
        if ($row["country"] == "serbia") {
            $returnArray['vk'] = $row["vk"];
            $returnArray["ok"] = $row["ok"];
            $returnArray["wa"] = $row["wa"];
            $returnArray["vi"] = $row["vi"];
            $returnArray["tg"] = $row["tg"];
            $returnArray["wb"] = $row["wb"];
            $returnArray["go"] = $row["go"];
            $returnArray["fb"] = $row["fb"];
            $returnArray["av"] = $row["av"];
            $returnArray["tw"] = $row["tw"];
        }
        if ($row["country"] == "germany") {
            $returnArray['vk'] = $row["vk"];
            $returnArray["ok"] = $row["ok"];
            $returnArray["wa"] = $row["wa"];
            $returnArray["vi"] = $row["vi"];
            $returnArray["tg"] = $row["tg"];
            $returnArray["wb"] = $row["wb"];
            $returnArray["go"] = $row["go"];
            $returnArray["fb"] = $row["fb"];
            $returnArray["av"] = $row["av"];
            $returnArray["tw"] = $row["tw"];
        }
    }
}
echo json_encode($returnArray);