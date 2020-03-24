<?php
/**
 * Created by PhpStorm.
 * User: appen
 * Date: 2020/3/24
 * Time: 8:40
 */

namespace Oceanus\OceanusunitLaravel\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class OceanusunitController extends Controller
{
    public function index() {
        return view('ocunit::index');
    }

    public function store(Request $request) {
        $namespace = $request->input('namespace');
        $className = $request->input('className');
        $action    = $request->input('action');
        $param     = $request->input('param');
        $class     = ($className == "") ? $namespace : $namespace . '\\' . $className;
        // 要提换的值 需要的结果
        $class  = str_replace("/", "\\", $class);
        $object = new $class();
        $param  = ($param == "") ? [] : explode('|', $param);
        $data   = call_user_func_array([$object, $action], $param);
        return (is_array($data)) ? json_encode($data) : dd($data);
    }
}