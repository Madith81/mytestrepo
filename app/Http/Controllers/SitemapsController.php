<?php

/**
 * Copyright (c) 2017-present, DocsPen.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace DocsPen\Http\Controllers;

use Illuminate\Http\Response;

class SitemapsController extends Controller
{
    public function index()
    {
        return response()->view('xml.sitemap.index')
                    ->header('Content-Type', 'text/xml');
    }

    public function books()
    {
        $books = $this->entityRepo->getAllPaginated('book', 1000);

        return response()->viewview(
            'xml.sitemap.books',
            [
                'books' => $books,
            ]
        )
        ->header('Content-Type', 'text/xml');
    }

    public function users()
    {
        $users = $this->userRepo->getAllUsersPaginatedAndSorted(20, $listDetails);
        $users->appends($listDetails);

        return response()->view(
            'xml.sitemap.users',
            [
                'users' => $users,
                'listDetails' => $listDetails
            ]
        )
        ->header('Content-Type', 'text/xml');
    }
}
