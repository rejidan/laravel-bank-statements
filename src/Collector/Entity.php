<?php

namespace Amin\BankStatements\Collector;

/*
 * This file is part of the Sulaeman Bank Statements package.
 *
 * (c) Sulaeman <me@sulaeman.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Entity implements EntityInterface
{
    /**
     * The account ID.
     *
     * @var int
     */
    private $_accountId;

    /**
     * The unique ID.
     *
     * @var int
     */
    private $_uniqueId;

    /**
     * The Date.
     *
     * @var \Carbon\Carbon
     */
    private $_date;

    /**
     * The description.
     *
     * @var string
     */
    private $_description;

    /**
     * The type.
     *
     * @var string
     */
    private $_type;

    /**
     * The amount.
     *
     * @var string
     */
    private $_amount;

    /**
     * Create a new instance.
     *
     * @param  array $data
     * @return void
     */
    public function __construct(Array $data)
    {
        $this->_accountId   = $data['account_id'];
        $this->_uniqueId    = $data['unique_id'];
        $this->_date        = $data['date'];
        $this->_description = $data['description'];
        $this->_type        = $data['type'];
        $this->_amount      = $data['amount'];
    }

    /**
     * {@inheritdoc}
     */
    public function __get($var)
    {
        $var = '_'.$var;

        return ($var != "instance" && isset($this->$var)) ? $this->$var : false;
    }
}
