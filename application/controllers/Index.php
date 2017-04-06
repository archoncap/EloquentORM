<?php

use Illuminate\Database\Capsule\Manager as DB;

class IndexController extends AbstractController
{

    // 默认Action
    public function indexAction()
    {

		echo "index";
	/* 	dumpa($_SESSION);
		$user = DB::table('users')->where('username', 'molaifeng1')->first();
        dumpa($user);
		dumpa(Yaf_Application::app()->getConfig()->application); */
		
/* 		dumpa(config('database.username'));
		$config = Yaf_Application::app()->getConfig()->application->view->ext;
		echo $config;
		$tpl = "index";
		$suffix = strpos($tpl,'.html')!==false?"":'.html';
		echo $suffix;
		
       DB::table('users')->chunk(100, function($users)
       {

           foreach ($users as $user)
           {
               echo $user['username'];
           }
           return false;
       });

       $name = DB::table('users')->lists('username', 'email');
       print_r($name);

       $users = DB::table('users')->select('username as name', 'email')->get();
       print_r($users);

       $admin = DB::table('users')
               ->whereIdAndEmail(2, 'john@doe.com')
               ->first();
       print_r($admin);

       try {
           DB::beginTransaction();
           $users = DB::table('users')
                       ->select('username as name', 'email')
                       ->where('username', 'molaifeng')
                       ->orwhere('username', 'overtrue')
                       ->get();
           DB::commit();
           //echo print_r(DB::getQueryLog(), 1);
       } catch (Exception $e) {
           echo $e->getMessage();
       }



       DB::table('users')->insert([
           array('username' => 'molaifen'.rand(1,9999999999),  'email' => 'ar_'.rand(1,9999999999).'@qq.com')
       ]); 
 */
		$user = new UserModel();

/* 		$users = UserModel::all()->toArray();
		dumpa($users); */

/* 		$ka = $user->getinfo(); */
	//	dumpa($ka);
		$users = UserModel::where('id', '>', 1)->limit(10)->get()->toArray();
		dumpa($users);
		$count = UserModel::where('id', '>', 1)->count();
		echo $count;
	//	dumpa($user);
/* 		$users = UserModel::whereRaw('id < ? and id > 1', [22])->take(10)->get()->toJson();
		dumpa($users); */

		
/* 		UserModel::chunk(10, function($users)
		{
			foreach ($users as $user)
			{
				dumpa($user->toArray());
			}
		}); */
		

		$this->getView()->assign("content", "Hello World");
        $this->getView()->display('layout/index.html');
    }

}






















