<?php
class Geometory extends AppModel {

    public function beforeSave($options = array()) {
        $lat = $this->data['Geometry']['lat'];
        $lng = $this->data['Geometry']['lng'];

        $latlng = $this->query("SELECT GeomFromText('POINT($lng $lat)') as latlng");
        $this->data['Geometry']['latlng'] = $latlng[0][0]['latlng'];

        return true;
    }

    public $virtualFields = array(
        'lng' => 'X(latlng)',
        'lat' => 'Y(latlng)',
        'length' => "GLength(GeomFromText(CONCAT('LineString(35 135,', X(latlng), ' ', Y(latlng),')')))"
    );

}