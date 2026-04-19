<?php
include_once(__DIR__ . '/../models/Layout.php');

class LayoutController {
    private $layout;

    public function __construct($db) {
        $this->layout = new Layout($db);
    }

    public function saveLayout($data) {
        if ($this->layout->save($data)) {
            echo json_encode(["message" => "Saved"]);
        } else {
            echo json_encode(["message" => "Error"]);
        }
    }

    public function getLayout() {
        $result = $this->layout->getLatest();
        echo $result['data'];
    }
}
?>