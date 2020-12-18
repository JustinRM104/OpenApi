<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function get(Request $request, $db_id, $db_accesskey) {
        function accessCheck($db_accesskey, $base_key) {
            if ($db_accesskey === $base_key) {
                return true;
            } return false;
        }

        function retrieveAssignedData($baseDetails) {
            $dataFound = DB::select('select * from data where base_id = :id', ['id' === $baseDetails->generated_id]);
            return $dataFound;
        }

        $retrievedData = NULL;

        $baseDetails = DB::table('bases')->where('generated_id', $db_id)->first();

        if (isset($baseDetails)) {
            if (accessCheck($db_accesskey, $baseDetails->generated_accesskey)) {
                $retrievedData = retrieveAssignedData($baseDetails);
            }
        }

        return [ // This is for visual purposes only.
            "Target Database" => $db_id,
            "Database Accesskey" => $db_accesskey,
            "Database Found" => isset($retrievedData),
            "Retrieved Data" => $retrievedData,
        ];
    }
}
