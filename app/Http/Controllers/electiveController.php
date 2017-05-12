<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment_info;
use Carbon\Carbon;

class electiveController extends Controller
{
    public function index()
    {
        $total = comment_info::all()->count();
        $info = comment_info::paginate(5);
        return view('elective/index', compact('info', 'total'));
    }


    public function store(Request $request)
    {
        $input = $request -> all();
        comment_info::create($input);
        return redirect('/elective/index');
    }


    public function search(Request $request)
    {
        $search_text = $request -> get('search_text');
        if(isset($_POST['select']))
            {$select = $_POST['select'];}
        else
            {$select = $request -> get('select');}

        $single = array();
        for($i = 0; $i <= mb_strlen($search_text); $i++)
        {
            array_push($single, mb_substr($search_text, $i, 1, 'utf-8'));
        }
        if(isset($_GET['str']))
            {$str = $_GET['str'];}
        else
            {$str = '%'.implode('%', $single);}

        if($select == 'class')
            $result = comment_info::where('cname', 'like', $str)->get();
        else
            $result = comment_info::where('tname', 'like', $str)->get();

        $total = $result -> count();
        if($select == 'class')
            $info = comment_info::where('cname', 'like', $str)->paginate(5);
        else
            $info = comment_info::where('tname', 'like', $str)->paginate(5);
        return view('elective/search', compact('info', 'total', 'select', 'str'));
    }

    public function about()
    {
        return view('elective/about');
    }   
}
