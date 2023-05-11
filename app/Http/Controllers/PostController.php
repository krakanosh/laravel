<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        Post::all();
        $posts = Post::where([
            ['is_published', '=', 1]
        ])->get();
        return view('post.index', compact('posts'));
    }
    public function create() {
        return view('post.create');
    // $postsArr = [
    //     [
    //         'title'=> 'Руководство по JavaScript, часть 1: первая программа, особенности языка, стандарты',
    //         'content'=> 'Программа, которую по традиции называют «Hello, world!», очень проста. Она выводит куда-либо фразу «Hello, world!», или другую подобную, средствами некоего языка. JavaScript — это язык, программы на котором можно выполнять в разных средах. В нашем случае речь идёт о браузерах и о серверной платформе Node.js. Если до сих пор вы не написали ни строчки кода на JS и читаете этот текст в браузере, на настольном компьютере, это значит, что вы буквально в считанных секундах от своей первой JavaScript-программы. Для того чтобы её написать, если вы пользуетесь Google Chrome, откройте меню браузера и выберите в нём команду Дополнительные инструменты > Инструменты разработчика. Окно браузера окажется разделённым на две части. В одной из них будет видна страница, в другой откроется панель с инструментами разработчика, содержащая несколько закладок. Нас интересует закладка Console (Консоль). Щёлкните по ней. Не обращайте внимания на то, что уже может в консоли присутствовать (для её очистки можете воспользоваться комбинацией клавиш Ctrl + L). Нас сейчас интересует приглашение консоли. Именно сюда можно вводить JavaScript-код, который выполняется по нажатию клавиши Enter. Введём в консоль следующее:',
    //         'category'=> 'javascript',
    //         'image'=> 'https://w7.pngwing.com/pngs/503/848/png-transparent-javascript-computer-icons-software-developer-cascading-style-sheets-javascript-logo-angle-text-rectangle.png',
    //         'likes'=> '20',
    //         'is_published'=> '1',
    //     ]
    // ];
    // foreach ($postsArr as $item) {
    //     Post::create($item);
    //     }
    }

    public function store() {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post) {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post) {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post) {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

    public function delete() {
        $post = Post::withTrashed()->find(2);
        $post->restore();
        echo "пост удален";
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('post.index');
    }

    // public function update() {
    //     $post = Post::find(1);
    //     $post->update([
    //         'content'=>"никак аххахахаххахаххахахахаххаха"
    //     ]);
    //     echo "Пост обновлен";
    // }
    // public function delete() {
    //     $post = Post::find(4);
    //     $post->delete();
    //     echo "пост удален";
    // }
    // public function restore() {
    //     $post = Post::withTrashed()->find(1);
    //     $post->restore();
    //     echo "пост восстановлен";
    // }
    // public function firstOrCreate() {
    //     $post = Post::firstOrCreate([
    //         'title'=>"test 2"
    //     ],[
    //         'title'=>"test 2",
    //         'content'=>"test content 2",
    //         'category'=>"test",
    //         'image'=>"image",
    //         'likes'=>10
    //     ]);
    //     echo $post->content;
    // }
    // public function updateOrCreate() {
    //     $post = Post::updateOrCreate(
    //         [
    //         'title'=>"Новейшие роботы и технологии будущего: все новости технологий за 2021 в одном выпуске!"
    //     ],[
    //         'title'=>"Новейшие роботы и технологии будущего: все новости технологий за 2021 в одном выпуске!",
    //         'content'=>"content2222",
    //         'category'=>"124",
    //         'image'=>"image",
    //         'likes'=>1000
    //     ]);
    //     echo $post->content;
    // }
}
?>