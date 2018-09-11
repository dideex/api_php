<?php
// Роутер
function route($method, $urlData, $formData) {
     
    // Получение информации о товаре
    // GET /goods/{goodId}
    if ($method === 'GET') {
        // Получаем id товара
 
        // Вытаскиваем товар из базы...
 
        // Выводим ответ клиенту
        echo json_encode(
            array(
                'ladder' => array(
                    'width' => array(
                        'min' => 400,
                        'max' => 600,
                    ),
                    'height' => array(
                        'min' => 500,
                        'max' => 1200,
                    ),
                ),
                'mType' => array(
                    'width' => array(
                        'min' => 400,
                        'max' => 800,
                    ),
                    'height' => array(
                        'min' => 500,
                        'max' => 600,
                    ),
                ),
                'pType' => array(
                    'width' => array(
                        'min' => 300,
                        'max' => 700,
                    ),
                    'height' => array(
                        'min' => 400,
                        'max' => 600,
                    ),
                ),
                'fType' => array(
                    'width' => array(
                        'min' => 400,
                        'max' => 600,
                    ),
                    'height' => array(
                        'min' => 500,
                        'max' => 1200,
                    ),
                ),
                'gType' => array(
                    'width' => array(
                        'min' => 400,
                        'max' => 600,
                    ),
                    'height' => array(
                        'min' => 500,
                        'max' => 1200,
                    ),
                ),
            )
        );
 
        return;
    }
    // Возвращаем ошибку
    header('HTTP/1.0 400 Bad Request');
    echo json_encode(array(
        'error' => 'Bad Request'
    ));
 
}
?>