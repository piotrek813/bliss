<?php 

namespace App\Controllers;

use App\Controller;

class PageController extends Controller
{
    public function index()
    {
        $slug = $_SERVER['REQUEST_URI'];

        // Make HTTP request to admin API
        $url = ADMIN_API_URL . "/content?slug=" . $slug;
        $response = file_get_contents($url);
        
        if ($response === false) {
            throw new \Exception("Failed to fetch page data");
        }

        // Decode JSON response
        $pageData = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception("Invalid JSON response");
        }

        return $this->render('index', $pageData['data']);
    }
}
