<?php

namespace Model;

class Contact extends \Orm\Model {
    protected static $_table_name = 'contact';
    protected static $_properties = array('id',
                                          'company_id', 
                                          'name',
                                          'last_name',
                                          'phone_number',
                                          'email',
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

protected static $_belongs_to = array(
    'company' => array(
        'key_from' => 'company_id',
        'model_to' => 'Model\Company',
        'key_to' => 'id',
        'cascade_save' => true,
        'cascade_delete' => false,
    )
);

}