<?php

namespace Model;

class Company extends \Orm\Model {
    protected static $_table_name = 'company';
    protected static $_properties = array('id', 
                                          'corporateName',
                                          'tradingName',
                                          'CNPJ',
                                          'created_at',
                                          'updated_at' );


  protected static $_observers = array(
    'Orm\\Observer_CreatedAt' => array(
        'events' => array('before_insert'),
        'mysql_timestamp' => true,
    ), 
    'Orm\\Observer_UpdatedAt' => array(
        'events' => array('before_save'),
        'mysql_timestamp' => true,
    ),
);

protected static $_has_many = array(
    'contacts' => array(
        'key_from' => 'id',
        'model_to' => 'Model\Contact',
        'key_to' => 'company_id',
        'cascade_save' => true,
        'cascade_delete' => true,
    )
);

}