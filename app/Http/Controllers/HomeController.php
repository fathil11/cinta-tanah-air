<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

use App\Article;
use App\ArticleCategory;
use Html2Text\Html2Text;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showHome()
    {
        $article = Article::find(1);
        $tny_art = new Html2Text($article->article);
        dd($tny_art);
        return view('home.home');
    }

    public function catStat()
    {
        $category_set = ['budaya', 'pemberdayaan', 'pendidikan', 'sosial', 'hukum'];

        foreach ($category_set as $cat_srch) {
            $cat_stat[$cat_srch] = count(ArticleCategory::where('category', $cat_srch)->get());
        }

        return $cat_stat;
    }

    public function showBerita()
    {
        $articles = Article::where([['type', 'berita'], ['status', 1]])->paginate(1);
        $cat_stat = $this->catStat();
        return view('home.berita', ['category' => 'Terkini', 'cat_stat' => $cat_stat, 'articles' => $articles]);
    }

    public function showBeritaCategory($category)
    {

        $articles = Article::where([['type', 'berita'], ['status', 1]])->whereHas('category', function (Builder $query) use ($category) {
            $query->where('category', $category);
        })->paginate(1);
        $cat_stat = $this->catStat();
        return view('home.berita', ['category' => $category, 'cat_stat' => $cat_stat, 'articles' => $articles]);
    }

    public function openArticle($slug)
    {
        $article = Article::where('slug', $slug)->first();
        $cat_stat = $this->catStat();
        return view('home.openArtikel', ['article' => $article, 'cat_stat' => $cat_stat]);
    }

    public function showBertutur()
    {
        $cat_stat = $this->catStat();
        return view('home.bertutur');
    }

    public function showProfil()
    {
        $cat_stat = $this->catStat();
        return view('home.profil', ['cat_stat' => $cat_stat]);
    }

    /// Logout Function
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
