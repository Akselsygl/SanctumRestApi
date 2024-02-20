<?php

namespace App\Traits;

trait HttpResponses{
    protected function success($data,$message=null,$code=200)
    {
        return response()->json([
            'data'=>$data,
            'message'=>$message,
            'status'=>'Request was successfully.',
        ],$code);
    }

    protected function error($data,$message=null,$code)
    {
        return response()->json([
            'data'=>$data,
            'message'=>$message,
            'status'=>'Error has occured...',
        ],$code);
    }
}
