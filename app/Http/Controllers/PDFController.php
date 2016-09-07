<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use PDF;

class PDFController extends Controller {

    public function article($id) {

        $article = Article::findOrFail((int) $id);
        $pdf = PDF::loadView('pdf.news', ['news' => $article]);
        return $pdf->download(str_replace(' ', '', $article->title) . '.pdf');
    }

}
