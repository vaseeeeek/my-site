<?php

$model = new shopCustomerModel();
$sql = ('SELECT * 
FROM shop_customer 
LEFT JOIN wa_contact
ON shop_customer.contact_id = wa_contact.id'
);
$list = $model->query($sql)->fetchAll();
echo "<pre>";
var_dump($list);
echo "<pre>";



class shopCustomerratingPlugin extends shopPlugin {

}
