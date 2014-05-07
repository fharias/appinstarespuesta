<?php

App::uses('AppModel', 'Model');

/**
 * Image Model
 *
 */
class Image extends AppModel {

    var $actsAs = array(
        'MeioUpload.MeioUpload' => array('filename')
    );

}
