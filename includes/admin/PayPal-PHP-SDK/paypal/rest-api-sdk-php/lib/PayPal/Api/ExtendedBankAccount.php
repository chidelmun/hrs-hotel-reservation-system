<?php

namespace PayPal\Api;

/**
 * Class ExtendedBankAccount
 *
 * A resource representing a bank account that can be used to fund a payment including support for SEPA.
 *
 * @package PayPal\Api
 *
 * @property string mandate_reference_number
 */
class ExtendedBankAccount extends BankAccount 
{
    /**
     * Identifier of the direct debit mandate to validate. Currently supported only for EU bank accounts(SEPA).
     *
     * @param string $mandate_reference_number
     * 
     * @return $this
     */
    public function setMandateReferenceNumber($mandate_reference_number)
    {
        $this->mandate_reference_number = $mandate_reference_number;
        return $this;
    }

    /**
     * Identifier of the direct debit mandate to validate. Currently supported only for EU bank accounts(SEPA).
     *
     * @return string
     */
    public function getMandateReferenceNumber()
    {
        return $this->mandate_reference_number;
    }

}
