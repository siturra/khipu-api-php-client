<?php
/**
 * PaymentResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Khipu
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Khipu\Model;

use \ArrayAccess;
/**
 * PaymentResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Khipu
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'payment_id' => 'string',
        'payment_url' => 'string',
        'simplified_transfer_url' => 'string',
        'transfer_url' => 'string',
        'app_url' => 'string',
        'ready_for_terminal' => 'bool',
        'subject' => 'string',
        'amount' => 'double',
        'currency' => 'string',
        'status' => 'string',
        'status_detail' => 'string',
        'body' => 'string',
        'picture_url' => 'string',
        'receipt_url' => 'string',
        'return_url' => 'string',
        'cancel_url' => 'string',
        'notify_url' => 'string',
        'notify_api_version' => 'string',
        'expires_date' => '\DateTime',
        'attachment_urls' => 'string[]',
        'bank' => 'string',
        'bank_id' => 'string',
        'payer_name' => 'string',
        'payer_email' => 'string',
        'personal_identifier' => 'string',
        'bank_account_number' => 'string',
        'out_of_date_conciliation' => 'bool',
        'transaction_id' => 'string',
        'custom' => 'string',
        'responsible_user_email' => 'string',
        'send_reminders' => 'string',
        'send_email' => 'bool'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'payment_id' => 'payment_id',
        'payment_url' => 'payment_url',
        'simplified_transfer_url' => 'simplified_transfer_url',
        'transfer_url' => 'transfer_url',
        'app_url' => 'app_url',
        'ready_for_terminal' => 'ready_for_terminal',
        'subject' => 'subject',
        'amount' => 'amount',
        'currency' => 'currency',
        'status' => 'status',
        'status_detail' => 'status_detail',
        'body' => 'body',
        'picture_url' => 'picture_url',
        'receipt_url' => 'receipt_url',
        'return_url' => 'return_url',
        'cancel_url' => 'cancel_url',
        'notify_url' => 'notify_url',
        'notify_api_version' => 'notify_api_version',
        'expires_date' => 'expires_date',
        'attachment_urls' => 'attachment_urls',
        'bank' => 'bank',
        'bank_id' => 'bank_id',
        'payer_name' => 'payer_name',
        'payer_email' => 'payer_email',
        'personal_identifier' => 'personal_identifier',
        'bank_account_number' => 'bank_account_number',
        'out_of_date_conciliation' => 'out_of_date_conciliation',
        'transaction_id' => 'transaction_id',
        'custom' => 'custom',
        'responsible_user_email' => 'responsible_user_email',
        'send_reminders' => 'send_reminders',
        'send_email' => 'send_email'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'payment_id' => 'setPaymentId',
        'payment_url' => 'setPaymentUrl',
        'simplified_transfer_url' => 'setSimplifiedTransferUrl',
        'transfer_url' => 'setTransferUrl',
        'app_url' => 'setAppUrl',
        'ready_for_terminal' => 'setReadyForTerminal',
        'subject' => 'setSubject',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'status' => 'setStatus',
        'status_detail' => 'setStatusDetail',
        'body' => 'setBody',
        'picture_url' => 'setPictureUrl',
        'receipt_url' => 'setReceiptUrl',
        'return_url' => 'setReturnUrl',
        'cancel_url' => 'setCancelUrl',
        'notify_url' => 'setNotifyUrl',
        'notify_api_version' => 'setNotifyApiVersion',
        'expires_date' => 'setExpiresDate',
        'attachment_urls' => 'setAttachmentUrls',
        'bank' => 'setBank',
        'bank_id' => 'setBankId',
        'payer_name' => 'setPayerName',
        'payer_email' => 'setPayerEmail',
        'personal_identifier' => 'setPersonalIdentifier',
        'bank_account_number' => 'setBankAccountNumber',
        'out_of_date_conciliation' => 'setOutOfDateConciliation',
        'transaction_id' => 'setTransactionId',
        'custom' => 'setCustom',
        'responsible_user_email' => 'setResponsibleUserEmail',
        'send_reminders' => 'setSendReminders',
        'send_email' => 'setSendEmail'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'payment_id' => 'getPaymentId',
        'payment_url' => 'getPaymentUrl',
        'simplified_transfer_url' => 'getSimplifiedTransferUrl',
        'transfer_url' => 'getTransferUrl',
        'app_url' => 'getAppUrl',
        'ready_for_terminal' => 'getReadyForTerminal',
        'subject' => 'getSubject',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'status' => 'getStatus',
        'status_detail' => 'getStatusDetail',
        'body' => 'getBody',
        'picture_url' => 'getPictureUrl',
        'receipt_url' => 'getReceiptUrl',
        'return_url' => 'getReturnUrl',
        'cancel_url' => 'getCancelUrl',
        'notify_url' => 'getNotifyUrl',
        'notify_api_version' => 'getNotifyApiVersion',
        'expires_date' => 'getExpiresDate',
        'attachment_urls' => 'getAttachmentUrls',
        'bank' => 'getBank',
        'bank_id' => 'getBankId',
        'payer_name' => 'getPayerName',
        'payer_email' => 'getPayerEmail',
        'personal_identifier' => 'getPersonalIdentifier',
        'bank_account_number' => 'getBankAccountNumber',
        'out_of_date_conciliation' => 'getOutOfDateConciliation',
        'transaction_id' => 'getTransactionId',
        'custom' => 'getCustom',
        'responsible_user_email' => 'getResponsibleUserEmail',
        'send_reminders' => 'getSendReminders',
        'send_email' => 'getSendEmail'
    );
  
    
    /**
      * $payment_id 
      * @var string
      */
    protected $payment_id;
    
    /**
      * $payment_url 
      * @var string
      */
    protected $payment_url;
    
    /**
      * $simplified_transfer_url 
      * @var string
      */
    protected $simplified_transfer_url;
    
    /**
      * $transfer_url 
      * @var string
      */
    protected $transfer_url;
    
    /**
      * $app_url 
      * @var string
      */
    protected $app_url;
    
    /**
      * $ready_for_terminal 
      * @var bool
      */
    protected $ready_for_terminal;
    
    /**
      * $subject 
      * @var string
      */
    protected $subject;
    
    /**
      * $amount 
      * @var double
      */
    protected $amount;
    
    /**
      * $currency 
      * @var string
      */
    protected $currency;
    
    /**
      * $status 
      * @var string
      */
    protected $status;
    
    /**
      * $status_detail 
      * @var string
      */
    protected $status_detail;
    
    /**
      * $body 
      * @var string
      */
    protected $body;
    
    /**
      * $picture_url 
      * @var string
      */
    protected $picture_url;
    
    /**
      * $receipt_url 
      * @var string
      */
    protected $receipt_url;
    
    /**
      * $return_url 
      * @var string
      */
    protected $return_url;
    
    /**
      * $cancel_url 
      * @var string
      */
    protected $cancel_url;
    
    /**
      * $notify_url 
      * @var string
      */
    protected $notify_url;
    
    /**
      * $notify_api_version 
      * @var string
      */
    protected $notify_api_version;
    
    /**
      * $expires_date 
      * @var \DateTime
      */
    protected $expires_date;
    
    /**
      * $attachment_urls 
      * @var string[]
      */
    protected $attachment_urls;
    
    /**
      * $bank 
      * @var string
      */
    protected $bank;
    
    /**
      * $bank_id 
      * @var string
      */
    protected $bank_id;
    
    /**
      * $payer_name 
      * @var string
      */
    protected $payer_name;
    
    /**
      * $payer_email 
      * @var string
      */
    protected $payer_email;
    
    /**
      * $personal_identifier 
      * @var string
      */
    protected $personal_identifier;
    
    /**
      * $bank_account_number 
      * @var string
      */
    protected $bank_account_number;
    
    /**
      * $out_of_date_conciliation 
      * @var bool
      */
    protected $out_of_date_conciliation;
    
    /**
      * $transaction_id 
      * @var string
      */
    protected $transaction_id;
    
    /**
      * $custom 
      * @var string
      */
    protected $custom;
    
    /**
      * $responsible_user_email 
      * @var string
      */
    protected $responsible_user_email;
    
    /**
      * $send_reminders 
      * @var string
      */
    protected $send_reminders;
    
    /**
      * $send_email 
      * @var bool
      */
    protected $send_email;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->payment_id = $data["payment_id"];
            $this->payment_url = $data["payment_url"];
            $this->simplified_transfer_url = $data["simplified_transfer_url"];
            $this->transfer_url = $data["transfer_url"];
            $this->app_url = $data["app_url"];
            $this->ready_for_terminal = $data["ready_for_terminal"];
            $this->subject = $data["subject"];
            $this->amount = $data["amount"];
            $this->currency = $data["currency"];
            $this->status = $data["status"];
            $this->status_detail = $data["status_detail"];
            $this->body = $data["body"];
            $this->picture_url = $data["picture_url"];
            $this->receipt_url = $data["receipt_url"];
            $this->return_url = $data["return_url"];
            $this->cancel_url = $data["cancel_url"];
            $this->notify_url = $data["notify_url"];
            $this->notify_api_version = $data["notify_api_version"];
            $this->expires_date = $data["expires_date"];
            $this->attachment_urls = $data["attachment_urls"];
            $this->bank = $data["bank"];
            $this->bank_id = $data["bank_id"];
            $this->payer_name = $data["payer_name"];
            $this->payer_email = $data["payer_email"];
            $this->personal_identifier = $data["personal_identifier"];
            $this->bank_account_number = $data["bank_account_number"];
            $this->out_of_date_conciliation = $data["out_of_date_conciliation"];
            $this->transaction_id = $data["transaction_id"];
            $this->custom = $data["custom"];
            $this->responsible_user_email = $data["responsible_user_email"];
            $this->send_reminders = $data["send_reminders"];
            $this->send_email = $data["send_email"];
        }
    }
    
    /**
     * Gets payment_id
     * @return string
     */
    public function getPaymentId()
    {
        return $this->payment_id;
    }
  
    /**
     * Sets payment_id
     * @param string $payment_id 
     * @return $this
     */
    public function setPaymentId($payment_id)
    {
        
        $this->payment_id = $payment_id;
        return $this;
    }
    
    /**
     * Gets payment_url
     * @return string
     */
    public function getPaymentUrl()
    {
        return $this->payment_url;
    }
  
    /**
     * Sets payment_url
     * @param string $payment_url 
     * @return $this
     */
    public function setPaymentUrl($payment_url)
    {
        
        $this->payment_url = $payment_url;
        return $this;
    }
    
    /**
     * Gets simplified_transfer_url
     * @return string
     */
    public function getSimplifiedTransferUrl()
    {
        return $this->simplified_transfer_url;
    }
  
    /**
     * Sets simplified_transfer_url
     * @param string $simplified_transfer_url 
     * @return $this
     */
    public function setSimplifiedTransferUrl($simplified_transfer_url)
    {
        
        $this->simplified_transfer_url = $simplified_transfer_url;
        return $this;
    }
    
    /**
     * Gets transfer_url
     * @return string
     */
    public function getTransferUrl()
    {
        return $this->transfer_url;
    }
  
    /**
     * Sets transfer_url
     * @param string $transfer_url 
     * @return $this
     */
    public function setTransferUrl($transfer_url)
    {
        
        $this->transfer_url = $transfer_url;
        return $this;
    }
    
    /**
     * Gets app_url
     * @return string
     */
    public function getAppUrl()
    {
        return $this->app_url;
    }
  
    /**
     * Sets app_url
     * @param string $app_url 
     * @return $this
     */
    public function setAppUrl($app_url)
    {
        
        $this->app_url = $app_url;
        return $this;
    }
    
    /**
     * Gets ready_for_terminal
     * @return bool
     */
    public function getReadyForTerminal()
    {
        return $this->ready_for_terminal;
    }
  
    /**
     * Sets ready_for_terminal
     * @param bool $ready_for_terminal 
     * @return $this
     */
    public function setReadyForTerminal($ready_for_terminal)
    {
        
        $this->ready_for_terminal = $ready_for_terminal;
        return $this;
    }
    
    /**
     * Gets subject
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }
  
    /**
     * Sets subject
     * @param string $subject 
     * @return $this
     */
    public function setSubject($subject)
    {
        
        $this->subject = $subject;
        return $this;
    }
    
    /**
     * Gets amount
     * @return double
     */
    public function getAmount()
    {
        return $this->amount;
    }
  
    /**
     * Sets amount
     * @param double $amount 
     * @return $this
     */
    public function setAmount($amount)
    {
        
        $this->amount = $amount;
        return $this;
    }
    
    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
  
    /**
     * Sets currency
     * @param string $currency 
     * @return $this
     */
    public function setCurrency($currency)
    {
        
        $this->currency = $currency;
        return $this;
    }
    
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status 
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets status_detail
     * @return string
     */
    public function getStatusDetail()
    {
        return $this->status_detail;
    }
  
    /**
     * Sets status_detail
     * @param string $status_detail 
     * @return $this
     */
    public function setStatusDetail($status_detail)
    {
        
        $this->status_detail = $status_detail;
        return $this;
    }
    
    /**
     * Gets body
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }
  
    /**
     * Sets body
     * @param string $body 
     * @return $this
     */
    public function setBody($body)
    {
        
        $this->body = $body;
        return $this;
    }
    
    /**
     * Gets picture_url
     * @return string
     */
    public function getPictureUrl()
    {
        return $this->picture_url;
    }
  
    /**
     * Sets picture_url
     * @param string $picture_url 
     * @return $this
     */
    public function setPictureUrl($picture_url)
    {
        
        $this->picture_url = $picture_url;
        return $this;
    }
    
    /**
     * Gets receipt_url
     * @return string
     */
    public function getReceiptUrl()
    {
        return $this->receipt_url;
    }
  
    /**
     * Sets receipt_url
     * @param string $receipt_url 
     * @return $this
     */
    public function setReceiptUrl($receipt_url)
    {
        
        $this->receipt_url = $receipt_url;
        return $this;
    }
    
    /**
     * Gets return_url
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->return_url;
    }
  
    /**
     * Sets return_url
     * @param string $return_url 
     * @return $this
     */
    public function setReturnUrl($return_url)
    {
        
        $this->return_url = $return_url;
        return $this;
    }
    
    /**
     * Gets cancel_url
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->cancel_url;
    }
  
    /**
     * Sets cancel_url
     * @param string $cancel_url 
     * @return $this
     */
    public function setCancelUrl($cancel_url)
    {
        
        $this->cancel_url = $cancel_url;
        return $this;
    }
    
    /**
     * Gets notify_url
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notify_url;
    }
  
    /**
     * Sets notify_url
     * @param string $notify_url 
     * @return $this
     */
    public function setNotifyUrl($notify_url)
    {
        
        $this->notify_url = $notify_url;
        return $this;
    }
    
    /**
     * Gets notify_api_version
     * @return string
     */
    public function getNotifyApiVersion()
    {
        return $this->notify_api_version;
    }
  
    /**
     * Sets notify_api_version
     * @param string $notify_api_version 
     * @return $this
     */
    public function setNotifyApiVersion($notify_api_version)
    {
        
        $this->notify_api_version = $notify_api_version;
        return $this;
    }
    
    /**
     * Gets expires_date
     * @return \DateTime
     */
    public function getExpiresDate()
    {
        return $this->expires_date;
    }
  
    /**
     * Sets expires_date
     * @param \DateTime $expires_date 
     * @return $this
     */
    public function setExpiresDate($expires_date)
    {
        
        $this->expires_date = $expires_date;
        return $this;
    }
    
    /**
     * Gets attachment_urls
     * @return string[]
     */
    public function getAttachmentUrls()
    {
        return $this->attachment_urls;
    }
  
    /**
     * Sets attachment_urls
     * @param string[] $attachment_urls 
     * @return $this
     */
    public function setAttachmentUrls($attachment_urls)
    {
        
        $this->attachment_urls = $attachment_urls;
        return $this;
    }
    
    /**
     * Gets bank
     * @return string
     */
    public function getBank()
    {
        return $this->bank;
    }
  
    /**
     * Sets bank
     * @param string $bank 
     * @return $this
     */
    public function setBank($bank)
    {
        
        $this->bank = $bank;
        return $this;
    }
    
    /**
     * Gets bank_id
     * @return string
     */
    public function getBankId()
    {
        return $this->bank_id;
    }
  
    /**
     * Sets bank_id
     * @param string $bank_id 
     * @return $this
     */
    public function setBankId($bank_id)
    {
        
        $this->bank_id = $bank_id;
        return $this;
    }
    
    /**
     * Gets payer_name
     * @return string
     */
    public function getPayerName()
    {
        return $this->payer_name;
    }
  
    /**
     * Sets payer_name
     * @param string $payer_name 
     * @return $this
     */
    public function setPayerName($payer_name)
    {
        
        $this->payer_name = $payer_name;
        return $this;
    }
    
    /**
     * Gets payer_email
     * @return string
     */
    public function getPayerEmail()
    {
        return $this->payer_email;
    }
  
    /**
     * Sets payer_email
     * @param string $payer_email 
     * @return $this
     */
    public function setPayerEmail($payer_email)
    {
        
        $this->payer_email = $payer_email;
        return $this;
    }
    
    /**
     * Gets personal_identifier
     * @return string
     */
    public function getPersonalIdentifier()
    {
        return $this->personal_identifier;
    }
  
    /**
     * Sets personal_identifier
     * @param string $personal_identifier 
     * @return $this
     */
    public function setPersonalIdentifier($personal_identifier)
    {
        
        $this->personal_identifier = $personal_identifier;
        return $this;
    }
    
    /**
     * Gets bank_account_number
     * @return string
     */
    public function getBankAccountNumber()
    {
        return $this->bank_account_number;
    }
  
    /**
     * Sets bank_account_number
     * @param string $bank_account_number 
     * @return $this
     */
    public function setBankAccountNumber($bank_account_number)
    {
        
        $this->bank_account_number = $bank_account_number;
        return $this;
    }
    
    /**
     * Gets out_of_date_conciliation
     * @return bool
     */
    public function getOutOfDateConciliation()
    {
        return $this->out_of_date_conciliation;
    }
  
    /**
     * Sets out_of_date_conciliation
     * @param bool $out_of_date_conciliation 
     * @return $this
     */
    public function setOutOfDateConciliation($out_of_date_conciliation)
    {
        
        $this->out_of_date_conciliation = $out_of_date_conciliation;
        return $this;
    }
    
    /**
     * Gets transaction_id
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }
  
    /**
     * Sets transaction_id
     * @param string $transaction_id 
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        
        $this->transaction_id = $transaction_id;
        return $this;
    }
    
    /**
     * Gets custom
     * @return string
     */
    public function getCustom()
    {
        return $this->custom;
    }
  
    /**
     * Sets custom
     * @param string $custom 
     * @return $this
     */
    public function setCustom($custom)
    {
        
        $this->custom = $custom;
        return $this;
    }
    
    /**
     * Gets responsible_user_email
     * @return string
     */
    public function getResponsibleUserEmail()
    {
        return $this->responsible_user_email;
    }
  
    /**
     * Sets responsible_user_email
     * @param string $responsible_user_email 
     * @return $this
     */
    public function setResponsibleUserEmail($responsible_user_email)
    {
        
        $this->responsible_user_email = $responsible_user_email;
        return $this;
    }
    
    /**
     * Gets send_reminders
     * @return string
     */
    public function getSendReminders()
    {
        return $this->send_reminders;
    }
  
    /**
     * Sets send_reminders
     * @param string $send_reminders 
     * @return $this
     */
    public function setSendReminders($send_reminders)
    {
        
        $this->send_reminders = $send_reminders;
        return $this;
    }
    
    /**
     * Gets send_email
     * @return bool
     */
    public function getSendEmail()
    {
        return $this->send_email;
    }
  
    /**
     * Sets send_email
     * @param bool $send_email 
     * @return $this
     */
    public function setSendEmail($send_email)
    {
        
        $this->send_email = $send_email;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}
