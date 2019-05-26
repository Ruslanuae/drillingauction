<?php
switch($dano['vers']){//версия из базы пользователя
	case '3.4'://переход на 3.5
		mysqli_query($s, "DROP TABLE bus_proj");
		mysqli_query($s,"CREATE TABLE IF NOT EXISTS bus_proj (id VARCHAR(32) COLLATE utf8_general_ci NOT NULL DEFAULT '123aaa333', name TEXT, proj LONGBLOB, date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, UNIQUE KEY id (id) USING BTREE) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_general_ci;");
	case '3.5'://переход на 3.6
		mysqli_query($s, 'ALTER TABLE bus_conf ADD val2 TEXT');
		mysqli_query($s, 'ALTER TABLE bus_proc MODIFY sost int(11)');
		mysqli_query($s, "UPDATE bus_proc SET sost='0'");
}

mysqli_query($s,"UPDATE bus_admin SET vers='".$version."'");