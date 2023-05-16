<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Result extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();

        $this->load->model('product_model');
        // if($this->session->userdata('role') != 'admin' || $this->session->userdata('role') != 'company'){
        //     redirect(base_url());
        // }
    }
    public function index()
    {
        $post = $this->input->post();
        $data['post'] = json_encode($post);
        // $request = $this->constructRequest($post);

        // $response = $this->sendRequest($request);


        // if ($response["result"] == null) {
        //     $this->writeErrorLog($response["error"], $request);
        //     $response["result"] = $this->getRandomProductIds(100);
        // }

        // $listOfProducts  = $this->product_model->get_products_by_ids($response["result"], base_url());

        // $listOfProducts = $this->formatPrice($listOfProducts);


        // $data["listOfProducts"] = json_encode($listOfProducts);

        $this->load->view('partials/header');
        // $this->load->view('result/result', $data);
        $this->load->view('result/result', $data);
        $this->load->view('partials/footer');
    }


    public function getproducts()
    {

        $post = $this->input->post();

        $request = $this->constructRequest($post);

        $response = $this->sendRequest($request);


        if ($response["result"] == null) {
            // $this->writeErrorLog($response["error"], $request);
            $response["result"] = $this->getRandomProductIds(100);
        }

        $listOfProducts  = $this->product_model->get_products_by_ids($response["result"], base_url());

        $listOfProducts = $this->formatPrice($listOfProducts);


        $data = array(
            "listOfProducts" =>  json_encode($listOfProducts),
            "status" => 200,
        );


        echo json_encode($data);
    }

    private function getRandomProductIds($num_total)
    {
        $numbers = array(); // create an empty array to store the generated numbers
        while (count($numbers) < 30) {
            $numbers[] = rand(1, $num_total); // generate a random number between 1 to 30 and store it in the array
            $numbers = array_unique($numbers); // remove any duplicates from the array
        }
        return $numbers; // output the array of generated numbers
    }

    private function writeErrorLog($error, $input)
    {
        $currentDateTime = date('Y-m-d H:i:s');

        $data = array(
            "error" => $error,
            "input" => $input,
            "time" => $currentDateTime,
        );

        // Encode the data to JSON format
        $jsonData = json_encode($data);

        // Set the path and filename of the output file
        $filePath = __DIR__ . '/../logs/errorLog.json'; // construct the file path

        // Check if the file exists, if not create it
        if (!file_exists($filePath)) {
            $fileHandle = fopen($filePath, 'w'); // create the file for writing
            if (!$fileHandle) {
                // handle error if the file could not be created
                echo 'Failed to create file for writing';
            } else {
                // close the file handle
                fclose($fileHandle);
            }
        }

        // open the file for appending
        $fileHandle = fopen($filePath, 'a');
        if (!$fileHandle) {
            // handle error if the file could not be opened
            echo 'Failed to open file for writing';
        } else {
            // write data to the file
            fwrite($fileHandle, $jsonData . "\n");
            // close the file handle
            fclose($fileHandle);
        }
    }

    private function formatPrice($datas)
    {
        foreach ($datas as &$data) {
            $data["price"] = number_format($data["price"]);
        }
        return $datas;
    }

    private function sendRequest($request)
    {
        $url = 'https://carihadiah.et.r.appspot.com/recommend_products';
        // $data = array(
        //     "for_who" => "teman-kerja",
        //     "gender" => "perempuan",
        //     "event" => "ulang-tahun",
        //     "age" => 20,
        //     "weekend_activity" => "masih-kerja-lembur",
        //     "fashion_taste" => "casual",
        //     "content_type" => "apa-saja",
        //     "personality" => "introvert",
        //     "total_item_to_return" => 30
        // );
        $payload = json_encode($request);

        // Set CURL options
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        $timeout = 10; // Adjust this value as needed
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);

        // Send the request and get the response
        $result = curl_exec($ch);

        // Check for errors
        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
            // handle the error
            print_r($error_msg);
        }

        // Close the request
        curl_close($ch);

        // Decode the JSON response
        $data = json_decode($result, true);

        if (isset($data['recommended_product_ids'])) {
            $recommended_products = $data['recommended_product_ids'];

            $infoLog = array(
                "response" => $recommended_products,
                "input" => $request,
            );

            $jsonLog = json_encode($infoLog);

            $infoMessage = "[LOG_INFO]".$jsonLog;
            
            error_log($infoMessage);

            return array(
                'result' => $recommended_products,
                'error' => null
            );
        } else {
            $error = "";
            if (isset($data['error'])) {
                $error = $data["error"];
            } else {
                $error = "error not found";
            }

            $errorLog = array(
                "error" => $error,
                "input" => $request,
            );

            $jsonError = json_encode($errorLog);

            $errorMessage = "[LOG_ERROR]".$jsonError;

            error_log($errorMessage);

            return array(
                'result' => null,
                'error' => $error
            );
        }
    }

    private function constructRequest($post)
    {
        // for_who, gender, age, event, weekend_activity, fashion_taste, content_type, personality
        return array(
            'for_who' => $post['for_who'],
            'gender' => $post['gender'],
            'age' => $this->validateAge($post['age']),
            'event' => $post['event'],
            'weekend_activity' => $post['weekend_activity'],
            'personality' => $post['personality'],
            'total_item_to_return' => 30,
            'fashion_taste' => $post['fashion_taste'],
            'content_type' => $post['content_type'],
        );
    }

    protected function validateAge($age)
    {
        // '10', '20', '30', '40', '50'

        switch (true) {
            case $age <= 15:
                return 10;
            case $age <= 25:
                return 20;
            case $age <= 35:
                return 30;
            case $age <= 45:
                return 40;
            case $age <= 55:
                return 50;
            default:
                // handle the case when the age is not in any of the above ranges
                return 50;
        }
    }
}
