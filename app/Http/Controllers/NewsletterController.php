<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsletterRequest;
use Newsletter;

class NewsletterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(NewsletterRequest $request)
    {
        $result = Newsletter::subscribe($request->email);

        return redirect()->to(url()->previous() . '#newsletter')->with('success', $result);

    }
}
