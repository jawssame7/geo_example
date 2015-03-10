<?php

/**
 * Class GeometriesController
 * @property Geometory $Geometory
 */
class GeometriesController extends AppController {

    public $uses = [
        'Geometory'
    ];

    public function index() {

        var_dump($this->Geometory->hasField("lng"));

        $geo = $this->Geometory->find(
            'all'
        );

        var_dump($geo);

        $this->set('geo', $geo);
    }

    public function get_geo() {
        $geo = $this->Geometory->find(
            'all',
            array(
                'fields' => array(
                    // ここを変える
                ),
                'order' => array(
                    'let' => 'ASC'
                ),
            )
        );
    }
}