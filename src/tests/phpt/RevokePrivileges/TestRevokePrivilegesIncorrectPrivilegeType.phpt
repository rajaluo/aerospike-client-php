--TEST--
Revoke privileges - revoke privileges incorrect privilege type

--SKIPIF--
<?php include('skip_enterprise.inc'); ?>
--FILE--
<?php
include dirname(__FILE__)."/../../astestframework/astest-phpt-loader.inc";
aerospike_phpt_runtest("RevokePrivileges", "testRevokePrivilegesIncorrectPrivilegeType");
--EXPECT--
ERR_PARAM
