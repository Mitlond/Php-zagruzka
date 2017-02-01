

<?/*
// В PHP 4.1.0 и более ранних версиях следует использовать $HTTP_POST_FILES
// вместо $_FILES.

$uploaddir = '/var/www/загрузки/';
$uploadfile = $uploaddir . basename($HTTP_POST_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}

echo 'Некоторая отладочная информация:';
print_r($HTTP_POST_FILES);

print "</pre>";
?>*/
echo "<pre>";
print_r($_FILES);
echo "</pre>";

$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/img/';
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);

// Копируем файл из каталога для временного хранения файлов:
if  ( move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfile))
{
echo "<h3>Файл успешно загружен на сервер</h3>";
}
else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }

?>



