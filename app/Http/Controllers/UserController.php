<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login');
    }


//////////////////////////////////////////////////////////

     public function loginstore(Request $request)
    {
        if (Auth::attempt([
            'phone' => $request->phone,
            'password' => $request->password,
        ])){
            $user=Auth::user();
            $now = date('Y-m-d H:i:s');//Текушее время
            $user->update(['last_online_at'=>$now]);
            return redirect()->route('addonates.index');
            }
            Alert::warning('Введен неправилный логин или пароль');
            return redirect()->back();
    }
//////////////////////////////////////////////////////////

    public function registration()
    {
        return view('auth.register');
    }

///////////////////////////////////////////////////////////

    public function registrationstore(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'surname'=> 'required',
            'phone' => 'required | numeric | unique:users',
            'email'=> 'unique:users',
            'password'=> 'confirmed',
        ]);
        if ($request->group_id == '--- Выберите группу ---') {
            Alert::warning('Выберите группу, к которой хотите присоединиться');
            return redirect()->back();
        }
        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        //$name = $user->name;
        //$surname = $user->surname;
        //$group = $user->gr_name;
       // $token = "5192338294:AAFc_eK3HynL4xAKoAaz4IQvyW3-woCc6PE";
       // $chat_dehot = "-1001572433920"; //Для того чтобы узнать ИД чата переходим по ссылке и вводим ИД бота https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates
        //$pending = urlencode("<a href='http://dehot.gaja.tj/pendings/create'>ССЫЛКЕ</a>");
       // $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_dehot}&parse_mode=html&text=В Группе <b>$group</b> зарегистрирован новый пользователь <b>$name   $surname.</b> Администратор данной группы просьба перейты по <b>$pending  👈 </b> для подтверждение регистрации 🙏", "r");
         //if($sendToTelegram) {
       //     Alert::success('Регистрация прошла успешно. Введите логин ипарол для авторизации');
      //      return redirect()->route('login'); //Агар хохем ки сахифаи авторизация ба направит кунад
       // } else {
       //    Alert::warning('Поторите действия позже!!!');
           return redirect()->route('login');
        }
   // }

//////////////////////////////////////////////////////////

    public function showForgetPasswordForm()
    {
        return view('auth.forgot-password');
    }
 
//////////////////////////////////////////////////////////

     public function logout()
    {
        Auth::logout();
        return redirect()->route('home.page');
    }

///////////////////////////////////////////////////////////
   
   public function index(Request $request)
    { 
        $search = $request->input('search');
        $users = User::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->orWhere('surname', 'LIKE', "%{$search}%")
        ->orWhere('phone', 'LIKE', "%{$search}%")
        ->get();
        if (Auth::user()->status == 1) {
            return view('user.pending');
        }
        return view('user.index',compact('users'));
    }

///////////////////////////////////////////////////////////


  public function edit($id)
    {
        $useredit = User::find($id);
        $roles = Role::all();
        $groups = Group::all();
        $stats = Status_user::all();
        if (Auth::user()->role_id == 1 && Auth::user()->id !== $useredit->id || Auth::user()->group_id !== $useredit->group_id) {
            Alert::warning('Доступ к  данной странице ограничено!!!');
            return redirect()->back();
        }
        if (Auth::user()->status == 1) {
            return view('user.pending');
        }
        return view('user.profile',compact('useredit','roles','groups', 'stats'));
    }

///////////////////////////////////////////////////////////    

     public function update(Request $request)
    {
        
        $data=User::find($request->id)->update($request->all());
        $user = User::find($request->id);
        $gr_name = $user->group_name->name;
        $user->update(['gr_name'=>$gr_name]);
        Alert::success('Операция выполнено успешно');
        return redirect('users');
    }

///////////////////////////////////////////////////////////  

}
