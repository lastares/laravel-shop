<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use function response;
use Throwable;

class InternalException extends Exception
{
    public $msgForUser;
    public function __construct(string $message = "", string $msgError = '系统内部错误', int $code = 500)
    {
        parent::__construct($message, $code);
        $this->msgForUser = $msgError;
    }

    public function render(Request $request)
    {
        if($request->expectsJson()) {
            return response()->json(['msg' => $this->msgForUser], 500);
        }

        return view('pages.error', ['msg' => $this->msgForUser]);
    }

}
