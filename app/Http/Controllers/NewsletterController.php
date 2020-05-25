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
    public function submit(NewsletterRequest $request)
    {
        $result = Newsletter::subscribe($request->nl_email);
        return redirect()->to(url()->previous() . '#newsletter')->with('success', $result);
    }

    public function submitFooter(NewsletterRequest $request)
    {
        $result = Newsletter::subscribe($request->nlf_email);
        return redirect()->to(url()->previous() . '#newsletter')->with('success', $result);
    }
}
