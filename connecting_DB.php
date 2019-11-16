<?php

// products database

function get_products() {
  return
        ['1' => [
            'title' => 'Лампа Мсеюлида',
            'url' => 'img/item-mseyulida.jpg',
          ],
      
          '2' => [
            'title' => 'Диван Рмаериби',
            'url' => 'img/item-rmaeribi.jpg',
          ],
      
          '3' => [
            'title' => 'Люстра Блетуб',
            'url' => 'img/item-bletub.jpg',
          ],
      
          '4' => [
            'title' => 'Рабочий стол Ннулм',
            'url' => 'img/item-nnulm.jpg',
          ],
      
          '5' => [
            'title' => 'Подвесная кровать Асусмер']];
}

function get_products_title($id) {
    $products = get_products();
    $result = $products[$id]['title'];
    return $result;
}

?>