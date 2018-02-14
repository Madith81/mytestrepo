<?php

/**
 * Copyright (c) 2017-present, DocsPen.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace DocsPen\Services;

/**
 * Class Ldap
 * An object-orientated thin abstraction wrapper for common PHP LDAP functions.
 * Allows the standard LDAP functions to be mocked for testing.
 */
class Ldap
{
    /**
     * Connect to a LDAP server.
     *
     * @param string $hostName
     * @param int    $port
     *
     * @return resource
     */
    public function connect($hostName, $port)
    {
        return ldap_connect($hostName, $port);
    }

    /**
     * Set the value of a LDAP option for the given connection.
     *
     * @param resource $ldapConnection
     * @param int      $option
     * @param mixed    $value
     *
     * @return bool
     */
    public function setOption($ldapConnection, $option, $value)
    {
        return ldap_set_option($ldapConnection, $option, $value);
    }

    /**
     * Set the version number for the given ldap connection.
     *
     * @param $ldapConnection
     * @param $version
     *
     * @return bool
     */
    public function setVersion($ldapConnection, $version)
    {
        return $this->setOption($ldapConnection, LDAP_OPT_PROTOCOL_VERSION, $version);
    }

    /**
     * Search LDAP tree using the provided filter.
     *
     * @param resource   $ldapConnection
     * @param string     $baseDn
     * @param string     $filter
     * @param array|null $attributes
     *
     * @return resource
     */
    public function search($ldapConnection, $baseDn, $filter, array $attributes = null)
    {
        return ldap_search($ldapConnection, $baseDn, $filter, $attributes);
    }

    /**
     * Get entries from an ldap search result.
     *
     * @param resource $ldapConnection
     * @param resource $ldapSearchResult
     *
     * @return array
     */
    public function getEntries($ldapConnection, $ldapSearchResult)
    {
        return ldap_get_entries($ldapConnection, $ldapSearchResult);
    }

    /**
     * Search and get entries immediately.
     *
     * @param resource   $ldapConnection
     * @param string     $baseDn
     * @param string     $filter
     * @param array|null $attributes
     *
     * @return resource
     */
    public function searchAndGetEntries($ldapConnection, $baseDn, $filter, array $attributes = null)
    {
        $search = $this->search($ldapConnection, $baseDn, $filter, $attributes);

        return $this->getEntries($ldapConnection, $search);
    }

    /**
     * Bind to LDAP directory.
     *
     * @param resource $ldapConnection
     * @param string   $bindRdn
     * @param string   $bindPassword
     *
     * @return bool
     */
    public function bind($ldapConnection, $bindRdn = null, $bindPassword = null)
    {
        return ldap_bind($ldapConnection, $bindRdn, $bindPassword);
    }
}
