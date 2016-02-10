<?
$data['option'] = "";
foreach($adress as $adres) {
 $data['option'].= "<option value=\"{$adres['id']}\">{$adres['adress']}</option>";
 }
$data['note'] = $adress[0]['note'];
echo json_encode($data);
?>