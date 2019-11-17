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

function all_price() {
  return 
  ['1' => [
    'price' => 100
  ],

  '2' => [
    'price' => 200
  ],

  '3' => [
    'price' => 300
  ],

  '4' => [
    'price' => 400
  ],

  '5' => [
    'price' => 500
  ]];
}

function get_price($id){
  $products_price = all_price();
  $result = $products_price[$id]['price'];
  return $result;
}


?>
