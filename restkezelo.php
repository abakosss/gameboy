
<?php
class RestKezelo {
    private $httpVersion = "HTTP/1.1";
    public function sethttpFejlec($statusKod): void {
        $statusUzenet = $this -> gethttpStatusUzenet (statuskod: $statuskod);

        header (header: $this->httpVersion." ". $statuskod." ". $statusUzenet);
        header (header: "Content-Type: Application/json");
    }

    public function gethttpStatusUzenet ($statuskod): string{
        $httpStatus = array(
            200 => 'OK',
            400 => 'Bad Request',
            404 => 'Not Found');
        return ($httpStatus [$statuskod]);
    }
}

?>