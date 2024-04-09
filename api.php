<?php
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method != 'POST') {
        echo "Ожидался метод POST";
    }

    $dataAsJson = file_get_contents("php://input");
    $dataAsArray = json_decode($dataAsJson, true);
    saveImage($dataAsArray['image']);

    function saveImage(string $imageBase64): void {
        $imageBase64Array = explode(';base64,', $imageBase64);
        $imgExtention = str_replace('data:image/', '', $imageBase64Array[0]);
        $imageDecoded = base64_decode($imageBase64Array[1]);
        saveFile("static/image.{$imgExtention}", $imageDecoded);
    }


    function saveFile(string $file, string $data): void {
        $myFile = fopen("static/image.png", 'w');
        if ($myFile) {
            $result = fwrite($myFile, $data);
            if ($result) {
                echo 'Данные успешно сохранены в файл';
            } else {
                echo 'Произошла ошибка при сохранении данных в файл';
            }
            fclose($myFile);
        } else {
            echo 'Произошла ошибка при открытии файла';
        }
      }
?>