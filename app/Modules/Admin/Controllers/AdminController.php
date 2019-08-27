<?php
/**
 * Created by PhpStorm.
 * User: phatlv
 * Date: 2019-08-25
 * Time: 13:08
 */

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        return view('Admin::index');
    }
}
