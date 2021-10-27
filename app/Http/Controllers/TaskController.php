
<?php

use Illuminate\Routing\Controller;

use App\Http\Controllers;

class TaskController extends Controller
{

    public function index()
    {

        $tasks = [

            "task_1" => 'do you have manneger',
            "task_2" => 'do you have manneger',
            "task_3" => 'do you have manneger'
        ];

        return view('/contact', compact('tasks'));
    }

    // ***********************

    public function send_name()
    {
        $name = $_REQUEST['name'];

        return view('about', compact('name'));
    }

    // *********************

    public function show_name()
    {
        $name = 'mohammed';
        $age = 25;

        return view('about', compact('name', 'age'));
    }
}
?>
