<?php

    namespace App\Traits;
    use Illuminate\Http\Response;
    trait ApiResponser{

    
    protected function createSuccess($data){
        return response()->json(['data' => $data, 'Message' => 'Created successfully.']);
    }
    protected function updateSuccess($data)
    {
        return response()->json(['data' => $data, 'Message' => 'Update successfully.']);
    }

    protected function deleteSuccess($data)
    {
        return response()->json(['data' => $data, 'Message' => 'Delete successfully.']);
    }

    protected function successResponse($data, $code = Response::HTTP_OK)
    {
        return response()->json(['data'=>$data, 'Site' => 2],$code);
    }

    protected function errorResponse($message,$code)
    {
        return response()->json(['error'=>$message,'Site' => 2,'code'=>$code],$code);
    }
}


?>