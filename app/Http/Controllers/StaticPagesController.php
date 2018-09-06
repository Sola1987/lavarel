<?php
// php artisan make:controller StaticPagesController -> create a controller through command

namespace App\Http\Controllers;   // namespace 代表的是 命名空间，这是在 PHP 5.3 之后才加入的语言特性; 可以把命名空间理解为文件路径，把变量名理解为文件。当我们在不同路径分别存放了相同的文件时，系统就不会出现冲突。

use Illuminate\Http\Request;      // 我们用 use 来引用在 PHP 文件中要使用的类，引用之后便可以对其进行调用。

class StaticPagesController extends Controller
{
  public function home()
  {
      return view('static_pages/home');
  }

  public function help()
  {
     return view('static_pages/help');
  }

  public function about()
  {
      return view('static_pages/about');
  }
}
