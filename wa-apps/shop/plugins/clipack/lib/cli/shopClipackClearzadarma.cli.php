<?php
class shopClipackClearzadarmaCli extends waCliController
{
    /*
     * Очистка плагина zadorma
     */
    public function execute()
    {
        $model = new shopClipackPluginZadarmaModel();
        $date = new DateTime('-6 months');
        $maxDate = $date->format("Y-m-d H:i:s");

        $sql = "DELETE FROM shop_zadarma_statistic WHERE callstart < ?";
        $model->exec($sql, $maxDate);
    }

}
