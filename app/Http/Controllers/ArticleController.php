<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {

//        $articles = Article::paginate();
        $wordForSearching = $request->input('wordForSearching');
        $articles = ($wordForSearching) ? Article::where('name', '=', "$wordForSearching")->get() : Article::all();
        return view('article.index', compact('articles', 'wordForSearching'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    public function team()
    {
        return view('article.team');
    }

    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    public function store(Request $request)
    {
        // Проверка введённых данных
        // Если будут ошибки, то возникнет исключение
        // Иначе возвращаются данные формы
        $data = $this->validate($request, [
            'name' => 'required|unique:articles',
            'body' => 'required|min:100',
//            'state' => 'in:draft,published'

        ]);

        $article = new Article();
        // Заполнение статьи данными из формы
        $article->fill($data);
        // При ошибках сохранения возникнет исключение
        $article->save();

        // Редирект на указанный маршрут
        return redirect()
            ->route('articles.index');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $data = $this->validate(
            $request,
            [
                'name' => 'required|unique:articles,name,' . $article->id,
                'body' => 'required|min:100'
            ]
        );
        $article->fill($data);

        $article->save();

        return redirect()
            ->route('articles.index');
    }
}
