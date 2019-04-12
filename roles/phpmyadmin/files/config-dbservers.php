<?php
$hospitales = array('sigehos-db-master.hml.gcba.gob.ar', 'sgutierrez.msgc.gcba:3306', 'stprotegidos.msgc.gcba:3306', 'sudaondo.msgc.gcba:3306', 'smoyano.msgc.gcba:3306', 'ssarda.msgc.gcba:3306', 'slagleyze.msgc.gcba:3306',  'sduenas.msgc.gcba:3306', 'smuniz.msgc.gcba:3306', 'ssantalucia.msgc.gcba:3306', 'srivadavia.msgc.gcba:3306', 'sdurand.msgc.gcba:3306', 'sramosmejia.msgc.gcba:3306', 'svelez.msgc.gcba:3306', 'ssantojanni.msgc.gcba:3306', 'stornu.msgc.gcba:3306', 'spirovano.msgc.gcba:3306', 'ssame.msgc.gcba:3306', 'sargerich.msgc.gcba:3306', '10.10.6.187:3306', '10.47.4.141:3306');

//'10.47.4.242:3311', '10.47.4.242:3312', '10.47.4.233:3306','10.48.0.116');

sort($hospitales);

foreach ($hospitales as $hospital){
        $i++;
        $cfg['Servers'][$i]['host'] = $hospital;
        $cfg['Servers'][$i]['port'] = '';
        $cfg['Servers'][$i]['socket'] = '';
        $cfg['Servers'][$i]['connect_type'] = 'tcp';
        $cfg['Servers'][$i]['extension'] = 'mysql';
        $cfg['Servers'][$i]['compress'] = FALSE;
        $cfg['Servers'][$i]['controluser'] = '';
        $cfg['Servers'][$i]['controlpass'] = '';
        $cfg['Servers'][$i]['only_db'] = '';
        $cfg['Servers'][$i]['verbose'] = '';
        $cfg['Servers'][$i]['pmadb'] = 'phpmyadmin'; // 'phpmyadmin' - see scripts/create_tables.sql
        $cfg['Servers'][$i]['bookmarktable'] = 'pma_bookmark'; // 'pma_bookmark'
        $cfg['Servers'][$i]['relation'] = 'pma_relation'; // 'pma_relation'
        $cfg['Servers'][$i]['table_info'] = 'pma_table_info'; // 'pma_table_info'
        $cfg['Servers'][$i]['table_coords'] = 'pma_table_coords'; // 'pma_table_coords'
        $cfg['Servers'][$i]['pdf_pages'] = 'pma_pdf_pages'; // 'pma_pdf_pages'
        $cfg['Servers'][$i]['column_info'] = 'pma_column_info'; // 'pma_column_info'
        $cfg['Servers'][$i]['history'] = 'pma_history'; // 'pma_history'
        $cfg['Servers'][$i]['verbose_check'] = TRUE;
        $cfg['Servers'][$i]['AllowRoot'] = TRUE;
        $cfg['Servers'][$i]['AllowDeny']['order']
        = '';
        $cfg['Servers'][$i]['AllowDeny']['rules']

        = array();
}
