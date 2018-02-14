<?php

/**
 * Copyright (c) 2017-present, DocsPen.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace DocsPen\Http\Controllers;

class OthersController extends Controller
{
    // Pages
    public function about()
    {
        return view('others.about');
    }

    public function humans()
    {
        return redirect('/about');
    }

    public function terms()
    {
        return view('others.terms');
    }

    public function swags()
    {
        return view('others.swags');
    }

    public function hello()
    {
        return view('others.hello');
    }

    public function radio()
    {
        return view('others.radio');
    }

    public function radiofeed()
    {
        return view('others.radio-feed');
    }

    // Return Success if Contact Message Sent
    public function success()
    {
        return view('others.success');
    }

    // ToDos on Trello Kanban
    public function trello()
    {
        return redirect('https://trello.com/b/nUennIKj');
    }

    // Source code on GitLab
    public function git()
    {
        return redirect('https://gitlab.com/DocsPen/Platform');
    }

    // Blog on Tumblr
    public function blog()
    {
        return redirect('https://docspen.tumblr.com');
    }

    // Status Page
    public function status()
    {
        return redirect('https://stats.uptimerobot.com/jZDKmIREm');
    }

    // Contact Page
    public function contact()
    {
        return view('others.contact');
    }

    // For Status used for checking Hearbeat of Server
    public function ping()
    {
        return 'pong';
    }

    // Robots.txt
    public function robots()
    {
        return response()->view('others.robots')
                    ->header('Content-Type', 'text/plain');
    }

    // Manifest.json
    public function manifest()
    {
        return response()->view('others.manifest')
                    ->header('Content-Type', 'application/json');
    }

    // Loader IO
    public function loaderio()
    {
        return response('loaderio-e44f220977ee69b24892b4be8884c377', 200)
                    ->header('Content-Type', 'text/plain');
    }

    // Open Search
    public function opensearch()
    {
        return response()->view('xml.opensearch')
                    ->header('Content-Type', 'text/xml');
    }
}
