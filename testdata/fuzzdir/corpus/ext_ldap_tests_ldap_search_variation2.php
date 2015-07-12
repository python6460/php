<?php
include "connect.inc";

$link = ldap_connect_and_bind($host, $port, $user, $passwd, $protocol_version);
insert_dummy_data($link, $base);

var_dump(
	$result = ldap_search($link, "$base", "(objectclass=person)", array('sn'), 1),
	ldap_get_entries($link, $result)
);
?>
===DONE===
