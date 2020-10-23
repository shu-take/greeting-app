<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function list()
    {
        $lists = array (
            'morning' => array (
                'title' => '朝の挨拶',
                'contens' => 'おはようございます'
            ),
            'afternoon' => array (
                'title' => '昼の挨拶',
                'contens' => 'こんにちは'
            ),
            'evening' => array (
                'title' => '夕方の挨拶',
                'contens' => 'こんばんは'
            ),
            'night' => array (
                'title' => '夜の挨拶',
                'contens' => 'おやすみ'
            )
        );
        return $lists;
    }

    public function show($greeting)
    {
        $lists = $this->list();
        foreach ($lists as $key => $value) {
            if ($key == $greeting) {
                $result = $value;
            }
        }
        if (empty($result)) {
            $result['title'] = 'エラー';
            $result['contens'] = 'エラー';
        }
        return view('greeting.show', ['result' => $result]);
    }

    public function random(){
        $lists = $this->list();
        $result['title'] = 'ランダムなメッセージ';
        $result['contens'] = $lists[array_rand($lists)]['contens'];;
        return view('greeting.show', ['result' => $result]);
    }

    public function free($freeword)
    {
        $result['title'] = '自由なメッセージ';
        $result['contens'] = $freeword;
        return view('greeting.show', ['result' => $result]);
    }
}
