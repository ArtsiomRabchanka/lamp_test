<?php

Class getCountry {

    public $phone_number;
    public $country_name;

    public function __construct($post_data) {
        $this->phone_number = $post_data['phone_number'];
    }

    public static function getCounryCodes() {
        $url = 'https://cdn.jsdelivr.net/gh/andr-04/inputmask-multi@master/data/phone-codes.json';
        $json = file_get_contents($url);
        $jo = json_decode($json);
        return $jo;
    }

    public function searchForCode() {
        $jo = self::getCounryCodes();
        $clear_phone_number = str_replace(str_split('+#()-" "'), '', $this->phone_number);
        foreach($jo as $item) {
            $country_code_from_mask = str_replace(str_split('+#()-" "'), '', $item->mask)."\n";
            if(str_starts_with(trim($clear_phone_number), trim($country_code_from_mask))) {
                $this->country_name = $item->name_en;
            }
        }
    }

    public function get_country() {
        if(isset($_POST['phone_number'])) {
            $this->searchForCode();
        }
        return $this->country_name;
    }
}